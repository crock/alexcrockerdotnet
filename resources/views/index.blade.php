@extends('layouts.master')

@section('title', 'home')

@section('header')
    @parent

@endsection

@section('content')
<section id="work" class="container d-flex flex-column align-items-center justify-content-center">
	<div class="row intro">
		<h2>My Work</h2>
		<p>I am a designer first and foremost with a growing passion for all things code and technology. Moreover, I am a dreamer. I enjoy brainstorming creative solutions to everyday problems and then building them.</p>
	</div>
	<div class="row content">
		<div class="col" v-for="project in JSON.parse(this.$session.get('projects'))">
			<a :href="project.short_url">
				<img :src="project.covers[404]" alt="project image">
			</a>
		</div>
    </div>
    <p>Also check out my many repositories on <a :href="this.social.github">Github</a> for a sampling of my coding style!</p>
</section>
<section id="contact">
    <contact></contact>
</section>
@endsection