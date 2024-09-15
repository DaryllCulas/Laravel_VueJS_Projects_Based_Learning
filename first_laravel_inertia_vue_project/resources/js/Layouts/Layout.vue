<script setup></script>
<template>
  <div>
    <header>
      <nav>
        <Link :href="route('home')">
          <h1 v-if="$page.props.auth.user" class="text-white nav-link">
            {{ $page.props.auth.user.name }}
          </h1>
        </Link>

        <div class="space-x-6">
          <Link
            :href="route('home')"
            class="nav-link"
            :class="{ 'bg-slate-700': $page.component === 'Home' }"
            >Home</Link
          >
          <Link
            :href="route('about')"
            class="nav-link"
            :class="{ 'bg-slate-700': $page.component === 'About' }"
            >About</Link
          >
        </div>

        <div v-if="$page.props.auth.user" class="space-x-6 flex">
          <img
            class="avatar"
            :src="
              $page.props.auth.user.avatar
                ? 'storage/' + $page.props.auth.user.avatar
                : 'storage/avatars/default.png'
            "
          />
          <Link
            :href="route('dashboard')"
            class="nav-link"
            :class="{ 'bg-slate-700': $page.component === 'Dashboard' }"
            >Dashboard</Link
          >
          <Link
            :href="route('logout')"
            class="nav-link"
            method="post"
            as="button"
            type="button"
            >Logout</Link
          >
        </div>

        <div v-else class="space-x-6">
          <Link
            :href="route('register')"
            class="nav-link"
            :class="{ 'bg-slate-700': $page.component === 'Auth/Register' }"
            >Register</Link
          >
          <Link
            :href="route('login')"
            class="nav-link"
            :class="{ 'bg-slate-700': $page.component === 'Auth/Login' }"
            >Login</Link
          >
        </div>
      </nav>
    </header>
    <main>
      <slot />
    </main>
  </div>
</template>
