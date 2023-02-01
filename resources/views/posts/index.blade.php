@extends('layouts.app')

@section('content')

<div class="">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="d-flex mb-4">
                <a href="{{route('posts.create')}}" class="btn btn-primary btn-lg rounded-0 ms-auto">Create Post</a>
            </div>
            <div id="app">
                <data-table></data-table>
            </div>
        </div>
    </div>
</div>

@endsection