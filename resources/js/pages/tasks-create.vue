<template>
    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-xl font-bold mb-4">Create a New Task</h1>

        <form @submit.prevent="submit">
            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Title</label>
                <input
                    v-model="form.title"
                    type="text"
                    class="w-full border rounded px-3 py-2"
                />
                <p v-if="form.errors.title" class="text-red-500 text-sm">{{ form.errors.title }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Description</label>
                <textarea
                    v-model="form.description"
                    class="w-full border rounded px-3 py-2"
                />
                <p v-if="form.errors.description" class="text-red-500 text-sm">{{ form.errors.description }}</p>
            </div>

            <button
                type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
                :disabled="form.processing"
            >
                Create Task
            </button>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    title: '',
    description: ''
})

function submit() {
    form.post(route('tasks.store'))
}
</script>
