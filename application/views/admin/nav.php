

<div id="great_main_menu_panel"  style="z-index: 2;" ><!-- great_main_menu_panel -->



<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">

    

      <div class="container">

         

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

          <a class="navbar-brand titleHeader" href="<?php echo base_url('dashboard'); ?>" >
                      Way2ebikes

          </a>

        </div>

          

        <div id="navbar" class="navbar-collapse collapse" style="margin-top: 18px;">

          <ul class="nav navbar-nav">

                    <li><a class="<?php echo active_link('dashboard'); ?>" href="<?php echo base_url('dashboard'); ?>">Dashboard</a></li>
                    <li><a class="<?php echo active_link('banners'); ?> " href="<?php echo base_url('banners'); ?>">Banners</a></li>
                    <li><a class="<?php echo active_link('adminproducts'); ?> " href="<?php echo base_url('adminproducts'); ?>">Products</a></li>
                    <li><a class="<?php echo active_link('questions'); ?> " href="<?php echo base_url('questions'); ?>">Q&A's</a></li>
                    <li><a class="<?php echo active_link('adminvedios'); ?> " href="<?php echo base_url('adminvedios'); ?>">Experience Ebike's</a></li>
                    <li class=" dropdown">
                        <a  class=" dropdown-toggle <?php echo active_link('admingallery'); ?> <?php echo active_link('adminaudios'); ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Gallery <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="<?php echo active_link('admingallery'); ?> " href="<?php echo base_url('admingallery'); ?>">Photos</a></li>
                        </ul>
                    </li>
                </ul>

                <a href="<?php echo base_url('admin/logout'); ?>" class="pull-right logout"><i class="glyphicon glyphicon-log-out" ></i> logout</a>

        </div><!--/.nav-collapse -->

      </div>

    </nav>  

</div>