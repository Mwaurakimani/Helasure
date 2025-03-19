<template>
  <section class="container py-16 bg-gray-100 shadow-sm rounded">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-gray-800">How It Works</h2>
      <p class="text-gray-600 mt-2">Follow these simple steps to complete your transaction safely.</p>

      <div class="flex flex-col md:flex-row items-center justify-between mt-8">
        <!-- Step 1 -->
        <div class="flex flex-col items-center">
          <div class="p-6 bg-blue-500 text-white rounded-full shadow-lg">
            <span class="text-xl font-bold">1</span>
          </div>
          <h3 class="mt-4 text-lg font-semibold text-gray-800">Create an Escrow</h3>
          <p class="mt-2 text-gray-600 max-w-xs">Enter transaction details, specify payment terms, and invite the other party.</p>
        </div>

        <!-- Dashed Line -->
        <div class="hidden md:block w-16 h-1 border-dashed border-2 border-gray-400"></div>

        <!-- Step 2 -->
        <div class="flex flex-col items-center">
          <div class="p-6 bg-green-500 text-white rounded-full shadow-lg">
            <span class="text-xl font-bold">2</span>
          </div>
          <h3 class="mt-4 text-lg font-semibold text-gray-800">Deposit Funds</h3>
          <p class="mt-2 text-gray-600 max-w-xs">Securely deposit the agreed amount into escrow.</p>
        </div>

        <!-- Dashed Line -->
        <div class="hidden md:block w-16 h-1 border-dashed border-2 border-gray-400"></div>

        <!-- Step 3 -->
        <div class="flex flex-col items-center">
          <div class="p-6 bg-orange-500 text-white rounded-full shadow-lg">
            <span class="text-xl font-bold">3</span>
          </div>
          <h3 class="mt-4 text-lg font-semibold text-gray-800">Confirm Transaction</h3>
          <p class="mt-2 text-gray-600 max-w-xs">Once both parties approve, funds are released.</p>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  name: 'HowItWorksComponent'
}
</script>
