@extends('master')

@section('title')
   Edit Blog
@endsection

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h3 class="mb-0">Edit Post</h3>
                            </div>

                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-lg btn-outline-primary"> Home</a>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('post.update', $post->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea type="text" rows="10" class="form-control" name="description">
                                    {{ $post->description }}
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-g btn-primary">Update Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection