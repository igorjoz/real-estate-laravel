<template>
    <Box>
        <div>
            <Link :href="route('listing.show', {listing: listing.id})">
                <div class="flex items-center gap-2">
                    <Price :price="listing.price" class="text-2xl font-bold"/>
                    <div class="text-xs text-gray-500">
                        <Price :price="monthlyPayment" /> per month
                    </div>
                </div>

                <ListingSpace :listing="listing" class="text-lg"/>
                <ListingAddress :listing="listing" class="text-gray-500 dark:text-gray-300"/>
            </Link>
        </div>

        <div>
            <Link :href="route('listing.edit', {listing: listing.id})">Edit</Link>
        </div>

        <div>
            <Link :href="route('listing.destroy', {listing: listing.id})" method="delete" as="button">Delete</Link>
        </div>

        <br>
    </Box>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import { defineProps } from 'vue'

    import ListingAddress from '@/Components/ListingAddress.vue'
    import Box from '@/Components/UI/Box.vue'
    import ListingSpace from '@/Components/ListingSpace.vue'
    import Price from '@/Components/Price.vue'

    import { useMonthlyPayment } from '@/Composables/useMonthlyPayment'

    const props = defineProps({
        listing: Object,
    })

    const { monthlyPayment } = useMonthlyPayment(props.listing.price, 2.5, 25)
</script>
