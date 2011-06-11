<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<h2 class=gospel>第陸段 受難前一週之事跡</h2>
<h3 class=gospel>第十一章 各各他的十字架</h3>
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
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:26-26&ranges=MAK:15:15-15&ranges=LUK:23:25-25&ranges=JHN:19:16-16>往各各他的途中</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:26-26>27:26</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:15-15>15:15</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:25-25>23:25</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:16-16>19:16</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:32-32&ranges=MAK:15:21-21&ranges=LUK:23:26-26&ranges=JHN:19:17-17>古利奈人西門</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:32-32>27:32</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:21-21>15:21</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:26-26>23:26</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:17-17>19:17</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:27-31>勸戒眾婦女</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:27-31>23:27-31</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:38-38&ranges=MAK:15:27-27&ranges=LUK:23:32-33&ranges=JHN:19:18-18>與強盜同釘十架</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:38-38>27:38</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:27-27>15:27</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:32-33>23:32-33</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:18-18>19:18</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:33-44&ranges=MAK:15:22-32&ranges=LUK:23:33-38&ranges=JHN:19:19-22>在十字架上被譏誚</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:33-44>27:33-44</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:22-32>15:22-32</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:33-38>23:33-38</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:19-22>19:19-22</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:33-44&ranges=MAK:15:22-32&ranges=LUK:23:33-38&ranges=JHN:19:19-22>在十字架上被譏誚</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:33-44>27:33-44</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:22-32>15:22-32</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:33-38>23:33-38</a>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:19-22>19:19-22</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:25-27>耶穌安慰母親</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:25-27>19:25-27</a>
	<td class=gospel>&nbsp;
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:25-27&ranges=EXO:12:46>肋旁被扎</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
	<td class=gospel><a href=../retrieve/?ranges=JHN:19:25-27>19:25-27</a>
	<td class=gospel><a href=../retrieve/?ranges=EXO:12:46>出12:46</a>
</tr>
<tr class=gospel>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:51-56&ranges=MAK:15:38-41&ranges=LUK:23:45-49>聖殿幔子與墳墓裂開</a>
	<td class=gospel><a href=../retrieve/?ranges=MAT:27:51-56>27:51-56</a>
	<td class=gospel><a href=../retrieve/?ranges=MAK:15:38-41>15:38-41</a>
	<td class=gospel><a href=../retrieve/?ranges=LUK:23:45-49>23:45-49</a>
	<td class=gospel>&nbsp;
	<td class=gospel>&nbsp;
</tr>
</table>

'));

$smarty->display('gospel.tpl');
