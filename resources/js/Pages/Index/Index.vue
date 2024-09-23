<template>
    <MainLayout>
        <div>Index page</div>
        <Link href="/hello">Go to show page</Link>

        <div>The message is: {{ props.message }}</div>
    </MainLayout>
</template>

<script setup>
    import {Link} from '@inertiajs/vue3'
    import MainLayout from '../../Layouts/MainLayout.vue'

    const props = defineProps({
        message: String
    })
</script>
