<?php
foreach ($checkdataid as $key) {
  $kd_booking     = $key->kd_booking;
  $no_refund      = $key->no_refund;
  $tgl_refund     = $key->tgl_refund;
  $refund_name    = $key->refund_name;
  $refund_email   = $key->refund_email;
  $refund_telepon = $key->refund_telepon;
  $refund_total   = $key->total_refund;
  $refund_alamat  = $key->refund_alamat;
<<<<<<< HEAD
  $email          = $key->email;
}

 ?>
=======
}

 foreach ($datauser as $key ) {
   $email_user    = $key->email;
   $nama_depan    = $key->nama_depan;
   $nama_belakang = $key->nama_belakang;
 }
  ?>
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
<<<<<<< HEAD
      <div class="container">
=======
      <div class="container-fluid">
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Check Data Refund</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'adm/dashboard' ?>">Dashboarrd</a></li>
<<<<<<< HEAD
              <li class="breadcrumb-item active">Data Refund <b class="text-danger"><?= $kd_booking ?></b> </li>
=======
              <li class="breadcrumb-item active">Data Refund <b class="text-danger"><?= $no_refund ?></b> </li>
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->

  <section class="content">
    <div class="container-fluid">


    <div class="row animated bounceInRight ">
<<<<<<< HEAD
      <div class="container">
=======
      <div class="container-fluid">
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
        <div class="card">
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="remove">
              <i class="fa fa-times"></i>
            </button>
          </div>

<<<<<<< HEAD
          <div class="container">
            <div class="col">
              <a href="javascript:void(0);" id="validasi_show_penerbangan" data-id="<?= $kd_booking ?>" class="btn btn-info btn-sm"><i class="fa fa-fighter-jet"> Lihat Penerbangan</i> </a>
=======
          <div class="container-fluid">
            <div class="col">
              <a href="javascript:void(0);" id="validasi_show_penerbangan" data-id="<?= $no_refund ?>" class="btn btn-info btn-sm"><i class="fa fa-fighter-jet"> Lihat Penerbangan</i> </a>
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
            </div>
            <div class="d-flex justify-content-between">
              <h3 class="card-title"></h3>
              <p>KODE BOOKING : <b><?=$kd_booking ?></b></p>
            </div>
            <br>
            <h5 class="card-title text-center bg-danger">DAFTAR TIKET</h5>
<<<<<<< HEAD
          <form action="<?= base_url('adm/refund/actionrefund/') ?>" method="post" >
          <table class="table table-striped table-hover">
            <thead>
            <tr class="">
              <th style="font-size:70%">No Tiket</th>
              <th style="font-size:80%">Nama Penumpang</th>
              <th style="font-size:80%">Tanggal Lahir</th>
              <th style="font-size:80%">Tipe Pessenger</th>
=======
          <form action="<?= base_url('adm/refund/actionrefund') ?>" method="post" >
          <table class="table table-striped table-hover">
            <thead>
            <tr class="">
              <th style="font-size:100%">No Tiket</th>
              <th style="font-size:100%">Nama Penumpang</th>
              <th style="font-size:100%">Tanggal Lahir</th>
              <th style="font-size:100%">Tipe Pessenger</th>
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
            </tr>
            </thead>
            <tbody>
              <?php
              foreach($checkdataid as $key ): ?>
              <tr>
<<<<<<< HEAD
                <td style="font-size:70%"><?= $key->no_tiket ?></td>
                <td style="font-size:70%"><?= $key->nama_pessenger ?></td>
                <td style="font-size:70%"><?= $key->tgl_lahir ?></td>
                <td style="font-size:70%"><?= $key->no_tiket ?></td>
                <!-- form input -->
                <input type="hidden" name="id_refund[]" value="<?= $key->no_refund ?>">
              </tr>
            <?php endforeach ?>

            </tbody>
          </table>

