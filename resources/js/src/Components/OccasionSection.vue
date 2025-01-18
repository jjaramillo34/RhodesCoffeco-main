<template>
    <section
        class="py-24 bg-brand-pink-light"
        aria-labelledby="occasions-title"
    >
        <div class="container mx-auto px-5 lg:px-20">
            <!-- Header -->
            <header class="text-center mb-16">
                <h2
                    id="occasions-title"
                    class="text-4xl md:text-5xl font-serif mb-6 text-gray-800"
                >
                    Cart Coffee Catering for All Occasions
                </h2>
                <p class="text-l text-gray-600 max-w-3xl mx-auto">
                    Elevate your event with our premium mobile coffee cart
                    service in Central & Upstate New York
                </p>
            </header>

            <!-- Content Grid -->
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Image Column -->
                <div class="relative">
                    <img
                        :src="image"
                        :alt="imageAlt"
                        class="w-full h-[500px] object-cover rounded-xl shadow-lg"
                    />
                    <div
                        class="absolute inset-0 bg-black bg-opacity-20 rounded-xl"
                    ></div>
                </div>

                <!-- Text Content Column -->
                <div class="space-y-8">
                    <div
                        v-for="(feature, index) in features"
                        :key="index"
                        class="flex gap-4"
                    >
                        <div class="flex-shrink-0">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm"
                            >
                                <component
                                    :is="feature.icon"
                                    class="w-6 h-6 text-brand-pink-dark"
                                />
                            </div>
                        </div>
                        <div>
                            <h3
                                class="text-xl font-semibold mb-2 text-gray-800"
                            >
                                {{ feature.title }}
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                {{ feature.description }}
                            </p>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="pt-6">
                        <YellowBtn
                            text="Book Your Event Today"
                            redirectTo="/contact"
                            class="inline-flex items-center gap-2"
                        >
                            <template #icon>
                                <CalendarCheck class="w-5 h-5" />
                            </template>
                        </YellowBtn>
                        <p class="mt-4 text-sm text-gray-500">
                            Serving Central New York and surrounding areas
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import {
    PartyPopper,
    Building2,
    HeartHandshake,
    CalendarCheck,
    Users,
} from "lucide-vue-next";
import YellowBtn from "./YellowBtn.vue";

defineProps({
    image: {
        type: String,
        required: true,
    },
    imageAlt: {
        type: String,
        default: "Rhodes Coffee Cart - Mobile Coffee Catering Service",
    },
});

const features = [
    {
        icon: PartyPopper,
        title: "Special Celebrations",
        description:
            "Perfect for weddings, bridal showers, baby showers, and milestone celebrations. We add a unique touch to your special day.",
    },
    {
        icon: Building2,
        title: "Corporate Events",
        description:
            "Elevate your corporate meetings, conferences, and office celebrations with our professional coffee service.",
    },

    {
        icon: Users,
        title: "Private Events",
        description:
            "Create memorable experiences at private parties, family reunions, and intimate gatherings with our artisanal coffee service.",
    },
];
</script>

<style scoped>
.fade-in {
    animation: fadeIn 0.8s ease-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
