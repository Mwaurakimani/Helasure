<script setup>
import AppLayout from '@/Layouts/DashboardLayout.vue'
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue'
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue'
import DeleteUserForm from './Partials/DeleteUserForm.vue'
import {Head} from '@inertiajs/vue3'

defineOptions({layout: AppLayout})
</script>

<template>
    <Head title="Profile"/>
    <section class="">
        <UpdateProfileInformationForm/>
        <UpdatePasswordForm/>
        <DeleteUserForm/>
    </section>
</template>
