@extends('template')

@section('styles')

@endsection

@section('content')
<div id="projectsIndex">
    <div class="container-fluid">
        <div class="box">
            <span></span>
            <div class="content">
                <h2>Discord Bot</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>
                <a href="{{ route('projects.discordbot') }}">詳細內容</a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>Dormnet Tracker</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>
                <a href="{{ route('projects.dormnet') }}">詳細內容</a>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="content">
                <h2>LNMP Practice</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, s</p>
                <a href="{{ route('projects.lnmp') }}">詳細內容</a>
            </div>
        </div>
    </div>
</div>
@endsection