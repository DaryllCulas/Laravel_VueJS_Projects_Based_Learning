<script setup>
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";
import FollowingItem from "@/Components/app/FollowingItem.vue";

const searchKeyword = ref("");
</script>

<template>
  <div class="px-3">
    <h2 class="text-2xl font-bold mb-4">My Friends</h2>
    <TextInput :model-value="searchKeyword" placeholder="Type to search..." />
    <div class="py-8 px-3">
      <div v-if="false" class="text-gray-400 flex text-center">
        You don't have friend yet.
      </div>

      <div v-else>
        <FollowingItem
          image="https://picsum.photos/100"
          title="Juan Dela Cruz"
          description="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, eos."
        />
        <FollowingItem
          image="https://picsum.photos/100"
          title="Pedro Penduko"
          description="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, eos."
        />
      </div>
    </div>
  </div>
</template>
