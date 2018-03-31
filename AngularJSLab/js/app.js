/* 
 * module gemStore
 * AngularJSLab/json/products.json
 * stringjson = JSON.stringify(store.products);
 */
(function (){
    
   var app = angular.module('gemStore', [ 'store-products' ]); 
   
   app.controller('StoreController', function( webtest){
     var store = this;
     var stringjson;
     
     /*store.products = gems;*/
     store.products = [];
     /*
       $http.get('json/products.json').success(function(data){
       store.products = data;
     });
     */
    
     webtest.fetch().then(function(data){
       store.products = data;  
     })
     
     stringjson = JSON.stringify(store.products);
     store.products.stringjson = stringjson;
     
   });

   app.factory('webtest', function( $q, $timeout, $http){
     var Webtest = {
        fetch: function(callback){
          return $timeout(function(){
            return $http.get('json/products.json').then(function(response){
              return response.data;
            });
          }, 30);
        }
     };
     
     return Webtest;
   });


   app.controller('GalleryController', function(){
       this.current = 0;
       
       this.setCurrent = function(newValue){
         this.current = newValue || 0;  
       };
   });
   
   app.controller('ReviewController',function(){
      this.review = {};
      
      this.addReview = function(product){
          this.review.createdOn = Date.now();
          product.reviews.push(this.review);
          this.review = {};
      };
   });
   
   
  var gems = [{
      name: 'Azurita',
      description: "Algunas Gemas tienen cualidades más allá de su lustro, más allá de tu brillo... Azurita es una de esas gemas.",
      shine: 8,
      price: 110.50,
      rarity: 7,
      color: '#CCC',
      faces: 14,
      images: [
        "images/gem-02.jpeg",
        "images/gem-05.jpeg",
        "images/gem-09.jpeg"
      ],
      reviews: [{
        stars: 5,
        body: "I love this gem!",
        author: "joe@example.org",
        createdOn: 1397490980837
      }, {
        stars: 1,
        body: "This gem sucks.",
        author: "tim@example.org",
        createdOn: 1397490980837
      }]
    }, {
      name: 'Heliotropo',
      description: "El origen del heliotropo es desconocido, de ahí su bajo valor. Tiene un muy alto brillo y 12 caras, a pesar de todo.",
      shine: 9,
      price: 22.90,
      rarity: 6,
      color: '#EEE',
      faces: 12,
      images: [
        "images/gem-01.jpeg",
        "images/gem-03.jpeg",
        "images/gem-04.jpeg"
      ],
      reviews: [{
        stars: 3,
        body: "I think this gem was just OK, could honestly use more shine, IMO.",
        author: "JimmyDean@example.org",
        createdOn: 1397490980837
      }, {
        stars: 4,
        body: "Any gem with 12 faces is for me!",
        author: "gemsRock@example.org",
        createdOn: 1397490980837
      }]
    }, {
      name: 'Zirconia',
      description: "La Zirconia es nuestra más buscada y codiciada gema, Pagaría mucho por ser el orgulloso usuario de esta maravillosa y brillosisima gema.",
      
      shine: 70,
      price: 1100,
      rarity: 2,
      color: '#000',
      faces: 6,
      images: [
        "images/gem-06.jpeg",
        "images/gem-07.gif",
        "images/gem-10.jpeg"
      ],
      reviews: [{
        stars: 1,
        body: "This gem is WAY too expensive for its rarity value.",
        author: "turtleguyy@example.org",
        createdOn: 1397490980837
      }, {
        stars: 1,
        body: "BBW: High Shine != High Quality.",
        author: "LouisW407@example.org",
        createdOn: 1397490980837
      }, {
        stars: 1,
        body: "Don't waste your rubles!",
        author: "nat@example.org",
        createdOn: 1397490980837
      }]
    }];

})();
