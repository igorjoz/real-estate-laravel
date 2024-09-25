<template>
    <Link href="/listing">Listings</Link>&nbsp;
    <Link href="/listing/create">Creata a new listing</Link>

    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>

    <!-- <div> The page with time {{ timer }}</div> -->

    <slot>Default value</slot>
</template>

<script setup>
    import { Link, usePage } from '@inertiajs/vue3'
    import { computed } from 'vue'
    // import { ref } from 'vue'

    const page = usePage()
    const flashSuccess = computed(() => page.props.flash.success)

    // const timer = ref(0)
    // setInterval(() => {
    //     timer.value++
    // }, 1000)
</script>

<style scoped>
    .success {
        background: green;
        color: white;
    }
</style>
