<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="../../template/style.css" rel="stylesheet" type="text/css"  />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>FAQ</title>
</head>

<body>
<div id="wrapper">
    <?php
		include "../../template/templateheader.php";
	?>
     <div id="content_container">
	 		<h1><a href="index.php"><img src="../../template/template_image/header/faq.png"></a></h1>
			
    	<div class="auction_container">
		
		<div class="answer">
		<ol>
        
		<li><a name="Question6">Are the products being sold all new?</a></li>
        Yes. All products sold are brand new and come from respected manufacturers. All products come with relevant warranties from the factory but not from CoinCod unless its proven it is the fault of CoinCod.
        
		<li><a name="Question7">How much does it cost for me to place a bid?</a></li>
        To submit a bid through CoinCod account it costs RM0.30 for one token. We have different amount of token that allows users to buy them at once.
        
		<li><a name="Question8">I don’t live in the Malaysia. Can I still participate in CoinCod's auctions?</a></li>
        Currently the answer is still no. CoinCod is currently open for Malaysian residents only. But we hope to extend the services to other countries soon. Hopefully our users can wait patiently.
        
		<li><a name="Question9">Is the warranty on the goods that I bid for an win in the auctions?</a></li>
        All products come with relevant warranties where applicable. Please read section 5 under our Terms of Services for further details.
        
		<li><a name="Question10">What happens if at a new auction only one bid is being submitted and nobody else raises the bid?</a></li>
        The auction closes once the countdown timer reaches 0 (zero) and the product is sold to that single bidder.
        
		</ol>
		</div>  <!--end div faq-->  
			<h1><img src="../../template/template_image/bottom/faq.png"></h1>
	  	</div>  <!--end div auction_container-->
	</div>  <!--end div content_container-->
</div>  <!--end div wrapper-->
<?php
	include "../../template/templatefooter.html";
?>
</body>
</html>
