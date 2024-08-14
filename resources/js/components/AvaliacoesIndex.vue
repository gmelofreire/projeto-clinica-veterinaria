<template>
  <div class="w-full mt-5">
    <div class="flex flex-wrap gap-4 mx-auto max-w-7xl">
      <div v-for="(avaliacao, index) in limitedAvaliacoes" :key="index" class="pt-6 mx-auto">
        <div class="flex bg-cinza w-[400px] h-40 p-5 items-start text-left text-gray-900 rounded-xl gap-5">
          <img :src="`/storage/${avaliacao.img_path}`" alt="VetMais Logo" class="w-[100px] h-[100px] object-cover rounded-full my-auto">
          <div class="flex flex-col h-full justify-around">
            <p class="text-lg font-medium text-black">{{ avaliacao.nome }}</p>
            <p class="text-sm font-medium text-black">{{ avaliacao.comentario }}</p>
            <div class="flex gap-1">
              <p class="text-base font-medium text-black">{{ avaliacao.nota }}</p>
              <img src="../../../public/img/icones/icone-estrela.svg" alt="" class="size-4 my-auto">
            </div>
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
  },
  avaliacoes: {
    type: Array,
    required: true
  }
});

const limitedAvaliacoes = computed(() => props.avaliacoes.slice(0, props.quant));

</script>
