<script setup lang="ts">
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { router } from '@inertiajs/vue3'
let user = {
    create: route("admin.users.create")
}
function goTo(url: string | null) {
    if (url) {
        router.visit(url)
    }
}
</script>
<template>
    <AdminLayout>
        <section class="p-4 border-2 glass border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-5xl font-extrabold mb-8">Usuarios</h2>
            <article class="w-full">
                <div class="w-full">
                    <button type="button" class="py-2 px-8 rounded-xl mb-8 text-md bg-blue-700 text-white"
                        @click="goTo(user.create)">Invitar nuevo
                        usuario</button>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rango
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Escuela / Organización
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Puntos
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                3 Dan
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                4 Dan
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                1 Dan
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </section>
    </AdminLayout>
</template>