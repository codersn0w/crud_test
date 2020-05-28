@extends('layouts.layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                {{ $post->title }}
            </h1>
            @auth
            <div class="mb-4 text-right">
                <a class="btn btn-primary" href="{{ route('posts.edit', ['post' => $post]) }}">
                    編集
                </a>
                <form
                    style="display: inline-block;"
                    method="POST"
                    action="{{ route('posts.destroy', ['post' => $post]) }}"
                >
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">削除</button>
                </form>
            </div>
            @endauth
            <p class="mb-5">
                {!! nl2br(e($post->body)) !!}
            </p>
        </div>
    </div>
@endsection
