
<?php // Header
?>
<header class="header bg-faq container-fluid">

    <?php include_once('Elements/mmenu.php') ?>

    <?php // Video 
    ?>
    <div class="row form_div sides_padding">
        <div class="col-12">
            <h1><?= __('frequently_asked_questions') ?></h1>
        </div>
        <!-- <div class="col-12">
            <form class="form_1" id="form" onsubmit="doSend(event);">
                <h2><?=__('form_header')?></h2>
                <div><input type="input" placeholder="<?=__('name')?>" id="name" /></div>
                <div><input type="input" placeholder="<?=__('phone')?>" id="phone" /></div>
                <div><input type="input" placeholder="<?=__('email')?>" id="email" /></div>
                <div><button class="butn butn-red"><?=__('contact')?></button></div>
            </form>
        </div> -->
    </div>
</header>

<div class="faq_div" id="accordion">

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 1
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_1">
                <button class="butn butn-gray-light butn-w100"><?= __('question_1') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse" id="question_1" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <h2><?= __('question_1_h2_1') ?></h2>
                            <?= __('question_1_p_1') ?>
                            <h2><?= __('question_1_h2_2') ?></h2>
                            <?= __('question_1_p_2_prt1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_1_p_2_prt2') ?>
                            <h2><?= __('question_1_h2_3') ?></h2>
                            <?= __('question_1_p_3_prt1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_1_p_3_prt2') ?>
                            <h2><?= __('question_1_h2_4') ?></h2>
                            <?= __('question_1_p_4') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 2
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_2">
                <button class="butn butn-gray-light butn-w100"><?= __('question_2') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_2" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_1.webp">
                                <img src="img/FAQ_Feat_WhatisREIF.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_2_p_1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_2_p_2') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 3
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_3">
                <button class="butn butn-gray-light butn-w100"><?= __('question_3') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_3" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_2.webp">
                                <img src="img/FAQ_Feat_WhatisVCIF.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_3_p_1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_3_p_2') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 4
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_4">
                <button class="butn butn-gray-light butn-w100"><?= __('question_4') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_4" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 990px)" srcset="img/FAQ_Image_3.webp">
                                <img src="img/FAQ_Feat_REIF-VCFDifferences.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_4_p_1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_4_p_2') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 5
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_5">
                <button class="butn butn-gray-light butn-w100"><?= __('question_5') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_5" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_4.webp">
                                <img src="img/FAQ_Feat_WhoCanCreate.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_5_p_1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_5_p_2') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 6
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_6">
                <button class="butn butn-gray-light butn-w100"><?= __('question_6') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_6" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <?= __('question_6_p_1') ?>
                            <h3><?= __('question_6_h3_1') ?></h3>
                            <?= __('question_6_p_2_prt1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_6_p_2_prt2') ?>
                            <h3><?= __('question_6_h3_2') ?></h3>
                            <?= __('question_6_p_3_prt1') ?>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_6_p_3_prt2') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid ">
        <div class="row sides_padding_3">
            <?php //Question 7
            ?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_7">
                <button class="butn butn-gray-light butn-w100"><?= __('question_7') ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_7" data-parent="#accordion">
                    <div class="row sides_padding_2">

                        <div class="col-lg-4">
                            <picture>
                                <source media="(max-width: 950px)" srcset="img/FAQ_Image_5.webp">
                                <img src="img/FAQ_Feat_Tax.webp" title="<?= __('site_alt_img') ?>" alt="<?= __('site_alt_img') ?>">
                            </picture>
                        </div>

                        <div class="col-lg-4">
                            <?= __('question_7_p_1') ?>
                            <h3><?= __('question_7_h3_1') ?></h3>
                            <?= __('question_7_p_2') ?>
                        </div>

                        <div class="col-lg-4">
                            <h3><?= __('question_7_h3_2') ?></h3>
                            <?= __('question_7_p_3') ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container-fluid ">
        <div class="row sides_padding_3">

            <?php //Questions 8-16
            ?>
            <?php for($i=7; $i<=16; $i++){?>
            <div class="col-12 accordion_header collapsed" data-toggle="collapse" data-target="#question_<?=$i?>">
                <button class="butn butn-gray-light butn-w100"><?= __('question_'.$i) ?></button>
            </div>
            
            <div class="col-12 accordion_content">
                <div class="collapse " id="question_<?=$i?>" data-parent="#accordion">
                    <div class="row sides_padding_2">
                        <p class="col-12">
                            <?=__('question_'.$i.'_p_1')?>
                        </p>
                    </div>
                </div>
            </div>
            <?php }?>
            
        </div>
    </section>
</div>