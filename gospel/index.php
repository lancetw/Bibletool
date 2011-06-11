<?php

require(dirname(__FILE__).'/'.'../smarty.config.php');

$smarty->assign('header', array('root' => '..'));
$smarty->assign('gospel', array( 'body' => '

<h1 class=gospel>四福音書綜合 -- 主耶穌基督微行錄</h1>
<hr>
<h2 class=gospel>為記念何廣明弟兄而作</h2>
<hr>
<h3 class=gospel><i>『道成了肉身，住在我們中間，充充滿滿地有恩典有真理。
我們也見過他的榮光，正是父獨生子的榮光。』(約 1:14)</i></h2>
<hr>
<h3 class=gospel>&nbsp;&nbsp;&nbsp;『祂本有  神的形像，不以自己與  神同等為強奪
的；反倒虛己，取了奴僕的形像，成為人的樣式；既
有人的樣子，就自己卑微，存心順服，以至於死；且
死在十字架上。』</h3>
<h3 class=gospel>&nbsp;&nbsp;&nbsp;『所以  神將祂升為至高，又賜給祂那超乎萬名之
上的名，叫一切在天上的，地上的，和地底下的，因
耶穌的名，無不屈膝，無不口稱耶穌基督為主，使榮
耀歸與父  神。』 (腓立比書 2:6-11)</h3>

'));

$smarty->display('gospel.tpl');
