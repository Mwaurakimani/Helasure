<template>
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Welcome to the Dashboard</h2>
        <p>You are logged in!</p>

        <button @click="logout" class="bg-red-500 text-white p-2 mt-4">
            Logout
        </button>
    </div>
</template>

<script setup>
import {router} from '@inertiajs/vue3';

const logout = () => {
    router.post(route('logout'));
};
</script>
