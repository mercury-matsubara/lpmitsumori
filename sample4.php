<link rel="stylesheet" type="text/css" media="print" href="print.css">

<style>

	/*印刷時A4サイズ*/
	div.printpage {
		width: 210mm;
		height: 296mm; /* */
		/*width: 172mm;
		height: 251mm;/**/
		/*border: solid 1px black;		/*ボックス線 消す予定*/
		margin:0px auto;
	}
	
	/*日付、見積No*/
	div.dateBox{
		/*border: solid 1px black;		/*ボックス線 消す予定*/
		position: relative;
		left: 600px;
		top: 40px;/**/
		
	}
	/*日付、見積No*/
	table.date{
		font-size: 11px;
	}

	/*見積書*/
	h1{
		text-align: center;			/*文字位置*/
		font-weight:bold;
		font-size:40px;
		letter-spacing: 15px;
	}
	
	div.title{
		/*height: 250px;/**/
		height: 170px;
		text-align: center;				/*文字位置*/
		/*border: solid 1px black;		/*ボックス線 消す予定*/
		position:relative;				/*位置指定*/
		top:-30px;
	}
	
	p.kigyo{
		/*border-bottom:3px solid black;		/*下線*/
		font-weight: bold;					/*太字*/
		text-align: left;
		font-size:20px;						/*文字大きさ*/
		position:relative;					/*位置指定*/
		/*top:25px;							/*高さ指定*/
	}
	/*下線固定*/
	p.kigyo::before  {
		content: '' ;
		position: absolute;
		bottom: 0px;							/*線の上下位置*/
		width: 530px;							/*線の長さ*/
		height: 2px;							/*線の太さ*/
		/*-moz-transform: translateX(50%);
		-webkit-transform: translateX(50%);*/
		/*-ms-transform: translateX(-50%);*/
		transform: translateX(0%);				/*位置調整*/
		background-color: black ;				/*線の色*/
		
	  }
	p.tanto{
		
		font-weight: bold;					/*太字*/
		text-align: left;
		font-size:15px;						/*文字大きさ*/
		position:relative;					/*位置指定*/
		/*top:15px;							/*高さ指定*/
		left: 30px;
	}
	/*案件名*/
	p.kenmei{
		/*text-decoration: underline;		/*下線*/
		font-weight: bold;					/*太字*/
		text-align: left;
		/*margin-right: 100px;*/
		/*padding-right: 300px;				/*内側余白*/
		font-size:20px;
	}
	/*下線固定*/
	p.kenmei::before {
		content: '';
		position: absolute;
		/*bottom: 125px;							/*線の上下位置*/
		bottom: 45px;
		width: 530px;							/*線の長さ*/
		height: 2px;							/*線の太さ*/
		transform: translateX(0%);				/*位置調整*/
		background-color: black;				/*線の色*/
		
	  }
	
	div.fix{
		/*border: solid 1px black;/**/
		width: 50px;
		height: 30px;
		position: absolute;
		font-size:20px;						/*文字大きさ*/
		top:0px;							/*高さ指定*/
		left:450px;
		font-weight: bold;
	}
	
	div.fix2{
		/*border: solid 1px black;/**/
		width: 50px;
		height: 30px;
		position: absolute;
		font-size:15px;						/*文字大きさ*/
		top:50px;
		left:450px;
		font-weight: bold;
	}

	/******************************金額計、有効期限、自社情報、印鑑**********************************************************/
	 div.box{
		 
		/*border: solid 1px black;		/*ボックス線 消す予定*/
		position:relative;				/*位置指定*/
		top:-60px;						/*高さ*/
		height: 250px;					/*縦幅*/
		margin-bottom: -100px;

	}
	
	/*金額計、有効期限*/
	div.kingakuBox{
		/*text-align: center;			/*文字位置*/
		/*border: solid 1px black;		/*ボックス線 消す予定*/
		position:relative;				/*位置指定*/
		/*top:60px;						/*高さ*/
		/*left: 250px;					/**/
		width:340px;					/*横幅*/
		/*height: 200px;					/*縦幅*/
		/*margin-left:500px				/*余白指定*/
		text-align: left;
		float: left;
		
	}
	
	  /*金額合計*/
	p.kingaku{
		font-weight: bold;					/*太字*/
		font-size:20px;
	}
	  /*下線固定*/
	p.kingaku::before {
		content: '';
		position: absolute;
		/*left: 48%;*/
		bottom: 70px;							/*線の上下位置*/
		/*display: inline-block;*/
		width: 370px;							/*線の長さ*/
		height: 2px;							/*線の太さ*/
		transform: translateX(0%);				/*位置調整*/
		background-color: black;				/*線の色*/
	}
	
	  /*有効期限*/
	p.kigen{
		font-weight: bold;					/*太字*/
		font-size:20px;
	}
	    /*下線固定*/
	p.kigen::before {
		content: '';
		position: absolute;
		/*left: 48%;*/
		bottom: 17px;							/*線の上下位置*/
		/*display: inline-block;*/
		width: 370px;							/*線の長さ*/
		height: 2px;							/*線の太さ*/
		transform: translateX(0%);				/*位置調整*/
		background-color: black;				/*線の色*/
	}
	/*住所、印鑑部分*/
	div.addressBox{
		/*text-align: center;			/*文字位置*/
		/*border: solid 1px black;		/*ボックス線 消す予定*/
		position:relative;				/*位置指定*/
		/*left: 400px;					/*位置調整*/
		top:-20px;						/*高さ*/
		width:310px;					/*横幅*/
		height: 250px;					/*縦幅*/
		margin-left:100px;				/*余白指定*/
		text-align: left;
		float: left;
		font-size: 12px;
		
	}
	
	/*自社情報*/
	p.name{
		font-weight: bold;						/*太字*/
		font-size:16px;
		margin-top: 20px;
		margin-bottom: 1px; 
	}
	
	/*印鑑入力部分*/
	table.inkan{
		border-collapse: collapse;
		border: 1px solid black;
		margin-top: -20px;
		/*margin-right: 70px;*/
	}
	
	/*明細部分*/
	table.meisai{
		
		border-collapse: collapse;
		border-color: black;
		border: none;
		font-size: 11px;
		position:relative;				/*位置指定*/
		top: -70px;
		border: 1px solid black;
	}
	
	/****/
	 tr.color{
		background-color: #C0C0C0;
	}
	td.color{
		background-color: #C0C0C0;
	}

	table.goukei td{
		
		width: 120px;
	}
	
	table.goukei{
		
		position: relative;
		left:217px;
		top: -70px;
		border-collapse: collapse;
		border-color: black;
		border: none;
		border: 1px solid black;
		font-size: 11px;
	}
	

	/*備考部分*/
	div.bikouBox{
		text-align: left;
		/*border: solid 1px black;				/*ボックス線 消す予定*/
		width: 410px;							/*線の長さ*/
		height: 200px;							/*線の太さ*/
		position: relative;
		left:60px;
		bottom:220px
	}
	div.bikou{

		border: solid 2px black;				/*ボックス線*/
		width: 400px;							/*線の長さ*/
		height: 100px;							/*線の太さ*/
		position: relative;
		left:10px;
		bottom:-15px;

	}
	
	
	
	
	/*--------------------------------------------------------------*/
	/*IEのみ適用 START*/
