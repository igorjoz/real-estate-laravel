<template>
    <div>Index page</div>
    <Link href="/hello">Go to show page</Link>

    <div>The message is: {{ props.message }}</div>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'

    const props = defineProps({
        message: String
    })
</script>

<script>
    import MainLayout from '../../Layouts/MainLayout.vue'

    export default {
        layout: MainLayout
    }
</script>
