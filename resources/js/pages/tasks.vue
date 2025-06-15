<template>
    <div class="min-h-screen flex flex-col bg-gray-950 text-white">
        <!-- Header -->
        <header class="bg-gray-900 shadow-md py-6 px-4">
            <h1 class="text-center text-3xl font-extrabold text-yellow-400 tracking-wide">📝 Pending Tasks</h1>
        </header>

        <main class="flex-1 px-4 py-8 max-w-4xl mx-auto w-full">
            <section>
                <div class="flex items-center justify-between mb-6 border-b border-gray-700 pb-2">
                    <h2 class="text-2xl font-semibold tracking-tight">Task List</h2>
                    <a
                        href="/tasks-create"
                        class="inline-flex items-center gap-2 rounded-md bg-blue-600 px-4 py-2 text-sm font-medium hover:bg-blue-700 transition-colors"
                    >
                        <Plus class="w-5 h-5" />
                        Create Task
                    </a>
                </div>

                <transition-group name="fade" tag="ul" class="space-y-4">
                    <li
                        v-for="task in tasks"
                        :key="task.id"
                        class="flex items-start justify-between bg-gray-800 px-5 py-4 rounded-xl shadow-md hover:shadow-lg transition-shadow group"
                    >
                        <div>
                            <p class="text-lg font-semibold text-white group-hover:text-yellow-300">{{ task.name }}</p>
                            <p class="text-sm text-gray-400 mt-1">{{ task.description }}</p>
                        </div>
                        <button
                            @click="markAsComplete(task.id)"
                            class="ml-4 shrink-0 rounded-lg bg-green-600 px-3 py-2 text-sm font-medium text-white hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-400 transition"
                            aria-label="Mark task as complete"
                        >
                            Mark Complete
                        </button>
                    </li>
                </transition-group>

                <p v-if="!tasks.length" class="text-center text-gray-500 mt-10 text-lg">🎉 All tasks are completed!</p>
            </section>

            <div class="mt-12 text-center">
                <Link
                    href="/dashboard"
                    class="inline-block rounded-lg bg-amber-700 px-6 py-2 text-white font-semibold hover:bg-amber-800 transition"
                >
                    ← Back to Dashboard
                </Link>
            </div>
        </main>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import { Plus } from 'lucide-vue-next'

const tasks = ref([
    { id: 1, name: 'Task 1', description: 'This is the first pending task.' },
    { id: 2, name: 'Task 2', description: 'This task needs to be completed soon.' },
    { id: 3, name: 'Task 3', description: 'Another important task.' },
    { id: 4, name: 'Task 4', description: 'This is a very important task.' },
    { id: 5, name: 'Task 5', description: 'This task is very important.' },
])

const markAsComplete = (id: number) => {
    tasks.value = tasks.value.filter(task => task.id !== id)
}
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
