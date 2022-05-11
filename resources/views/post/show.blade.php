@extends('post.layout')



@section('content')
    <div class="mt-5">
        <a class="btn bg-dark text-white" href="{{ route('post.index') }}">Back</a>

        <h1 class="display-1 text-center mt-5">{{ $post->title }}</h1>

        <p class="h6 text-center mt-5">{{ $post->description }}</p>

    </div>
@endsection
