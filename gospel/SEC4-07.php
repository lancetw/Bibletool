<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第七章  在加利利之工作</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=LUK:7:11-17&ranges=JOB:19:25-25>使寡婦的兒子復生</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:7:11-17>7:11-17</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JOB:19:25-25>19:25</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:11:2-19&ranges=LUK:7:18-35&ranges=MAL:3:1-1>耶穌讚揚施洗約翰</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:11:2-19>11:2-19</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:7:18-35>7:18-35</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=MAL:3:1-1>瑪3:1</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:35-35&ranges=MAK:6:6-6&ranges=LUK:8:1-3>使寡婦的兒子復生</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:35-35>9:35</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:6-6>6:6</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:1-3>8:1-3</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAK:3:20-21>耶穌被親人妄論</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=MAK:3:20-21>3:20-21</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:20-30&ranges=GEN:19:24-30>耶穌論有禍的城</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:20-30>11:20-30</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=GEN:19:24-24>創19:24-24</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');
