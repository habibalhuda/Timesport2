<?=$this->extend( 'layout/template' );?>
<?=$this->section( 'content' );?>
<div class="container">
      <h2 class="text-center">Detail GameHouse</h2>
      <a class="mt-3" href="/ghs">Kembali ke daftar GameHouse</a>
</div>
<div class="container bg">
      <div class="row justify">
            <div class="col-12">
                  <div class="row no-gutters">
                        <div class="col-md-4 parent">
                              <img src="/img/<?=$ghs['game'];?>" class="card-img" alt="" />
                        </div>



                        <div class="kotak1">
                              <div class="text-kotak1">

                                    <div style="display: inline-block">
                                          <label style="display: block" class="label-text" for="">Regristasi</label>
                                          <h5 class="card-text">
                                                <b class="text-white"><?=$ghs['regristasi'];?></b>
                                          </h5>
                                    </div>
                                    <div style="display: inline-block">
                                          <label style="display: block" class="label-text" for="">Matchday</label>
                                          <p class="card-text">
                                                <b class="text-white">
                                                      <?=$ghs['macthday'];?></b>
                                          </p>
                                    </div>
                                    <div style="display: inline-block">
                                          <label style="display: block" class="label-text" for="">Jumlah slot</label>
                                          <p class="card-text tampil-text">
                                                <b class="text-white justify-content-center">
                                                      <?=$ghs['jumlah_slot'];?></b>
                                          </p>
                                    </div>
                              </div>

                        </div>
                  </div>
                  <div class="atribut"></div>
                  <div class="tombol">
                        <a name="" id="" class="btn btn-warning btn-edit tombol-edit" href="/ghs/edit/<?=$ghs['id'];?>"
                              role="button">Edit</a>
                        <form action="/ghs/<?=$ghs['id'];?>" method="post" class="d-inline btn-delete tombol-delete">
                              <?=csrf_field();?>
                              <input type="hidden" name="_method" value="DELETE" />
                              <button onclick="return confirm('apakah anda yakin?');" class="btn btn-danger"
                                    type="submit">Delete</button>
                        </form>
                  </div>
                  <a name="" id="" class="btn btn-primary tombol-ikut" href="#" role="button">Ikut Tournament</a>
                  <br /><br />


                  <div class="konten1">
                        <div class="row">
                              <div class="col-lg-6">
                                    <p class="card-text text-center prize-pool my-3">
                                          <i class="fas fa-award">
                                                <label for="">Prizepool</label></i>

                                          <b class="achive"><?=$ghs['prize_pool'];?></b>
                                    </p>
                                    <div class="text-thropy ">
                                          <p class="card-text uk-thropy">
                                                <b>1 <sup>ST</sup></b>
                                                <b class=" thropy"><?=$ghs['1st'];?></b>
                                          </p>
                                          <p class="card-text uk-thropy">
                                                <b>2 <sup>ND</sup></b>
                                                <b class=" thropy"><?=$ghs['2nd'];?></b>
                                          </p>
                                          <p class="card-text uk-thropy">
                                                <b>3 <sup>RD</sup></b>
                                                <b class=" thropy"><?=$ghs['3rd'];?></b>
                                          </p>
                                          <label class="pay">Payment</label>
                                          <p class="card-text uk-thropy">
                                                <b>DANA</b>
                                          </p>
                                          <p class="card-text uk-thropy">
                                                <b>OVO</b>
                                          </p>
                                          <p class="card-text uk-thropy">
                                                <b>GOPAY</b>
                                          </p>

                                    </div>
                              </div>
                        </div>
                  </div>

                  <div class="konten2">
                        <div class="row">
                              <div class="col-lg-12">

                                    <div class="text-konten2">

                                          <p class="card-text">
                                                <label for="">
                                                      <h3 class="text-center garis-bawah"><b>Deskripsi</b></h3>
                                                </label>
                                                <b>
                                                      <?=$ghs['deskripsi'];?>
                                                </b>


                                          </p>
                                          <p class="card-text">
                                                <label for="">
                                                      <h3 class="text-center garis-bawah"><b>Rules</b></h3>
                                                </label>
                                                <b><?=$ghs['rules'];?></b>

                                          </p>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="konten3">
                        <div class="konten3-text">
                              <p style="display: inline; ">
                                    <span class="text-white text-center"><b>Unduh Brosur </b>
                                    </span>
                              </p>
                              <p class="card-text" style="display: inline;"" >
                      <span class=" text-white"><b>Unduh Formulir</b></span>
                              </p>
                        </div>
                  </div>

            </div>
      </div>
</div>
<?=$this->endSection();?>