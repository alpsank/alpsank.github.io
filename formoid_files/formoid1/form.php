<?php

define('EMAIL_FOR_REPORTS', 'alpsank@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '6Ldm8yATAAAAAFgBpoftqDqK2VYbgd4_6YXTwFBa');
define('FINISH_URI', 'http://samarthandtishyame/thanks.html');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#353432;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:680px;min-width:150px" method="post"><div class="title"><h2>Your wish goes here</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Enter your name here"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Your Name"/><span class="icon-place"></span></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>" title="Enter your name here"><label class="title"></label><div class="item-cont"><input class="large" type="email" name="email" value="" placeholder="Your email"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="Enter message"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" required="required" placeholder="Message goes here"></textarea><span class="icon-place"></span></div></div>
	<div class="element-recaptcha<?php frmd_add_class("captcha"); ?>" title="Are you a bot?"><label class="title"></label><script type="text/javascript">var RecaptchaOptions = {theme : "clean"};</script>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6Ldm8yATAAAAAIsRQ3yW8wb69XMLq9HdTX7fNTx5&theme=clean"></script>
<noscript><iframe src="http://www.google.com/recaptcha/api/noscript?k=6Ldm8yATAAAAAIsRQ3yW8wb69XMLq9HdTX7fNTx5&hl=en" height="300" width="500" frameborder="0"></iframe></br>
<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea><input type="hidden" name="recaptcha_response_field" value="manual_challenge"></noscript>
<script type="text/javascript">if (/#invalidcaptcha$/.test(window.location)) (document.getElementById("recaptcha_widget_div")).className += " error"</script></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>