<script setup>

const featuresList = [
    {
        title: "Secure Transactions",
        description: "Your money stays safe until both parties are satisfied.",
        icon: "bi bi-shield-lock-fill",
        bgColor: "bg-gradient-to-br from-blue-500 to-blue-700"
    },
    {
        title: "Fair Dispute Resolution",
        description: "Automated and human-reviewed resolutions to protect all users.",
        icon: "bi bi-bank",
        bgColor: "bg-gradient-to-br from-green-500 to-green-700"
    },
    {
        title: "Instant Payments",
        description: "Fast fund releases once the transaction is approved.",
        icon: "bi bi-lightning-charge-fill",
        bgColor: "bg-gradient-to-br from-orange-500 to-orange-700"
    },
    {
        title: "Data Encryption",
        description: "All transactions and data are securely encrypted.",
        icon: "bi bi-lock-fill",
        bgColor: "bg-gradient-to-br from-purple-500 to-purple-700"
    }
];
</script>

<template>
    <section class="container mb-[20px] py-16 bg-gray-100 shadow-sm rounded">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Why Choose Helasure?</h2>
            <p class="text-gray-600 mt-2">Our platform provides a seamless and secure escrow experience.</p>

            <div class="grid md:grid-cols-4 gap-8 mt-8">
                <div
                    v-for="(feature, index) in featuresList"
                    :key="index"
                    class="p-6 bg-white rounded-lg shadow-md flex flex-col items-center text-center"
                >
                    <div class="p-4 rounded-full text-white"
                         :class="feature.bgColor">
                        <i :class="['text-3xl', feature.icon]"></i>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">{{ feature.title }}</h3>
                    <p class="mt-2 text-gray-600">{{ feature.description }}</p>
                </div>
            </div>
        </div>
    </section>
</template>
