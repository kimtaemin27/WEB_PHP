<?php
    try {
        $pdo = new PDO('mysql:host=localhost; 
                        dbname=sample',
                        'dbuser',
                        '19273628hsh');
        $output = 'success';
        } catch (PDOException) {
            $output = 'fail';
        }
    
    echo $output;
?>