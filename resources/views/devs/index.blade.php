@extends('common.layout')

@section('title')
    <title>Posts - Page</title>
@endsection

@section('content')
    <section style="margin-top: 5%">
        <div class="container">
            <a href="{{ route('posts.create') }}" class="btn btn-secondary"><i class="fa fa-external-link"></i> Create
                Post...</a>
        </div>
    </section>
    <hr>
    <section>
        <div>
            @foreach($posts as $post)
                <div class="container project-item">
                    <div class="align-items-center">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{{ $post->body }}</p>
                                        <a href="{{route('posts.show', $post)}}" class="btn btn-secondary"><i class="fa fa-external-link"></i> Zie
                                            Post...</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{route('posts.show', $post)}}">
                                        <img src="{{ $post->image }}" class="card-img" alt="Project Afbeelding">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

