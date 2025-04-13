<script setup>
import {useForm, usePage} from '@inertiajs/vue3'
import {ref} from 'vue'

const form = useForm({
    current_password: '',
    new_password: '',
    password_confirmation: '',
})

const submitting = ref(false)

const updatePassword = () => {
    form.put(route('dashboard.profile.update.password', {'user': usePage().props.auth.user.id}),
        {
            preserveScroll: true,
            onSuccess: () => {
                alert('Password updated successfully.')
            }
        })
}
</script>

<template>
    <form class="bg-white p-6 rounded shadow mb-6" @submit.prevent="updatePassword">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Update Password</h2>

        <div>
            <label class="block text-sm font-medium">Current Password</label>
            <input
                v-model="form.current_password"
                type="password"
                autocomplete="current password"
                class="mt-1 block w-full rounded-md border px-3 py-2 shadow-sm"
            />
            <span v-if="form.errors.current_password" class="text-sm text-red-600">{{
                    form.errors.current_password
                }}</span>
        </div>

        <div>
            <label class="block text-sm font-medium">New Password</label>
            <input
                v-model="form.new_password"
                type="password"
                autocomplete="new password"
                class="mt-1 block w-full rounded-md border px-3 py-2 shadow-sm"
            />
            <span v-if="form.errors.new_password" class="text-sm text-red-600">{{ form.errors.new_password }}</span>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Confirm New Password</label>
            <input
                v-model="form.password_confirmation"
                type="password"
                autocomplete="confirm new password"
                class="mt-1 block w-full rounded-md border px-3 py-2 shadow-sm"
            />
            <span v-if="form.errors.password_confirmation"
                  class="text-sm text-red-600">{{ form.errors.password_confirmation }}</span>
        </div>

        <button @click="updatePassword" :disabled="submitting"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Save
        </button>
    </form>
</template>
