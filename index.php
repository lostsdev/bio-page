<!DOCTYPE html>
<html>
<head>
    <style>
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
            width: 634px;
            height: 115px;
            background: #EBDADA;
            box-shadow: 0px 4px 15.199999809265137px 0px rgba(235, 218, 218, 1);
            border-radius: 25px;
            animation: fade-in 1s ease-in-out;
            transition: margin-top 0.4s ease-in-out, box-shadow 0.4s ease-in-out;

        }
        .Lostslvtt:hover {
            opacity: 100%;
        }

        .Lostslvtt {
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

        function moveDiv() {
            var div = document.querySelector('.Rectangle1');
            div.style.marginTop = '-3px';
        }
        function moveDivBack(x) {
            x.style.marginTop = '3px';
        }

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
                <div class="Rectangle1" onclick="openLink()" onmouseover="moveDiv()" onmouseout="moveDivBack(this)">
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
