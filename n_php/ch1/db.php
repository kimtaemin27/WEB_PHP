<?php
    try {
        $pdo = new PDO('mysql:host=localhost; dbname=ex',
                        'dbuser',
                        '19273628hsh');
        $output = 'success';
        } catch (PDOException) {
            $output = 'fail';
        }
    
    echo $output;
?>