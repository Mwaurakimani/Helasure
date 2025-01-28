<template>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <form @submit.prevent="submit" class="bg-white p-6 rounded shadow-md w-96">
            <h2 class="text-xl font-bold mb-4">Register</h2>
            <div>
                <label>Name</label>
                <input v-model="form.name" type="text" class="border p-2 w-full">
                <span v-if="form.errors.name" class="text-red-500">{{ form.errors.name }}</span>
            </div>
            <div class="mt-2">
                <label>Email</label>
                <input v-model="form.email" type="email" class="border p-2 w-full">
                <span v-if="form.errors.email" class="text-red-500">{{ form.errors.email }}</span>
            </div>
            <div class="mt-2">
                <label>Password</label>
                <input v-model="form.password" type="password" class="border p-2 w-full">
                <span v-if="form.errors.password" class="text-red-500">{{ form.errors.password }}</span>
            </div>
            <button type="submit" class="bg-green-500 text-white p-2 w-full mt-4">Register</button>
        </form>
    </div>
</template>

<script setup>
import {useForm} from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register.attempt'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
