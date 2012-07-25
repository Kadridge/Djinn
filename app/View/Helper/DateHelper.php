<?php

class DateHelper extends AppHelper{
 
    public $days   = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
    public $months = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre');

    function french($datetime){
        $tmpstamp = strtotime($datetime);
        $date = $this->days[date('N',$tmpstamp)-1]." ".date('d',$tmpstamp).' '.$this->months[date('n',$tmpstamp)-1].' '.date('Y',$tmpstamp);
        $date .=" à ".date('H:i',$tmpstamp);
        return $date;
    }
    
}

?>
