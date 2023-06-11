@extends('adminlte::page')
@section('title', 'Apotik | Home')
@section('content_header')
    <h1 class="m-0 text-light">Home</h1>
@stop
@section('content')
<link rel="stylesheet" href="css/about.css">
<br>
<div class="containerabawt">
    <div class="avatarabawt">
        <a href="https://www.linkedin.com/in/muhammad-raffi-ramadhan-920a24245/">
        @auth
    @if(auth()->user()->level === 'Apoteker')
        <img src="/images/pharmacist.png" alt="Apoteker Avatar">
    @elseif(auth()->user()->level === 'Gudang')
        <img src="/images/warehouse.png" alt="Gudang Avatar">
    @elseif(auth()->user()->level === 'Kasir')
        <img src="/images/cashier.png" alt="Kasir Avatar">
    @elseif(auth()->user()->level === 'Pemilik')
        <img src="https://media.licdn.com/dms/image/D5603AQHZwsvQrj_fKQ/profile-displayphoto-shrink_200_200/0/1684850023674?e=1691020800&v=beta&t=fvrtqhjIMOY4TEfFbdA3GLvxOKvYf3VJGkscxalnwwg" alt="Raffi63" />
    @endif
@endauth    
        </a>
    </div>
    <div class="contentabawt">
        <h1 class="h1abawt">Website Apotik</h1>
        <p class="pabawt">Made By: Raffi63</p>
    </div>
</div>
@stop
