<?php
if (!empty($data['navbar-sidebar'])) {
    $this->getBlock('design/menu-li', $data['navbar-sidebar'], $request);
}
