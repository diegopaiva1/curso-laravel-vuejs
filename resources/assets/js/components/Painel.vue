<template>
    <div :class=" 'card text-' + definirCorFonte">
        <div class="card-header" :style="definirCorFundo('card-header')">{{ titulo }}</div>

        <div class="card-body" :style="definirCorFundo('card-body')">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['titulo', 'headerBackgroundColor', 'bodyBackgroundColor', 'fontColor'],
        computed: {
            definirCorFonte: function() {
                return this.fontColor;
            }
        },
        methods:
        {
            definirCorFundo(divClassName) {
                if(divClassName === 'card-header') {
                    return "background-color: " + this.headerBackgroundColor;
                }
                else if(divClassName === 'card-body') {
                    return "background-color: " + this.bodyBackgroundColor;
                }
                else {
                    return "background-color: rgba(0, 0, 0, 0.03)";
                }
            }
        }
    }
</script>

<style>
    .card-header {
        font-weight: bold;
    }
</style>
