<template>
    <div>
        <div class="w-full mt-14">
      <div class="flex flex-wrap gap-4">
        <div v-for="(funcionario, index) in limitedFuncionarios" :key="index" class=" flex flex-col mx-auto justify-around w-[210px] h-[288px] bg-primaria rounded-xl p-5">
          <div class="flex  justify-around text-left text-gray-900 rounded-xl">
            <img :src="funcionario.foto" alt="VetMais Logo" class="size-44 object-cover mx-auto rounded-lg">
          </div>
          <div>
            <p class="text-lg leading-7 font-medium text-center text-white">{{ funcionario.nome }}</p>
            <p class="text-lg leading-7 font-medium text-center text-white">{{ funcionario.especialidade }}</p>
          </div>
        </div>
      </div>
    </div>
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