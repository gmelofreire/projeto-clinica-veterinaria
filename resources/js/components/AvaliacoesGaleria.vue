<template>
    <div class="w-full mt-5">
      <div class="flex flex-wrap gap-4 mx-auto max-w-7xl">
        <div v-for="(avaliacao, index) in avaliacoes" :key="index" class="pt-6 mx-auto">
          <div class="flex flex-col w-[400px] items-start text-left text-gray-900 rounded-xl gap-5">
            <img :src="`/storage/${avaliacao.img_path}`" alt="VetMais Logo" class="w-full h-52 object-cover rounded-xl my-auto">
            <div class="flex flex-col h-full justify-around w-full"> 
                <div class="flex justify-between px-3">
                    <p class="text-lg font-normal text-black">{{ avaliacao.nome }}</p>
                    <div class="flex gap-1">
                        <p class="text-base flex items-center font-light text-black">{{ avaliacao.nota }}</p>
                        <img src="../../../public/img/icones/icone-estrela.svg" alt="" class="size-4 my-auto">
                    </div>
                </div>   
                <p class="text-base font-normal text-center text-black mt-1">"{{ avaliacao.comentario }}"</p>
            </div>
        </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  props: {
    avaliacoes: {
      type: [Array, Object],
      required: true
    }
  },
  }
</script>