@extends('layout.master')

@section('title','Contact Me')

@section('content')
    <div class="container">
       <H1>{!! $page_name !!}</H1> 
       <p>{!! $page_description!!}</p>
    </div>
@endsection
@section('sidebar')
    @parent
    This Is From Containt Page!!
@endsection