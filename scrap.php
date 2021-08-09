<?php
include('simple_html_dom.php');
$html=file_get_contents('https://www.codechef.com/users/monikachandra');
#echo $html;
#$dom= new domDocument;
#@-->ignore the error
//@$dom->loadHTML($html);
//$chefscore=$dom->getElementsByClassName('tabs-content');
#rating-data-section problems-solved'tabs-content')
echo $html->find('rating-data-section problems',0)->plaintext

?>