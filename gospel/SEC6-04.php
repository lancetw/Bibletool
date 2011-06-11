<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第陸段 受難前一週之事跡</h2>
<h3 class=gospel>第四章 耶穌論要來的事</h3>
<table class=gospel border=1>
<tr class=gospel>
	<th class=gospel>分節標題
	<th class=gospel>馬太
	<th class=gospel>馬可
	<th class=gospel>路加
	<th class=gospel>約翰
	<th class=gospel>參考經文
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:24:1-27&ranges=MAK:13:1-13&ranges=LUK:21:5-19&ranges=DAN:12:1-1>預言聖殿被拆</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:24:1-14>24:1-14</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:13:1-13>13:1-13</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:20:1-8>21:5-19</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=DAN:12:1-1>但12:1</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:24:15-31&ranges=MAK:13:1-13&ranges=LUK:21:5-19&ranges=DAN:12:1-1>耶穌再臨的預兆</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:24:15-31>24:15-31</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:13:14-17>13:14-17</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:20:20-28>21:20-28</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:32:32-51&ranges=MAK:13:28-37&ranges=LUK:20:20-28>敬醒的勸勉</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:24:32-51>24:32-51</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:13:28-37>13:28-37</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:20:20-28>20:20-28</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:25:1-13&ranges=ZEC:14:5-5>十個童女的比喻</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:25:1-13>25:1-13</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=ZEC:14:5-5>亞14:5</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:25:14-30>分銀與算賬的比喻</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:25:14-30>25:14-30</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:25:31-46>綿羊與山羊的比喻</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:25:31-46>25:31-46</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
