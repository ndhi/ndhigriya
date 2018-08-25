<!--about us-->
<div class="container" id="about">
    <div class="row no-gutters">
        <div class="col-xs-12 col-md-12">
            <h1 class="judul">ABOUT US</h1>
            <div class="separator"></div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="kiri_about">
              <p class="kata_left1">Bagaimana Kami</p>
              <p class="kata_left2">BEKERJA</p>
            </div><!--end kiri_about-->
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="kanan_about">
              <p class="kata_right">
                  kami mengetahui kebutuhan setiap
                  pengguna satu dengan lainya berbeda
                  ide ide atau gagasan yang anda
                  inginkan akan kami kerjakan
                  sesuai dengan keinginan anda
              </p>
            </div><!--end kiri_about-->
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <p class="declaration">
              kami mempunyai team yang mempunyai tugas masing masing yang kami
              bagi menjadi Frontend dan Backend developer yang akan menyelesaikan
              project berdasarkan keahlian yang dimiliki
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h1 class="sub-title">APA YANG KAMI KERJAKAN</h1>
            <div class="separator-sub"></div>
            <div class="sub-content">
                <!-- item content -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="item-content">
                        <i class="fa fa-flask"></i>
                        <h1 class="title-item-content">research</h1>
                        <p class="declaration-item-content">
                          Pada research ini kami akan melakukan pencatatan data masalah atau solusi yang di butuhkan untuk membuat sistem yang akan berjalan nantinya. Data ini untuk proses design.
                        </p>
                    </div>
                </div><!--col-->
                <!-- item content -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="item-content">
                        <i class="fa fa-code"></i>
                        <h1 class="title-item-content">Design</h1>
                        <p class="declaration-item-content">
                        Dan untuk tahap Design ini kami melakukan perancangan model dan desain sesuai dari pencatatan data masalah yang didapat. Yang nantinya untuk bisa di kembangkan.
                        </p>
                    </div>
                </div><!--col-->
                <!-- item content -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="item-content">
                        <i class="fa fa-cogs"></i>
                        <h1 class="title-item-content">Development</h1>
                        <p class="declaration-item-content">
                          Pada development ini kami mengembangkan perancangan model yang ada serta melakukan testing agar nantinya sistem bisa digunakan dengan baik.
                        </p>
                    </div>
                </div><!--col-->
                <!-- item content -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="item-content">
                        <i class="fa fa-rocket"></i>
                        <h1 class="title-item-content">Launch</h1>
                        <p class="declaration-item-content">
                        Untuk tahap launch ini sistem sudah bisa digunakan. Dan pada tahap ini juga kami masih melakukan testing untuk memastikan sistem benar benar bisa digunakan.
                        </p>
                    </div>
                </div><!--col-->

            </div><!--sub-content-->
        </div><!--col-->
    </div><!--row-->
</div><!--end container-->
<!--end about us-->

<!--portfolio-->
<div class="bg_portfolio" id="portfolio">
<div class="container">
<div class="row no-gutters">
  <div class="col-xs-12 col-md-12">
    <h1 class="judul">PORTFOLIO</h1>
    <div class="separator"></div>
  </div>
  <div class="portfolio">
<?php foreach ($portfolio->result() as $query_portfolio) { ?>
      <div class="col-md-3 col-sm-6 col-xs-12 btsbwh">
          <div class="panel bggreen">
              <div class="panel-header header-bggreen">
                <h5><?= $query_portfolio->title; ?></h5>
              </div>
              <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                  <a href="<?= $query_portfolio->linkpage; ?>" target="_blank" class="panel-view">Lihat Portfolio &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <img class="portfolio-img" <?= !empty($query_portfolio->image) ? img(['src' => base_url().'assets/uploads/portfolio/'.$query_portfolio->image,'style' => '']) : img(['src' => base_url().'assets/uploads/no-image.png','style' => '']); ?>
          </div>
      </div><!-- end col-md-3 -->
<?php } ?>
      <div class="col-md-3 col-sm-6 col-xs-12 btsbwh">
          <div class="panel bgdefault">
              <div class="panel-header header-bgdefault">
                <h5>BlankExample</h5>
              </div>
              <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                  <a href="underconstructions" class="panel-view">Lihat Portfolio &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
          </div>
      </div><!-- end col-md-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12 btsbwh">
          <div class="panel bgorange">
              <div class="panel-header header-bgorange">
                <h5>HB</h5>
              </div>
              <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                    <a href="underconstructions" class="panel-view">Lihat Portfolio &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <img  class="portfolio-img" src="<?php echo base_url()."assets/templates/assets"; ?>/img/portfolio/2.jpg">
          </div>
      </div><!-- end col-md-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12 btsbwh">
          <div class="panel bgblue">
              <div class="panel-header header-bgblue">
                <h5>BlankExample</h5>
              </div>
              <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12">
                  <a href="underconstructions" class="panel-view">Lihat Portfolio &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
          </div>
      </div><!-- end col-md-3 -->
  </div><!--end portfolio-->
</div><!--end row no-gutters-->
</div><!--end container-->
</div><!--bg_portfolio-->
<!--end portfolio-->

<!--Team page-->
<div id="team" class="team">
    <div class="overlay-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="title-team text-center">
                        <h1>OUR TEAM</h1>
                        <h4>Berikut team kami yang akan siap melayani untuk melakukan beberapa perkejaan<br>
                        serta menyelesaikan secara baik. kami melakukan research terhadap problematika masalah yang ada<br>
                        untuk dijadikan bahan pembuatan website atau aplikasi yang akan membatu mempermudah menyelesaikan permasalahan yang ada.<br>

                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--end team-->

<div class="container" id="detail-team">
    <div class="row no-gutters">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h1 class="sub-title-declaration">Libatkan kami di project anda</h1>
            <div class="separator-sub"></div>
            <div class="sub-content">
                <!-- item content -->
                <?php foreach ($partner->result() as $query_partner) { ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="item-content-img">
                      <img class="iner-item-content-img" <?= !empty($query_partner->image) ? img(['src' => base_url().'assets/uploads/partner/'.$query_partner->image,'style' => '']) : img(['src' => base_url().'assets/uploads/no-image.png','style' => '']); ?>                 
                        <div class="over">
                            <div class="over-text">
                            <h1><?= $query_partner->name; ?></h1>
                            <p><?= $query_partner->jabatan; ?></p>
                            <!-- <p class="over-text-declaration">text</p> -->
                            </div>
                        </div>
                    </div>
                </div><!--col-->
                <?php } ?>
            </div><!--sub-content-->
        </div><!--col-->
    </div><!--row-->
</div><!--end container-->


<!-- END TEAM -->