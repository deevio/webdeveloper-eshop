
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
              <li <?php echo ($url == '/') ? 'class="active"' : ''; ?> ><a href="/">Home</a></li>
              <li <?php echo ($url == '/books') ? 'class="active"' : ''; ?> ><a href="/books">Books</a></li>
              <li <?php echo ($url == '/contact') ? 'class="active"' : ''; ?> ><a href="/contact">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li <?php echo ($url == '/admin/books') ? 'class="active"' : ''; ?>><a href="/admin/books">Admin</a></li>   
              <li <?php echo ($url == '/cart') ? 'class="active"' : ''; ?>><a href="/cart">Cart</a></li> 
              <?php// if(isset($_SESSION['user'])) { ?>
              <li <?php echo ($url == '/orders') ? 'class="active"' : ''; ?>><a href="/orders">Orders</a></li>  
              <li <?php echo ($url == '/registration') ? 'class="active"' : ''; ?>><a href="/registration">Registration</a></li> 
              <li <?php echo ($url == '/login') ? 'class="active"' : ''; ?>><a href="/login">Login</a></li>  
              <?php //} ?>

            </ul>
     
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </header>
