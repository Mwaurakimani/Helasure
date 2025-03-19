<script setup>
defineProps({
    testimonials: Array
});
</script>

<template>
    <section class="container py-16 bg-gray-100">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">What Our Customers Say</h2>
            <div class="grid md:grid-cols-3 gap-8 mt-8">
                <div v-for="(testimonial, index) in testimonials" :key="index"
                     class="p-6 bg-white rounded-lg shadow-md flex flex-col items-center text-center">
                    <i class="bi bi-person-circle text-5xl text-gray-300"></i>
                    <p class="mt-4 text-gray-600">"{{ testimonial.text }}"</p>
                    <div class="mt-3 text-green-700">
                        <i class="bi bi-star-fill" v-for="star in 3" :key="star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
