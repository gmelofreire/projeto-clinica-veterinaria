<template>
    <a href="/galeria">
      <div class="w-full h-[490px]">
        <img :src="imagePath" alt="VetMais Logo" class="w-full max-h-full object-cover">
      </div>
    </a>
</template>
  
  
<script>
export default {
  name: 'Banner',
  props: {
    imagePath: {
      type: String,
      required: true
    }
  },
  }
</script>
  