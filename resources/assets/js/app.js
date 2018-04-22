
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('painel', require('./components/Painel.vue'));
Vue.component('menu-topo', require('./components/MenuTopo.vue'));
Vue.component('caixa', require('./components/Caixa.vue'));
Vue.component('tabela', require('./components/Tabela.vue'));
Vue.component('botao', require('./components/Botao.vue'));

var app = new Vue({
    el: '#app',
    data: {
        categorias: [
            { id: 1, nome: 'Bicicleta', quantidade: 230, cor: 'orange',
              icone: 'ion-android-bicycle', url: '/bicicletas' },
            { id: 2, nome: 'Celular', quantidade: 580, cor: 'darkgrey',
              icone: 'ion-iphone', url: "#" },
            { id: 3, nome: 'Videogame', quantidade: 90, cor: 'purple', 
              icone: 'ion-ios-game-controller-b', url: "#" }
        ],
        bicicletas: [
            { id: 1, marca: 'Caloi', modelo: 'RSX-600', cor: 'Verde' }
        ],
        colunasTabelaBicicletas: ['#', 'Marca', 'Modelo', 'Cor']
    }
});
