@extends('layouts.main')
@section('add_css')
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
        #cover-bg-img{
            background-image: url('/img/bg.jpg');
            height: 100vh;
            width: 100%;
        }
    </style>
@endsection
@section('cover')
<div id="cover-bg-img">
    <div class="container-fluid d-flex vh-100 text-center text-white bg-dark bg-opacity-50">
        <main class="w-100 align-self-center">
            <h1>Welcome to Lorem Hotel.</h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, harum accusantium mollitia consequuntur quam nisi reiciendis dolores est molestiae quo.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Book a Room</a>
            </p>
        </main>
    </div>
</div>
@endsection
@section('container')
    <div class="row mt-4" style="height: 25vh">
        <div class="align-self-center">
            
        </div>
        <div class="col-sm-7">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt assumenda corporis alias eos tenetur cumque ad itaque provident, eveniet, obcaecati dolor! Mollitia corrupti repellendus velit sequi totam facere commodi natus?</p>
        </div>
        <div class="col-sm-5">
            <p>Contact</p>
            <br>
            <p>Jalan Abc No.x</p>
        </div>
    </div>
@endsection

