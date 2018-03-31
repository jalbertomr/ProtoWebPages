/* 
 * products.js
 * module store-products
 */
(function (){
    var app = angular.module('store-products', []);
  
    app.directive('productDesc', function(){
       return {
         restrict: 'E',
         templateUrl: "product-description.html"
       };
    });

    app.directive('productSpecs', function(){
       return {
           restrict: 'E',
           templateUrl: "product-specs.html"
       };
    });

    app.directive('productReviews', function(){
       return {
           restrict: 'E',
           templateUrl: "product-reviews.html",
          /*controller: function(){ alert('controller product-review');}*/
       };
    });

    app.directive("productTabs", function(){
    return {
      restrict: 'E',
      templateUrl: 'product-tabs.html',
      controller: function(){
         this.tab = 1;

         this.isSet = function(checkTab) {
            return this.tab === checkTab;
         };

         this.setTab = function(setTab) {
           this.tab = setTab;
         };
       },
      controllerAs: 'tab'
    };
    });

    app.directive("productGallery", function(){
      return {
          restrict: 'E',
          templateUrl: "product-gallery.html",
          controller: function(){
              this.current = 0;
              this.setCurrent = function(newValue){
                this.current = newValue || 0;  
              };
          },
          controllerAs: 'gallery'
      }
    }); 

})();

