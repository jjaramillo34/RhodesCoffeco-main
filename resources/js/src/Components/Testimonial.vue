<template>
    <section
        class="relative py-32"
        :style="{
            background: `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('imgs/started_img_n3.jpeg')`,
            backgroundAttachment: 'fixed',
            backgroundPosition: 'center',
            backgroundRepeat: 'no-repeat',
            backgroundSize: 'cover',
        }"
    >
        <div class="container mx-auto px-5 md:px-20">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif text-white mb-6">
                    What people are saying about our coffee catering experience:
                </h2>
                <div class="flex items-center justify-center gap-4 mb-8">
                    <div class="flex">
                        <Star class="w-8 h-8 text-yellow-400 fill-current" />
                        <Star class="w-8 h-8 text-yellow-400 fill-current" />
                        <Star class="w-8 h-8 text-yellow-400 fill-current" />
                        <Star class="w-8 h-8 text-yellow-400 fill-current" />
                        <Star class="w-8 h-8 text-yellow-400 fill-current" />
                    </div>
                    <span class="text-white text-xl">EXCELLENT</span>
                </div>
                <p class="text-brand-sage text-lg">
                    Based on <strong>{{ totalReviews }} reviews</strong>
                </p>
            </div>

            <!-- Reviews Slider -->
            <vueper-slides
                class="no-shadow"
                :visible-slides="3"
                :slide-multiple="false"
                :gap="3"
                :arrows="false"
                :bullets="true"
                bullets-outside
                autoplay
                :duration="5000"
                fade
                :breakpoints="{
                    1200: { visibleSlides: 2 },
                    800: { visibleSlides: 1 },
                }"
            >
                <vueper-slide
                    v-for="(review, index) in coffeeReviews"
                    :key="index"
                    class="!bg-transparent"
                >
                    <template #content>
                        <div
                            class="bg-white rounded-xl p-8 shadow-lg mx-4 h-full"
                        >
                            <div
                                class="flex items-start gap-4 mb-6 border-b border-gray-100 pb-4"
                            >
                                <div
                                    class="w-16 h-16 rounded-full bg-[#d69c46] flex items-center justify-center text-white text-2xl font-semibold"
                                >
                                    {{ review.initial }}
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold text-lg text-gray-800"
                                    >
                                        {{ review.name }}
                                    </h3>
                                    <p class="text-sm text-gray-500">
                                        {{ review.type }}
                                    </p>
                                    <div class="flex mt-2">
                                        <Star
                                            v-for="n in 5"
                                            :key="n"
                                            class="w-4 h-4 text-yellow-400 fill-current"
                                        />
                                    </div>
                                </div>
                            </div>
                            <p
                                class="text-gray-600 leading-relaxed line-clamp-4"
                            >
                                {{ review.review }}
                            </p>
                        </div>
                    </template>
                </vueper-slide>
            </vueper-slides>
        </div>
    </section>
</template>

<script setup>
import { VueperSlides, VueperSlide } from "vueperslides";
import "vueperslides/dist/vueperslides.css";
import { Star } from "lucide-vue-next";
import coffeeReviews from "../Data/coffeereviews";

const totalReviews = coffeeReviews.length;
</script>

<style scoped>
.vueperslides__bullet {
    @apply bg-white bg-opacity-30 w-2 h-2;
}
.vueperslides__bullet--active {
    @apply bg-white bg-opacity-100;
}
.vueperslides__bullets {
    @apply mt-8;
}
.line-clamp-4 {
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
