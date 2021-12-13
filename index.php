<html><head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@700&amp;display=swap" rel="stylesheet"> 
	<title>Velator+</title>
	<style id="root">
			:root {
				--scroll:0px;
			}
		</style>
	<script>
		document.addEventListener("scroll", function() {
		document.getElementById("root").innerHTML = `
			:root {
				--scroll:`+Math.floor(window.scrollY/2)+`px;
			}
		`
		})
	</script>
	<style>
	    
		@keyframes moveRight {
			0% {background-position:0px var(--scroll);}
			100% {background-position:120px var(--scroll);}
		}
		* {
			margin:0px;
			padding:0px;
			font-family:'Source Sans Pro', sans-serif;
			color:white;
		}
		body {
			background-color:#003;
		}
		#top {
			animation-name:moveRight;
			animation-duration:3s;
			animation-iteration-count:infinite;
			animation-timing-function: linear;
			padding: 35.5vh 0px;
			background-image:url(./checker.png);
			background-size:120px;
			font-size:4vh;
		}
		#top h1 {
			font-size:15vh;
		}
	</style>
</head>
<body>
	<div id="top" align="center">
	<h1>Velator+</h1>
	<p>Work in progress!</p>
	<p>Completion goal: <b>December 23, 2021</b></p>
	</div>

</body></html>
