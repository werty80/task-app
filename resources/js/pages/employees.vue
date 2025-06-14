<template>
    <div class="flex flex-col min-h-screen bg-black text-white">
        <!-- Header -->
        <header class="bg-gray-900 py-6 shadow-md">
            <h1 class="text-4xl font-extrabold text-yellow-400 text-center tracking-wide">
                Employees Management
            </h1>
        </header>

        <!-- Main Content -->
        <main class="flex-1 container mx-auto px-6 py-10">
            <section class="bg-gray-900 rounded-xl shadow-lg p-6 ring-1 ring-gray-800">
                <!-- Top Bar -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                    <h2 class="text-2xl font-semibold text-yellow-400">Employee Directory</h2>
                    <a
                        href="/dashboard"
                        class="text-yellow-400 text-sm hover:text-yellow-300 hover:underline transition"
                    >
                        ← Back to Dashboard
                    </a>
                </div>

                <!-- Table Container -->
                <div class="overflow-x-auto rounded-lg border border-gray-800">
                    <table class="w-full text-sm text-left">
                        <thead class="bg-gray-800 text-gray-300 uppercase tracking-wider text-xs">
                        <tr>
                            <th class="px-6 py-4">#</th>
                            <th class="px-6 py-4">Name</th>
                            <th class="px-6 py-4">Position</th>
                            <th class="px-6 py-4">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr
                            v-for="(employee, index) in employees"
                            :key="employee.id"
                            class="border-t border-gray-700 hover:bg-gray-800 transition-colors"
                        >
                            <td class="px-6 py-4">{{ index + 1 }}</td>
                            <td class="px-6 py-4 font-medium text-white">{{ employee.name }}</td>
                            <td class="px-6 py-4 text-gray-400">{{ employee.position }}</td>
                            <td class="px-6 py-4">
                                <button
                                    class="text-yellow-400 hover:text-yellow-300 hover:underline transition focus:outline-none"
                                    @click.prevent
                                >
                                    Edit
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 py-6 border-t border-gray-800 text-center">
            <p class="text-sm text-gray-500">
                &copy; {{ new Date().getFullYear() }} Employees Management — All rights reserved.
            </p>
        </footer>
    </div>
</template>

<script setup>
const employees = [
    { id: 1, name: 'John Doe', position: 'Chief Executive Officer' },
    { id: 2, name: 'Jane Smith', position: 'Chief Operating Officer' },
    { id: 3, name: 'Liam Johnson', position: 'Office Manager' },
    { id: 4, name: 'Sophia Martinez', position: 'Receptionist' },
];
</script>

<style scoped>
/* Optional: Add fade-in effect or more animations if needed */
</style>
