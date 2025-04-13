<template>
    <button class="flex items-center bg-blue-700 text-white rounded pl-1 pr-3 py-1 shadow hover:bg-blue-800">
        <span class="flex items-center justify-center bg-blue-100 text-blue-800 p-0 rounded mr-2 w-[30px] h-[30px]">
            <i :class="icon" class="w-[28px]"></i>
        </span>
        {{ label }}
    </button>
</template>

<script setup>
defineProps({
    icon: String,
    label: String,
});
</script>
