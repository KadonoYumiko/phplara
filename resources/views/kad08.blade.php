@extends('layouts.kadapp2')

@section('title','課題08')

@section('title2','課題08 DB処理1(ブログ)')

@section('content')
@foreach($data as $cont)
    <div class="blog">
        <h2 class="blog">{{$cont->tm}}</h2>
        <p class="title">{{$cont->title}}</p>
        <div class="contents">{!!$cont->contents!!}</div>
        <p align="right">
            <font class="posted">Posted by PHP-WEB</font>
        </p>
    </div>
@endforeach
@endsection