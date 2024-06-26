<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {router} from "@inertiajs/vue3";
import SecondaryButton from "@/Components/SecondaryButton.vue";
</script>

<template>
    <AdminLayout>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex items-center justify-between border-b border-gray-600 pb-6 mb-6">
                    <h1 class="text-2xl font-semibold">Create Bazar Item</h1>
                    <SecondaryButton @click.prevent="router.visit(route('bazars.index'))">Back</SecondaryButton>
                </div>

            </div>
        </div>
    </AdminLayout>
</template>
