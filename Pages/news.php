<?php // Header
?>
<header class="header bg-news accordion_section our_funds" id="accordion">

    <div class="container-fluid">
        <?php include_once('Elements/mmenu.php') ?>
    </div>
    <div class="col-12 ">
        <h1><?= __('news') ?></h1>
    </div>
</header>



<div class=" accordion_section our_funds" id="accordion">


    <section class="container-fluid top_maring2">
        <div class="row sides_padding_3">

            <?php //section 0
            ?>
            <div class="col-12  accordion_header_dark collapsed" data-toggle="collapse" data-target="#sec_0">
                <button class="butn butn-blue-light butn-w100"><?= __('news_announce_title_1') ?></button>
            </div>

            <div class="col-12 accordion_content mb-5">
                <div class="collapse" id="sec_0" data-parent="#accordion">
                    <div class="row sides_padding_2">
                        <!-- <h2 class="col-12 ">
                            <?= __('news_announce_title_1') ?>
                        </h2> -->
                        <div class="col-12 ">
                            <?= __('news_announce_body_1') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>