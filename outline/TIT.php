<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">提多書簡介</h1>
<p>
提多書是聖經中的第五十六卷經書，是新約中的第十七卷。提多書是保羅教牧書信中最短的一卷，是寫給年輕同工提多。提多是希臘人，也是保羅的同工，曾隨保羅在歐、亞一帶傳道，後在革哩底牧養教會，負擔相當艱難的牧養工作。</p>
<p>
提前是教導如何組織教會，提後是教道教會如何盡傳道的責任；而提多書的主題是如何在生活中見證所信的，因此對不同年齡、性別和地位的信徒都有十分具體的教導。純正的信仰應體現在敬虔的日常的生活中。</p>
<p>
本卷書提出做教會領袖的資格，也指出信徒在社會上應盡的責任，並突出基督徒的美德─和平與溫柔，學效主耶穌的柔和與謙卑，熱心服事人。不要把有用的光陰浪費在無益的論辯上；同時提防動機不正，心地不潔的人，破壞信徒和家人的敬虔生活，這些教訓不僅是對革哩底島的教會講的，也是對現代信徒說的。</p>
<hr>
<h1 ALIGN="center">提多書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、問候</td>
<td>1:1-1:4</td>
</tr>
<tr>
<td>二、長老的資格</td>
<td>1:5-1:9</td>
</tr>
<tr>
<td>三、假教師的污穢</td>
<td>1:10-1:16</td>
</tr>
<tr>
<td>四、信徒的品德</td>
<td>2:1-2:15</td>
</tr>
<tr>
<td>五、警戒背道的事</td>
<td>3:1-3:11</td>
</tr>
<tr>
<td>六、結語</td>
<td>3:12-3:15</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">提多書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2 章</td>
<td ALIGN="center">第 3 章</td>
</tr>
<tr>
<td ALIGN="center">神揀選的人</td>
<td ALIGN="center">神用的態度</td>
<td ALIGN="center">神行的神蹟</td>
</tr>
<tr>
<td ALIGN="center">僕人</td>
<td ALIGN="center">服事</td>
<td ALIGN="center">救恩</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="4">主後 63 年在哥林多</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
