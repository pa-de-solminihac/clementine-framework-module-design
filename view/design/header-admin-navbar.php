            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<?php
Clementine::getBlock('design/header-admin-navbar-header', $data, $request);
?>
            </nav>

<?php
if (!empty($data['navbar-sidebar'])) {
?>
                <nav class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
<?php
    Clementine::getBlock('design/header-admin-navbar-search', $data, $request);
    Clementine::getBlock('design/header-admin-navbar-sidebar', $data, $request);
?>
                        </ul>
                    </div>
                </nav>
<?php
}
