<template>
    <ParallaxSection
        backgroundImage="imgs/started_img_n3.jpeg"
        title="Have Questions About Our Coffee Cart Service?"
        subtitle="Get answers to common questions about our mobile coffee cart service in Pulaski and Central New York"
        overlayOpacity="0.7"
        ariaLabel="Frequently Asked Questions Section"
    >
        <template #content>
            <div class="max-w-3xl mx-auto text-center text-white space-y-8">
                <div class="grid md:grid-cols-3 gap-6 mt-12">
                    <!-- Common Questions -->
                    <div
                        class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-lg"
                    >
                        <i
                            class="fa-solid fa-question text-3xl text-[#d69c46] mb-4"
                        ></i>
                        <h3 class="text-xl font-semibold mb-2">
                            Common Questions
                        </h3>
                        <p class="text-sm">
                            Find answers about pricing, services, and what to
                            expect
                        </p>
                    </div>

                    <!-- Service Area -->
                    <div
                        class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-lg"
                    >
                        <i
                            class="fa-solid fa-map-marker-alt text-3xl text-[#d69c46] mb-4"
                        ></i>
                        <h3 class="text-xl font-semibold mb-2">Service Area</h3>
                        <p class="text-sm">
                            Learn about our coverage in Pulaski and surrounding
                            areas
                        </p>
                    </div>

                    <!-- Booking Process -->
                    <div
                        class="bg-white bg-opacity-10 backdrop-blur-sm p-6 rounded-lg"
                    >
                        <i
                            class="fa-solid fa-calendar-check text-3xl text-[#d69c46] mb-4"
                        ></i>
                        <h3 class="text-xl font-semibold mb-2">
                            Booking Process
                        </h3>
                        <p class="text-sm">
                            Understand how to book and secure your date
                        </p>
                    </div>
                </div>

                <div class="mt-12 space-y-6">
                    <p class="text-lg">
                        Can't find what you're looking for? Check our
                        comprehensive FAQ page
                    </p>
                    <div class="flex justify-center gap-4">
                        <Link
                            href="/faqs"
                            class="inline-flex items-center px-8 py-3 bg-[#d69c46] hover:bg-[#d69c46e3] text-white text-lg transition-colors duration-300 rounded-lg"
                        >
                            <i class="fa-solid fa-book-open mr-2"></i>
                            View FAQ Guide
                        </Link>
                        <Link
                            href="/contact"
                            class="inline-flex items-center px-8 py-3 border-2 border-white hover:bg-white hover:text-gray-800 text-white text-lg transition-colors duration-300 rounded-lg"
                        >
                            <i class="fa-solid fa-envelope mr-2"></i>
                            Ask a Question
                        </Link>
                    </div>
                </div>
            </div>
        </template>
    </ParallaxSection>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import ParallaxSection from "./ParallaxSection.vue";
</script>
