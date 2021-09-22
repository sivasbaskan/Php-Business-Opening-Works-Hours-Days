<?php

// Çalışma Günleri //
function WorkDay($Wday){

    $Days = array(

        1 => 'Pazartesi   <i class="text-success icon-checkmark float-right"></i>',
        2 => 'Salı        <i class="text-success icon-checkmark float-right"></i>',
        3 => 'Çarşamba    <i class="text-success icon-checkmark float-right"></i>',
        4 => 'Perşembe    <i class="text-success icon-checkmark float-right"></i>',
        5 => 'Cuma        <i class="text-success icon-checkmark float-right"></i>',
        6 => 'Cumartesi   <i class="text-success icon-checkmark float-right"></i>',
        7 => 'Pazar       <i class="text-success icon-checkmark float-right"></i>'

    );

    $EndDays = $Days[$Wday];

    /*if(!$EndDays == 'Cumartesi' || !$EndDays == 'Pazar'):
        return '<i class="text-success icon-close"></i>';
    Endif;*/

    return $EndDays;
}


// Hangi Günlerde Çalışıyor //
function DayWork($Days, $html = null) {

    $Days       =   explode(',',$Days);
    $WorksDays  =   "";

    foreach ($Days as $arr => $day){ 
        $WorksDays.= WorkDay($day). $html;
    }

    return $WorksDays;
}

