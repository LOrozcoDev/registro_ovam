<script lang='ts' setup>
import { Head } from '@inertiajs/vue3';

import LayoutTopBar from '@/Components/Admin/LayoutTopBar.vue';
import OffCanvasNav from '@/Components/Admin/OffCanvasNav.vue';
</script>
<template>

    <Head title="Admin Dashboard" />
    <LayoutTopBar />
    <OffCanvasNav />
    <main
        class="p-4 sm:ml-64 min-h-screen dark:bg-gray-300 bg-[url('storage/res/martials.png')] bg-fixed bg-no-repeat bg-bottom-right backdrop-opacity-10">
        <slot />
    </main>
</template>

<style scoped></style>
