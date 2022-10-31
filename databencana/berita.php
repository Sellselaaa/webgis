<?php
$title = "Sistem Informasi Geografis Monitoring Bencana Alam Kabupaten Banyumas";
include_once "header.php"; ?>


<div class="container-right">
  <div class="row-right">
        <div class="col-md-100">
               
                    
               
                <div class="panel-body" style="background-color:#f5f5f5;color:#333; ">

                <?php
          include "koneksiberita.php";
          date_default_timezone_set("Asia/Jakarta");
                    $qu=mysqli_query($con,"select * from berita order by id_berita desc limit 3");
          while($has=mysqli_fetch_row($qu))
                    {
                                                                    
                        $tgl=explode("-",$has[1]);
            $x  = mktime(0, 0, 0, date("$tgl[1]"), date("$tgl[2]"),  date("$tgl[0]")); 
                        switch(date("l",$x))
                        {
                            case 'Monday':$nmh="Senin";break; 
                            case 'Tuesday':$nmh="Selasa";break; 
                            case 'Wednesday':$nmh="Rabu";break; 
                            case 'Thursday':$nmh="Kamis";break; 
                            case 'Friday':$nmh="Jum'at";break; 
                            case 'Saturday':$nmh="Sabtu";break; 
                            case 'Sunday':$nmh="minggu";break; 
                        }
                        echo "
                            <div class='row' style='margin-bottom:12px;border-bottom: solid 1px #337ab7; '>
                <div class='col-md-3'>
                  <img class='img-default  img-center' src='img/$has[2]' width='250' height='135' alt='agenda' style='padding-top: 10px;'>
                </div>
                                <!-- Bagian Beritanya-->
                                <div class='col-md-20'>
                  <h5 style='color:#446e9b;'>
                    <strong><a href='detailberita.php?id_berita=$has[0]' style='color:#446e9b'>$has[3]</a></strong>
                  </h5>
                  <small style='font-size:8pt;color:#ea7048'>$nmh, ".$has[1]."</small>
                  <p>".strip_tags(substr(substr($has[4],0,200),0,strrpos(substr($has[4],0,200),' ')))." ...</p>
                </div>
                
                <p style='text-align:right;'>
                  
                    <button class='btn btn-primary'>
                    
                     <a href='detailberita.php?id_berita=$has[0] '>Read More</a>
                    </button>
                  </a>
                </p>
                            </div>
              
                            "; 
                    }
                ?>
            

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