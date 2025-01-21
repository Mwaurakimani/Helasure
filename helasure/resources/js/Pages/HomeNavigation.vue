<template>
  <nav class="flex items-center justify-between px-[10px] rounded mt-[10px] h-14 shadow">
    <h1 class="">Logo</h1>
    <ul class="flex gap-2">
      <Link :href="route('home')">Home</Link>
      <Link :href="route('dashboard')">Dashboard</Link>
    </ul>
  </nav>
</template>
<script>
export default {
  name: 'HomeNavigation'
}
</script>
<style scoped lang="scss">
nav {
  ul {
    a {
      @apply px-[10px] py-1 rounded-sm hover:bg-gray-800  cursor-pointer hover:text-white;
    }
  }
}
</style>
