<template>
    <AdminLayout>
        <!-- Hero Section -->
        <ParallaxSection
            backgroundImage="imgs/started_img_n7.jpeg"
            title="Our Story"
            subtitle="Bringing artisanal coffee experiences to New York"
            ariaLabel="About Rhodes Coffee Co. - Mobile Coffee Cart in Pulaski, New York"
            overlayOpacity="0.5"
        />

        <!-- Founder Story Section -->
        <section class="py-20 bg-brand-pink-light">
            <div class="container mx-auto px-5 md:px-20">
                <div class="flex flex-col lg:flex-row gap-16 items-center">
                    <div class="lg:w-3/5">
                        <header class="mb-8">
                            <h2 class="text-3xl lg:text-5xl font-serif mb-4">
                                Meet the Founder
                            </h2>
                            <div
                                class="flex items-center gap-2 text-brand-sage-dark mb-6"
                            >
                                <Medal
                                    class="w-6 h-6 text-brand-pink-dark text-[#d4af37]"
                                />
                                <span
                                    class="text-lg text-brand-sage-dark text-gray-900"
                                    >Veteran Owned & Operated</span
                                >
                            </div>
                        </header>
                        <article class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Welcome! I'm Tricia, a dedicated mom, a proud
                                veteran, and the passionate founder of Rhodes
                                Coffee Company. My journey has been shaped by my
                                roles as a caregiver and a service member,
                                teaching me the importance of community,
                                discipline, and love.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                These values are the foundation of Rhodes Coffee
                                Company, where we're more than just a coffee
                                shop. We're a community gathering spot where
                                each cup of coffee connects people and stories.
                                Our mission is to offer not just exceptional
                                coffee but a welcoming space where everyone
                                feels at home.
                            </p>
                        </article>
                    </div>
                    <div class="lg:w-2/5">
                        <div class="relative">
                            <img
                                src="../../Imgs/pics/picture_of_me.jpg"
                                alt="Tricia Hax - Founder of Rhodes Coffee Co."
                                class="rounded-2xl shadow-xl w-full"
                            />
                            <div
                                class="absolute -bottom-6 -right-6 bg-white p-4 rounded-lg shadow-lg"
                            >
                                <Heart class="w-8 h-8 text-brand-pink" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Coffee Cart Section -->
        <section class="py-20 bg-brand-sage-light">
            <div class="container mx-auto px-5 md:px-20">
                <div
                    class="flex flex-col lg:flex-row-reverse gap-16 items-center"
                >
                    <div class="lg:w-3/5">
                        <header class="mb-8">
                            <h2 class="text-3xl lg:text-5xl font-serif mb-4">
                                Mobile Coffee Cart Service
                            </h2>
                            <div
                                class="flex items-center gap-2 text-brand-pink-dark mb-6"
                            >
                                <MapPin
                                    class="w-6 h-6 text-brand-pink-dark text-pink-400"
                                />
                                <span
                                    class="text-lg text-brand-pink-dark text-gray-900"
                                    >Serving Central & Upstate New York +
                                    beyond</span
                                >
                            </div>
                        </header>
                        <article class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed">
                                With our newest addition, we're thrilled to
                                provide coffee cart catering using a stylish,
                                highly mobile drink cart that radiates aesthetic
                                charm. Perfect for private events, corporate
                                functions, and special occasions throughout New
                                York, our cart brings the café experience
                                directly to you.
                            </p>
                            <div class="flex flex-wrap gap-4 mt-8">
                                <div
                                    class="flex items-center gap-2 text-gray-600"
                                >
                                    <Coffee class="w-5 h-5" />
                                    <span>Premium Coffee</span>
                                </div>
                                <div
                                    class="flex items-center gap-2 text-gray-600"
                                >
                                    <Truck class="w-5 h-5" />
                                    <span>Mobile Service</span>
                                </div>
                                <div
                                    class="flex items-center gap-2 text-gray-600"
                                >
                                    <Users class="w-5 h-5" />
                                    <span>Event Ready</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="lg:w-2/5">
                        <img
                            src="../../Imgs/pics/Cold Brew + Sweet Cream.jpg"
                            alt="Rhodes Coffee Co. Mobile Coffee Cart Service in New York"
                            class="rounded-2xl shadow-xl w-full"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- Coffee Trailer Section -->
        <section class="py-20 bg-brand-pink-light">
            <div class="container mx-auto px-5 md:px-20">
                <div class="flex flex-col lg:flex-row gap-16 items-center">
                    <div class="lg:w-3/5">
                        <header class="mb-8">
                            <h2 class="text-3xl lg:text-5xl font-serif mb-4">
                                Our Coffee Trailer in Pulaski
                            </h2>
                            <div
                                class="flex items-center gap-2 text-brand-sage-dark mb-6"
                            >
                                <Clock
                                    class="w-6 h-6 text-brand-sage-dark text-gray-900"
                                />
                                <span class="text-lg text-gray-900"
                                    >Temporary Closed for the Season</span
                                >
                            </div>
                        </header>
                        <article class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Established in 2023, Rhodes Coffee Co.'s trailer
                                location in Pulaski, New York, specializes in
                                organic, fair-trade coffee. Located at the
                                intersection of Route 11 & 13, we offer a
                                diverse array of beverages and healthy treats,
                                including acai bowls, smoothies, overnight oats,
                                nitro and cold brew, matcha, and chai tea.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Our carefully curated menu features organic
                                ingredients, free from artificial dyes and high
                                fructose corn syrup. Whether you're a local or
                                just passing through, our convenient location
                                and ample parking make it easy to enjoy your
                                perfect caffeine fix or healthy snack.
                            </p>
                            <div class="flex flex-wrap gap-4 mt-8">
                                <div
                                    class="flex items-center gap-2 text-gray-600"
                                >
                                    <Leaf class="w-5 h-5" />
                                    <span>Organic Ingredients</span>
                                </div>
                                <div
                                    class="flex items-center gap-2 text-gray-600"
                                >
                                    <UtensilsCrossed class="w-5 h-5" />
                                    <span>Healthy Options</span>
                                </div>
                                <div
                                    class="flex items-center gap-2 text-gray-600"
                                >
                                    <ParkingCircle class="w-5 h-5" />
                                    <span>Ample Parking</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="lg:w-2/5">
                        <img
                            src="../../Imgs/pics/Trailer.jpg"
                            alt="Rhodes Coffee Co. Trailer Location in Pulaski, New York"
                            class="rounded-2xl shadow-xl w-full"
                        />
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 bg-brand-sage-light">
            <div class="container mx-auto px-5 md:px-20 text-center">
                <h2 class="text-2xl md:text-3xl font-serif mb-6">
                    Ready to experience Rhodes Coffee?
                </h2>
                <div class="flex flex-wrap justify-center gap-6">
                    <YellowBtn
                        text="View Our Menu"
                        redirectTo="/menu"
                        class="text-lg px-8 py-4"
                    />
                    <YellowBtn
                        text="Book Coffee Cart"
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
import AdminLayout from "../../Layouts/Frontend.vue";
import ParallaxSection from "../../Components/ParallaxSection.vue";
import YellowBtn from "../../Components/YellowBtn.vue";
import {
    Coffee,
    Heart,
    Medal,
    MapPin,
    Truck,
    Users,
    Clock,
    Leaf,
    UtensilsCrossed,
    ParkingCircle,
} from "lucide-vue-next";
import BookingSection from "../../Components/BookingSection.vue";
</script>
