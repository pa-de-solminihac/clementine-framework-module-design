<?php
if (!empty($data['navbar-breadcrumb'])) {
?>
<ol class="breadcrumb">
<?php
    Clementine::getBlock('design/menu-li', $data['navbar-breadcrumb'], $request);
?>
</ol>
<?php
}
