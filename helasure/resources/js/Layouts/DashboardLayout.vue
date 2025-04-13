<template>
    <div class="flex h-[100vh] overflow-hidden">
        <SidebarNav/>
        <div class="h-[100vh] w-full bg-gray-50 p-4 overflow-auto">
            <DashboardHeader/>
            <slot/>
        </div>
        <BottomNav/>
    </div>
</template>

<script setup>
import SidebarNav from "@/Components/ApplicationComponents/Dashboard/SidebarNav.vue";
import BottomNav from "@/Components/ApplicationComponents/Dashboard/BottomNav.vue";
import DashboardHeader from "@/Components/ApplicationComponents/Dashboard/DashboardHeader.vue";
</script>
