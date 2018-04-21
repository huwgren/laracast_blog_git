@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>

        <p>{{$post->body}}</p>

        <hr>

        <div class="comments">
            <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    {{$comment->body}}
                </li>
            @endforeach()
            </ul>
        </div>

        <hr>

        <!-- comment form-->
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/posts/{{$post->id}}/comments">

                    {{csrf_field()}}

                    <div class="form-group">
                        <textarea class="form-control" id="body" name="body" placeholder="Your comment here"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

                @include('layouts.errors')
                
            </div>
        </div>


    </div>
@endsection()