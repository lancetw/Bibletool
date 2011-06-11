<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合--主耶穌基督微行錄</h1>
<h2 class=gospel>第捌段 附錄</h2>
<h3 class=gospel>附錄B.主耶穌所講的比喻之二</h3>
<h4>自然事物之比喻</h4>
<table class=gospel border=1>
<tr class=gospel>
	<th class=gospel>二、自然事物
	<th class=gospel>時間
	<th class=gospel>馬太
	<th class=gospel>馬可
	<th class=gospel>路加
	<th class=gospel>約翰
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:16-16&ranges=MAK:2:21-21&ranges=LUK:5:36-36>新舊衣服</a>
	<th class=gospel>AD.28年春
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:16-16>9:16</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:2:21-21>2:21</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:5:36-36>5:36</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:17-17&ranges=MAK:2:22-22&ranges=LUK:5:37-38>新酒舊袋</a>
	<th class=gospel>AD.28年春
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:17-17>9:17</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:2:22-22>2:22</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:5:37-38>5:37-38</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:7:24-27&ranges=LUK:6:47-49>兩種根基</a>
	<th class=gospel>AD.28年春
	<td class=gospel><a href=../retrieve/?ranges=MAT:7:24-27>7:24-27</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:6:47-49>6:47-49</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:5:14-15&ranges=MAK:4:21-22&ranges=LUK:8:16-17&ranges=LUK:11:33-36>燈與眼睛</a>
	<th class=gospel>AD.30年1月
	<td class=gospel><a href=../retrieve/?ranges=MAT:5:14-15>5:14-15</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:4:21-22>4:21-22</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:16-17>11:33-36</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:44-44>隱藏珍寶</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:44-44>13:44</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:45-46>無價珠寶</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:45-46>13:45-46</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:47-50>撒網</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:47-50>13:47-50</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:33-33&ranges=LUK:13:20-21>麵酵</a>
	<th class=gospel>AD.28年秋
	<td class=gospel><a href=../retrieve/?ranges=MAT:13:33-33>13:33</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:13:20-21>13:20-21</a>
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
