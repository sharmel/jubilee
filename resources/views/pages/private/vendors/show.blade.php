@extends('layouts.default')
@section('content')
    <a href="{{route('vendors.edit',$vendor->id)}}">{{$vendor->username}}</a>
@stop