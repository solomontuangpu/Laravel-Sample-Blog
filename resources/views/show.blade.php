@extends('master')

@section('title')
   {{ $post->title }} | Sample Blog
@endsection

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="mb-0">Hello ...</h1>
                                <p class="mb-0 text-black-50">What's on your mind?</p>
                            </div>

                            <div class="">
                                <div class="d-inline-block">
                                    <a href="{{ route('post.index') }}" class="btn btn-lg btn-outline-primary"> Home</a>
                                </div> 
    
                                <div class="d-inline-block">
                                    <a href="{{ route('post.create') }}" class="btn btn-lg btn-primary"> + Create Post</a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>

               
                    <div class="card mb-4">
                        <div class="card-body">   

                                <h4 class="card-title">{{ $post->title }}</h4>
                                <p class="card-text text-black-50">{{ $post->description }}</p>

                        </div>
                    </div>
               

            </div>
        </div>
    </div>

@endsection