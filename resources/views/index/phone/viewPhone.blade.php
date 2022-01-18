@extends('layouts.app')

@section('title')
    {{ $phone->name }}
@endsection

@section('content')
    <div id="main" class="alt">
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>{{ $phone->name }}</h1>
                </header>
                ($allBrands as $brand)
                <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
                <p>Brand: {{ $phone->brand->name }}</p>
                <p>Model: {{ $phone->phonemodel->name }}</p>
                <p>Year: {{ $phone->year_of_release }}</p>
                <p>Description: {{ $phone->description }}</p>
            </div>
        </section>
    </div>
@endsection