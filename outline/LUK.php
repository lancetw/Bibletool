<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">路加福音簡介</h1>
<p>路加福音是全部聖經中的第四十三卷經書，是新約聖經中的第三卷，也是四福音書中的第三卷。</p>
<p>路加福音的作者是位醫生名叫路加。全卷書的主要信息是告訴我們，耶穌是　神應許賜給以色列人的拯救者，也是全人類的救主。</p>
<p>
路加以生動的文筆描述耶穌的一生，從家庭背景、馬棚出生，到加利利傳道又在耶路撒冷受審及各各他山被釘死，最後以復活升天給信祂的人帶來全新的盼望。全書著重祈禱，聖靈在耶穌事工上的重要作用，特別強調出─耶穌是一位完全人。</p>
<hr>
<h1 ALIGN="center">路加福音大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 引言</td>
<td>1:1-1:4</td>
</tr>
<tr>
<td>二、 基督耶穌降生的宣告</td>
<td>1:5-2:52</td>
</tr>
<tr>
<td>三、 基督向猶太人顯現</td>
<td>3:1-2:52</td>
</tr>
<tr>
<td>四、 基督的傳道工作</td>
<td>4:16-9:50</td>
</tr>
<tr>
<td>五、 十字架的道路</td>
<td>9:51-18:30</td>
</tr>
<tr>
<td>六、 基督受苦犧牲</td>
<td>18:31-23:56</td>
</tr>
<tr>
<td>七、 基督復活</td>
<td>24:1-24:53</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">路加福音表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center">降臨</td>
<td ALIGN="center" COLSPAN="2">活動</td>
<td ALIGN="center" COLSPAN="3">敵對</td>
<td ALIGN="center">證實</td>
</tr>
<tr>
<td ALIGN="center">分段</td>
<td ALIGN="center">
<p>人子的降臨</p>
<p>1-2</p>
</td>
<td ALIGN="center">
<p>人子的權威</p>
<p>3-6</p>
</td>
<td ALIGN="center">
<p>人子的服事</p>
<p>7-9</p>
</td>
<td ALIGN="center">
<p>人子的遣責</p>
<p>10-12</p>
</td>
<td ALIGN="center">
<p>人子的比喻</p>
<p>13-18</p>
</td>
<td ALIGN="center">
<p>人子的教導</p>
<p>19-21</p>
</td>
<td ALIGN="center">
<p>人子的勝利</p>
<p>22-24</p>
</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">主題</td>
<td ALIGN="center" COLSPAN="5">尋找失喪的人</td>
<td ALIGN="center" COLSPAN="2">拯救失喪的人</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="2">同在</td>
<td ALIGN="center" COLSPAN="3">教導</td>
<td ALIGN="center" COLSPAN="2">受難</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="3">拿撒勒與加利利</td>
<td ALIGN="center" COLSPAN="4">耶路撒冷</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="7">主前 5 年至主後 33 年</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
