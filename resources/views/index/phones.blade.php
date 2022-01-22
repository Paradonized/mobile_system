@extends('layouts.app')

@section('title')
	Phones
@endsection

@section('content')
    <section id="banner" class="style2">
		<div class="inner">
			<header class="major">
				<h1>Phones</h1>
			</header>
		    <div class="content">
				<p>Here is a list of all available phones.</p>
			</div>
		</div>
    </section>


    
    <div class="row">
        @foreach ($allPhones as $phone)
            <div class="col-4 col-12-medium box center" style="width: 360px; margin: 30px 10px 50px 40px;">
                <div class="cardtext-center">
                    <img class="card-img-top" src="{{ $phone->image }}" alt="Card image cap" style="display: block; margin-left: auto; margin-right: auto; width: 90%;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $phone->name }}</h3>
                        <p class="card-text box">Brand: {{ $phone->brand->name }} </br>
                                             Model: {{ $phone->phonemodel->name }}</br>
                                             Year: {{ $phone->year_of_release }}</p>
                        <a href="{{ route('show', $phone->id) }}" class="button icon solid fa-search fit">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
@endsection