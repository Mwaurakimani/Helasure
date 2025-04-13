<template>
    <nav
        class="fixed bottom-0 left-0 w-full bg-white border-t shadow-md z-50 flex justify-around items-center py-2 md:hidden">
        <Link
            v-for="item in navItems"
            :key="item.href"
            :href="item.href"
            class="flex flex-col items-center text-xs transition-all"
            :class="isActive(item.routes).value
          ? 'text-blue-600 font-semibold'
          : 'text-gray-700 hover:text-blue-600'"
        >
            <i :class="`${item.icon} text-lg`"></i>
            {{ item.label }}
        </Link>
    </nav>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3';
import {computed} from 'vue';

// Access current page data
const page = usePage();

// Define mobile nav items
const navItems = [
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

// Check if a route is active
const isActive = (routes) => {
    return computed(() => routes.includes(route().current()));
};
</script>
