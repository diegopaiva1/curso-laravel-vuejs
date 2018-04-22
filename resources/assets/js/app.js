
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

var app = new Vue({
    el: '#app',
    data: {
        conteudos: [
            { id: 1, titulo: 'Conteúdo 1', texto: 'Este é o primeiro conteúdo' },
            { id: 2, titulo: 'Conteúdo 2', texto: 'Este é o segundo conteúdo' },
            { id: 3, titulo: 'Conteúdo 3', texto: 'Este é o terceiro conteúdo' }
        ],
        produtos: [
            { id: 1, nome: 'Bicicleta', quantidade: 230, cor: 'orange',
              icone: 'ion-android-bicycle', url: '#' },
            { id: 2, nome: 'Celular', quantidade: 580, cor: 'darkgrey',
              icone: 'ion-iphone', url: "#" },
            { id: 3, nome: 'Videogame', quantidade: 90, cor: 'purple', 
              icone: 'ion-ios-game-controller-b', url: "#" }
        ]
        
    }
});
