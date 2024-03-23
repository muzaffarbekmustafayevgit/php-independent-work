<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
//begin 1
// Kvadratning tomoni
$a = 5; 
// Kvadratning perimetri topish formulasi
$P = 4 * $a;
echo "Kvadratning perimetri: " . $P;
*/

/*
//begin 2
// Kvadratning tomoni
$a = 5; 
// Kvadratning yuzasini topish formulasi
$S = $a * $a;
echo "Kvadratning yuzasi: " . $S;
*/

/*
//begin 3
$a = 5; 
$b = 3; 
// To'g'ri to'rtburchakning yuzasi va perimetrini topish formulasi
$S = $a * $b;
$P = 2 * ($a + $b);
echo "To'g'ri to'rtburchakning yuzasi: " . $S . "\n";
echo "To'g'ri to'rtburchakning perimetri: " . $P . "\n";
*/

/*
//begin 4
$d = 10;
// Pi (π) ning qiymati 
$pi = 3.14;
// Aylananing uzunligi topish formulasi
$L = $pi * $d;
echo "Aylananing uzunligi: " . $L;
*/

/*
//begin 5
$a = 5; //  kubning tomoni
$V = $a * $a * $a; // Kubning hajmini hisoblash
$S = 6 * $a * $a; // Kubning to'la sirtini hisoblash
echo "Kubning hajmi: " . $V . "<br>";
echo "Kubning to'la sirti: " . $S . "<br>";
*/

/*
//begin 6
$a = 3; // Paralelepepidning 1-tomoni
$b = 4; // Paralelepepidning 2-tomoni
$c = 5; // Paralelepepidning 3-tomoni
$V = $a * $b * $c; // Paralelepepidning hajmini hisoblash
$S = 2 * ($a * $b + $b * $c + $a * $c); // Paralelepepidning to'la sirtini hisoblash
echo "Paralelepepidning hajmi: " . $V . "<br>";
echo "Paralelepepidning to'la sirti: " . $S . "<br>";
*/

/*
//begin 7
$R = 5; // Doiraning radiusi
$pi = 3.14; // Pi ning qiymati
$L = 2 * $pi * $R; // Doiraning uzunligini hisoblash
$S = $pi * $R * $R; // Doiraning yuzasini hisoblash
echo "Doiraning uzunligi: " . $L . "<br>";
echo "Doiraning yuzasi: " . $S . "<br>";
*/

/* 
//begin 8
$a = 10; // birinchi son
$b = 15; // ikkinchi son
$arif = ($a + $b) / 2; // O'rta arifmetigini hisoblash
echo "Ikkita sonning o'rta arifmetigi: " . $arif;
*/

/*
//begin 9
$a = 4; // birinchi son
$b = 9; // ikkinchi son
$geometric = sqrt($a * $b); // O'rta geometrigini hisoblash
echo "Ikkita sonning o'rta geometrigi: " . $geometric;
*/

/*
//begin 10
$a = 5; // birinchi son
$b = 8; // ikkinchi son
// Ikkita sonning yig'indisi
$sum = $a + $b;
echo "Ikkita sonning yig'indisi: " . $sum . "<br>";
// Ikkita sonning ko'paytmasi
$kopaytma = $a * $b;
echo "Ikkita sonning ko'paytmasi: " . $kopaytma . "<br>";
// Birinchi sonning kvadrati
$kvadrat1 = $a * $a;
echo "Birinchi sonning kvadrati: " . $kvadrat1 . "<br>";
// Ikkinchi sonning kvadrati
$kvadrat2 = $b * $b;
echo "Ikkinchi sonning kvadrati: " . $kvadrat2 . "<br>";
*/

/*
//integer 1
$L = 275; // uzunlik santimetrda
$metr = $L / 100; // uzunlikni metrlarda hisoblash
echo "To'liq metrlar soni: " . $metr . " m";
*/

/*
//integer 2
$M = 3500; // og'irlik kilogramda
$tonna = $M / 1000; // og'irlikni tonnalarda hisoblash
echo "To'liq tonnalar soni: " . $tonna . " t";
*/

/*
//integer 3
$fileSize = 5120; // fayl hajmi baytlarda
$kilobytes = $fileSize / 1024; // fayl hajmini kilobaytlarda hisoblash
echo "Faylning hajmi: " . $kilobytes . " Kb";
*/

/*
//integer 4
$A = 15; // A kesma
$B = 4; // B kesma
$count = $A % $B; // kesmani joylashtirish 
echo "A kesmada B kesmani joylashtirish mumkinligi: " . $count . " marta";
*/
/*
//integer 5
$A = 15; // A kesma
$B = 4; // B kesma
$count1 = $A % $B;
$count2 = $A / $B; 
echo "A kesmada B kesmani joylashtirish mumkinligi: " . $count2-$count1 . " marta";
*/

