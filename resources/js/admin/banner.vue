<template>
<div class="wrap">
    <img v-bind:src="props.banner">
</div>
</template>

<script lang="ts" setup>
const props = defineProps({
    banner: String
});
</script>

<script lang="ts">
</script>

<style lang="scss" scoped>
.wrap {
    text-align: center;
}
</style>
