<?=$this->extend( 'layout/template' );?>

<?=$this->section( 'content' );?>
<div class="container">
      <div class="row">
            <div class="col-8">
                  <div class="card">
                        <div class="card-header">
                              <h2 class="my-3">Form Tambah Data GameHouse</h2>
                        </div>
                        <div class="card-body">
                              <?=$validation->listErrors();?>
                              <form action="/ghs/save" method="post" enctype="multipart/form-data">
                                    <?=csrf_field();?>
                                    <div class="mb-3">
                                          <label for="nama" class="form-label">Nama</label>
                                          <input type="text"
                                                class="form-control <?=( $validation->hasError( 'nama' ) ) ? 'is-invalid' : '';?>"
                                                id="nama" autofocus name="nama" value="<?=old( 'nama' );?>">
                                          <div class="invalid-feedback">
                                                <?=$validation->getError( 'nama' );?>
                                          </div>
                                    </div>

                                    <div class="mb-3">
                                          <label for="alamat" class="form-label">Alamat</label>
                                          <input type="text" class="form-control" name="alamat" id="alamat"
                                                value="<?=old( 'alamat' );?>">
                                    </div>
                                    <div class="mb-3">
                                          <label for="region" class="form-label">Region</label>
                                          <select name="region" id="region" class='form-control'
                                                value="<?=old( 'region' );?>">
                                                <option value="ACEH">ACEH</option>
                                                <option value='SUMATERA UTARA'> SUMATERA UTARA</option>
                                                <option value='SUMATERA BARAT'> SUMATERA BARAT</option>
                                                <option value='RIAU'> RIAU</option>
                                                <option value='JAMBI'> JAMBI</option>
                                                <option value='SUMATERA SELATAN'> SUMATERA SELATAN</option>
                                                <option value='BENGKULU'> BENGKULU</option>
                                                <option value='LAMPUNG'> LAMPUNG</option>
                                                <option value='KEPULAUAN BANGKA BELITUNG'> KEPULAUAN BANGKA BELITUNG
                                                </option>
                                                <option value='KEPULAUAN RIAU'> KEPULAUAN RIAU</option>
                                                <option value='DKI JAKARTA'> DKI JAKARTA</option>
                                                <option value='JAWA BARAT'> JAWA BARAT</option>
                                                <option value='JAWA TENGAH'> JAWA TENGAH</option>
                                                <option value='DI YOGYAKARTA'> DI YOGYAKARTA</option>
                                                <option value='JAWA TIMUR'> JAWA TIMUR</option>
                                                <option value='BANTEN'> BANTEN</option>
                                                <option value='BALI'> BALI</option>
                                                <option value='NUSA TENGGARA BARAT'> NUSA TENGGARA BARAT</option>
                                                <option value='NUSA TENGGARA TIMUR'> NUSA TENGGARA TIMUR</option>
                                                <option value='KALIMANTAN BARAT'> KALIMANTAN BARAT</option>
                                                <option value='KALIMANTAN TENGAH'> KALIMANTAN TENGAH</option>
                                                <option value='KALIMANTAN SELATAN'> KALIMANTAN SELATAN</option>
                                                <option value='KALIMANTAN TIMUR'> KALIMANTAN TIMUR</option>
                                                <option value='KALIMANTAN UTARA'> KALIMANTAN UTARA</option>
                                                <option value='SULAWESI UTARA'> SULAWESI UTARA</option>
                                                <option value='SULAWESI TENGAH'> SULAWESI TENGAH</option>
                                                <option value='SULAWESI SELATAN'> SULAWESI SELATAN</option>
                                                <option value='SULAWESI TENGGARA'> SULAWESI TENGGARA</option>
                                                <option value='GORONTALO'> GORONTALO</option>
                                                <option value='SULAWESI BARAT'> SULAWESI BARAT</option>
                                                <option value='MALUKU'> MALUKU</option>
                                                <option value='MALUKU UTARA'> MALUKU UTARA</option>
                                                <option value='PAPUA BARAT'> PAPUA BARAT</option>
                                                <option value='PAPUA'>PAPUA</option>
                                          </select>

                                    </div>
                                    <p>Games</p>
                                    <div id="carousel-personal-loan" class="carousel slide">
                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner">
                                                <div class="item active">
                                                      <div class="item">
                                                            <div class="row per-loan-city">
                                                                  <div class="quote-title"
                                                                        msg="Please select the place where you live.">
                                                                        Lorem
                                                                        ipsum dolor sit amet consectetur adipisicing
                                                                        elit. Et, inventore.</div>
                                                                  <div class="col-xs-1"></div>
                                                                  <div class="col-xs-2">
                                                                        <label>
                                                                              <img src="/img/ml.jpg" width="130"
                                                                                    height="130">
                                                                              <input type="radio" name="game"
                                                                                    id="mobile_legend" value="ml.jpg"
                                                                                    for="mobile_legend">
                                                                              <span>Mobile Legend</span>
                                                                        </label>
                                                                  </div>
                                                                  <div class="col-xs-2">
                                                                        <label>
                                                                              <img src="/img/pubg.jpg" width="130"
                                                                                    height="130">
                                                                              <input type="radio" name="game" id="pubg"
                                                                                    value="pubg.jpg" for="pubg">
                                                                              <span>Pubg</span>
                                                                        </label>
                                                                  </div>
                                                                  <div class="col-xs-2">
                                                                        <label>
                                                                              <img src="/img/ff.jpg" width="130"
                                                                                    height="130">
                                                                              <input type="radio" name="game" id="ff"
                                                                                    value="ff.jpg">
                                                                              <span>Free Fire</span>
                                                                        </label>
                                                                  </div>
                                                                  <div class="col-xs-2">
                                                                        <label>
                                                                              <img src="/img/aov.jpg" width="130"
                                                                                    height="130">
                                                                              <input type="radio" name="game" id="aov"
                                                                                    value="aov.jpg">
                                                                              <span>AOV</span>
                                                                        </label>
                                                                  </div>
                                                                  <div class="col-xs-2">
                                                                        <label>
                                                                              <img src="/img/lol.jpg" width="130"
                                                                                    height="130">
                                                                              <input type="radio" name="game" id="lol"
                                                                                    value="lol.jpg">
                                                                              <span>League Of Legend</span>
                                                                        </label>
                                                                  </div>
                                                                  <div class="col-xs-1"></div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="item">
                                                      <div class="row per-loan-sources">
                                                            <div class="col-xs-1"></div>
                                                            <div class="col-xs-2">
                                                                  <label>
                                                                        <img src="/img/sm.png" width="130" height="130">
                                                                        <input type="radio" name="game" id="sausage_man"
                                                                              value="sm.png">
                                                                        <span>Sausage Man</span>
                                                                  </label>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                  <label>
                                                                        <img src="/img/valor.jpg" width="130"
                                                                              height="130">
                                                                        <input type="radio" name="game" id="valor"
                                                                              value="valor.jpg">
                                                                        <span>Valorant</span>
                                                                  </label>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                  <label>
                                                                        <img src="/img/pb.png" width="130" height="130">
                                                                        <input type="radio" name="game" id="pb"
                                                                              value="pb.png">
                                                                        <span>Point Blank</span>
                                                                  </label>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                  <label>
                                                                        <img src="/img/dota2.jpg" width="130"
                                                                              height="130">
                                                                        <input type="radio" name="game" id="dota2"
                                                                              value="dota2.jpg">
                                                                        <span>DOTA2</span>
                                                                  </label>
                                                            </div>
                                                            <div class="col-xs-4"></div>
                                                      </div>
                                                </div>

                                          </div>
                                          <!-- Controls -->
                                          <a class="left carousel-control" href="#carousel-personal-loan"
                                                data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                          </a>
                                          <a class="right carousel-control" href="#carousel-personal-loan"
                                                data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                          </a>
                                    </div>

                                    <div class="mb-3">
                                          <label for="regristasi" class="form-label">Regristasi</label>
                                          <input type="date" class="form-control" name="regristasi" id="regristasi"
                                                value="<?=old( 'regristasi' );?>">
                                    </div>
                                    <div class="mb-3">
                                          <label for="macthday" class="form-label">Matchday</label>
                                          <input type="date" class="form-control" name="macthday" id="macthday"
                                                value="<?=old( 'macthday' );?>">
                                    </div>
                                    <div class="mb-3">
                                          <label for="profile" class="col-sm-2 col-form-label"
                                                style="margin-left: -1.5rem;">Profile</label>
                                          <div class="col-sm-2">
                                                <img src="/img/default.png" alt="" class="img-thumbnail img-Preview">
                                          </div>
                                          <div class="col-sm-8 uk-col-img">
                                                <div class="custom-file">
                                                      <input type="file"
                                                            class="form-control <?= ($validation->hasError('profile')) ? 'is-invalid' : ''; ?>"
                                                            id="gambar" name="profile" onchange="previewImg()">
                                                      <div class="invalid-feedback">
                                                            <?= $validation->getError('profile'); ?>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="my-3">
                                          <label for="jumlah_slot" class="form-label slot">Slot</label>
                                          <input type="number" class="form-control" name="jumlah_slot" id="jumlah_slot"
                                                value="<?=old( 'jumlah_slot' );?>">
                                    </div>

                                    <fieldset class="form-group mb-3">
                                          <label for="reward">Masukkan Reward</label>
                                          <select class="form-control" id="reward">
                                                <option>PILIH OPSI</option>
                                                <option>UANG</option>
                                                <option>ITEM VIRTUAL</option>
                                          </select>
                                    </fieldset>

                                    <fieldset class="form-group mb-3" id='input_reward' style='display:none'>
                                          <label for="prize_pool">Prize pool</label>
                                          <input type="number" class="form-control" id="prize_pool"
                                                placeholder="Tambahkan prize pool" name="prize_pool">

                                          <label for="1st">1st</label>
                                          <input type="number" class="form-control" id="1st" placeholder="Lebih lengkap"
                                                name='1st'>

                                          <label for="2nd">2nd</label>
                                          <input type="number" class="form-control" id="2nd" placeholder="Lebih lengkap"
                                                name='2nd'>

                                          <label for="3rd">3rd</label>
                                          <input type="number" class="form-control" id="3rd" placeholder="Lebih lengkap"
                                                name='3rd'>



                                    </fieldset>

                                    <div class="mb-3">
                                          <label for="deskripsi" class="form-label">Deskripsi</label>
                                          <input type="textarea" class="form-control" name="deskripsi" id="deskripsi"
                                                value="<?=old( 'deskripsi' );?>">
                                    </div>
                                    <fieldset class="form-group mb-3">
                                          <div class="form-check form-switch row-10">
                                                <input id='rules' class="form-check-input uk-swicth mx-1 my-2 "
                                                      type="checkbox" id="flexSwitchCheckDefault">
                                                <label class="form-check-label fs-5 ml-lg-5"
                                                      for="flexSwitchCheckDefault">Tambahkan
                                                      perataranmu</label>
                                          </div>
                                    </fieldset>
                                    <fieldset class="form-group mb-3" id="rulesinput" style="display: none;">
                                          <label for="rules" class="form-label">Rules</label>
                                          <input type="text" class="form-control" name="rules"
                                                value="<?=old( 'rules' );?>">
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                  </div>
            </div>
      </div>
      </form>
</div>

<?=$this->endSection();?>