<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index($namatamu = "")
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = '2021-05-30';
        $bulan = [
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];
        $pecah = explode('-', $date);
        $tgl = $pecah[2] . ' ' . $bulan[(int)$pecah[1]] . ' ' . $pecah[0];

        $data = [
            'title'         => 'Wedding Invitation | Obi dan Riah',
            'namatamu'      => str_replace('_', ' ', $namatamu),
            'tanggalchat'   => $tgl,
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/jumbocover', $data);
        $this->load->view('home/index', $data);
        $this->load->view('template/footer', $data);
    }
}
