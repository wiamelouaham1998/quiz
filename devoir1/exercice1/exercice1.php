<html>
   <head>
    <TITLE>proposition de résolution ecercice1</TITLE>
    </head>
    <body>
     <h1><font face="arial" size="3" color=" #92a8d1"><center> bienvenue chez nous !!!!! </center> </h1>
            <center><table WIDTH = 50%>
                <tr>
                <?php
                $mesphotos= array ("images/passtilla.jpg", "images/poisson.jpg", "images/salade.jpg") ;
                shuffle ($mesphotos) ; 
                for ($i = 0 ; $i < 3 ; $i ++) {
                echo "<td align = 'center'> <img src = \"" .$mesphotos[$i]." \" width = '200' height = '200' </td>";
                }
                ?>
                </tr>
            </table></center>
            </body>

</html>