
<?php // Header
?>
<header class="header bg-contact container-fluid">

    <?php include_once('Elements/mmenu.php') ?>

    <?php // Video 
    ?>
    <div class="row form_div sides_padding">
        <div class="col-12">
            <h1><?= __('contact') ?></h1>
        </div>
        <div class="col-12">
            
            <form class="form_1" id="form" onsubmit="doSend(event);">
                <h2><?=__('form_header')?></h2>
                <div><input type="input" placeholder="<?=__('name')?>" id="name" /></div>
                <div><input type="input" placeholder="<?=__('phone')?>" id="phone" /></div>
                <div><input type="input" placeholder="<?=__('email')?>" id="email" /></div>
                <div><textarea type="input" placeholder="<?=__('message')?>" id="message"></textarea></div>
                <label>
                    <input type="checkbox" id="kvkk" /> <small> <?=__('kvkk')?> </small>
                    <a href="<?=APP_FOLDER?>/file/KVKK Aydınlatma Metni.pdf" target="_blank">
                        <img src="img/Icon_Link_black.svg" class="h22px" title="Icon_Link" alt="Icon_Link"/>
                    </a>
                </label>
                <label>
                    <input type="checkbox" id="digital_sign" /> <small> <?=__('digital_sign')?> </small>
                    <a href="<?=APP_FOLDER?>/file/Elektronik İleti Gönderimini Kabul Ediyorum.pdf" target="_blank">
                        <img src="img/Icon_Link_black.svg" class="h22px" title="Icon_Link" alt="Icon_Link"/>
                    </a>
                </label>
                <div><button class="butn butn-red"><?=__('contact')?></button></div>
            </form>

        </div>
    </div>
</header>