=======
                <td style="font-size:90%"><?= $key->no_tiket ?></td>
                <td style="font-size:90%"><?= $key->nama_pessenger ?></td>
                <td style="font-size:90%"><?= $key->tgl_lahir ?></td>
                <td style="font-size:90%"><?= $key->no_tiket ?></td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
            <div class="row" id="show_data_penerbangan">

              <div class="col-md-12">
                <h3 class="card-title bg-danger text-center">PENERBANGAN</h3>
                <table class="table table-hover">
                  <thead>
                  <tr>

<<<<<<< HEAD
                    <th style="font-size:60%">No. Penerbangan</th>
                    <th style="font-size:60%">Asal</th>
                    <th style="font-size:60%">Tujuan</th>
                    <th style="font-size:60%">Tanggal Berangkatan</th>
                    <th style="font-size:60%">Berangkat</th>
                    <th style="font-size:60%">Tiba</th>
                    <th style="font-size:60%">Class</th>
                    <th style="font-size:60%">Harga Tiket</th>
                    <th style="font-size:60%">Provider</th>
=======
                    <th style="font-size:90%">No. Penerbangan</th>
                    <th style="font-size:90%">Asal</th>
                    <th style="font-size:90%">Tujuan</th>
                    <th style="font-size:90%">Tanggal Berangkatan</th>
                    <th style="font-size:90%">Tanggal Tiba</th>
                    <th style="font-size:90%">Class</th>
                    <th style="font-size:90%">Harga Tiket</th>
                    <th style="font-size:90%">Provider</th>
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
                  </thead>
                  <tbody id="isi_data_penerbangan"></tbody>
                  </tr>
                </table>
              </div>
            </div><!-- row -->
          </div>

<<<<<<< HEAD
          <input type="hidden" name="kode_booking" value="<?= $kd_booking ?>">

          <div class="row" align="center" style="padding-top:60px; padding-bottom:20px;">
            <div class="col-md-6">
              <input type="submit" name="cancelrefund" value="BATAL REFUND" onclick="return confirm('Apakah ingin membatalkan refund ?')" class="btn btn-warning" style="width:50%">
            </div>
            <div class="col-md-6">
              <input type="submit" name="confirmrefund" value="KONFIRMASI REFUND" class="btn btn-success" style="width:50%">
            </div>
          </div>
        </form>
