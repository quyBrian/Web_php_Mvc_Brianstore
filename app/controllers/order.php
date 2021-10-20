<?php

    class order extends DController{
        public function __construct(){
            parent ::__construct();
            Session::checkSession();
            
        }
        public function  index(){
            $this-> order();
        }
        public function order(){
            $table_order="tbl_order";
            $table_model= $this->load->model('ordermodel');
            $data['listorder']= $table_model->listorder($table_order);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/order/order',$data);
            $this->load->view('cpanel/footer');
        }
        public function order_details($code_order){
            $table_order_details="tbl_order_details";
            $table_product="tbl_product";
            $table_model= $this->load->model('ordermodel');
            $cond="$table_product.id_product=$table_order_details.id_product AND $table_order_details.code_order ='$code_order'";
            $cond_info="$table_order_details.code_order ='$code_order'";
            $data['orderdetails']= $table_model->orderdetails($table_product, $table_order_details,$cond);
            $data['orderinfo']= $table_model->orderinfo($table_order_details,$cond_info);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/order/order_details',$data);
            $this->load->view('cpanel/footer');
        }
        public function order_comfim($code_order){
            $table_model= $this->load->model('ordermodel');
            $table_order="tbl_order";
            $cond=" $table_order.code_order='$code_order'";
            $data= array(
                'status_order'=> 1
            );
            $result= $table_model->order_comfim($table_order, $data, $cond);
            if($result==1)
            {
                $message['msg']="Đã xác nhận đơn hàng thành công";
                header('Location:'. BASE_URL."/order?msg=".urlencode(serialize($message)));
            }
            else
            {
                $message['msg']="Đã xác nhận đơn hàng thất bại ";
                header('Location:'. BASE_URL."/order?msg=".urlencode(serialize($message)));
            }
        }

    }


?>