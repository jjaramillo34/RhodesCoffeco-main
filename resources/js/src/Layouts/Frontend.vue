<template>
    <div class="min-h-screen flex flex-col">
        <Navigation />
        <main class="flex-grow">
            <slot />
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Navigation from "../Components/Navigation.vue";
import Footer from "../Components/Footer.vue";
</script>
