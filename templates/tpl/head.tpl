<section>
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
            <{if $smarty.session.user.kind === 1}>
            <{* 管理員   *}>
              <a class="nav-link js-scroll-trigger" href="user.php">admin</a>
              <a class="nav-link js-scroll-trigger" href="index.php?op=logout">logout</a>       
            <{elseif $smarty.session.user.kind === 0}>           
              <a class="nav-link js-scroll-trigger" href="index.php?op=logout">logout</a>          
            <{else}>
            <{* 未登入  *}>            
              <a class="nav-link js-scroll-trigger" href="index.php?op=login_form">login</a>                       
            <{/if}>>       
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
  </section>