<template>
    <div class="relative text-center lg:text-left border-2 shadow-2xl rounded-2xl overflow-hidden">
        <img :src="img" alt="Standard" class="w-full" />
        <h4 class="text-xl my-3 py-5 text-center px-10 lg:px-20 font-medium text-black">{{ title }}</h4>
    </div>
</template>

<script setup>
const props = defineProps(["title", "admin", "img", "tag"]);
</script>

