<script setup>
import {onMounted, ref} from 'vue';
import '../echo.js';
import {isIntervalRunning, setMessages, startInterval, stopInterval} from "@/Acctions/Chat/GUI.js";

const messages = ref([]); // Reactive array to hold chat messages
const message = ref('');

const sendMessage = () => {

    axios.post('/api/messages/sendMessage', {
        message: message.value,
    })
        .then(res => messages.value.push())
        .catch(err => console.log("Error : " + err))
        .finally(() => message.value = '');


    messages.value.push();
};

onMounted(() => {
    Echo.channel('playground')
        .listen('.playground', (event) => {
            messages.value.push(setMessages(event.message));
        });
})
</script>

<template>
    <div class="mb-[20px] p-[20px] shadow-sm h-[500px] container">
        <!-- Chat Display -->
        <div class="h-[700px] w-full bg-gray-100 mb-4 overflow-y-auto p-4">
            <ul class="space-y-4">
                <li v-for="message in messages" :key="message.id" class="flex items-start gap-2">
                    <!-- Sender Initial -->
                    <div class="w-[40px] h-[40px] bg-blue-500 text-white flex items-center justify-center rounded-full font-bold">
                        {{ message.initial }}
                    </div>
                    <!-- Message Bubble -->
                    <div class="bg-white p-3 rounded-lg shadow-sm">
                        <p class="text-sm text-gray-800">{{ message.text }}</p>
                        <span class="text-xs text-gray-500">{{ message.time }}</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="bg-red-400 h-[40px] mb-[20px]">
            <input v-model="message" class="h-[40px] w-full rounded-sm border border-gray-200">
        </div>
        <div class="flex gap-2">
            <button class="btn btn-primary" @click="sendMessage">send</button>
            <a class="btn btn-warning text-white block" href="/">Reste Panel</a>
        </div>
    </div>
</template>

<style scoped>

</style>
