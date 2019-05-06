@extends ('layouts.app')
@section('content')

        <div class="card mt-3 mb-3">
            <div class="card-header">
                <b> {{$post->title}} </b>
            </div>
            <div class="card-body">
                <p class="card-text">{{$post->body}}</p>
            </div>
            <div class="card-header">

                {{$post->created_at->diffForHumans()}}

            </div>
        </div>

@endsection

