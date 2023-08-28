
// even this simple singleton module uses closures
function Counter(start) {
	var count = start;
	return {
		increment: function () {
			count++;
		},
		get: function () {
			return count;
		}
	}
}

var balls = Counter(23);
balls.increment();
balls.get(); // 24

console.log(balls.get());



// this just prints "10" 10 times
// the for just sets up 10 timers that will run in a sec
// and print the value i has after that second
for (var i = 0; i < 10; i++) {

	setTimeout(function () {
		console.log(i);
	}, 1000);

}


// this instead creates 10 "bubbles"
// in each bubble the value of i is different
// i gets passed to the anonomous, bubble-creating function
for (var i = 0; i < 10; i++) {

	(function (e) {
		setTimeout(function () {
			console.log(e);
		}, 1000);
	})(i);

}




/**
 * fade technique
 */

// get the list
var list = document.querySelector('ol');


// attach a click handler on it
list.addEventListener('click', function (event) {

	// if you clicked an li, run the animation
	if (event.target && event.target.tagName.toLowerCase() === 'li') {
		yellowFade(event.target);
	}

}, false);


/**
 * run the yellowFade animation
 * this would be a lot better with css
 * but it's here TO PROVE A POINT, BITCHES
 * cuz it's tough to explain closures with css
 */
function yellowFade(element) {
	var level = 1,
		fps = 20;

	function step() {
		setTimeout(function () {
			var h = level.toString(16);
			element.style.backgroundColor = '#FFFF' + h + h;

			if (level < 15) {
				level += 1;
				requestAnimationFrame(step);
			}
		}, 1000 / fps);
	}

	requestAnimationFrame(step);
}