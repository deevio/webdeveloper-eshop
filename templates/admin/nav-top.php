
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
              <?php if(!isLoggedIn()) { ?>
              <li <?php echo ($url == '/') ? 'class="active"' : ''; ?> ><a href="/admin">Home</a></li>
              <?php } ?>
              <li <?php echo ($url == '/admin/books') ? 'class="active"' : ''; ?> ><a href="/admin/books">Books</a></li>          
 
              <?php if(isLoggedIn()) { ?>
              <li <?php echo ($url == '/logout') ? 'class="active"' : ''; ?>><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
              <?php } ?>           
            </ul>     
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </header>
