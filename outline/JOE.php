<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">約珥書簡介</h1>
<p>
約珥書是全部聖經中第二十九卷書，約珥是毘土珥的兒子，本卷書的中心信息是「耶和華的日子臨近了」，約珥從　神那堭得到默示，看到猶大地幾至荒涼的蝗災是神的刑罰，也是耶和華大而可畏的日子的先兆。成秡結隊而來遮蔽天日的蝗蟲是耶和華的軍旅，促世人醒悟，因祂的日子已臨近，也是離棄　神的以色列人受刑罰的時候，審判過後才有和平。約珥的預言已部份應驗於主基督的來到世上和聖靈的降臨。使徒彼得在五旬節那日為此作見證說：「這正是先知約珥所說的」(徒2:16-21),當基督再來時,祂要施行的審判，這預言(珥2:30-32;3:1-21)
要到那日才會完全應</p>
<h1 ALIGN="center">約珥書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 序介</td>
<td>1:1</td>
</tr>
<tr>
<td>二、 蝗蟲之災,促民悔改</td>
<td>1:2-2:17</td>
</tr>
<tr>
<td>三、 耶和華的日子：審判和祝福</td>
<td>2:18-3:21</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">約珥書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2 章</td>
<td ALIGN="center" COLSPAN="2">第 3 章</td>
</tr>
<tr>
<td ALIGN="center">蝗蟲的日子</td>
<td ALIGN="center">耶和華的日子</td>
<td ALIGN="center">對萬國的審判</td>
<td ALIGN="center">給猶大的祝福</td>
</tr>
<tr>
<td ALIGN="center">災難</td>
<td ALIGN="center" COLSPAN="2">審判</td>
<td ALIGN="center">昌勝</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
