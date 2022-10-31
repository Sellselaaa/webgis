<?php 
$title = "Daftar Data Bencana";
include_once "header.php";
include_once "koneksi.php"; ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th width="30%">Nama Bencana</th>
                  <th width="20%">Tanggal</th>
                  <th width="10%">Alamat</th>
                  <th width="13%">Kecamatan</th>
                  <th width="20%">Keterangan</th>
                  <th width="20%">Orang yang Luka</th>
                  <th width="20%">Orang yang Meninggal</th>
                  <th width="27%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $data = file_get_contents('http://localhost/webgis/databencana/ambildata.php');
                $id=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $item->namabencana; ?></td>
                <td><?php echo $item->tanggal; ?></td>
                <td><?php echo $item->alamat; ?></td>
                <td><?php echo $item->wilayah; ?></td>
                <td><?php echo $item->keterangan; ?></td>
                <td><?php echo $item->luka; ?></td>
                <td><?php echo $item->meninggal; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a target="" href="detail.php?Id_bencana=<?php echo $item->Id_bencana; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php $id++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>