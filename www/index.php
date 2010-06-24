<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="./whitestyle.css" rel="stylesheet" type="text/css">
  </head>

<body>
<! --- R-Forge Logo --- >

<table border="0" width="80%" cellspacing="0" cellpadding="0">
<tr>
<td>
<a href="/"><img src="<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> 
</td> 
</tr>
</table>

<table width="80%" align="left" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="right" width="60%">
<h2><font color="#E32644"><i>ouch</i></font>: <font color="#E32644">O</font>rnstein-<font color="#E32644">U</font>hlenbeck models<br> 
for phylogenetic <font color="#E32644">C</font>omparative hypot<font color="#E32644">H</font>eses</h2>
</td>
<td align="left" width="40%">
<ul>
<li><a href="./index.php?nav=about">About <i>ouch</i></a></li>
<li><a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name;?>">Development version (on R-Forge)</a></li>
<li><a href="http://cran.at.r-project.org/web/packages/ouch/">Release version (on CRAN)</a></li>
<li><a target="_blank" href="http://cran.at.r-project.org/web/packages/ouch/ouch.pdf"><i>ouch</i> manual (PDF)</a></li>
<li><a href="./index.php?nav=bib">References to the literature</a></li>
<li><a href="./index.php?nav=soft">Related software</a></li>
<li><a href="./index.php?nav=authors">Authors' homepages</a></li>
</ul>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<?php
$nav = $_REQUEST["nav"];
switch ($nav) {
    case "bib":
        $dfile = "content/refs.htm";
        break;
    case "soft":
        $dfile = "content/links.htm";
        break;
    case "authors":
        $dfile = "content/authors.htm";
        break;
    default:
        $dfile = "content/about.htm";
        break;
}
include($dfile);
?>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table width="100%">
<tr>
<td><a href="http://www.nsf.gov"><img src="graphics/NSF_logo.jpg"
alt="link to NSF" /></a></td>
<td>Development and maintenance of <code>ouch</code> made possible
through the support of the U.S. National Science Foundation (Grants
DEB-0515390 and DEB-0542360).</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>

