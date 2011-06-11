<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第四段  第二年之傳道工作</h2>
<h3 class=gospel>第十章  在加利利行的神蹟大能</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=LUK:7:11-17>使寡婦的兒子復生</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:7:11-17>7:11-17</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:22-23&ranges=LUK:11:14-14>趕出叫人瞎啞的鬼</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:12:22-23>12:22-23</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:11:14-14>11:14</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:23-27&ranges=MAK:4:35-41&ranges=LUK:8:22-25>平靜風和海</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:23-27>8:23-27</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:4:35-41>4:35-41</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:22-25>8:22-25</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:28-34&ranges=MAK:5:1-20>趕遂污鬼入豬群</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:8:28-34>8:28-34</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:5:1-20>5:1-20</a>
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:14-21&ranges=MAK:6:33-44&LUK:9:11-17&ranges=JHN:6:1-14>五餅二魚的神蹟</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:14-21>14:14-21</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:33-44>6:33-44</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:8:28-34>9:11-17</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:5:1-20>6:1-14</a>
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:22-33&ranges=MAK:6:45-52&ranges=JHN:6:15-21>耶穌在海面行走</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:22-33>14:22-33</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:33-44>6:45-52</a>
        <td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:5:15-21>6:15-21</a>
        <td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:34-36&ranges=MAK:6:53-56>耶穌在海面行走</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:14:34-36>14:34-36</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:6:53-56>6:53-56</a>
        <td class=gospel>&nbsp;
    	<td class=gospel>&nbsp;
        <td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
