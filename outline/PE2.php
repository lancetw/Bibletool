<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">彼得後書簡介</h1>
<p>
彼得後書是聖經中的第六十一卷經書，是新約中的第二十二卷。其主要目的在糾正一些假教師們的言論和他在教會中造成的腐敗現象，這些人不義已極，連驢子也會開口斥責(彼後2:16)。</p>
<p>
在當時有人用偏離正道的虛假教訓，教導人放縱情慾，否定基督要再來，彼得駁斥譏誚的人；若非　神寬容，予人多有悔改機會，這世界早已瀕臨毀滅(彼後3:8-12)。</p>
<p>書中流露與保羅深厚的感情，確認保羅所寫的書信與舊約經卷具同等的地位(彼後3:15-16)。
最後勉勵基督徒要得生命成為神國的子民，不是世上的知識，而是對基督的認識，這認識才是我們的榮耀、盼望、倚靠和力量。</p>
<hr>
<h1 ALIGN="center">彼得後書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 問候</td>
<td>1:1-1:2</td>
</tr>
<tr>
<td>二、 基督的美德</td>
<td>1:3-1:11</td>
</tr>
<tr>
<td>三、 寫信的目的和權柄</td>
<td>1:12-1:21</td>
</tr>
<tr>
<td>四、 防備假教師</td>
<td>2:1-2:22</td>
</tr>
<tr>
<td>五、 基督再來的事</td>
<td>3:1-3:16</td>
</tr>
<tr>
<td>六、 結語</td>
<td>3:17-3:18
<hr></td>
</tr>
</table>
<h1 ALIGN="center">彼得後書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2 章</td>
<td ALIGN="center">第 3 章</td>
</tr>
<tr>
<td ALIGN="center">信仰的思慮</td>
<td ALIGN="center">信仰的矛盾</td>
<td ALIGN="center">信仰的完全</td>
</tr>
<tr>
<td ALIGN="center">加上</td>
<td ALIGN="center">護衛</td>
<td ALIGN="center">儆醒</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="3">主後 64-66 年在羅馬</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
