<template>
    <div :class="setCardOptions">
        <div class="card-header">{{ titulo }}</div>

        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['titulo', 'backgroundColor', 'fontColor'],
        computed:
        {
            setCardOptions: function() {
                return "card text-" + this.fontColor + " bg-" + this.backgroundColor + " mb-3"
            }
        }
    }
</script>

