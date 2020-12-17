<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies database</title>
    <?php include_once('../model/db_functions.php'); ?>
    <?php include_once('../model/view_functions.php'); ?>
    <link rel="stylesheet" type="text/css" href="../assets/css/foundation.css">
</head>
<body>
	<?php
        $connection = connect_database();
    
        if($_GET['view'] == '') {
            $genres = get_genres($connection);
            $content .= '
                <div class="title-bar">
                    <h2>Movies</h2>
                </div>
                <div class="grid-container">
                    <div class="">
                        <form id="search_movies" method="post" action="?">
                            Name: <input type="text" id="search" name="search" placeholder="Search movie title">
                            <input class="button" type="submit" value="Search">
                        </form>
                        <form method="get">
                        Filter by: 
                            <select name="genre" id="genre" onchange="this.form.submit()">
                                <optgroup label="Genre">
                                    <option value="">All</option>';
                            foreach($genres as $genre) {
                                $content .= '<option value="'.$genre->id.'" '.($genre->id == $_GET['genre']?'selected="selected"':'').'>'.$genre->genre.'</option>';
                            }
                            $content .= '
                                </optgroup>
                            </select>
                        Sort by: 
                            <select name="sort_by" id="sort_by" onchange="this.form.submit()">
                                <option value="">All</option>
                                <option value="downloads" '.($_GET['sort_by']=='downloads'?'selected="selected"':'').'>Downloads</option>
                            </select>
                        </form>
                        <a class="button" onclick="window.location.href=(\'movies.php\')">Clear</a>
                        <br>
                    </div>
                </div>
            <div class="grid-container">'; // Setup table area
                $movies = get_movies($connection, $_POST['search'], $_GET['genre'], $_GET['sort_by']);
                if($movies) {
                    // Create table
                    $content .= '<table border="1">
                                    <tr>   
                                        <th>Movie ID</th>
                                        <th>Title</th>
                                        <th>Actions</th>
                                    </tr>
                                 ';
                    foreach($movies as $movie) {
                        $content .= '<tr>
                                        <td>'.$movie->id.'</td>
                                        <td>'.$movie->title.'</td>
                                        <td style="text-align: center;"><button onclick="window.location.href=(\'movies.php?view=movie&id='.$movie->id.'\')">View</button></td>
                                    </tr>';
                    }
                    $content .= '</table>'; // Close table
    //                Buttons to show/hide all movies
    //                $content .= '<button onclick="window.location.href=(\'index.php?view=view_movies&display='.($display==''||$display=='all'?'basic':'all').'\')">'.($display != 'all'?'Show':'Hide').' all</button><br>'; 
                } else {
                    echo('No movies found.');
                }

                $content .= '<div class="grid-x">
                                <div class="cell small-4">
                                    <a class="button" href="index.php?view=movies_add">Add movie</a><br>
                                </div>
                                <div class="cell small-4">
                                    <a class="button" href="index.php?view=movies_remove">Remove movie</a>
                                </div>
                                <div class="cell small-4">
                                    '.home_button().'
                                </div>
                             </div>
                        </div>'; // Close table area
            
        } else if($_GET['view'] == 'movie') {
             $content .= '<h2>Movie information</h2>';
            $movie = get_movie($connection, $_GET['id']);
            if($movie) {
                // Create table
                 $content .= '<h3>Movie ID:</h3>'.$movie['id'].'<br>
                            <h3>Title:</h3>'.$movie['title'].'<br>
                            <h3>Genre:</h3>'.$movie['genre'].'<br>
                            <h3>File type:</h3>'.$movie['file_type'].'<br>
                            <h3>Format:</h3>'.$movie['format'].'<br>'; // Close table
                // Buttons to show/hide all movies
//                $content .= '<button onclick="window.location.href=(\'index.php?view=view_movies&display='.($display==''||$display=='all'?'basic':'all').'\')">'.($display != 'all'?'Show':'Hide').' all</button><br>'; 
            } else {
                echo('No movie found.');
            }
            $content .= home_button();
        }
           
        disconnect_database($connection);
        echo($content);
	?>
</body>
</html>