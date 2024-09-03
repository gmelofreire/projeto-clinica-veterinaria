<template>
    <div class="flex min-h-full flex-1 flex-col bg-background justify-center px-6 py-12 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto size-48" src="/public/img/VetMais- Logo-Transparente.png" alt="VetMais" />
      </div>
    
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
      <div class="bg-white px-6 py-8 shadow sm:rounded-lg sm:px-12">
      <h2 class="text-2xl mb-14 font-bold leading-9 tracking-tight text-gray-900">Esqueci minha senha</h2>
      <form class="space-y-6" :method="POST" action="forgot-password">
        <input type="hidden" name="_token" :value="csrfToken" />
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primaria-dark sm:text-sm sm:leading-6" />
          </div>
        </div>
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-primaria px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-primaria-hover focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primaria-dark">Enviar</button>
        </div>
      </form>
      <p class="mt-10 text-center text-sm text-gray-500">Se lembrou?
        <a href="/login" class="font-semibold leading-6 text-primaria hover:text-primaria-hover">Faça login</a>
      </p>
    </div>
    </div>
</div>
</template>

  