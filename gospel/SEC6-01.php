<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第陸段 受難前一週之事跡</h2>
<h3 class=gospel>第一章 四月二日騎驢進京</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:1-11&ranges=MAK:11:1-11&ranges=LUK:19:29-40&ranges=JHN:12:12-19&ranges=ZEC:9:9-9>耶穌騎驢進京</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:1-11>21:1-11</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:1-11>11:1-11</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:19:29-40>19:29-40</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=ZEC:9:9-9>亞9:9-9</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:19:41-44>為聖城哀哭</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:19:29-40>19:29-40</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:17-19&ranges=MAK:11:12-14>咒詛無花果樹</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:17-19>21:17-19</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:12-14>11:12-14</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:12-16&ranges=MAK:11:15-17&ranges=LUK:19:45-46&ranges=JER:7:11-11>第二次潔淨聖澱</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:12-16>21:12-16</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:15-17>11:15-17</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:19:45-46>19:45-46</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JER:7:11-11>耶7:11</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:11:18-18&ranges=LUK:19:45-46>祭司長想滅耶穌</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:11:18-18>21:12-16</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:19:45-46>19:45-46</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:19-19&ranges=LUK:21:37-38>夜宿橄欖山</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:19-19>19:19</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:19:45-46>21:37-38</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
