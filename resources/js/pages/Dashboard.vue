<script setup lang="ts">
import { Breadcrumb } from '@/components/ui/breadcrumb';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import InfoCard from './InfoCard.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
///let {start, stop} = usePoll(2000, {
// only: []
// }, {
// autoStart: false
// });
</script>

<template>
    <Head title="Dashboard" />
    <Breadcrumb :items="breadcrumbs" />
    <AppLayout>
        <div class="mt-6 grid grid-cols-1 gap-6 md:grid-cols-3">
            <a href="/dashboard/employees" class="col-span-1 transform cursor-pointer transition-all duration-300 hover:-translate-y-1">
                <InfoCard title="Total Employees" content="2,340">
                    <template #icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-6 w-6 text-blue-600"
                        >
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path d="M17 20H7C4.243 20 2 17.757 2 15s2.243-5 5-5h10c2.757 0 5 2.243 5 5s-2.243 5-5 5z"></path>
                        </svg>
                    </template>
                </InfoCard>
            </a>
            <a href="/dashboard/revenue" class="col-span-1 transform cursor-pointer transition-all duration-300 hover:-translate-y-1">
                <InfoCard title="Monthly Revenue" content="$50,000">
                    <template #icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-6 w-6 text-green-600"
                        >
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M16 5a4 4 0 0 0-8 0v.5"></path>
                        </svg>
                    </template>
                    <template #footer> Compared to $10,984 last month</template>
                </InfoCard>
            </a>
            <a href="/dashboard/tasks" class="col-span-1 transform cursor-pointer transition-all duration-300 hover:-translate-y-1">
                <InfoCard title="Pending Tasks" content="77">
                    <template #icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-6 w-6 text-yellow-600"
                        >
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 3h6v4"></path>
                        </svg>
                    </template>
                </InfoCard>
            </a>
            <a href="/dashboard/About" class="col-span-1 transform cursor-pointer transition-all duration-300 hover:-translate-y-1">
                <InfoCard title="About us" content="information">
                    <template #icon>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-6 w-6 text-yellow-600"
                        >
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 3h6v4"></path>
                        </svg>
                    </template>
                </InfoCard>
            </a>
            <a href="/dashboard/Messages-Notifications" class="col-span-1 transform cursor-pointer transition-all duration-300 hover:-translate-y-1">
                <info-card title="Messages & Notifi" content="7,552">
                    <template #icon>
                        <div class="bg-white-100 flex h-14 w-14 items-center justify-center rounded-full">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="h-7 w-7 text-yellow-600"
                            >
                                <path d="M18 8A6 6 0 0 0 6 8c0 6-3 6-3 6h18s-3 0-3-6"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </div>
                    </template>
                </info-card>
            </a>
        </div>
    </AppLayout>
</template>