=======
          <!-- refund cancel -->
          <div class="row" align="center" style="padding-top:60px; padding-bottom:20px;">
            <div class="col-md-6">
              <input type="hidden" name="no_refund" value="<?= $no_refund ?>">
              <input type="hidden" name="namalengkap" value="<?= $nama_depan.' '.$nama_belakang ?>">
              <input type="hidden" name="email" value="<?= $email_user ?>">
              <input type="submit" name="cancelrefund" value="BATAL REFUND" onclick="return confirm('Apakah ingin membatalkan refund ?')" class="btn btn-warning" style="width:50%">
            </div>
          </form>
            <div class="col-md-6">
              <?php

              if($jumlahdatarefund == $jumlahdatapessenger && $jumlahrefunddetail == $jumlahdetailpener){ ?>
                <form action="<?= base_url('adm/refund/confirm_match_updatebooking') ?>" method="post">
                  <?php
                  //DATA BOOKING
                  foreach ($data_booking as $key ):?>
                  <input type="hidden" name="data_kd_booking" value="<?= $key->kd_booking ?>">
                  <input type="hidden" name="data_gelar" value="<?= $key->gelar ?>">
                  <input type="hidden" name="data_alamat" value="<?= $key->alamat ?>">
                  <input type="hidden" name="data_telp" value="<?= $key->no_tlp ?>">
                  <?php endforeach; ?>


                  <input type="hidden" name="kd_booking" value="<?= $kd_booking ?>">
                  <input type="hidden" name="total" value="<?= $refund_total ?>">
                  <input type="hidden" name="no_refund" value="<?= $no_refund ?>">
                  <input type="hidden" name="namalengkap" value="<?= $nama_depan.' '.$nama_belakang ?>">
                  <input type="hidden" name="email" value="<?= $email_user ?>">
                  <input type="submit" name="confirmrefund" class="btn btn-success" value="KONFIRMASI REFUND" onclick="return confirm('Anda yaking ingin Mengkonfirmasi tiket ini ?')" style="width:50%" >
                </form>
              <?php }else if($jumlahdatarefund < $jumlahdatapessenger && $jumlahrefunddetail == $jumlahdetailpener ){ ?>
                <form action="<?= base_url('adm/refund/confirm_matchpenerbangan_updatebooking') ?>" method="post">
                  <?php
                  //DATA BOOKING
                  foreach ($data_booking as $key ):?>
                  <input type="hidden" name="data_gelar" value="<?= $key->gelar ?>">
                  <input type="hidden" name="data_alamat" value="<?= $key->alamat ?>">
                  <input type="hidden" name="data_telp" value="<?= $key->no_tlp ?>">
                  <input type="hidden" name="data_tipebooking" value="<?= $key->tipe_booking ?>">
                  <?php endforeach; ?>


                  <?php
                  //DATA PENERBANGAN
                  foreach($getpenerbanganRefund->result() as $refunPener): ?>
                  <input type="hidden" name="no_refund_penerbangan[]" value="<?= $refunPener->no_refund ?>"><br/>
                  <input type="hidden" name="no_penerbangan[]" value="<?= $refunPener->no_penerbangan ?>"><br>
                  <?php endforeach; ?>

                  <?php
                  //DATA TIKET REFUND
                  foreach($gettiketRefund->result() as $tiket): ?>
                  <input type="hidden" name="no_tiket[]" value="<?= $tiket->no_tiket ?>">
                  <?php endforeach;  ?>

                  <!-- -->
                  <input type="hidden" name="total" value="<?= $refund_total ?>">
                  <input type="hidden" name="kd_booking" value="<?= $kd_booking ?>">
                  <input type="hidden" name="no_refund" value="<?= $no_refund ?>">
                  <input type="hidden" name="nama_depan" value="<?= $nama_depan ?>">
                  <input type="hidden" name="nama_belakang" value="<?= $nama_belakang ?>">
                  <input type="hidden" name="namalengkap" value="<?= $nama_depan.' '.$nama_belakang ?>">
                  <input type="hidden" name="email" value="<?= $email_user ?>">
                  <input type="submit" name="confirmrefundmatchpener" class="btn btn-info" value="KONFIRMASI REFUND" onclick="return confirm('Anda yaking ingin Mengkonfirmasi tiket ini ?')" style="width:50%" >
                </form>
              <?php }else if($jumlahdatarefund == $jumlahdatapessenger && $jumlahrefunddetail < $jumlahdetailpener){ ?>
                <form action="<?= base_url('adm/refund/confirm_matchpessenger_updatebooking') ?>" method="post">
                  <?php
                  //DATA BOOKING
                  foreach ($data_booking as $key ):?>
                  <input type="hidden" name="data_gelar" value="<?= $key->gelar ?>">
                  <input type="hidden" name="data_alamat" value="<?= $key->alamat ?>">
                  <input type="hidden" name="data_telp" value="<?= $key->no_tlp ?>">
                  <input type="hidden" name="data_tipebooking" value="<?= $key->tipe_booking ?>">
                  <?php endforeach; ?>


                  <?php foreach($getpenerbanganRefund->result() as $refunPener): ?>
                  <input type="text" name="no_refund_penerbangan[]" value="<?= $refunPener->no_refund ?>"><br/>
                  <input type="text" name="no_penerbangan[]" value="<?= $refunPener->no_penerbangan ?>"><br>


                  <!-- not array -->
                  <input type="text" name="no_pener" value="<?= $refunPener->no_penerbangan ?>"><br>
                  <?php endforeach; ?>

                  <?php foreach($gettiketRefund->result() as $tiket): ?>
                  <input type="hidden" name="no_tiket[]" value="<?= $tiket->no_tiket ?>">
                  <?php endforeach;  ?>

                  <input type="hidden" name="total" value="<?= $refund_total ?>">
                  <input type="hidden" name="kd_booking" value="<?= $kd_booking ?>">
                  <input type="hidden" name="no_refund" value="<?= $no_refund ?>">
                  <input type="hidden" name="namalengkap" value="<?= $nama_depan.' '.$nama_belakang ?>">
                  <input type="hidden" name="nama_belakang" value="<?= $nama_belakang ?>">
                  <input type="hidden" name="nama_depan" value="<?= $nama_depan ?>">
                  <input type="hidden" name="email" value="<?= $email_user ?>">
                  <input type="submit" name="confirmrefund" class="btn btn-warning" value="KONFIRMASI REFUND" onclick="return confirm('Anda yaking ingin Mengkonfirmasi tiket ini ?')" style="width:50%" >
                </form>

              <?php } ?>
            </div>
          </div>


          <!-- <?php echo 'data refund: '.$jumlahdatarefund.'</br>' ?>
          <?php echo 'data pessenger: '.$jumlahdatapessenger.'</br>' ?>
          <?php echo 'data refund detail: '.$jumlahrefunddetail.'</br>' ?>
          <?php echo 'data detail penerbangan: '. $jumlahdetailpener.'</br>' ?> -->

