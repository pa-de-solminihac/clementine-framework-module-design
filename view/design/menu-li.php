<?php
$i = 1;
foreach ($data as $name => $menu) {
    if ($name === 'recursive_menu_level') {
        continue;
    }
    if ($menu == 'divider') {
?>
    <li class="divider"></li>
<?php
        continue;
    }
    $a_class = array();
    if (!empty($menu['a_class'])) {
        $a_class = (array)$menu['a_class'];
    }
    $a_toggle = array();
    $li_class = array();
    if (!empty($menu['li_class'])) {
        $li_class = (array)$menu['li_class'];
    }
    $caret = '';
    if (!empty($menu['active'])) {
        $li_class[] = 'active';
    }
    if (!empty($menu['dropdown'])) {
        $a_class[] = 'dropdown-toggle';
        $a_toggle[] = 'dropdown';
        $li_class[] = 'dropdown';
        $caret = '<i class="caret"></i>';
    } else if (!empty($menu['recursive_menu'])) {
        $caret = '<span class="glyphicon fa arrow"></span>';
    }
?>
    <li class="<?php echo implode(' ', $li_class); ?>">
<?php
    if (!empty($menu['url'])) {
?>
        <a href="<?php echo $menu['url']; ?>" class="<?php echo implode(' ', $a_class); ?>" data-toggle="<?php echo implode(' ', $a_toggle);?>">
<?php
    }
    if (!empty($menu['icon'])) {
        echo $menu['icon'] . ' ';
    }
    if (!is_int($name)) {
        echo trim($name);
    }
    if (isset($menu['badge']) && $menu['badge'] !== '') {
?>
        <span class="badge"><?php echo $menu['badge']; ?></span>
<?php
    }
    echo $caret;
    if (!empty($menu['url'])) {
?>
        </a>
<?php
    }
    if (!empty($menu['dropdown']['block'])) {
        $dropdown_data = $data;
        if (!empty($menu['dropdown']['data'])) {
            $dropdown_data = $menu['dropdown']['data'];
        }
        $this->getBlock($menu['dropdown']['block'], $dropdown_data, $request);
    } else if (!empty($menu['recursive_menu'])) {
        $level = 1;
        $level_class = '';
        if (isset($data['recursive_menu_level'])) {
            $level = $data['recursive_menu_level'];
        }
        if ($level == 1) {
            $level_class = 'nav-second-level';
        }
        if ($level == 2) {
            $level_class = 'nav-third-level';
        }
        if ($level == 3) {
            $level_class = 'nav-fourth-level';
        }
        if ($level == 4) {
            $level_class = 'nav-fifth-level';
        }
        $recursive_menu = $menu['recursive_menu'];
        $recursive_menu['recursive_menu_level'] = ($level + 1);
?>
                            <ul class="nav <?php echo $level_class; ?>">
<?php
        $this->getBlock('design/menu-li', $recursive_menu, $request);
?>
                            </ul>
<?php
    }
?></li>
<?php
    ++$i;
}
