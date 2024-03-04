<template>
    <MainLayout>
        <ListingAddress :listing="listing" />
    </MainLayout>
</template>

<script setup>
defineProps({
    listing: Object,
    errors: Object,
});

import { Link } from "@inertiajs/vue3";

import MainLayout from "../../Layouts/MainLayout.vue";
import ListingAddress from "../../Components/ListingAddress.vue";
</script>
