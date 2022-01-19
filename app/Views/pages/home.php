<?=$this->extend( 'layout/template' );?>

<?=$this->section( 'content' );?>
<div class="container">
    <div class="row">
        <h1><?=$title;?></h1>
        <?php d( $angka )?>
    </div>
</div>
<?=$this->endSection();?>