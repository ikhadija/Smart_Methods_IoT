
<html>
    <head>
        <title>TASK3</title>
        <style>
            body{
                background-color:lavender;
                font-family: "American Typewriter";
                color:DarkBlue;
                text-align: center;
            }
            p{
                margin-left: 15em;
                font-size: large;
            }
          #img1{
              margin-left: 50em;
          }
          button{
              background-color: Transparent;
              background-repeat:no-repeat;
              border: none;
              cursor: pointer;
          }
        </style>
    </head>
    <body>
            <br/><br/>
           <button id="forward"><img src="https://img.icons8.com/external-others-inmotus-design/344/external-Up-keyboard-others-inmotus-design-4.png" width="100" height="100"></button>
                <br><br>
                <button id="left"><img src="https://img.icons8.com/external-others-inmotus-design/344/external-Left-keyboard-others-inmotus-design-5.png" width="100" height="100"></button>
                <button id="stop"><img src="https://img.icons8.com/external-xnimrodx-blue-xnimrodx/344/external-stop-music-and-song-xnimrodx-blue-xnimrodx.png"width="100" height="100"></button>
                <button id="right"><img src="https://img.icons8.com/external-others-inmotus-design/344/external-Right-keyboard-others-inmotus-design-5.png" width="100" height="100"></button>
                <br><br>
                <button id="backward"><img src="https://img.icons8.com/external-others-inmotus-design/344/external-Down-keyboard-others-inmotus-design-3.png" width="100" height="100"></button>
            <br><br><br>
            <pre><p><b>  Hi ,
                Can you help me move ?</b> </p></pre>
            <img id= "img1" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/344/external-robot-edutainment-flaticons-lineal-color-flat-icons.png" width="300" height="300">
            <script type="text/javascript">
                document.getElementById("forward").onclick = function () {
                    location = "forward.php";
                };
                document.getElementById("left").onclick = function () {
                    location = "left.php";
                };
                document.getElementById("stop").onclick = function () {
                    location = "stop.php";
                };
                document.getElementById("right").onclick = function () {
                    location = "right.php";
                };
                document.getElementById("backward").onclick = function () {
                    location = "backward.php";
                };
            </script>
    </body>
</html>

