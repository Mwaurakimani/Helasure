<script setup>
import {Head} from '@inertiajs/vue3';
import {onMounted} from "vue";
import {generateBackgroundSquares} from "@/Modules/generateBackgroundSquares.js";
import HomeNavigation from "@/Components/ApplicationComponents/Home/HomeNavigation.vue";
import WhyChooseUsComponent from "@/Components/ApplicationComponents/Home/HomePage/WhyChooseUsComponent.vue";
import HowItWorksComponent from "@/Components/ApplicationComponents/Home/HomePage/HowItWorksComponent.vue";
import InquiryForm from "@/Components/ApplicationComponents/Home/InquiryForm.vue";
import Testimonials from "@/Components/ApplicationComponents/Home/Testimonials.vue";
import Footer from "@/Components/ApplicationComponents/Home/Footer.vue";
import HomeBanner from "@/Components/ApplicationComponents/Home/HomePage/HomeBanner.vue";

const reviews = [
    { text: "Helasure made my transactions so much safer and easier!" },
    { text: "Amazing escrow system with great customer support!" },
    { text: "Highly recommend for anyone dealing with online payments." }
];

onMounted(() => {
    generateBackgroundSquares();
});
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Head title="Welcome to Helasure" />

        <!-- Main Content -->
        <main class="flex-grow">
            <HomeNavigation class="md:mb-[20px]" />

            <!-- Banner Section -->
            <HomeBanner/>

            <!-- Why Choose Helasure Section -->
            <WhyChooseUsComponent/>

            <!-- How It Works Section -->
            <HowItWorksComponent/>

            <!-- Inquiry Form -->
            <InquiryForm class="mb-[20px]" />

            <!-- Customer Testimonials -->
            <Testimonials class="mb-[20px]" :testimonials="reviews" />

            <!-- Call to Action -->
            <section class="container text-center mb-[20px]">
                <div class="mx-auto bg-blue-600 text-white p-8 rounded-lg shadow-md">
                    <h2 class="text-3xl font-bold">Create an Instant Escrow</h2>
                    <p class="mt-2 text-lg">Get <span class="font-bold text-green-500">20% OFF</span> on your first 10 escrows!</p>
                    <button class="mt-4 bg-white text-blue-600 px-6 py-3 rounded-md font-semibold">Start Now</button>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <Footer></Footer>
    </div>
</template>
