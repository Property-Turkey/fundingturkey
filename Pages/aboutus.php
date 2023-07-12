


<?php // Header
?>
<div class="header bg-no-photo">

    <header class="container-fluid">
        <?php include_once('Elements/mmenu.php') ?>
    </header>

    <?php // Tabs
    ?>
    <section class="container-fluid tabs_section">
        <div class="row sides_padding">
            <div class="col-12 ">
                <h1><?=__('aboutus')?></h1>
            </div>
            <div class="col-lg-4">
                <div class="tabs_btns nav">
                    <a data-toggle="pill" data-target="#tab_1" class="tab_item active"><?=__('our_story')?></a>
                    <a data-toggle="pill" data-target="#tab_2" class="tab_item"><?=__('ecosystem')?></a>
                    <a data-toggle="pill" data-target="#tab_3" class="tab_item"><?=__('giuding_principles')?></a>
                    <a data-toggle="pill" data-target="#tab_4" class="tab_item"><?=__('license')?></a>
                    <?php /* <a data-toggle="pill" data-target="#tab_4" class="tab_item"><?=__('managers')?></a>
                    <a data-toggle="pill" data-target="#tab_6" class="tab_item"><?=__('business_partners')?></a>
                    <a data-toggle="pill" data-target="#tab_7" class="tab_item"><?=__('downloads')?></a> */?>
                </div>
            </div>
            <div class="col-lg-8 tab-content">
                
                <?php // our_story
                ?>
                <div class="tab-pane active" id="tab_1">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_1')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_1')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_1')?>
                        </div>
                    </div>
                </div>
                
                <?php // ecosystem
                ?>
                <div class="tab-pane fade" id="tab_2">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_2')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_2')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_2')?>
                        </div>
                    </div>
                </div>

                <?php // giuding_principles
                ?>
                <div class="tab-pane fade" id="tab_3">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_3')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_3')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_3')?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <h2><?=__('tab_header_3_2')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_3_2')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_3_2')?>
                        </div>
                    </div>
                </div>

                <?php // License
                ?>
                <div class="tab-pane fade" id="tab_4">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_4')?></h2>
                        </div>
                        <!-- <div class="col-lg-6">
                            <?=__('tab_p1_4')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_4')?>
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <a href="file/Onaylı_Yetki_Belgesi_FT_License.pdf" target="_blank" class="butn butn-gray-light butn-w100 dl-icon"><?=__('tab_butn_4')?></a>
                        </div>
                    </div>
                </div>
                
                <?php // managers 
                ?>
                <?php /*<div class="tab-pane fade" id="tab_4">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_4')?></h2>
                        </div>
                        <div class="col-lg-6">
                            
                        </div>
                        <div class="col-lg-6">
                            
                        </div>
                    </div>
                </div>
                
                <?php // license
                ?>
                <div class="tab-pane fade" id="tab_5">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_5')?></h2>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p1_5')?>
                        </div>
                        <div class="col-lg-6">
                            <?=__('tab_p2_5')?>
                        </div>
                        <div class="col-12">
                            <div class="butn butn-gray-light butn-w100 bg-icon-download"><?=__('certificate_of_authority')?></div>
                        </div>
                    </div>
                </div>
                
                <?php // business_partners
                ?>
                <div class="tab-pane fade" id="tab_6">
                    <div class="row">
                        <div class="col-12">
                            <h2><?=__('tab_header_6')?></h2>
                        </div>
                        <div class="col-lg-6">
                            
                        </div>
                        <div class="col-lg-6">
                            
                        </div>
                    </div>
                </div>

                <?php // downloads
                ?>
                <div class="tab-pane fade" id="tab_7">
                    <div class="row">
                        <div class="col-12">
                            <div class="butn butn-gray-light butn-w100 bg-icon-download"><?=__('finding_turkey_info_packet')?></div>
                        </div>
                        <div class="col-12">
                            <div class="butn butn-gray-light butn-w100 bg-icon-download"><?=__('legal_disclimers')?></div>
                        </div>
                    </div>
                </div>*/?>

            </div>
        </div>
    </section>
</div>

