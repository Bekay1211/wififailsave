 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="ISO-8859-1">
     <link rel="stylesheet" type="text/css" href="css.css">
 </head>

 <body>
     <div id="head">
         <h1>Wifi controller</h1>
         <p>Verfügbare WLAN Netzwerke:</p>
         <hr>
         <br>
     </div>
     <div id="main">
         <p>
            <form action="connect.php" method="post">
            <div>
                <label for="wifi">Wifi zum Verbinden auswählen:</label>
                <select name="wifi">
                    <?php
                    exec('nmcli -t dev wifi', $retval);
                    foreach ($retval as $value) {
                        $value = str_replace("\:", "", $value);
                        $ssid = explode(":", $value)[2];
                        if($ssid){
                            echo sprintf("<option value=\"%s\">%s</option><br>", $ssid, $ssid);
                        }
                    }
                ?>
                </select>
            </div>
            <div>
                <label for="password">Wifi-Passwort:</label>
                <input type="password" name="password" minlength="8" required>
            </div>
            <div>
                <input type="submit" value="Mit Wifi verbinden" />
            </div>
            </form>
         </p>
     </div>
 </body>

 </html>