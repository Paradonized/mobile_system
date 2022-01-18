@extends('layouts.app')

@section('content')
    
<!-- Banner -->
	<section id="banner" class="major">
		<div class="inner">
			<header class="major">
				<h1>Mobile Phone System</h1>
			</header>
			<div class="content">
				<p>A wide variety of phones, models and brands to explore! <br>
					Pick your favourite!</p>
				<ul class="actions">
					<li><a href="#two" class="button next scrolly">Get Started</a></li>
				</ul>
			</div>
		</div>
	</section>


<section id="two" class="spotlights">
	<section>
		<a href="generic.html" class="image">
			<img src="images/brands.jpg" alt="" data-position="center center" />
		</a>
		<div class="content">
			<div class="inner">
				<header class="major">
					<h3>Brands</h3>
				</header>
				<p>List of all brands.</p>
				<ul class="actions">
					<li><a href="generic.html" class="button">Learn more</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<a href="generic.html" class="image">
			<img src="images/models.jpg" alt="" data-position="top center" />
		</a>
		<div class="content">
			<div class="inner">
				<header class="major">
					<h3>Models</h3>
				</header>
				<p>List of all models.</p>
				<ul class="actions">
					<li><a href="generic.html" class="button">Learn more</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section>
		<a href="generic.html" class="image">
			<img src="images/phones.jpg" alt="" data-position="25% 25%" />
		</a>
		<div class="content">
			<div class="inner">
				<header class="major">
					<h3>Phones</h3>
				</header>
				<p>List of all mobile phones.</p>
				<ul class="actions">
					<li><a href="generic.html" class="button">Learn more</a></li>
				</ul>
			</div>
		</div>
	</section>
</section>


<div class="inner">
    <div class="content">
        <header>
            <h2>{{$title}}</h2>
        </header>
    {!! $text !!}
    </div>
</div>
@endsection