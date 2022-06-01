@extends('master')
@section('title') 
Sample Blog | Create 
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="my-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="">
                                <h1 class="mb-0">Edit Post</h1>
                               
                            </div>
                            <div class="">
                                <a href="{{ route('post.index')}}" class="btn btn-outline-info">Home</a>
                            </div>
                        </div>

                        <form action="{{ route('post.update',$post->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Post Title</label>
                                <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Post Description</label>
                                <textarea type="text" rows="10" class="form-control" name="description">{{ $post->description }}</textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-lg btn-info">Update Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection