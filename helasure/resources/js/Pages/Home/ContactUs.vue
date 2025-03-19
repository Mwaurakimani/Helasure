<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavigation from "@/Components/ApplicationComponents/Home/HomeNavigation.vue";
import Footer from "@/Components/ApplicationComponents/Home/Footer.vue";
import InquiryForm from "@/Components/ApplicationComponents/Home/InquiryForm.vue";
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Head title="Contact Us - Helasure" />

        <!-- Navigation -->
        <HomeNavigation class="md:mb-[20px]" />

        <!-- Hero Section -->
        <section class="w-full container md:rounded mb-[10px] h-40 bg-cover bg-center flex items-center justify-center bg-blue-500">
            <div class="p-6 w-full max-w-3xl h-[70%] flex flex-col items-center justify-center rounded text-white text-center">
                <h1 class="text-4xl md:text-3xl font-bold">Get in Touch with Us</h1>
                <p class="mt-2 text-lg md:text-base">We're here to help! Reach out with any questions or concerns.</p>
            </div>
        </section>

        <!-- Contact Details -->
        <section class="container py-10">
            <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-center">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <i class="bi bi-envelope-fill text-4xl text-blue-600"></i>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Email Us</h3>
                    <p class="text-gray-600">support@helasure.com</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <i class="bi bi-telephone-fill text-4xl text-green-600"></i>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Call Us</h3>
                    <p class="text-gray-600">+254 719 445 697</p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <i class="bi bi-geo-alt-fill text-4xl text-orange-600"></i>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Visit Us</h3>
                    <p class="text-gray-600">1234 Secure St, Nairobi, Kenya</p>
                </div>
            </div>
        </section>

        <!-- Inquiry Form -->
        <InquiryForm class="mb-[20px]" />

        <!-- Footer -->
        <Footer />
    </div>
</template>
