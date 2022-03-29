<?php
header('content-type:text/html; charset=euc-kr');

$earth = array();

// earth의 nation 인덱스에 korea 대입

$dr = array();

$dr['continent'] = array();
$dr['continent']['america'] = array();
$dr['continent']['america'][0] = '애너하임';
$dr['continent']['america'][1] = '올랜도';

$dr['continent']['asia'] = array();
$dr['continent']['asia'][0] = '우리야스';
$dr['continent']['asia'][1] = '홍콩';
$dr['continent']['asia'][2] = '상하이';

$dr['continent']['europe'] = array();
$dr['continent']['europe'][0] = '파리';

echo "다음 도시의 공통점은?";
echo "<br><br>";
echo "아메리카: <br>";
echo $dr['continent']['america'][0]."<br>";
echo $dr['continent']['america'][1]."<br>";
echo "<br>";

echo "아시아: <br>";
echo $dr['continent']['asia'][0]."<br>";
echo $dr['continent']['asia'][1]."<br>";
echo $dr['continent']['asia'][2]."<br>";
echo "<br>";

echo "유럽: <br>";
echo $dr['continent']['europe'][0]."<br>";

echo "===========================<br>";
$num = 12;
echo "\$num의 데이터형(값 {$num})은 ".gettype($num);
echo "<br>";

$greeting = "안녕";
echo "\$greetiong의 데이터형 (값 {$greeting})은 ".gettype($greeting)."<br>";

$numStr = "121212";
echo "\$numStr의 데이터형 (값 {$numStr})은 ".gettype($numStr)."<br>";

$fruit = array();
echo "\$fruit의 데이터형 (값 {$fruit})은 ".gettype($fruit)."<br>";

$nai = null;
echo "\$nai의 데이터형(값 {$nai})은".gettype($nai)."<br>";

$boolean = true;
echo "\$boolean의 데이터형 (값 {$boolean})은".gettype($boolean)."<br>";