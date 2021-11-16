
<!DOCTYPE html PUBLIC "-//W3C/DTD HTML 4.01">

		<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">

		<link rel="stylesheet" type="text/css"  href="display.css">
		
		<link rel="stylesheet" type="text/css" href="print.css" media="print">	
		<style>
		
		</style>	
<?php


require_once ("f_DB.php");
require_once ("f_Form.php");
require_once ("f_SQL.php");

$kaisha= "";
$tantou = "";
$kenmei="";
$limitday = "";
$total = "";
$smalltotal = "";
$hiname = array();
$tanka = array();
$suryo=array();
$tani = array();
$money = array();
$zeikomitotal = "";

$con = dbconect();
//案件情報から、案件名、顧客コード、担当名抽出
$sql = "select * from ankeninfo where ANKCODE = 1";
$result = $con->query($sql) or die($con-> error);
while($result_row = $result->fetch_array(MYSQLI_ASSOC))
{
	$kenmei = $result_row['ANKENMEI'];
	$kaishacode = $result_row['KYACODE'];
	$tantou = $result_row['TANTOMEI'];
}

//顧客マスターから顧客情報抽出
$sqlkya = "select * from kokyakumaster where KYACODE = $kaishacode ";
$result2 = $con->query($sqlkya) or die($con-> error);
while($result2_row = $result2->fetch_array(MYSQLI_ASSOC))
{
	$kaisha = $result2_row['KOKYAKUMEI'];
}

//見積登録から飛んだ場合get情報から抽出
//見積情報から金額計、有効期限を抽出
$sqlmi  = "select * from mitsumoriinfo where MMHCODE = 1";
$result3 = $con->query($sqlmi) or die($con-> error);
while($result3_row = $result3->fetch_array(MYSQLI_ASSOC))
{
	$total = $result3_row['KINGAKUKEI'];
	$limitday = $result3_row['YUKOKIGEN'];
	$biko = $result3_row['BIKO'];
	$date = $result3_row['MITUMORIBI'];
	$No = $result3_row['MMHCODE'];
}
//税込み合計8%
$zeikomitotal = $total * 1.08;
$zeikomitotal2 = $total * 1.1;
//カンマ区切り処理
$zeikomitotal = number_format($zeikomitotal);
$zeikomitotal2 = number_format($zeikomitotal2);
//小計
$shoukei = number_format($total);

//見積明細明細から情報を抽出
$sqlmei = "select * from mitsumorimeisaiinfo where MMHCODE = 1";
$result4 = $con->query($sqlmei) or die($con->error);
$i = 0;
while($result4_row = $result4->fetch_array(MYSQLI_ASSOC))
{
	$hinmei[$i] = $result4_row['HINMEI'];	//品名
	$tanka[$i] = $result4_row['TANKA'];		//単価
	$suryo[$i] = $result4_row['SURYO'];		//数量
	$tani[$i] = $result4_row['TANNI'];		//単位
	$money[$i] = $result4_row['KINGAKU'];	//金額
	
	$i++;
}

//印刷用
echo"<div class='printpage'>";
//日付分解
 $date = explode('-', $date);
/*日付、見積No*/
echo"<div class='dateBox'>";
echo"<table class='date'>";
echo"<tr>";
echo"<td>日付:</td>";
echo"<td>$date[0]年$date[1]月$date[2]日</td>";
echo"</tr>";
echo"<tr>";
echo"<td>見積No:</td>";
echo"<td>$No</td>";
echo"</tr>";
echo"</table>";
echo"</div>";

//見積書
echo"<h2>見積書</h2>";


//件名や金額
echo"<div class='title'>";
//企業名
echo"<p class='kigyo'>";
//echo"マーキュリーソフト株式会社";
echo"$kaisha";
echo"</p>";

/*固定部分*/
echo"<div class='fix'>";
echo"御中";
echo"</div>";

//echo"<p class='tanto'>ご担当 : ＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸ </p>";
echo"<p class='tanto'>ご担当 : $tantou </p>";

/*固定部分*/
echo"<div class='fix2'>";
echo"様";
echo"</div>";

//echo"<p class='kenmei'>件名: ＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸ";
echo"<p class='kenmei'>件名: $kenmei";
echo"</div>";


