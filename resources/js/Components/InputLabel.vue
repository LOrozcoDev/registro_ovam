<script setup>
defineProps({
    value: {
        type: String,
    },
    color: {
        type: String,
    }
});
</script>

<template>
    <label v-bind:style="{color: color ? color : '#ccc'}" class="block text-sm font-medium">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
