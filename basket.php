<?php
include_once "model.php";
$count = 1;
if (isset($_POST[id])) {
    $id = $_POST[id];
    if (isset($_SESSION[login]) && isset($_SESSION[pass])){
        $login = $_SESSION[login];
    }
    $good = getOne($link.$id, 'goods');
    $_SESSION[backet] = 1;

    $goodTemp = getOneTemp($link, $id, 'temp_orders');
    if (isset($goodTemp)) {
        $id = $goodTemp[id_good];
        $count = $goodTemp[count];
        $count++;
        editTempOrder($link, $id, $count);
    } else {
        newTempOrder($link, $id, $good[name], $good[price], $count, $login);
    }
    echo "<a href='basket.php'><u>Просмотреть товары</u>";
}
$goodTemp = getAll($link, 'temp_orders');

if (isset($_GET[action]) and $_GET[action]=='clear') {
    unset($_SESSION['backet']);
    $query = sprintf("DELETE FROM temp_orders");
    $result = mysql_query($link, $query);
    header('Location: index,php');
}

if (isset($_GET[action]) and $_GET[action]=='order'){

}