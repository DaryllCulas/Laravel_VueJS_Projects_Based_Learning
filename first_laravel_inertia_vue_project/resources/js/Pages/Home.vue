<script setup>
</script>
<template>
    <Head :title="` | ${$page.component}`" />
    <h1>{{ $page.component }}</h1>
    <Link class="mt-[600px] block" href="/" preserve-scroll> Refresh </Link>
</template>