@media all and (-ms-high-contrast:none) {
	
   div.title{
		height: 170px;
		text-align: center;				/*文字位置*/
		/*border: solid 1px black;                      /*ボックス線 消す予定*/
		position:relative;				/*位置指定*/
		top:-10px;
	}
	
	
	
	/*案件名 下線固定*/
	p.kenmei::before {
		content: '';
		position: absolute;
		/*left: 48%;*/
		bottom: 70px;					/*線の上下位置*/
		width: 530px;					/*線の長さ*/
		height: 2px;					/*線の太さ*/
		transform: translateX(0%);                      /*位置調整*/
		background-color: black;			/*線の色*/
		
		}
	
	/*「様」　固定*/
	div.fix2{
		/*border: solid 1px black;/**/
		width: 50px;
		height: 30px;
		position: absolute;
		font-size:15px;					/*文字大きさ*/
		top:40px;
		left:450px;
		font-weight: bold;
	}
	 div.box{
		/*border: solid 1px black;                      /*ボックス線 消す予定*/
		position:relative;				/*位置指定*/
		top:-60px;					/*高さ*/
		height: 190px;					/*縦幅*/
		margin-bottom: -100px;                          /*余白下*/
	}
	  /*金額合計 下線固定*/
	p.kingaku::before {
		content: '';
		position: absolute;
		bottom: 55px;					/*線の上下位置*/
		width: 370px;					/*線の長さ*/
		height: 2px;					/*線の太さ*/
		transform: translateX(0%);			/*位置調整*/
		background-color: black;			/*線の色*/
	}
	
	/*明細部分*/
	table.meisai{
		
		border-collapse: collapse;
		border-color: black;
		border: none;
		font-size: 11px;
		position:relative;				/*位置指定*/
		top: -100px;
		border: 1px solid black;
	}
	
	table.goukei{
		
		position: relative;
		left:213px;
		top: -100px;
		border-collapse: collapse;
		border-color: black;
		border: none;
		border: 1px solid black;
		font-size: 11px;
	}
	/*備考部分*/
	div.bikouBox{
		text-align: left;
		/*border: solid 1px black;				/*ボックス線 消す予定*/
		width: 410px;							/*線の長さ*/
		height: 200px;							/*線の太さ*/
		position: relative;
		left:60px;
		bottom:260px
	}
	div.bikou{

		border: solid 2px black;				/*ボックス線*/
		width: 400px;							/*線の長さ*/
		height: 100px;							/*線の太さ*/
		position: relative;
		left:10px;
		bottom:-30px;

	}
}
/*IEのみ適用 END*/	

