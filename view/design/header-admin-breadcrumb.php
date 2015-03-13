<?php
if (!empty($data['navbar-breadcrumb'])) {
?>
<ol class="breadcrumb">
<?php
    $this->getBlock('design/menu-li', $data['navbar-breadcrumb'], $request);
?>
</ol>
<?php
}
