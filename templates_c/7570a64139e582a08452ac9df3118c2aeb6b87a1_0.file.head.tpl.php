<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-16 05:17:36
  from 'D:\xampp\htdocs\web2020\templates\tpl\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e48c260284879_95607108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7570a64139e582a08452ac9df3118c2aeb6b87a1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2020\\templates\\tpl\\head.tpl',
      1 => 1581826650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e48c260284879_95607108 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Navigation -->
 <nav class="navbar bg-primary navbar-light fixed-top py-1">
    <div class="container">
            
      <a class="btn btn-primary" href="index.php">Home Page</a>
      <a class="btn btn-primary" href="index.php?op=contact_form">Contact Us</a>
      <?php if ($_SESSION['admin']) {?>
                          <a class="btn btn-primary" href="user.php">Administer</a>         
              <a class="btn btn-primary" href="index.php?op=logout">Log Out</a>       
          <?php } else { ?>
                    
              <a class="btn btn-primary" href="index.php?op=login_form">Login</a>
            
            
          <?php }?>
    </div>
  </nav><?php }
}
