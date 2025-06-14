<script setup lang="ts">
import Layout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps<{ revenue: number }>();

const monthlyRevenue = ref([
    { month: 'January', revenue: 1000 },
    { month: 'February', revenue: 1500 },
    { month: 'March', revenue: 2000 },
    { month: 'April', revenue: 1700 },
    { month: 'May', revenue: 1300 },
    { month: 'June', revenue: 1850 },
    { month: 'July', revenue: 1500 },
    { month: 'August', revenue: 1200 },
    { month: 'September', revenue: 1000 },
    { month: 'October', revenue: 1500 },
    { month: 'November', revenue: 2000 },
    { month: 'December', revenue: 1700 },
]);
</script>

<template>
    <Layout>
        <Head title="Monthly Revenue" />

        <section class="bg-black px-4 py-6">
            <div class="overflow-x-auto rounded-lg shadow-lg bg-gray-800">
                <table class="min-w-full divide-y divide-gray-700">
                    <thead class="bg-gray-900">
                    <tr>
                        <th
                            scope="col"
                            class="px-6 py-4 text-left text-sm font-semibold text-gray-200 uppercase tracking-wider"
                        >
                            Month
                        </th>
                        <th
                            scope="col"
                            class="px-6 py-4 text-left text-sm font-semibold text-gray-200 uppercase tracking-wider"
                        >
                            Revenue ($)
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                    <tr
                        v-for="(data, index) in monthlyRevenue"
                        :key="index"
                        class="hover:bg-gray-700 transition"
                    >
                        <td class="px-6 py-4 text-sm text-gray-300 whitespace-nowrap">
                            {{ data.month }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-300 whitespace-nowrap">
                            {{ data.revenue.toLocaleString() }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </Layout>
</template>
