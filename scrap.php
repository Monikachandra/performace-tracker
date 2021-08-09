<?php
<<<<<<< HEAD
$html = file_get_contents('https://www.codechef.com/users/geethamaale'); //get the html returned from the following url

$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned
=======
include('simple_html_dom.php');
$html=file_get_contents('https://www.codechef.com/users/monikachandra');
#echo $html;
#$dom= new domDocument;
#@-->ignore the error
//@$dom->loadHTML($html);
//$chefscore=$dom->getElementsByClassName('tabs-content');
#rating-data-section problems-solved'tabs-content')
echo $html->find('rating-data-section problems',0)->plaintext


	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//*[@id="cumulative"]/div[1]/div[1]/div/a/text()[1]');

	if($pokemon_row->length >0){
		foreach($pokemon_row as $row){
			$x=$row->nodeValue . "<br/>";
			$y=substr($x,0,4);

			$x=(int)$y;
			echo "hii";
		}
	}


}
?>