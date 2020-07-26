<?php
class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->user_m->get($user_id)->row();
        return $user_data;
    }

    function PdfGenerator($html, $filename, $paper, $orientation)
    {

        $dompdf = new Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();

        ob_end_clean();
        $dompdf->stream($filename, array('Attachment' => 0));
        // fungsi attachment untuk preview di browser
    }

    function indo_currency($value)
    {
        return 'Rp.' . number_format($value, 0, ",", ".");
    }

    function indo_date($date)
    {
        $d = substr($date, 8, 2);
        $m = substr($date, 5, 2);
        $y = substr($date, 0, 4);
        return $d . '/' . $m . '/' . $y;
    }

    public function count_item()
    {
        $this->ci->load->model('item_m');
        return $this->ci->item_m->get()->num_rows();
    }

    public function count_supplier()
    {
        $this->ci->load->model('supplier_m');
        return $this->ci->supplier_m->get()->num_rows();
    }

    public function count_customer()
    {
        $this->ci->load->model('customer_m');
        return $this->ci->customer_m->get()->num_rows();
    }

    public function count_user()
    {
        $this->ci->load->model('user_m');
        return $this->ci->user_m->get()->num_rows();
    }
}
