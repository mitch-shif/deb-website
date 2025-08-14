<?php 
// set flag to indicate whether mail has been sent
$mailSent = false;
if (array_key_exists('ewcomments', $_POST)) {
//mail processing script
// remove escape characters from POST array
if (get_magic_quotes_gpc()) {
  function stripslashes_deep($value) {
    $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
    return $value;
    }
  $_POST = array_map('stripslashes_deep', $_POST);
  }
  // validate the input, beginning with name
  $namef = trim($_POST['firstname']);
  if (empty($namef)) {
    $error['firstname'] = 'Please enter your first name';
    }
	  // validate the input, beginning with name
  $namel = trim($_POST['lastname']);
  if (empty($namel)) {
    $error['lastname'] = 'Please enter your last name';
    }
	$email = $_POST['emailaddress'];
	// check for valid email address
$pattern = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
if (!preg_match($pattern, trim($email))) {
  $error['emailaddress'] = 'Please enter a valid email address';
  }  
//initialize variables
$to='debbb1@comcast.net';//use you own email address debbb1@comcast.net
$subject='Email from the debcinamonwhalen web site';
//build the message
$message =  'From: '.$namef.' '.$namel."\n\n";
$message .= 'Email: '.$email."\n\n";
$message .= 'Comments: '.$_POST['comments'];
$additionalheaders = "From: debcinamonwhalen WEB Site\r\n";
$additionalheaders .='Reply-To: '.$email; 
//send the mail
if (!isset($error)) {
$mailSent = mail($to, $subject, $message, $additionalheaders);
    // check that the mail was sent successfully
    if (!$mailSent) {
      $error['notSent'] = 'Sorry, there was a problem sending your mail. Please try later.';
      }
}
 }
?>

</tr>
<!--start body input-->
<tr>
    <td>
	    <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#111111" style="border-collapse: collapse">
		<tr>
<!--		<td  bgcolor="#ff9933">-->
		<td  bgcolor="#99CC66">
<!--put main content here to avoid problems-->

<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<?php 
include("BLOCKS/header.php");
?>
 <tr>

<?php 
include("BLOCKS/leftmenu.php");
?>

    <td width="30"><img src="mm_spacer.gif" alt="" width="44" height="49" border="0" /></td>
    <td colspan="1" valign="top"><img src="mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />
	<table width="550" height="230" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="550" class="pageName"> </td>
		</tr>
		<tr>
          <td valign="top" class="bodyText">
            
			
<div id="maincontent">
	<?php if (isset($error['notSent'])) { ?>
    <h1>Server error</h1>
    <p class="warning"><?php echo $error['notSent']; ?></p>
	<?php } elseif ($mailSent) { ?>
    <h1>Thank you for contacting me</h1>
	<p>I appreciate your input!</p>
    <?php } else { ?>
<p>&nbsp; </p>
<h2>Please include this basic information incase I need to respond to your Email.</h2>
<?php } ?>

  <form style="padding: 0 50px;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="imsinsider_email_form" id="imsinsider_email_form" onsubmit="MM_validateForm('firstname','','R','lastname','','R','emailaddress','','RisEmail');return document.MM_returnValue">
    <p>
      <label for="firstname">First Name:<br />
      </label> <?php if (isset($error['firstname'])) { ?>
        <span class="warning"><?php echo $error['firstname']; ?></span>
        <?php } ?>
        <br />
      <input type="text" name="firstname" id="firstname" 
	  <?php if(isset($error)) {echo "value='$firstname'";} ?> />
    </p>
    <p>
      <label for="lastname">Last Name:<br />
      </label><?php if (isset($error['lastname'])) { ?>
        <span class="warning"><?php echo $error['lastname']; ?></span>
        <?php } ?>
        <br />
      <input type="text" name="lastname" id="lastname"
	  <?php if(isset($error)) {echo "value='$lastname'";} ?> />
    </p>
    <p>
      <label for="emailaddress">Email Address:<br />
      </label> <?php if (isset($error['emailaddress'])) { ?>
        <span class="warning"><?php echo $error['emailaddress']; ?></span>
        <?php } ?>
        <br />
      <input type="text" name="emailaddress" id="emailaddress"
	  <?php if(isset($error)) {echo "value='$emailaddress'";} ?> />
    </p>
    <p>
      <label for="comments">Comments?<br />
      </label>
      <textarea name="comments" cols="60" rows="6" id="comments"><?php if(isset($error)) {echo $messageBody;} ?></textarea>
    </p>
    <p>
      <input name="ewcomments" type="submit" id="ewcomments" value="Submit" />
    </p>
  </form>
  
  </div>
          
		  
		  
		  </td>
        </tr>
      </table>
	<br />
	&nbsp;<br />	</td>
    <td width="30"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>

	<td width="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
