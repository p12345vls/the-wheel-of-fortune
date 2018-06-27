<!DOCTYPE html>

<html>
    <head>
        <title>WHEEL OF FORTUNE</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Bangers|Courgette|Fredoka+One|Gloria+Hallelujah" rel="stylesheet">
  

    </head>
    
    
    <body>

        <div class="one">

            <h1> WHEEL OF FORTUNE</h1>

            <hr>

            <div class="two">
                
                <button id="loadStart" 
                onclick=" document.getElementById('player').play()";>SPIN THE WHEEL</button>
                
                <audio id="player" src="spin.wav"></audio>

                <div id="result">
                    <?php include 'inc/functions.php'; ?>
                </div>
            </div>
            
            <div>
                <form >
                     <input type="submit" value="STOP THE WHEEL"  id="stopWheel";/>
                </form>
            </div>
        
        </div>
        
         
    </body>
</html>
