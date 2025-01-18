<template>
    <section
        class="py-24 bg-brand-sage-light"
        aria-labelledby="event-types-title"
    >
        <div class="container mx-auto px-5 lg:px-20">
            <!-- Header -->
            <header class="text-center mb-16">
                <h2
                    id="event-types-title"
                    class="text-4xl md:text-5xl font-serif mb-6 text-gray-800"
                >
                    <strong>Mobile Coffee Cart & Espresso Bar Catering</strong>
                </h2>
                <p class="text-xl text-gray-600 mb-12">
                    bringing the coffee shop experience to you
                </p>
            </header>

            <!-- Event Types Grid -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Corporate Events -->
                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div
                            class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-sm"
                        >
                            <Building2 class="w-12 h-12 text-brand-sage-dark" />
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">
                        Corporate Event Catering
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Offices, Conferences & Expos,<br />
                        Churches, Schools
                    </p>
                </div>

                <!-- Weddings & Gatherings -->
                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div
                            class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-sm"
                        >
                            <HeartHandshake
                                class="w-12 h-12 text-brand-pink-dark"
                            />
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">
                        Weddings & Gatherings
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Bridal Showers, Private Events,<br />
                        & more
                    </p>
                </div>

                <!-- Brand Activations -->
                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div
                            class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-sm"
                        >
                            <Store class="w-12 h-12 text-brand-sage-dark" />
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">
                        Brand Activations
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Grand Openings, Retail<br />
                        Activations, Green Rooms
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Building2, HeartHandshake, Store } from "lucide-vue-next";
</script>
