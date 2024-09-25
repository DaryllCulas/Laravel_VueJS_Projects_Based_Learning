<script setup>
import PostItem from "@/Components/app/PostItem.vue";

defineProps({
  posts: Object,
});
</script>
<template>
  <div>
    <PostItem />
  </div>
</template>
