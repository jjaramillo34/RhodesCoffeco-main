<template>
    <section
        class="py-24 bg-brand-sage"
        id="bookus"
        aria-labelledby="booking-title"
    >
        <div class="container mx-auto px-5 lg:px-20">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Info Column -->
                <div class="pt-20 lg:pl-20">
                    <div class="space-y-8">
                        <div>
                            <h2
                                id="booking-title"
                                class="text-3xl font-serif text-black mb-6"
                            >
                                <strong>Contact us</strong>
                            </h2>
                            <div class="space-y-4">
                                <p class="text-black text-lg">
                                    <Phone class="inline-block w-5 h-5 mr-2" />
                                    315-430-5996
                                </p>
                                <p class="text-black text-lg">
                                    <Mail class="inline-block w-5 h-5 mr-2" />
                                    contact@rhodescoffeeco.com
                                </p>
                                <p class="text-black text-lg">
                                    <MapPin class="inline-block w-5 h-5 mr-2" />
                                    Pulaski, New York
                                </p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div>
                            <h3 class="text-xl text-gray-900 mb-4">
                                <strong>Socials</strong>
                            </h3>
                            <div class="flex gap-4">
                                <a
                                    href="https://www.instagram.com/rhodescoffeeco/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="bg-red-900 p-2 rounded-full hover:bg-gray-100 transition-colors duration-300"
                                    aria-label="Follow us on Instagram"
                                >
                                    <Instagram
                                        class="w-6 h-6 text-brand-sage"
                                    />
                                </a>
                                <a
                                    href="https://www.facebook.com/rhodescoffeeco"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="bg-blue-900 p-2 rounded-full hover:bg-gray-100 transition-colors duration-300"
                                    aria-label="Follow us on Facebook"
                                >
                                    <Facebook class="w-6 h-6 text-brand-sage" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Form Column -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="mb-8">
                        <h2 class="text-3xl font-serif text-gray-800 mb-4">
                            Let's book your Coffee Cart Experience!
                        </h2>
                        <h3 class="text-lg text-gray-600">
                            📄 Fill out the form. 📩 Get a custom quote. ✅
                            Approve and Book.
                        </h3>
                    </div>

                    <!-- 17hats Form -->
                    <div class="form-container" ref="formContainer">
                        <div v-if="!isScriptLoaded" class="loading-state">
                            <p class="text-gray-600 text-center">
                                Loading booking form...
                            </p>
                        </div>
                        <iframe
                            v-show="isScriptLoaded"
                            name="lc_contact_form"
                            frameborder="0"
                            width="100%"
                            height="1400"
                            src="https://rhodescoffeeco.17hats.com/p#/embed/hsffckwrrbbwhbnthxtzhgzgfsshwxgv"
                            title="Book your coffee cart experience"
                            @load="handleIframeLoad"
                            scrolling="no"
                            style="overflow: hidden"
                            id="bookingForm"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { Phone, Mail, MapPin, Instagram, Facebook } from "lucide-vue-next";

const isScriptLoaded = ref(false);
const formContainer = ref(null);
let scriptElement = null;

function handleIframeLoad() {
    isScriptLoaded.value = true;
    // Initialize iFrame resizer after load
    if (window.iFrameResize) {
        window.iFrameResize(
            {
                log: false,
                heightCalculationMethod: "taggedElement",
                minHeight: 1240,
            },
            "#bookingForm"
        );
    }
}

onMounted(() => {
    try {
        scriptElement = document.createElement("script");
        scriptElement.src =
            "https://rhodescoffeeco.17hats.com/vendor/iframeSizer.min.js";
        scriptElement.async = true;
        scriptElement.onload = () => {
            isScriptLoaded.value = true;
            // Initialize iFrame resizer after script loads
            if (window.iFrameResize) {
                window.iFrameResize(
                    {
                        log: false,
                        heightCalculationMethod: "taggedElement",
                        minHeight: 1250,
                    },
                    "#bookingForm"
                );
            }
        };
        scriptElement.onerror = (error) => {
            console.error("Error loading 17hats script:", error);
            isScriptLoaded.value = false;
        };
        document.body.appendChild(scriptElement);
    } catch (error) {
        console.error("Error in BookingSection setup:", error);
    }
});

onUnmounted(() => {
    if (scriptElement && scriptElement.parentNode) {
        scriptElement.parentNode.removeChild(scriptElement);
    }
});
</script>

<style scoped>
.form-container {
    min-height: 1200px;
    overflow: hidden;
    position: relative;
}

.form-container iframe {
    width: 100%;
    min-height: 1200px;
    border: none;
}

.loading-state {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f9fafb;
    border-radius: 0.75rem;
}
</style>
