<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: {
        type: String,
        required: true,
    },
    contentClasses: {
        type: String,
        default: 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 transition duration-150 ease-in-out hover:bg-gray-100 focus:bg-gray-100 focus:outline-none',
    },
});
</script>

<template>
    <Link :href="href" :class="contentClasses">
    <slot />
    </Link>
</template>
