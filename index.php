<?php 

// İmport Et //

/*$reuire_ar = array( 
  'opening_hours' => 'auto_opening.php',
  'opening_days'  => 'opening_day.php'
);*/

require_once ("auto_opening.php");
require_once ("opening_day.php");

// Açılış ve Kapanış Saatleri //
// Çalışacak Fonksiyonun HoursWork( Mysql'den Gelen Veri $veri->acilissaatleri yada $veri['acilissaatleri'] );
HoursWork('08:00,21:00');


// Çalışma Günleri //
// Çalışacak Fonksiyonun DayWork( Mysql'den Gelen Veri $veri->calismagunleri yada $veri['calismagunleri'], ' html kodunu boşluk yada başka bir şey için kullanın ');
DayWork('1,2,3,4,5,6,7','<br>');

// İletişim Numaram Bana Ulaşabilirsiniz 0533 195 69 10 / 0545 690 20 87 //

