<template>
    <Frontend>
        <div>
            <!-- Hero Section -->
            <HeroVue
                backgroundImage="imgs/started_img_n5.jpeg"
                title="Cheers"
                subtitle="specialty coffee cart catering to elevate any event"
                location="New York, NY"
                ctaText="Request a Quote"
                ctaLink="/contact"
            />

            <!-- Parallax Section -->
            <ParallaxSection
                backgroundImage="imgs/SELAH-19618-scaled.webp"
                title="Rhodes:"
                subtitle="Where every cup tells a story of quality, service, and memorable moments."
                ariaLabel="Coffee Cart and Espresso Bar Catering in New York"
            />

            <!-- Service Area Section -->
            <ServiceAreaSection />

            <!-- Event Types Section -->
            <EventTypesSection />

            <!-- Welcome Highlights -->
            <WelcomeHighlights />

            <!-- Occasion Section -->
            <OccasionSection
                image="imgs/grid_gal7.jpeg"
                imageAlt="Rhodes Coffee Cart - Mobile Coffee Catering Service"
            />

            <!-- Mission Section -->
            <MissionSection
                backgroundImage="imgs/started_img_n3.jpeg"
                quote="Inspired by the road [Rhode]—the unexpected places life takes us, the people we meet, and ultimately, the place we call home—Rhodes Coffee Co. is an homage to our roots. Rooted in the belief that life is best lived authentically, organically, and close to nature, we proudly offer organic, fair-trade coffee that reflects our commitment to these values"
                author="Tricia Hax"
                role="Owner"
            />

            <!-- Commitment Section -->
            <CommitmentSection />

            <!-- Testimonial -->
            <Testimonial />

            <!-- Gallery -->
            <Gallery />

            <!-- Booking Section -->
            <BookingSection />

            <!-- Subscription Modal -->
            <fwb-modal v-if="isShowModal" @close="closeModal" size="2xl">
                <template #body>
                    <form
                        @submit.prevent="
                            form.post('/subscribe', {
                                onSuccess: () => closeModal('subscriber'),
                            })
                        "
                    >
                        <section
                            class="text-gray-900 flex flex-col text-center items-center gap-10 py-20 px-5 md:px-16"
                        >
                            <img
                                src="../../Imgs/logo.png"
                                alt="Rhodes Coffee Co. Logo"
                                class="h-24 w-52"
                            />
                            <p class="text-lg">
                                Subscribe to receive a coupon code for 10% off
                                your first order of RhodesCoffeeCo Merchandise!
                            </p>
                            <div class="flex flex-col md:flex-row gap-5">
                                <input
                                    type="text"
                                    v-model="form.phone"
                                    class="p-5 border-2 border-[#f0dde0]"
                                    placeholder="Enter your phone number"
                                    aria-label="Phone number"
                                />
                                <button
                                    :disabled="form.processing"
                                    class="float-right uppercase items-center hidden md:flex py-3 px-6 bg-[#d69c46] hover:bg-[#b48032] text-black text-lg transition-colors duration-300"
                                >
                                    Subscribe
                                </button>
                            </div>
                            <p
                                v-if="form.errors.phone"
                                class="mt-2 text-sm text-red-600"
                            >
                                {{ form.errors.phone }}
                            </p>
                            <fwb-alert
                                closable
                                icon
                                border
                                type="success"
                                v-if="$page.props.flash.message"
                            >
                                {{ $page.props.flash.message }}
                            </fwb-alert>
                            <fwb-alert
                                closable
                                icon
                                border
                                type="danger"
                                v-if="$page.props.flash.exception"
                            >
                                {{ $page.props.flash.exception }}
                            </fwb-alert>
                        </section>
                    </form>
                </template>
            </fwb-modal>

            <!-- About Section -->
            <AboutSection />
        </div>
    </Frontend>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { Link, useForm } from "@inertiajs/vue3";
import { FwbModal, FwbAlert } from "flowbite-vue";
import Frontend from "../../Layouts/Frontend.vue";
import YellowBtn from "../../Components/YellowBtn.vue";
import HeroVue from "../../Components/Hero.vue";
import ParallaxSection from "../../Components/ParallaxSection.vue";
import OccasionSection from "../../Components/OccasionSection.vue";
import MissionSection from "../../Components/MissionSection.vue";
import CommitmentSection from "../../Components/CommitmentSection.vue";
import Testimonial from "../../Components/Testimonial.vue";
import Gallery from "../../Components/Gallery.vue";
import EventTypesSection from "../../Components/EventTypesSection.vue";
import BookingSection from "../../Components/BookingSection.vue";
import ServiceAreaSection from "../../Components/ServiceAreaSection.vue";
import WelcomeHighlights from "../../Components/WelcomeHighlights.vue";
import AboutSection from "../../Components/AboutSection.vue";
import FaqPreview from "../../Components/FaqPreview.vue";

const isShowModal = ref(false);
const form = useForm({ phone: null });

function closeModal(type = "cancel") {
    isShowModal.value = false;
    localStorage.setItem("subscribe", type);
}

function showModal() {
    const modal = localStorage.getItem("subscribe");
    if (modal == null) {
        isShowModal.value = true;
    }
}

showModal();
</script>
