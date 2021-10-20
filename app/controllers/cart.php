<?php
    class cart extends DController{
  
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->cart();
        }
        public function cart(){
            Session:: init();
            //Session:: destroy();
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('cart');
            $this->load ->view('footer');
        }
        public function addcart(){
            Session:: init();
            if(isset($_SESSION["shopping_cart"])){
                $avaiable=0;
                foreach($_SESSION['shopping_cart'] as $key =>$value){
                    if($_SESSION['shopping_cart'][$key]['id_product']==$_POST['id_product']){
                        $avaiable++;
                        $_SESSION['shopping_cart'][$key]['quantity_product_details'] = $_SESSION['shopping_cart'][$key]['quantity_product_details'] + $_POST['quantity_product_details'];
                    }
                }
                if($avaiable==0){
                    $item = array(
                        'id_product' => $_POST["id_product"],
                        'title_product' => $_POST["title_product"],
                        'price_product' => $_POST["price_product"],
                        'image_product' => $_POST["image_product"],
                        'quantity_product_details' => $_POST["quantity_product_details"]
                    );
                    $_SESSION["shopping_cart"][] = $item;
                }
            }
            else{
                $item = array(
                    'id_product' => $_POST["id_product"],
                    'title_product' => $_POST["title_product"],
                    'price_product' => $_POST["price_product"],
                    'image_product' => $_POST["image_product"],
                    'quantity_product_details' => $_POST["quantity_product_details"]
                );
                $_SESSION["shopping_cart"][] = $item;
            }
            header('Location:'.BASE_URL."/cart");
            
        } 
        public function updatecart(){
            Session:: init();
            if(isset($_POST['delete_cart'])){
                if(isset($_SESSION["shopping_cart"])){
                    foreach($_SESSION["shopping_cart"] as $key =>$value){
                        if($_SESSION["shopping_cart"][$key]['id_product'] == $_POST['delete_cart']){
                            unset($_SESSION["shopping_cart"][$key]);
                        }
                    }
                    header('Location:'.BASE_URL.'/cart');
                }
                else{
                    header('Location:'.BASE_URL);
                }
            }
            else{
                foreach($_POST['qty'] as $key =>$qty){
                    foreach($_SESSION["shopping_cart"] as $session =>$value){
                        if($value['id_product']==$key && $qty >= 1){
                            $_SESSION["shopping_cart"][$session]['quantity_product_details']=$qty;
                        }
                        else if($value['id_product']==$key && $qty <= 1){
                            unset($_SESSION["shopping_cart"][$session]);
                        }
                    }
                }
                header('Location:'.BASE_URL.'/cart');
            }
        }
        public function order(){
            Session:: init();
            $table_order="tbl_order";
            $table_order_details="tbl_order_details";
            $ordermodel= $this ->load->model('ordermodel');

                $name=$_POST['name'];
                $sdt=$_POST['sdt'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $noidung=$_POST['noidung'];
                $code_order=rand(0,9999);
                

                date_default_timezone_set('asia/ho_chi_minh');
                $date= date("d/m/Y");
                $hour= date("h:i:sa");
                $date_order=$date.$hour;

                $data_order=array(
                    'status_order'=>'0',
                    'code_order'=>$code_order,
                    'date_order'=>$date.' '.$hour,
                );
            $result_order = $ordermodel->insertorder($table_order,$data_order);
                
            if(Session::get("shopping_cart") == true){
                foreach(Session::get("shopping_cart") as $key =>$value){
                    $data_details=array(
                        'code_order'=>$code_order,
                        'id_product'=>$value['id_product'],
                        'quantity_product_details'=>$value['quantity_product_details'],
                        'name'=>$name,
                        'sdt'=>$sdt,
                        'email'=>$email,
                        'diachi'=>$diachi,
                        'noidung'=>$noidung
                    );
                    $result_order_details = $ordermodel->insertorderdetails($table_order_details,$data_details);
                }
                unset($_SESSION["shopping_cart"]);
            }
            if($result_order_details){
                $message['msg']="Đặt hàng thành công ";
                header('Location:'. BASE_URL."/cart?msg=".urlencode(serialize($message)));
            }
        }
        
    }


?>