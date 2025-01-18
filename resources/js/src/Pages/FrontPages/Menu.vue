<template>
    <AdminLayout>
        <!-- Hero Section -->
        <ParallaxSection
            backgroundImage="imgs/started_img_n3.jpeg"
            title="Our Menu"
            subtitle="Crafted with love, served with passion"
            ariaLabel="Menu Page Header"
            overlayOpacity="0.5"
        />

        <!-- Menu Content -->
        <section class="py-24 bg-brand-pink-light" aria-label="Menu Content">
            <div class="container mx-auto px-5 md:px-20">
                <!-- Header -->
                <div class="text-center mb-20 max-w-3xl mx-auto">
                    <div class="relative">
                        <img
                            src="../../Imgs/updated_logo.png"
                            alt="Rhodes Coffee Co. Logo"
                            class="h-40 w-40 mx-auto mb-8 animate-float"
                        />
                        <div
                            class="absolute -bottom-4 -right-4 transform rotate-12"
                        >
                            <HeartHandshake
                                class="w-8 h-8 text-brand-pink-dark"
                            />
                        </div>
                    </div>
                    <h2
                        class="text-3xl md:text-4xl font-serif mb-6 text-gray-800"
                    >
                        We have something for everyone
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Discover our carefully curated selection of beverages,
                        crafted to perfection with organic ingredients and love
                    </p>
                </div>

                <!-- Menu Grid -->
                <div
                    class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto"
                >
                    <!-- Hot & Iced Drinks -->
                    <div
                        class="bg-white rounded-2xl shadow-sm p-10 transform hover:-translate-y-1 transition-all duration-300"
                    >
                        <div class="text-center mb-8">
                            <div
                                class="w-16 h-16 bg-brand-sage-light rounded-full flex items-center justify-center mx-auto mb-6"
                            >
                                <Coffee class="w-8 h-8 text-brand-sage-dark" />
                            </div>
                            <h3 class="text-2xl font-serif mb-4 text-gray-800">
                                Drinks
                            </h3>
                            <p class="text-gray-600">Available Hot or Iced</p>
                        </div>
                        <ul class="space-y-4">
                            <li
                                v-for="drink in drinks"
                                :key="drink"
                                class="flex items-center text-lg group"
                            >
                                <Check
                                    class="w-5 h-5 text-brand-sage-dark mr-3 opacity-0 group-hover:opacity-100 transition-opacity"
                                />
                                <span
                                    class="text-gray-700 group-hover:text-brand-pink-dark group-hover:translate-x-1 transition-all"
                                    >{{ drink }}</span
                                >
                            </li>
                        </ul>
                    </div>

                    <!-- Milks + Alternatives -->
                    <div
                        class="bg-white rounded-2xl shadow-sm p-10 transform hover:-translate-y-1 transition-all duration-300"
                    >
                        <div class="text-center mb-8">
                            <div
                                class="w-16 h-16 bg-brand-sage-light rounded-full flex items-center justify-center mx-auto mb-6"
                            >
                                <Milk class="w-8 h-8 text-brand-sage-dark" />
                            </div>
                            <h3 class="text-2xl font-serif mb-4 text-gray-800">
                                Milks + Alternatives
                            </h3>
                            <p class="text-gray-600">
                                Dairy & Plant-Based Options
                            </p>
                        </div>
                        <ul class="space-y-4">
                            <li
                                v-for="milk in milks"
                                :key="milk"
                                class="flex items-center text-lg group"
                            >
                                <Check
                                    class="w-5 h-5 text-brand-sage-dark mr-3 opacity-0 group-hover:opacity-100 transition-opacity"
                                />
                                <span
                                    class="text-gray-700 group-hover:text-brand-pink-dark group-hover:translate-x-1 transition-all"
                                    >{{ milk }}</span
                                >
                            </li>
                        </ul>
                    </div>

                    <!-- Syrups + Sauces -->
                    <div
                        class="bg-white rounded-2xl shadow-sm p-10 transform hover:-translate-y-1 transition-all duration-300 md:col-span-2 lg:col-span-1"
                    >
                        <div class="text-center mb-8">
                            <div
                                class="w-16 h-16 bg-brand-sage-light rounded-full flex items-center justify-center mx-auto mb-6"
                            >
                                <Droplets
                                    class="w-8 h-8 text-brand-sage-dark"
                                />
                            </div>
                            <h3 class="text-2xl font-serif mb-4 text-gray-800">
                                Syrups + Sauces
                            </h3>
                            <p class="text-gray-600">Customize Your Drink</p>
                        </div>
                        <ul class="space-y-4">
                            <li
                                v-for="syrup in syrups"
                                :key="syrup"
                                class="flex items-center text-lg group"
                            >
                                <Check
                                    class="w-5 h-5 text-brand-sage-dark mr-3 opacity-0 group-hover:opacity-100 transition-opacity"
                                />
                                <span
                                    class="text-gray-700 group-hover:text-brand-pink-dark group-hover:translate-x-1 transition-all"
                                    >{{ syrup }}</span
                                >
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="text-center mt-20">
                    <div
                        class="inline-flex items-center justify-center gap-3 bg-brand-sage-light px-8 py-4 rounded-full mb-8"
                    >
                        <Sparkles class="w-6 h-6 text-brand-sage-dark" />
                        <p class="text-xl text-gray-700">
                            Ready to elevate your event with our coffee service?
                        </p>
                    </div>
                    <div>
                        <YellowBtn
                            text="Request a Quote"
                            redirectTo="/contact"
                            class="text-lg px-8 py-4"
                        />
                    </div>
                </div>
            </div>
        </section>
        <BookingSection />
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "../../Layouts/Frontend.vue";
import ParallaxSection from "../../Components/ParallaxSection.vue";
import YellowBtn from "../../Components/YellowBtn.vue";
import {
    Coffee,
    Milk,
    Droplets,
    Check,
    Sparkles,
    HeartHandshake,
} from "lucide-vue-next";
import BookingSection from "../../Components/BookingSection.vue";

const drinks = [
    "Latte",
    "Cappuccino",
    "Americano",
    "Chai",
    "Matcha",
    "Hot Chocolate",
    "Tea Selection",
];

const milks = ["Whole Milk", "Oat Milk", "Almond Milk"];

const syrups = [
    "Vanilla",
    "Mocha",
    "Caramel",
    "Additional flavors upon request",
];
</script>

<style scoped>
.animate-float {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
    }
    100% {
        transform: translateY(0px);
    }
}
</style>
