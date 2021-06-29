const { forEach } = require("lodash");

Vue.config.devtools = true;
var app = new Vue({
    el: "#root",
    data: {
        categories: [],
        restaurants: [],
        categoryIndex: '',
        foods: [],
        quantity: 1,
        carrello:[],
        array:[],

    },
    computed: {
        carrelloTotale() {
            let somma=0;
            for(var key in this.carrello) {
                somma +=(this.carrello[key].price * this.carrello[key].quantity);
            }
            console.log(somma);
            return somma.toFixed(2)
        },
    },
    mounted: function (){
        /* chiamata categorie ristoranti */
        axios.get('http://localhost:8000/api/categories').then((response)=> {
            this.categories = response.data.data;
            /*console.log(this.categories) */
        });
        /* chiamata per i ristoranti */
        axios.get('http://localhost:8000/api/restaurants').then((response)=> {
            this.restaurants = response.data.data;
            /* console.log(this.restaurants); */
        }); 
    },
    

    methods: {
        //al click vediamo tutti i ristoranti della categoria selezionata
        restaurantByCategory: function restaurantByCategory(category) {
    
            this.categoryIndex = category;
            axios.get("http://localhost:8000/api/restaurants/".concat(this.categoryIndex), {}).then((response) => {
                this.restaurants = response.data.data;
                /* console.log(response.data.data); */
            });
        },
        //al click vediamo tutti i ristoranti
        allRestaurants: function allRestaurants() {
            this.categoryIndex = '';
            axios.get('http://localhost:8000/api/restaurants').then((response)=> {
                this.restaurants = response.data.data;
                /* console.log(this.restaurants); */
            }); 
        },
        add_cart: function (food) {

                let foods = food;
                foods.quantity = this.quantity;
               
                this.carrello.push(foods);
                localStorage.carrello = JSON.stringify(this.carrello);

                console.log(this.carrello);
                this.carrello[this.carrello.indexOf(foods)].quantity += 1;

                
                this.carrello = JSON.parse(localStorage.carrello);
                // this.carrello.forEach(element => {
                //     this.array.push(element);
                // });
                // console.log(this.array);
       },
       aggiungi: function(){
        this.carrello.forEach(item => {
            item.quantity ++;
            console.log(item);
        });
        console.log(this.carrello);

        // this.carrello[this.carrello.indexOf(quantita)].quantity += 1;

        },
        meno: function(){
            this.carrello.forEach(item => {
                item.quantity --;
                console.log(item);
            });
            console.log(this.carrello);
    
            // this.carrello[this.carrello.indexOf(quantita)].quantity += 1;
    
            }
     
    },
});
