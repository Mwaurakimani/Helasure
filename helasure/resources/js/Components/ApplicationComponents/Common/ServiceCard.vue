<template>
    <div class="p-6 bg-white rounded-lg shadow-md flex flex-col items-center text-center">
        <i :class="[icon, 'text-4xl', color]"></i>
        <h3 class="mt-4 text-lg font-semibold text-gray-800">{{ title }}</h3>
        <p class="mt-2 text-gray-600" v-html="description"></p>
    </div>
</template>

<script setup>
defineProps(["icon", "title", "description", "color"]);
</script>
