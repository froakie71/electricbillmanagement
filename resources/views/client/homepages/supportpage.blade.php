@extends('client.defualtlayout.clientlayout')
@include('client.css.client_supportpage')
@section('content')

<div class ="exitlogo">
    <a href="{{ route('mainpageuser',$credentials) }}">
        <img src="/imgs/exit.jpg" alt="image of a person" height="50px">
    </a>
</div>

<div class="fullscreen-image">
    <img src="/imgs/support_page.png" alt="Description">
</div>

@stop