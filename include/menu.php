<div class="container">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
<?php

$menu = [
    [
        'value' => 'Home',
        'link' => 'index.php'
    ],
    [
        'value' => 'About Us',
        'link' => 'about_us.php'
    ],
];

foreach ($menu as $value) {
    echo '<a class="p-2 link-secondary" href="'.$value['link'].'">'.$value['value'].'</a>';
}

for ($i=0; $i < count($menu); $i++) { 
    //echo '<a class="p-2 link-secondary" href="'.$menu[$i]['link'].'">'.$menu[$i]['value'].'</a>';
} 
?>
</nav>
</div>
</div>
