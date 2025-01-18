<template>
    <section class="py-24 bg-brand-sage-light" aria-labelledby="about-title">
        <div class="container mx-auto px-5 lg:px-20">
            <!-- Header -->
            <header class="text-center mb-16">
                <h2
                    id="about-title"
                    class="text-4xl md:text-5xl font-serif mb-6 text-gray-800"
                >
                    <strong>About Rhodes Coffee Co.</strong>
                </h2>
            </header>

            <!-- Two Column Layout -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Image Column -->
                <div class="text-center">
                    <figure>
                        <img
                            src="../Imgs/about_img1.jpeg"
                            alt="Rhodes Coffee Co. Founder"
                            class="rounded-full mx-auto w-full max-w-md h-auto shadow-lg"
                            loading="lazy"
                            decoding="async"
                        />
                        <figcaption
                            class="mt-4 text-lg font-semibold text-gray-800"
                        >
                            <strong>Founder</strong> | Tricia Hax
                        </figcaption>
                    </figure>
                </div>

                <!-- Content Column -->
                <div class="space-y-6">
                    <p class="text-lg text-gray-600 leading-relaxed">
                        We specialize in creating memorable moments that add
                        charm and sophistication to any gathering. Our mobile
                        coffee cart is designed to be a standout feature,
                        offering both aesthetic appeal and premium service.
                        Perfect for private celebrations, corporate functions,
                        and catered events.
                    </p>

                    <p class="text-lg text-gray-600 leading-relaxed">
                        <strong
                            >Rhodes Coffee Co. began with a vision to bring
                            exceptional coffee experiences to every event. As a
                            veteran-owned business, we understand the importance
                            of precision, dedication, and service
                            excellence.</strong
                        >
                    </p>

                    <p class="text-lg text-gray-600 leading-relaxed">
                        Our journey in the coffee industry has been driven by a
                        passion for crafting perfect cups and creating
                        meaningful connections. We've built Rhodes Coffee Co. to
                        be more than just a coffee service – it's an experience
                        that enhances every occasion.
                    </p>

                    <h3
                        class="text-xl font-serif text-center text-gray-800 mt-8"
                    >
                        – Your Premier Coffee Cart Catering Service in Central &
                        Upstate New York
                    </h3>

                    <p class="text-base text-gray-600 italic text-center mt-4">
                        <strong>Rhodes:</strong> Where every cup tells a story
                        of quality, service, and memorable moments.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
// No additional imports needed for this component
</script>
