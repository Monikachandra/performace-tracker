<?php
session_start();
echo "hii";
$email=$_SESSION["email"];
$uname=$_POST["chef"];
$url='https://www.hackerrank.com/leaderboard?filter=';

$name='https://www.hackerrank.com/leaderboard?filter=geethamaale&filter_on=hacker&limit=100&page=1&track=data-structures&type=practice';
$html = file_get_contents('https://www.hackerrank.com/leaderboard?filter=geethamaale&filter_on=hacker&limit=100&page=1&track=data-structures&type=practice'); 
$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//*[@id="tab-1-content-0"]/section/div[2]/div/div/div[2]/div/div/div[4]/span');

	if($pokemon_row->length >0){
		foreach($pokemon_row as $row){
			$x=$row->nodeValue . "<br/>";
echo $x;
			

			/* $x=(int)$x;

			$conn= new mysqli('localhost','root','','register');
			$st=$conn->prepare("update student set InterviewBit=? where vemail=?");
			$st->bind_param("is",$x,$email);
			$st->execute();
			$st->close();
			$conn->close();*/
			
		}
	}


}
?>
https://www.hackerrank.com/leaderboard?filter=geethamaale&filter_on=hacker&limit=100&page=1&track=data-structures&type=practice