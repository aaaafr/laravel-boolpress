@extends('layouts.app')

@section('content')
<h1>Vue   Posts</h1>

<div id="app">
    <div class="container d-flex flex-wrap">
        <div class="card text-left" v-for="post  in posts">
            <img :src="post.image" alt="" class="card img-top">
            <div class="card-body">
                <h3 class="card-title">
                    @{{post.title}}
                </h3>
                <p class="card-text">
                @{{post.body}}
                </p>
            </div>

        </div>
    </div>

</div>

@endsection