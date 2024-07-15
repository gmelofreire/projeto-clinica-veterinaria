<template>
    <div class="w-full mt-14">
      <div class="flex flex-wrap gap-4">
        <div v-for="(exame, index) in limitedExames" :key="index" class="pt-6 mx-auto">
          <a :href="`/exames/${exame.titulo}`">
          <div class="flex bg-white w-56 h-40 items-start justify-between text-left text-gray-900 rounded-xl">
            <img :src="exame.icone" alt="VetMais Logo" class="w-[90px] h-[100px] object-cover mx-auto my-auto">
          </div>
          <p class="text-lg leading-7 font-medium text-center mt-4 text-white">{{ exame.titulo }}</p>
        </a>
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
  
  const exames = [
    { icone: "../../img/icones/icone-cardiologia.svg", titulo: "Cardiologista" },
    { icone: "../../img/icones/icone-dentista.svg", titulo: "Dentista" },
    { icone: "../../img/icones/icone-seringa.svg", titulo: "Vacinação" },
    { icone: "../../img/icones/icone-pneumologista.svg", titulo: "Eletrocardiograma" },
    { icone: "../../img/icones/icone-pneumologista.svg", titulo: "Eletrocardiograma" },
    { icone: "../../img/icones/icone-pneumologista.svg", titulo: "Eletrocardiograma" },
    { icone: "../../img/icones/icone-pneumologista.svg", titulo: "Eletrocardiograma" },
  ];
  
  const limitedExames = computed(() => exames.slice(0, props.quant));

  </script>