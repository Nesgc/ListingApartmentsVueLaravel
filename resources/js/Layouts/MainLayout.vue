<template>
    <Link href="/show">Show Page</Link>&nbsp;
    <Link href="/">Main Page</Link>

    <slot></slot>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
