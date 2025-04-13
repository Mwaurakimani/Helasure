<script setup>
import {useForm, usePage} from '@inertiajs/vue3'

const user = usePage().props.auth.user

const form = useForm({
    first_name: user.first_name,
    last_name: user.last_name,
    phone: user.phone,
    email: user.email,
})

const updateProfile = () => {
    form.put(route('user-profile-information.update'), {
        preserveScroll: true,
    })
}
</script>

<template>
    <div class="bg-white p-6 rounded shadow mb-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Profile Information</h2>

        <form @submit.prevent="updateProfile" class="space-y-4">
            <div>
                <label class="block text-sm text-gray-700 font-medium">First Name</label>
                <input
                    type="text"
                    v-model="form.first_name"
                    class="w-full mt-1 border px-3 py-2 rounded"
                />
                <div v-if="form.errors.first_name" class="text-sm text-red-600">{{ form.errors.first_name }}</div>
            </div>

            <div>
                <label class="block text-sm text-gray-700 font-medium">Last Name</label>
                <input
                    type="text"
                    v-model="form.last_name"
                    class="w-full mt-1 border px-3 py-2 rounded"
                />
                <div v-if="form.errors.last_name" class="text-sm text-red-600">{{ form.errors.last_name }}</div>
            </div>

            <div>
                <label class="block text-sm text-gray-700 font-medium">Phone</label>
                <input
                    type="text"
                    v-model="form.phone"
                    class="w-full mt-1 border px-3 py-2 rounded"
                />
                <div v-if="form.errors.phone" class="text-sm text-red-600">{{ form.errors.phone }}</div>
            </div>

            <div>
                <label class="block text-sm text-gray-700 font-medium">Email</label>
                <input
                    type="email"
                    v-model="form.email"
                    class="w-full mt-1 border px-3 py-2 rounded"
                />
                <div v-if="form.errors.email" class="text-sm text-red-600">{{ form.errors.email }}</div>
            </div>

            <button
                type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"
            >
                Save Changes
            </button>
        </form>
    </div>
</template>
