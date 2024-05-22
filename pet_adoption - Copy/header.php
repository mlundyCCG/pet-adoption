<?php
    echo '<div class="top-bar"></div>

    <header class="header">
      <div class="header-logo">
        <img src="imgs/logo-no-bg.png" alt="Logo for the company">
      </div>

      <nav id="header-nav">
        <i class="fa fa-times nav-close" onclick="hideMenuLinks()"></i>
        <ul>
          <li><a href="./index.html" class="active">Home</a></li>
          <li><a href="./process.html">Adoption Process</a></li>';

          
   echo       '<li><a href="./adoption-form.html" title="Adoption Form Page">Adoption Form</a></li>
          <li><a href="./contact.html">Contact Us</a></li>
        </ul>
      </nav>

      <div class="header-navigation">
        <i class="fa fa-search" onclick="showSearchBar()"></i>
        <i class="fa fa-times search-close" onclick="hideSearchBar()"></i>
        <input type="search" id="header-search-box" placeholder="What can we assist you with?">

        <i class="fa fa-bars" onclick="showMenuLinks()"></i>
      </div>
    </header>';
?>