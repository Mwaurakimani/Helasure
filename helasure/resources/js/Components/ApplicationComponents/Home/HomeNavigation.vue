<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/Single/ApplicationLogo.vue';
import {Link, router} from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
import SectionBorder from "@/Components/Single/SectionBorder.vue";

const isOpen = ref(false);
const user = usePage().props.auth.user;
</script>

<template>
    <nav class="fixed top-0 left-0 w-full bg-white shadow-md px-6 py-2 z-50">
        <div class="container max-w-7xl mx-auto flex justify-between items-center relative">
            <!-- Logo (Left) -->
            <div class="flex items-center">
                <ApplicationLogo class="h-10 w-auto" />
            </div>

            <!-- Title (Centered) -->

            <!-- Desktop Navigation (Right) -->
            <div class="hidden md:flex space-x-6 items-center">
                <Link href="/" class="text-gray-700 hover:text-primary">Home</Link>
                <Link href="/services" class="text-gray-700 hover:text-primary">Services</Link>
                <Link href="/about" class="text-gray-700 hover:text-primary">About Us</Link>
                <Link href="/faqs" class="text-gray-700 hover:text-primary">FAQs</Link>
                <Link href="/contact-us" class="text-gray-700 hover:text-primary">Contact Us</Link>

                <!-- Authentication Links -->
                <template v-if="!user">
                    <Link href="/login" class="px-4 py-2 bg-blue-500 text-white rounded-md text-sm font-semibold hover:bg-blue-600 transition">Login</Link>
                    <Link href="/register" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md text-sm font-semibold hover:bg-gray-300 transition">Register</Link>
                </template>
                <template v-else>
                    <Link href="/dashboard" class="px-4 py-2 bg-green-500 text-white rounded-md text-sm font-semibold hover:bg-green-600 transition">Dashboard</Link>
                    <button @click="router.post(route('logout'))"
                            class="px-4 py-2 bg-red-500 text-white rounded-md text-sm font-semibold hover:bg-red-600 transition">
                        Logout
                    </button>
                </template>
            </div>

            <!-- Mobile Menu Button (Right) -->
            <button @click="isOpen = !isOpen" class="md:hidden text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div v-if="isOpen" class="md:hidden bg-white border-t mt-2 space-y-2 p-4">
            <Link href="/" class="block text-gray-700 hover:text-primary">Home</Link>
            <Link href="/services" class="block text-gray-700 hover:text-primary">Services</Link>
            <Link href="/about" class="block text-gray-700 hover:text-primary">About Us</Link>
            <Link href="/faqs" class="block text-gray-700 hover:text-primary">FAQs</Link>
            <Link href="/contact-us" class="block text-gray-700 hover:text-primary">Contact Us</Link>

            <hr>
            <template v-if="!user">
                <Link href="/login" class="inline-block mr-[10px] bg-blue-500 text-white text-center px-4 py-2 rounded-md font-semibold hover:bg-blue-600 transition">Login</Link>
                <Link href="/register" class="inline-block bg-gray-200 text-gray-700 text-center px-4 py-2 rounded-md font-semibold hover:bg-gray-300 transition">Register</Link>
            </template>
            <template v-else>
                <Link href="/dashboard" class="inline-block bg-green-500 text-white text-center px-4 py-2 rounded-md font-semibold hover:bg-green-600 transition">Dashboard</Link>
                <Link href="/logout" method="inline-block" class="block bg-red-500 text-white text-center px-4 py-2 rounded-md font-semibold hover:bg-red-600 transition">Logout</Link>
            </template>
        </div>
    </nav>
</template>

<style>
/* Add padding to prevent content from being hidden under the navbar */
body {
    padding-top: 60px; /* Adjust based on navbar height */
}
</style>
