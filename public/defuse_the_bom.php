<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>

    <style type="text/css">

        img {

            float: left;
        }


        button {

            clear: both;
        }

        .{

            background-color: pink;
        }

    </style>

</head>
<body>
    <h2 id="message">This BOM will self destruct in <span id="timer">5</span> seconds...</h2>

    
    <img src="./img/bomb.jpg" id ="page-img" alt="bomb">

    <br>


    <button id="defuser">Defuse the BOM</button>





    <script>
        var detonationTimer = 5;
        var interval = 1000;
        var pageImg = document.getElementById("page-img");
        var buttonCray = document.getElementById("defuser");
        var prezColor = "#ff0000"
        var bcount = 0;


        function updateTimer() {
            
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';


            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

                intervalId2 = setInterval(function(){

                    prezColor = randoColor(prezColor);

                    buttonCray.style.backgroundColor = prezColor; 

                    console.log(prezColor);


                }, 50);

            detonationTimer--;

        };


        function randoColor(prezColor) {
            
            prezColor = prezColor.substring(0,prezColor.length - 2);

            prezColor = prezColor + Math.floor((Math.random()*(100-10))+10);

        };


        var intervalId = setInterval(updateTimer, interval);


        function defuseTheBOM()
        {
            clearInterval(intervalId);
            clearInterval(intervalId2);
            pageImg.setAttribute("src", "./img/thumbs-up.png");
            buttonCray.style.display = "none";
            document.getElementById("message").innerHTML = "";
            var prezColor = "#66ffff"; 
            pageImg.style.backgroundColor = prezColor;

            // timeoutId = setTimout( function (prezColor) {

            //     prezColor = randoColor(prezColor);
            //     document.style.backgroundColor = prezColor;

            // }, 50);

        };



        

        



        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()



        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons

        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);

        // document.addEventListener("click",stopTout,false);


    </script>
</body>
</html>
