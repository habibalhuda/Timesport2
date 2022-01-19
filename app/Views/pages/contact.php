<?=$this->extend( 'layout/template' );?>

<?=$this->section( 'content' );?>
<div class="container">

    <div class="row">
        <div class="col">
            <h1>Kontak Saya</h1>
            <?php foreach ( $bio as $b ): ?>
            <ul>
                <li><?=$b['nama'];?></li>
                <li><?=$b['alamat'];?></li>
                <li><?=$b['kota'];?></li>
            </ul>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?=$this->endSection();?>