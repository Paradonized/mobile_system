@extends('layouts.app')

@section('title')
    Models
@endsection

@section('content')
    <section id="banner" class="style2">
		<div class="inner">
			<header class="major">
				<h1>Models</h1>
			</header>
			<div class="content">
				<p>Here is a list of all available models.</p>
			</div>
		</div>
    </section>

    <table class="alt">
        <thead>
            <td><strong>Name</strong></td>
            <td><strong>Brand</strong></td>
            <td><strong>Description</strong></td>
        </thead>
        <tbody>
            @foreach ($allPhonemodels as $phonemodel)
                <tr>
                    <td>{{ $phonemodel->name }}</td>
                    <td class="inner-table">{{ $phonemodel->brand->name }}</td>
                    <td class="inner-table">{{ $phonemodel->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection