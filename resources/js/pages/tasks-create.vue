<template>
    <div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-2xl shadow space-y-6">
        <h1 class="text-2xl font-bold text-gray-800">📝 Create a New Task</h1>

        <form @submit.prevent="submit" class="space-y-4">
            <!-- Title -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Title</label>
                <input
                    v-model="form.title"
                    type="text"
                    class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring focus:ring-blue-200"
                    placeholder="Enter task title"
                />
                <p v-if="form.errors.title" class="text-red-600 text-sm mt-1">{{ form.errors.title }}</p>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea
                    v-model="form.description"
                    class="mt-1 block w-full px-3 py-2 border rounded-lg shadow-sm focus:ring focus:ring-blue-200"
                    rows="4"
                    placeholder="Optional description..."
                ></textarea>
                <p v-if="form.errors.description" class="text-red-600 text-sm mt-1">{{ form.errors.description }}</p>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"
                    :disabled="form.processing"
                >
                    {{ form.processing ? 'Creating...' : 'Create Task' }}
                </button>
            </div>
        </form>
    </div>
</template>

<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    title: '',
    description: '',
})

const submit = () => {
    form.post(route('tasks.store'))
}
</script>
