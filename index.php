<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            cursor: url(https://r2-bios.e-z.host/a83215b9-ed05-4377-a8db-aa76ce650ff4/54v8uexkkx.cur) 16 16, auto !important;
        }
        @keyframes fall {

0% {

  opacity: 0;

}

50% {

  opacity: 1;

}

100% {

  top: 100vh;

  opacity: 1;

}

}

@keyframes sway {

0% {

  margin-left: 0;

}

25% {

  margin-left: 50px;

}

50% {

  margin-left: -50px;

}

75% {

  margin-left: 50px;

}

100% {

  margin-left: 0;

}

}

        @keyframes fade-in {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}
@keyframes fade-in-out {
            0% {
                opacity: 50%;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 50%;
            }
        }
        a {
            display: .Container;
            color: #595757;
            text-decoration: none;
        }
	.Rectangle1:hover {
	    box-shadow: 0px 0px 30.199999809265137px 0px rgba(235, 218, 218, 1);
        transform: translateY(-0.2rem);
	}
        body {
            background-color: #7B7B7B; 

        }
        .Desktop1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #7B7B7B;
        }

        .Container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 1440px;
            padding: 20px;
            box-sizing: border-box;
        }

        .Rectangle1 {
            z-index: 9;
            transform-style: preserve-3d;
            will-change: transform;
            width: 634px;
            height: 115px;
            position: relative;
            background-size: cover;
            background: #EBDADA;
            box-shadow: 0px 4px 15.199999809265137px 0px rgba(235, 218, 218, 1);
            border-radius: 25px;
            animation: fade-in 1s ease-in-out;
            transition: all 0.2s ease-in-out, box-shadow 0.4s ease-in-out;
            backdrop-filter: blur(4px)

        }
        .Lostslvtt:hover {
            opacity: 100%;
        }

        .Lostslvtt {
            z-index: 10;
            color: #595757;
            font-size: 40px;
            font-family: JetBrains Mono;
            font-weight: 400;
            word-wrap: break-word;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 0 20px;
            position: relative;
            opacity: 80%;
            animation: fade-in 1s ease-in-out;
            transition: opacity 0.4s ease-in-out;
        }

        .NotEndedYet {
            color: white;
            font-size: 40px;
            font-family: JetBrains Mono;
            font-weight: 400;
            word-wrap: break-word;
            margin-top: 20px;
            animation: fade-in 1s ease-in-out;
            opacity: 80%;
        }

        .LocalTime {
            color: white;
            animation: fade-in 1s ease-in-out;
            font-size: 40px;
            font-family: JetBrains Mono;
            font-weight: 400;
            word-wrap: break-word;
            margin-top: 20px;
            animation: fade-in-out 1s infinite;
            opacity: 80%;
        }

        @media (max-width: 1440px) {
            .Container {
                max-width: 100%;
            }
        }
    </style>
    <script>
        var snowMax = 50;

        var snowColor = ["#DDD", "#EEE"];

        var snowEntity = "❄";

        var snowSpeed = 0.75;

        var snowMinSize = 9;

        var snowMaxSize = 25;

        var snowRefresh = 50;

        var snowStyles = "cursor: default; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; -o-user-select: none; user-select: none;";


        var snow = [],
            pos = [],
            coords = [],
            lefr = [],
            marginBottom,
            marginRight;

        function randomise(range) {
            rand = Math.floor(range * Math.random());
            return rand;
        }

        function initSnow() {
            var snowSize = snowMaxSize - snowMinSize;
            marginBottom = document.body.scrollHeight - 5;
            marginRight = document.body.clientWidth - 15;

            for (i = 0; i <= snowMax; i++) {
                coords[i] = 0;
                lefr[i] = Math.random() * 15;
                pos[i] = 0.03 + Math.random() / 10;
                snow[i] = document.getElementById("flake" + i);
                snow[i].style.fontFamily = "inherit";
                snow[i].size = randomise(snowSize) + snowMinSize;
                snow[i].style.fontSize = snow[i].size + "px";
                snow[i].style.color = snowColor[randomise(snowColor.length)];
                snow[i].style.zIndex = 1000;
                snow[i].sink = snowSpeed * snow[i].size / 5;
                snow[i].posX = randomise(marginRight - snow[i].size);
                snow[i].posY = randomise(2 * marginBottom - marginBottom - 2 * snow[i].size);
                snow[i].style.left = snow[i].posX + "px";
                snow[i].style.top = snow[i].posY + "px";
                snow[i].style.zIndex = 1;

            }

            moveSnow();
        }

        function resize() {
            marginBottom = document.body.scrollHeight - 5;
            marginRight = document.body.clientWidth - 15;
        }

        function moveSnow() {
            for (i = 0; i <= snowMax; i++) {
                coords[i] += pos[i];
                snow[i].posY += snow[i].sink;
                snow[i].style.left = snow[i].posX + lefr[i] * Math.sin(coords[i]) + "px";
                snow[i].style.top = snow[i].posY + "px";

                if (snow[i].posY >= marginBottom - 2 * snow[i].size || parseInt(snow[i].style.left) > (marginRight - 3 * lefr[i])) {
                    snow[i].posX = randomise(marginRight - snow[i].size);
                    snow[i].posY = 0;
                }
            }

            setTimeout("moveSnow()", snowRefresh);
        }

        for (i = 0; i <= snowMax; i++) {
            document.write("<span id='flake" + i + "' style='" + snowStyles + "position:absolute;top:-" + snowMaxSize + "'>" + snowEntity + "</span>");
        }

        window.addEventListener('resize', resize);
        window.addEventListener('load', initSnow);
        function updateTime() {
            var localTime = document.querySelector('.LocalTime');
            var currentTime = new Date();
            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();
            var timeString = hours.toString().padStart(2, '0') + ':' + minutes.toString().padStart(2, '0') + ':' + seconds.toString().padStart(2, '0');
            localTime.textContent = timeString;
            localTime.style.opacity = '40%';
        }

        // function moveDiv() {
        //     var div = document.querySelector('.Rectangle1');
        //     div.style.marginTop = '-1px';
        // }
        // function moveDivBack(x) {
        //     x.style.marginTop = '1px';
        // }

        function openLink() {
            var url = "https://github.com/lostsdev";
            window.open(url, '_blank').focus();
        }

        window.onload = function() {
            var localTime = document.querySelector('.LocalTime');
            setInterval(updateTime, 1000);
            localTime.style.opacity = '100%';
        };


    </script>
</head>
<body>
    <div class="Desktop1">
            <div class="Container">
                <div class="Rectangle1" onclick="openLink()">
                    <div class="Lostslvtt">
                        lostslvtt
                    </div>
                </div>
                <div class="NotEndedYet">
                    learning rust... 
                </div>
                <div class="LocalTime">
                    <?php echo date('H:i:s'); ?>  
                </div>
            </div>
    </div>
</body>
</html>
