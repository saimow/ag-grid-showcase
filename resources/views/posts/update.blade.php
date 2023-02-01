@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto bg-white">
            
            <form action="{{ route('posts.update', $post->id) }}" method="POST" class="p-4">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title )}}">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="form-label">Description</label>
                    <textarea name="description" cols="30" rows="10" class="form-control" id='description'>{{ old('description', $post->description) }}</textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
@endsection