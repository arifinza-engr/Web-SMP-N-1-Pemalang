<div class="recent_event_area section__padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="section_title text-center mb-70">
          <h3 class="mb-45">GALERI KEGIATAN SEKOLAH</h3>

        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-top-border">
          <div class="row gallery-item">
            <?php foreach ($all_galeri->result() as $row) : ?>
              <div id="card_galeri">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" alt="Card image cap" id="galeri_gambar">
                  <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $row->galeri_judul; ?></h5>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>