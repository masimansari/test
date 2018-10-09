<?php

if (  isset( $_REQUEST["newstype"] ) && isset( $_REQUEST["username"] ) && isset( $_REQUEST["password"] ) )
{
	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	$newsType = (int)$_REQUEST['newstype'];
	
	$newsStr = array();
	
	$index = 1;
	
	if($newsType == 1)
	{
		  $newsStr[] = array( "item1" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=191",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/24-9288202500.jpg", "heading"=>"PCB TEAM VISIT AITCHISON COLLEGE", "subheading"=>"" ));
	   
 
		  $newsStr[] = array( "item2" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=190",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/4-2169698518.jpg", "heading"=>"GARDEN AND GROUNDS", "subheading"=>"" ));
	   
 
		  $newsStr[] = array( "item3" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=186",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/8-2111979164.jpg", "heading"=>"SOCIAL GATHERING FOR UPPER PRIMARY PARENTS", "subheading"=>"" ));
	  
		  $newsStr[] = array( "item4" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=185",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-3234121385.jpg", "heading"=>"Swimming Gala 2017", "subheading"=>"" ));
 
		  $newsStr[] = array( "item5" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=184",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/metacognition-23-oct-1.jpg", "heading"=>"METACOGNITION OCTOBER 23, 2017", "subheading"=>"" ));
  
 
		  $newsStr[] = array( "item6" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=179",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-446238704.jpg", "heading"=>"INTER HOUSE ESSAY HAND WRITING 2017", "subheading"=>"" ));
  
 
		  $newsStr[] = array( "item7" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=182",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/7-8714841301.jpg", "heading"=>"METACOGNITION", "subheading"=>"" ));
 
		  $newsStr[] = array( "item8" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=178",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/9-5335395550.jpg", "heading"=>"AITCHISON COLLEGE VS CHAND BAGH SCHOOL", "subheading"=>"" ));
  
		  $newsStr[] = array( "item9" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=177",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/5-6321093430.jpg", "heading"=>"AC VS ABDUL QADIR CRICKET ACADEMY", "subheading"=>"" ));
 
		  $newsStr[] = array( "item10" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=176",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/2-5935733085.jpg", "heading"=>"COLTS TEAM VS M2/C1 BOYS: COLTS TEAM WINS BY 36 RUNS", "subheading"=>"" ));
  
		  $newsStr[] = array( "item11" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=180",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/2-5542320753.jpg", "heading"=>"RUGBY AC VS WARRIORS", "subheading"=>"" ));
  
  
		  $newsStr[] = array( "item12" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=174",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/11-319098010.jpg", "heading"=>"MAULANA ALTAF HUSSAIN HALI CHALLENGE CUP 2017", "subheading"=>"12th October, 2017" ));
 
  
		  $newsStr[] = array( "item13" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=170",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/14-4811060614.jpg", "heading"=>"URDU POET NIGHT 2017", "subheading"=>"6th October, 2017" ));
  
 
		  $newsStr[] = array( "item14" => array("newsurl"=>"./alumni/news-testlink.php?id=168",
		  "img"=>"./newsletter/news/images/5-4071036260.jpg", "heading"=>"Talk By Salman Ahmad", "subheading"=>"22nd September, 2017" ));
 
		  $newsStr[] = array( "item15" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=167",
		  "img"=>"https://www.aitchison.edu.pk/newsletter/news/images/3-7832367280.jpg", "heading"=>"BIRD WATCHING EXCURSION", "subheading"=>"22nd September, 2017" ));
 
 
		  $newsStr[] = array( "item16" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=166",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/3-6583169815.jpg", "heading"=>"GODLEY HOUSE WINS INTER HOUSE WATER POLO COMPETITION", "subheading"=>"" ));
 
 
 
		  $newsStr[] = array( "item17" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=165",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/2---copy-833519892.jpg", "heading"=>"AITCHISON COLLEGE WINS THE SWIMMING CARNIVAL - 2017", "subheading"=>"8th October, 2017" ));
 
 
		  $newsStr[] = array( "item18" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=164",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/19-5113086733.jpg", "heading"=>"Aitchison College gains a rare victory over ACOBA", "subheading"=>"8th October, 2017" ));
  
		  $newsStr[] = array( "item19" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=163",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/2-4969892133.jpg", "heading"=>"AITCHISON UNDER 16 VS ABDUL QADIR ACADEMY", "subheading"=>"Saturday Match", "subheading"=>"" ));
 
 
		  $newsStr[] = array( "item20" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=159",
		  "img"=>"", "heading"=>"PREP SCHOOL INTER HOUSE SWIMMING CHAMPIONSHIP", "subheading"=>"Results of Day 2" ));
  
		  $newsStr[] = array( "item21" => array("newsurl"=>"http://aitchisonfest.org",
		  "img"=>"https://aitchison.edu.pk/img/acfest-logo_2minia.png", "heading"=>"Art and Performing Arts Fest 2017", "subheading"=>"From the 27th to 29th of October" ));
  
  
		  $newsStr[] = array( "item22" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=161",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/2-5140874776.jpg", "heading"=>"Social Gathering for Lower Primary Parents", "subheading"=>"" ));
  
  
		  $newsStr[] = array( "item23" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=160",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/3-2349637141.jpg", "heading"=>"Academics Prize Day 2017", "subheading"=>"" ));
  
  
		  $newsStr[] = array( "item24" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=158",
		  "img"=>"", "heading"=>"PREP SCHOOL INTER HOUSE SWIMMING CHAMPIONSHIP", "subheading"=>"Results of Day 1", "subheading"=>"" ));
 
		  $newsStr[] = array( "item25" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=156",
		  "img"=>"", "heading"=>"CRICKET MATCH - AITCHISON COLLEGE U-16 VS LAHORE SCHOOL OF ECONOMICS", "subheading"=>"" ));
 
		  $newsStr[] = array( "item26" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=155",
		  "img"=>"", "heading"=>"PARTICIPATION IN EXTERNAL MUNS", "subheading"=>"" ));
 
 
		  $newsStr[] = array( "item27" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=154",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-5575765832.jpg", "heading"=>"STUDENTS ENJOY PLANTING ACTIVITY", "subheading"=>"" ));
 
 
		  $newsStr[] = array( "item28" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=153",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-1380271972.jpg", "heading"=>"SCIENCE WINS", "subheading"=>"" ));
 
 
 
		  $newsStr[] = array( "item29" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=149",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/4-1450989185.jpg", "heading"=>"NEW GWYN BOARDERS' BBQ DAY", "subheading"=>"" ));
 
 
		  $newsStr[] = array( "item30" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=148",
		  "img"=>"", "heading"=>"HEAD OF SPORTS SENIOR SCHOOL ELECTED AS A GENERAL SECRETARY OF PAKISTAN SCHOOL SPORTS OLYMPIC", "subheading"=>"" ));
  
		  $newsStr[] = array( "item31" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=145",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/mit-launch-club-7615482825.jpg", "heading"=>"AITCHISON COLLEGE INITIATES THE MIT LAUNCH CLUB", "subheading"=>"" ));
 
  
		  $newsStr[] = array( "item32" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=139",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-2601641914.jpg", "heading"=>"STOP PRESS CRICKET", "subheading"=>"" ));
 
 
		  $newsStr[] = array( "item33" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=138",
		  "img"=>"", "heading"=>"AITCHISON COLLEGE ONE STEP CLOSER TO INTERNATIONAL MATHEMATICAL OLYMPIAD", "subheading"=>"" ));
	}
	
	elseif ($newsType == 2) {
		$newsStr[] = array( "item1" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=194",
      	"img"=>"https://aitchison.edu.pk/img/nne_logo.png", "heading"=>"Major Langlands’ 100th Birthday DVD", "subheading"=>"" ));
						 
		$newsStr[] = array( "item2" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=141",
		"img"=>"https://aitchison.edu.pk/img/nne_logo.png", "heading"=>"Donation Drive for Langlands’ School and College", "subheading"=>"" ));
		
	}
	
	
	echo json_encode( array("news"=> $newsStr) );
}
else
{
	echo json_encode(array("output"=> "0"));
}
?>
    
    
    