<template>
    <main>
        <header>
            <a href="/">Welcome </a> /
            <inertia-link :href="route('home')">Home </inertia-link> / 
            <inertia-link :href="route('about')">About </inertia-link>
        </header>
        <slot />
  </main>
</template>