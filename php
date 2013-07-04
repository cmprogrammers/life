<?php
        function ita($mes, $zip) {
    switch ($mes) {
        case "1":
            $mes = "0";
            break;
        case "2":
         $mes="31";
            break;
        case "3":
            $mes = "59";
            break;
        case "4":
            $mes = "90";
            break;
        case "5":
            $mes = "120";
            break;
        case "6":
            $mes = "151";
            break;
        case "7":
            $mes = "181";
            break;
        case "8":
            $mes = "212";
            break;
        case "9";
            $mes = "243";
            break;
        case "10":
            $mes = "273";
            break;
        case "11":
            $mes = "304";
            break;
        case "12":
            $mes = "334";
            break;
    }
    return $mes;
}
          $day=date('d');
          $mounth=date('m');
          $year=date('Y');
          $hours=date('H');
          $minutes=date('i');
          $seconds=date('s');
          echo "<table><tr><td><h1>".$day."/".$mounth."/".$year."</td>";
          echo "<td><h1>".$hours.":".$minutes.":".$seconds."</td></tr></table>" ;
          @$anno=$_POST['anno'];
          @$giorno=$_POST['giorno'];
          @$mese=$_POST['mese'];
          @$ora=$_POST['ora'];
          @$minuti=$_POST['minuti'];
          @$secondi=$_POST['secondi'];
          @$clear=$_POST['delete'];
if (isset($clear)) {
unset($anno) ;
unset($giorno) ;
unset($mese) ;
unset($ora) ;
unset($minuti) ;
unset($secondi) ;
}
          if (isset($anno) && isset($giorno) && isset($mese) && isset($ora) && isset($minuti) && isset($secondi)){
             echo "<br><br><br><br><table><tr><td>Data inserita<h1>". $giorno."/".$mese."/".$anno."</h1></td>"; 
             echo "<td>Ora inserita<h1>". $ora.":".$minuti.":".$secondi."</h1></td></tr></table>"; 
             $f=ita($mounth, $year); 
             $g=ita($mese, $anno);
 $results=($year-1900)*31536000+((($year-1900)/4)-((($year-1900)%4)/4))*86400+86400*$f+($day-1)*86400+$hours*3600+$minutes*60+$seconds-(($anno-1900)*31536000+((($anno-1900)/4)-((($anno-1900)%4)/4))*86400+86400*$g+($giorno-1)*86400+$ora*3600+$minuti*60+$secondi);
          $resultm= round(($results/60),3);
         $resulto= round(($results/3600),3);
         $resultg= round(($results/86400),3);
         echo "<br>Vivi da <h2>". $resultg."  giorni</h2><br><h2>".$resulto."  ore</h2><br> <h2>".$resultm."  minuti</h2><br> <h2>".$results."  secondi</h2><br>";
          }
        ?>      
            <br><br><form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
                      
            <table>
<tr>
<td><h4>Giorno</h4>
            <select name="giorno">
                    <?php 
               for ($i=1; $i<=31; $i++) {
                 ?>
                <option value="<?php echo $i  ?>"><?php echo $i ?></option>
                     <?php 
               }
               ?>
            </select> </td><td><h4>Mese</h4>
                        <select name="mese">
                    <?php 
               for ($i=1; $i<=12; $i++) {
                 ?>
                <option value="<?php echo $i  ?>"><?php echo $i ?></option>
                     <?php 
               }
               ?>
            </select>  
</td><td><h4>Anno</h4>
<select name="anno">
               <?php 
               for ($i=1900; $i<=2013; $i++) {
                 ?>
                <option value="<?php echo $i  ?>"><?php echo $i ?></option>
                     <?php 
               }
               ?>
            </select></td></tr><tr><td>
<h4>Ora</h4>
            <select name="ora">
               <?php 
               for ($i=0; $i<=23; $i++) {
                 ?>
                <option value="<?php echo $i  ?>"><?php echo $i ?></option>
                     <?php 
               }
               ?>
            </select></td><td>
<h4>Minuti</h4>
            <select name="minuti">
               <?php 
               for ($i=0; $i<=59; $i++) {
                 ?>
                <option value="<?php echo $i  ?>"><?php echo $i ?></option>
                     <?php 
               }
               ?>
            </select></td><td>
<h4>Secondi</h4>
              <select name="secondi">
               <?php 
               for ($i=0; $i<=59; $i++) {
                 ?>
                <option value="<?php echo $i  ?>"><?php echo $i ?></option>
                     <?php 
               }
               ?>
            </select>
</td></tr></table>
                <br><br>
                <input type="submit" value="Calcola">
            </form>
<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
<input type="hidden" value="del" name="delete">
<input type="submit" value="RESET">
</form>
<br><br><br>
            <h3>E-mail: cmprogrammers@gmail.com<br>
2013 Designed by C.M.P.  Copyright
</h3>
