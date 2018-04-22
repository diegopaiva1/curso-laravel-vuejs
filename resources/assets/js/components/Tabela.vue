<template>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" v-for="coluna in colunas" :key="coluna.id">{{ coluna }}</th>           
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>                                                    
        </thead>
        <tbody>
            <tr v-for="bicicleta in bicicletas" :key="bicicleta.id">
                <td class = "col-data" v-for="property in bicicleta" :key="property.key">
                    {{ property }} 
                </td>
                <td class="col-data special-actions"> <i class="ion-edit"></i> </td>
                <td class="col-data special-actions"> <i class="ion-trash-b"></i> </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: ['colunas', 'bicicletas']
    }
</script>

<style>

.table {
    background-color: #fff !important;
    color: #000;
}

.table > thead > tr > th {
    text-align: center;
}

.special-actions {
    font-size: 170%;
    width: 10%;
}

#id {
    width: 5%;
}

.col-data {
    text-align: center;
}

</style>

