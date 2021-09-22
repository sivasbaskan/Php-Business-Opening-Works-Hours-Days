<?php

// Mysql Çalışma Saatleri //
function WorksHours($Hours){

    $Works = explode(":", $Hours);
    $RealHours = $Works[0].":".$Works[1];

    return $RealHours;
}

// Gerçek Zaman Çalışma Saatleri Açık Kapalı Modu //
function HoursWork($datetime){

    $opennow = explode(',', $datetime);

    if(!HoursSecond() < $opennow[1] || !HoursSecond() < $opennow[0]):

        if( $opennow[0] > WorksHours(date('H:i')) ){

            echo '<span class="badge badge-danger">K</span>';
        }

        elseif( $opennow[1] < WorksHours(date('H:i')) ){

            echo '<span class="badge badge-danger">K</span>';
        }

        else{

            echo '<span class="badge badge-info">A</span>';
        }

    Endif;

    return $opennow[1];
}


// 60 Saniye Döngüsü //
function HoursSecond(){

    for ($i = 0; $i < 1440; $i++) {

       return Hours24($i);

    }
}


// 24 Saat Zaman Döngüsü //
function Hours24($i){

    $Hours = 0;

    while($Hours++ < 24){

        $Time24 = date('H:i',mktime($Hours,$i,0,1,1));
        return $Time24;
    }

}
