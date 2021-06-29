Vue.config.devtools = true;
var app = new Vue({
    el: "#root",
    data: {
        categories: [],
        restaurants: [],
        categoryIndex: '',
        foods: [],

        carrello:[],
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
    created(){
        console.log(JSON.parse(localStorage.getItem('session')));
        var actualCart = JSON.parse(localStorage.getItem('session'));
        this.carrello = actualCart;
        localStorage.clear();
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
            var this_2 = this;
            var cart_food = food;
            console.log(food);

           
            // if (!this.carrello.includes(this.cart_food)) {
                this.carrello.push(cart_food).quantity; 
                console.log(this.carrello);
;
            // } 
            this.carrello[this.carrello.indexOf(cart_food)].quantity += 1;
            console.log(this.carrello[this.carrello.cart_food].quantity);
          },
    },
});
