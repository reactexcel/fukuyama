<!DOCTYPE HTML>
<?php if(preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] == 7){ ?>
<html lang="en" class="html" style="overflow-x: hidden">
<?php } ?>
<head>
<meta charset="shift_jis">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $page_title; ?></title>

<meta http-equiv="content-type" content="text/html;charset=shift_jis">



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<Meta name = "robots" content = "noindex, nofollow" />
<meta name="description" content="<?php echo $page_description; ?>">
<meta name="keywords" content="<?php echo $key_words; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta property="og:type" content="website" />
<meta property="og:description" content="<?php echo $page_description; ?>" />
<meta property="og:site_name" content="<?php echo $site_name; ?>" />
<meta property="og:locale" content="jp" />
<meta property="og:url" content="<?php echo $site_url; ?>" />
<meta property="og:image" content="images/logo.png" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!--[if IE 7]>
	<link href="css/ie7Bootstrap.css" rel="stylesheet">
	<link href="css/ie7style.css" rel="stylesheet">
<![endif]-->
<!--[if IE 8]>
	<style>
	.footer-bs .footer-brand { border-right: #686666 0.01em solid;}
	.footer-bs .footer-nav { border-right: #686666 0.01em solid;}
	</style>
<![endif]-->
<link href="css/animate.css" rel="stylesheet">
<link href="css/common.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet">
<link href="/css/bootstrap-ie7.css" rel="stylesheet">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108864424-1"></script>
<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108864424-1');
</script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>