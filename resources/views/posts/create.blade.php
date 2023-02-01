@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-10 mx-auto bg-white">
            
            <form action="{{ route('posts.create') }}" method="POST" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                        
                </div>
                <div class="mb-5">
                    <label class="form-label">Content</label>
                    <textarea name="content" cols="30" rows="10" class="form-control" id='content'>{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection