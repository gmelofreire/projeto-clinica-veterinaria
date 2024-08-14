<template>
  <div class="bg-primaria">
  <div class="h-24 mx-auto max-w-7xl px-4 flex justify-between text-white">
    <img src="../../../../public/img/VetMais-Logo.png" alt="VetMais Logo" class="h-full">
    <div class="flex w-[425px] justify-between items-center text-lg">
      <a href="/" :class="{ 'font-bold underline': isCurrentPage('/') }">Home</a>
      <a href="/sobre-nos" :class="{ 'font-bold underline': isCurrentPage('/sobre-nos') }">Sobre nós</a>
      <a href="/exames" :class="{ 'font-bold underline': isCurrentPage('/exames') }">Exames</a>
      <a href="/galeria" :class="{ 'font-bold underline': isCurrentPage('/galeria') }">Galeria</a>
    </div>
    <div class="flex ubuntu-medium items-center text-lg ">
      <a href="/login" class="mx-auto">Login</a>
    </div>
  </div>
  </div>
</template>

<script>
export default {
  name: 'Cabecalho',
  methods: {
    isCurrentPage(path) {
      return window.location.pathname === path;
    }
  }
};
</script>

<style>
.font-bold {
  font-weight: bold;
}
</style>