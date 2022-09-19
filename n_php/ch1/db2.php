<?php
    try {
        $pdo = new PDO('mysql:host=localhost; 
                        dbname=ex,
                        charset=utf8',
                        'dbuser',
                        '19273628hsh');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,
                            PDO::ERRMODE_EXCEPTION);
        $sql = 'UPDATE joke SET jokedate = "2012-04-01"
                WHERE joketext LIKE "%프로그래머%"';

        $affectedRows = $pdo -> exec($sql);

        $output = '갱신된 row : '.$affectedRows.' 개.';

        } catch (PDOException $e) {
            $output = 'fail';
            $e -> getFile().' : '.$e -> getLine();
        }
    
    echo $output;
?>