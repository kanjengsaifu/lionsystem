<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_dashboard');
    $this->load->model('admin/m_refund');

    if($this->session->userdata('login') != 1){
      redirect(base_url('admin'));
    }

  }

  function index()
  {
   $data['title'] = 'Dashboard';
   $this->load->view('admin/include/header', $data);

<<<<<<< HEAD
   $data['getkodebooking'] = $this->m_dashboard->getKodebooking();
=======
   $data['getnorefund'] = $this->m_dashboard->getrefund();
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
   $this->load->view('admin/v_dashboard', $data);
   $this->load->view('admin/include/footer');
  }

  function getrefund()
  {
    $data = $this->m_dashboard->getrefund();
    echo json_encode($data);
  }

  function get_refund_verify()
  {
    $data['jumlahdataverify'] = $this->m_refund->get_refund_verify()->num_rows();
    $data['data'] = $this->m_refund->m_refund->get_refund_verify()->result();
    echo json_encode($data);
  }

  function getbooking()
  {
    $data = $this->m_dashboard->getbooking();
    echo json_encode($data);
  }


  function get_passenger_id($kd_booking)
  {
    $where = array(
      'kd_booking' => $kd_booking
    );

    $data['data'] = $this->m_dashboard->get_passenger_id($where);
    $data['kd_booking'] = $kd_booking;
    echo json_encode($data);
  }

  function getpenerbangan_id($kd_booking)
  {
    $where = array(
      'tb_booking.kd_booking' => $kd_booking
    );
    $data = $this->m_dashboard->get_penerbangan_id($where);
    echo json_encode($data);
  }

  function get_refund()
  {

    $data = $this->m_refund->get_refund()->result();
    $data['jumlahdata'] = $this->m_refund->get_refund()->num_rows();
    echo json_encode($data);
  }
  function get_refund_today()
  {
    $data = $this->m_refund->get_refund_today()->result();
    $data['jumlahdata_today'] = $this->m_refund->get_refund_today()->num_rows();
    echo json_encode($data);
  }

<<<<<<< HEAD
  function checkdata($kd_booking)
=======
  function checkdata($norefund)
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
  {
      $this->session->set_flashdata('notifadmin', 'Periksa kembali data refund dan data booking sebelum melakukan proses refund ');
      $data['title'] = 'Check Data';
      $this->load->view('admin/include/header', $data);

      $where = array(
<<<<<<< HEAD
        'tb_booking.kd_booking' => $kd_booking
      );
      $data['checkdataid'] = $this->m_refund->get_refund_tiket_byBooking($where);

=======
        'tb_refund_pessenger.no_refund' => $norefund
      );
      $data['checkdataid']  = $this->m_dashboard->getrefundtiket($where);

      //get tiket refund
       $data['gettiketRefund']       = $this->m_refund->getTiketRefund($norefund);


      //get rows refund pessenger to first pessenger----------------------------------------
      foreach($this->m_refund->getwhererefund_pessenger($where)->result() as $key){
        $kd_booking = $key->kd_booking;
      }
      $where2 = array('kd_booking' => $kd_booking);
      //------------------------------------------------------------------------------------
      $data['data_booking']        = $this->m_dashboard->getdatabooking($where2)->result();
      $data['datauser']            = $this->m_dashboard->getemailUser($kd_booking);
      $data['jumlahdatapessenger'] = $this->m_refund->getpessenger($where2)->num_rows();
      $data['jumlahdatarefund']    = $this->m_refund->getwhererefund($norefund)->num_rows();
      //-------------------------------------------------------------------------------------
      //get refund detail to detail penerbangan ---------------------------------------------
      $data['jumlahrefunddetail']  = $this->m_refund->getrefunddetail($norefund)->num_rows();
      $data['jumlahdetailpener']   = $this->m_refund->getdetailpener($kd_booking)->num_rows();
      //-------------------------------------------------------------------------------------


      //get penerbangan refund
      $where3 = array(
        'tb_detail.kd_booking' => $kd_booking
      );
       $data['getpenerbanganRefund'] = $this->m_refund->getpenerbanganRefund($norefund, $where3);
      //-------------------------------------------------------------------------------------
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
      $this->load->view('admin/v_checkdata', $data);

      $this->load->view('admin/include/footer');


  }

<<<<<<< HEAD
  function getRefundPenerbangan($kd_booking)
  {
    $where = array(
      'kd_booking' => $kd_booking
    );
    $data = $this->m_refund->check_penerbangan_kdbooking($where);
=======
  function getRefundPenerbangan($norefund)
  {
    $where = array(
      'tb_refund_detail.no_refund' => $norefund
    );
    $data = $this->m_refund->check_penerbangan_norefund($where);
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
    echo json_encode($data);
  }

  function get_booking_kd($kd_booking)
  {
    $where = array(
      'kd_booking' => $kd_booking
    );
    $data = $this->m_refund->get_booking_kd($where);
    echo json_encode($data);
  }

<<<<<<< HEAD
  function showrefund($kd_booking)
  {
    $where = array(
      'kd_booking' => $kd_booking
    );
    $data['data'] = $this->m_refund->check_refund_tiket($where)->result();
    $data['jumlahdata'] = $this->m_refund->check_refund_tiket($where)->num_rows();
    $data['kd_booking'] = $kd_booking;
    echo json_encode($data);
=======
  function showrefund($norefund)
  {

    $where = array(
      'tb_refund_pessenger.no_refund' => $norefund
    );
    $data['data'] = $this->m_refund->check_refund_tiket($where)->result();
    $data['jumlahdata'] = $this->m_refund->check_refund_tiket($where)->num_rows();
    $data['norefund'] = $norefund;
    echo json_encode($data);


>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
  }

  function showallrefund()
  {
    echo 'hallosemua';
  }

  function tesjson($kd_booking)
  {
    $where = array(
      'tb_booking.kd_booking' => $kd_booking
    );
    $data = $this->m_refund->get_refund_tiket_byBooking($where);
    echo json_encode($data);
  }

}
