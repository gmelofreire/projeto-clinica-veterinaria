@extends('master')

@section('content')
    <Cabecalho></Cabecalho>
    <banner image-path="../../img/banner-horizontal.jpg"></banner>

    <div class="bg-primaria mx-auto max-w-7xl px-32 py-11 mt-20 rounded-3xl">
        <h3 class="text-[32px] text-center font-semibold text-white ">Nossos Exames</h3>
        <exames :quant="4" :exames={{$exames}}></exames>
        <div class="w-full flex justify-center">
            <a href="/exames"
                class="py-4 mt-10 bg-secundaria text-[20px] text-white box-border inline-block text-center w-1/3 rounded-xl">
                Mais exames
            </a>
        </div>
    </div>
    <div class="mt-20">
        <h3 class="text-[32px] text-center font-semibold text-black ">Avaliações</h3>
        <avaliacoesindex :quant="6" :avaliacoes="{{ $avaliacoes }}"></avaliacoesindex>

    </div>

    <div class="mt-20 mx-auto max-w-7xl">
        <h3 class="text-[32px] text-center font-semibold text-black mt-5">Atendimento</h3>
        <div class="flex h-[450px] justify-end relative">
            <div class="bg-[url('../../public/img/mapa.png')] w-[590px] h-[334px] my-auto z-10 absolute left-0 top-[58px] rounded-xl">

            </div>
            <div class="flex flex-col justify-center bg-secundaria w-[786px] h-full rounded-xl text-white gap-11 px-32 ">
                <div class="flex flex-col">
                    <span class="font-semibold text-base">Endereço</span>
                    <span class="text-base">SQS 714 Bloco F número 102, Brasília - DF</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold text-base">Horário de atendimento</span>
                    <span class="text-base">De seg a sex das 00h até 19h</span>
                    <span class="text-base">Sábado das 00h até 15h</span>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="font-semibold text-base">Contato</span>
                    <span class="flex align-middle">
                        <img src="/img/icones/icone-whatsapp.svg" alt="" class="size-5 my-auto mr-2">
                        <span class="text-base">(61) 99847-7809</span>
                    </span>
                    <span class="flex">
                        <img src="/img/icones/icone-instagram.svg" alt="" class="size-5 my-auto mr-2">
                        <span class="text-base">@vetmais_df</span>
                    </span>
                    <span class="flex">
                        <img src="/img/icones/icone-email.svg" alt="" class="size-5 my-auto mr-2">
                        <span class="text-base">vetmaisDF@gmail.com</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-20 mx-auto max-w-7xl">
        <Faq />
    </div>
    <rodape />
@endsection
