<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <AuthenticatedLayout>
        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-7 gap-6">
                <div class="col-span-2 space-y-3">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <Link :href="route('dashboard')" class="py-4 px-6 text-gray-900 dark:text-gray-100 block">Sidebar</Link>
                    </div>
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <Link :href="route('bazars.index')" class="py-4 px-6 text-gray-900 dark:text-gray-100 block">Bazars</Link>
                    </div>
                </div>
                <div class="col-span-5">
                    <slot />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
