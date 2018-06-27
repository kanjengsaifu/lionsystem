<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refund extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_refund');
<<<<<<< HEAD
    //Codeigniter : Write Less Do More
=======
    $this->load->model('admin/m_dashboard');
  }

  function getAllrefund()
  {
    $data = $this->m_refund->getrefundall();
    echo json_encode($data);
  }

  function getlRefundstatus($id)
  {
    $where = array(
      'refund_status' => $id
    );
    $data = $this->m_refund->getdetailRefund($where);
    echo json_encode($data);
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
  }

  function index()
  {
    $data['title'] = 'Refund';
    $this->load->view('admin/include/header', $data);
<<<<<<< HEAD


    $this->load->view('admin/v_refund');

    $this->load->view('admin/include/footer');
  }

  function actionrefund()
  {


    if(isset($_POST['cancelrefund'])){
=======
    $this->load->view('admin/v_refund');
    $this->load->view('admin/include/footer');
  }
  function actionrefund()
  {
    if(isset($_POST['cancelrefund'])){
      $namalengkap = $this->input->post('namalengkap');
      $emailuser   = $this->input->post('email');
      $norefund    = $this->input->post('no_refund');

>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
        $config = [
 							'useragent' => 'CodeIgniter',
 							'protocol'  => 'smtp',
 							'mailpath'  => '/usr/sbin/sendmail',
 							'smtp_host' => 'ssl://smtp.gmail.com',
 							'smtp_user' => 'lionairsystem@gmail.com',   // Ganti dengan email gmail Anda.
 							'smtp_pass' => 'lionais1234',             // Password gmail Anda.
 							'smtp_port' => 465,
 							'smtp_keepalive' => TRUE,
 							'smtp_crypto' => 'SSL',
 							'wordwrap'  => TRUE,
 							'wrapchars' => 80,
 							'mailtype'  => 'html',
 							'charset'   => 'utf-8',
 							'validate'  => TRUE,
 							'crlf'      => "\r\n",
 							'newline'   => "\r\n",
 					];
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
<<<<<<< HEAD
        $this->email->to('alltimproject@gmail.com');
        $this->email->from('lionair','customer lion');
        $this->email->subject('Permintaan refund dibatalkan');

        $kd_booking = $this->input->post('kode_booking');
        $where = array(
          'tb_booking.kd_booking' => $kd_booking
        );
        $data['showdata'] = $this->m_refund->get_refund_tiket_byBooking($where);


        $html = $this->load->view('v_email', $data, TRUE);

        $this->email->message($html);

        if($this->email->send() ){
          $this->m_refund->deleterefund();
          redirect(base_url('adm/dashboard'));
        }else{
          redirect(base_url('adm/dashboard'));
        }




    }else if(isset($_POST['confirmrefund'])){
        $this->m_refund->confirmrefund();
        redirect(base_url('adm/dashboard'));
    }
  }

  function sendemail()
  {
    $config = [
      'useragent' => 'Codeigniter',
      'protocol'  => 'smtp',
      'mailpath'  => '/usr/sbin/sendemail',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_user' => 'lionairsystem@gmail.com',
      'smtp_pass' => 'lionais1234',
      'smtp_port' => 465,
      'smtp_keepalive' => TRUE,
      'smtp_crypto' => 'SSL',
      'wordwrap'  => TRUE,
      'wrapchars' => 80,
      'mailtype'  => 'html',
      'charset'   => 'utf-8',
      'validate'  => TRUE,
      'crlf'      => "\r\n",
      'newline'   => "\r\n",
    ];

    $this->email->initialize($config);
    $this->email->to('wahyualfarisi30@gmail.com');
    $this->email->from('lionair','customer lion');
    $this->email->subject('Permintaan refund dibatalkan');

    if($this->email->send() ){
      redirect(base_url('adm/dashboard'));
    }else{
      redirect(base_url('adm/dashboard'));
    }


=======
        $this->email->to($emailuser);
        $this->email->from('lionair','Lion Air');
        $this->email->subject('Permintaan refund dibatalkan');

        $data['no_refund']   = $norefund;
        $data['namalengkap'] = $namalengkap;
        $html = $this->load->view('mail/v_email_refund_cancel', $data, TRUE);
        $this->email->message($html);

        if($this->email->send() ){
          $this->m_refund->cancelrefund();
          $this->session->set_flashdata('notifadmin', 'refund dibatalkan, email telah dikirim kepada pemilik kode booking ');
          redirect(base_url('adm/dashboard'));
        }else{
            $this->session->set_flashdata('notifadmin','Gagal Melakukan refund, email tidak dapat kami kirim, silahkan check koneksi internet');
        redirect(base_url('adm/dashboard'));

        }
      }
  }

  function confirm_match_updatebooking()
  {
    if(isset($_POST['confirmrefund'])){

      //EKSEKUSI TO EMAIL PARSING//---------------------
      $kd_booking   = $this->input->post('kd_booking');
      $namalengkap  = $this->input->post('namalengkap');
      $emailuser    = $this->input->post('email');
      $norefund     = $this->input->post('no_refund');
      $refund_total = $this->input->post('total');
      //------------------------------------------------
      $whererefund = array(
        'tb_refund_pessenger.no_refund' => $norefund
      );
      $wherekdbooking = array(
          'tb_detail.kd_booking' => $kd_booking
      );

        $config = [
              'useragent' => 'CodeIgniter',
              'protocol'  => 'smtp',
              'mailpath'  => '/usr/sbin/sendmail',
              'smtp_host' => 'ssl://smtp.gmail.com',
              'smtp_user' => 'lionairsystem@gmail.com',   // Ganti dengan email gmail Anda.
              'smtp_pass' => 'lionais1234',             // Password gmail Anda.
              'smtp_port' => 465,
              'smtp_keepalive' => TRUE,
              'smtp_crypto' => 'SSL',
              'wordwrap'  => TRUE,
              'wrapchars' => 80,
              'mailtype'  => 'html',
              'charset'   => 'utf-8',
              'validate'  => TRUE,
              'crlf'      => "\r\n",
              'newline'   => "\r\n",
          ];
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($emailuser);
        $this->email->from('lionair','Lion Air');
        $this->email->subject('Permintaan refund Berhasil');

        $norefund_md5 = md5($norefund);
        $data['url']                = 'http://localhost/lionsystem/tiket/datatiket/gettiket?secure_code='.$norefund_md5;
        $data['total_refund']       = $refund_total;
        $data['no_refund']          = $norefund;
        $data['namalengkap']        = $namalengkap;
        $data['daftar_tiket']       = $this->m_dashboard->getrefundtiket($whererefund);
        $data['daftar_penerbangan'] = $this->m_refund->getpenerbanganRefund($norefund, $wherekdbooking);
        $html = $this->load->view('mail/v_email_refund_success_match', $data, TRUE);
        $this->email->message($html);

        if($this->email->send() ){
          $this->session->set_flashdata('notifadmin', 'Konfirmasi refund berhasil, email telah dikirim kepada pemilik kode booking');

          $this->m_refund->update_confirm_match_updatebooking();
          redirect(base_url('adm/dashboard'));
        }else{
        $this->session->set_flashdata('notifadmin','Gagal Melakukan refund, email tidak dapat kami kirim, silahkan check koneksi internet');
        redirect(base_url('adm/dashboard'));

        }
      }
  }

  function confirm_matchpenerbangan_updatebooking()
  {
    if(isset($_POST['confirmrefundmatchpener'])){
      //EKSEKUSI TO EMAIL PARSING//---------------------
      $kd_booking   = $this->input->post('kd_booking');
      $namalengkap  = $this->input->post('namalengkap');
      $emailuser    = $this->input->post('email');
      $norefund     = $this->input->post('no_refund');
      $refund_total = $this->input->post('total');
      //------------------------------------------------
      $whererefund = array(
        'tb_refund_pessenger.no_refund' => $norefund
      );
      $wherekdbooking = array(
          'tb_detail.kd_booking' => $kd_booking
      );

        $config = [
              'useragent' => 'CodeIgniter',
              'protocol'  => 'smtp',
              'mailpath'  => '/usr/sbin/sendmail',
              'smtp_host' => 'ssl://smtp.gmail.com',
              'smtp_user' => 'lionairsystem@gmail.com',   // Ganti dengan email gmail Anda.
              'smtp_pass' => 'lionais1234',             // Password gmail Anda.
              'smtp_port' => 465,
              'smtp_keepalive' => TRUE,
              'smtp_crypto' => 'SSL',
              'wordwrap'  => TRUE,
              'wrapchars' => 80,
              'mailtype'  => 'html',
              'charset'   => 'utf-8',
              'validate'  => TRUE,
              'crlf'      => "\r\n",
              'newline'   => "\r\n",
          ];
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($emailuser);
        $this->email->from('lionair','Lion Air');
        $this->email->subject('Permintaan refund Berhasil');

        $norefund_md5 = md5($norefund);
        $data['url']                = 'http://localhost/lionsystem/tiket/datatiket/gettiket?secure_code='.$norefund_md5;
        $data['total_refund']       = $refund_total;
        $data['no_refund']          = $norefund;
        $data['namalengkap']        = $namalengkap;
        $data['daftar_tiket']       = $this->m_dashboard->getrefundtiket($whererefund);
        $data['daftar_penerbangan'] = $this->m_refund->getpenerbanganRefund($norefund, $wherekdbooking);
        $html = $this->load->view('mail/v_email_refund_success_match', $data, TRUE);
        $this->email->message($html);

        if($this->email->send() ){
            $this->m_refund->confirm_matchpenerbangan_updatebooking();
            $this->m_refund->updatePessenger();
            $this->m_refund->insertdetail();
            $this->session->set_flashdata('notifadmin', 'Konfirmasi refund berhasil, email telah dikirim kepada pemilik kode booking');

            redirect(base_url('adm/dashboard'));
        }else{
            $this->session->set_flashdata('notifadmin','Gagal Melakukan refund, email tidak dapat kami kirim, silahkan check koneksi internet');
        redirect(base_url('adm/dashboard'));
          }
      //redirect(base_url('adm/dashboard'));
    }
  }

  //------------------------------------------------------
  function confirm_matchpessenger_updatebooking()
  {
    if(isset($_POST['confirmrefund'])){
      //EKSEKUSI TO EMAIL PARSING//---------------------
      $kd_booking   = $this->input->post('kd_booking');
      $namalengkap  = $this->input->post('namalengkap');
      $emailuser    = $this->input->post('email');
      $norefund     = $this->input->post('no_refund');
      $refund_total = $this->input->post('total');
      //------------------------------------------------
      $whererefund = array(
        'tb_refund_pessenger.no_refund' => $norefund
      );
      $wherekdbooking = array(
          'tb_detail.kd_booking' => $norefund
      );

        $config = [
              'useragent' => 'CodeIgniter',
              'protocol'  => 'smtp',
              'mailpath'  => '/usr/sbin/sendmail',
              'smtp_host' => 'ssl://smtp.gmail.com',
              'smtp_user' => 'lionairsystem@gmail.com',   // Ganti dengan email gmail Anda.
              'smtp_pass' => 'lionais1234',             // Password gmail Anda.
              'smtp_port' => 465,
              'smtp_keepalive' => TRUE,
              'smtp_crypto' => 'SSL',
              'wordwrap'  => TRUE,
              'wrapchars' => 80,
              'mailtype'  => 'html',
              'charset'   => 'utf-8',
              'validate'  => TRUE,
              'crlf'      => "\r\n",
              'newline'   => "\r\n",
          ];
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($emailuser);
        $this->email->from('lionair','Lion Air');
        $this->email->subject('Permintaan refund Berhasil');

        $norefund_md5 = md5($norefund);
        $data['url']                = 'http://localhost/lionsystem/tiket/datatiket/gettiket?secure_code='.$norefund_md5;
        $data['total_refund']       = $refund_total;
        $data['no_refund']          = $norefund;
        $data['namalengkap']        = $namalengkap;
        $data['daftar_tiket']       = $this->m_dashboard->getrefundtiket($whererefund);
        $data['daftar_penerbangan'] = $this->m_refund->getpenerbanganRefund($norefund, $wherekdbooking);
        $html = $this->load->view('mail/v_email_refund_success_match', $data, TRUE);
        $this->email->message($html);

        if($this->email->send() ){
            $this->m_refund->deletedetailmaster();
            $this->m_refund->confirm_matchpenerbangan_updatebooking();
          //  $this->m_refund->insertNewkodeBooking();
            $this->m_refund->insertdetail();
            $this->m_refund->updatePessenger();
            $this->session->set_flashdata('notifadmin', 'Konfirmasi refund berhasil, email telah dikirim kepada pemilik kode booking');

            redirect(base_url('adm/dashboard'));
        }else{
            $this->session->set_flashdata('notifadmin','Gagal Melakukan refund, email tidak dapat kami kirim, silahkan check koneksi internet');
        redirect(base_url('adm/dashboard'));
        }
    }
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
  }





}
