<script setup>
import { Head } from '@inertiajs/vue3';
import HomeNavigation from "@/Components/ApplicationComponents/Home/HomeNavigation.vue";
import Footer from "@/Components/ApplicationComponents/Home/Footer.vue";
import ServiceCard from "@/Components/ApplicationComponents/Common/ServiceCard.vue";
import IndustryCard from "@/Components/ApplicationComponents/Common/IndustryCard.vue";
import ComparisonCard from "@/Components/ApplicationComponents/Common/ComparisonCard.vue";
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Head title="Our Services - Helasure" />

        <!-- Navigation -->
        <HomeNavigation class="md:mb-[20px]" />

        <!-- Hero Section -->
        <section class="w-full container md:rounded mb-[20px] h-40 bg-cover bg-center flex items-center justify-center bg-blue-500">
            <div class="p-6 w-full max-w-3xl h-[70%] flex flex-col items-center justify-center rounded text-white text-center">
                <h1 class="text-4xl md:text-3xl font-bold">Secure Your Transactions with Helasure</h1>
                <p class="mt-2 text-lg md:text-base">A simple and transparent escrow service to protect your payments.</p>
                <button class="mt-4 bg-white text-blue-600 px-6 py-3 rounded-md font-semibold">Get Started</button>
            </div>
        </section>

        <!-- Why Use Escrow? -->
        <section class="container py-16">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800">Why Use Escrow?</h2>
                <p class="text-gray-600 mt-2">
                    Escrow eliminates uncertainty in transactions by ensuring
                    <b>both parties fulfill their obligations before money is released.</b>
                </p>

                <div class="grid md:grid-cols-3 gap-8 mt-8">
                    <ServiceCard
                        icon="bi-shield-lock-fill"
                        title="Safe & Secure"
                        :description="'Your money stays protected until the transaction is complete.'"
                        color="text-blue-600"
                    />

                    <ServiceCard
                        icon="bi-person-check-fill"
                        title="No Scams, No Fraud"
                        :description="'Both buyers and sellers are protected with a <b>fair & transparent process</b>.'"
                        color="text-green-600"
                    />

                    <ServiceCard
                        icon="bi-cash-stack"
                        title="Instant Payouts"
                        :description="'Funds are <b>released instantly</b> once the transaction is confirmed.'"
                        color="text-orange-600"
                    />
                </div>
            </div>
        </section>

        <!-- Industries That Benefit From Escrow -->
        <section class="container py-16 bg-gray-100">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800">Who Uses Escrow?</h2>
                <p class="text-gray-600 mt-2">Escrow benefits <b>individuals, businesses, and industries worldwide.</b></p>

                <div class="grid md:grid-cols-3 gap-8 mt-8">
                    <IndustryCard icon="bi-briefcase-fill" title="Freelancers & Businesses" description="Guarantees <b>secure payments</b> for projects & services." color="text-blue-600" />
                    <IndustryCard icon="bi-cart-fill" title="E-Commerce & Online Sales" description="Ensures goods are delivered <b>before funds are released.</b>" color="text-green-600"/>
                    <IndustryCard icon="bi-house-door-fill" title="Real Estate & Rentals" description="Protects deposits and <b>rental agreements.</b>" color="text-orange-600" />
                    <IndustryCard icon="bi-car-front" title="Vehicle & Asset Sales" description="Buyers get <b>verified assets</b> before making payments." color="text-purple-600" />
                    <IndustryCard icon="bi-coin" title="Crypto & Digital Payments" description="Ensures <b>safe crypto transactions</b> before fund release." color="text-indigo-600" />
                    <IndustryCard icon="bi-airplane" title="Event Ticketing & Travel Bookings" description="Prevents <b>scams in ticket sales, hotel, and travel reservations</b> by ensuring secure prepayments." color="text-teal-600"/>
                </div>
            </div>
        </section>

        <!-- Comparison Story -->
        <section class="container py-16">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800">Escrow vs No Escrow</h2>
                <p class="text-gray-600 mt-2">What happens when people <b>don’t use escrow?</b></p>

                <div class="grid md:grid-cols-2 gap-8 mt-8">
                    <ComparisonCard
                        title="Without Escrow"
                        description="John paid upfront for a service and never received what he was promised."
                        color="bg-red-100 text-red-600"
                        image="/storage/systemImages/shocked_man.jpg"
                    />

                    <ComparisonCard
                        title="With Escrow"
                        description="Sarah used Helasure, ensuring her payment was <b>only released after</b> receiving the service."
                        color="bg-green-100 text-green-600"
                        image="/storage/systemImages/woman_happy_with_package.jpg"
                    />
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="container text-center py-16">
            <div class="mx-auto bg-blue-600 text-white p-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold">Start Your Secure Transaction</h2>
                <p class="mt-2 text-lg">Get <b class="text-green-500">20% OFF</b> on your first escrow transaction.</p>
                <button class="mt-4 bg-white text-blue-600 px-6 py-3 rounded-md font-semibold">Start Now</button>
            </div>
        </section>

        <!-- Footer -->
        <Footer />
    </div>
</template>
