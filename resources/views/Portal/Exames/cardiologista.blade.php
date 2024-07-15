@extends('master')

@section('content')
    <cabecalho></cabecalho>
    <banner-pagina :image-path="'/img/cardiologia-veterinaria.jpg'" titulo="{{ $pagina }}"></banner-pagina>

    <div class="mx-auto max-w-7xl">
        <div class="p-11 font-medium text-xl bg-cinza mt-16 rounded-xl text-[#444444]">
            <p>
                Os exames cardiológicos para pets são essenciais no tratamento e também na prevenção de
                cardiopatias.<br><br>

                A cardiologia veterinária de animais de companhia é uma área especializada da medicina veterinária dedicada
                ao estudo
                do sistema cardiovascular e suas variações. O cuidado especializado é essencial porque as doenças cardíacas,
                além de afetarem o funcionamento do coração, impactam em todo o organismo do animal. <br><br>

                Exames que nós oferecemos:
            </p>

            <ul class="list-disc mt-2 ml-8">
                <li>Eletrocardiograma</li>
                <li>Holter</li>
                <li>Ecodopplercardiograma</li>
                <li>Avaliação Cardiológica</li>
                <li>Mensuração da pressão arterial</li>
            </ul>

        </div>
        <div>
            <h3 class="text-center font-semibold text-3xl mt-16">Nossa Equipe</h3>
            <funcionarios />    {{-- Fazer com que na controller so venha medicos com especialização 'cardiologista' --}}
        </div>
    </div>

    <rodape></rodape>
@endsection
