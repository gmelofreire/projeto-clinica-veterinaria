@extends('master')

@section('content')

<cabecalho></cabecalho>
<banner-pagina :image-path="'/img/galeria-banner.jpg'" titulo="{{ $pagina }}"></banner-pagina>

<avaliacoes-galeria :avaliacoes="{{$avaliacoes}}"> </avaliacoes-galeria> 

<rodape></rodape>

@endsection