@extends('layout.default')

@section('title', 'Dashboard')

@section('content')
    <h1>Noi dung trang dashboard</h1>
    <h2>
    	@foreach($data as $value)
    		{{ $value->title." " }}
    	@endforeach
    </h2>
@endsection
