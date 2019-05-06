@extends ('layouts.app')
@section('content')
    @foreach($posts as $post)

    <div class="card mt-3 mb-3">
        <div class="card-header">
           <b> {{$post->title}} </b>
        </div>
        <div class="card-body">
            <p class="card-text">{{$post->body}}</p>
        </div>
        <div class="card-header">

            Posted by {{$post->user->name}} ... {{$post->created_at->diffForHumans()}}

        </div>
    </div>
  @endforeach
    {{$posts->links('vendor.pagination.bootstrap-4')}}
    @endsection
