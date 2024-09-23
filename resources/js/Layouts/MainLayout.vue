<template>
    <Link href="/">Main Page</Link>&nbsp;
    <Link href="/hello">Show Page</Link>

    <slot>Default value</slot>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'

    const props = defineProps({
        message: String
    })
</script>
