<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
const form = useForm({
    email: {
        required: true,
        email: true,
    },
});
</script>
<template>
    <AdminLayout>
        <section class="p-4 border-2 glass border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-5xl font-extrabold mb-8">Nuevo Usuario: Enviar enlace de registro</h2>
            <form @submit.prevent="form.post(route('user.invite'))">
                <div class="grid grid-cols-2">
                    <div class="w-3/4">
                        <InputLabel for="firstname" value="Name" />

                        <TextInput id="firstname" type="text" class="mt-1 block w-full" v-model="form.firstname"
                            required autofocus autocomplete="firstname" />

                        <InputError class="mt-2" :message="form.errors.firstname" />
                    </div>
                    <div class="w-1/4">
                        <PrimaryButton :disabled="form.processing">Invite</PrimaryButton>
                    </div>
                </div>
            </form>
        </section>
    </AdminLayout>
</template>