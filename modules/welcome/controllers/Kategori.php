<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Admin {

	/**
	 * DEVELOPER: OITOC
	 * Author: SANTO DONI ROMADHONI
	 * Website : oitoc.co.id 
	 * email : oitocdev@gmail.com
	****/
    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function index()
	{
        $this->data['pagetitle'] = "Kategori Produk"; 
		$mydata['result'] = '';
		$this->data['kategori']=$this->load->view('kategori_produk',$mydata,true);
        $this->display();
    }
}