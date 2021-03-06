<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sale extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('sale_m');
    }

    public function index()
    {
        $this->load->model(['customer_m', 'item_m']);
        $customer = $this->customer_m->get()->result();
        $item = $this->item_m->get()->result();
        $cart = $this->sale_m->get_cart();
        $data = [
            'customer' => $customer,
            'item' => $item,
            'cart' => $cart,
            'invoice' => $this->sale_m->invoice_no()
        ];
        $this->template->load('template', 'transaction/sale/sale_form', $data);
    }

    public function process()
    {
        $data = $this->input->post(null, TRUE);

        if (isset($_POST['add_cart'])) {
            $item_id = $this->input->post('item_id');
            $check_cart = $this->sale_m->get_cart(['t_cart.item_id' => $item_id])->num_rows();
            if ($check_cart > 0) {
                $this->sale_m->update_cart_qty($data);
            } else {
                $this->sale_m->add_cart($data);
            }

            if ($this->db->affected_rows() > 0) {
                $params = array("success" => true);
            } else {
                $params = array("success" => false);
            }
            echo json_encode($params);
        }

        if (isset($_POST['edit_cart'])) {
            $this->sale_m->edit_cart($data);
            
            if ($this->db->affected_rows() > 0) {
                $params = array("success" => true);
            } else {
                $params = array("success" => false);
            }
            echo json_encode($params);
        }
    }

    function cart_data()
    {
        $cart = $this->sale_m->get_cart();
        $data['cart'] = $cart;
        $this->load->view('transaction/sale/cart_data', $data);
    }

    function cart_del()
    {
        $cart_id = $this->input->post('cart_id');
        $this->sale_m->del_cart(['cart_id' => $cart_id]);

        if ($this->db->affected_rows() > 0) {
            $params = array("success" => true);
        } else {
            $params = array("success" => false);
        }
        echo json_encode($params);
    }
}
