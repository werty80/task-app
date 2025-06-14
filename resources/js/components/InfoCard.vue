<template>
    <div
        class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 flex flex-col items-start space-y-3 hover:shadow-xl transition-shadow duration-300"
    >
        <!-- Icon/Illustration -->
        <div v-if="icon" class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded-full">
            <slot name="icon">
                <!-- Fallback icon -->
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="w-6 h-6 text-gray-500"
                >
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                </svg>
            </slot>
        </div>

        <!-- Header Title -->
        <h3 class="text-lg font-semibold text-gray-800">{{ title }}</h3>

        <!-- Body Content -->
        <p class="text-gray-600 text-sm">{{ content }}</p>

        <!-- Footer Information -->
        <div v-if="footer" class="mt-3 text-gray-500 text-xs">
            <slot name="footer"></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            required: true,
        },
        content: {
            type: String,
            required: true,
        },
        icon: {
            type: Boolean,
            default: true,
        },
        footer: {
            type: Boolean,
            default: false,
        },
    },
};
</script>

<style scoped>
/* Add or override styles if needed */
</style>
