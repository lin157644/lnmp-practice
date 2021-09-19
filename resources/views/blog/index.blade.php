@extends('template')

@section('title')
文章列表
@endsection

@section('styles')
<style>
    
</style>
@endsection

@section('content')
<div class="content">
    {{-- <div style="height: 70px;"></div> --}}
    <header class="p-3 d-flex justify-content-between">
        <h1 style="font-weight: 700;">Comment</h1>
        {{-- <a type="button" class="btn btn-secondary" href="{{ route('blog.create') }}">create</a> --}}
    </header>
    <div class="container">
        <div class="py-5">
            <form class="form-container" action="{{ route('blog.store') }}" method="POST">
                <div class="mb-3 me-auto">
                    <label for="title" class="form-label">標題</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="write something..." >
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">內容</label>
                    <textarea name="content" class="form-control" id="content" rows="3" required ></textarea>
                </div>
                {{ csrf_field() }}
                <div class="d-flex justify-content-between ">
                    <button type="submit" class="btn btn-secondary">submit</button>
                </div>
            </form>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($posts as $post)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-dark" x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $post->title }}</h5>
                                <p class="card-text text-dark">{{ $post->content }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-outline-secondary" href="{{ route('blog.show', $post->id) }}">View</a>
                                        <a href="{{ route('blog.destroy', $post->id) }}" type="button" class="btn btn-sm btn-outline-secondary">delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection