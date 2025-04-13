<script setup>
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import DataTable from "@/Components/ApplicationComponents/Dashboard/DataTable.vue";
import {onMounted} from "vue";

const tableHeaders = ["Transaction ID", "From", "To", "Type", "Amount", "Status", "Date", "Time",];
const rows = Array(5).fill({
    transaction_id: 'QWERTY123',
    from: 'QWERTY123',
    to: 'QWERTY123',
    type: 'QWERTY123',
    amount: '12345.00',
    status: 'Completed',
    date: '10-02-2025',
    time: '12:30',
});

defineOptions({layout: DashboardLayout})

let openTransaction = () => {
    $('#transactionModal').fadeIn('fast')
}

let closeTransaction = () => {
    $('#transactionModal').fadeOut('fast')
}

onMounted(() => {
})
</script>
<template>
    <teleport to="body">
        <div id="transactionModal" class="hidden w-full h-full bg-black/70  absolute top-0 left-0 "
             @click="closeTransaction">
            <section class="flex justify-center items-center w-full h-full">
                <div class="w-[400px] h-[500px] bg-[#3073B5] rounded">
                    <h1 class="p-[20px] text-white text-2xl underline mb-[10px]">Escrow Details</h1>
                    <ul class="px-[20px] text-white text-sm list-display-transactions">
                        <li class="border-b border-b-white flex justify-between items-center">
                            <p>Transaction ID</p>
                            <p>QWERTY123</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p>Amount</p>
                            <p>QWERTY123</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p>Free</p>
                            <p>QWERTY123</p>
                        </li>
                        <li class="border-b border-b-white flex justify-between items-center">
                            <p>Tax</p>
                            <p>QWERTY123</p>
                        </li>
                        <li class="border-b border-b-white flex justify-between items-center">
                            <p>Total</p>
                            <p>QWERTY123</p>
                        </li>
                        <li class="border-b-white flex justify-between items-center">
                            <p>Paid To</p>
                            <p>QWERTY123</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p>Status</p>
                            <p>QWERTY123</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p>Date</p>
                            <p>QWERTY123</p>
                        </li>
                        <li class="border-b-white flex justify-between items-center">
                            <p>Time</p>
                            <p>QWERTY123</p>
                        </li>
                    </ul>
                    <div class="px-[20px] text-sm">
                        <textarea class="w-full h-[120px] rounded" placeholder="Description"></textarea>
                    </div>
                </div>
            </section>
        </div>
    </teleport>
    <div class="px-3 mt-2">
        <section class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold">All Wallet</h2>
            <div class="flex  items-center  gap-2">
                <button class="p-2 rounded-md border bg-indigo-100 text-indigo-600 hover:bg-indigo-200">
                    <i class="bi bi-funnel"></i>
                </button>
                <input
                    type="text"
                    placeholder="Search transactions..."
                    class="px-4 py-2 rounded-md border border-indigo-200 bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-300 w-64"
                />
                <button class="p-2 rounded-md border bg-indigo-100 text-indigo-600 hover:bg-indigo-200">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </section>

        <section class="mt-[10px]">
            <DataTable :headers="tableHeaders" :rows="rows" @selectItem="openTransaction"/>
        </section>
    </div>
</template>

<style lang="scss" scoped>
.list-display-transactions {
    li {
        @apply py-[5px];
    }
}
</style>

