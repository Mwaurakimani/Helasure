<script setup>
import {Head, Link, useForm, usePage} from '@inertiajs/vue3';
import {ref} from 'vue';
import ApplicationLogo from "@/Components/Single/ApplicationLogo.vue";
import HomeNavigation from "@/Components/ApplicationComponents/Home/HomeNavigation.vue";
import Footer from "@/Components/ApplicationComponents/Home/Footer.vue";
import TextInput from "@/Components/Single/TextInput.vue";
import Checkbox from "@/Components/Single/Checkbox.vue";

const page = usePage()
const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const processing = ref(false);

const submit = () => {
    processing.value = true;
    form.post('/login', {
        onFinish: () => processing.value = false
    });
};
</script>

<template>
    <Head title="Login"/>
    <HomeNavigation/>
    <div class="min-h-screen flex flex-col">
        <div class="flex mb-[20px] flex-col items-center justify-center bg-blue-50 px-[10px] pt-[20px]">

            <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-center text-3xl font-bold text-blue-600">Welcome Back</h2>
                <p class="text-center text-gray-600 mt-2">Sign in to your account</p>
                <div v-if="Object.keys(page.props.errors).length > 0">
                    <div class="alert alert-danger p-1 text-sm" role="alert">
                        <p v-for="(error, key) in page.props.errors" :key="key">{{ error }}</p>
                    </div>
                </div>


                <form @submit.prevent="submit" class="mt-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <TextInput id="email" type="email" v-model="form.email" required
                                   class="mt-1 w-full px-4 py-2 border rounded-md focus:ring-blue-500 focus:border-blue-500"/>
                    </div>

                    <div class="mt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <TextInput id="password" type="password" v-model="form.password" required
                                   class="mt-1 w-full px-4 py-2 border rounded-md focus:ring-blue-500 focus:border-blue-500"/>
                    </div>

                    <div class="flex justify-between items-center mt-4">
                        <label class="flex items-center text-sm">
                            <Checkbox type="checkbox" v-model="form.remember" class="mr-2"/>
                            Remember me
                        </label>
                        <Link href="/forgot-password" class="text-blue-500 text-sm hover:underline">Forgot password?</Link>
                    </div>

                    <button type="submit"
                            class="w-full mt-6 bg-blue-600 text-white py-2 rounded-md font-semibold hover:bg-blue-700 transition"
                            :disabled="processing">
                        <span v-if="!processing">Sign In</span>
                        <span v-else>Loading...</span>
                    </button>

                    <p class="text-center text-gray-600 mt-4">
                        Don't have an account?
                        <Link href="/register" class="text-blue-500 hover:underline">Sign up</Link>
                    </p>
                </form>
            </div>
        </div>
        <Footer/>
    </div>
</template>
