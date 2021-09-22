<?php 

// İmport Et //
require_once ("auot_opening.php");

// Açılış ve Kapanış Saatleri //
// Çalışacak Fonksiyonun HoursWork( Mysql'den Gelen Veri $veri->acilis-saatleri yada $veri['acilis-saatleri'] );
HoursWork('08:00,21:00');


// Çalışma Günleri //
// Çalışacak Fonksiyonun DayWork( Mysql'den Gelen Veri $veri->calisma-gunleri yada $veri['calisma-gunleri'], ' html kodunu boşluk yada başka bir şey için kullanın ');
DayWork('1,2,3,4,5,6,7','<br>');

// İletişim Numaram Bana Ulaşabilirsiniz 0533 195 69 10 / 0545 690 20 87 //

