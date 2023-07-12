


<?php // Header
?>
<header class="header bg-home container-fluid">

    <?php include_once('Elements/mmenu.php') ?>

    <?php // Video 
    ?>
    <div class="row video_div sides_padding">
        <div class="col-lg-5 mb-5">
            <a class="video_frame" href="https://www.youtube.com/@PropertyTurkeyCom" target="_blank">
                <img src="img/Video_Rectangle_Grey_With_Logo.svg" title="<?= __('YouTube_Fund_Thumb') ?>" alt="<?= __('YouTube_Fund_Thumb') ?>">
                <div>
                    <small><?=__('a_message_from')?></small><br/>
                    <b>CAMERON DEGGIN</b>
                </div>
            </a>
        </div>
        <div class="col-lg-7 info">
            <h1><?= __('partnered_for_growth') ?></h1>
            <p><?= __('paretnered_for_growth_p') ?></p>
        </div>
    </div>
</header>

<?php // Features
?>
<section class="container-fluid features_div">
    <div class="row">
        <div class="col-4">
            <div class="img">
                <img src="img/Icon_CapitalGains.svg" title="<?= __('CapitalGains_Icon') ?>" alt="<?= __('CapitalGains_Icon') ?>">
            </div>
            <div class="info">
                <h3><?= __('CapitalGains_Icon') ?></h3>
                <p><?= __('CapitalGains_Icon_p') ?></p>
            </div>
        </div>
        <div class="col-4">
            <div class="img">
                <img src="img/Icon_IncomeTax.svg" title="<?= __('IncomeTax_Icon') ?>" alt="<?= __('IncomeTax_Icon') ?>">
            </div>
            <div class="info">
                <h3><?= __('IncomeTax_Icon') ?></h3>
                <p><?= __('IncomeTax_Icon_p') ?></p>
            </div>
        </div>
        <div class="col-4">
            <div class="img">
                <img src="img/Icon_SPK.svg" title="<?= __('SPK_Licensed') ?>" alt="<?= __('SPK_Licensed') ?>">
            </div>
            <div class="info">
                <h3><?= __('SPK_Licensed') ?></h3>
                <p><?= __('SPK_Licensed_p') ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="img">
                <img src="img/Icon_Citizenship.svg" title="<?= __('CBI_Icon') ?>" alt="<?= __('CBI_Icon') ?>">
            </div>
            <div class="info">
                <h3><?= __('CBI_Icon') ?></h3>
                <p><?= __('CBI_Icon_p') ?></p>
            </div>
        </div>
        <div class="col-4">
            <div class="img">
                <img src="img/Icon_Expert.svg" title="<?= __('Expert_Icon') ?>" alt="<?= __('Expert_Icon') ?>">
            </div>
            <div class="info">
                <h3><?= __('Expert_Icon') ?></h3>
                <p><?= __('Expert_Icon_p') ?></p>
            </div>
        </div>
        <div class="col-4">
            <div class="img">
                <img src="img/Icon_HighReturns.svg" title="<?= __('HighReturns_Icon') ?>" alt="<?= __('HighReturns_Icon') ?>">
            </div>
            <div class="info">
                <h3><?= __('HighReturns_Icon') ?></h3>
                <p><?= __('HighReturns_Icon_p') ?></p>
            </div>
        </div>
    </div>
</section>

<?php // Who are we
?>
<section class="container-fluid aboutus_div">
    <div class="row info">

        <div class="skewed">
            <img src="img/skewed_edge.svg" title="<?= __('HighReturns_Icon') ?>" alt="<?= __('HighReturns_Icon') ?>">
        </div>

        <div class="col-lg-4 paragraph">
            <h2><?= __('who_are_we') ?></h2>
            <?= __('who_are_we_p') ?>
        </div>
        <div class="col-lg-8 bg_img">
            <?php // Background 
            ?>
        </div>
    </div>
</section>

<?php // More details button
?>
<section class="container-fluid ">
    <div class="row ">
        <div class="col-12 call2action">

            <a href="<?=APP_FOLDER?>/our-funds" class="skew_btn">

                <div class="skewed">
                    <img src="img/skewed_top_edge.svg" title="<?= __('HighReturns_Icon') ?>" alt="<?= __('HighReturns_Icon') ?>">
                </div>

                <h3><?= __('for_more_details') ?></h3>
                <p><?= __('for_more_details_p') ?></p>
            </a>
        </div>
    </div>
</section>