/*
//integer 6
$son = 75; // Ikki xonali son
$a=floor($son/10);// O'nliklar xonasidagi raqam
$b = $son % 10; // Birlar xonasidagi raqam
echo "O'nliklar xonasidagi raqam: " . $a . "\n";
echo "Birlar xonasidagi raqam: " . $b;
*/

/*
//integer 7
$son = 75; // Ikki xonali son
$a = floor($son/10); // O'nliklar xonasidagi raqam
$b = $son % 10; // Birlar xonasidagi raqam
$yigindisi = $a + $b; // Raqamlari yig'indisi
echo "Raqamlari yig'indisi: " . $yigindisi;
*/

/*
//integer 8
$son = 75; // Ikki xonali son
$almashtirilganSon = ($son % 10) * 10 + (int)($son / 10); // Raqamlari o'rnini almashtirishdan hosil bo'lgan son
echo "Almashtirilgan son: " . $almashtirilganSon;
*/

/*
//integer 9
$son = 456; // Uch xonali son
$yuzlar = (int)($son / 100) % 10; // Yuzlar xonasidagi raqam
echo "Yuzlar xonasidagi raqam: " . $yuzlar;
*/

/*
//integer 10
$son = 786; // Uch xonali son
$birliklar = $son % 10; // Birliklar xonasidagi raqam
$onliklar = (int)($son / 10) % 10; // O'nliklar xonasidagi raqam
echo "Birliklar xonasidagi raqam: " . $birliklar . "<br>";
echo "O'nliklar xonasidagi raqam: " . $onliklar;
*/

/*
//if 1
$son = -5; // Butun son
if ($son > 0) {
    $son += 1; // Musbat sonni 1 ga oshiramiz
}
echo $son;
*/

/*
//if 2
$son = -8; // Butun son
if ($son > 0) {
    $son += 1; // Musbat sonni 1 ga oshiramiz
} else {
    $son -= 2; // Manfiy sonni 2 ga kamaytiramiz
}
echo $son;
*/

/*
//if 3 
$son = 6; // Butun son
if ($son > 0) {
    $son += 1; // Musbat sonni 1 ga oshiramiz
} elseif ($son < 0) {
    $son -= 2; // Manfiy sonni 2 ga kamaytiramiz
} else {
    $son = 10; // Son 0 ga teng bo'lsa, 10 ni o'zlashtiramiz
}
echo $son;
*/

/*
//if 4
$son1 = 5; // Birinchi son
$son2 = -3; // Ikkinchi son
$son3 = 8; // Uchinchi son
$musbats = 0; // Musbat sonlar soni
if ($son1 > 0) {
    $musbats++;
}
if ($son2 > 0) {
    $musbats++;
}
if ($son3 > 0) {
    $musbats++;
}
echo $musbats;
*/

/*
//if 5
$son1 = 5; // Birinchi son
$son2 = -3; // Ikkinchi son
$son3 = 8; // Uchinchi son

$musbatSonlar = 0;
$manfiySonlar = 0;

if ($son1 > 0) {
    $musbatSonlar++;
} elseif ($son1 < 0) {
    $manfiySonlar++;
}

if ($son2 > 0) {
    $musbatSonlar++;
} elseif ($son2 < 0) {
    $manfiySonlar++;
}

if ($son3 > 0) {
    $musbatSonlar++;
} elseif ($son3 < 0) {
    $manfiySonlar++;
}

echo "Musbat sonlar soni: " . $musbatSonlar . "<br>";
echo "Manfiy sonlar soni: " . $manfiySonlar;
*/

/*
// if 6
$son1 = 5; // Birinchi son
$son2 = 8; // Ikkinchi son
$kattaSon = ($son1 > $son2) ? $son1 : $son2;
echo "Kattasi: " . $kattaSon;
 */

 /*
 //if 7
$son1 = 5; // Birinchi son
$son2 = 8; // Ikkinchi son
$kichikSon = ($son1 < $son2) ? $son1 : $son2;
echo "Kichigi: " . $kichikSon;
*/

 /*
 //if 8
$son1 = 5; // Birinchi son
$son2 = 8; // Ikkinchi son
if ($son1 > $son2) {
    $kattaSon = $son1;
    $kichikSon = $son2;
} else {
    $kattaSon = $son2;
    $kichikSon = $son1;
}
echo "Avval katta son: " . $kattaSon . "<br>";
echo "Keyin kichik son: " . $kichikSon;
 */

 /*
 //if 9
$a = 10; // A soni
$b = 5; // B soni
if ($a < $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}
echo "A soni: " . $a . "<br>";
echo "B soni: " . $b;
 */
/*
//if 10
$a = 20; // A soni
$b = 10; // B soni
if ($a != $b) {
    $result = $a + $b;
} else {
    $result = 0;
}
echo "A soni: " . $a . "<br>";
echo "B soni: " . $b . "<br>";
echo "Natija: " . $result;
*/
?>
</body>
</html>