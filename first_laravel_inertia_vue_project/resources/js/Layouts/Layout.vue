<script setup></script>
<template>
    <div>
        <header>
            <nav>
                <Link :href="route('home')">
                <h1 class="text-white nav-link">{{ $page.props.auth.user }}</h1>
                </Link>

                <div class="space-x-6">
                    <Link :href="route('home')" class="nav-link">Home</Link>
                    <Link :href="route('about')" class="nav-link">About</Link>
                </div>

                <div class="space-x-6">
                    <Link :href="route('register')" class="nav-link">Register</Link>
                </div>
            </nav>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>
