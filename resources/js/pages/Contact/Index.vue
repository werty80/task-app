<script setup lang="ts">
import { Table, TableBody, TableCaption, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { Plus } from 'lucide-vue-next';

defineProps({
    contacts: Object,
});

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Contact',
        href: '/contact',
    },
];

</script>

<template>
    <Head title="Contact" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="mt-5 px-3">
            <a href="/contact/create" class="inline-flex rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                <Plus class="h-6 w-6" />
                Create Contact
            </a>
        </div>
        <div class="mt-5 px-3">
            <Table>
                <TableCaption>A list of your recent Contacts.</TableCaption>
                <TableHeader>
                    <TableRow>
                        <TableHead class="w-[100px]">Name</TableHead>
                        <TableHead>Email</TableHead>
                        <TableHead>Phone</TableHead>
                        <TableHead>Message</TableHead>
                        <TableHead>Actions</TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    <TableRow v-for="contact in contacts?.data" :key="contact.id">
                        <TableCell class="font-medium">
                            {{ contact.name }}
                        </TableCell>
                        <TableCell>
                            {{ contact.email }}
                        </TableCell>
                        <TableCell>
                            {{ contact.phone }}
                        </TableCell>
                        <TableCell>
                            {{ contact.message }}
                        </TableCell>
                        <TableCell class="text-right">
                            <a :href="`/contact/${contact.id}/edit`" class="text-blue-600 hover:underline">
                                Edit
                            </a>
                        </TableCell>
                    </TableRow>
                </TableBody>
            </Table>
        </div>
    </AppLayout>
</template>
