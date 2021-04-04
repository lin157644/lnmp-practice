@extends('template')

@section('styles')
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }
    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    .project-item{
        background-color: gray;
        color: white;
        
    }
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="project-item">
        DiscordBot
    </div>
</div>
@endsection