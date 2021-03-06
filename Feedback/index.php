<?php
	session_start();
	  include "../server.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Feedback</title>
	<link href="../template/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../validation/css/validation.css" type="text/css" />
  	<script type="text/javascript" src="../validation/livevalidation_standalone.compressed.js"></script>
</head>

<body>
<div id="wrapper">
		<?php
	  		include "../template/templateheader.php";
		?>
	<div id="content_container">
		<h1><img src="../template/template_image/header/feedback.png"></h1>
    	<div class="auction_container">	
		<div id="feedback">
		<ul>
			<div class="column_first">
        <p>Feel free to email us at <a href="mailto:support@coincod.com">support@coincod.com</a></p>
        <form accept-charset="UTF-8" action="/contact" class="edit_user" id="edit_user_1809494" method="post"><div style="margin:0;padding:0;display:inline"><input name="_method" value="put" type="hidden"></div>

  <dl class="form">
    <dt><label for="form_name">Name</label></dt>
    <dd><input id="form_name" name="form[name]" value="" type="text"></dd></dl>

    <dl class="form">
    <dt><label for="form_email">Email</label></dt>
    <dd><input id="form_email" name="form[email]" required="true" value="" type="text"></dd></dl>


    <dl class="form">
    <dt><label for="form_subject">Subject</label></dt>
    <dd><input id="form_subject" name="form[subject]" required="true" type="text"></dd></dl>


    <input name="form[last_repo]" value="" type="hidden">
    <input name="form[last_repo_at]" value="" type="hidden">


  <dl class="form">
    <dt><label for="form_comments">Questions / Comments</label></dt>
    <dd><textarea id="form_comments" name="form[comments]" placeholder="Please write your feedback here. We will reply your feedback as soon as possible." required="true"></textarea></dd></dl>

  <div class="form-actions">
    <button type="submit" class="form_button"><span>Submit</span></button>
  </div>

</form>
</div>
</ul>

<ul>

<div class="column_last">
      <h3>Why is your feedback crucial to CoinCod?</h3>
      <ul class="checklist">
        <li>We will able to challenge the status quo together by having a mutual understanding of each other.</li>
	<li>Pushing boundaries to create more upcoming innovative features</li>
        <li>Users like you will be able to have full control of your favorites.</li>
      </ul>
	  
      <h3>Reporting a security vulnerability?</h3>
        Please send to our email at
        <a href="mailto:security@coincod.com">security@coincod.com
        </a>

      If you have any special request <strong>just shoot CoinCod an email</strong>, we are always available.

      <img alt="fisheart" class="fisheart" src="../template/template_image/fisheart.png">

</div>
</ul>
	</div>
		</div>
	</div>
		
</div>
		<?php
	  		include "../template/templatefooter.html";
		?>
</body>
</html>