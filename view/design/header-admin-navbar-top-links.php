<?php
if (!empty($data['navbar-toplinks'])) {
?>
<ul class="nav navbar-top-links navbar-right">
<?php
    Clementine::getBlock('design/menu-li', $data['navbar-toplinks'], $request);
?>
</ul>
<?php
}
