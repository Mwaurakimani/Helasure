<template>
    <section>
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-xl font-bold">{{ title }} <span v-if="count">({{ count }})</span></h2>
            <a :href="link" class="text-sm text-blue-600 hover:underline" v-if="link">See all</a>
        </div>

        <div class="overflow-x-auto bg-blue-100 rounded-lg p-4">
            <table class="min-w-full text-left text-sm text-gray-800">
                <thead>
                <tr class="font-semibold text-black">
                    <th v-for="(header, idx) in headers" :key="idx" class="px-4 py-2">{{ header }}</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(row, i) in rows" :key="i" class="border-t border-blue-200" @click="$emit('selectItem')">
                    <td v-for="(value, idx) in row" :key="idx" class="px-4 py-2">
                        <span :class="valueClass(idx, value)">{{ value }}</span>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</template>

<script setup>
defineProps({
    title: String,
    count: [String, Number],
    link: String,
    headers: Array,
    rows: Array
});

const valueClass = (idx, value) => {
    if (typeof value === 'string' && value.toLowerCase() === 'completed') {
        return 'text-green-600 font-medium';
    }
    return '';
};
const emit = defineEmits(['selectItem'])
</script>
