<?php
$title = "Sistem Informasi Geografis Monitoring Bencana Alam Kabupaten Banyumas";
include_once "header.php"; ?>

<!-- Bagian artikel berita -->
<div class="container-right">
  <div class="row-right">
        <div class="col-md-100">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="pull-left">Isi Berita</div>
          <br>
        </div>
        <div class="panel-body">
         <?php
          include "koneksiberita.php";
          $data=mysqli_fetch_row(mysqli_query($con,"select * from berita where id_berita='".$_GET['id_berita']."'"));
          date_default_timezone_set("Asia/Jakarta");
          $tgl=explode("-",$data[1]);
          $x  = mktime(0, 0, 0, date("$tgl[1]"), date("$tgl[2]"),  date("$tgl[0]")); 
          switch(date("l",$x))
          {
            case 'Monday':$nmh="Senin";break; 
            case 'Tuesday':$nmh="Selasa";break; 
            case 'Wednesday':$nmh="Rabu";break; 
            case 'Thursday':$nmh="Kamis";break; 
            case 'Friday':$nmh="Jum'at";break; 
            case 'Saturday':$nmh="Sabtu";break; 
            case 'Sunday':$nmh="Minggu";break; 
          }
         ?>
         
          <h5 style='color:#777;'>
            <strong><?php echo $data[3]; ?></strong>
          </h5>
         <small style='font-size:8pt;color:#ea7048'><?php echo "$nmh, tanggal $tgl[2]-$tgl[1]-$tgl[0]" ?></small>
         <hr>
          
            <img src='img/<?php echo $data[2] ?>'   style="float:left;padding:5px 10px 5px 10px;width:250px;">
          <!-- Bagian Beritanya-->
            <p><?php echo $data[4]; ?></p>
          </div>
        </div>
      </div>
    </div>                  
</div>                                  
<!-- Akhir dari artikel berita -->  

                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>
</div>
  

    
    <?php include_once "footer.php"; ?>