<script setup>
import {Head, router} from '@inertiajs/vue3';
import HomeNavigation from "@/Components/ApplicationComponents/Home/HomeNavigation.vue";
import Footer from "@/Components/ApplicationComponents/Home/Footer.vue";
import { ref } from "vue";

const faqs = ref([
    { question: "What is escrow and how does it work?", answer: "Escrow is a secure financial arrangement where a trusted third party holds funds until both parties meet the agreement terms." },
    { question: "How long does it take for funds to be released?", answer: "Once both parties confirm completion, funds are released instantly. If there’s a dispute, resolution may take up to 5 days." },
    { question: "What fees do you charge?", answer: "We charge a small transaction fee based on the escrow amount. You can view the detailed pricing on our Pricing page." },
    { question: "Can I cancel an escrow transaction?", answer: "Yes, if both parties agree, an escrow can be canceled before fund release. A small cancellation fee may apply." },
    { question: "Is my money safe with Helasure?", answer: "Absolutely. Your funds are securely held in a regulated escrow account until transaction completion." },
]);

const toggleFAQ = (index) => {
    faqs.value[index].open = !faqs.value[index].open;
};
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <Head title="FAQ - Helasure" />

        <!-- Navigation -->
        <HomeNavigation class="md:mb-[20px]" />

        <!-- Hero Section -->
        <section class="w-full container md:rounded mb-[20px] h-40 bg-cover bg-center flex items-center justify-center bg-blue-500">
            <div class="p-6 w-full max-w-3xl h-[70%] flex flex-col items-center justify-center rounded text-white text-center">
                <h1 class="text-4xl md:text-3xl font-bold">Frequently Asked Questions</h1>
                <p class="mt-2 text-lg md:text-base">Find answers to common questions about Helasure.</p>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="container py-16">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800">How Can We Help?</h2>
                <p class="text-gray-600 mt-2">Click on a question to reveal the answer.</p>

                <div class="mt-4 space-y-2">
                    <div v-for="(faq, index) in faqs" :key="index" class="bg-white p-4 rounded-lg shadow-md cursor-pointer">
                        <div @click="toggleFAQ(index)" class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-gray-800">{{ faq.question }}</h3>
                            <i :class="faq.open ? 'bi bi-chevron-up' : 'bi bi-chevron-down'" class="text-blue-600"></i>
                        </div>
                        <p v-if="faq.open" class="mt-2 text-gray-600">{{ faq.answer }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Need More Help? -->
        <section class="container text-center py-16">
            <div class="mx-auto bg-blue-600 text-white p-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold">Still Have Questions?</h2>
                <p class="mt-2 text-lg">Contact our support team for more help.</p>
                <button @click.prevent="router.visit('/Contact-us')" class="mt-4 bg-white text-blue-600 px-6 py-3 rounded-md font-semibold">Contact Support</button>
            </div>
        </section>

        <!-- Footer -->
        <Footer />
    </div>
</template>
