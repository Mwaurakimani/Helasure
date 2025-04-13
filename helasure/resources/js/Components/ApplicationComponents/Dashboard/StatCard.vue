<template>
    <div class="bg-blue-100 rounded-lg p-4">
        <p class="text-sm text-gray-800 font-medium">{{ title }}</p>
        <p class="text-2xl font-bold text-gray-900 mt-1">{{ value }}</p>
    </div>
</template>

<script setup>
defineProps({
    title: String,
    value: [String, Number],
});
</script>
