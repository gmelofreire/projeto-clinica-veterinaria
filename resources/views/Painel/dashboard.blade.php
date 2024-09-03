@extends('master')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<dashboard />

@endsection
