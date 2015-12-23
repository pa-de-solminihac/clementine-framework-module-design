<?php
if (!empty($data['navbar-sidebar'])) {
    Clementine::getBlock('design/menu-li', $data['navbar-sidebar'], $request);
}
