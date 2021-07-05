Vue.config.devtools = true;
var app = new Vue({
    el: "#app",
    data: {
        totale: 0,

    },
    created(){
        this.totale = JSON.parse(sessionStorage.getItem('totprice'));
        console.log(this.totale);
        console.log("ciao");
    },
    methods: {
        clear: function (){
            window.localStorage.clear();
        }
    }

});
