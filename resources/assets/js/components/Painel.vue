<template>
    <div :class="setCardOptions">
        <div class="card-header">{{ conteudo.titulo }}</div>

        <div class="card-body">
            {{ conteudo.texto }}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['conteudo', 'backgroundColor', 'fontColor'],
        computed:
        {
            setCardOptions: function() {
                return "card text-" + this.fontColor + " bg-" + this.backgroundColor + " mb-3"
            }
        }
    }
</script>

