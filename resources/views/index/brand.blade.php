@extends('layouts.app')

@section('title')
    Brands
@endsection

@section('content')
    <section id="banner" class="style2">
		<div class="inner">
			<header class="major">
				<h1>Brands</h1>
			</header>
			<div class="content">
				<p>Here is a list of all available brands.</p>
			</div>
		</div>
    </section>
    <br>
    <table class="alt" style="padding:0 25px 0">
        <thead>
            <td><strong>Name</strong></td>
            <td><strong>Country</strong></td>
            <td><strong>Founded</strong></td>
        </thead>
        <tbody>
            @foreach ($allBrands as $brand)
                <tr>
                    <td>{{ $brand->name }}</td>
                    <td class="inner-table">{{ $brand->country }}</td>
                    <td class="inner-table">{{ $brand->founded }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
@endsection