@extends('master')

@section('content')
    <cabecalho></cabecalho>
    <banner-pagina :image-path="'/img/foto-clinica.webp'" titulo="{{ $pagina }}"></banner-pagina>

    <div class="mx-auto max-w-7xl">
        <div class="p-11 font-medium text-xl bg-cinza mt-16 rounded-xl text-[#444444]">
            <p>A VetMais é uma clínica veterinária fundada em 2015 com o compromisso de proporcionar cuidados de excelência
                para os animais de estimação. Localizada no
                coração de Brasília, na SQS 714 Bloco F número 102, nossa missão é garantir o bem-estar e a saúde dos nossos
                pacientes através de um atendimento humanizado
                e especializado.<br><br>
                Desde sua inauguração, a VetMais se destaca pela dedicação e paixão com que trata cada animal. Nossa equipe
                é composta por profissionais altamente
                qualificados e em constante atualização, preparados para oferecer uma ampla gama de serviços, desde
                consultas de rotina até procedimentos cirúrgicos
                avançados.<br><br>
                Ao longo dos anos, construímos uma relação de confiança e carinho com nossos clientes, refletida no cuidado
                e atenção que dispensamos a cada visita.
                Acreditamos que cada animal merece o melhor cuidado possível, e é essa filosofia que guia todas as nossas
                ações na VetMais. Venha nos visitar e conheça um
                ambiente acolhedor, onde a saúde e o bem-estar dos seus pets são a nossa prioridade.</p>
        </div>
        <div>
            <h3 class="text-center font-semibold text-3xl mt-16">Nossa Equipe</h3>
            <funcionarios />
        </div>
    </div>
    <rodape />
@endsection
