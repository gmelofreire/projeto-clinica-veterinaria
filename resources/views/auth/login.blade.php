@extends('master')

@section('content')

<Login loginUrl="/login"/>

@endsection

<script>
    window.csrfToken = "{{ csrf_token() }}";
</script>
