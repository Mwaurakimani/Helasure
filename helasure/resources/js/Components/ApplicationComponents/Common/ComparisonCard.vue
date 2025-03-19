<template>
    <div :class="['p-6 rounded-lg shadow-md text-center', color]">
        <h3 class="text-lg font-semibold">{{ title }}</h3>
        <img :src="image" alt="Comparison Image" class="mt-4 rounded-lg w-full h-90 object-cover">
        <p class="mt-2 text-gray-600" v-html=" description "></p>
    </div>
</template>

<script setup>
defineProps(["title", "description", "color", "image"]);
</script>
