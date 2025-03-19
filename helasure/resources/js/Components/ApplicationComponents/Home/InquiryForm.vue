<script setup>
import { ref } from 'vue';
import TextInput from '@/Components/Single/TextInput.vue';

const form = ref({
    name: '',
    email: '',
    phone: '',
    message: ''
});

const submitInquiry = () => {
    console.log("Inquiry submitted:", form.value);
};
</script>

<template>
    <section class="container rounded overflow-hidden py-16 ">
        <div class="max-w-6xl rounded mx-auto bg-white rounded-lg shadow-md flex flex-col md:flex-row">
            <!-- Left Section (Image & Text) -->
            <div class="w-full rounded-tl rounded-bl md:w-1/2 relative bg-cover bg-center p-8 flex flex-col justify-center text-white"
                 style="background-image: url('/storage/systemImages/banner.jpg');">
                <div class="bg-black bg-opacity-50 p-6 rounded">
                    <h2 class="text-3xl font-bold">Have Any Questions?</h2>
                    <p class="mt-2 text-lg">We’re here to help! Ask anything about our escrow services, security, and more.</p>
                </div>
            </div>

            <!-- Right Section (Form) -->
            <div class="w-full md:w-1/2 p-8">
                <h2 class="text-3xl font-bold text-gray-800 text-center">Make an Inquiry</h2>
                <form @submit.prevent="submitInquiry" class="mt-6 space-y-4">
                    <TextInput v-model="form.name" type="text" placeholder="Your Name" class="w-full p-2" required />
                    <TextInput v-model="form.phone" type="tel" placeholder="Your Phone Number" class="w-full p-2" required />
                    <TextInput v-model="form.email" type="email" placeholder="Your Email" class="w-full p-2" required />
                    <textarea v-model="form.message" placeholder="Your Message"
                              class="w-full p-2 border rounded-md h-32 focus:ring focus:ring-blue-300 focus:border-blue-500"
                              required></textarea>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md block mx-auto">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </section>
</template>
