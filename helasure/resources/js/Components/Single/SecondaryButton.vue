<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type"
            class="inline-flex items-center px-4 py-2 bg-secondary text-white border border-secondary-light rounded-md font-semibold text-xs uppercase tracking-widest shadow-sm hover:bg-secondary-dark focus:bg-secondary-dark active:bg-secondary-darker focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
