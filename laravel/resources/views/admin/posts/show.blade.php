@extends('layouts.admin')


@section('content')
<img src="{{asset('storage/' .  $post->image)}}" alt="{{$post->title}}">
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>

<a href="{{route('admin.posts.index')}}"> 
    <i class="fas fa-arrow-left fa-sm fa-fw"> Back </i>
</a>
<a href="{{route('admin.posts.edit', $post->id)}}">
    <i class="fas fa-arrow-left fa-sm fa-fw"> Edit </i>
</a>
@endsection