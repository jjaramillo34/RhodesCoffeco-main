<template>
    <Link :href="redirectTo" class="uppercase p-3 md:py-5 md:px-8 bg-[#d69c46] hover:bg-[#d69c46e3] text-black text-lg md:text-xl">
        {{ text }}
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps(['text', 'redirectTo'])
</script>