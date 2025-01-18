<template>
    <section
        class="py-24 bg-brand-sage-light"
        aria-labelledby="what-to-expect-title"
    >
        <div class="container mx-auto px-5 lg:px-20">
            <!-- Header -->
            <header class="text-center mb-16">
                <h2
                    id="what-to-expect-title"
                    class="text-4xl md:text-5xl font-serif mb-6 text-gray-800"
                >
                    What to Expect
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Experience our full mobile espresso bar service, bringing
                    artisanal coffee experiences to events across New York
                </p>
            </header>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 mb-16">
                <div
                    v-for="(service, index) in services"
                    :key="index"
                    class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300"
                    :aria-label="service.title"
                >
                    <div class="flex items-center justify-center mb-6">
                        <div
                            class="w-16 h-16 bg-brand-pink-light rounded-full flex items-center justify-center"
                        >
                            <component
                                :is="service.icon"
                                class="w-8 h-8 text-brand-pink-dark"
                            />
                        </div>
                    </div>
                    <h3
                        class="text-xl font-semibold text-gray-800 mb-4 text-center"
                    >
                        {{ service.title }}
                    </h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        {{ service.description }}
                    </p>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center">
                <YellowBtn
                    text="Request a Quote Today"
                    redirectTo="/contact"
                    class="inline-flex items-center gap-2"
                >
                    <template #icon>
                        <Sparkles class="w-5 h-5" />
                    </template>
                </YellowBtn>
            </div>
        </div>
    </section>
</template>

<script setup>
import YellowBtn from "./YellowBtn.vue";
import {
    Coffee,
    Users,
    Clock,
    Sparkles,
    HeartHandshake,
    ChefHat,
    Leaf,
    Award,
    GlassWater,
    CoffeeIcon,
} from "lucide-vue-next";

const services = [
    {
        icon: Coffee,
        title: "Premium Coffee Selection",
        description:
            "Enjoy our carefully curated selection of organic, fair-trade coffee beans, ensuring the perfect cup every time.",
    },
    {
        icon: ChefHat,
        title: "Professional Baristas",
        description:
            "Our skilled baristas craft each drink with precision and artistry, delivering cafe-quality beverages to your event.",
    },
    {
        icon: Users,
        title: "Customized Service",
        description:
            "We tailor our service to match your event's style and requirements, accommodating any size gathering.",
    },
    {
        icon: Clock,
        title: "Timely Setup",
        description:
            "We arrive early to ensure a seamless setup and prompt service throughout your event.",
    },
    {
        icon: Leaf,
        title: "Eco-Friendly Options",
        description:
            "Sustainable practices and eco-conscious serving options to minimize environmental impact.",
    },
    {
        icon: HeartHandshake,
        title: "Full-Service Experience",
        description:
            "From setup to cleanup, we handle everything so you can focus on enjoying your event.",
    },
    {
        icon: Award,
        title: "Quality Guarantee",
        description:
            "We're committed to exceeding expectations with our premium mobile coffee service.",
    },
    {
        icon: GlassWater,
        title: "Specialty Drinks",
        description:
            "A wide range of coffee drinks, including custom creations to match your event theme.",
    },
    {
        icon: CoffeeIcon,
        title: "Memorable Experience",
        description:
            "Creating unforgettable moments with our unique coffee cart service in Central New York.",
    },
];
</script>

<style scoped>
.yellow-btn {
    @apply bg-[#d69c46] hover:bg-[#b48032] text-black uppercase py-3 px-6 transition-colors duration-300;
}
</style>
