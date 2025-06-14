<template>
    <div class="notification-page bg-black min-h-screen p-6 text-gray-200">
        <!-- Header Section -->
        <div class="header mb-6 flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-200">
                Messages & Notifications
            </h1>

            <button
                class="mark-all-read bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
                @click="markAllAsRead"
            >
                Mark All as Read
            </button>
        </div>

        <!-- Search and Filters Section -->
        <div class="filters flex items-center justify-between mb-4">
            <input
                type="text"
                v-model="searchQuery"
                placeholder="Search Notifications..."
                class="search-input w-1/3 border border-gray-700 bg-gray-800 text-gray-200 rounded px-4 py-2 placeholder-gray-400"
            />

            <select
                v-model="selectedFilter"
                class="filter-select border border-gray-700 bg-gray-800 text-gray-200 rounded px-4 py-2"
            >
                <option value="all">All</option>
                <option value="unread">Unread</option>
                <option value="read">Read</option>
                <option value="priority">Priority</option>
            </select>
        </div>

        <!-- Notifications Section -->
        <div class="notifications grid grid-cols-1 gap-4">
            <div
                v-for="notification in filteredNotifications"
                :key="notification.id"
                class="notification-card p-4 bg-gray-800 border border-gray-700 rounded shadow-md flex justify-between items-center"
                :class="{ 'border-blue-500': !notification.read }"
            >
                <div class="content">
                    <h3 class="font-semibold text-lg text-gray-200">
                        {{ notification.title }}
                    </h3>
                    <p class="text-gray-400 text-sm">
                        {{ notification.message }}
                    </p>
                    <p class="text-gray-500 text-xs">
                        {{ notification.timestamp }}
                    </p>
                </div>
                <div class="actions flex gap-4">
                    <button
                        class="mark-read-btn bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600"
                        @click="markAsRead(notification.id)"
                    >
                        Mark as Read
                    </button>
                    <button
                        class="delete-btn bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
                        @click="deleteNotification(notification.id)"
                    >
                        Delete
                    </button>
                </div>
            </div>
        </div>
        <div class=" mt-4">
            <a href="/dashboard" class=" bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Return
            </a>
        </div>
    </div>
</template>

<script lang="ts">
import { ref, computed } from 'vue';

export default {
    setup() {
        const notifications = ref([
            {
                id: 1,
                title: 'John Doe sent you a message',
                message: 'Hey! How’s everything going?',
                timestamp: 'Today, 9:45 AM',
                read: false,
            },
            {
                id: 2,
                title: 'System Update',
                message: 'A new version update will be available at midnight.',
                timestamp: 'Yesterday, 8:00 PM',
                read: true,
            },
            {
                id: 3,
                title: 'Mom sent you a message',
                message: 'Dinner is ready.',
                timestamp: 'Today, 6:45 PM',
                read: true,
            },
            {
                id: 4,
                title: 'Pubg Update',
                message: 'A new version update will be available at midnight.',
                timestamp: 'Yesterday, 10:30 PM',
                read: true,
            },
            // Add more notifications as needed
        ]);

        const searchQuery = ref('');
        const selectedFilter = ref('all');

        const filteredNotifications = computed(() => {
            return notifications.value.filter((notification) => {
                const matchesFilter =
                    selectedFilter.value === 'all' ||
                    (selectedFilter.value === 'unread' && !notification.read) ||
                    (selectedFilter.value === 'read' && notification.read);
                const matchesSearch = notification.title
                    .toLowerCase()
                    .includes(searchQuery.value.toLowerCase());

                return matchesFilter && matchesSearch;
            });
        });

        const markAllAsRead = () => {
            notifications.value.forEach((notification) => {
                notification.read = true;
            });
        };

        const markAsRead = (id: number) => {
            const notification = notifications.value.find((n) => n.id === id);
            if (notification) notification.read = true;
        };

        const deleteNotification = (id: number) => {
            notifications.value = notifications.value.filter((n) => n.id !== id);
        };

        return {
            notifications,
            searchQuery,
            selectedFilter,
            filteredNotifications,
            markAllAsRead,
            markAsRead,
            deleteNotification,
        };
    },
};
</script>

<style scoped>
.notification-card {
    transition: all 0.3s ease;
}
.notification-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}
</style>
