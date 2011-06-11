<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">約翰一書簡介</h1>
<p>
約翰一書是聖經中的第六十二卷經書，是新約中的第二十三卷。是耶穌的門徒約翰寫給小亞細亞(今土耳其)一帶教會的短信。有二個主要目的：</p>
<p>一、鼓勵信徒跟　神和祂的兒子耶穌基督要有親密的交通。</p>
<p>二、警告信徒不可聽信些會破壞與　神交通的異端言論。</p>
<p>
這種異端言論認為罪惡是與物質世界接觸而產生，否認耶穌是　神的兒子，這些假教師主張要得救就是擺脫對今世生活的一切關懷，得救跟道德生活或愛人並沒有關係，彼得反駁這些異端，指出耶穌基督是起初原有的生命之道，是他親眼所見，親耳所聽到的，同時強調一切信耶穌、愛　神的人都必須彼此相愛。</p>
<p>本卷書以永遠的生命開始(約壹1:2),也以永生作終結(約壹5:20)。只要有信心，人人可認識　神，得到祂才能賜給的永生。</p>
<hr>
<h1 ALIGN="center">約翰一書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 問候</td>
<td>1:1-1:4</td>
</tr>
<tr>
<td>二、 信徒應在光中行</td>
<td>1:5-2:29</td>
</tr>
<tr>
<td>三、 神就是愛</td>
<td>3:1-4:21</td>
</tr>
<tr>
<td>四、 信心可以勝過世界</td>
<td>5:1-5:12</td>
</tr>
<tr>
<td>五、 結語：認識神得永生</td>
<td>5:13-5:21</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">約翰一書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2-3 章</td>
<td ALIGN="center">第 4-5 章</td>
</tr>
<tr>
<td ALIGN="center">愛的宣言</td>
<td ALIGN="center">愛的實踐</td>
<td ALIGN="center">堅忍的愛</td>
</tr>
<tr>
<td ALIGN="center">根基</td>
<td ALIGN="center">相交</td>
<td ALIGN="center">跟隨</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="3">主後 90 年在以弗所</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
