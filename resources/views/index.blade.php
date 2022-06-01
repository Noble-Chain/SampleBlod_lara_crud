@extends('master')
@section('title') 
Sample Blog | Home 
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="my-5">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h1 class="mb-0">Hello ....</h1>
                                <a href="{{route('post.create') }}" class="text-decoration-none mb-0 text-black-50">What is on your mind?</a>
                            </div>
                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-outline-info">Create Post</a>
                            </div>
                        </div>
                    </div>
                </div>

                @if(session('status'))
                    <div class="alert alert-success">{{session('status') }}</div>
                @endif

                @foreach ($posts as $post)
                    
                
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title"> {{ $post->title }} </h3>
                        <p class="card-text"> {{ Str::words($post->description, 60) }}</p>
                        <div class="d-flex justify-content-between">
                            <p>{{ $post->created_at->format('j F Y | n : i A') }}</p>
                           <div class="">
                            <form action="{{ route('post.destroy',$post->id) }}" class="d-inline-block" method="post">
                                @csrf
                                @method('delete')
                               <button class="btn btn-danger">Del</button>
                            </form>
                            <a href="{{ route('post.edit',$post->id) }}" class="btn btn-warning px-3">Edit</a>
                            <a href="{{ route('post.show',$post->id) }}" class="btn btn-info px-3">See More</a>
                           </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>



@endsection