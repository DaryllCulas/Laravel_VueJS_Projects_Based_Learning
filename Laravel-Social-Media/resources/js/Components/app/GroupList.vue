<script setup>
import GroupItem from "@/Components/app/GroupItem.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";

const searchKeyword = ref("");
</script>

<template>
  <div class="px-3">
    <h2 class="text-2xl font-bold mb-4">My Groups</h2>
    <TextInput :model-value="searchKeyword" placeholder="Type to search..." />
    <div class="py-8 px-3">
      <div v-if="false" class="text-gray-400 flex text-center">
        You are not joined to any groups
      </div>

      <div v-else>
        <GroupItem
          image="https://picsum.photos/100"
          title="Laravel Developers"
          description="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, eos."
        />
        <GroupItem
          image="https://picsum.photos/100"
          title="Vue.js Developers"
          description="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, eos."
        />
      </div>
    </div>
  </div>
</template>
