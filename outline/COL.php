<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">歌羅西書簡介</h1>
<p>
歌羅西書是聖經中的第五十一卷經書，是新約中的第十二卷。歌羅西書是保羅寫給歌羅西教會的一封書信。歌羅西是小亞細亞省以弗所東邊的一個城市。歌羅西教會不是保羅建立的，但保羅對歌羅西有很大的負擔，曾從以弗所派遣同工到那堣u作。保羅聽見歌羅西教會出現假教師；那些假教師；堅特人若要認識　神，獲得完全的救恩，必須崇拜某些「靈界的首領和權威」。他們又主張：人必須遵守特別禮儀如割禮等，也必須恪遵守有關食物和其他的一些規例。</p>
<p>
保羅根據福音真理，反對這樣的教導，他認為耶穌基督有完全的救恩，其他的方法反而把人引入歧途，離開了基督。　神藉基督創造世界，也藉基督使世界歸於祂。只有跟基督結連，世界才有希望。保羅也明言這重要的教訓在基督徒生活上的重大意義。</p>
<p>註 : 以弗所書、腓立比書、歌羅西書和腓立門書同稱為保羅的「獄中書簡」</p>
<hr>
<h1 ALIGN="center">歌羅西書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 引言</td>
<td>1:1-1:14</td>
</tr>
<tr>
<td>二、 對信仰的關切</td>
<td>1:15-2:33</td>
</tr>
<tr>
<td>三、 新生活的原則</td>
<td>3:1-4:6</td>
</tr>
<tr>
<td>四、 結論</td>
<td>4:7-4:18</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">歌羅西書表解</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2 章</td>
<td ALIGN="center">第 3 章</td>
<td ALIGN="center">第 4 章</td>
</tr>
<tr>
<td ALIGN="center">教會</td>
<td ALIGN="center">宇宙</td>
<td ALIGN="center">家庭</td>
<td ALIGN="center">世人</td>
</tr>
<tr>
<td ALIGN="center">和好</td>
<td ALIGN="center">創造</td>
<td ALIGN="center">順服</td>
<td ALIGN="center">對話</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
