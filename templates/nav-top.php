
   <!-- Static navbar -->
   <header>
      <nav class="navbar navbar-default">        
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="/dist/images/bookstore.png" alt="bookstore"  width="60" class="align-middle" /></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
              <li <?php echo ($url == '/') ? 'class="active"' : ''; ?> ><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li <?php echo ($url == '/books') ? 'class="active"' : ''; ?> ><a href="/books"><span class="glyphicon glyphicon-book"></span>  Books</a></li>
              <li <?php echo ($url == '/authors') ? 'class="active"' : ''; ?> ><a href="/authors"><span class="glyphicon glyphicon-pencil"></span>  Authors</a></li>
              <li <?php echo ($url == '/contact') ? 'class="active"' : ''; ?> ><a href="/contact"><span class="glyphicon glyphicon-phone-alt"></span> Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">             
                   

              <?php if(!isLoggedIn()) { ?>
              <li <?php echo ($url == '/registration') ? 'class="active"' : ''; ?>><a href="/registration">Registration</a></li>
              <li <?php echo ($url == '/login') ? 'class="active"' : ''; ?>><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
              <?php } else { ?>
              
              <?php if(  isAdmin() ) { ?>
              <li <?php echo ($url == '/admin/books') ? 'class="active"' : ''; ?>><a href="/admin/books">Admin</a></li> 
              <?php } ?> 

              <li <?php echo ($url == '/user') ? 'class="active"' : ''; ?>><a href="/user"><span class="glyphicon glyphicon-user"></span> User info</a></li>
              <li <?php echo ($url == '/orders') ? 'class="active"' : ''; ?>><a href="/orders"><span class="glyphicon glyphicon-list"></span> Orders</a></li> 
              <li <?php echo ($url == '/logout') ? 'class="active"' : ''; ?>><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              <?php } ?> 


              <li <?php echo ($url == '/cart') ? 'class="active"' : ''; ?>><a href="/cart">  <span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> 
              
              

            </ul>
     
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </header>
    