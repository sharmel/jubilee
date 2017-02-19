@extends('layouts.default')
@section('content')
    
    <ul>
    @foreach($vendors as $vendor)

    	<li><a href="{{route('vendors.show', $vendor->id)}}">{{$vendor->username}}</a></li>
    

    @endforeach
    </ul>
@stop