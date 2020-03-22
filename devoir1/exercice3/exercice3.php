<html>
    <head>
        <title>Les Composants &Eacute;lectroniques</title>
           </head>
                <BODY>
                <BR/> <BR/>
                <H1>Centrales d'achats</H1>
                <H2>  Commandes clients </H2>

                            <?php
                            $Commandes = file ("test.txt") ;
                            $Nombre_de_Commandes = count ($Commandes) ;
                            if ($Nombre_de_Commandes == 0)
                        {
                            echo "<p><font face='Arial' size='3' color='#FF0000'> <CENTER> <b>N&deg; de Commandes en cours. Veuillez r&eacute;essayer plus tard. </b> </CENTER> </font> </p>" ;
                        }

                echo "<CENTER> <TABLE BORDER = 1>\n" ;
                echo "<tr><th bgcolor = \"#1c87c9\"> <font face='Arial' size='5' color='#000000'> <b>Numero de commande</b> </font> </td>
                        <th bgcolor = \"#1c87c9\"> <font face='Arial' size='5' color='#000000'> <b> Numero client</b> </font> </td>
                        <th bgcolor = \"#1c87c9\"> <font face='Arial' size='5' color='#000000'> <b> Date de commande</b> </font> </td>
                        <th bgcolor = \"#1c87c9\"> <font face='Arial' size='5' color='#000000'> <b> Designation article</b> </font> </td>
                        <th bgcolor = \"#1c87c9\"> <font face='Arial' size='5' color='#000000'> <b> Quantite </b> </font> </td>
                        <th bgcolor = \"#1c87c9\"> <font face='Arial' size='5' color='#000000'> <b> Prix unitaire</b> </font> </td>
                        <th bgcolor = \"#1c87c9\"> <font face='Arial' size='5' color='#000000'> <b> Date de livraison </b> </font> </td>
                        <th bgcolor = \"#1c87c9\"> <font face='Arial' size='5' color='#000000'> <b>Adresse Client </b> </font> </td>
                        </tr> </CENTER>" ;

                            for ($i = 0 ; $i < $Nombre_de_Commandes ; $i ++)
                        {
                            $line = explode( "\t", $Commandes [$i] );
                            $line[0] = intval($line[0]) ;
                            $line[1] = intval($line[1]) ;
                            $line[4] = intval($line[4]) ;
                            $line[5] = floatval($line[5]) ;
                            echo "<tr><td> <font face='Arial' size='3' color='#000080'> $line[0] </td>
                                      <td align = CENTER> <font face='Arial' size='3' color='#000080'> $line[1] </td>
                                      <td align = CENTER> <font face='Arial' size='3' color='#000080'> $line[2] </td>
                                      <td align = CENTER> <font face='Arial' size='3' color='#000080'> $line[3] </td>
                                      <td align = CENTER> <font face='Arial' size='3' color='#000080'> $line[4] </td>
                                      <td align = CENTER> <font face='Arial' size='3' color='#000080'> $line[5] </td>
                                      <td align = CENTER> <font face='Arial' size='3' color='#000080'> $line[6] </td>
                                      <td align = LEFT> <font face='Arial' size='3' color='#000080'> $line[7] </td>
                                 </tr>" ;
                     }
                          echo "</TABLE>" ;
                            ?>
                    </body>
                   </html>