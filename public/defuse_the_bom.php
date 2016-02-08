<!DOCTYPE html>
<html>
<head>
    <title>Defuse the BOM</title>

    <style type="text/css">

        img {

            float: left;
        }


        button {

            clear: right;
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


        // TODO: This function needs to be called once every second
        function updateTimer()
        {
            
            if (detonationTimer == 0) {
                alert('EXTERMINATE!');
                document.body.innerHTML = '';


            } else if (detonationTimer > 0) {
                document.getElementById('timer').innerHTML = detonationTimer;
            }

            detonationTimer--;

        }

        var intervalId = setInterval(updateTimer, interval);

        // TODO: When this function runs, it needs to
        // cancel the interval/timeout for updateTimer()
        function defuseTheBOM()
        {
            clearInterval(intervalId);
            pageImg.setAttribute("src", "./img/thumbs-up.png")
            back

            alert("Good work Agent!!!!");

        }

        // Don't modify anything below this line!
        //
        // This causes the defuseTheBOM() function to be called
        // when the "defuser" button is clicked.
        // We will learn about events in the DOM lessons
        var defuser = document.getElementById('defuser');
        defuser.addEventListener('click', defuseTheBOM, false);





    </script>
</body>
</html>
