<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第十一章  差遣十二門徒傳道</h3>
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
        <td class=gospel><a href=../retrieve/?ranges=MAT:9:36-38&ranges=MAK:6:7-7&ranges=LUK:9:1-2>差遣動機</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:9:36-38>9:36-38</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:7-7>6:7</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:28-34>9:1-2</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:10:1-4>使徒姓名</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:10:1-4>10:1-4</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
        <td class=gospel><a href=../retrieve/?ranges=MAT:10:5-42&ranges=MAK:6:8-11&ranges=LUK:9:3-5&ranges=1CO:9:14-14>教導和勉勵</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:10:5-42>10:5-42</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:8-11>6:8-11</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:3-5>9:3-5</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=1CO:9:14-14>林前9:14</a>
</tr>
<tr class=gospel>
        <td class=gospel><a href=../retrieve/?ranges=MAT:11:1-1&ranges=MAK:6:12-13&ranges=LUK:9:6-6>外出工作</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:11:1-1>11:1</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:12-13>6:12-13</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:6-6>9:6</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
        <td class=gospel><a href=../retrieve/?ranges=MAT:14:12-13&ranges=MAK:6:30-32&ranges=LUK:9:10-10>回報傳道經過</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:12-13>14:12-13</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:30-32>6:30-32</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:9:10-10>9:10</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>	
</table>

'));

$smarty->display('gospel.tpl');
