'use strict';

const TAX = 0.2;

function getTax() {
	return TAX;
}


/**
 * @class SexyNumbers
 */
class SexyNumbers {

	static multiMax(first, ...theRest) {
		let sorted = theRest.sort( (a, b) => b > a ),
			max = sorted[0];
		return first * max;
	}

}


/**
 * @class SexierNumbers
 * @extends {SexyNumbers}
 */
class SexierNumbers extends SexyNumbers {

	static discount( price, percent = 100 / 10, tax = getTax() ) {
		price = price - ( price * percent / 100 );
		price = price - ( price * tax );
		return price.toFixed(2);
	}

}


console.log(
	SexierNumbers.discount(100)
);