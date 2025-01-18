<template>
    <AdminLayout>
        <!-- Hero Section -->
        <ParallaxSection
            backgroundImage="imgs/history_inner_bg1.jpeg"
            title="Let's Make it Happen"
            subtitle="Crafted Moments, Brewed by Rhodes"
            ariaLabel="Contact Rhodes Coffee Co. - Book your coffee cart service"
            overlayOpacity="0.5"
        />

        <!-- Contact Content -->
        <section
            class="grid lg:grid-cols-2 gap-10 px-5 md:px-20 py-12 md:py-32 bg-brand-pink-light transition-all animate-fade"
        >
            <div class="flex flex-col gap-8">
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-serif text-gray-800">
                        Get in Touch with Rhodes Coffee Co.
                    </h2>
                    <p class="text-gray-600 text-lg">
                        Whether you have a question, feedback, or want to
                        inquire about our catering services, we're here to help!
                        Reach out to us through any of the following channels:
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center gap-3 text-gray-700">
                        <Mail class="w-5 h-5 text-brand-sage-dark" />
                        <a
                            href="mailto:contact@rhodescoffeeco.com"
                            class="hover:text-brand-pink-dark transition-colors"
                        >
                            contact@rhodescoffeeco.com
                        </a>
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <Phone class="w-5 h-5 text-brand-sage-dark" />
                        <a
                            href="tel:+13154305996"
                            class="hover:text-brand-pink-dark transition-colors"
                        >
                            (315) 430-5996
                        </a>
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <MapPin class="w-5 h-5 text-brand-sage-dark" />
                        <span>Pulaski, New York</span>
                    </div>
                </div>

                <div class="flex gap-6">
                    <a
                        href="https://www.instagram.com/rhodescoffeeco/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-red-900 p-2 rounded-full hover:bg-gray-100 transition-colors duration-300"
                        aria-label="Follow us on Instagram"
                    >
                        <Instagram class="w-6 h-6 text-brand-sage" />
                    </a>
                    <a
                        href="https://www.facebook.com/profile.php?id=100091245697148"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-blue-900 p-2 rounded-full hover:bg-gray-100 transition-colors duration-300"
                        aria-label="Follow us on Facebook"
                    >
                        <Facebook class="w-6 h-6 text-brand-sage" />
                    </a>
                </div>
            </div>

            <div class="lg:pl-12 bg-white p-8 rounded-lg shadow-sm">
                <h3 class="text-2xl font-serif text-gray-800 mb-8">
                    Request an Event Quote
                </h3>

                <!-- 17hats Form -->
                <iframe
                    name="lc_contact_form"
                    frameborder="0"
                    width="100%"
                    height="1200"
                    src="https://rhodescoffeeco.17hats.com/p#/embed/hsffckwrrbbwhbnthxtzhgzgfsshwxgv"
                    title="Contact form for event booking"
                    class="w-full"
                ></iframe>
            </div>
        </section>

        <!-- Map Section -->
        <section class="relative">
            <div
                class="absolute inset-0 bg-brand-sage/10 pointer-events-none"
            ></div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11564.584150330187!2d-76.1269897!3d43.56184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d8358140e9fabf%3A0x2b06051bf3685f38!2sRhodes%20Coffee%20Co!5e0!3m2!1sen!2sus!4v1710689491419!5m2!1sen!2sus"
                width="100%"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Rhodes Coffee Co. location map"
                class="w-full"
            ></iframe>
        </section>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from "../../Layouts/Frontend.vue";
import ParallaxSection from "../../Components/ParallaxSection.vue";
import { Mail, Phone, MapPin, Instagram, Facebook } from "lucide-vue-next";
</script>
