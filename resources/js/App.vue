<script setup>
    import BaseHeader from '@/components/BaseHeader.vue'
    import BaseFooter from '@/components/BaseFooter.vue'
</script>

<template>
    <header>
        <BaseHeader />
    </header>

    <router-view v-slot="{ Component, route }">
        <div :key="route.name">
            <Component :is="Component" />
        </div>
    </router-view>

    <footer>
        <BaseFooter />
    </footer>
</template>