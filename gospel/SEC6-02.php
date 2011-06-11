<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel> 四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel> 第陸段 受難前一週之事跡</h2>
<h3 class=gospel> 第二章 在耶路撒冷的講論</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:20-22&ranges=MAK:11:20-26>論信心的功效</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:21:20-22>21:20-22</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:11:20-26>11:20-26</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:22:15-22&ranges=MAK:12:13-17&ranges=LUK:20:20-26>論納稅的事</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:22:15-22>22:15-22</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:12:13-17>12:13-17</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:20:20-26>20:20-26</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:22:23-33&ranges=MAK:12:18-27&ranges=LUK:20:27-40&ranges=EXO:3:6-6>論復活的事</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:22:23-33>22:23-33</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:12:18-27>12:18-27</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:20:27-40>20:27-40</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=EXO:3:6-6>出 3:6</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:22:34-40&ranges=MAK:12:28-34>論最大的誡命</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:22:34-40>22:34-40</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:12:28-34>12:28-34</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:22:41-46&ranges=MAK:12:35-37&ranges=LUK:20:41-44&ranges=PSM:110:1-1>論基督與大衛的關係</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:22:41-46>22:41-46</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:12:35-37>12:35-37</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:20:41-44>20:41-44</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=PSM:110:1-1>詩110:1</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:23:1-39&ranges=MAK:12:38-40&ranges=LUK:20:45-47>論假冒為善者的光景</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:23:1-39>23:1-39</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:12:38-40>12:38-40</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:20:45-47>20:45-47</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAK:12:41-44&ranges=LUK:21:1-4&ranges=LEV:27:30-30>稱讚寡婦的奉獻</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=MAK:12:41-44>12:41-44</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:21:1-4>21:1-4</a>
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LEV:27:30-30>利27:30</a>
</tr>
</table>

'));

$smarty->display('gospel.tpl');
