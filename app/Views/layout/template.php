<!doctype html>
<html lang="en">
<title><?=$title;?></title>


<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
      <!-- Mycss -->
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css"
            integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body>

      <?=$this->include( 'layout/navbar' );?>
      <?=$this->renderSection( 'content' );?>

      <script src="/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>

</body>

</html>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</script>









<script type='text/javascript'>
function previewImg() {

      const gambar = document.querySelector('#gambar');
      const imgPreview = document.querySelector('.img-Preview')


      //  priview nama file

      //  preview gambar file
      const fileGambar = new FileReader();
      fileGambar.readAsDataURL(gambar.files[0]);
      fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
      }
}

$(document).on('click', '#rules', function() {
      if ($("#rules").is(':checked')) {
            $('#rulesinput').show();
      } else {
            $('#rulesinput').hide();
      }
});

$(document).on('change', '#reward', function() {
      if ($("#reward option:selected").text() == 'PILIH OPSI') {
            $('#input_reward').hide();

      } else {
            $('#input_reward').show();
      }
});






$(document).ready(function() {
      $('.radio-group .radio').click(function() {
            $('.selected .fa').removeClass('fa-check');
            $('.radio').removeClass('selected');
            $(this).addClass('selected');
      });
});

// auto refersh
$(document).ready(function() {
      $('.text').fadeOut('slow').load('create.php');
      refresh();

});

function refresh() {
      setTimeout(function() {
            $('.text'), fadeOut('slow').load('create.php').fadeIn('slow');
            refresh();
      }, 200);
}
</script>
</script>


</body>

</html>