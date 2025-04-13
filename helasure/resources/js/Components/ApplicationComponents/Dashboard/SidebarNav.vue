<template>
    <aside class="hidden md:flex flex-col w-64 h-full bg-blue-900 text-white py-6 px-4 space-y-6">
        <!-- User Profile Section -->
        <div class="p-3">
            <div class="w-[100px] h-[100px] bg-white rounded-full mb-4 flex items-center justify-center">
                <i class="bi bi-person-fill text-gray-500 text-[80px]"></i>
            </div>
            <Link class="underline" href="/profile">
                {{ page.props.auth.user.first_name }} {{ page.props.auth.user.last_name }}
            </Link>
        </div>

        <!-- Navigation Items -->
        <div v-for="item in sidebarItems" :key="item.href">
            <Link
                :href="item.href"
                class="group flex items-center space-x-2 p-2 rounded transition-all"
                :class="isActive(item.routes).value
                    ? 'bg-white text-blue-900 font-semibold'
                    : 'hover:bg-blue-700 hover:text-white'"
            >
                <i :class="`${item.icon} text-lg`"></i>
                <span>{{ item.label }}</span>
            </Link>
        </div>
    </aside>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3';
import {computed} from 'vue';

const page = usePage();

const sidebarItems = [
    {
        label: 'Dashboard',
        icon: 'bi bi-grid-fill',
        href: '/dashboard',
        routes: ['dashboard'],
    },
    {
        label: 'Transactions',
        icon: 'bi bi-arrow-left-right',
        href: '/transactions',
        routes: ['transactions'],
    },
    {
        label: 'Wallet',
        icon: 'bi bi-wallet2',
        href: '/wallet',
        routes: ['wallet'],
    },
    {
        label: 'Escrows',
        icon: 'bi bi-box',
        href: '/escrows',
        routes: ['escrows'],
    },
];

const isActive = (routes) => {
    return computed(() => routes.includes(route().current()));
};
</script>
