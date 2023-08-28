var Prices = {
    TAX: .2,
    addTax: function(price, percent) {
        this.percent = percent;
        this.price = price + price * this.TAX;
    },
    discount: function() {
        return  this.price - ( this.price * this.percent / 100 );
    }
};


var PrintPrices = Object.create(Prices);

PrintPrices.log = function() {
    console.log(`Finall price is, ${this.discount()}.`);
};

var p1 = Object.create(PrintPrices);
p1.addTax(100, 20);
var p2 = Object.create(PrintPrices);
p2.addTax(1000, 20);

p1.log(); 
p2.log(); 

