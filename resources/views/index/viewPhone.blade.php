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
            </div>
        </section>
        <br>
        <div class="row">
            <img class="image" src="{{asset($phone->image)}}" style="margin-left:25px; width: 22%;">

            <ul class="alt" style="margin-left:15px;">
                <li>
                    <h2 style="margin-bottom:0px">Brand:</h3> 
                    <p style="margin-bottom:10px">{{ $phone->brand->name }}</p>
                </li>
                <li>
                    <h2 style="margin-bottom:0px;">Model:</h3> 
                    <p style="margin-bottom:10px">{{ $phone->phonemodel->name }}</p>
                </li>
                <li>
                    <h2 style="margin-bottom:0px;">Year of release:</h3> 
                    <p style="margin-bottom:10px">{{ $phone->year_of_release }}</p>
                </li>
                <li>
                    <a href="{{route('phones')}}" class="button icon solid fa-chevron-left fit" style="display:block;
    margin: 0 auto;" >Back to Phones</a>
                </li>
            </ul>
        </div>
        <br>   
        <div class="box" style="margin:0 25px 0;">
            <h3 style="margin-bottom:5px;">Description:</h3> 
            <p>{!! $phone->description !!}</p>
        </div>
        <br>
    </div>
@endsection