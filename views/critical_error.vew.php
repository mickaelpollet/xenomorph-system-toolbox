<?php
/*************************************
 * @project: 	Xenomorph - System - Core
 * @file:       Error page
 * @author:     Mickaël POLLET
 *************************************/

echo '<div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

        <div class="back-circle"></div>';


          echo '<div class="inner cover">';


            echo '<h1 class="cover-heading"><span style="font-size:25px;padding:10px"><i class="fas fa-angry"></i>Critical Error <span style="font-size:25px;padding:10px"></span></h1>
            <p class="lead">';
            echo $error_message;
            echo '</p>

          </div>

        </div>

      </div>

    </div>

  </body>
</html>';

  ?>