//金額、有効期限、自社情報、印鑑部分の枠
echo"<div class='box'>";

echo"<div class='kingakuBox'>";
echo"下記の通りお見積り申し上げます。";
echo"</br>";
echo"</br>";
echo"</br>";
echo"<p class='kingaku'>金額計(税込)　　　\ $zeikomitotal</p>";
echo"<p class='kigen'>有効期限　　　お見積りより$limitday</p>";

echo"</div>";

//自社情報
echo"<div class='addressBox'>";
echo"<p class='name'>マーキュリーソフト株式会社</p>";
echo"<p style='margin:0px;'>〒460-0026";
echo"</br>";
echo"愛知県名古屋市中区伊勢山二丁目8-21";
echo"</br>";
echo"NKCBLD4F";
echo"</br>";
echo"TEL：053000000 FAX：053000000";
echo"</p>";


echo"</br>";
echo"</br>";

//印鑑押す
echo"<table class='inkan' border='1' align='right' >";

echo"<tr>";
echo"<td width='80' align='center'>承認</td>";
echo"<td width='80' align='center'>審査</td>";
echo"<td width='80' align='center'>担当</td>";
echo"</tr>";

echo"<tr>";
echo"<td height='80'></td>";
echo"<td></td>";
echo"<td></td>";
echo"</tr>";

echo"</table>";
echo"</div>";

echo"</div>";

//明細部分
echo"<table class='meisai' border='1' align='center'>";

echo"<tr class='backcolor'>";
echo"<td width='300' align='center'>品名</td>";
echo"<td width='120' align='center'>単価</td>";
echo"<td width='120' align='center'>数量</td>";
echo"<td width='120' align='center'>金額</td>";
echo"</tr>";

for($i = 0; $i < 15; $i++)
{
	if(($i%2) == 1)
	{
		$id = 'class = "color"';
	}
	else
	{
		$id = 'class = "backcolor"';
	}
	
	echo"<tr $id>";
	//品名
	echo"<td height='27' align='center' >$hinmei[$i]</td>";
	//単価
	if($tanka[$i] != 0)
	{
		$tanka[$i] = number_format($tanka[$i]);
		echo"<td  align='right'>\ $tanka[$i]</td>";
	}
	else
	{
		$tanka[$i] = "";
		echo"<td  align='right'></td>";
	}
	//数量
	if($suryo[$i] != 0)
	{
		$suryo[$i] = number_format($suryo[$i]);
		echo"<td  align='center'>$suryo[$i]$tani[$i]</td>";
	}
	else
	{
		$suryo[$i] = "";
		echo"<td  align='right'></td>";
	}
	//金額
	if($money[$i] != 0)
	{
		$money[$i] = number_format($money[$i]);
		echo"<td  align='right'>\ $money[$i]</td>";
	}	
	else
	{
		$money[$i] = "";
		echo"<td  align='right'></td>";
	}	
	
	echo"</tr>";
}
echo"</table>";
echo"<table border='1' align='center' class='goukei'>";

echo"<tr><td height='30' align='center' class='color'>小計</td><td class='backcolor' align='right'>\ $shoukei</td></tr>";
echo"<tr><td height='26' align='center' class='color'>軽減税率(8%)対象額</td><td class='backcolor' align='right'>\ $zeikomitotal</td></tr>";
echo"<tr><td height='26' align='center' class='color'>消費税(8%)</td><td class='backcolor' align='right'>\ $zeikomitotal</td></tr>";
echo"<tr><td height='26' align='center' class='color'>消費税(10%)対象額</td><td class='backcolor' align='right'>\ $zeikomitotal2</td></tr>";
echo"<tr><td height='26' align='center' class='color'>消費税(10%)</td><td class='backcolor' align='right'>\ $zeikomitotal2</td></tr>";
echo"<tr><td height='30' align='center' class='color'>合計</td><td class='backcolor' align='right'>\ $zeikomitotal</td></tr>";

echo"</table>";


echo"<div class='bikouBox'>";
echo"※は軽減税率対象";

echo"<div class='bikou'>";
echo"<p>$biko</p>";
echo"</div>";
echo"</div>";


echo"</div>";


echo"</div>";


 echo'<input type="button" value="印刷" class="free" id="print" onClick="window.print()">';
?>
</html>