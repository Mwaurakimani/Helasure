<template>
    <Head title="Register"/>
    <HomeNavigation></HomeNavigation>
    <div class="min-h-screen flex flex-col">
        <div class="flex items-center justify-center py-[20px] px-[20px] mb-[20px]">

            <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">

                <h2 class="text-2xl font-bold text-center text-gray-800">Create Your Account</h2>
                <p class="text-gray-600 text-center mb-6">Join Helasure and start transacting securely.</p>

                <form @submit.prevent="submit">
                    <!-- First Name -->
                    <div>
                        <label class="text-gray-700 font-medium">First Name</label>
                        <input v-model="form.first_name" type="text" autocomplete="First Name" required
                               class="mt-1 w-full px-2 py-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
                        <span v-if="form.errors.first_name" class="text-red-500 text-sm">{{
                                form.errors.first_name
                            }}</span>
                    </div>

                    <!-- Last Name -->
                    <div class="mt-4">
                        <label class="text-gray-700 font-medium">Last Name</label>
                        <input v-model="form.last_name" type="text" autocomplete="Last Name" required
                               class="mt-1 w-full px-2 py-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
                        <span v-if="form.errors.last_name" class="text-red-500 text-sm">{{
                                form.errors.last_name
                            }}</span>
                    </div>

                    <!-- Phone Number -->
                    <div class="mt-4">
                        <label class="text-gray-700 font-medium">Phone Number</label>
                        <input v-model="form.phone" type="tel" autocomplete="Phone Number" required
                               class="mt-1 w-full px-2 py-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
                        <span v-if="form.errors.phone" class="text-red-500 text-sm">{{ form.errors.phone }}</span>
                    </div>

                    <!-- Email -->
                    <div class="mt-4">
                        <label class="text-gray-700 font-medium">Email Address</label>
                        <input v-model="form.email" type="email" autocomplete="Email" required
                               class="mt-1 w-full px-2 py-2 border rounded-md focusring-blue-500 focus:border-blue-500">
                        <span v-if="form.errors.email" class="text-red-500 text-sm">{{ form.errors.email }}</span>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label class="text-gray-700 font-medium">Password</label>
                        <input v-model="form.password" type="password" autocomplete="new-password" required
                               class="mt-1 w-full px-2 py-2 border rounded-md focus:ring-blue-50 focus:border-blue-500">
                        <span v-if="form.errors.password" class="text-red-500 text-sm">{{ form.errors.password }}</span>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label class="text-gray-700 font-medium">Confirm Password</label>
                        <input v-model="form.password_confirmation" type="password" autocomplete="confirm-password"
                               required
                               class="mt-1 w-full px-2 py-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Accept Terms -->
                    <div class="mt-4 flex items-center">
                        <input v-model="form.terms" type="checkbox" id="terms" required
                               class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="terms" class="ml-2 text-gray-700 text-sm">
                            I agree to the
                            <Link href="/Terms-0f-service" class="text-blue-500 font-semibold hover:underline">Terms of
                                Service
                            </Link>
                            and
                            <Link href="/Privacy-Policy" class="text-blue-500 font-semibold hover:underline">Privacy
                                Policy
                            </Link>
                        </label>
                    </div>
                    <span v-if="form.errors.terms" class="text-red-500 text-sm">{{ form.errors.terms }}</span>

                    <!-- Submit Button -->
                    <button type="submit"
                            class="w-full bg-blue-600 text-white py-3 mt-6 rounded-md font-semibold hover:bg-blue-700 transition">
                        Register
                    </button>
                </form>

                <p class="text-center text-gray-600 text-sm mt-4">
                    Already have an account?
                    <Link href="/login" class="text-blue-500 font-semibold hover:underline">Sign in</Link>
                </p>
            </div>
        </div>
        <Footer></Footer>
    </div>
</template>

<script setup>
import {Head, useForm} from '@inertiajs/vue3';
import {Link} from '@inertiajs/vue3';
import HomeNavigation from "@/Components/ApplicationComponents/Home/HomeNavigation.vue";
import Footer from "@/Components/ApplicationComponents/Home/Footer.vue";

const form = useForm({
    first_name: '',
    last_name: '',
    phone: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,  // Added terms field
});

const submit = () => {
    form.post(route('register.attempt'), {
        onFinish: () => form.reset('password'),
    });
};
</script>
