<template>
    <div class="h-[100px] flex justify-between items-start px-6 pt-6">
        <!-- Left Greeting Section -->
        <div>
            <p class="text-sm font-semibold text-gray-700">Hello {{ page.props.auth.user.first_name }},</p>
            <h2 class="text-2xl font-bold text-gray-900">
                You are <span class="text-blue-600">HelaSure</span>.
            </h2>
        </div>

        <!-- Notification Bell -->
        <div class="relative">
            <section class="flex gap-3">
                <div class="relatives pt-[3px]">
                    <i class=" bi bi-bell-fill text-2xl text-gray-500"></i>
                    <span v-if="has_notifications"
                          class="absolute top-0 left-[10px] w-[15px] h-[15px] bg-red-600 rounded-full border border-white"></span>
                </div>
                <i class="bi bi-door-closed-fill text-[1.5em] m-[0px] text-gray-500"></i>
            </section>
        </div>
    </div>
</template>
<script setup>
import {usePage} from "@inertiajs/vue3";
import {ref} from "vue";


const page = usePage()
const has_notifications = ref(true)
</script>
