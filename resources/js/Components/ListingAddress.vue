<template>
    <span>
        {{ listing.city }},
        {{ listing.street_name }} {{ listing.street_number }}
    </span>
</template>

<script setup>
    defineProps({
        listing: Object,
    })
</script>
