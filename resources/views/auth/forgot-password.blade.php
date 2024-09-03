@extends('master')

@section('content')

<esquecisenha loginUrl="/login"/>

@endsection

<script>
    window.csrfToken = "{{ csrf_token() }}";
</script>

