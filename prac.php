<!DOCTYPE html>
<html>
<head>
	<title>My Webpage</title>
	<style>
		body {
			background-image: url("https://images.unsplash.com/photo-1570284613060-766c33850e00?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTN8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			height: 100vh;
			width: 100%;
			position: relative;
		}
	.label2 {
		display: none;
	position: absolute;
	top: 123px;
	left: 10%;
	transform: translateX(-50%);
	font-size: 20px;
	font-weight: bold;
	color: white;
	text-shadow: 2px 2px #000;
}
.label3 {
	display: none;
	position: absolute;
	top: 390px;
	left: 10%;
	transform: translateX(-50%);
	font-size: 20px;
	font-weight: bold;
	color: white;
	text-shadow: 2px 2px #000;
}
.label4 {
	display: none;
	position: absolute;
	top: 310px;
	left: 50%;
	transform: translateX(-50%);
	font-size: 20px;
	font-weight: bold;
	color: white;
	text-shadow: 2px 2px #000;
}
.label5 {
	display: none;
	position: absolute;
	top: 410px;
	left: 85%;
	transform: translateX(-50%);
	font-size: 20px;
	font-weight: bold;
	color: white;
	text-shadow: 2px 2px #000;
}
.label6 {
	display: none;
	position: absolute;
	top: 170px;
	left: 85%;
	transform: translateX(-50%);
	font-size: 20px;
	font-weight: bold;
	color: white;
	text-shadow: 2px 2px #000;
}
		.image {
			width: 200px;
			height: 200px;
			margin: 5px;
			position: absolute;
		}

		.image1 {
			top: 0;
			left: 0;
		}

		.image2 {
			top: 0;
			right: 0;
		}

		.image3 {
			bottom: 0;
			left: 0;
		}

		.image4 {
			bottom: 0;
			right: 0;
		}

		.image5 {
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
	</style>
</head>
<body>
	<div class="container">
	<img class="image image1" src="https://o.remove.bg/downloads/107433c9-58d2-444d-8903-e20885689953/photo-1614732414444-096e5f1122d5-removebg-preview.png">
	<p class="label2">Saturn</p>
	<img class="image image2" src="https://o.remove.bg/downloads/56b4b84a-b372-4148-a05b-c28f096b7f14/Tharsis_and_Valles_Marineris_-_Mars_Orbiter_Mission__30055660701_-removebg-preview.png">
	<p class="label3">Uranus</p>
	<img class="image image3" src="https://o.remove.bg/downloads/910d331e-18e7-4730-a8ad-12e44ce678a9/Uranus_as_seen_by_NASA_s_Voyager_2__remastered__-_JPEG_converted-removebg-preview.png">
	<p class="label4">Sun</p>
	<img class="image image4" src="https://o.remove.bg/downloads/55f8dab6-19a2-483c-9d02-d77bb8af4faf/download-removebg-preview.png">
	<p class="label5">Mercury</p>
	<img class="image image5" src="https://o.remove.bg/downloads/43183cbb-bc72-47ee-ac2a-32bb75b60091/Sun-removebg-preview.png">
	<p class="label6">Mars</p>
</div>

	<button id="move-planet-btn">Move Planet</button>
	<button id="show-planet-name-btn">Show Planet Name</button>
	<button id="change-background-btn">Change WebPage Background</button>

	<script>

		const saturnImg = document.querySelector(".image1");
		const uranusImg = document.querySelector(".image2");
		const mercuryImg = document.querySelector(".image4");
		const marsImg = document.querySelector(".image5");
		const label2 = document.querySelector(".label2");
const label3 = document.querySelector(".label3");
const label4 = document.querySelector(".label4");
const label5 = document.querySelector(".label5");
const label6 = document.querySelector(".label6");
		function movePlanets() {
  // Move Saturn to the bottom right
  saturnImg.style.transform = "translate(50%, 50%)";
  saturnImg.style.zIndex = 1;

  // Move Uranus to the top left
  uranusImg.style.transform = "translate(-50%, -50%)";
  uranusImg.style.zIndex = 2;

  // Move Mercury to the top right
  mercuryImg.style.transform = "translate(50%, -50%)";
  mercuryImg.style.zIndex = 3;

  // Move Mars to the bottom left
  marsImg.style.transform = "translate(-50%, 50%)";
  marsImg.style.zIndex = 4;
}
		// Get the buttons by their IDs
		const movePlanetBtn = document.getElementById("move-planet-btn");
		const showPlanetNameBtn = document.getElementById("show-planet-name-btn");
		const changeBackgroundBtn = document.getElementById("change-background-btn");
		const body = document.querySelector("body");

		// Add click event listeners to the buttons
	movePlanetBtn.addEventListener("click", movePlanets);
	showPlanetNameBtn.addEventListener("click", () => {
  // Make the label visible when the button is clicked
  		label2.style.display = "block";
  		label3.style.display = "block";
 		label4.style.display = "block";
  		label5.style.display = "block";
  		label6.style.display = "block";
});
		showPlanetNameBtn.addEventListener("click", () => {
			// Code to show the planet name goes here
			console.log("Show planet name clicked");
		});

	

changeBackgroundBtn.addEventListener("click", () => {
  body.style.backgroundImage = "url('https://media.istockphoto.com/photos/background-of-galaxy-and-stars-picture-id1035676256?b=1&k=20&m=1035676256&s=612x612&w=0&h=5vGVNVdkpw46y08cWz9oQcVBHWsvNDkfFUYjDruKHu0=')";
});
	</script>
</body>
</html>
