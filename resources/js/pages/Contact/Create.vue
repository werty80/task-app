<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, router } from '@inertiajs/vue3'; // Import Inertia's router for posting data
import { ref } from 'vue';

const form = ref({
    name: '',
    email: '',
    phone: '',
    message: '',
});

const handleSubmit = () => {
    router.post('/contact', form.value, {
        onSuccess: () => {
            console.log('Form submitted successfully');
            form.value = {
                name: '',
                email: '',
                phone: '',
                message: '',
            };
        },
        onError: (errors) => {
            console.error('Error submitting the form:', errors);
        },
    });
};

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
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="flex flex-col gap-4">
                <form @submit.prevent="handleSubmit" class="flex flex-col gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium">Name</label>
                        <input
                            type="text"
                            id="name"
                            v-model="form.name"
                            placeholder="Your Name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                        />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium">Email</label>
                        <input
                            type="email"
                            id="email"
                            v-model="form.email"
                            placeholder="Your Email"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                        />
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium">Phone</label>
                        <input
                            type="text"
                            id="phone"
                            v-model="form.phone"
                            placeholder="Your Phone Number"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                        />
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium">Message</label>
                        <textarea
                            id="message"
                            v-model="form.message"
                            rows="5"
                            placeholder="Your Message"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"
                        ></textarea>
                    </div>

                    <button type="submit" class="mt-4 w-full rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">Send</button>
                    <a href="/contact" class="mt-4 w-full rounded-md bg-blue-600 px-4 py-2 text-center text-white hover:bg-blue-700"> Back </a>
                </form>
            </div>
        </div>
    </AppLayout>
</template>
