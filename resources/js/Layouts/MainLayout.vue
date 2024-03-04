<template>
    <header></header>
    <div></div>
    <main class="container mx-auto p-4 w-full">
        <div v-if="flashwarnings" class="warnings">
            {{ flashwarnings }}
        </div>
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
const flashwarnings = computed(() => page.props.flash.warnings);

const flashSuccess = computed(() => page.props.flash.success);
</script>

<style>
.success {
    background-color: green;
    color: white;
}

.warnings {
    background-color: rgb(233, 58, 58);
    color: rgb(0, 0, 0);
}
</style>
