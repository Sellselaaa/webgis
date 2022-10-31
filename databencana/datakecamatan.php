<?php 
$title = "Daftar Data Kecamatan";
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
                  <th width="30%">Nama Kecamatan</th>
                  <th width="13%">Luas</th>
                  <th width="13%">Kodepos</th>
                  <th width="30%">Deskripsi</th>
                  <th width="13%">Total Bencana</th>
                  <th width="27%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $data = file_get_contents('http://localhost/webgis/databencana/ambildatakecamatan.php');
                $id=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $item->namakecamatan; ?></td>
                <td><?php echo $item->luas; ?></td>
                <td><?php echo $item->kodepos; ?></td>
                <td><?php echo $item->deskripsi; ?></td>
                <td><?php echo $item->total; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a target="" href="detailkecamatan.php?Id_kecamatan=<?php echo $item->Id_kecamatan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
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