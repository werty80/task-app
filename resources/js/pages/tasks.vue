<template>
    <div class="flex flex-col min-h-screen bg-black text-white">
        <!-- Header -->
        <header class="bg-gray-900 py-5 shadow-md">
            <h1 class="text-3xl font-bold text-yellow-400 text-center">
                Pending Tasks
            </h1>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-6 max-w-3xl mx-auto w-full">
            <section>
                <h2 class="text-2xl font-semibold mb-6 border-b border-gray-700 pb-2">
                    Pending Tasks List
                </h2>

                <transition-group name="fade" tag="ul" v-if="tasks.length" class="space-y-4">
                    <li
                        v-for="task in tasks"
                        :key="task.id"
                        class="flex items-start justify-between bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow"
                    >
                        <div>
                            <p class="font-bold text-lg">{{ task.name }}</p>
                            <p class="text-sm text-gray-400">{{ task.description }}</p>
                        </div>
                        <button
                            class="ml-4 bg-green-600 hover:bg-green-500 active:bg-green-700 transition-colors px-4 py-2 rounded-md text-sm font-semibold"
                            @click="markAsComplete(task.id)"
                        >
                            Mark Complete
                        </button>
                    </li>
                </transition-group>

                <p v-else class="text-gray-400 text-center mt-6 text-lg">
                    No pending tasks available.
                </p>
            </section>

            <div class="mt-10 text-center">
                <a
                    href="/dashboard"
                    class="inline-block bg-blue-600 hover:bg-blue-500 active:bg-blue-700 text-white px-6 py-2 rounded-md transition-all"
                >
                    Return to Dashboard
                </a>
            </div>
        </main>
    </div>
</template>

<script lang="ts">
import { ref } from 'vue';

export default {
    name: 'PendingTasks',
    setup() {
        const tasks = ref([
            { id: 1, name: 'Task 1', description: 'This is the first pending task.' },
            { id: 2, name: 'Task 2', description: 'This task needs to be completed soon.' },
            { id: 3, name: 'Task 3', description: 'Another important task.' },
            { id: 4, name: 'Task 4', description: 'This is a very important task.' },
            { id: 5, name: 'Task 5', description: 'This task is very important.' },
        ]);

        const markAsComplete = (id: number) => {
            tasks.value = tasks.value.filter(task => task.id !== id);
        };

        return {
            tasks,
            markAsComplete,
        };
    },
};
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: all 0.3s ease;
}
.fade-enter-from, .fade-leave-to {
    opacity: 0;
    transform: translateY(10px);
}
</style>
