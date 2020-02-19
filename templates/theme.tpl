<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="<{$xoImgUrl}>creative/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<{$xoImgUrl}>creative/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<{$xoImgUrl}>creative/css/style.css">

  <script src="<{$xoImgUrl}>creative/js/jquery.min.js"></script>
  <script src="<{$xoImgUrl}>creative/js/jquery.easing.min.js"></script>
  <script src="<{$xoImgUrl}>creative/js/bootstrap.min.js"></script>
  <script src="<{$xoImgUrl}>creative/js/custom.js"></script>
  <script src="<{$xoImgUrl}>creative/contactform/contactform.js"></script>
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
<{* 轉向樣板 *}>
  <{include file="tpl/redirect.tpl"}>

  <{* head.tpl *}>
  <{include file="tpl/head.tpl"}>
  
  <{if $op == "contact_form"}>
    <{include file="tpl/contact_form.tpl"}>
  <{elseif  $op == "ok"}> 
    <{include file="tpl/ok.tpl"}>
  <{elseif  $op == "login_form"}> 
    <{include file="tpl/login_form.tpl"}> 
  <{elseif  $op == "reg_form"}> 
    <{include file="tpl/reg_form.tpl"}> 
  <{else}>
    <{* body.tpl *}>
    <{include file="tpl/body.tpl"}> 

  <{/if}>

  <{* footer.tpl *}>
  <{include file="tpl/footer.tpl"}>

  

</body>

</html>
