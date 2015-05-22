<?php
$is_iframe_class = 'not-an-iframe';
if ($request->get('int', 'is_iframe')) {
    $is_iframe_class = 'is-an-iframe';
}
?>            
            <nav class="navbar navbar-default navbar-static-top <?php echo $is_iframe_class; ?>" role="navigation" style="margin-bottom: 0">
<?php
$this->getBlock('design/header-admin-navbar-header', $data, $request);
?>
            </nav>

<?php
if (!empty($data['navbar-sidebar'])) {
?>
                <nav class="navbar-default sidebar <?php echo $is_iframe_class; ?>" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
<?php
    $this->getBlock('design/header-admin-navbar-search', $data, $request);
    $this->getBlock('design/header-admin-navbar-sidebar', $data, $request);
?>
                        </ul>
                    </div>
                </nav>
<?php
}
