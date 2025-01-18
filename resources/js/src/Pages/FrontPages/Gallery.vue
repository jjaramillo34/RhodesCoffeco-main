<template>
    <Frontend>
        <!-- Hero Section -->
        <ParallaxSection
            backgroundImage="imgs/started_img_n3.jpeg"
            title="Our Gallery"
            subtitle="Capturing moments of joy, one cup at a time"
            overlayOpacity="0.6"
            ariaLabel="Gallery Page"
        />

        <!-- Gallery Grid -->
        <section class="py-24 bg-brand-sage-light">
            <div class="container mx-auto px-4">
                <!-- Gallery Description -->
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <h2 class="text-4xl font-serif mb-6">
                        Coffee Cart Moments
                    </h2>
                    <p class="text-gray-600 leading-relaxed">
                        Browse through our collection of memorable events, from
                        intimate gatherings to grand celebrations. Each image
                        tells a story of connection, craftsmanship, and the
                        perfect cup of coffee.
                    </p>
                </div>

                <!-- Gallery Grid -->
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
                >
                    <!-- Gallery Items -->
                    <div
                        v-for="(image, index) in galleryImages"
                        :key="index"
                        class="relative group cursor-pointer overflow-hidden rounded-lg shadow-lg"
                        @click="openLightbox(index)"
                    >
                        <img
                            :src="image.src"
                            :alt="image.alt"
                            class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-110"
                        />
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center"
                        >
                            <p class="text-white text-lg font-medium">
                                {{ image.caption }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lightbox Modal -->
        <div
            v-if="lightboxOpen"
            class="fixed inset-0 z-50 bg-black bg-opacity-90 flex items-center justify-center"
            @click="closeLightbox"
        >
            <div class="relative max-w-6xl mx-auto px-4">
                <!-- Navigation Buttons -->
                <button
                    @click.stop="previousImage"
                    class="absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-brand-pink transition-colors"
                >
                    <i class="fas fa-chevron-left text-3xl"></i>
                </button>
                <button
                    @click.stop="nextImage"
                    class="absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-brand-pink transition-colors"
                >
                    <i class="fas fa-chevron-right text-3xl"></i>
                </button>
                <!-- Close Button -->
                <button
                    @click.stop="closeLightbox"
                    class="absolute top-4 right-4 text-white hover:text-brand-pink transition-colors"
                >
                    <i class="fas fa-times text-3xl"></i>
                </button>
                <!-- Image -->
                <img
                    :src="currentImage.src"
                    :alt="currentImage.alt"
                    class="max-h-[80vh] mx-auto"
                />
                <!-- Caption -->
                <div class="text-center mt-4 text-white">
                    <p class="text-lg">{{ currentImage.caption }}</p>
                </div>
            </div>
        </div>
    </Frontend>
</template>

<script setup>
import { ref, computed } from "vue";
import Frontend from "../../Layouts/Frontend.vue";
import ParallaxSection from "../../Components/ParallaxSection.vue";

const lightboxOpen = ref(false);
const currentImageIndex = ref(0);

const galleryImages = [
    {
        src: "imgs/grid_gal1.jpeg",
        alt: "Coffee Cart Setup at Corporate Event",
        caption:
            "Corporate Event Setup - Bringing premium coffee experiences to professional gatherings",
    },
    {
        src: "imgs/grid_gal2.jpeg",
        alt: "Latte Art Showcase",
        caption:
            "Artisanal Latte Art - Each cup crafted with care and creativity",
    },
    {
        src: "imgs/grid_gal3.jpeg",
        alt: "Outdoor Wedding Coffee Service",
        caption:
            "Wedding Day Moments - Creating memorable experiences for special celebrations",
    },
    {
        src: "imgs/grid_gal4.jpeg",
        alt: "Coffee Cart Equipment",
        caption:
            "Professional Equipment - Quality tools for exceptional coffee service",
    },
    {
        src: "imgs/grid_gal5.jpeg",
        alt: "Coffee Service Team",
        caption: "Our Expert Team - Passionate baristas delivering excellence",
    },
    {
        src: "imgs/grid_gal6.jpeg",
        alt: "Coffee Cart at Evening Event",
        caption: "Evening Events - Elegant coffee service for any time of day",
    },
    {
        src: "imgs/grid_gal7.jpeg",
        alt: "Mobile Coffee Cart",
        caption:
            "Mobile Coffee Cart - Bringing the café experience to your location",
    },
    {
        src: "imgs/grid_gal11.jpeg",
        alt: "Coffee Drinks Display",
        caption:
            "Signature Drinks - A variety of coffee options for every taste",
    },
    {
        src: "imgs/started_img_n3.jpeg",
        alt: "Coffee Cart Ambiance",
        caption: "Creating Ambiance - Setting the perfect mood for your event",
    },
];

const currentImage = computed(() => galleryImages[currentImageIndex.value]);

function openLightbox(index) {
    currentImageIndex.value = index;
    lightboxOpen.value = true;
}

function closeLightbox() {
    lightboxOpen.value = false;
}

function nextImage(e) {
    e.stopPropagation();
    currentImageIndex.value =
        (currentImageIndex.value + 1) % galleryImages.length;
}

function previousImage(e) {
    e.stopPropagation();
    currentImageIndex.value =
        currentImageIndex.value === 0
            ? galleryImages.length - 1
            : currentImageIndex.value - 1;
}
</script>
