<template>
    <div class="border border-gray-200 dark:border-gray-700 rounded-md p-4 shadow-sm dark:text-gray-300">
        <div class="text-gray-500 font-medium">
            <slot name="header"></slot>
        </div>
        <slot></slot>
    </div>
</template>
