<?php
	session_start();
	include "../server.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Search Result</title>
<script type="text/javascript">  
  
window.setTimeout("Tick()", 1000);  
var Timer = {};
  
function Tick() {
    UpdateTimer();
    window.setTimeout("Tick()", 1000);
}
function UpdateTimer() {
	var eta;
	for ( var i in Timer ) {
		eta = Timer[i];
		//eta = "00:" + LeadingZero(Timer[i]);
		document.getElementById("bid_timer_" + i).innerHTML = ( (eta <= 0) ? 0 : eta );
		Timer[i] -= 1;
	}
}
function LeadingZero(Time) {  
    return (Time < 10) ? "0" + Time : + Time;  
}

</script>  
  
</head>

<body>
<div id="wrapper">
    <?php
		include "../template/templateheader.php";
	?>
     <div id="content_container">
		<div class="site_body">
		<?php
			include "../server.php";
			
			if (isset($_GET['search'])) 
			{
				$search_terms = trim($_GET['search']);
				if (strlen($search_terms) < 3) 
      			{ 
					echo "Search terms must be longer than 3 characters.";
      			}
     			else 
     			{
					//$searchTermDB = mysql_real_escape_string($searchTerms);
					$search_data = mysql_query("SELECT * FROM product_list WHERE Brand LIKE '%$search_terms%'");
					$searchDATA=mysql_num_rows($search_data);
					if($searchDATA>0)
					{
						while ($data = mysql_fetch_array($search_data))
						{
							$productID=$data["Product_Id"];
							$Brand=$data["Brand"];
							$Model=$data["Model"];
							$Marketprice=$data["Market_Price"];
							$Auctionprice=$data["Auction_Price"];
			
							$auctionend=$data["Auction_End"];
							$auctiontime = $auctionend - time();
				
							$highest_bidder=mysql_query("SELECT * FROM product$productID WHERE Price=(select max(Price) from product$productID)");
							$highest=mysql_fetch_array($highest_bidder);
							$highest_user=$highest["User"];
			
							$token_needed=$data["Total_Bid"];
							if($token_needed <= 200)									{	$tokenneed = 1;		}
							if(($token_needed <= 400)	&&	($token_needed > 200))		{	$tokenneed = 2;		}
							if(($token_needed <= 600)	&&	($token_needed > 400))		{	$tokenneed = 3;		}
							if(($token_needed <= 800)	&&	($token_needed > 600))		{	$tokenneed = 4;		}
							if(($token_needed <= 1000)	&&	($token_needed > 800))		{	$tokenneed = 5;		}
							if(($token_needed <= 1200)	&&	($token_needed > 1000))		{	$tokenneed = 6;		}
							if(($token_needed <= 1400)	&&	($token_needed > 1200))		{	$tokenneed = 7;		}
							if(($token_needed <= 1600)	&&	($token_needed > 1400))		{	$tokenneed = 8;		}
							if(($token_needed <= 1800)	&&	($token_needed > 1600))		{	$tokenneed = 9;		}
							if(($token_needed <= 2000)	&&	($token_needed > 1800))		{	$tokenneed = 10;	}
							if(($token_needed <= 2200)	&&	($token_needed > 2000))		{	$tokenneed = 11;	}
							if(($token_needed <= 2400)	&&	($token_needed > 2200))		{	$tokenneed = 12;	}
							if(($token_needed <= 2600)	&&	($token_needed > 2400))		{	$tokenneed = 13;	}
							if(($token_needed <= 2800)	&&	($token_needed > 2600))		{	$tokenneed = 14;	}
							if(($token_needed <= 3000)	&&	($token_needed > 2800))		{	$tokenneed = 15;	}
							if(($token_needed <= 3200)	&&	($token_needed > 3000))		{	$tokenneed = 16;	}
							if(($token_needed <= 3400)	&&	($token_needed > 3200))		{	$tokenneed = 17;	}
							if(($token_needed <= 3600)	&&	($token_needed > 3400))		{	$tokenneed = 18;	}
							if(($token_needed <= 3800)	&&	($token_needed > 3600))		{	$tokenneed = 19;	}
							if(($token_needed <= 4000)	&&	($token_needed > 3800))		{	$tokenneed = 20;	}
							if($token_needed > 4000)									{	$tokenneed = 25;	}
						
							echo '<script>
									Timer['.$productID.'] = '.$auctiontime.';
					  			  </script>
			
								  <ul class="auction_box">
       		  					      <li>
				  						<form id="myForm" name="postlink" action="../Product/product_description.php" method="post">
				  	  						<input type="hidden" name="pid" value='.$productID.' />
				 	   						<input name="link"  class="button_title" type="submit" value="'.$Brand.' '.$Model.'" />	
										</form>
										
										<form id="myForm" name="postlink" action="../Product/product_description.php" method="post">
					  						<input type="hidden" name="pid" value='.$productID.' />
				  	    					<input type="image" src="../Product/product_image/'.$productID.'.jpg" width="210" height="150" input name="link"  class="button_image"  type="submit" value="'.$Brand.' '.$Model.'" />				  	
										</form>  
										
										<div class="bid_current">
											Current Auction Price:<br/>
											<div class="bid_current_color">RM '.$Auctionprice.'
				  							</div>
										</div>
				
	                  					<div class="bid_box">
				
                						<div id="bid_timer_'.$productID.'" class="bid_timer" end_time="">
										</div>';
                						/*<div id="bid_price_1" class="bid_price">'.$Marketprice.'</div>';*/
					
										if($userid == 1 && $auctiontime >0)
										{
											echo '<form action="../admin_site/product_info.php" method="post">
							  		  			  <input type="hidden" name="uid" value='.$userid.' />
							  		  			  <input type="hidden" name="pid" value='.$productID.' />
						 	  		  			  <div class="bid_button">
						      		  			  <input name="bid'.$productID.'"  class="button" type="submit" value="Edit"/>
						      		  			  </div></form>';
										}
										else if($userid == 1 && $auctiontime <0)
										{
											echo '<form action="../admin_site/product_info.php" method="post">
							  		  			  <input type="hidden" name="uid" value='.$userid.' />
							  		  			  <input type="hidden" name="pid" value='.$productID.' />
						 	  		  			  <div class="bid_button">
						      		  			  <input name="bid'.$productID.'"  class="button" type="submit" value="Edit"/>
									  			  <input name="endbid'.$productID.'" class="button" type="submit" value="End Bid" />
						      		  			  </div></form>';
										}
										else if($userid == 0)
										{
											echo '<form action="../Login_Form/loginpage.php" method="post">
						 	  		  			  <div class="bid_button">
						      		  			  <input name="login"  class="button" type="submit" value="LOGIN" />
						      		  			  </div></form>';
										}
										else if($userid > 0 && $auctiontime >0)
										{
											echo '<form action="../Function/updatetimer.php" method="post">
							  		  			  <input type="hidden" name="uid" value='.$userid.' />
							  		  			  <input type="hidden" name="pid" value='.$productID.' />
						 	  		  			  <div class="bid_button">
						      		  			  <input name="bid'.$productID.'"  class="button" type="submit" value="'.$tokenneed.' Token to BID" />
						      		  			  </div></form>';
										}
										else if($userid > 0 && $auctiontime <0)
										{
											echo '<div class="bid_button">
						      		  			  <input name="endbid'.$productID.'" class="button" type="submit" value="Bid End " />
						      		  			  </div>';
										}
					
                   						echo'<span class="bid_spot">Highest Bidder</br>'.$highest_user.' </br>
                    						 <!--This is the spot for you to put the bid function<div>Bid<div>-->
                    						 </span>
											 <span id="auto_bidder">Auto Bidder</br></span>
                 							 </div>			
          	  						  </li>    
                  				  </ul>';	
				  		}
					}
					else
					{
						echo "no data";
					}
     			}
			}
			
		?>
		</div>  <!--end div site_body-->
	</div>  <!--end div content_container-->
</div>  <!--wrapper-->
<?php
	include "../template/templatefooter.html";
?>
</body>
</html>
