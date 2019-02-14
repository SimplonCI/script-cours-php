<form action="date.php" method="post">
    <input type="text" name="ladate" id="date">
    <button type="submit" name="enregister">Valider</button>
</form>



<?php
    

    if(isset($_POST['enregister'])){
        $ladate = addslashes($_POST['ladate']);

       
        $date = str_replace('/', '-', $ladate);
        $conversion = date('Y-m-d', strtotime($date));
        // echo $conversion.'<br/>';
        // echo $ladate;
 
        if(validateDate($conversion)){
                    
            $unixTimestamp = strtotime($ladate);
            
           
            $dayOfWeek = date("l", $unixTimestamp);
            
            
            echo $ladate . ' c\'est un  ' . $dayOfWeek;
        }else{
            echo "cette date n'existe pas";
        }
    }

   
   
    function validateDate($date, $format = 'Y-m-d')
        {
            $d = DateTime::createFromFormat($format, $date);
            
            return $d && $d->format($format) === $date;
        }
    
        //  var_dump( validateDate('2019-02-29'));
   

?>
