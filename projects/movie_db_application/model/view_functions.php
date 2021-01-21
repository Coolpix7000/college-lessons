<?php

function home_button() {
    return('<a class="button" href="index.php?view=home">Home</a>');
}

function title_nav_bar($page) {
    $title = ucfirst($page);
    $layout = ' <div class="title-bar">
                    <h1>Movie database</h1>
                </div>
                <nav class="top-bar" data-topbar role="navigation">
                    <ul class="horizontal medium-horizontal menu">
                        <li><a href="index.php?view=home" '.($title == 'Home' ? 'style="background: #969CA3;"' : '').'>Home</a></li>
                        <li><a href="users.php" '.($title == 'Users' ? 'style="background: #969CA3;"' : '').'>Users</a></li>
                        <li><a href="movies.php" '.($title == 'Movies' ? 'style="background: #969CA3;"' : '').'>Movies</a></li>
                    </ul>
                </nav>
                ';

    return $layout;
}









?>