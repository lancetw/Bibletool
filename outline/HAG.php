<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('outline', array( 'body' => '

<h1 ALIGN="center">哈該書簡介</h1>
<p>
哈該書是全部聖經中第三十七卷書，哈該是在被擄之地巴比倫出生的猶太人，也是被擄歸回後的第一位先知。書中所傳的信息和被擄前和被擄中的各先知所傳的信息不同，側重在安慰，復興和重建，本卷書記下了五篇鼓勵百姓完成重新建造聖殿的信息。</p>
<p>
聖殿的根基雖在歸回後的次年就開始(主前538年),但因有外敵恫嚇，雖經過了十六年仍舊未完成建殿的工作。百姓自己已有了天花板的房屋，神的殿仍然荒涼。又經過一場旱災，百物歉收，大家才領悟到，　神若不賜福，光靠土地和勞力，倉堹d不下榖種，萄葡樹也不會結果子，這就是哈該先知的信息。他不用錢財，也不靠勢力，只憑　神口中的話語，百姓就得到激勵，恢復了建殿的工程，只用了四年的工夫便完成。</p>
<p>
這個殿和大衛後裔所羅巴伯這個人，成了先知所預告彌賽亞來臨的希望，也成了一切信靠神子民最榮耀的希望，因為救主基督將從他而出，並要建立那永遠的國度。</p>
<hr>
<h1 ALIGN="center">哈該書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td>一、 序介</td>
<td>1:1</td>
</tr>
<tr>
<td>二、 第一篇信息：責民不建殿　　　　</td>
<td>1:2-1:12</td>
</tr>
<tr>
<td>三、 第二篇信息：允神必與民同在</td>
<td>1:13-1:15</td>
</tr>
<tr>
<td>四、 第三篇信息：新殿榮耀勝於舊殿</td>
<td>2:1-2:19</td>
</tr>
<tr>
<td>五、 第四篇信息：遵神教導為得福之源</td>
<td>2:1-2:19</td>
</tr>
<tr>
<td>六、 第五篇信息：最後的勝利</td>
<td>2:20-2:23</td>
</tr>
</table>
<hr>
<h1 ALIGN="center">哈該書大綱</h1>
<table ALIGN="center" BORDER="1">
<tr>
<td ALIGN="center">第 1 章</td>
<td ALIGN="center" COLSPAN="3">第 2 章</td>
</tr>
<tr>
<td ALIGN="center">激勵百姓</td>
<td ALIGN="center">堅定百姓</td>
<td ALIGN="center">潔淨百姓</td>
<td ALIGN="center">安慰百姓</td>
</tr>
<tr>
<td ALIGN="center" COLSPAN="2">為神建殿</td>
<td ALIGN="center" COLSPAN="2">為神淨心</td>
</tr>
</table>

'));
                                                                     
$smarty->display('outline.tpl');

?>
