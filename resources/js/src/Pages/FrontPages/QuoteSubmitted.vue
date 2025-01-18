<template>
    <Frontend>
        <div class="min-h-screen bg-brand-sage-light">
            <div class="hidden">
                <title>Quote Submitted - Rhodes Coffee Co</title>
                <meta
                    name="description"
                    content="Quote Submitted - Rhodes Coffee Co"
                />
            </div>

            <!-- Title Section -->
            <section
                class="relative h-[40vh] min-h-[400px] flex items-center justify-center"
            >
                <!-- Background Image -->
                <div class="absolute inset-0 z-0">
                    <img
                        :src="heroImage"
                        alt="Coffee Cart Service Background"
                        class="w-full h-full object-cover object-center brightness-[0.85]"
                    />
                    <div
                        class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"
                    ></div>
                </div>

                <!-- Title Content -->
                <div class="relative z-10 text-center text-white px-4">
                    <h1 class="text-5xl md:text-6xl font-serif mb-4">
                        Thank You!
                    </h1>
                    <p class="text-xl md:text-2xl max-w-2xl mx-auto">
                        We're excited to be part of your special event
                    </p>
                </div>
            </section>

            <!-- Confirmation Content -->
            <section class="py-24 px-4 -mt-20">
                <div
                    class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-12"
                >
                    <!-- Success Icon -->
                    <div class="flex justify-center mb-8">
                        <div
                            class="w-20 h-20 bg-brand-pink-light rounded-full flex items-center justify-center"
                        >
                            <CheckCircle class="w-12 h-12 text-[#d69c46]" />
                        </div>
                    </div>

                    <!-- Header -->
                    <div class="text-center mb-12">
                        <h1 class="text-4xl font-serif mb-4">
                            We are stoked to caffeinate your day!
                        </h1>
                        <p class="text-xl text-gray-600">
                            We will get back to you within 24 hours or less with
                            a custom quote & more information.
                            <br />In the meantime, have a cup of coffee. 🙂
                        </p>
                    </div>

                    <!-- Image Gallery -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                        <img
                            :src="'/imgs/grid_gal1.jpeg'"
                            alt="Coffee Cart Setup"
                            class="w-full h-48 object-cover rounded-lg shadow-md"
                        />
                        <img
                            :src="'/imgs/grid_gal2.jpeg'"
                            alt="Coffee Service"
                            class="w-full h-48 object-cover rounded-lg shadow-md"
                        />
                        <img
                            :src="'/imgs/grid_gal3.jpeg'"
                            alt="Coffee Experience"
                            class="w-full h-48 object-cover rounded-lg shadow-md"
                        />
                    </div>

                    <!-- Signature -->
                    <div class="text-center space-y-2">
                        <p class="text-xl">Cheers,</p>
                        <h2 class="text-2xl font-serif">Rhodes Coffee Co</h2>
                        <p class="text-sm text-gray-500 mt-4">
                            *Please check your Junk Mail just in case for a
                            quote from us.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-center gap-6 mt-12">
                        <Link
                            href="/menu"
                            class="inline-flex items-center px-6 py-3 bg-[#d69c46] hover:bg-[#d69c46e3] text-white rounded-lg transition-colors duration-300"
                        >
                            <Coffee class="w-5 h-5 mr-2" />
                            View Our Menu
                        </Link>
                        <Link
                            href="/gallery"
                            class="inline-flex items-center px-6 py-3 border-2 border-[#d69c46] text-[#d69c46] hover:bg-[#d69c46] hover:text-white rounded-lg transition-colors duration-300"
                        >
                            <Image class="w-5 h-5 mr-2" />
                            Browse Gallery
                        </Link>
                    </div>
                </div>
            </section>
        </div>
    </Frontend>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Frontend from "../../Layouts/Frontend.vue";
import { CheckCircle, Coffee, Image } from "lucide-vue-next";

// Import hero image
const heroImage = "/imgs/about_img1.jpeg";
</script>
