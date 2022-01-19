<?=$this->extend( 'layout/template' );?>
<?=$this->section( 'content' );?>



<div class="container">
      <div class="row">
            <h1 class="mt-2 text-center ">Daftar GameHouse</h1>
            <div class="col-6">
                  <form action="" method="post">
                        <div class="col-lg-6">
                              <div class="input-group mb-5">
                                    <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.."
                                          name="keyword">

                                    <span class="input-group-btn">
                                          <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                                    </span>

                              </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                  </form>
            </div>
      </div>
</div>
<div class="container-fluid">
      <div class="row justify-content-center">
            <div class="col-lg-10 ">
                  <a class="btn btn-primary my-3 " id="tombol" href="/ghs/create" role="button">Tambahkan
                        Gamehouse</a>
                  <div class="card-body uk-card">
                        <table class="table uk">
                              <thead>
                                    <tr class="card-header">
                                          <th scope="col-lg-5">#</th>
                                          <th scope="col-lg-5">Profile</th>
                                          <th scope="col-lg-5">Nama</th>
                                          <th scope="col-lg-5">Alamat</th>
                                          <th scope="col-lg-5">Region</th>
                                          <th scope="col-lg-5">Regristasi</th>
                                          <th scope="col-lg-5">Slot</th>
                                          <th scope="col-lg-5">Game</th>
                                          <th scope="col-lg-5">Aksi</th>
                                    </tr>
                              </thead>

                              <tbody>
                                    <?php $i = 1 + ( 6 * ( $currentPage - 1 ) );?>
                                    <?php foreach ( $ghs as $g ): ?>
                                    <tr class='konten-gh blob2 '>
                                          <th scope="row"><?=$i++;?></th>
                                          <td><img src="/img/<?=$g['profile'];?>" alt="" class="img-fluid "></td>
                                          <td class='card-text '><?=$g['nama'];?></td>
                                          <td class='card-text'><?=$g['alamat'];?></td>
                                          <td class='card-text'><?=$g['region'];?></td>
                                          <td class='card-text'><?=$g['regristasi'];?></td>
                                          <td class='card-text'><?=$g['jumlah_slot'];?></td>
                                          <td> <img class="game" src="/img/<?= $g['game']; ?>" alt=""></td>
                                          <td class='card-text'><a name="" id="tombol" class="btn btn-primary "
                                                      href="/ghs/<?=$g['id'];?>" role="button">Detail</a>
                                          </td>
                                    </tr>
                                    <?php endforeach;?>
                              </tbody>
                        </table>
                        <?=$pager->links( 'gamehouse', 'ghs_pagination' );?>
                  </div>
            </div>

      </div>
</div>

<?=$this->endSection();?>