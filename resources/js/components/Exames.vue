<template>
    <div class="w-full mt-14">
      <div class="flex flex-wrap gap-4">
        <div v-for="(exame, index) in limitedExames" :key="index" class="pt-6 mx-auto">
          <a :href="`/exames/${exame.nome}`">
          <div class="flex bg-white w-56 h-40 items-start justify-between text-left text-gray-900 rounded-xl">
            <img :src="`/storage/${exame.icone}`" alt="VetMais Logo" class="w-[90px] h-[100px] object-cover mx-auto my-auto">
          </div>
          <p class="text-lg leading-7 font-medium text-center mt-4 text-white">{{ exame.nome }}</p>
        </a>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { computed, defineProps } from 'vue';
  
  const props = defineProps({
    exames:{
      type: [Array, Object],
      required: true
    },
    quant: {
      type: Number,
      required: true
    }
  });
    
  const limitedExames = computed(() => props.exames.slice(0, props.quant));

  </script>