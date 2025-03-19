<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavigation from "@/Components/ApplicationComponents/Home/HomeNavigation.vue";
import Footer from "@/Components/ApplicationComponents/Home/Footer.vue";
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Head title="About Us - Helasure" />

        <!-- Navigation -->
        <HomeNavigation class="md:mb-[20px]" />

        <!-- Hero Section -->
        <section class="w-full container md:rounded mb-[20px] h-30 bg-cover bg-center flex items-center justify-center bg-blue-500">
            <div class="p-6 w-full max-w-3xl h-[70%] flex flex-col items-center justify-center rounded text-white text-center">
                <h1 class="text-4xl md:text-3xl font-bold">About Helasure</h1>
                <p class="mt-2 text-lg md:text-base">Your trusted escrow partner for secure transactions.</p>
            </div>
        </section>

        <!-- Company Overview -->
        <section class="container py-16">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Who We Are</h2>
                    <p class="text-gray-600 mt-4">
                        Helasure is a <span class="font-bold">leading escrow platform</span> designed to ensure security, transparency, and fairness in financial transactions.
                        Whether you're an <b>individual, business, or freelancer</b> we provide a seamless escrow solution that safeguards both buyers and sellers.
                    </p>
                    <p class="text-gray-600 mt-2">
                        Our goal is to <b>eliminate fraud, disputes, and uncertainty</b> in online transactions, giving users the confidence to trade safely.
                    </p>

                    <!-- Key Values -->
                    <ul class="mt-4 space-y-3">
                        <li class="flex items-center">
                            <i class="bi bi-shield-lock-fill text-blue-600 text-xl mr-2"></i>
                            <span class="text-gray-700">100% Secure Payments</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-check-circle-fill text-green-600 text-xl mr-2"></i>
                            <span class="text-gray-700">Fair & Transparent Dispute Resolution</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-globe text-orange-600 text-xl mr-2"></i>
                            <span class="text-gray-700">High Accessibility for Seamless Transactions</span>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-person-check-fill text-purple-600 text-xl mr-2"></i>
                            <span class="text-gray-700">Trusted by Businesses & Freelancers Worldwide</span>
                        </li>
                    </ul>

                    <p class="text-gray-600 mt-4">
                        Join thousands of satisfied users who trust Helasure for <b>secure, seamless, and efficient</b> transactions.
                    </p>
                </div>

                <!-- Image Section -->
                <div>
                    <img src="/storage/systemImages/about-us-escrow.webp" alt="About Helasure" class="rounded-lg shadow-md w-full">
                </div>
            </div>
        </section>


        <!-- Core Values -->
        <section class="container py-16 bg-gray-100">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800">Our Core Values</h2>
                <div class="grid md:grid-cols-4 gap-8 mt-8">
                    <div class="p-6 bg-white rounded-lg shadow-md flex flex-col items-center text-center">
                        <div class="p-4 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 text-white">
                            <i class="bi bi-check-circle-fill text-3xl"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-gray-800">Integrity</h3>
                        <p class="mt-2 text-gray-600">We operate with honesty and transparency.</p>
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-md flex flex-col items-center text-center">
                        <div class="p-4 rounded-full bg-gradient-to-br from-green-500 to-green-700 text-white">
                            <i class="bi bi-people-fill text-3xl"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-gray-800">Customer First</h3>
                        <p class="mt-2 text-gray-600">Your satisfaction and security are our top priorities.</p>
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-md flex flex-col items-center text-center">
                        <div class="p-4 rounded-full bg-gradient-to-br from-orange-500 to-orange-700 text-white">
                            <i class="bi bi-lightbulb-fill text-3xl"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-gray-800">Innovation</h3>
                        <p class="mt-2 text-gray-600">We continuously improve for a better experience.</p>
                    </div>

                    <div class="p-6 bg-white rounded-lg shadow-md flex flex-col items-center text-center">
                        <div class="p-4 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 text-white">
                            <i class="bi bi-shield-lock-fill text-3xl"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-semibold text-gray-800">Security</h3>
                        <p class="mt-2 text-gray-600">Your transactions are always encrypted and safe.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="container py-16">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800">Our Mission & Vision</h2>
                <div class="grid md:grid-cols-2 gap-8 mt-8">
                    <div class="p-6 bg-white rounded-lg shadow-md text-center">
                        <h3 class="text-xl font-semibold text-blue-600">Our Mission</h3>
                        <p class="mt-2 text-gray-600">
                            To provide a <b>safe, efficient, and innovative escrow service</b> that ensures trust in every transaction.
                        </p>
                    </div>
                    <div class="p-6 bg-white rounded-lg shadow-md text-center">
                        <h3 class="text-xl font-semibold text-green-600">Our Vision</h3>
                        <p class="mt-2 text-gray-600">
                            To be the <b>leading global escrow platform</b> enabling secure transactions across all industries.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="container text-center py-16">
            <div class="mx-auto bg-blue-600 text-white p-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold">Join Helasure Today</h2>
                <p class="mt-2 text-lg">Experience secure transactions with <b class="text-green-500">20% OFF</b> on your first escrow.</p>
                <button class="mt-4 bg-white text-blue-600 px-6 py-3 rounded-md font-semibold">Get Started</button>
            </div>
        </section>

        <!-- Footer -->
        <Footer />
    </div>
</template>
