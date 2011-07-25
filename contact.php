<h1 class='title'><a href="/contact">Contact</a></h1>

<div class="main-body">

<div class="grid_4 alpha">
<ul class="sidebar listless" id="no-bullet">
	<li><a href="http://www.twitter.com/setfive" target="_blank">@setfive</a></li>
	<li><a href="mailto: contact@setfive.com">contact@setfive.com</a></li>
	<li>617.863.0440</li>
</ul>
</div>

<div class="grid_8 omega">

<p>Contact forms are kind of a drag to fill out, so we're not making you
use one.</p>

<p>Just email us at <a href="mailto:contact@setfive.com">contact@setfive.com</a>
or give us a call at +1 (617) 863-0440 and tell us about your project.
We'll get back to you within a business day.</p>

<p>We're in Boston, so we'd be happy to meet anywhere in New England or
in New York City.</p>

<h3>For those who have fun with forms:</h3>

<div class="big-sep">

<?php

  $success = false;
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    if($_POST['subject']!=''&&$_POST['body']!=''&&$_POST['email']!='')
    {
      $success=mail('contact@setfive.com', stripslashes($_POST['subject']), stripslashes($_POST['body']) ,'From: '.$_POST['email']);
      if(!$success)
	      $msg="<div class='error'><p><strong>It seems something is wrong on our server, manually email us, and we'll try to fix it!</strong></p></div>";
    }
    else
    {
        $msg="<div class='error'><p><strong>You need to make sure you've filled out all the fields for the form to submit!</strong></p></div>";
    }

 }
 
?>

<?php if( $success ): ?>
	<div class="success">
		Thanks! We received your message and will get in touch within 24 hours.
	</div>
<?php else: ?>
<form class="form" name="contact" action="/contact" method="POST">
<table>
	<tbody>
		<tr>
			<td>Email</td>
			<td><input name="email" value="" type="text"></td>
		</tr>
		<tr>
			<td>Subject</td>
			<td><input name="subject" value="" type="text"></td>
		</tr>
		<tr>
			<td colspan='2'>Message</td>
		</tr>
		<tr>
			<td colspan='2'><textarea name="body" cols="60" rows="5"></textarea></td>
		</tr>
		<tr>
			<td colspan='2'>
				<input name="submit" value="Send" type="submit">
			</td>
		</tr>
	</tbody>
</table>	

</form>

<?php endif; ?>

</div>

<script type="text/javascript">(function(){document.write("<img src='http://bostonbuilt.org/icon.php?u=" + window.location.host + "' />");})();</script><img
	src="http://bostonbuilt.org/icon.php?u=setfive.com"></div>

<div class="clear"></div>

</div>