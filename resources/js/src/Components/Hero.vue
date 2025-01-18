<template>
    <section
        class="min-h-screen relative overflow-hidden"
        :style="{
            background: `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('${backgroundImage}')`,
            backgroundRepeat: 'no-repeat',
            backgroundSize: 'cover',
            backgroundPosition: 'center',
            backgroundAttachment: 'fixed',
        }"
    >
        <!-- Content Container with vertical spacing -->
        <div class="relative h-full container mx-auto px-4">
            <!-- Spacer -->
            <div class="h-16"></div>

            <!-- Main Content -->
            <div
                class="flex flex-col items-center justify-center min-h-[calc(100vh-8rem)]"
            >
                <!-- Heading with specific styling -->
                <h1
                    class="text-7xl md:text-8xl font-bold text-white mb-4 text-center leading-tight opacity-0 transform translate-y-8"
                    :class="{ 'animate-fadeInUp': mounted }"
                    style="line-height: 0.9"
                >
                    {{ title }}
                </h1>

                <!-- Subheading with italic styling -->
                <p
                    class="text-2xl md:text-3xl text-white mb-12 text-center italic font-semibold opacity-0 transform translate-y-8"
                    :class="{ 'animate-fadeInUp': mounted }"
                    style="animation-delay: 0.2s; line-height: 1.4"
                >
                    {{ subtitle }}
                </p>

                <!-- Location with icon -->
                <div
                    class="flex items-center justify-center gap-3 mb-12 text-white opacity-0 transform translate-y-8"
                    :class="{ 'animate-fadeInUp': mounted }"
                    style="animation-delay: 0.4s"
                >
                    <i class="fas fa-location-dot text-2xl"></i>
                    <span class="text-xl font-bold">{{ location }}</span>
                </div>

                <!-- CTA Button -->
                <div
                    class="opacity-0 transform translate-y-8"
                    :class="{ 'animate-fadeInUp': mounted }"
                    style="animation-delay: 0.6s"
                >
                    <YellowBtn
                        :text="ctaText"
                        :redirectTo="ctaLink"
                        class="text-lg px-8 py-4 font-semibold"
                    />
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div
            class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce cursor-pointer"
            @click="scrollToContent"
        >
            <i class="fas fa-chevron-down text-white text-2xl"></i>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from "vue";
import YellowBtn from "./YellowBtn.vue";

// Props
const props = defineProps({
    backgroundImage: {
        type: String,
        default: "imgs/started_img_n5.jpeg",
    },
    title: {
        type: String,
        default: "Cheers",
    },
    subtitle: {
        type: String,
        default: "specialty coffee cart catering to elevate any event",
    },
    location: {
        type: String,
        default: "New York, NY",
    },
    ctaText: {
        type: String,
        default: "Request a Quote",
    },
    ctaLink: {
        type: String,
        default: "/contact",
    },
});

const mounted = ref(false);

onMounted(() => {
    mounted.value = true;
});

const scrollToContent = () => {
    window.scrollTo({
        top: window.innerHeight,
        behavior: "smooth",
    });
};
</script>

<style scoped>
.animate-fadeInUp {
    animation: fadeInUp 0.8s ease-out forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(2rem);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
