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

                <!-- Test Form (Development Only) -->
                <div
                    v-if="showTestForm"
                    class="mb-8 p-4 bg-yellow-50 rounded-lg"
                >
                    <div class="flex justify-between items-center mb-4">
                        <h4 class="font-semibold">Development Test Form</h4>
                        <button
                            @click="toggleForm"
                            class="text-sm text-blue-600 hover:underline"
                        >
                            Switch to
                            {{ showTestForm ? "17hats Form" : "Test Form" }}
                        </button>
                    </div>
                    <form @submit.prevent="submitTestForm" class="space-y-4">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-1"
                                >Name</label
                            >
                            <input
                                v-model="testForm.name"
                                type="text"
                                class="w-full p-2 border rounded-md"
                                required
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-1"
                                >Email</label
                            >
                            <input
                                v-model="testForm.email"
                                type="email"
                                class="w-full p-2 border rounded-md"
                                required
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-1"
                                >Event Date</label
                            >
                            <input
                                v-model="testForm.eventDate"
                                type="date"
                                class="w-full p-2 border rounded-md"
                                required
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-1"
                                >Message</label
                            >
                            <textarea
                                v-model="testForm.message"
                                class="w-full p-2 border rounded-md"
                                rows="4"
                                required
                            ></textarea>
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-[#d69c46] hover:bg-[#b48032] text-white py-3 rounded-md transition-colors"
                        >
                            Submit Test Form
                        </button>
                    </form>
                </div>

                <!-- 17hats Form -->
                <div v-else>
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
import { ref } from "vue";
import { router } from "@inertiajs/vue3";
import AdminLayout from "../../Layouts/Frontend.vue";
import ParallaxSection from "../../Components/ParallaxSection.vue";
import {
    Mail,
    Phone,
    MapPin,
    Instagram,
    Facebook,
    Clock,
} from "lucide-vue-next";

const showTestForm = ref(process.env.NODE_ENV === "development");
const testForm = ref({
    name: "",
    email: "",
    eventDate: "",
    message: "",
});

const toggleForm = () => {
    showTestForm.value = !showTestForm.value;
};

const submitTestForm = () => {
    // Simulate form submission delay
    setTimeout(() => {
        // Redirect to quote submitted page
        router.visit("/quote-submitted");
    }, 500);
};
</script>
