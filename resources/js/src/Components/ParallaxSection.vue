<template>
    <section
        class="relative min-h-[400px] w-full overflow-hidden"
        :style="{
            background: `url('${backgroundImage}')`,
            backgroundAttachment: 'fixed',
            backgroundPosition: 'center center',
            backgroundRepeat: 'no-repeat',
            backgroundSize: 'cover',
        }"
        :aria-label="ariaLabel"
    >
        <!-- Overlay -->
        <div
            class="absolute inset-0"
            :class="overlayClass"
            :style="{ opacity: overlayOpacity }"
        ></div>

        <!-- Content Container -->
        <div
            class="relative h-full flex items-center justify-center py-32 md:py-48 px-4"
        >
            <div class="text-center max-w-4xl mx-auto">
                <h2
                    class="text-4xl md:text-6xl lg:text-7xl text-white mb-8 font-serif leading-tight"
                    v-if="title"
                >
                    {{ title }}
                </h2>
                <h3
                    class="text-xl md:text-2xl text-white/90 font-medium mb-8"
                    v-if="subtitle"
                >
                    {{ subtitle }}
                </h3>
                <p
                    v-if="description"
                    class="text-lg md:text-xl text-white/80 mb-8 max-w-2xl mx-auto leading-relaxed"
                >
                    {{ description }}
                </p>
                <slot></slot>
            </div>
        </div>
    </section>
</template>

<script setup>
defineProps({
    backgroundImage: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        default: "",
    },
    subtitle: {
        type: String,
        default: "",
    },
    description: {
        type: String,
        default: "",
    },
    overlayClass: {
        type: String,
        default: "bg-black",
    },
    overlayOpacity: {
        type: String,
        default: "0.6",
    },
    ariaLabel: {
        type: String,
        required: true,
    },
});
</script>

<style scoped>
.font-serif {
    font-family: "Playfair Display", serif;
}
</style>
