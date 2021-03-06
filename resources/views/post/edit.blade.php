@extends('post.layout')




@section('content')
<a class="btn bg-dark text-white mt-5" href="{{ route('post.index') }}">Back</a>
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="title1" class="form-label">title</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="description1" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" id="decription" value="{{ $post->description }}">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>

    </form>
@endsection
