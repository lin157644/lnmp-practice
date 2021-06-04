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
<div id="index" class="content">
    <p>您好，歡迎來到我的網站。</p>
    <p>此處尚在建設中，還請手下留情。</p>
    <p>請展開左側選單切換頁面。</p>
</div>
@endsection