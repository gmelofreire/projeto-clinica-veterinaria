<template>
  <div class="w-full h-[490px] bg-cover bg-center" :style="{ backgroundImage: `url(${imagePath})` }">
    <div class="h-full bg-gradient-to-t from-black text-center flex items-center justify-center text-cinza font-bold text-5xl">
      {{ titulo }}
    </div>
  </div>
</template>

  
  
<script>
export default {
  name: 'bannerPagina',
  props: {
    imagePath: {
      type: String,
      required: true
    },
    titulo: {
      type: String,
      required : true
    }
  },
  }
</script>
  