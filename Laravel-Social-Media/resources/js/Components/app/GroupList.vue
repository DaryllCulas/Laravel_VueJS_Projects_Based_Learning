<script setup>
import GroupItem from "@/Components/app/GroupItem.vue";
import TextInput from "@/Components/TextInput.vue";
import { ref } from "vue";

const searchKeyword = ref("");
</script>

<template>
  <div
    class="px-3 bg-white rounded border py-3 h-[300px] lg:h-full overflow-hidden flex flex-col"
  >
    <div class="block lg:hidden overflow-hidden lg:flex lg:flex-col h-full">
      <Disclosure v-slot="{ open }">
        <DisclosureButton class="text-left">
          <h2 class="text-2xl font-bold mb-4">My Groups</h2>
        </DisclosureButton>
        <DisclosurePanel>
          <TextInput
            :model-value="searchKeyword"
            placeholder="Type to search..."
            class="w-full"
          />
        </DisclosurePanel>
      </Disclosure>
    </div>
    <div class="hidden lg:block overflow-hidden flex flex-col lg:h-full">
      <h2 class="text-2xl font-bold mb-4">My Groups</h2>
      <TextInput
        :model-value="searchKeyword"
        placeholder="Type to search..."
        class="w-full"
      />
    </div>

    <div class="mt-3 py-2 flex-1 overflow-auto">
      <div v-if="false" class="text-gray-400 text-center p-3">
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
