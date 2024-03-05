<template>
    <div v-for="listing in listings" :key="listing.id">
        <div>
            <Link :href="route('listing.show', listing.id)">
                <ListingAddress :listing="listing"
            /></Link>
        </div>

        <div>
            <Link :href="route('listing.edit', listing.id)">Edit</Link>
        </div>
        <h1 class="text-6xl text-amber-400 font-bold underline">
            Hello world!
        </h1>
        <div>
            <Link
                :href="route('listing.destroy', listing.id)"
                method="delete"
                as="button"
                >Delete</Link
            >
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import ListingAddress from "../../Components/ListingAddress.vue";

defineProps({
    listings: Array,
});
</script>
