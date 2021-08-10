<?php
session_start();
$email=$_SESSION["email"];
$uname=$_POST["chef"];
$url='https://codeforces.com/profile/';
$name=$url.$uname;
$html = file_get_contents($name); 
$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//*[@id="pageContent"]/div[2]/div[5]/div[2]/ul/li[1]/span[1]');

	if($pokemon_row->length >0){
		foreach($pokemon_row as $row){
			$x=$row->nodeValue . "<br/>";

			

			$x=(int)$x;

			$conn= new mysqli('localhost','root','','register');
			$st=$conn->prepare("update student set codeforces=? where vemail=?");
			$st->bind_param("is",$x,$email);
			$st->execute();
			$st->close();
			$conn->close();
			
		}
	}


}
?>