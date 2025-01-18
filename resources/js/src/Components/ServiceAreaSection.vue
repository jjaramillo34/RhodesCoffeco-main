<template>
    <section
        class="py-24 bg-brand-pink-light"
        aria-labelledby="service-area-title"
    >
        <div class="container mx-auto px-5 lg:px-20">
            <!-- Header -->
            <header class="text-center mb-16">
                <h2
                    id="service-area-title"
                    class="text-4xl md:text-5xl font-serif mb-6 text-gray-800"
                >
                    <strong>Mobile Coffee Cart & Espresso Bar Catering</strong>
                </h2>
                <p class="text-xl text-gray-600 mb-8">
                    bringing the coffee shop experience to you
                </p>
            </header>

            <!-- Service Areas Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Corporate Events -->
                <div
                    class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300"
                >
                    <div class="flex items-center justify-center mb-6">
                        <div
                            class="w-16 h-16 bg-brand-sage-light rounded-full flex items-center justify-center"
                        >
                            <Building2 class="w-8 h-8 text-brand-sage-dark" />
                        </div>
                    </div>
                    <h3
                        class="text-xl font-semibold text-gray-800 mb-4 text-center"
                    >
                        Corporate Events
                    </h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Conference, Office, School, Church, Expos & more
                    </p>
                </div>

                <!-- Weddings & Gatherings -->
                <div
                    class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300"
                >
                    <div class="flex items-center justify-center mb-6">
                        <div
                            class="w-16 h-16 bg-brand-sage-light rounded-full flex items-center justify-center"
                        >
                            <PartyPopper class="w-8 h-8 text-brand-sage-dark" />
                        </div>
                    </div>
                    <h3
                        class="text-xl font-semibold text-gray-800 mb-4 text-center"
                    >
                        Weddings & Gatherings
                    </h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        Bridal Showers, Baby Showers, Private Events
                    </p>
                </div>

                <!-- Service Area -->
                <div
                    class="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition-shadow duration-300"
                >
                    <div class="flex items-center justify-center mb-6">
                        <div
                            class="w-16 h-16 bg-brand-sage-light rounded-full flex items-center justify-center"
                        >
                            <MapPin class="w-8 h-8 text-brand-sage-dark" />
                        </div>
                    </div>
                    <h3
                        class="text-xl font-semibold text-gray-800 mb-4 text-center"
                    >
                        Service Area
                    </h3>
                    <div
                        class="text-gray-600 text-center leading-relaxed space-y-2"
                    >
                        <p>Serving the Central New York Area & Beyond:</p>
                        <p>
                            Syracuse, Watertown, Oswego, Adirondacks, the North
                            Country, Rochester
                        </p>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="mt-16 text-center">
                <div
                    class="max-w-3xl mx-auto bg-white rounded-xl p-8 shadow-sm"
                >
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">
                        Service Coverage
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Serving the Central New York Area & Beyond
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-6">
                        <li>Syracuse, Watertown, Oswego, Adirondacks</li>
                        <li>The North Country, Rochester</li>
                    </ul>
                    <p class="text-gray-600 italic">
                        We are willing to travel!
                    </p>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center mt-12">
                <YellowBtn
                    text="Book Your Event"
                    redirectTo="/contact"
                    class="inline-flex items-center gap-2"
                >
                    <template #icon>
                        <CalendarCheck class="w-5 h-5" />
                    </template>
                </YellowBtn>
            </div>
        </div>
    </section>
</template>

<script setup>
import { Building2, PartyPopper, MapPin, CalendarCheck } from "lucide-vue-next";
import YellowBtn from "./YellowBtn.vue";
</script>
