@extends('master')

@section('content')
    <Cabecalho></Cabecalho>
    <banner image-path="../../img/banner-horizontal.jpg"></banner>

    <div class="bg-primaria mx-auto max-w-7xl px-32 py-11 mt-20 rounded-3xl">
        <h3 class="text-[32px] text-center font-semibold text-white ">Nossos Exames</h3>
        <exames :quant="4"></exames>
        <div class="w-full flex justify-center">
            <a href="/exames" class="py-4 mt-10 bg-secundaria text-[20px] text-white box-border inline-block text-center w-1/3 rounded-xl">
                Mais exames
            </a>
        </div>
    </div>

    <div class="mt-20">
        <h3 class="text-[32px] text-center font-semibold text-black ">Avaliações</h3>
        <avaliacoesindex :quant="6"></avaliacoesindex>
    </div>

    <div class="mt-20">
        <h3 class="text-[32px] text-center font-semibold text-black ">Atendimento</h3>
        
    </div>
@endsection
