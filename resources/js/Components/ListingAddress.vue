<template>
    <span>
        {{ listing.city }},
        {{ listing.street_name }} {{ listing.street_number }},
        for ${{ listing.price }}
    </span>
</template>

<script setup>
    defineProps({
        listing: Object,
    })
</script>
