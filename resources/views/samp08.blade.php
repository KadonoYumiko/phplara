@extends('layouts.kadapp2')

@section('title','サンプル08')

@section('title2','サンプル08 DB処理1')

@section('content')
@foreach($data as $cont)
    <div class="blog">
        <h2 class="blog">{{$cont->tm}}</h2>
        <p class="title">{{$cont->title}}</p>
        <div class="contents">{!!$cont->contents!!}</div>
        <p align="right">
            <a href="Samp10?id=""">comment({{$cont->comment}})</a>&nbsp;<a href="Samp11">Trackback({{$cont->tackback}})</a>
            &nbsp;<font class="posted">Posted by PHP-WEB</font>
        </p>
    </div>
@endforeach
@endsection