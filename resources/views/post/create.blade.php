@extends('layouts.app')
@section('content')
    <div class="card mt-3">
        <div class="card-header">Create a New Post</div>
        <div class="card-body">
            <form method="post" action="{{route('post.store')}}"  >
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title"  placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" class="form-control" rows="10"></textarea>
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary" onclick="alert('Thank you for publishing the form!')">Publish</button>
            </form>
        </div>
    </div>


    @endsection