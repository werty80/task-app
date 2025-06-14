<script setup lang="ts">
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from '@/components/ui/table';
import Layout from '@/layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Layout>
        <Head title="Jobs" />

        <section class="container mx-auto px-6 py-10">
            <h1 class="text-3xl font-semibold text-white mb-6">Job Listings</h1>

            <div class="overflow-x-auto bg-gray-900 rounded-lg shadow-lg ring-1 ring-gray-700">
                <Table class="min-w-full divide-y divide-gray-700 text-white">
                    <TableHeader>
                        <TableRow class="bg-amber-700 text-white uppercase text-sm tracking-wider">
                            <TableHead class="px-6 py-3 text-left">Job Title</TableHead>
                            <TableHead class="px-6 py-3 text-left">Salary Range</TableHead>
                        </TableRow>
                    </TableHeader>

                    <TableBody>
                        <TableRow class="even:bg-gray-800 odd:bg-gray-900 hover:bg-gray-700 transition">
                            <TableCell class="px-6 py-4">Software Engineer</TableCell>
                            <TableCell class="px-6 py-4">$100,000 – $140,000</TableCell>
                        </TableRow>
                        <TableRow class="even:bg-gray-800 odd:bg-gray-900 hover:bg-gray-700 transition">
                            <TableCell class="px-6 py-4">Registered Nurse (RN)</TableCell>
                            <TableCell class="px-6 py-4">$75,000 – $95,000</TableCell>
                        </TableRow>
                        <TableRow class="even:bg-gray-800 odd:bg-gray-900 hover:bg-gray-700 transition">
                            <TableCell class="px-6 py-4">Data Analyst</TableCell>
                            <TableCell class="px-6 py-4">$70,000 – $90,000</TableCell>
                        </TableRow>
                        <TableRow class="even:bg-gray-800 odd:bg-gray-900 hover:bg-gray-700 transition">
                            <TableCell class="px-6 py-4">Construction Worker</TableCell>
                            <TableCell class="px-6 py-4">$40,000 – $60,000</TableCell>
                        </TableRow>
                        <TableRow class="even:bg-gray-800 odd:bg-gray-900 hover:bg-gray-700 transition">
                            <TableCell class="px-6 py-4">Web Developer</TableCell>
                            <TableCell class="px-6 py-4">$75,000 – $105,000</TableCell>
                        </TableRow>
                        <TableRow class="even:bg-gray-800 odd:bg-gray-900 hover:bg-gray-700 transition">
                            <TableCell class="px-6 py-4">Doctor (General Practitioner)</TableCell>
                            <TableCell class="px-6 py-4">$150,000 – $210,000</TableCell>
                        </TableRow>
                        <TableRow class="even:bg-gray-800 odd:bg-gray-900 hover:bg-gray-700 transition">
                            <TableCell class="px-6 py-4">Graphic Designer</TableCell>
                            <TableCell class="px-6 py-4">$45,000 – $70,000</TableCell>
                        </TableRow>
                        <TableRow class="even:bg-gray-800 odd:bg-gray-900 hover:bg-gray-700 transition">
                            <TableCell class="px-6 py-4">Digital Marketing Specialist</TableCell>
                            <TableCell class="px-6 py-4">$50,000 – $80,000</TableCell>
                        </TableRow>
                    </TableBody>
                </Table>
            </div>
        </section>
    </Layout>
</template>
