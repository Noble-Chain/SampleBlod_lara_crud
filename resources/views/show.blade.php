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
                                <h1 class="mb-0">Post Details</h1>
                               
                            </div>
                            <div class="">
                                <a href="{{ route('post.index') }}" class="btn btn-outline-info">Home </a>
                            </div>
                        </div>
                    </div>
                </div>

                
                    
                
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title"> {{ $post->title }} </h3>
                        <p class="card-text text-black-50 mb-1"> {{ $post->created_at }}</p>

                        <p class="card-text"> {{ $post->description }}</p>
                        
                    </div>
                </div>

            
            </div>
        </div>
    </div>
</div>



@endsection