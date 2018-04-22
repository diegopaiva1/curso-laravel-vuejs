<template>
    <button type="button" :class="'btn btn-outline-' + modificadorBootstrap">{{ texto }}</button>
</template>

<script>
    export default {
        props: ['texto', 'modificadorBootstrap']
    }
</script>

<style>
    button {
        margin-bottom: 1em;
    }
</style>
