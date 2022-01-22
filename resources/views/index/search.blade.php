@extends('layouts.app')

@section('title')
    Search
@endsection

@section('content')
    {!!Form::open(['action'=>'SearchController@searchIndex', 'method'=>'GET'])!!}


    <select name="demo-category" id="demo-category">
																	<option value="">- Category -</option>
																	<option value="1">Manufacturing</option>
																	<option value="1">Shipping</option>
																	<option value="1">Administration</option>
																	<option value="1">Human Resources</option>
																</select>




    <div class="form-group">
        <select name="distance" id="distance" class="form-control input-lg dynamic" data-dependent="state">
            <option value="">Brand</option>
            @foreach ($allBrands as $brand)
                <option value="{{ $brand }}">{{ $brand }}</option>
            @endforeach
        </select>
        <br>

        <select name="price" id="price" class="form-control input-lg dynamic" data-dependent="state">
            <option value="">Model</option>
            @foreach ($allPhonemodels as $phonemodel)
                <option value="{{$phonemodel}}">{{$phonemodel}}</option>
            @endforeach
        </select>
        <br>

        <select name="price" id="price" class="form-control input-lg dynamic" data-dependent="state">
            <option value="">Year of release</option>
            @foreach ($allYears as $year)
                <option value="{{$year}}">{{$year}}</option>
            @endforeach
        </select>
        <br>

    </div>

    <div class="form-group">
        {{ Form::Submit('submit', ['class' => 'btn btn-primary']) }}
    </div>

    @foreach($posts as $post)
        <div class ="box">
          <div class = "container2">
            <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
              <div class= "about">
                  <p>{{ $post->About }}</p>
              </div>
                <div class="image">
                    <img src="{{$post->image}}" height = 200 width =200>
                </div>
          </div>
        </div>
        <br>
    @endforeach
@endsection