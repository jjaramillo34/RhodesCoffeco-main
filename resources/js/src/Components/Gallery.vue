<template>
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <h2
                class="text-4xl md:text-5xl font-semibold text-center text-gray-800 mb-6"
            >
                Elevate Any Event with Coffee Cart Catering
            </h2>

            <!-- Image Grid -->
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-12"
            >
                <div
                    v-for="(image, index) in galleryImages"
                    :key="index"
                    class="relative overflow-hidden group cursor-pointer"
                    @click="openLightbox(index)"
                >
                    <img
                        :src="image.src"
                        :alt="image.alt"
                        class="w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-110"
                    />
                    <div
                        class="absolute inset-0 bg-black bg-opacity-20 transition-opacity duration-300 group-hover:bg-opacity-30"
                    >
                        <div
                            class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                        >
                            <i
                                class="fa-solid fa-expand text-white text-2xl"
                            ></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Caption -->
            <p class="text-center text-lg text-gray-600 mt-8">
                Bringing Premium Coffee Cart Experiences to Central & Upstate
                New York (Syracuse, Watertown, North Country, and beyond)
            </p>

            <!-- Action Buttons -->
            <div class="text-center mt-12 space-x-6">
                <Link
                    href="/contact"
                    class="inline-block px-8 py-3 bg-[#d69c46] hover:bg-[#d69c46e3] text-white text-lg transition-colors duration-300"
                >
                    Book Your Event
                </Link>
                <Link
                    href="/gallery"
                    class="inline-block px-8 py-3 border-2 border-[#d69c46] text-[#d69c46] hover:bg-[#d69c46] hover:text-white text-lg transition-colors duration-300"
                >
                    View Full Gallery
                </Link>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div
            v-if="lightboxOpen"
            class="fixed inset-0 z-50 bg-black bg-opacity-90 flex items-center justify-center"
            @click.self="closeLightbox"
        >
            <div class="relative max-w-7xl mx-auto px-4">
                <!-- Navigation Buttons -->
                <button
                    @click.stop="previousImage"
                    class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-[#d69c46] transition-colors"
                    aria-label="Previous image"
                >
                    <i class="fa-solid fa-chevron-left text-3xl"></i>
                </button>

                <button
                    @click.stop="nextImage"
                    class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-[#d69c46] transition-colors"
                    aria-label="Next image"
                >
                    <i class="fa-solid fa-chevron-right text-3xl"></i>
                </button>

                <!-- Close Button -->
                <button
                    @click.stop="closeLightbox"
                    class="absolute top-4 right-4 text-white hover:text-[#d69c46] transition-colors"
                    aria-label="Close modal"
                >
                    <i class="fa-solid fa-times text-3xl"></i>
                </button>

                <!-- Image -->
                <img
                    :src="currentImage.src"
                    :alt="currentImage.alt"
                    class="max-h-[80vh] mx-auto object-contain"
                />

                <!-- Caption -->
                <div class="text-center mt-4 text-white">
                    <p class="text-lg">{{ currentImage.alt }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from "vue";
import { Link } from "@inertiajs/vue3";

const galleryImages = [
    {
        src: "imgs/grid_gal1.jpeg",
        alt: "Coffee Cart at Corporate Rooftop Event",
    },
    {
        src: "imgs/grid_gal2.jpeg",
        alt: "Specialty Latte Art",
    },
    {
        src: "imgs/grid_gal13.jpeg",
        alt: "Professional Espresso Machine",
    },
    {
        src: "imgs/grid_gal4.jpeg",
        alt: "Coffee Cart Setup",
    },
    {
        src: "imgs/grid_gal5.jpeg",
        alt: "Custom Ritz-Carlton Coffee Branding",
    },
    {
        src: "imgs/grid_gal6.jpeg",
        alt: "Coffee Cart Equipment Details",
    },
    {
        src: "imgs/grid_gal7.jpeg",
        alt: "Professional Coffee Service",
    },
    {
        src: "imgs/grid_gal16.jpeg",
        alt: "Outdoor Coffee Cart Setup",
    },
];

const lightboxOpen = ref(false);
const currentIndex = ref(0);

const currentImage = computed(() => galleryImages[currentIndex.value]);

function openLightbox(index) {
    currentIndex.value = index;
    lightboxOpen.value = true;
    document.body.style.overflow = "hidden";
}

function closeLightbox() {
    lightboxOpen.value = false;
    document.body.style.overflow = "auto";
}

function nextImage() {
    currentIndex.value = (currentIndex.value + 1) % galleryImages.length;
}

function previousImage() {
    currentIndex.value =
        (currentIndex.value - 1 + galleryImages.length) % galleryImages.length;
}

// Handle keyboard navigation
onMounted(() => {
    const handleKeydown = (e) => {
        if (!lightboxOpen.value) return;

        switch (e.key) {
            case "ArrowLeft":
                previousImage();
                break;
            case "ArrowRight":
                nextImage();
                break;
            case "Escape":
                closeLightbox();
                break;
        }
    };

    window.addEventListener("keydown", handleKeydown);
    onUnmounted(() => {
        window.removeEventListener("keydown", handleKeydown);
    });
});
</script>
