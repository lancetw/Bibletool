<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">西番亞書簡介</h1>
<p>
西番亞書是全部聖經中第三十六卷書，西番亞是一位貴族，極其關懷民間疾苦，是個有強烈道義感的人。他作先知期間(主前639-609),在約西亞以髫齡登猶大國王位時，全國仍陷在瑪拿西瘋狂敬拜偶像和天象的時刻。吏政腐敗，先知說謊，祭司曲解律法，圖一己私利，民不聊生。他目擊時艱，聲嘶力竭呼請不聽訓誡的民要靜默無聲，聽耶和華要他傳達的話：</p>
<p>
以「耶和華的日子」為主題貫穿全書，把所見悲慘景象清皙宣告，彷若身歷其境。預言猶大國將因其道德敗壞，信仰墮落而變為荒場，猶大的鄰邦也因行惡而遭毀滅。但在一片黑暗中，先知也看見地平線遠處呈露的曙光。那是公義的
神在施行審判時，給謙卑尋求祂的人的應許；只要及時悔悟轉回，就能逃過　神的忿怒，　神也會除去人一切的憂愁和重擔。</p>
<hr>
<h1 ALIGN="center">西番亞書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 序介</td>
<td>1:1</td>
</tr>
<tr>
<td>二、 宣告耶和華大日臨近</td>
<td>1:2-1:18</td>
</tr>
<tr>
<td>三、 呼籲速速回轉歸向神</td>
<td>2:1-2:3</td>
</tr>
<tr>
<td>四、 宣佈列邦的罪惡和刑罰</td>
<td>2:4-2:15</td>
</tr>
<tr>
<td>五、 宣告猶大國的罪惡和刑罰</td>
<td>3:1-3:8</td>
</tr>
<tr>
<td>六、 預言救贖和復興</td>
<td>3:9:3:20</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">西番雅書概要</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">重點</td>
<td ALIGN="center">犯罪</td>
<td ALIGN="center">懲z</td>
<td ALIGN="center">醫治</td>
</tr>
<tr>
<td ALIGN="center" ROWSPAN="2">分段</td>
<td ALIGN="center">神因猶大的罪發怒</td>
<td ALIGN="center">懲戒猶大的悖逆</td>
<td ALIGN="center">醫治猶大的餘民</td>
</tr>
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center">第 2 章</td>
<td ALIGN="center">第 3 章</td>
</tr>
<tr>
<td ALIGN="center">主題</td>
<td ALIGN="center">污染的信仰</td>
<td ALIGN="center">狂傲的悖逆</td>
<td ALIGN="center">平安的歸回</td>
</tr>
<tr>
<td ALIGN="center">地點</td>
<td ALIGN="center" COLSPAN="3">猶大全國</td>
</tr>
<tr>
<td ALIGN="center">時間</td>
<td ALIGN="center" COLSPAN="3">約西亞期間（主前640至609年）</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
