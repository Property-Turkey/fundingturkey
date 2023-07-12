<?php
    require_once('locale.php');
    require_once('configs.php');
?>

<!DOCTYPE html>
<html lang="<?=$currlang?>">

<head>
<title><?= __('site_title') ?></title>

    <meta charset="utf-8" />

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="Cache-control" content="max-age=31557600">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    
    <!-- Meta SEO -->
    <meta name="description" content="<?= __('site_description') ?>">
    <meta name="keywords" content="<?= __('site_keywords') ?>">
    <meta name="generator" content="<?=__( 'site_title' )?>" />
    <meta name="keywords" content="<?=__( 'site_keywords' )?>" />
    <meta name="description" content="<?=__( 'site_description' )?>" />
    <meta name="author" content="<?=__( 'site_title' )?>" />
    <meta name="date" content="May. 10, 2023" />

    <!-- Meta Open Graph -->
    <meta property="og:title" content="<?=__( 'site_title' )?>" />
    <meta property="og:url" content="<?=$_SERVER['REQUEST_URI']?>" />
    <meta property="og:description" content="<?=__( 'site_description' )?>" />
    <meta property="og:type" content="Article" />
    <meta property="og:image" content="https://fundingturkey.com/img/site_image.jpg" />

    <!-- CSS -->
    <link rel="shortcut icon" href="<?=APP_FOLDER?>/img/favicon.ico">
    <link rel="stylesheet" href="<?=APP_FOLDER?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=APP_FOLDER?>/css/style.css">
</head>

<body>
    <div id="msgHolder" class="msgHolder" onclick="closeMessage()">
        <div id="msg">
            <div></div>
        </div>
    </div>

    <?php include_once( getCurrentPage() ) ?>

    <?php include_once('Elements/footer.php') ?>

    <script type="text/javascript" src="<?=APP_FOLDER?>/js/jquery-3.6.3.min.js"></script>
    <script src="<?=APP_FOLDER?>/js/bootstrap.min.js"></script>

    <script>

        $(document).ready(function() {
            if($(window).width() > 576 && 'our-funds,contact-us,frequently-asked-questions,news'.indexOf( '<?=$currPage?>' ) > -1){ 
                $('header').css( 'min-height', $(window).height()-150 );
            }
            if($(window).width() > 576 && 'home, contact-us'.indexOf( '<?=$currPage?>' ) > -1){ 
                $('header').css( 'min-height', $(window).height() );
            }
        });
        
        function openMenu(tar) {
            $(tar || '.links_side').addClass('show');
        }
        function closeMenu(tar) {
            $(tar || '.links_side').removeClass('show');
        }
        
        function openMessage(msg, cls) {
            $('#msgHolder').addClass('showMsg');
            $('#msgHolder #msg').addClass(cls);
            $('#msgHolder #msg > div').html(msg);
        }
        function closeMessage() {
            $('#msgHolder').removeClass('showMsg');
            $('#msgHolder #msg > div').html('');
        }

        function doSend(e, form) {
            
            e.preventDefault();

            !form ? form = '#form' : form;

            // var isValid = chk(false, {
            //     'name': 'isEmpty',
            //     'email': 'isEmail',
            //     'phone': 'isPhone',
            //     'zip': 'isZipcode'
            // }, form);
            // if (isValid) {
                _setCvrBtn(form, 1);
                $.ajax({
                        url: 'send_email2.php',
                        method: "POST",
                        data: {
                            name:       $(form + ' #name').val(),
                            phone:      $(form + ' #phone').val(),
                            email:      $(form + ' #email').val().toLowerCase(),
                            message:    $(form + ' #message').val(),
                        },
                    })
                    .done(function(res) {

                        _setCvrBtn(form, 0);
                        var response = JSON.parse(res)
                        if (response.status == 'SUCCESS') {

                            $(form + ' #name').val('');
                            $(form + ' #phone').val('');
                            $(form + ' #email').val('');
                            $(form + ' #message').val('');

                            setTimeout(() => {
                                openMessage(response.msg || '<?= __('email-sent') ?>', 'success');
                            }, 1000);
                            
                        } else {
                            openMessage(response.msg || '<?= __('email-fail') ?>', 'error');
                        }
                    })
                    .fail(function(err) {
                        openMessage(response.msg || '<?= __('email-fail-connection') ?>', 'error');
                        _setCvrBtn(form, 0);
                        console.log("error " + err);
                    })
            // }
        }

        function _setCvrBtn(tar, param) {
            var elm = $(tar + " button");
            if (param == 1) {
                elm.addClass('loader');
            } else {
                elm.removeClass('loader');
            }
        }

    </script>
    
</body>

</html>