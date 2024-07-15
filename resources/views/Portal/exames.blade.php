@extends('master')

@section('content')

<cabecalho></cabecalho>
<banner-pagina :image-path="'/img/exames-banner.jpg'" titulo="{{ $pagina }}"></banner-pagina>

<div class="mx-auto max-w-7xl">
    <div class="bg-primaria mt-20 py-11 rounded-2xl">
        <h3 class="text-4xl text-white text-center">Nossos exames</h3>
        <div class="mx-28">
            <exames></exames>
        </div>
    </div>
</div>

<rodape></rodape>>
@endsection