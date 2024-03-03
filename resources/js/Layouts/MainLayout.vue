<template>
    <header></header>
    <div></div>
    <main class="container mx-auto p-4 w-full">
        <div v-if="page.props.flash.success" class="success">
            {{ page.props.flash.success }}
        </div>
        <slot>Default</slot>
    </main>
</template>

<script setup>
import { computed } from "vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();
</script>

<style>
.success {
    background-color: green;
    color: white;
}
</style>
