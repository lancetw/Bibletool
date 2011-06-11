<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">撒迦利亞書簡介</h1>
<p>
撒迦利亞書是全部聖經中第三十八卷書，撒迦利亞生在巴比倫，隨被擄的猶太人一同回到耶路撒冷，身兼祭司和先知的雙重身份。撒迦利亞書可分為兩部：一、先知撒迦利亞的預言(亞1:1-8:23)，時間在主前520-518年之間。
這些預言多半以異象的方式表達，內容包括關於耶路撒冷的復興、聖殿的重建、　神子民得蒙潔淨，和彌賽亞時代的來臨。二、有關彌賽亞和最後的審判(亞9:1-14:21),為先知後期之作，信息中預言將有一位謙和王騎著驢駒受耶路撒冷居民歡呼，以及用三十塊錢作為大牧者的工價等，均為新約聖經所引用，因為都準確應驗在耶穌基督的身上。</p>
<hr>
<h1 ALIGN="center">撒迦利亞書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 序介</td>
<td>1:1</td>
</tr>
<tr>
<td>二、 呼籲百姓悔改</td>
<td>1:7-6:15</td>
</tr>
<tr>
<td>番石榴樹中間神的使者-神看顧猶大</td>
<td>1:7-1:17</td>
</tr>
<tr>
<td>四角與四匠-猶大的仇敵遭毀滅</td>
<td>1:18-1:21</td>
</tr>
<tr>
<td>拉準繩的人-耶城將興旺</td>
<td>2:1-2:13</td>
</tr>
<tr>
<td>約書亞去舊衣換新衣-百姓的罪得除</td>
<td>3:1-3:10</td>
</tr>
<tr>
<td>金燈臺-神必保守建殿工作</td>
<td>4:1-4:14</td>
</tr>
<tr>
<td>飛行的書卷-違反律法者的刑罰</td>
<td>5:1-5:4</td>
</tr>
<tr>
<td>量器被抬走-罪惡為神除去</td>
<td>5:5-5:11</td>
</tr>
<tr>
<td>四戰車-神對諸國的處置</td>
<td>6:1-6:8</td>
</tr>
<tr>
<td>為約書亞加冕</td>
<td>6:9-6:15</td>
</tr>
<tr>
<td>四、 關於禁食的詢問和回答</td>
<td>7:1-8:23</td>
</tr>
<tr>
<td>五、 以色列與各國的將來及彌賽亞國度</td>
<td>9:1-14:21</td>
</tr>
<tr>
<td>第一次默示：彌賽亞的降臨和被拒</td>
<td>9:1-11:17</td>
</tr>
<tr>
<td>第二次默示：彌賽亞的降臨和作王</td>
<td>12:1-14:21</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">撒迦利亞表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center" COLSPAN="3">異象</td>
<td ALIGN="center">問題</td>
<td ALIGN="center" COLSPAN="2">預言</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>馬四與四角</p>
<p>1-2</p>
</td>
<td ALIGN="center">
<p>七燈與二樹</p>
<p>3-4</p>
</td>
<td ALIGN="center">
<p>馬車與金冠</p>
<p>5-6</p>
</td>
<td ALIGN="center">
<p>禁食與歡宴</p>
<p>7-8</p>
</td>
<td ALIGN="center">
<p>以色列未來的軍王</p>
<p>9-11</p>
</td>
<td ALIGN="center">
<p>以色列將來的安慰</p>
<p>12-14</p>
</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">主題</td>
<td ALIGN="center" COLSPAN="4">以列的現況</td>
<td ALIGN="center" COLSPAN="2">錯誤的優先順序</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="4">以色列的末來</td>
<td ALIGN="center" COLSPAN="2">彌賽亞的預言</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="6">耶路撒泠</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="4">重建聖殿時期</td>
<td ALIGN="center" COLSPAN="2">重建聖殿之後</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
