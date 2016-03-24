<?php
    session_start();
    //完成对数据表的修改操作
    //1.接收参数 //2.处理参数
    $productid = intval($_POST['productid']);
    $num = intval($_POST['num']);
    $userid = $_SESSION['memberid'];
    //3.完成更新操作
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=imooc","root","root123",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $pdo->query("set names utf8");
        $sql = "update shop_cart set num=? where userid=? and productid=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($num, $userid, $productid));
        $rows = $stmt->rowCount();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    //4.返回结果
    if($rows){
        $response = array(
            'errno'         => 0,
            'errmsg'      => 'success',
            'data'          => true,
        );
    }else{
        $response = array(
            'errno'         => -1,
            'errmsg'      => 'fail',
            'data'          => false,
        );
    }
    
    echo json_encode($response);
    
    
    
    
    
    
    
    
    