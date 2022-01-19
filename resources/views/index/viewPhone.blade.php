@extends('layouts.app')

@section('title')
    {{ $phone->name }}
@endsection

@section('content')
    <div class="alt">
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1>{{ $phone->name }}</h1>
                </header>
                <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
            </div>
        </section>
    </div>
    <div>
    <img src="{{ $phone->image }}" alt="Card image cap" style="width: 350px">
        <p>Brand: {{ $phone->brand->name }}</p>
        <p>Model: {{ $phone->phonemodel->name }}</p>
        <p>Year: {{ $phone->year_of_release }}</p>
        <p>Description:</p> {{ $phone->description }}
    <div>

@endsection