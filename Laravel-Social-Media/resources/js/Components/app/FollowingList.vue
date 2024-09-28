<script setup>
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";
import FollowingItem from "@/Components/app/FollowingItem.vue";

const searchKeyword = ref("");
</script>

<template>
  <div
    class="px-3 bg-white rounded border py-3 h-[300px] lg:h-full overflow-hidden flex flex-col"
  >
    <h2 class="text-xl font-bold mb-4">My Followings</h2>
    <TextInput
      :model-value="searchKeyword"
      placeholder="Type to search..."
      class="w-full"
    />
    <div class="mt-3 flex-1 h-[300px] lg:h-auto overflow-auto">
      <div v-if="false" class="text-gray-400 text-center p-3">
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
