<?php
    include './database.php';
    
   $categorie = new Database();
    
    $query="SELECT + FROM categorie" ;
    
    $categorie->select($query);



?>

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">December 2013</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">November 2013</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">October 2013</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">September 2013</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">August 2013</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">July 2013</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">June 2013</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">May 2013</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="http://getbootstrap.com/examples/blog/#">GitHub</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">Twitter</a></li>
              <li><a href="http://getbootstrap.com/examples/blog/#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->
    </div> <!--/.row-->