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
<div id="index" class="container-fluid">
    <p>
        資工系的審查者您好，歡迎來到我的網站。
    </p>
    <p>
        此處尚在建設中，還請手下留情。
    </p>
</div>
@endsection