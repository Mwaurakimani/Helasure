<script setup>
import {useForm} from '@inertiajs/vue3'
import {ref} from 'vue'

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
})

const submitting = ref(false)

function updatePassword() {
    submitting.value = true
    form.put(route('user-password.update'), {
        preserveScroll: true,
        onFinish: () => (submitting.value = false),
    })
}
</script>

<template>
    <div class="bg-white p-6 rounded shadow mb-6">
        <h2 class="text-xl font-semibold">Update Password</h2>

        <div>
            <label class="block text-sm font-medium">Current Password</label>
            <input
                v-model="form.current_password"
                type="password"
                class="mt-1 block w-full rounded-md border px-3 py-2 shadow-sm"
            />
            <span v-if="form.errors.current_password" class="text-sm text-red-600">{{
                    form.errors.current_password
                }}</span>
        </div>

        <div>
            <label class="block text-sm font-medium">New Password</label>
            <input
                v-model="form.password"
                type="password"
                class="mt-1 block w-full rounded-md border px-3 py-2 shadow-sm"
            />
            <span v-if="form.errors.password" class="text-sm text-red-600">{{ form.errors.password }}</span>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Confirm New Password</label>
            <input
                v-model="form.password_confirmation"
                type="password"
                class="mt-1 block w-full rounded-md border px-3 py-2 shadow-sm"
            />
            <span v-if="form.errors.password_confirmation"
                  class="text-sm text-red-600">{{ form.errors.password_confirmation }}</span>
        </div>

        <button
            @click="updatePassword"
            :disabled="submitting"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
        >
            Save
        </button>
    </div>
</template>
