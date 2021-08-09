<?php
if($_GET){
$email=$_GET['user'];
}
$html = file_get_contents('https://www.codechef.com/users/geethamaale'); 
$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

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
			$conn= new mysqli('localhost','root','','register');
			$st=$conn->prepare("update student set codechef=? where vemail=?");
			$st->bind_param("is",$x,$email);
			$st->execute();
			$st->close();
			$conn->close();
			
		}
	}


}
?>