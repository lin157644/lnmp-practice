@extends('template')

@section('styles')
@endsection

@section('content')
<div id="projectsIndex" class="content">
    <div class="container-fluid">
        <div class="box">
            <span></span>
            <div class="text">
                <h2>Nextbot</h2>
                <p>NextBot是一個基於Python與Discord.py套件的Discord機器人，支援少見的SlashCommands、音樂播放功能。</p>
                <div class="btn-group" role="group">
                    <a href="{{ route('projects.discordbot') }}" class="btn">詳細內容</a>
                    <a href="https://github.com/lin157644" class="btn">
                        <i class="fab fa-github fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="text">
                <h2>Dormnet Tracker</h2>
                <p>因為作者住在中央大學宿舍的時光中，宿網因超量被限用多次搞到焦頭爛額，因而做出的快速用量查詢程式，拜託不要再鎖我宿網了QQ</p>
                <div class="btn-group" role="group">
                    <a href="{{ route('projects.dormnet') }}" class="btn">詳細內容</a>
                    <a href="https://github.com/lin157644" class="btn">
                        <i class="fab fa-github fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="text">
                <h2>LNMP Practice</h2>
                <p>本網站是使用LNMP開源架構，運行在RaspberryPi4上的個人網站。</p>
                <div class="btn-group" role="group">
                    <a href="{{ route('projects.lnmp') }}" class="btn">詳細內容</a>
                    <a href="https://github.com/lin157644" class="btn">
                        <i class="fab fa-github fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="box">
            <span></span>
            <div class="text">
                <h2>Flutter Todo List</h2>
                <p>使用Flutter框架建立的簡易TodoList，設定標題、時間與Tag以建立項目，包含了釘選功能以將重要的項目至頂。</p>
                <div class="btn-group" role="group">
                    <a href="{{ route('projects.lnmp') }}" class="btn">詳細內容</a>
                    <a href="https://github.com/lin157644" class="btn">
                        <i class="fab fa-github fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection