<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fusslp Blog</title>

    <!-- Favicon di generate otomatis pake tool online, googling ya -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= asetURL(); ?>img/ikon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= asetURL(); ?>img/ikon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= asetURL(); ?>img/ikon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= asetURL(); ?>img/ikon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= asetURL(); ?>img/ikon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= asetURL(); ?>img/ikon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= asetURL(); ?>img/ikon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= asetURL(); ?>img/ikon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asetURL(); ?>img/ikon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= asetURL(); ?>img/ikon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asetURL(); ?>img/ikon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= asetURL(); ?>img/ikon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asetURL(); ?>img/ikon/favicon-16x16.png">
    <link rel="manifest" href="<?= asetURL(); ?>img/ikon/manifest.json">

    <meta name="msapplication-TileColor" content="#FFDF6E">
    <meta name="msapplication-TileImage" content="<?= asetURL(); ?>img/ikon/ms-icon-144x144.png">
    <meta name="theme-color" content="#FFDF6E">

    <!-- Import Bootstrap 4, need update from npm -->
    <!-- <link rel="stylesheet" href="<?= npmURL(); ?>bootstrap/dist/css/bootstrap.min.css"> -->

    <!-- Kostum CSS -->
    <link rel="stylesheet" href="<?= vendorURL(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= vendorURL(); ?>css/tema.css">

    <?php
    if ($this->uri->segment(2) == 'create' || $this->uri->segment(2) == 'edit')
    {
    ?>
    <!-- Dropzone -->
    <link rel="stylesheet" href="<?= npmURL(); ?>dropzonejs/dist/min/dropzone.min.css">

    <!-- Froala beserta pluginnya -->
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/froala_editor.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/colors.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/emoticons.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/line_breaker.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/char_counter.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/draggable.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/table.min.css">
    <!-- <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/file.min.css"> -->
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/image.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/video.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/help.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>froala-editor/css/plugins/image_manager.min.css">
    <?php
    } else {
    // Not show anything
    }?>
    <!-- <script src="<?= npmURL(); ?>requirejs/require.js"></script> -->
    <!-- Impor FontAwesome 5 -->
    <link rel="stylesheet" href="<?= vendorURL(); ?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= npmURL(); ?>sweetalert2/dist/sweetalert2.min.css">
    <style type="text/css">
      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #FFDF6E;
      }
      .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px arial;
      }
    </style>
    <script src="<?= npmURL(); ?>jquery/dist/jquery.min.js"></script>
    <script>
    $(window).on('load', function(){
      $("#splashScreen").removeClass("zoomIn");
      $("#splash").addClass("lightSpeedOut");
      $(".preloader").fadeOut();
    })
    </script>
</head>
<body>
  <div class="preloader" id="splash">
    <div class="loading zoomIn" id="splashScreen">
      <img src="<?= imageURL(); ?>loading.gif" width="120" rel="preload">
      <p>Harap Tunggu</p>
    </div>
  </div>
    <!-- <script>
		require.config({
			baseUrl: "/assets/vendor/js/node_modules",
			paths: {
				"@ckeditor5-build-decoupled-document": "@ckeditor/ckeditor5-build-decoupled-document"
			},
			waitSeconds: 15,
			nodeRequire: require
		});
		require( ["some/module", "my/module", "a.js", "b.js"],
			function(someModule,    myModule) {
				This function will be called when all the dependencies
				listed above are loaded. Note that this function could
				be called before the page is loaded.
				This callback is optional.
			}
		);
    </script> -->
