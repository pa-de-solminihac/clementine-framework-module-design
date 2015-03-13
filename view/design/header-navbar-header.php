                <div class="navbar-header">
<?php
if (!empty($data['navbar-sidebar'])) {
?>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
<?php
}
?> 
                    <a class="navbar-brand" href="<?php echo __WWW__; ?>"><?php echo Clementine::$config['clementine_global']['site_name']; ?></a>
                </div>
