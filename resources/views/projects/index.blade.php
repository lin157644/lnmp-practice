@extends('template')

@section('styles')

@endsection

@section('content')
<style>
    body{
        display: flex;
        justify-content: center;
        align-content: center;
        min-height: 100vh;
        background: #1d061a;
    }

    .container{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family:  consolas;
        display: flex;
        justify-content: center;
        align-content: center;
        flex-wrap: wrap;
        padding:  40px 0;
        
    }
    .container .box{
        position: relative;
        width: 320px;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin:  40px 30px;
        transition: 0.5s;
    }

    .container .box::before{
        content: '';
        position: absolute;
        top: 0;
        left: 50px;
        width: 50%;
        height: 100%;
        background: #fff;
        border-radius: 8px;
        transform: skewX(15deg);
        transition: 0.5s;
    }
    .container .box::after{
        content: '';
        position: absolute;
        top: 0;
        left: 50px;
        width: 50%;
        height: 100%;
        background: #fff;
        border-radius: 8px;
        transform: skewX(15deg);
        transition: 0.5s;
        filter: blur(30px);
        transition: 0.5s;
    }
    .container .box:hover:before,
    .container .box:hover:after{
        transform: skewX(0deg);
        left: 20px;
        width: calc(100% - 90px);
    }

    .container .box:nth-child(1):before,
    .container .box:nth-child(1):after{
        background: linear-gradient(315deg, #ffbc00, #ff0058);
    }
    .container .box:nth-child(2):before,
    .container .box:nth-child(2):after{
        background: linear-gradient(315deg, #03a9f4, #ff0058);
    }
    .container .box:nth-child(3):before,
    .container .box:nth-child(3):after{
        background: linear-gradient(315deg, #4dff03, #00d0ff);
    }
    .container .box span{
        display: block;
        position: absolute;
        top:0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 50;
        pointer-events: none;
    }
    .container .box span::before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        opacity: 0;
        transition: 0.5s;
        animation: animate 2s ease-in-out infinite;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    .container .box:hover span::before{
        top: -50px;
        left: 50px;
        width: 100px;
        height: 100px;
        opacity: 1;
    }

    .container .box span::after{
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        opacity: 0;
        transition: 0.5s;
        animation: animate 2s ease-in-out infinite;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        animation-delay: -1s;
    }
    .container .box:hover span::after{
        bottom: -50px;
        right: 50px;
        width: 100px;
        height: 100px;
        opacity: 1;
    }

    @keyframes animate{
        0%, 100%{
            transform: translateY(10px);
        }
        50%{
            transform: translateY(-10px);
        }
    }
    .container .box .content{
        position: relative;
        left: 0;
        padding: 20px 40px;
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        backdrop-filter: blur(10px);
        z-index: 1;
        transform: 0.5s;
        color: white;
    }
    .container .box:hover .content{
        left: -25px;
        padding: 60px 40px;
    }
    .container .box .content h2{
        font-size: 2em;
        color: #fff;
        margin-bottom: 0px;
    }
    .container .box .content p{
        font-size: 1.1em;
        margin-bottom: 10px;
        line-height: 1.4em;
    }
    .container .box .content a{
        display: inline-block;
        font-size: 1.1em;
        color: #111;
        background: #fff;
        padding: 10px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 700;
        margin-top: 5px;
    }
</style>
<div class="container">
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
@endsection