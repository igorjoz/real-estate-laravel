<template>
    <MainLayout>
        <div>Show page</div>
        <Link href="/">Go to index page</Link>

        <div>The message is: {{ message }}</div>
    </MainLayout>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'
    import MainLayout from '../../Layouts/MainLayout.vue'

    defineProps(['message'])
</script>
