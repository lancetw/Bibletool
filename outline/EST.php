<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">以斯帖記簡介</h1>
<p>
以斯帖記是聖經中的第十七卷經書，也是舊約歷史書中的第十二卷。聖經中以斯拉記、尼希米記和以斯帖記是三卷被擄後的歷史書卷，前二卷是記載　神的兒女在猶大地的歷史，而以斯帖記是記載　神的兒女在外邦的歷史。前二卷說到　神如何眷顧那些歸國的遺民，本卷書則說到　神如何保守那些散居在外邦各地的遺民。</p>
<p>
本卷書有一特點，從沒有一次提到　神的名，提到「王」字的到有二百零九次；提到「亞哈隨魯」王的到有二十四次之多，文字中雖無　神，但所記的每一件事蹟中，都看見有　神，祂無論在大小事上都必定眷顧保守祂的百姓。</p>
<hr>
<h1 ALIGN="center">以斯帖記大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 書珊城波斯王選后</td>
<td>1:1-2:23</td>
</tr>
<tr>
<td>二、 哈曼密謀殺滅猶太人</td>
<td>3:1-5:14</td>
</tr>
<tr>
<td>三、 命運扭轉得慶更生</td>
<td>6:1-9:15</td>
</tr>
<tr>
<td>四、 設立普珥節誌念神拯救</td>
<td>9:16-10:3</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">以斯帖記表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center" COLSPAN="2">大危機</td>
<td ALIGN="center" COLSPAN="2">大平反</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>以斯貼平步青雲</p>
<p>1-2</p>
</td>
<td ALIGN="center">
<p>哈曼的陰謀詭計</p>
<p>3-4</p>
</td>
<td ALIGN="center">
<p>哈曼的奇恥大辱</p>
<p>5-7</p>
</td>
<td ALIGN="center">
<p>末底改平步青雲</p>
<p>8-10</p>
</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">主題</td>
<td ALIGN="center">亞哈隨魯王之宴</td>
<td ALIGN="center">末底改禁食</td>
<td ALIGN="center">以斯帖之宴</td>
<td ALIGN="center">普珥節</td>
</tr>
<tr>
<td ALIGN="center">高升</td>
<td ALIGN="center">迫害</td>
<td ALIGN="center">保護</td>
<td ALIGN="center">慶祝</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="4">波斯</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="4">約 10 年 (主前 483-473 年)</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
