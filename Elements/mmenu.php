<div class="row top_part sides_padding">
    <div class="col-lg-2 col-7 ">
        <a class="logo" href="<?= APP_FOLDER ?>/">
            <img src="img/FT_Logo_New.svg" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>">
        </a>
    </div>

    <div class="col-lg-10 col-5 icons hideWeb">
        <div class="closeBtn">
            <a href="javascript:void(0);" onclick="openMenu()">
                <img src="img/Menu_Icon.svg" onclick="closeMenu()" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>">
            </a>
        </div>
    </div>

    <div class="col-lg-10 col-12 links_side">
        <div class="mmenu ">
            <div class="row top">
                <div class="col-6">
                    <img src="img/FT_Logo_New.svg" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>"
                        onclick="javascript:window.location.href='<?= APP_FOLDER ?>/'">
                </div>
                <div class="col-6">
                    <img src="img/Menu_Icon_Dark.svg" onclick="closeMenu()" title="<?= __('site_motto') ?>" alt="<?= __('site_motto') ?>">
                </div>
            </div>
            <a href="<?=APP_FOLDER?>/about-us" class="<?=$currPage == 'about-us' ? 'active' : ''?>"><?= __('aboutus') ?></a>
            <a href="<?=APP_FOLDER?>/our-funds" class="<?=$currPage == 'our-funds' ? 'active' : ''?>"><?= __('our_fund') ?></a>
            <a href="<?=APP_FOLDER?>/frequently-asked-questions" class="<?=$currPage == 'frequently-asked-questions' ? 'active' : ''?>"><?= __('faq') ?></a>
            <a href="<?=APP_FOLDER?>/contact-us" class="<?=$currPage == 'contact-us' ? 'active' : ''?>"><?= __('contact') ?></a>
            <a href="<?=APP_FOLDER?>/news" class="<?=$currPage == 'news' ? 'active' : ''?>"><?= __('news') ?></a>
            <?php /*
            <a href="<?=APP_FOLDER?>/announcements" class="<?=$currPage == 'announcements' ? 'active' : ''?>"><?= __('announcements') ?></a>*/?>
        </div>
        <div class="bg" onclick="closeMenu()"></div>
    </div>
</div>