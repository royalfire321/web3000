<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 13:10:13
  from 'D:\xampp\htdocs\web3000\templates\tpl\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4e772525e1c7_56861943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a6ad693ba9b83f58288f909c80002c04bf5c032' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web3000\\templates\\tpl\\head.tpl',
      1 => 1582200605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e772525e1c7_56861943 (Smarty_Internal_Template $_smarty_tpl) {
?><section>
    <!-- <div class="bg-color"> -->
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home Page</a>
            <a href="index.php#about">About</a>
            <a href="index.php#event">Event</a>
            <a href="index.php#menu-list">Menu</a>
            <a href="index.php#contact">Book a table</a>
            <?php if ($_SESSION['user']['kind'] === 1) {?>
                          <a class="nav-link js-scroll-trigger" href="user.php">admin</a>
              <a class="nav-link js-scroll-trigger" href="index.php?op=logout">logout</a>       
            <?php } elseif ($_SESSION['user']['kind'] === 0) {?>           
              <a class="nav-link js-scroll-trigger" href="index.php?op=logout">logout</a>          
            <?php } else { ?>
                        
              <a class="nav-link js-scroll-trigger" href="index.php?op=login_form">login</a>                       
            <?php }?>>       
          </div>
            <!-- Use any element to open the sidenav -->
            <span onclick="openNav()" class="pull-right menu-icon" style="color: black;">☰</span>
            <div class="container">
              <div class="row">
                <div class="inner text-center">
                  <h1 class="logo-name">Delicious</h1>
                  <h2>Food To fit your lifestyle & health.</h2>
                  <p>Specialized in Indian Cuisine!!</p>
                </div>
              </div>
            </div>   
        </div>
      </header>
       
    <!-- </div> -->
  </section><?php }
}
