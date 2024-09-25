<template>
    <form @submit.prevent="create">
      <div>
        <div>
          <label>Beds</label>
          <input v-model.number="form.beds" type="text" />
          <div v-if="form.errors.beds">
            {{ form.errors.beds }}
          </div>
        </div>

        <div>
          <label>Baths</label>
          <input v-model.number="form.baths" type="text" />
          <div v-if="form.errors.baths">
            {{ form.errors.baths }}
          </div>
        </div>

        <div>
          <label>Area</label>
          <input v-model.number="form.area" type="text" />
          <div v-if="form.errors.area">
            {{ form.errors.area }}
          </div>
        </div>

        <div>
          <label>City</label>
          <input v-model="form.city" type="text" />
          <div v-if="form.errors.city">
            {{ form.errors.city }}
          </div>
        </div>

        <div>
          <label>Post Code</label>
          <input v-model="form.code" type="text" />
          <div v-if="form.errors.code">
            {{ form.errors.code }}
          </div>
        </div>

        <div>
          <label>Street</label>
          <input v-model="form.street_name" type="text" />
          <div v-if="form.errors.street_name">
            {{ form.errors.street_name }}
          </div>
        </div>

        <div>
          <label>Street Nr</label>
          <input v-model.number="form.street_number" type="text" />
          <div v-if="form.errors.street_number">
            {{ form.errors.street_number }}
          </div>
        </div>

        <div>
          <label>Price</label>
          <input v-model.number="form.price" type="text" />
          <div v-if="form.errors.price">
            {{ form.errors.price }}
          </div>
        </div>

        <div>
          <button type="submit">Create</button>
        </div>
      </div>
    </form>
  </template>

<script setup>
    import { useForm } from '@inertiajs/vue3'

    const form = useForm({
        beds: 0,
        baths: 0,
        area: 0,
        city: null,
        code: null,
        street_name: null,
        street_number: null,
        price: 0,
    })

    // const create = () => {
    //     form.post('/listing', {
    //         onSuccess: () => router.replace('/listing'),
    //         onError: (errors) => {
    //             form.errors = errors
    //         },
    //     })
    // }

    const create = () => {
        form.post(route("listing.store"), {
            onSuccess: () => router.replace('/listing'),
            onError: (errors) => {
                form.errors = errors
            },
        })
    }
</script>

<style scoped>
    label {
        margin-right: 2em;
    }

    div {
        padding: 2px
    }
</style>
