<?php
    try{
        $pdo = new PDO('mysql:host=localhost;
                        dbname=ijdb;
                        charset=utf8', 
                        'root', 
                        '19273628hsh');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'SELECT `joketext` FROM `joke`';

        $result = $pdo->query($sql);

        
    } catch(PDOException $e) {
        $output = '데이터베이스 서버에 접속할 수 없습니다 : '.$e->getMessage().' , 위치 : '.$e->getFile(). ' : '.$e->getLine();
    }

    include __DIR__.'/../templates/output.html.php';
?>