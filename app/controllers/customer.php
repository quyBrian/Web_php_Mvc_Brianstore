<?php
    class customer extends DController{
  
        public function __construct(){
            $data = array();
            parent::__construct();
        }
        public function index(){
            // $this->user();
        }
        public function signin(){
            Session::init();
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('signin',$data);
            $this->load ->view('footer');
        }
        public function login(){
            Session::init();
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $table_customer='tbl_customers';
            $customermodel= $this->load->model('customermodel');
            //hàm đếm 
            $count =$customermodel->login($table_customer,$username,$password);

            if($count == 0)
            {
                $message['msg']='tên tài khoản or mật khẩu sai ';
                header("Location:".BASE_URL."/customer/signin?msg=".urlencode(serialize($message)));
            }
            else
            {
                $result=$customermodel->getLogin($table_customer,$username,$password);
                Session::init();
                Session::set('customer', true);
                Session::set('username',$result[0]['email_customer']);
                Session::set('name_customer',$result[0]['name_customer']);
                Session::set('id_customer',$result[0]['id_customer']);
                header("Location:".BASE_URL."/index");
            }
        }
        public function logout(){
            Session::init();
            if(!Session::get('customer')){
                $message['msg']='đăng xuất không thành công ';
                 header('Location:'. BASE_URL."/customer/signin?msg=".urlencode(serialize($message)));
            }
            else{
                //session_destroy();
                unset($_SESSION['customer']);
                unset($_SESSION['username']);
                unset($_SESSION['name_customer']);
                unset($_SESSION['id_customer']);
                $message['msg']='đăng xuất thành công ';
                header('Location:'. BASE_URL."/index?msg=".urlencode(serialize($message)));
            }
        }
        public function signup(){
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('contact');
            $this->load ->view('footer');
        }
        public function insertcustomer(){
            $name= $_POST['name_customer'];
            $phone= $_POST['phone_customer']; 
            $email= $_POST['email_customer'];
            $password= $_POST['password_customer'];
            $address= $_POST['address_customer'];

            $table="tbl_customers";
            $data= array(
                 'name_customer'=> $name,
                 'phone_customer'=>$phone,
                 'email_customer'=>$email,
                 'password_customer'=>md5($password),
                 'address_customer'=>$address
            );
            $custumermodel=$this->load->model('customermodel');
            $result= $custumermodel->insertcustumer($table, $data);
            if($result==1)
            {
                echo '<scripi>alert("Đăng ký thành công");</scripi>';
                $message['msg']="Đăng ký thành công ";
                header('Location:'. BASE_URL."/customer/signin?msg=".urlencode(serialize($message)));
            }
            else
            {
                $message['msg']="Đăng ký thất bại ";
                header('Location:'. BASE_URL."/customer/signin?msg=".urlencode(serialize($message)));
            }
        }
        public function account($id){
            //Session::init();
            Session::checkSessionUser();
            $categorymodel= $this->load ->model('categorymodel');
            $customermodel= $this->load ->model('customermodel');

            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $table_customer="tbl_customers";

            $cond="$table_customer.id_customer='$id'";

            $data['detailcustomer']=$customermodel->detailcustomer($table_customer, $cond);
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('myaccount',$data);
            $this->load ->view('footer');
        }
        public function updatecustomer($id){
            $table="tbl_customers";
            $cond="id_customer='$id'";
            $customermodel= $this->load->model('customermodel');

            $name= $_POST['name_customer'];
            $phone= $_POST['phone_customer']; 
            $email= $_POST['email_customer'];
            //$password= $_POST['password_customer'];
            //$address= $_POST['address_customer'];

            $image= $_FILES['image_customer']['name'];
            $tmp_image= $_FILES['image_customer']['tmp_name'];
            $div= explode('.',$image);
            $file_ext= strtolower(end($div));
            $unique_image=$div[0].time().'.'.$file_ext;
            $path_uploads="public/uploads/customer/".$unique_image;
            if($image){
                $data['customerbyid']= $customermodel->customerbyid($table,$cond);
                foreach($data['customerbyid'] as $key =>$value){
                    $path_unlink = "public/uploads/customer/";
                        unlink($path_unlink.$value['image_customer']);
                }
                $data= array(
                    'name_customer'=>$name,
                    'phone_customer'=>$phone,
                    'email_customer'=>$email,
                    'image_customer'=>$unique_image
                );
                move_uploaded_file($tmp_image,$path_uploads);
            }
            else{
                $data= array(
                    'title_customer'=>$name,
                    'price_customer'=>$phone,
                    'desc_customer'=>$email,
                    //'address_customer'=>$address,
                );
            }
            
            $result= $customermodel->updatecustomer($table, $data, $cond);
            if ($result==1) {
                $message['msg']="Lưu mới thành công";
                header("Location:".BASE_URL."/index?msg=".urlencode(serialize($message)));
            }
            else{
                $message['msg']="Lưu mới thất bại";
                header("Location:".BASE_URL."/index?msg=".urlencode(serialize($message)));
            }
        }
        public function purchase(){
            Session:: init();
            $categorymodel= $this->load ->model('categorymodel');
            $table_home="tbl_category_product";
            $table_post="tbl_category_post";
            $data['categoryhome']= $categorymodel->categoryhome($table_home);
            $data['categoryposthome']= $categorymodel->categoryposthome($table_post);

            $this->load ->view('header');
            $this->load ->view('menu',$data);
            $this->load ->view('purchase');
            $this->load ->view('footer');
        }
        public function changepassword($id){
            // $table="tbl_customers";
            // $customermodel= $this->load->model('customermodel');
            // $password_customer=md5($_POST['password_customer']);
            // $password1=md5($_POST['password1']);
            // $cond="SELECT * FROM tbl_customers WHERE id_customer='$id' AND password_customer='$password_customer' LIMIT 1";

        }
        public function comment($id){
            $table="tbl_comment";
            $name=$_POST['name_customer'];
            $email=$_POST['email_customer'];
            $content=$_POST['content_customer'];
            $cond="id_product='$id'";
            
            $data= array(
                'title_comment'=>$name,
                'price_comment'=>$email,
                'desc_comment'=>$content,
                'id_product'=>$cond
           );
           $customermodel=$this->load->model('customermodel');
           $result= $customermodel->insertcomment($table, $data);
           echo $result;
        //    if($result==1)
        //    {
        //        $message['msg']="thêm đánh giá thành công ";
        //        header('Location:'. BASE_URL."/customer?msg=".urlencode(serialize($message)));
        //    }
        //    else
        //    {
        //        $message['msg']="thêm đánh giá thất bại ";
        //        header('Location:'. BASE_URL."/customer?msg=".urlencode(serialize($message)));
        //    }
        }

    }
?>