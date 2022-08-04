@extends('master')

@section('title')
    Create Blog
@endsection

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h3 class="mb-0">Create New Post</h3>
                            </div>

                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-lg btn-outline-primary"> Home</a>
                            </div> 
                        </div>
                    </div>
                </div>




                <div class="card">
                    <div class="card-body">

                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-lg-0">
                                    @foreach ($errors->all() as $error)
                                            <li>
                                                {{ $error }}
                                            </li>
                                    @endforeach 
                                </ul>
                            </div>
                        @endif --}}

                           

                        <form action="{{ route('post.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <input type="text" 
                                        class="form-control @error('title')is-invalid @enderror" 
                                        name="title"
                                        value="{{ old('title') }}" >

                               @error('title')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea type="text" rows="10" class="form-control @error('description')
                                    is-invalid
                                @enderror" name="description">

                                    {{ old('description') }}

                                </textarea>

                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-g btn-primary">Add Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection