<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AdminPanel from "@/Partials/AdminPanel.vue";
</script>

<template>
    <AppLayout title="Dashboard overflow-auto">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12 ">
            <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">
                <AdminPanel/>
            </div>
        </div>
    </AppLayout>
</template>
