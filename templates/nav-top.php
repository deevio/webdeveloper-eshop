
   <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-bookmark"></span> BOOKS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li <?php echo ($url == '/') ? 'class="active"' : ''; ?> ><a href="/">Home</a></li>
              <li <?php echo ($url == '/books') ? 'class="active"' : ''; ?> ><a href="/books">Books</a></li>
              <li <?php echo ($url == '/contact') ? 'class="active"' : ''; ?> ><a href="/contact">Contact</a></li>
            </ul>
     
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>