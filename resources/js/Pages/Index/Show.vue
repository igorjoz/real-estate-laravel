<template>
    <div>Show page</div>
    <Link href="/">Go to index page</Link>

    <div>The message is: {{ message }}</div>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'

    defineProps(['message'])
</script>

