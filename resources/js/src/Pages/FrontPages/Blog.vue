<template>
    <AdminLayout>
        <!-- Hero Section -->
        <ParallaxSection
            backgroundImage="imgs/started_img_n3.jpeg"
            title="Our Blog"
            subtitle="Stories, insights, and updates from Rhodes Coffee Co."
            ariaLabel="Blog Page Header"
            overlayOpacity="0.5"
        />

        <!-- Blog Content -->
        <section class="py-24 bg-brand-sage-light">
            <div class="container mx-auto px-5 lg:px-20">
                <!-- Blog Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                    <article
                        v-for="post in posts"
                        :key="post.title"
                        class="bg-white rounded-2xl shadow-sm overflow-hidden transform hover:-translate-y-1 transition-all duration-300"
                    >
                        <!-- Image -->
                        <div class="relative h-64 overflow-hidden">
                            <img
                                :src="`/imgs/${post.image}`"
                                :alt="post.title"
                                class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500"
                            />
                            <div
                                class="absolute inset-0 bg-black bg-opacity-20 hover:bg-opacity-10 transition-opacity duration-300"
                            ></div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div
                                class="flex items-center gap-2 text-brand-sage-dark mb-4"
                            >
                                <Calendar class="w-4 h-4" />
                                <time class="text-sm">{{
                                    formatDate(post.date)
                                }}</time>
                            </div>

                            <h2
                                class="text-2xl font-serif text-gray-800 mb-4 line-clamp-2"
                            >
                                {{ post.title }}
                            </h2>

                            <p class="text-gray-600 mb-6 line-clamp-3">
                                {{ post.excerpt }}
                            </p>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <User
                                        class="w-4 h-4 text-brand-pink-dark"
                                    />
                                    <span class="text-sm text-gray-600">{{
                                        post.author
                                    }}</span>
                                </div>
                                <button
                                    @click="openPost(post)"
                                    class="text-brand-sage-dark hover:text-brand-sage flex items-center gap-1 transition-colors"
                                >
                                    Read more
                                    <ArrowRight class="w-4 h-4" />
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Post Modal -->
        <fwb-modal v-if="selectedPost" @close="closePost" size="4xl">
            <template #body>
                <article class="p-8">
                    <img
                        :src="`/imgs/${selectedPost.image}`"
                        :alt="selectedPost.title"
                        class="w-full h-96 object-cover rounded-xl mb-8"
                    />
                    <div class="prose prose-lg max-w-none">
                        <h1 class="text-4xl font-serif mb-4">
                            {{ selectedPost.title }}
                        </h1>
                        <div class="flex items-center gap-4 text-gray-600 mb-8">
                            <div class="flex items-center gap-2">
                                <Calendar class="w-4 h-4" />
                                <time>{{ formatDate(selectedPost.date) }}</time>
                            </div>
                            <div class="flex items-center gap-2">
                                <User class="w-4 h-4" />
                                <span>{{ selectedPost.author }}</span>
                            </div>
                        </div>
                        <div v-html="selectedPost.content"></div>
                    </div>
                </article>
            </template>
        </fwb-modal>

        <BookingSection />
    </AdminLayout>
</template>

<script setup>
import { ref } from "vue";
import AdminLayout from "../../Layouts/Frontend.vue";
import ParallaxSection from "../../Components/ParallaxSection.vue";
import BookingSection from "../../Components/BookingSection.vue";
import { FwbModal } from "flowbite-vue";
import { Calendar, User, ArrowRight } from "lucide-vue-next";
import { blogPosts } from "../../Data/blog-posts";

const posts = blogPosts;
const selectedPost = ref(null);

function formatDate(dateString) {
    return new Date(dateString).toLocaleDateString("en-US", {
        year: "numeric",
        month: "long",
        day: "numeric",
    });
}

function openPost(post) {
    selectedPost.value = post;
}

function closePost() {
    selectedPost.value = null;
}
</script>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
