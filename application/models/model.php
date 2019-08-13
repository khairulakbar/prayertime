<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function GetJadwal($where= "")
	{
		$data = $this->db->query('select * from tb_jadwalsholat '.$where);
		return $data;
	}

	public function GetSetting($where= "")
	{
		$data = $this->db->query('select * from tb_setting '.$where);
		return $data;
	}

	public function GetText($where= "")
	{
		$data = $this->db->query('select * from tb_runtext '.$where);
		return $data;
	}

	function UpdateSetting($data){
        $this->db->where('id',$data['id']);
        $this->db->update('tb_setting',$data);
	}
	
	public function GetImg($where= "")
	{
		$data = $this->db->query('select * from tb_setting '.$where);
		return $data;
	}

	function EditText($data){
        $this->db->where('id',$data['id']);
        $this->db->update('tb_runtext',$data);
	}

	public function Hapus($table,$where){
		
		return $this->db->delete($table,$where);
	}

	public function AddTeks($data)
	{
		$this->db->insert('tb_runtext', $data);
	}

	public function CountText()
	{
		$data = $this->db->query('select * from tb_runtext ');
		return $data;
	}

	function upstat($where = ""){
		$hasil=$this->db->query("SELECT * FROM tb_setting ".$where);
		return $hasil->result();
	}

	function UpdateStatus($data){
        $this->db->where('id',$data['id']);
        $this->db->update('tb_setting',$data);
    }

	/*ambil data user
	function GetUser($data) {
        $query = $this->db->get_where('admin', $data);
        return $query;
    }

    function getData($table, $condition)
	{
        $this->db->where($condition); 
        $this->db->select("*");
        $this->db->from($table);
        
        return $this->db->get();
	}

	
	public function insertGbr($data)
	{
		$this->db->insert('tb_cek_gambar', $data);
	}

	 // Insert customer details in "customer" table in database.
	public function insert_customer($data)
	{
		$this->db->insert('customers', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
        // Insert order date with customer id in "orders" table in database.
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
        // Insert ordered product detail in "order_detail" table in database.
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}

	//ambil data tabel kategori
	public function GetKat($where= "")
	{
		$data = $this->db->query('select * from tb_kategori '.$where);
		return $data;
	}

	//ambil data tabel meja
	public function GetMeja($where= "")
	{
		$data = $this->db->query('select * from tb_meja '.$where);
		return $data;
	}

	public function GetGbr($where= "")
	{
		//$data = $this->db->query('SELECT * FROM products '.$where);
		$data = $this->db->query('SELECT * FROM products 
		left join tb_cek_gambar on products.product_code = tb_cek_gambar.reffcode '.$where);
		return $data;
	}

	//query pending order to dashboard
	public function GetPendingOrder()
	{
		//$data = $this->db->query('select * from customers '.$where);
		$data = $this->db->query("select orders.order_id,orders.order_number,orders.date_request,orders.company_id,
		DATEDIFF(NOW(),date_request) lama, req.name requestor, app.name app
		from orders
		left join companies on orders.company_id=companies.company_id
		left join users req ON orders.requestor_id=req.user_id
		left join users app ON orders.approval_id=app.user_id
		where orders.orderstatus_code = 'PTD' order by lama DESC LIMIT 0,7");
		return $data;
	}

	public function GetPendingDelivery()
	{
		//$data = $this->db->query('select * from customers '.$where);
		$data = $this->db->query("select orders.order_id,orders.order_number,orders.date_request,orders.company_id,
		DATEDIFF(NOW(),date_request) lama, req.name requestor, app.name app,
		(select count(*) from deliverypromises where deliverypromises.order_id = orders.order_id) deliveryJum
		from orders
		left join companies on orders.company_id=companies.company_id
		left join users req ON orders.requestor_id=req.user_id
		left join users app ON orders.approval_id=app.user_id
		where orders.orderstatus_code = 'PROC' order by lama DESC LIMIT 0,7");
		return $data;
	}

	public function GetContract()
	{
		
		//$data = $this->db->query('select * from customers '.$where);
		$data = $this->db->query("select * , DATEDIFF(end,DATE(NOW())) sisa from companies
		inner join contracts on companies.company_id = contracts.company_id
		where DATEDIFF(end,DATE(NOW())) <= 30 AND company_status = 'S' order by sisa limit 0,7");
		return $data;
	}

	public function GetProdRequest()
	{
		
		//$data = $this->db->query('select * from customers '.$where);
		$data = $this->db->query("select users.name, users.email, users.contact, products.* , companies.company , productrequests.*
		from productrequests
		left join users on productrequests.user_id=users.user_id
		left join products on productrequests.product_id = products.product_id
		left join companies on companies.company_id = users.company_id
		where status_request = '1'
		order by productrequest_id DESC LIMIT 0,7");
		return $data;
	}

	//ambil data tabel produk
	public function GetProduk($where= "")
	{
		$data = $this->db->query('select * from tb_produk '.$where);
		return $data;
	}

	public function GetTotProduk()
	{
		$data = $this->db->query('select * from tb_produk group by id_kat ');
		return $data;
	}

	public function GetDetailProduk($where = ""){
		return $this->db->query("select tb_meja.meja, tb_produk.*  from tb_produk inner join tb_meja on tb_meja.id_meja=tb_produk.id_meja $where;");
	}

	public function GetCust($where= "")
	{
		//$data = $this->db->query('select * from customers '.$where);
		$data = $this->db->query('select customers.name, orders.*, order_detail.*, menu.*
									from customers 
									left join orders on orders.customerid=customers.serial 
									left join order_detail on order_detail.orderid=orders.serial
									left join menu on menu.id_menu=order_detail.productid '.$where);
		return $data;
	}

	public function CountCust($where= "")
	{
		//$data = $this->db->query('select * from customers '.$where);
		$data = $this->db->query('select sum(price) from order_detail '.$where);
		return $data;
	}

	public function count_all() {
		return $this->db->count_all('tb_produk');
	}

	//ambil data dari 3 tabel
	public function GetProdukKatMerko($where= "") {
    $data = $this->db->query('SELECT p.*, q.kategori, c.meja
                                FROM tb_produk p
                                LEFT JOIN tb_kategori q
                                ON(p.id_kat = q.id_kat)
                                LEFT JOIN tb_meja c
                                ON(p.id_kat = c.id_meja)'.$where);
    return $data;
    }
	
	public function GetMenuKatMerko($where= "") {
    $data = $this->db->query('SELECT p.*, q.kategori FROM menu p LEFT JOIN tb_kategori q ON(p.id_kat = q.id_kat)'.$where);
    return $data;
    }
	
	public function GetMenu($where= "") {
    $data = $this->db->query('select * from menu '.$where);
		return $data;
    }

	//batas crud data
	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}

	public function Update($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}

	public function Hapus($table,$where){
		
		return $this->db->delete($table,$where);
	}

	function UpdateProduk($data){
        $this->db->where('id_produk',$data['id_produk']);
        $this->db->update('tb_produk',$data);
    }
	
	function UpdateMenu($data){
        $this->db->where('id_menu',$data['id_menu']);
        $this->db->update('menu',$data);
    }

    
	//batas crud data

    //model untuk visitor/pengunjung
    function GetVisitor($where = ""){
		return $this->db->query("select * from tb_visitor $where");		
	}

	function GetProductView(){
		return $this->db->query("select sum(counter) as totalview from tb_produk where status = 'publish'");
	}
	//batas query pengunjung

	public function GetKate($where= "")
	{
		$data = $this->db->query('select count(*) as totalkategori from tb_kategori '.$where);
		return $data;
	}

	function TotalKat(){
		return $this->db->query("select count(*) as totalkategori from tb_produk group by id_kat; ");
	}*/
}

/* End of file model.php */
/* Location: ./application/models/model.php */