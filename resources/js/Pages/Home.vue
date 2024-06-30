<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import SecondaryButton from "@/Components/SecondaryButton.vue";

defineProps({
    bazars: {
        type: Object
    }
})
</script>

<template>
    <Head title="Home"/>

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">বাজার: ১০ আইটেম</h2>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">মূল‍্য: ১০০ টাকা</h2>
            </div>

        </template>

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 p-4 gap-6">
                <div
                    v-for="bazar in bazars"
                    :key="bazar.id"
                    class="border border-gray-700 p-4 rounded"
                >
                    <div class="flex space-x-3 text-gray-400">
                        <div class="w-20 flex-none">
                            <img class="w-full h-auto object-cover rounded-lg"
                                 :src="bazar.image"
                                 alt="">
                        </div>
                        <div class="relative w-full">
                            <div class="absolute top-0 right-0 bg-gray-600 py-1 px-2 rounded-lg text-xs text-white">১ কেজি</div>
                            <h3 class="text-gray-200 font-semibold text-xl">{{ bazar.title }}</h3>
                            <p>মূল্য: {{ bazar.amount }} টাকা</p>
                            <div class="items-center space-x-3">
                                <SecondaryButton class="mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 4.5v15m7.5-7.5h-15"/>
                                    </svg>
                                </SecondaryButton>
                                <SecondaryButton class="mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14"/>
                                    </svg>
                                </SecondaryButton>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
