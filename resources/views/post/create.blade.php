@extends('post.layout')


@section('content')


<form class="mt-5" action="{{ route('post.store') }}" method="post">
    @csrf
        <div class="mb-3">
          <label for="title1" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title1">
        </div>
        <div class="mb-3">
          <label for="description1" class="form-label">description</label>
          <input type="text" name="description" class="form-control" id="description">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>

</form>

@endsection
