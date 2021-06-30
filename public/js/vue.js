/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/vue.js":
/*!*****************************!*\
  !*** ./resources/js/vue.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

Vue.config.devtools = true;
var app = new Vue({
  el: "#root",
  data: {
    categories: [],
    restaurants: [],
    categoryIndex: '',
    quantity: 1,
    carrello: [],
    array: []
  },
  computed: {
    carrelloTotale: function carrelloTotale() {
      var somma = 0;

      for (var key in this.carrello) {
        somma += this.carrello[key].price * this.carrello[key].quantity;
      }

      console.log(somma);
      return somma.toFixed(2);
    }
  },
  mounted: function mounted() {
    var _this = this;

    /* chiamata categorie ristoranti */
    axios.get('http://localhost:8000/api/categories').then(function (response) {
      _this.categories = response.data.data;
      /*console.log(this.categories) */
    });
    /* chiamata per i ristoranti */

    axios.get('http://localhost:8000/api/restaurants').then(function (response) {
      _this.restaurants = response.data.data;
      /* console.log(this.restaurants); */
    });
  },
  methods: {
    //al click vediamo tutti i ristoranti della categoria selezionata
    restaurantByCategory: function restaurantByCategory(category) {
      var _this2 = this;

      this.categoryIndex = category;
      axios.get("http://localhost:8000/api/restaurants/".concat(this.categoryIndex), {}).then(function (response) {
        _this2.restaurants = response.data.data;
        /* console.log(response.data.data); */
      });
    },
    //al click vediamo tutti i ristoranti
    allRestaurants: function allRestaurants() {
      var _this3 = this;

      this.categoryIndex = '';
      axios.get('http://localhost:8000/api/restaurants').then(function (response) {
        _this3.restaurants = response.data.data;
        /* console.log(this.restaurants); */
      });
    },
    addCart: function addCart(food) {
      var foods = food;
      foods.quantity = this.quantity;
      this.carrello.push(foods);
      localStorage.carrello = JSON.stringify(this.carrello);
      console.log(this.carrello);
    }
  }
});

/***/ }),

/***/ 2:
/*!***********************************!*\
  !*** multi ./resources/js/vue.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Uolter\Desktop\Progetto\pappo\resources\js\vue.js */"./resources/js/vue.js");


/***/ })

/******/ });