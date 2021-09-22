# Şirket Açılış Saatleri ve Çalışma Günleri Fonksiyonları!

Ne İşe Yarar?

Şirket, Dükkan, Ofis yada herhangi bir işlevin mysql veri tabanından gelen açılış saati verisinin otomatik açılış kapanış saatlerine göre durum gösterir.

Mysql Verileri;

Tablo = isyeribilgileri.

Sütun1 = calismasaatleri.

Sütun2 = calismagunleri.

calismasaatleri "08:00,19:00";

calismagunleri "1,2,3,4,5,6,7";


// Açılış ve Kapanış Saatleri // Çalışacak Fonksiyonun 

HoursWork( Mysql'den Gelen Veri $veri->acilissaatleri yada $veri['acilissaatleri'] );
HoursWork('08:00,21:00');


// Çalışma Günleri // Çalışacak Fonksiyonun 

DayWork( Mysql'den Gelen Veri $veri->calismagunleri yada $veri['calismagunleri'], ' html kodunu boşluk yada başka bir şey için kullanın ' );
DayWork('1,2,3,4,5,6,7','<br>');


Not: Php'nin her türlü versiyonu ve Codeigniter, Laravel ilede çalışır..

// İletişim Numaralarım Bana Ulaşabilirsiniz +90 533 195 69 10 / +90 545 690 20 87 //
