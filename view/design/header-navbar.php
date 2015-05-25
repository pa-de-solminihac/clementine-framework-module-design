<?php
$is_iframe_class = 'not-an-iframe';
if ($request->get('int', 'is_iframe')) {
    $is_iframe_class = 'is-an-iframe';
}
?>
            <nav class="navbar navbar-default navbar-static-top <?php echo $is_iframe_class; ?>" role="navigation" style="margin-bottom: 0">
<?php
$this->getBlock('design/header-navbar-header', $data, $request);
?>
            </nav>
