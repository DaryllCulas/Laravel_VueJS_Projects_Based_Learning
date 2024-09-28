<script setup>
import PostItem from "@/Components/app/PostItem.vue";

const post1 = {
  user: {
    id: 1,
    avatar: "https://randomuser.me/api/portraits/men/1.jpg",
    name: "John Doe",
  },
  group: null,
  attachments: [
    {
      id: 1,
      name: "test.png",
      url: "https://picsum.photos/1000",
      mime: "image/png",
    },
    {
      id: 2,
      name: "test2.png",
      url: "https://picsum.photos/1000",
      mime: "image/png",
    },
    {
      id: 3,
      name: "test3.png",
      url: "https://picsum.photos/1000",
      mime: "image3/png",
    },
    {
      id: 4,
      name: "test4.png",
      url: "https://picsum.photos/1000",
      mime: "image3/png",
    },
  ],
  body: `<p>lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  <p>lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.</p>`,
  created_at: "2022-01-01 12:00:00",
};

const post2 = {
  user: {
    id: 2,
    avatar: "https://randomuser.me/api/portraits/men/2.jpg",
    name: "James Smith",
  },
  group: {
    id: 1,
    name: "Laravel Developers",
  },
  body: `<p>lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  <p>lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.lorem ipsum dolor sit amet consectetur adipisicing elit.</p>`,
  created_at: "2022-01-01 12:00:00",
};
</script>
<template>
  <div class="overflow-auto">
    <PostItem :post="post1" />
    <PostItem :post="post2" />
  </div>
</template>