/***************************************************************/
/*firefoxのみ適用 START*/
	

/*firefoxのみ適用 END*/

	/********************************************************************************************/
	
/*印刷用css START*/
@media print{
		

	

	/*日付、見積No*/
	div.dateBox{
		/*border: solid 1px black;		/*ボックス線 消す予定*/
		position: absolute;
		left:600px;
		top: 10px;
	}
	
	/*firefoxのみ適用　START*/
    @-moz-document url-prefix() {
			
	/*印鑑入力部分*/
	table.inkan{
		/*border-collapse: collapse;*/
		/*border: 1px solid black;*/
		background-color:#000000;
		border-collapse:separate;
		border-spacing:1px;
		margin-top: -20px;
		/*margin-right: 70px;*/
	}
	table.inkan tr td{
		background-color: #fff;
	}
			
	/*明細部分*/
	table.meisai{
		
		border: 1px solid black;
		background-color:#000000;
		border-collapse:separate;
		border-spacing:1px;
		/*border-collapse: collapse;
		border-color: black;*/
		/*border: none;*/
		font-size: 11px;
		position:relative;				/*位置指定*/
		top: -70px;
	}

        table.goukei{
		
		position: absolute;
		left: 511px;
		top: 905px;
		border: 1px solid black;
		background-color:#000000;
		border-collapse:separate;
		border-spacing:1px;
		font-size: 11px;
	}

	 tr.color{
		background-color: #C0C0C0;
	}
	td.color{
		background-color: #C0C0C0;
	}
	tr.backcolor{
		background-color: #fff;
	}
	td.backcolor{
		background-color: #fff;
	}
	
	table.goukei td{
		width: 120px;
	}
	
	/*備考部分*/
	div.bikouBox{
		text-align: left;
		/*border: solid 1px black;				/*ボックス線 消す予定*/
		width: 410px;							/*線の長さ*/
		height: 200px;							/*線の太さ*/
		position: absolute;
		left:60px;
		bottom:130px
	}
	div.bikou{

		border: solid 2px black;				/*ボックス線*/
		width: 400px;							/*線の長さ*/
		height: 100px;							/*線の太さ*/
		position: relative;
		left:10px;
		bottom:-15px;

	}
	
	
	
	
	}

/*firefoxのみ適用 END*/
	
}
	
	
	
</style>
<?php

//印刷用
echo"<div class='printpage'>";

/*日付、見積No*/
echo"<div class='dateBox'>";
echo"<table class='date'>";
echo"<tr>";
echo"<td>日付:</td>";
echo"<td>9999年Z9月Z9日</td>";
echo"</tr>";
echo"<tr>";
echo"<td>見積No:</td>";
echo"<td>999999999</td>";
echo"</tr>";
echo"</table>";
echo"</div>";

//見積書
echo"<h1>見積書</h1>";


//件名や金額
echo"<div class='title'>";
//企業名
echo"<p class='kigyo'>";
echo"マーキュリーソフト株式会社";
echo"</p>";

/*固定部分*/
echo"<div class='fix'>";
echo"御中";
echo"</div>";

echo"<p class='tanto'>ご担当 : ＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸ </p>";

/*固定部分*/
echo"<div class='fix2'>";
echo"様";
echo"</div>";

echo"<p class='kenmei'>件名: ＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸ";
echo"</div>";


//金額、有効期限、自社情報、印鑑部分の枠
echo"<div class='box'>";

echo"<div class='kingakuBox'>";
echo"下記の通りお見積り申し上げます。";
echo"</br>";
echo"</br>";
echo"</br>";
echo"<p class='kingaku'>金額計(税込)　　　\999,999,999</p>";
echo"<p class='kigen'>有効期限　　　お見積りより1ヶ月間</p>";
echo"</div>";

//自社情報
echo"<div class='addressBox'>";
echo"<p class='name'>マーキュリーソフト株式会社</p>";
echo"<p style='margin:0px;'>〒ＸＸＸ-ＸＸＸ";
echo"</br>";
echo"ＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸ";
echo"</br>";
echo"ＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸＸ";
echo"</br>";
echo"TEL：XXXXXXXXXXXX FAX：XXXXXXXXXXXX";
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

echo"<tr></tr>";


echo"<tr>";
echo"<td></td>";
echo"<td></td>";
echo"<td></td>";
echo"<td></td>";
echo"</tr>";

echo"<tr class='backcolor'>";
echo"<td width='300' align='center'>品名</td>";
echo"<td width='120' align='center'>単価</td>";
echo"<td width='120' align='center'>数量</td>";
echo"<td width='120' align='center'>金額</td>";
echo"</tr>";

echo"</table>";





echo"</div>";
