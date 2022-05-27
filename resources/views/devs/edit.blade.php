@extends('common.layout')

@section('title')
    <title>Edit - page</title>
@endsection

@section('content')
    <div class="container">
        <div class="mx-auto">
            <p class="text-center header-text">Post Toevoegen</p>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-full">
                    <div class="content">
                        <div class="column">

                            <form class="row g-3 is-validated" method="POST" action="{{ route('posts.update', $post) }}">
                                @csrf
                                @method('PUT')

                                <div class="col-md-12">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label fw-bold" for="title">Titel*</label>
                                        <p>* = verplicht</p>
                                    </div>

                                    <div>
                                        <input class="form-control @error('title') is-invalid @enderror"
                                               type="text" name="title" id="title"
                                               value="{{ $post->title }}" required>
                                    </div>
                                    @error('title')
                                    <div class="alert alert-danger" style="color: red">Titel ongeldig</div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label fw-bold" for="body">Post</label>

                                    <div>
                                        <input class="form-control @error('body') is-invalid @enderror"
                                               type="text" name="body" id="body"
                                               value="{{ $post->body }}">
                                    </div>
                                    @error('body')
                                    <div class="alert alert-danger" style="color: red">Post ongeldig</div>
                                    @enderror
                                </div>

                                <div hidden>
                                    <div>
                                        <input class="form-control @error('image') is-invalid @enderror"
                                               type="text" name="image" id="image"
                                               value="{{ $post->image }}">
                                    </div>
                                    @error('image')
                                    <div class="alert alert-danger" style="color: red">Afbeelding ongeldig</div>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-md-end">
                                    <div class="order-1">
                                        <div class="control">
                                            <button class="btn btn-primary submit" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger button-stoppen" type="submit">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
