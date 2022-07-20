<template>
<ul v-for="dataOut in sidemenuJson">
    <li>{{ dataOut.title }}</li>
    <ul v-for="dataIn in dataOut.subMenu">
        <li>{{ dataIn.title }}</li>
    </ul>
</ul>
</template>

<script lang="ts" setup>
const props = defineProps({
    sidemenu: String
});
const sidemenuJson = JSON.parse(props.sidemenu!);
console.log(props.sidemenu);
</script>

<script lang="ts">
</script>

<style lang="scss" scoped>
</style>
