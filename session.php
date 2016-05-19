<?php
/**
 * Created by PhpStorm.
 * User: kazumatamaki
 * Date: 2016/05/19
 * Time: 19:40
 */

try {
    session_start();

    if (filter_input(INPUT_GET, 'delete')) {
        // セッション削除
        session_destroy();
        echo 'セッションを削除しました';
        exit;
    }

    if (isset($_SESSION['count'])) {
        echo $_SESSION['count'];
        $_SESSION['count']++;
     } else {
        echo 'セッションスタート';
        $_SESSION['count'] = 1;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
