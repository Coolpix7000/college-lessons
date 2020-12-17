<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MySQL query practice</title>
    </head>
    <body>
        <h1>MySQL practice</h1>
        <h2>Run these in PMA</h2>

        <h3>1. Create an SQL script the counts the number of downloads stored in your movies database.</h3>
        <p>SELECT COUNT(customer_id) FROM `downloads`</p>

        <h3>2. How can the SUM and AVE function be implemented into your application?</h3>
        <p>If it was a movie rental company, you could add the cost of all the movies and use a SUM() statement to work out the total cost</p>

        <h3>3. Use a wildcard operator to show movies containing as specific word.</h3>
        <p>SELECT * FROM `movies` WHERE `title` LIKE '%Th%'</p>

        <h3>4. Use a wildcard operator to show a specific value in the database.</h3>
        <p>SELECT * FROM `movies` WHERE `title` = 'Titanic'</p>

        <h3>5. Use the LIKE operator to search for all the films within a specific genre.</h3>
        <p>SELECT * FROM `movies`
        <br>LEFT JOIN genres ON (movies.genre_id = genres.genre_id)
        <br>WHERE `genre` = 'Drama'</p>
    </body>
</html>