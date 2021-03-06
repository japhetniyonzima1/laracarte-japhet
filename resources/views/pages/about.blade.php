@extends('layouts.default',['title'=>'About'])

@section('content')
<div class="container">
	<h2>What is {{config('app.name')}}?</h2>
	<p>{{config('app.name')}} is a clone app of <a href="#" target="_blank">Laramap.com</a>.</p>
	<div class="row">
		<div class="col-md-6">
			<p class="alert alert-warning"> 
				<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
				<strong>
					This app has been built by <a href="#">@etsmo</a>for learning purposes.
				</strong> 
			</p>
		</div>
	</div>
	<p>Feel free to help to improve the <a href="https://github.com/japhetniyonzima1/{{config('app.name')}}-japhet" target="_blank">source code</a>.</p>
	<hr>
	<p>
		<h2>What is Laramap?</h2>
	</p>
	<p>Laramap is the website by which {{config('app.name')}} was inspired :).</p>
	<p>More info<a href=""> here</a>.</p>
	<hr>
	<p>
		<h2>Which tools and services are used in {{config('app.name')}}?</h2>
	</p>
	<p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>
	<ul>
		<li>Laravel</li>
		<li>Boostrapp</li>
		<li>Amazon S3</li>
		<li>Mandrill</li>
		<li>Google Maps</li>
		<li>Gravatar</li>
		<li>Antony Martin's Geolocation Package</li>
		<li>Michel Fortin's Markdown Parser Package</li>
		<li>Heroku</li>
	</ul>	
</div>
@stop