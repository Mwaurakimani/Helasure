<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type"
            class="inline-flex items-center px-4 py-2 bg-primary text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-primary-dark focus:bg-primary-dark active:bg-primary-darker focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
        <slot/>
    </button>
</template>
