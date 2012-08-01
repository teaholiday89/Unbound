<h4>Unbound Staff Application</h4>
<br />
<? if ($check['error']) { ?>
<span style="color:black">One or more required fields were not filled out.</span><br />
<br />
<? } ?>
<form action="submit_app.php" method="post">
<div class="form-top">
<? if ($check['name']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
Full Name:<br />
<input type="text" name="name" size="46" value="<?=$_REQUEST['name']?>"><br />
<br />
<? if ($check['email']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
E-mail:<br />
<input type="text" name="email" size="46" value="<?=$_REQUEST['email']?>"><br />
<br />
<? if ($check['phone']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
Phone Number:<br />
<input type="text" name="phone" size="46" value="<?=$_REQUEST['phone']?>"><br />
<br />
<? if ($check['year']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
Year in School:<br />
<input type="text" name="year" size="46" value="<?=$_REQUEST['year']?>"><br />
</div>
<div class="form-top">
<? if ($check['graduation']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
Expected Graduation Date:<br />
<input type="text" name="graduation" size="46" value="<?=$_REQUEST['graduation']?>"><br />
<br />
<? if ($check['major']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
Major:<br />
<input type="text" name="major" size="46" value="<?=$_REQUEST['major']?>"><br />
<br />
Minor (if applicable):<br />
<input type="text" name="minor" size="46" value="<?=$_REQUEST['minor']?>"><br />
<br />
<? if ($check['section']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
Desired Section (art, fiction, poetry):<br />
<input type="text" name="section" size="46" value="<?=$_REQUEST['section']?>"><br />
</div>
<br/>
<br/>
<? if ($check['relevant']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
<div class="form-bottom">
Relevant Course Work:<br />
<textarea cols="75" rows="5" name="relevant" ><?=$_REQUEST['relevant']?></textarea><br />
<br />
Other Experience:<br />
<textarea cols="75" rows="5" name="other"><?=$_REQUEST['other']?></textarea><br />
<br />
<? if ($check['message']) { echo "<span style='color:black'>*this field is required</span><br />"; } ?>
Why do you want to join Unbound?<br />
<textarea cols="75" rows="10" name="message"><?=$_REQUEST['message']?></textarea>
</div>
<br />
<br />
<div id="verify">
<?
require_once('recaptchalib.php');
$publickey = "6Le7bMwSAAAAAG0n6E1WZ0Y-XBZ28jcSwArwJZ6R"; // you got this from the signup page
echo recaptcha_get_html($publickey);
?>
</div>
<br/>
<p style="text-align:center"><input type="submit" value="Submit application" /></p>
</form>