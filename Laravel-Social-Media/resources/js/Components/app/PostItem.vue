<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";

const post1 = {
  user: {
    id: 1,
    avatar: "https://randomuser.me/api/portraits/men/1.jpg",
    name: "John Doe",
  },
  group: null,
  body: `<p>lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  <p>lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.</p>`,
  created_at: "2022-01-01 12:00:00",
};
</script>
<template>
  <div>
    <div class="flex items-center gap-2 mb-3">
      <div>
        <a href="javascript:void(0)">
          <img :src="post1.user.avatar" class="w-[40px] rounded-full" />
        </a>
      </div>
      <div>
        <a href="javascript:void(0)">
          <h4 class="font-bold">{{ post1.user.name }}</h4>
        </a>
        <small class="text-gray-400">{{ post1.created_at }}</small>
      </div>
    </div>
    <div>
      <Disclosure v-slot="{ open }">
        <div v-if="!open" v-html="post1.body.substring(0, 200)" />

        <DisclosurePanel>
          <div v-html="post1.body" />
        </DisclosurePanel>
        <div class="flex justify-end">
          <DisclosureButton class="text-blue-500">
            <span>{{ open ? "Read Less" : "Read More" }}</span>
          </DisclosureButton>
        </div>
      </Disclosure>
    </div>
  </div>
</template>
