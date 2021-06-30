Vue.config.devtools = true;
var app = new Vue({
    el: "#root",
    data: {
        categories: [],
        restaurants: [],
        categoryIndex: '',
        quantity: 1,
        carrello:[],
        array:[],
        soldatino: false,
        
    },
    computed: {
        carrelloTotale() {
            let somma=0;
            for(var key in this.carrello) {
                somma +=(this.carrello[key].price * this.carrello[key].quantity);
            }
            // console.log(somma);
            return somma.toFixed(2)
        },
    },
    mounted: function (){
        if(localStorage.carrello){
            this.carrello = JSON.parse(localStorage.carrello);
        }
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
        
        // console.log(this.carrello);
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
        addCart: function(food) {
            let foods = food; 
            if(this.carrello.length == 0 ){
                foods.quantity = this.quantity;
                
                this.carrello.push(foods);
                localStorage.carrello = JSON.stringify(this.carrello);

            }else{
                let flag = false;
                this.carrello.forEach(element => {
                    if(element.id == food.id){
                        element.quantity++;
                         flag = true;
                         localStorage.carrello = JSON.stringify(this.carrello);

                    }
                });
                
                if(!flag){
                    this.carrello.push(foods);
                }
            }
            localStorage.carrello = JSON.stringify(this.carrello);
        },
        aggiungi: function(id1){
            
            this.carrello.forEach(item => {
                if(item.id === id1){
                    item.quantity ++;
                    // console.log(item);
                    localStorage.carrello = JSON.stringify(this.carrello);
                }             
            });        
        },   
        meno: function(id1){
            this.carrello.forEach((item, index) => {
                if(item.id === id1){
                    if (item.quantity > 1) {
                        item.quantity -- ;
                        localStorage.carrello = JSON.stringify(this.carrello); 
                    }else{
                        console.log("ciao sono dentro if CAZZO");
                            this.carrello.splice(index, 1);
                            localStorage.removeItem('carrello') ;
                            this.soldatino = true;
                    }
                    console.log(item.quantity);
                }                        
            });
            if (!this.soldatino) {
                localStorage.carrello = JSON.stringify(this.carrello);
            }

            if(this.carrello.length === 0){
                window.localStorage.clear();
                console.log("bernini <3");
            } 
            console.log(this.carrello);  
        }
    },
});
