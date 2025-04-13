<script setup>
import {router, useForm, usePage} from '@inertiajs/vue3'
import {ref} from 'vue'
import TextInput from "@/Components/Single/TextInput.vue";

const confirming = ref(false)
const form = useForm({
    password: ''
})

const confirmDelete = () => confirming.value = true

const cancel = () => {
    confirming.value = false
    form.reset()
}

const deleteAccount = () => {
    form.delete(route('dashboard.profile.delete', {'user': usePage().props.auth.user.id}),
        {
            preserveScroll: true,
            onSuccess: () => {
                usePage().props.auth = null
                router.reload()
            }
        })
}
</script>

<template>
    <div class="bg-white p-6 rounded shadow mt-6">
        <h2 class="text-lg font-semibold mb-4 text-red-600">Delete Account</h2>
        <p class="text-sm text-gray-600 mb-4">Permanently delete your account. This action is irreversible.</p>

        <button @click="confirmDelete" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700">Delete Account
        </button>

        <div v-if="confirming" class="mt-4 space-y-4">
            <TextInput type="password" autocomplete="false" v-model="form.password" class="input"
                       placeholder="Confirm Password"/>
            <div class="flex gap-2">
                <button @click="deleteAccount" class="bg-red-600 text-white px-4 py-2 rounded">Confirm</button>
                <button @click="cancel" class="bg-gray-300 px-4 py-2 rounded">Cancel</button>
            </div>
        </div>
    </div>
</template>


