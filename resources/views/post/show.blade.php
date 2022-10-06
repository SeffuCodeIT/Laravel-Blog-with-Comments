@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-primary">General Panga</h3>
                        <hr />
                        <br/>
                        <h3>{{ $post->title }}</h3>
                        <p>
                            {{ $post->body }}
                        </p>
                        <hr />
                        <h4>Comments:</h4>

                        <hr />
                        @include('post.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])

                        <h4>Add comment</h4>
                        <form method="post" action="{{ route('comments.store') }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="body"></textarea>
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Add Comment" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
