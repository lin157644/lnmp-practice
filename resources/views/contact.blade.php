@extends('template')

@section('content')
<div id="contact" class="content">
    
    <div class="container">
        <div class="row pageTitle justify-content-cneter">
            <p class="text-center">Contect</p>
        </div>
        <div class="row justify-content-evenly ">
            <a href="mailto:linxs1010@gmail.com" class="text-center col-12 col-lg-4">
                <i class="fas fa-envelope fa-lg"></i>
                <p>Mail</p>
            </a>
            <a href="https://github.com/lin157644" class="text-center col-12 col-lg-4">
                <i class="fab fa-github fa-lg"></i>
                <p>Github</p>
            </a>
            <a href="https://twitter.com/tw_lxs" class="text-center col-12 col-lg-4">
                <i class="fab fa-twitter fa-lg"></i>
                <p>Twitter</p>
            </a>
        </div>
    </div>
</div>
@endsection