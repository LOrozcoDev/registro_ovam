<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null)

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
    if (input.value.hasAttribute('readonly')) {
        console.log("solo lectura");
        input.value.classList.add("bg-gray-200", "text-black", "border", "border-gray-300", "text-gray-900", "rounded-lg", "focus:ring-blue-500", "focus:border-blue-500", "cursor-not-allowed", "dark:bg-gray-700", "dark:border-gray-600", "dark:placeholder-gray-400", "dark:text-gray-400", "dark:focus:ring-blue-500", "dark:focus:border-blue-500")
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" v-model="model"
        ref="input" />
</template>
