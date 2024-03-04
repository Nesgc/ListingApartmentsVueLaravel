<template>

        <div>Index</div>
        <Link href="/show">show Page</Link>
        <div>The message is {{ message }}</div>

</template>

<script setup>



defineProps({ message: String });

import { Link } from "@inertiajs/vue3";
</script>
