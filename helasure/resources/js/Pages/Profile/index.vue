<script setup>
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue'
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue'
import DeleteUserForm from './Partials/DeleteUserForm.vue'
import DashboardLayout from "@/Layouts/DashboardLayout.vue";

defineOptions({layout: DashboardLayout})
</script>

<template>
    <div class="space-y-6 py-12 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <UpdateProfileInformationForm/>
        <UpdatePasswordForm/>
        <DeleteUserForm/>
    </div>
</template>
