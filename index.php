<!DOCTYPE html>
<html>
<head>
    <style>
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
            transition: box-shadow 0.4s ease-in-out;
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

        function openLink() {
            window.location.href = "https://github.com/lostsdev";
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
        <a href="https://github.com/lostslvtt">
            <div class="Container">
                <div class="Rectangle1" onclick="openLink()">
                    <div class="Lostslvtt">
                        <a href="https://github.com/lostsdev">lostslvtt</a>
                    </div>
                </div>
                <div class="NotEndedYet">
                    learning rust... 
                </div>
                <div class="LocalTime">
                    <?php echo date('H:i:s'); ?>  
                </div>
            </div>
        </a>
    </div>
</body>
</html>
