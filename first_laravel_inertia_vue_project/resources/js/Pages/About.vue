<script setup>
    defineProps({
        user: String,
    });

</script>
<template>
    <Head title=" | About" />
    <div>
        <h1>About Page, {{ user }} is here</h1>
    </div>
</template>
