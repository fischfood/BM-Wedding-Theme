<html>
<head>
	<title>10 . 14 . 17</title>


	<meta name="viewport" content="width=device-width, initial-scale=1">


	<style>
	.olive-back-show body {
        height: 100vh;
        width: 100vw;
        background:url('/wp-content/themes/onlyfischinthesea/leaves/bg_blur.jpg');
        background-position: center center;
        background-size: 100%;
        background-size: cover;
        margin: 0;
        padding: 0;
        overflow: hidden;

    }

html.olive-back-show {
	overflow: hidden;
	height: 100vh;
	width: 100vw;
}

body:before {
    content: '';
    height: 100vh;
    width: 100vw;
    background: rgba(0,0,0,.2);
    display: block;
    position: absolute;
    z-index: -109;
    top: 0;
    left: 0;
}

.leaves-container {
    max-width: 100%;
    height: 100vh;
    position: relative;
    left: 0;
    overflow: hidden;
}

.std {
    background:url('/wp-content/themes/onlyfischinthesea/leaves/std101417.png');
    height: 400px;
    width: 400px;
    max-width: 80%;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center center;
    float: right;
    position: absolute;
    bottom: 10vw;
    left: 50%;
    transform: translateX(-50%);
}

@media only screen and (max-width: 600px) {
	#leaves_1, #leaves_2, #leaves_3, #leaves_4, #leaves_5 {
		display: none;
	}
}

#leaves_1 {
    position:absolute;
    top:-220px;
    left:-250px;
    z-index:-5;
    width:646px;
    height:473px;
    background:url('/wp-content/themes/onlyfischinthesea/leaves/autumn_leaves_1.png') bottom right no-repeat;
    background-size: container;
    animation-name: leaves_1;
    animation-duration: 20s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: 999;
}

@keyframes leaves_1 {
    0% {
        transform: rotate(0deg);
    }
    8% {
        transform: rotate(5deg);
    }
    22% {
        transform: rotate(-2deg);
    }
    33% {
        transform: rotate(2deg);
    }
    39% {
        transform: rotate(-6deg);
    }
    47% {
        transform: rotate(4deg);
    }
    61% {
        transform: rotate(-1deg);
    }
    72% {
        transform: rotate(7deg);
    }
    79% {
        transform: rotate(3deg);
    }
    87% {
        transform: rotate(7deg);
    }
    100% {
        transform: rotate(0deg);
    }
}

#leaves_2 {
    position:absolute;
    top:-120px;
    left:200px;
    z-index:-8;
    width:220px;
    height:186px;
    background:url('/wp-content/themes/onlyfischinthesea/leaves/autumn_leaves_2.png') bottom right no-repeat;
    background-size: container;
    animation-name: leaves_2;
    animation-duration: 22s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: 999;
}

@keyframes leaves_2 {
    0% {
        transform: rotate(0deg);
    }
    11% {
        transform: rotate(7deg);
    }
    19% {
        transform: rotate(-1deg);
    }
    31% {
        transform: rotate(4deg);
    }
    38% {
        transform: rotate(-4deg);
    }
    51% {
        transform: rotate(3deg);
    }
    62% {
        transform: rotate(-4deg);
    }
    69% {
        transform: rotate(3deg);
    }
    83% {
        transform: rotate(-1deg);
    }
    92% {
        transform: rotate(6deg);
    }
    100% {
        transform: rotate(0deg);
    }
}

#leaves_3 {
    position:absolute;
    top:-100px;
    left:670px;
    z-index:-3;
    width:320px;
    height:220px;
    background:url('/wp-content/themes/onlyfischinthesea/leaves/autumn_leaves_3.png') bottom right no-repeat;
    background-size: container;
    animation-name: leaves_3;
    animation-duration: 24s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: 999;
}

@keyframes leaves_3 {
    0% {
        transform: rotate(0deg);
    }
    10% {
        transform: rotate(7deg);
    }
    23% {
        transform: rotate(1deg);
    }
    29% {
        transform: rotate(9deg);
    }
    40% {
        transform: rotate(2deg);
    }
    49% {
        transform: rotate(4deg);
    }
    62% {
        transform: rotate(-3deg);
    }
    71% {
        transform: rotate(5deg);
    }
    79% {
        transform: rotate(-1deg);
    }
    92% {
        transform: rotate(5deg);
    }
    100% {
        transform: rotate(0deg);
    }
}

#leaves_4 {
    position:absolute;
    top:-500px;
    left:-600px;
    z-index:-2;
    width:1000px;
    height:1000px;
    background:url('/wp-content/themes/onlyfischinthesea/leaves/autumn_leaves_4.png') bottom right no-repeat;
    background-size: container;
    animation-name: leaves_4;
    animation-duration: 26s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: 999;
}

@keyframes leaves_4 {
    0% {
        transform: rotate(0deg);
    }
    7% {
        transform: rotate(6deg);
    }
    17% {
        transform: rotate(-1deg);
    }
    29% {
        transform: rotate(3deg);
    }
    41% {
        transform: rotate(-7deg);
    }
    48% {
        transform: rotate(2deg);
    }
    62% {
        transform: rotate(-2deg);
    }
    71% {
        transform: rotate(6deg);
    }
    83% {
        transform: rotate(-1deg);
    }
    90% {
        transform: rotate(4deg);
    }
    100% {
        transform: rotate(0deg);
    }
}

#leaves_5 {
    position:absolute;
    top:-320px;
    left:-300px;
    z-index:-1;
    width:400px;
    height:400px;
    background:url('/wp-content/themes/onlyfischinthesea/leaves/autumn_leaves_5.png') bottom right no-repeat;
    background-size: container;
    animation-name: leaves_5;
    animation-duration: 28s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: 999;
}

@keyframes leaves_5 {
    0% {
        transform: rotate(0deg);
    }
    12% {
        transform: rotate(8deg);
    }
    21% {
        transform: rotate(2deg);
    }
    31% {
        transform: rotate(5deg);
    }
    42% {
        transform: rotate(-1deg);
    }
    51% {
        transform: rotate(4deg);
    }
    62% {
        transform: rotate(-2deg);
    }
    69% {
        transform: rotate(5deg);
    }
    80% {
        transform: rotate(-1deg);
    }
    89% {
        transform: rotate(6deg);
    }
    100% {
        transform: rotate(0deg);
    }
}
</style>

</head>
<body>

	<div class="leaves-container">

		<div id="leaves_1"></div>
		<div id="leaves_2"></div>
		<div id="leaves_3"></div>
		<div id="leaves_4"></div>
		<div id="leaves_5"></div>

		<div class="std"></div>

	</div>

</body>
</html>