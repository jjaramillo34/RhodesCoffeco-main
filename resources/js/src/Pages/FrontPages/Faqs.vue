<template>
    <AdminLayout>
        <!-- Hero Section -->
        <ParallaxSection
            backgroundImage="imgs/started_img_n3.jpeg"
            title="Frequently Asked Questions"
            subtitle="Find answers to common questions about our coffee cart catering services"
            ariaLabel="FAQ Page Header"
            overlayOpacity="0.5"
        />

        <!-- FAQ Content -->
        <section class="py-20 bg-gray-50" aria-label="FAQ Content">
            <div class="container mx-auto px-5 md:px-20">
                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto mb-16">
                    <div class="relative">
                        <input
                            type="text"
                            v-model="searchQuery"
                            placeholder="Search questions..."
                            class="w-full px-6 py-4 bg-white rounded-full shadow-md border border-gray-200 focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                            aria-label="Search FAQs"
                        />
                        <i
                            class="fas fa-search absolute right-6 top-1/2 transform -translate-y-1/2 text-gray-400"
                        ></i>
                    </div>
                </div>

                <!-- FAQ Grid -->
                <div class="max-w-4xl mx-auto">
                    <div
                        v-for="(item, index) in filteredFaqs"
                        :key="index"
                        class="mb-8 transform hover:-translate-y-1 transition-all duration-300"
                    >
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden cursor-pointer"
                            @click="toggleFaq(index)"
                            :class="{
                                'ring-2 ring-yellow-500': activeFaq === index,
                            }"
                        >
                            <!-- Question -->
                            <div class="p-6 flex justify-between items-center">
                                <h2
                                    class="text-xl md:text-2xl font-semibold text-gray-800 pr-8"
                                >
                                    {{ item.query }}
                                </h2>
                                <i
                                    class="fas transition-transform duration-300"
                                    :class="
                                        activeFaq === index
                                            ? 'fa-chevron-up'
                                            : 'fa-chevron-down'
                                    "
                                ></i>
                            </div>

                            <!-- Answer -->
                            <div
                                class="overflow-hidden transition-all duration-300"
                                :class="
                                    activeFaq === index ? 'max-h-96' : 'max-h-0'
                                "
                            >
                                <div class="p-6 pt-0 bg-gray-50">
                                    <p
                                        class="text-lg text-gray-600 leading-relaxed"
                                        v-html="item.answer"
                                    ></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- No Results Message -->
                    <div
                        v-if="filteredFaqs.length === 0"
                        class="text-center py-12"
                    >
                        <i
                            class="fas fa-search text-4xl text-gray-300 mb-4"
                        ></i>
                        <p class="text-xl text-gray-500">
                            No matching questions found
                        </p>
                    </div>
                </div>

                <!-- Contact Section -->
                <div class="text-center mt-16">
                    <p class="text-xl text-gray-600 mb-6">
                        Can't find what you're looking for?
                    </p>
                    <YellowBtn
                        text="Contact Us"
                        redirectTo="/contact"
                        class="text-lg px-8 py-4"
                    />
                </div>
            </div>
        </section>
        <BookingSection />
    </AdminLayout>
</template>

<script setup>
import { ref, computed } from "vue";
import AdminLayout from "../../Layouts/Frontend.vue";
import ParallaxSection from "../../Components/ParallaxSection.vue";
import YellowBtn from "../../Components/YellowBtn.vue";
import faqsCollection from "../../Data/faqs";
import BookingSection from "../../Components/BookingSection.vue";

const searchQuery = ref("");
const activeFaq = ref(null);

// Filter FAQs based on search query
const filteredFaqs = computed(() => {
    if (!searchQuery.value) return faqsCollection;
    const query = searchQuery.value.toLowerCase();
    return faqsCollection.filter(
        (faq) =>
            faq.query.toLowerCase().includes(query) ||
            faq.answer.toLowerCase().includes(query)
    );
});

// Toggle FAQ accordion
const toggleFaq = (index) => {
    activeFaq.value = activeFaq.value === index ? null : index;
};
</script>

<style scoped>
.max-h-96 {
    max-height: 24rem;
}

.max-h-0 {
    max-height: 0;
}
</style>
