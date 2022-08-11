
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
                margin-right: 33em;
                font-size: large;
            }
          #img1{
              margin-right: 50em;
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
            <br><br>
            <pre><p><b>  Hi ,
                Can you help me move ?</b> </p></pre>
            <img id= "img1" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/344/external-robot-edutainment-flaticons-lineal-color-flat-icons.png" width="300" height="300">
            <script>
                window.watsonAssistantChatOptions = {
                    integrationID: "99f906a3-a682-401f-b80e-9cd786c569ca", // The ID of this integration.
                    region: "au-syd", // The region your integration is hosted in.
                    serviceInstanceID: "68c7c173-e0ce-4a5e-a89c-dc88ce54e241", // The ID of your service instance.
                    onLoad: function(instance) { instance.render(); }
                };
                setTimeout(function(){
                    const t=document.createElement('script');
                    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
                    document.head.appendChild(t);
                });
            </script>
    </body>
</html>

