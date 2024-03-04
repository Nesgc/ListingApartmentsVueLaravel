<template>
    <form @submit.prevent="submit">
        <div>
            <div>
                <label>Beds</label>
                <input v-model.number="form.beds" type="text" />
                <div class="warning" v-if="errors.beds">{{ errors.beds }}</div>
            </div>

            <div>
                <label>Baths</label>
                <input v-model.number="form.baths" type="text" />
                <div class="warning" v-if="errors.baths">
                    {{ errors.baths }}
                </div>
            </div>

            <div>
                <label>Area</label>
                <input v-model.number="form.area" type="text" />
                <div class="warning" v-if="errors.area">{{ errors.area }}</div>
            </div>

            <div>
                <label>City</label>
                <input v-model="form.city" type="text" />
                <div class="warning" v-if="errors.city">{{ errors.city }}</div>
            </div>

            <div>
                <label>Post Code</label>
                <input v-model="form.code" type="text" />
                <div class="warning" v-if="errors.code">{{ errors.code }}</div>
            </div>

            <div>
                <label>Street</label>
                <input v-model="form.street" type="text" />
                <div class="warning" v-if="errors.street">
                    {{ errors.street }}
                </div>
            </div>

            <div>
                <label>Street Nr</label>
                <input v-model.number="form.street_nr" type="text" />
                <div class="warning" v-if="errors.street_nr">
                    {{ errors.street_nr }}
                </div>
            </div>

            <div>
                <label>Price</label>
                <input v-model.number="form.price" type="text" />
                <div class="warning" v-if="errors.price">
                    {{ errors.price }}
                </div>
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

import { router } from "@inertiajs/vue3";
const form = useForm({
    beds: 0,
    baths: 0,
    area: 0,
    city: null,
    street: null,
    code: null,
    street_nr: null,
    price: 0,
});

defineProps({ errors: Object });

function submit() {
    router.post(route("listing.store"), form);
}
</script>

<style scoped>
.warning {
    background-color: red;
}

label {
    margin-right: 2em;
}
div {
    padding: 2px;
}
</style>
