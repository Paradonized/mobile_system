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


    <div class="form-group">
        <h2 style="margin-bottom: 10px; margin-left:10px">Search</h2>
        <form action="{{ route('phones') }}" method="GET" role="search">    
        <input type="text" class="form-control mr-2" name="term" placeholder="Search for a phone by name or by year of release..." id="term">
    	    <div style="margin:15px 10px 0px">
                <button class="button primary icon solid fa-search" type="submit" title="Search phones">
                    <span class="">Search</span>
                </button>
                <a href="{{ route('phones') }}"></a>
                    <button class="button icon solid fa-sync-alt" type="button" title="Refresh page" style="margin-left:10px">
                        <span class="">Refresh</span>
                    </button>
                </a>   
            </div>
        </form>
    </div>

    <div class="row">
        @foreach ($phones as $phone)
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