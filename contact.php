<?php session_start() ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />

<title>SC STEEL INOX SRL - contact</title>

<meta name="TITLE" content="STEEL INOX -> Contact steel inox iasi, balustrade, " />

<meta name="AUTHOR" content="Ioana Hliboceanu" />

<meta name="OWNER" content="STEEL INOX" />

<meta name="SUBJECT" content="inox" />

<meta name="RATING" content="GENERAL" />

<meta name="DESCRIPTION" content="Detalii contact steel inox iasi care comercializeaza produsele din inox si fier forjat"/>

<meta name="ABSTRACT" content="steel inox in iasi produce balustrade, inox, fier firjat, scari, mana curenta"/>

<meta name="KEYWORDS" content="contact,steel inox,balustrade, scari, inox, fier forjat, mana curenta,copertine,tavi tort, oliviere, suporturi pahare iasi"/>

<meta name="REVISIT-AFTER" content="30 DAYS"/><meta name="LANGUAGE" content="RO"/><meta name="COPYRIGHT" content="SC STEEL INOX SRL"/>

<meta name="ROBOTS" content="All"/>

<link rel="shortcut icon" type="image/ico" href="favicon.ico"/>

<link href="stylesheet_1.css" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />

<script  type="text/javascript" src="menu.js"></script> 


<script type="text/javascript" src="need.js"></script> 


</head>

<body class="bktop">
<div id="page">
  <div id="header">
  <img src="images/logo steel.png" class="logo" alt="" /> 
  <br />
  <div id="menu"><ul>
  <li>   <a href="index.html" onmouseover="mopen('m1')" onmouseout="mclosetime()">Prima pagina</a></li>

<li><a href="products.html" onmouseover="mopen('m3')" onmouseout="mclosetime()">Produse</a></li>

<li><a href="about.html" onmouseover="mopen('m2')" onmouseout="mclosetime()">Despre noi</a></li>

<li><a href="contact.php" onmouseover="mopen('m4')" onmouseout="mclosetime()">Contact</a></li>
  </ul>
  </div><!--menu-->
  
  </div><!--header-->
  <hr class="line" width="99%" />
 
  
  
  <div id="cont">
  
  <div class="text">

    <h1 class="bar"><strong>Contact &nbsp; SC STEEL INOX SRL Iasi</strong></h1>
    <div class="content">

<p align="justify"><strong>Adresa: </strong>Com. Popricani, Sat. Popricani, Iasi, cod 707380, Romania.</p>
<strong>Program de lucru: </strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Luni-Vineri  8-16.30 
<p><strong>Numare de telefon</strong></p>

<blockquote>

  Tel/Fax:0232.297442 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p></p>

  Mobil: 0740244208 

</blockquote>
<div id="maifc">
<div id="mail">
<p><strong>Email :</strong> office@steelinox.ro</p></div><!--mail--> 
<div id="facebook"><a href="http://www.facebook.com/steelinoxsrl"><img src="images/facebook copy.png" alt="" /></a>
</div><!--facebook-->
</div><!--maifc--></div><!--content-->

</div><!--text1--> 

  
<div id="contact-form" class="clearfix">
 <b>Formular de contact.</b><p></p>
            <?php
			//init variables
			$cf = array();
			$sr = false;
			
			if(isset($_SESSION['cf_returndata'])){
				$cf = $_SESSION['cf_returndata'];
			 	$sr = true;
			}
            ?>
            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="info">Exista erori la trimiterea formularului:</li>
                <?php 
				if(isset($cf['errors']) && count($cf['errors']) > 0) :
					foreach($cf['errors'] as $error) :
				?>
                <li><?php echo $error ?></li>
                <?php
					endforeach;
				endif;
				?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Multumim pentru mesaj! Va vom raspunde in cel mai scurt timp posibil.</p>

 
    <form method="post" action="process.php">  
        <label for="lastname">Nume: <span class="required">*</span></label>  
        <input type="text" id="last name" name="name" value="" placeholder="Popescu " required="required" autofocus="autofocus" />  
        <label for="firstname">Prenume: <span class="required">*</span></label>  
        <input type="text" id="first name" name=" name2" value="" placeholder="Ionel" required="required" autofocus="autofocus" />  
        <label for="email">Adresa de email: <span class="required">*</span></label>  
        <input type="email" id="email" name="email" value="" placeholder="popescu@exemplu.ro" required="required" />  
        <label for="telephone">Telefon: </label>  
        <input type="tel" id="telephone" name="telephone" value="" />  
        <label for="subject">Subiect: </label>  
        <input type="subject"  id="subject" name="subject"/>  
        <label for="message">Mesaj: <span class="required">*</span></label>
        <textarea id="message" name="message" placeholder="Mesajul dvs trebuie sa contina mai mult de 20 de caractere." required="required" data-minlength="20" ></textarea>
        <span id="loading"></span>  
        <input type="submit" value="Trimite" id="submit-button" />  
        <p id="req-field-desc"><span class="required">*</span> indica un camp obligatoriu</p>  
    </form>  
</div>  

</div><!--content-->
  

  
 <iframe width="530" height="500" frameborder="0" class="googlem"  scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=STEEL+INOX,+DN24C+FN,+Popricani,+Rom%C3%A2nia&amp;hl=ro&amp;geocode=CbiH5icm2ltgFVF80QIdj9-jASm3qVSH_B3LQDGoFKppA6BuDg&amp;sll=47.286857,27.514744&amp;sspn=0.020552,0.045447&amp;t=p&amp;mra=ls&amp;ie=UTF8&amp;iwloc=ddw1&amp;ll=47.286857,27.514744&amp;spn=0.020552,0.045447&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=d&amp;source=embed&amp;saddr=&amp;daddr=STEEL+INOX,+DN24C+FN,+Popricani,+Rom%C3%A2nia&amp;hl=ro&amp;geocode=CbiH5icm2ltgFVF80QIdj9-jASm3qVSH_B3LQDGoFKppA6BuDg&amp;sll=47.286857,27.514744&amp;sspn=0.020552,0.045447&amp;t=p&amp;mra=ls&amp;ie=UTF8&amp;iwloc=ddw1&amp;ll=47.286857,27.514744&amp;spn=0.020552,0.045447" style="color:#0000FF;text-align:left">Vizualizare harta marita</a></small>

 

  <script type="text/javascript" src="Contact/swfobject.js"></script> 

</p> 

<div align="center"> 

    <script type="text/javascript"> 

var so = new SWFObject("contact/default_form.swf", "contact/default_form.xml", "337", "470", "7,0,0,0", "#ffffff");

so.addParam("classid", "clsid27cdb6e-ae6d-11cf-96b8-444553540000");

so.addParam("quality", "high");

so.addParam("scale", "noscale");so.addParam("salign", "lt");

so.addParam("FlashVars", "xmlfile=contact/default_form.xml&w=337&h=470");so.write("CC1965506");

    </script> 

</div> 

</div><!--page-->
<div id="footer">
<div id="content3">
<div id="facebook">
<a href="http://www.facebook.com/steelinoxsrl"><img src="images/facebook copy.png" alt=""/></a>
</div><!--facebook-->
<div id="copyright">Copyright 2012, All Rights Reserved. Designed by Ioana Hliboceanu </div><!--copyright-->
</div><!--content3-->
</div><!--footer-->


  
  <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"> 

</script> 

<script type="text/javascript"> 

_uacct = "UA-5291942-2";

urchinTracker();

</script> 

<script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-22606836-1']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>



  </body></html>