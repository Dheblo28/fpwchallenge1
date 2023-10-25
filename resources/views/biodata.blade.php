@extends('master')
@section('nama_title',$nama)
@section('nama_lengkap',$nama)
@section('biodata',$bio)
@section('hobby')
@forelse ($hobby as $item)
    <li>{{$item}}</li>
    
@empty
    Tidak mempunyai hobby
@endforelse
@endsection