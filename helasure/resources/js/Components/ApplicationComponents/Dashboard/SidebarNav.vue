<template>
    <aside class="hidden md:flex flex-col w-[200px] h-full bg-blue-900 text-white py-2 px-3">
        <!-- User Profile Section -->
        <div class="p-3 mb-6">
            <div class="w-[80px] mx-auto h-[80px] bg-white rounded-full mb-2 flex items-center justify-center">
                <i class="bi bi-person-fill text-gray-500 text-[40px]"></i>
            </div>
            <Link class="hover:underline block text-center hover:text-white" :href="route('dashboard.profile.index')">
                {{ username }}
            </Link>
        </div>

        <!-- Navigation Items -->
        <div v-for="item in sidebarItems" :key="item.href">
            <Link
                :href="route(item.href)"
                class="group flex items-center space-x-2 p-2 rounded transition-all mb-4"
                :class="isActive(item.routes).value ? 'bg-white text-blue-900 font-semibold': 'hover:bg-blue-700 hover:text-white'"
            >
                <i :class="`${item.icon} text-lg`"></i>
                <span>{{ item.label }}</span>
            </Link>
        </div>
    </aside>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3';
import {computed, ref, watch} from 'vue';

const page = usePage();
const username = ref(page.props.auth.user.first_name);

watch(
    () => page.props.auth.user.first_name,
    (newVal) => {
        username.value = newVal;
    }
);

const sidebarItems = [
    {
        label: 'Dashboard',
        icon: 'bi bi-grid-fill',
        href: 'dashboard.index',
        routes: ['dashboard.index'],
    },
    {
        label: 'Escrows',
        icon: 'bi bi-box',
        href: 'dashboard.escrows.index',
        routes: ['dashboard.escrows.index'],
    },
    {
        label: 'Wallet',
        icon: 'bi bi-wallet2',
        href: 'dashboard.wallet.index',
        routes: ['dashboard.wallet.index'],
    },
    {
        label: 'Transactions',
        icon: 'bi bi-arrow-left-right',
        href: 'dashboard.transactions.index',
        routes: ['dashboard.transactions.index'],
    },
];

const isActive = (routes) => {
    return computed(() => routes.includes(route().current()));
};
</script>
