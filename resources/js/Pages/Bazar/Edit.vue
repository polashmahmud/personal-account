<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head, router, useForm} from "@inertiajs/vue3";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const props = defineProps({
    bazar: {
        type: Object
    }
})

const form = useForm({
    _method: 'patch',
    title: props.bazar.title,
    amount: props.bazar.amount ?? '',
    increase: props.bazar.increase ?? '',
    type: props.bazar.type ?? 'kg',
    image: '',
});

const submit = () => {
    form.patch(route('bazars.update', props.bazar), {
        preserveScroll: true
    });
}
</script>

<template>
    <Head title="Bazar Edit" />

    <AdminLayout>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex items-center justify-between border-b border-gray-600 pb-6 mb-6">
                    <h1 class="text-2xl font-semibold">Update Bazar Item</h1>
                    <SecondaryButton @click.prevent="router.visit(route('bazars.index'))">Back</SecondaryButton>
                </div>

                <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="image" value="Image" />

                        <img v-if="bazar.image" class="w-28 mb-3" :src="bazar.image" alt="">

                        <input type="file" @input="form.image = $event.target.files[0]" />

                        <InputError class="mt-2" :message="form.errors.image" />
                    </div>
                    <div class="mt-4">
                        <InputLabel for="title" value="Title" />

                        <TextInput
                            id="title"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.title"
                        />

                        <InputError class="mt-2" :message="form.errors.title" />
                    </div>
                    <div class="mt-4">
                        <InputLabel for="amount" value="Amount" />

                        <TextInput
                            id="amount"
                            type="number"
                            class="mt-1 block w-full"
                            v-model="form.amount"
                        />

                        <InputError class="mt-2" :message="form.errors.amount" />
                    </div>
                    <div class="mt-4">
                        <InputLabel for="increase" value="Increase" />

                        <TextInput
                            id="increase"
                            type="number"
                            class="mt-1 block w-full"
                            v-model="form.increase"
                        />

                        <InputError class="mt-2" :message="form.errors.increase" />
                    </div>
                    <div class="mt-4">
                        <InputLabel for="type" value="Type" />

                        <select name="type" v-model="form.type" id="type" class="border-gray-300 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            <option value="kg">kg</option>
                            <option value="piece">piece</option>
                            <option value="litter">litter</option>
                            <option value="gram">gram</option>
                            <option value="packet">packet</option>
                        </select>

                        <InputError class="mt-2" :message="form.errors.type" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            {{ form.processing ? 'Saving...' : 'Save' }}
                        </PrimaryButton>
                    </div>
                </form>

            </div>
        </div>
    </AdminLayout>
</template>
