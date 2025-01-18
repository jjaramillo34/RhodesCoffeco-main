<template>
    <div>
        <!-- Main Footer -->
        <footer class="bg-white">
            <div
                class="container mx-auto grid md:grid-cols-3 text-center gap-10 py-24 px-8 md:px-20"
            >
                <!-- Contact Info -->
                <div class="flex flex-col items-center space-y-4">
                    <h3 class="text-xl font-semibold text-gray-800">
                        Stay in touch
                    </h3>
                    <img
                        src="../Imgs/updated_logo.png"
                        alt="Rhodes Coffee Co. Logo"
                        class="h-40 w-40"
                    />
                    <div class="space-y-2 text-gray-600">
                        <p>{{ appInfo.contact_email }}</p>
                        <p>{{ appInfo.contact_phone }}</p>
                        <p>{{ appInfo.contact_address }}</p>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="flex flex-col items-center space-y-7">
                    <h3 class="text-xl font-semibold text-gray-800">
                        Questions?
                    </h3>
                    <Link
                        href="/contact"
                        class="text-gray-600 hover:text-[#d69c46] transition-colors duration-300"
                        >Contact Us</Link
                    >
                    <div class="flex space-x-6">
                        <a
                            :href="appInfo.social_media.instagram"
                            target="_blank"
                            class="text-gray-600 hover:text-[#d69c46] transition-colors duration-300"
                            aria-label="Follow us on Instagram"
                        >
                            <i class="fa-brands fa-instagram text-3xl"></i>
                        </a>
                        <a
                            :href="appInfo.social_media.facebook"
                            target="_blank"
                            class="text-gray-600 hover:text-[#d69c46] transition-colors duration-300"
                            aria-label="Follow us on Facebook"
                        >
                            <i class="fa-brands fa-facebook text-3xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="flex flex-col items-center">
                    <h3 class="text-xl font-semibold text-gray-800 mb-6">
                        Menu
                    </h3>
                    <ul class="space-y-4">
                        <li v-for="link in quickLinks" :key="link.href">
                            <Link
                                :href="link.href"
                                class="text-gray-600 hover:text-[#d69c46] transition-colors duration-300"
                            >
                                {{ link.text }}
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="bg-brand-pink-light text-center py-4 text-sm text-gray-600"
            >
                <p>
                    <i class="far fa-copyright"></i>
                    {{ new Date().getFullYear() }} Rhodescoffeeco. All rights
                    reserved.
                </p>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { usePage } from "@inertiajs/vue3";

const appInfo = usePage().props.app_info;

const quickLinks = [
    { text: "Our Story", href: "/our-story" },
    { text: "FAQ", href: "/faqs" },
    { text: "Explore Menu", href: "/menu" },
    { text: "Contact", href: "/contact" },
];
</script>
