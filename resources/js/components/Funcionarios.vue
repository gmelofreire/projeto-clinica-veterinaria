<template>
  <div class="">
      <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-14 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
        <li v-for="(funcionario, index) in limitedFuncionarios" :key="index">
          <img class="aspect-[14/13] w-full rounded-2xl object-cover" :src="funcionario.foto" alt="" />
          <h3 class="mt-6 text-lg font-semibold leading-8 tracking-tight text-black">{{ funcionario.nome }}</h3>
          <p class="text-base leading-7 text-gray-500">{{ funcionario.especialidade }}</p>
        </li>
      </ul>
    </div>
</template>

<script setup>

import { computed, defineProps } from 'vue';

const props = defineProps({
quant: {
  type: Number,
  required: true
}
});

const funcionarios = [
{ foto: "../../img/medicos/veterinario-1.jpg", nome: "Dr. Nefario", especialidade: "Cardiologista" },
{ foto: "../../img/medicos/veterinario-2.jpg", nome: "Dra. Jaqueline", especialidade: "Ortopedista" },
{ foto: "../../img/medicos/veterinario-3.jpg", nome: "Dra. Helena", especialidade: "Oftamologista" },
{ foto: "../../img/medicos/veterinario-4.jpg", nome: "Dr. Fernando", especialidade: "Infectologista" },
{ foto: "../../img/medicos/veterinario-5.jpg", nome: "Dra. Luciana", especialidade: "Cardiologista" }
];

const limitedFuncionarios = computed(() => funcionarios.slice(0, props.quant));
</script>