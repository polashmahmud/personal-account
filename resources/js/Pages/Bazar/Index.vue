<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import {Head, router} from "@inertiajs/vue3";
import Pagination from "@/Components/Pagination.vue";

defineProps({
    bazars: {
        type: Object
    }
})
</script>

<template>
    <Head title="Bazars"/>

    <AdminLayout>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex items-center justify-between border-b border-gray-600 pb-6 mb-6">
                    <h1 class="text-2xl font-semibold">Bazar</h1>
                    <PrimaryButton @click.prevent="router.visit(route('bazars.create'))">Add Product</PrimaryButton>
                </div>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Increase
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr
                            v-for="bazar in bazars.data"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                        >
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-20 h-auto object-cover" :src="bazar.image" alt="">
                            </th>
                            <td class="px-6 py-4">
                                {{ bazar.title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ bazar.amount }}
                            </td>
                            <td class="px-6 py-4">
                                {{ bazar.increase }} {{ bazar.type }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="space-x-3">
                                    <button class="text-blue-500 hover:text-blue-600 text-sm">Edit</button>
                                    <button class="text-red-500 hover:text-red-600 text-sm">Delete</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mt-6 flex items-center justify-end">
                    <Pagination :pagination="bazars.meta" />
                </div>
            </div>
        </div>
    </AdminLayout>
</template>
