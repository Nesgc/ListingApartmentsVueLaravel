<template>
    <header></header>
    <div></div>
    <main class="container mx-auto p-4 w-full">
        <div v-if="flashSuccess" class="success">
            {{ flashSuccess }}
        </div>
        <slot>Default</slot>
    </main>
</template>

<script setup>
import { computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();
const flashSuccess = computed(() => page.props.flash.success);
</script>

<style>
.success {
    background-color: green;
    color: white;
}
</style>
