<template>
  <form @submit.prevent="submit" class="flex flex-col gap-4 max-w-md">
    <div class="grid gap-2">
        <Label for="name">Nom du site</Label>
        <Input id="name" v-model="form.name" placeholder="Mon site" />
        <p v-if="form.errors.name" class="text-sm text-red-500">
            {{ form.errors.name }}
        </p>
    </div>
    <div class="grid gap-2">
        <Label for="url">URL</Label>
        <Input
            id="url"
            v-model="form.url"
            placeholder="https://monsite.com"
            />
        <p v-if="form.errors.url" class="text-sm text-red-500">
            {{ form.errors.url }}
        </p>
    </div>

    <Button type="submit" :disabled="form.processing">Ajouter</Button>
  </form>
</template>

<script lang="ts" setup>
import { useForm } from '@inertiajs/vue3';

import { store } from '@/actions/App/Http/Controllers/WebsiteController.js';
import Button from './ui/button/Button.vue';
import Input from './ui/input/Input.vue';
import Label from './ui/label/Label.vue';



const form = useForm({
    name: '',
    url: '',
})

function submit() {
    form.post(store().url, {
        onSuccess: () => form.reset(),
    })
}
</script>
