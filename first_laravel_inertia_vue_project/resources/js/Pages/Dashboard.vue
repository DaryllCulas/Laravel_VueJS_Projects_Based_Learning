<!--eslint-disable vue/no-v-text-v-html-on-component-->
<script setup>
import { ref, watch } from "vue";
import PaginationLinks from "./components/PaginationLinks.vue";
import { router } from "@inertiajs/vue3";
import { debounce } from "lodash";

const props = defineProps({
  users: Object,
  searchTerm: String,
  can: Object,
});

const deleteButton = () => {
  console.log("Deleted");
};

const search = ref(props.searchTerm);

watch(search, (q) =>
  debounce(router.get("/dashboard", { search: q }, { preserveState: true }), 500)
);

// Format Date
const getDate = (date) =>
  new Date(date).toLocaleDateString("en-us", {
    year: "numeric",
    month: "long",
    day: "numeric",
  });
</script>
<template>
  <div>
    <!-- <h1 class="title">Welcome Back, {{ $page.props.auth.user.name }}</h1> -->
    <div>
      <p class="title p-4 bg-green-200">{{ $page.props.flash.greet }}</p>
    </div>
  </div>

  <div>
    <div class="flex justify-end mb-4">
      <div class="w-1/4">
        <input type="search" placeholder="Search" v-model="search" />
      </div>
    </div>
  </div>

  <table>
    <thead>
      <tr class="bg-slate-300">
        <th>Avatar</th>
        <th>Name</th>
        <th>Email</th>
        <th>Registration Date</th>
        <th v-if="can.delete_user">Delete</th>
      </tr>
    </thead>

    <tbody>
      <tr v-for="user in users.data" :key="user.id">
        <td>
          <img
            :src="user.avatar ? 'storage/' + user.avatar : 'storage/avatars/default.png'"
            class="avatar"
          />
        </td>
        <td>{{ user.name }}</td>
        <td>{{ user.email }}</td>
        <td>{{ getDate(user.created_at) }}</td>
        <td v-if="can.delete_user">
          <button class="bg-red-500 w-6 h-6 rounded-full" @click="deleteButton"></button>
        </td>
      </tr>
    </tbody>
  </table>

  <!-- Pagination Links -->
  <!-- <div>
    <Link
      v-for="link in users.links"
      :key="link.label"
      v-html="link.label"
      :href="link.url"
      class="p-1 mx-1"
      :class="{ 'text-slate-300': !link.url, 'text-blue-500 font-medium': link.active }"
    ></Link>

    <p class="text-slate-600 text-sm">
      Showing {{ users.from }} to {{ users.to }} of {{ users.total }} results
    </p>
  </div> -->
  <div>
    <PaginationLinks :paginator="users" />
  </div>
</template>
