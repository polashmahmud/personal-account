<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {router} from "@inertiajs/vue3";
</script>

<template>
    <AdminLayout>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex items-center justify-between border-b border-gray-600 pb-6 mb-6">
                    <h1 class="text-2xl font-semibold">Bazar</h1>
                    <PrimaryButton @click.prevent="router.visit(route('bazars.create'))">Add Product</PrimaryButton>
                </div>

            </div>
        </div>
    </AdminLayout>
</template>
