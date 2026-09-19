<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import AddWebsiteForm from '@/components/AddWebsiteForm.vue';
import { dashboard } from '@/routes';


interface Website {
    id: number;
    name: string;
    url: string;
}

defineProps<{
    websites: Website[];
}>()

defineOptions({
    layout: {
        breadcrumbs: [
            {
                title: 'Dashboard',
                href: dashboard(),
            },
        ],
    },
});
</script>

<template>
    <Head title="Dashboard" />

    <div
        class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
    >

        <AddWebsiteForm />

        <div class="flex flex-col gap-3">
            <div
                v-for="website in websites" :key="website.id"
                class="rounded-xl border border-sidebar-border/70 p-4 dark:border-sidebar-border"
            >
                <p class="font-medium">{{ website.name }}</p>
                <p class="text-sm text-muted-foreground">{{ website.url }}</p>
            </div>

            <p v-if="websites.length === 0" class="text-sm text-muted-foreground">
                Aucun site web pour l'instant. Ajoute-en un ci-dessus.
            </p>
        </div>

    </div>
</template>
