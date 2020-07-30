<?php
    session_start();

    require_once("database.php");

    $database = new Database();
    

    if (isset($_POST) && !empty($_POST)) {
        if (isset($_POST['action'])) {
            switch ($_POST['action']) {
                case 'add' :
                    if (isset($_POST['quantity']) && is_numeric($_POST['quantity']) && $_POST['quantity'] != 0  && isset($_POST['product_id'])) 
                    {
                        $sql = "SELECT * FROM product_lv WHERE id=" . (int)$_POST['product_id'];
                        $product = $database->runQuery($sql);
                        //current() trả về phần tử đang được select trong mảng
                        $product = current($product);
                        echo '<br> $product';
                        echo "<pre>";
                        print_r($product);
                        echo "</pre>";
                        $product_id = $product['id'];

                        //check xem $_SESSION['cart_item'] đã tồn tại chưa và có bị rỗng?
                        if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])) 
                        {   
                            /*
                                !empty($_SESSION['cart_item']) == true
                                tức là lúc này giỏ hàng đã có dữ liệu
                            */
                            if (isset($_SESSION['cart_item'][$product_id]))
                            /*
                                sản phẩm đã tồn tại trong giỏ hàng
                            */
                            {
                                $exist_cart_item = $_SESSION['cart_item'][$product_id];
                                $exist_quantity = $exist_cart_item['quantity'];

                                $cart_item = array();
                                $cart_item['id'] = $product['id'];
                                $cart_item['lv_name'] = $product['lv_name'];
                                $cart_item['lv_image'] = $product['lv_image'];
                                $cart_item['lv_price'] = $product['lv_price'];
                                $cart_item['quantity'] = $exist_quantity + $_POST['quantity']; 
                                $_SESSION['cart_item'][$product_id] = $cart_item;
                            }
                            else
                            {
                                //Sản phẩm chưa tồn tại trong giỏ hàng
                                $cart_item = array();
                                $cart_item['id'] = $product['id'];
                                $cart_item['lv_name'] = $product['lv_name'];
                                $cart_item['lv_image'] = $product['lv_image'];
                                $cart_item['lv_price'] = $product['lv_price'];
                                $cart_item['quantity'] = $_POST['quantity']; 
                                $_SESSION['cart_item'][$product_id] = $cart_item;
                            }

                        } else 
                        {
                            // gán dữ liệu cho $_SESSION['cart_item'] khi chưa có dữ liệu
                                $_SESSION['cart_item'] = array();
                                $product_id = $product['id'];
                                $cart_item = array();
                                $cart_item['id'] = $product['id'];
                                $cart_item['lv_name'] = $product['lv_name'];
                                $cart_item['lv_image'] = $product['lv_image'];
                                $cart_item['lv_price'] = $product['lv_price'];
                                $cart_item['quantity'] = $_POST['quantity']; 
                                $_SESSION['cart_item'][$product_id] = $cart_item;
                        }
                        header("Location: product_lv.php");
                        exit;
                    }
                    break;
                case 'remove' :
                    echo '<br> $_POST';
                    echo "<pre>";
                    print_r($_POST);
                    echo "</pre>";
                    echo 'remove';
                    //kiểm tra xem id của sản phẩm cần xóa đã được gửi đi chưa
                    if (isset($_POST['product_id'])) 
                    {
                        $product_id = $_POST['product_id'];
                        //kiểm tra xem trong mảng cart_item có phần tử nào có key trùng với id của sản phẩm cần xóa
                        if (isset($_SESSION['cart_item'][$product_id]))
                        {
                            //hủy id của sản phẩm cần xóa
                            unset($_SESSION['cart_item'][$product_id]);
                        }
                        header("Location: cart.php");
                        exit;    
                    }
                    break;
                case 'removeall' :
                    if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])) 
                    {
                        foreach ($_SESSION['cart_item'] as $key => $value)
                        {
                            unset($_SESSION['cart_item'][$key]);
                        }
                    }
                    
                    header("Location: cart.php");
                    exit;
                    break;
                default:
                    echo 'Action không tồn tại';
                    die;    
            }
        }
        echo '<br> $_POST';
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

        echo '<br> $_SESSION';
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        echo '<br> $_SESSION cart item';
        echo "<pre>";
        print_r($_SESSION['cart_item']);
        echo "</pre>";
    }
    
    

?>