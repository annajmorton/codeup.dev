"stric use";

// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'orange'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.
	

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
	

// if else statments provide feedback on the current rando color

	if (color == "red") {

		console.log("red the color of blood");

	} else if (color == "orange") {

		console.log("orange the color of the sunset");

	} else if (color == "yellow") {

		console.log("yellow the color of pee");

	} else if (color == "green") {

		console.log("green the color of grass");

	}else if (color == "blue") {

		console.log("blue the color of our state flower");

	}else {
		console.log("what i do not know anything by that color");
	}



// checks to see if the rando color is my favorite color (defined in line 8 above)

	console.log( color = (color == favorite) ? "wow thats my favorite color": "well we cant all have good taste");





