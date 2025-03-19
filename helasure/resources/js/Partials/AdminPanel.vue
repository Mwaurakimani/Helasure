<script setup>

import SectionBorder from "@/Components/Single/SectionBorder.vue";
import PrimaryButton from "@/Components/Single/PrimaryButton.vue";
</script>

<template>
    <div class="w-full h-[200px]">
        <h4 class="h4 p-1">Accounts</h4>
        <div class=" flex bg-green-400">
            <ul class="flex w-[500px] flex-wrap gap-2">
                <li v-for="item in  4" class="w-[400px] rounded  bg-white h-[200px] shadow p-[10px] hover:scale-[104%] transition duration-200 ease-in-out">
                    <div class="flex justify-between mb-[20px]">
                        <h4 class="h4">Peter Kimani</h4>
                        <div class=" w-4 h-4 bg-green-400 rounded-[50%] shadow-green-400 shadow-sm "></div>
                    </div>
                    <div class="flex justify-between mb-[20px]">
                        <h4 class="h4 font-light ">Balance</h4>
                        <p>Ksh 00,000,000</p>
                    </div>
                    <div class="py-[20px] flex">
                        <PrimaryButton>Deposit</PrimaryButton>
                        <PrimaryButton>Withdraw</PrimaryButton>
                    </div>
                </li>
            </ul>
            <div class="w-full bg-red-400">

            </div>
        </div>
    </div>
</template>
