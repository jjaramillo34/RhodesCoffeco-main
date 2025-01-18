<template>
    <section
        class="relative py-32 overflow-hidden"
        :aria-label="ariaLabel || 'Our Mission'"
    >
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 w-full h-full">
            <img
                :src="backgroundImage"
                :alt="imageAlt || 'Rhodes Coffee Co Mission Background'"
                class="object-cover w-full h-full transform scale-110"
            />
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <!-- Content Container -->
        <div class="relative container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center text-white">
                <!-- Decorative Elements -->
                <div class="mb-12">
                    <h2 class="text-5xl font-serif mb-4 tracking-wide">
                        Our Mission
                    </h2>
                    <div class="flex items-center justify-center gap-4">
                        <div class="h-[1px] w-16 bg-brand-pink"></div>
                        <i class="fa-solid fa-coffee-bean text-brand-pink"></i>
                        <div class="h-[1px] w-16 bg-brand-pink"></div>
                    </div>
                </div>

                <!-- Quote Container -->
                <blockquote class="relative">
                    <!-- Decorative Quotes -->
                    <div
                        class="absolute -top-8 -left-8 text-6xl text-brand-pink opacity-50"
                    >
                        "
                    </div>
                    <div
                        class="absolute -bottom-8 -right-8 text-6xl text-brand-pink opacity-50"
                    >
                        "
                    </div>

                    <!-- Quote Text -->
                    <p class="text-xl md:text-2xl leading-relaxed italic mb-8">
                        {{ quote }}
                    </p>

                    <!-- Author Info -->
                    <footer class="mt-8">
                        <cite class="text-xl font-semibold not-italic block">{{
                            author
                        }}</cite>
                        <p class="text-brand-pink">{{ role }}</p>
                    </footer>
                </blockquote>
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
    quote: {
        type: String,
        required: true,
    },
    author: {
        type: String,
        required: true,
    },
    role: {
        type: String,
        required: true,
    },
    imageAlt: {
        type: String,
        default: "",
    },
    ariaLabel: {
        type: String,
        default: "",
    },
});
</script>

<style scoped>
.fa-coffee-bean {
    display: inline-block;
    width: 24px;
    height: 24px;
    background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23ECDCDE" d="M512 64c0 113.6-84.6 207.5-194.2 222c-7.1-53.4-30.6-101.6-65.3-139.3C290.8 78.3 364 32 448 32h32c17.7 0 32 14.3 32 32zM0 128c0-17.7 14.3-32 32-32H64c123.7 0 224 100.3 224 224v32 96c0 17.7-14.3 32-32 32s-32-14.3-32-32V352C100.3 352 0 251.7 0 128z"/></svg>');
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
}

blockquote {
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.text-brand-pink {
    color: #ecdcde;
}

.bg-brand-pink {
    background-color: #ecdcde;
}

.border-brand-pink {
    border-color: #ecdcde;
}
</style>
