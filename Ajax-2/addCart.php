<?php
    //加入购物车操作
    //1.接受传递过来的post参数
    $productid = intval($_POST['productid']);
    $num = intval($_POST['num']);
    //2.准备要添加的购物车数据
    session_start();
    $userid = $_SESSION['memberid'];
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=imooc","root","root123",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $pdo->query("set names utf8");
        $sql = "select price from shop_product where id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($productid));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $price = $data['price'];
        $createtime = time();
        //3.完成购物车数据的添加操作（判断当前用户在购物车当中是否已经加入该商品）
        $sql = "select * from shop_cart where productid=? and userid=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($productid,$userid));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($data){
            $sql = "update shop_cart set num=num+? where userid=? and productid=?";
            $params = array($num, $userid, $productid);
        }else{
            $sql = "insert into shop_cart(productid,num,userid,price,createtime) values(?,?,?,?,?)";
            $params = array($productid, $num, $userid, $price, $createtime);
        }
        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $rows = $stmt->rowCount();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    //4.返回最终添加的结果
    if($rows){
        $response = array(
            'errno'     => 0,
            'errmsg'  => 'success',
            'data'      => true,
        );
    }else{
        $response = array(
            'errno'     => -1,
            'errmsg'   => 'fail',
            'data'       => false,
        );
    }
    
    echo json_encode($response);
    
    
    
    
    
    
    
    