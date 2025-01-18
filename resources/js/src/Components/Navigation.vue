<template>
    <nav
        class="fixed w-full z-20 top-0 start-0 transition-all duration-200"
        :class="scrollPosition > 100 ? 'bg-[#f0dde0e5]' : ''"
    >
        <div class="flex flex-wrap items-center mx-5 md:ml-12 md:mr-20 py-4">
            <Link
                href="/"
                class="flex items-center space-x-3 rtl:space-x-reverse"
            >
                <img
                    v-if="scrollPosition > 100"
                    src="../Imgs/logo.png"
                    class="h-20 w-48"
                    alt="logo"
                />
                <img
                    v-else
                    src="../Imgs/white_logo.png"
                    class="h-20 w-48"
                    alt="logo"
                />
            </Link>
            <div
                class="flex ms-auto md:order-2 space-x-3 md:space-x-0 gap-2 md:gap-8 items-center rtl:space-x-reverse"
            >
                <a
                    target="_blank"
                    href="https://www.instagram.com/rhodescoffeeco/"
                >
                    <i
                        class="fa-brands fa-instagram text-4xl"
                        :class="
                            scrollPosition > 100 ? 'text-black' : 'text-white'
                        "
                    ></i>
                </a>
                <Link
                    href="/contact"
                    class="uppercase hidden md:flex py-3 px-6 bg-[#d69c46] hover:bg-[#d69c46e3] text-lg"
                    :class="scrollPosition > 100 ? 'border-gray-800' : ''"
                >
                    Get A Quote
                </Link>
                <button
                    type="button"
                    @click.prevent="mobileMenuToggle"
                    class="text-white items-center p-2 w-10 h-10 justify-center text-sm rounded-lg"
                    :class="mobileMenuVisible ? 'inline-flex ' : 'lg:hidden'"
                >
                    <i class="fa fa-bars text-2xl"></i>
                </button>

                <ul
                    v-if="mobileMenuVisible"
                    class="fixed w-full right-0 top-24 flex flex-col border-2 bg-[#f0dde0] z-10"
                >
                    <li class="border-t-2 border-gray-300 px-5 py-3">
                        <Link href="/our-story">Our Story</Link>
                    </li>
                    <li class="border-t-2 border-gray-300 px-5 py-3">
                        <Link href="/faqs">FAQ</Link>
                    </li>
                    <li class="border-t-2 border-gray-300 px-5 py-3">
                        <Link href="/menu">Explore Menu</Link>
                    </li>
                    <li class="border-t-2 border-gray-300 px-5 py-3">
                        <Link href="/blogs">Blogs</Link>
                    </li>
                    <li class="border-t-2 border-gray-300 px-5 py-3">
                        <Link href="/contact">Contact</Link>
                    </li>
                </ul>
            </div>
            <div
                class="ms-auto text-white items-center justify-between hidden w-full lg:flex md:w-auto md:order-1"
            >
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 text-xl font-medium border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0"
                >
                    <li>
                        <Link
                            href="/our-story"
                            class="block py-2 px-3 rounded md:bg-transparent md:p-0"
                            aria-current="page"
                            :class="
                                scrollPosition > 100
                                    ? 'text-black'
                                    : 'text-white'
                            "
                        >
                            Our Story
                        </Link>
                    </li>
                    <li>
                        <Link
                            href="/faqs"
                            class="block py-2 px-3 rounded md:p-0"
                            :class="
                                scrollPosition > 100
                                    ? 'text-gray-800'
                                    : 'text-gray-300'
                            "
                            >FAQ</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="/menu"
                            class="block py-2 px-3 rounded md:p-0"
                            :class="
                                scrollPosition > 100
                                    ? 'text-gray-800'
                                    : 'text-gray-300'
                            "
                            >Explore Menu</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="/blogs"
                            class="block py-2 px-3 rounded md:p-0"
                            :class="
                                scrollPosition > 100
                                    ? 'text-gray-800'
                                    : 'text-gray-300'
                            "
                            >Blogs</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="/contact"
                            class="block py-2 px-3 rounded md:p-0"
                            :class="
                                scrollPosition > 100
                                    ? 'text-gray-800'
                                    : 'text-gray-300'
                            "
                            >Contact</Link
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { Link } from "@inertiajs/vue3";

const mobileMenuVisible = ref(false);
const scrollPosition = ref(0);

const mobileMenuToggle = () => {
    mobileMenuVisible.value = !mobileMenuVisible.value;
};

const updateScroll = () => {
    scrollPosition.value = window.scrollY;
};

onMounted(() => {
    window.addEventListener("scroll", updateScroll);
});

const navLinks = [
    { name: "Home", link: "/" },
    { name: "Menu", link: "/menu" },
    { name: "Gallery", link: "/gallery" },
    { name: "Blog", link: "/blogs" },
    { name: "FAQs", link: "/faqs" },
    { name: "Contact", link: "/contact" },
];
</script>
