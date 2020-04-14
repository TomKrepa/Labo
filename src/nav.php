<?php

?>

<div class="sidebar__mobile">
        <nav class="sidebar__nav">
            <ul class="nav__list">
                <li class="nav__item"><a href="formulaire.php">NOTE</a></li>
                <li class="nav__item"><a href="#">PROJETS</a></li>
                <li class="nav__item"><a href="#">ABOUT</a></li>

                <?php if (est_connecte()): ?>
                <li class="nav__item"><a href="logout.php">DECONNEXION</a></li>
                <?php endif ?>    
            </ul> 
        </nav> 
    </div>
    
    <div class="overlay"></div>
    <header class="header__main">
        
        <div class="logo">
          <img src="img/ynov.png" alt="logo">
        </div>
        
         
        <div class="burger__wraper">
            <div class="burger__menu"></div>  
        </div>
    </header>