>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e


        </div>
      </div>
    </div>



      <div class="row">
<<<<<<< HEAD
        <div class="container">
=======
        <div class="container-fluid">
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
          <div class="callout callout-danger">
              <h5><i class="fa fa-info"></i> Note:</h5>
              Periksa kembali data data refund dan data pemesanan awal, silahkan klik <b>validasi</b> untuk melihat data pemesanan kode booking.

            </div>
          <div class="card">
            <div class="card-header no-border">
              <div class="d-flex justify-content-between">
                <h3 class="card-title"></h3>
                <a href="javascript:void(0);" class="btn btn-info btn-xs" id="validasi_notiket" data-id="<?= $kd_booking ?>">Validasi Data</a>
              </div>
              <br>
            <div class="row">
              <div class="col-md-6 animated fadeInUp">
                <!-- Input addon -->
                 <div class="card card-danger">
                   <div class="card-header">
                    <div class="d-flex justify-content-between">
                     <h3 class="card-title">DATA REFUND #<?= $no_refund ?></h3>

                    </div>
                   </div>
                   <div class="card-body">

                     <div class="row">
                       <div class="col-6">
                         <div class="form-group">
                           <label>Email</label>
                           <input type="text" class="form-control" value="<?= $refund_email  ?>" readonly>
                         </div>
                       </div>
                       <div class="col-6">
                         <div class="form-group">
                           <label>Tanggal Refund</label>
                           <input type="text" class="form-control" value="<?= $tgl_refund  ?>" readonly>
                         </div>
                       </div>
                     </div>



                     <div class="form-group">
                       <label>Pengaju Refund</label>
                       <input type="text" class="form-control" value="<?= $refund_name  ?>" readonly>
                     </div>



                     <div class="form-group">
                       <label>Alamat</label>
                       <input type="text" class="form-control" value="<?= $refund_alamat  ?>" readonly>
                     </div>

                     <div class="form-group">
                       <label>Telepon</label>
                       <input type="text" class="form-control" value="<?= $refund_telepon  ?>" readonly>
                     </div>



                     <div class="form-group">
                       <h4>Total Refund : </h4>
                       <input type="text" class="form-control" name="" value="<?= $refund_total ?>" style="width:50%; align:right">
                     </div>

                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
              </div>
              <div class="col-md-6" id="validasi_refund">
                <!-- Input addon -->
                 <div class="card card-danger">
                   <div class="card-header">
                     <h3 class="card-title">DATA BOOKING</h3>
                   </div>
                   <div class="card-body">
                     <div id="content_databooking"></div>
                   </div>
                   <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
              </div>
              </div>
            </div>



          </div>
        </div>
      </div>














      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="<?= base_url().'assets/js/jquery.js' ?>"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#validasi_refund').hide();
      $('#show_data_penumpang').hide();
      $('#show_data_penerbangan').hide();


      //validasi refund
      $('#validasi_notiket').on('click', function(){
        $('#validasi_refund').show().addClass('animated zoomIn');

        var kd_booking = $(this).attr('data-id');
        var html = '';
        var i;
        $.ajax({
          type: 'ajax',
          url: '<?= base_url() ?>adm/dashboard/get_booking_kd/'+kd_booking,
          async: false,
          dataType: 'json',
          success: function(data){
            for(i=0; i<data.length; i++){
              html += '<div class="form-group">'+
                        '<label> Nama Pengaju </label>'+
                        '<input type="text" class="form-control" value="'+data[i].nama_depan+'"'+
                      '</div>'+
                      '<div class="form-group">'+
                        '<label> Alamat</label>'+
                        '<input type="text" class="form-control" value="'+data[i].alamat+'"'+
                      '</div>'+
                      '<div class="form-group">'+
                        '<label> Telepon </label>'+
                        '<input type="text" class="form-control" value="'+data[i].no_tlp+'"'+
                      '</div>'+
                      '<div class="form-group">'+
                        '<label> Email </label>'+
                        '<input type="text" class="form-control" value="'+data[i].email+'"'+
                      '</div>';

            }
            $('#content_databooking').html(html);
          }
        });
      });


      $('#validasi_show_penerbangan').on('click', function() {
         $('#show_data_penerbangan').show().addClass('animated fadeInUp');
<<<<<<< HEAD
         var kd_booking = $(this).attr('data-id');
=======
         var no_refund = $(this).attr('data-id');
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
         var html = '';
         var i;
         $.ajax({
           type: 'ajax',
<<<<<<< HEAD
           url: '<?= base_url() ?>adm/dashboard/getRefundPenerbangan/'+kd_booking,
=======
           url: '<?= base_url() ?>adm/dashboard/getRefundPenerbangan/'+no_refund,
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
           async: false,
           dataType: 'json',
           success: function(data){
             for(i=0; i<data.length; i++){
               html += '<tr>'+
<<<<<<< HEAD
                       '<td style="font-size:60%">'+data[i].no_penerbangan+'</td>'+
                       '<td style="font-size:60%">'+data[i].kota_asal+'</td>'+
                       '<td style="font-size:60%">'+data[i].kota_tujuan+'</td>'+
                       '<td style="font-size:60%">'+data[i].tgl_keberangkatan+'</td>'+
                       '<td style="font-size:60%">'+data[i].jam_keberangkatan+'</td>'+
                       '<td style="font-size:60%">'+data[i].jam_tiba+'</td>'+
                       '<td style="font-size:60%">'+data[i].class+'</td>'+
                       '<td style="font-size:60%">'+data[i].harga_tiket+'</td>'+
                       '<td style="font-size:60%">'+data[i].provider+'</td>'+
=======
                       '<td style="font-size:90%">'+data[i].no_penerbangan+'</td>'+
                       '<td style="font-size:90%">'+data[i].kota_asal+'</td>'+
                       '<td style="font-size:90%">'+data[i].kota_tujuan+'</td>'+
                       '<td style="font-size:90%">'+data[i].tgl_keberangkatan+'</td>'+
                       '<td style="font-size:90%">'+data[i].tgl_tiba+'</td>'+
                       '<td style="font-size:90%">'+data[i].class+'</td>'+
                       '<td style="font-size:90%">'+data[i].harga_tiket+'</td>'+
                       '<td style="font-size:90%">'+data[i].provider+'</td>'+
>>>>>>> a98b0010e8a80ec42b0bf151cadf50584754880e
                       '</tr>';
             }
            $('#isi_data_penerbangan').html(html);
           }
         });
      });







    });
  </script>
