<?php

function back_button() {
    
}

function home_button() {
    return('<br><a class="button" href="index.php?">Home</a>');
}

function page_header($page_title) {
    $layout = '<div class="title-bar">
                    <h2>'.$page_title.'</h2>
                    <ul class="horizontal medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown">
                        <li><a href="#">Item 1A</a></li>
                        <li><a href="#">Item 1B</a></li>
                        <li><a href="#">Item 1C</a></li>
                        <li><a href="#">Item 1D</a></li>
                        <li><a href="#">Item 1E</a></li>
                    </ul>
                </div>
                ';

    return $layout;
}









?>