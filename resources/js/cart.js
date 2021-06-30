Vue.config.devtools = true;
var app = new Vue({
    el: "#vue",
    data: {
        categories: [],
        restaurants: [],
        categoryIndex: '',
        dishes: [],
        carrello: [],
        id: '',
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
    created() {
        let datiDB = JSON.parse(localStorage.getItem('dish-vue'));
        if(datiDB === null) {
            this.carrello = [];
        } else {
            this.carrello = datiDB;
        }
        this.id = document.getElementById('restaurantId').value;
        // console.log(this.id);
        axios.get('http://127.0.0.1:8000/api/dishesFilter', {
            params: {
                id: this.id,
            }
        }).then(response => {
            // handle success
            response.data.forEach((dish) => {
                dish.showMe = false;
            }); 
            this.dishes = response.data;          
            console.log(response.data);        
            })
            .catch(error => {
            // handle error
            console.log(error);
            });          
        },

        computed: {
            carrelloTotale() {
                let somma = 0;
                for(let key in this.carrello) {
                    somma = somma + (this.carrello[key].dish.price * this.carrello[key].quantita);
                }
                return somma.toFixed(2)
            },
            quantitaTotale() {
                let quantita = 0;
                for(let key in this.carrello) {
                    quantita = quantita + (this.carrello[key].quantita);
                }
                return quantita 
            }
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

        aggiungereCarrello(dish) {
            let elementoEsistente;
            let esistente = this.carrello.filter( (item, index) => {
                if (item.dish.id == Number(dish.id)) {
                    elementoEsistente = index;
                return true;
                } else {
                return false;
                }
            });
            if(esistente.length) {
                this.carrello[elementoEsistente].quantita++
            } else {
                this.carrello.push({dish: dish, quantita: 1})
            }
            localStorage.setItem('dish-vue', JSON.stringify(this.carrello));
        },
        rimuovereCarrello(dish){

            this.carrello.splice(dish, 1)

            localStorage.setItem('dish-vue', JSON.stringify(this.carrello));
        }
    },
});