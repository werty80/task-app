<template>
    <div class="flex min-h-screen flex-col bg-black text-white">
        <!-- Header -->
        <header class="bg-gray-900 py-5 shadow-md">
            <h1 class="text-center text-3xl font-bold text-yellow-400">Pending Tasks</h1>
        </header>

        <!-- Main Content -->
        <main class="mx-auto w-full max-w-3xl flex-1 p-6">
            <section>
                <h2 class="mb-6 border-b border-gray-700 pb-2 text-2xl font-semibold">Pending Tasks List</h2>
                <div class="mt-5 px-3 mb-5">
                    <a href="/contact/create" class="inline-flex rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                        <Plus class="h-6 w-6" />
                        Create Task
                    </a>
                </div>
                <transition-group name="fade" tag="ul" v-if="tasks.length" class="space-y-4">
                    <li
                        v-for="task in tasks"
                        :key="task.id"
                        class="flex items-start justify-between rounded-lg bg-gray-800 p-4 shadow-md transition-shadow hover:shadow-lg"
                    >
                        <div>
                            <p class="text-lg font-bold">{{ task.name }}</p>
                            <p class="text-sm text-gray-400">{{ task.description }}</p>
                        </div>
                        <button
                            class="ml-4 rounded-md bg-green-600 px-4 py-2 text-sm font-semibold transition-colors hover:bg-green-500 active:bg-green-700"
                            @click="markAsComplete(task.id)"
                        >
                            Mark Complete
                        </button>
                    </li>
                </transition-group>

                <p v-else class="mt-6 text-center text-lg text-gray-400">No pending tasks available.</p>
            </section>

            <div class="mt-10 text-center">
                <Link
                    href="/dashboard"
                    class="rounded bg-amber-700 px-6 py-2 font-bold text-white shadow-md transition duration-200 hover:bg-amber-800"
                >
                    ← Go Back
                </Link>
            </div>
        </main>
    </div>
</template>

<script lang="ts">
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { Plus } from 'lucide-vue-next';

export default {
    name: 'PendingTasks',
    components: { Plus, Link },
    setup() {
        const tasks = ref([
            { id: 1, name: 'Task 1', description: 'This is the first pending task.' },
            { id: 2, name: 'Task 2', description: 'This task needs to be completed soon.' },
            { id: 3, name: 'Task 3', description: 'Another important task.' },
            { id: 4, name: 'Task 4', description: 'This is a very important task.' },
            { id: 5, name: 'Task 5', description: 'This task is very important.' },
        ]);

        const markAsComplete = (id: number) => {
            tasks.value = tasks.value.filter((task) => task.id !== id);
        };

        return {
            tasks,
            markAsComplete,
        };
    },
};
</script>

<style scoped></style>
