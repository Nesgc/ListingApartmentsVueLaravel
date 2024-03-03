<template>
    <MainLayout>
        <div>Index</div>
        <Link href="/show">show Page</Link>
        <div>The message is {{ message }}</div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({ message: String });

import { Link } from "@inertiajs/vue3";
</script>
