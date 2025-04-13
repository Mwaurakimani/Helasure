<script setup>
import {router} from '@inertiajs/vue3'
import DashboardHeader from "@/Components/ApplicationComponents/Dashboard/DashboardHeader.vue";
import DashboardLayout from "@/Layouts/DashboardLayout.vue";
import StatCard from "@/Components/ApplicationComponents/Dashboard/StatCard.vue";
import DashboardActionButton from "@/Components/ApplicationComponents/Dashboard/DashboardActionButton.vue";
import DataTable from "@/Components/ApplicationComponents/Dashboard/DataTable.vue";

defineOptions({layout: DashboardLayout});

const stats = [
    {label: 'Total Balance', value: '420.00'},
    {label: 'Pending Payout', value: '350.00'},
    {label: 'Pending Income', value: '120.00'},
];

const actions = [
    {label: 'Withdraw', icon: 'bi-arrow-up', onClick: () => console.log('Withdraw')},
    {label: 'New Escrow', icon: 'bi-plus', onClick: () => router.visit('/escrows/create')},
    {label: 'Deposit', icon: 'bi-arrow-down', onClick: () => console.log('Deposit')},
];

const tableHeaders = ['Escrow ID', 'From', 'To', 'Amount', 'Status', 'Date', 'Time'];
const rows = Array(5).fill({
    id: 'QWERTY123',
    from: 'QWERTY123',
    to: 'QWERTY123',
    amount: '12345.00',
    status: 'Completed',
    date: '10-02-2025',
    time: '12:30',
});
</script>

<template>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-6 py-4">
        <StatCard
            v-for="(stat, i) in stats"
            :key="i"
            :title="stat.label"
            :value="stat.value"
        />
    </div>

    <div class="w-full justify-around flex gap-4 mt-4">
        <DashboardActionButton
            v-for="(action, i) in actions"
            :key="i"
            :label="action.label"
            :icon="action.icon"
            @click="action.onClick"
        />
    </div>

    <section class="mt-10">
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-xl font-bold">Active Escrows (5)</h2>
            <a href="#" class="text-sm text-blue-600 hover:underline">See all</a>
        </div>
        <DataTable :headers="tableHeaders" :rows="rows"/>
    </section>

    <section class="mt-10">
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-xl font-bold">Recent Transactions</h2>
            <a href="#" class="text-sm text-blue-600 hover:underline">See all</a>
        </div>
        <DataTable :headers="tableHeaders" :rows="rows"></DataTable>
    </section>
</template>
