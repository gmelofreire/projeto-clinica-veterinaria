@extends('master')

@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="mx-auto h-[80vh] size-1/2 flex items-center justify-center rounded-2xl bg-primaria">
        <div class="flex flex-col w-1/2 items-center gap-4">
            <img src="/img/VetMais-Logo.png" alt="" class="size-52 mx-auto">
            <input type="text" name="" id="" class="w-full h-12 p-2 mx-auto rounded" placeholder="E-mail">
            <input type="text" name="" id="" class="w-full h-12 p-2 mx-auto rounded" placeholder="Senha">
            <a href="" class="self-start text-white underline">Esqueci minha senha</a>
            <button class="bg-secundaria w-2/3 mx-auto py-3 rounded-md text-white font-medium">Entrar</button>
        </div>
    </div>
</div>

@endsection
