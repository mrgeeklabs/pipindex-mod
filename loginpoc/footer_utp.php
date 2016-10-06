<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/new_includes/translation_files/'.$lang.'/general_translations.php');

?>
<footer>
    <div class="container_12">
        <div class="row">
            <div class="grid_3 w1">
                <div style="height: 210px;" class="maxheight1"><div class="box_inner">
                        <h5><?php echo $footer['about'];?></h5>
                        <ul class="list-2">
                            <li><a href="<?php echo $base_link;?>about-academy-financial-trading-online.htm"><?php echo $nav['foot']['about'];?></a></li>
                            <li><a href="<?php echo $base_link;?>learn-how-to-be-a-trader-code-of-practice.htm"><?php echo $nav['foot']['cop'];?></a></li>
                            <li><a href="<?php echo $base_link;?>continuing-professional-development.htm"><?php echo $nav['foot']['cpd'];?></a></li>
                            <li><a href="<?php echo $base_link;?>learn-how-to-trade-partnership-opportunities.htm"><?php echo $nav['foot']['partnership_op'];?></a></li>
                            <?php if($lang == 'jp'){?>
                                <li><a href="http://www.academyft.com/jp/pages/company-detail.html">企業情報</a></li>
                            <?php } elseif($lang == 'en'){?>
                                <li><a href="http://www.academyft.com/company-seeking-finance.php">VENTURE CAPITAL</a></li>
                            <?php }?>
                        </ul>
                    </div></div>
            </div>
            <div class="grid_3 w1">
                <div style="height: 210px;" class="maxheight1"><div class="box_inner">
                        <h5><?php echo $footer['courses'];?></h5>
                        <ul class="list-2">
                            <li><a href="<?php echo $base_link;?>learn-how-to-be-a-trader-foundation.htm"><?php echo $nav['foot']['foundation'];?></a></li>
                            <li><a href="<?php echo $base_link;?>learn-how-to-be-a-trader-ultimate.htm"><?php echo $nav['foot']['ultimate'];?></a></li>
                            <li><a href="<?php echo $base_link;?>learn-how-to-trade-online-testimonials.htm"><?php echo $nav['foot']['testimonials'];?></a></li>
                        </ul>
                    </div></div>
            </div>
            <div class="grid_3 w1">
                <div style="height: 210px;" class="maxheight1"><div class="box_inner">
                        <h5><?php echo $footer['trade'];?></h5>
                        <ul class="list-2">
                            <li><a href="<?php echo $base_link;?>why-learn-to-trade.htm"><?php echo $nav['foot']['why_trade'];?></a></li>
                            <li><a href="<?php echo $base_link;?>why-trend-trading-online.htm"><?php echo $nav['foot']['why_trend'];?></a></li>
                            <?php if($lang != 'ru'){?>
                                <li><a href="<?php echo $base_link;?>learn-how-to-trade-forex.htm"><?php echo $nav['foot']['forex_trading'];?></a></li>
                            <?php } ?>
                            <li><a href="<?php echo $base_link;?>learn-how-to-trade-online-money-management.htm"><?php echo $nav['foot']['man_risk'];?></a></li>
                        </ul>
                    </div></div>
            </div>
            <!--            <div class="grid_3 w1">
                <div style="height: 210px;" class="maxheight1"><div class="box_inner">
                    <h5><?php echo $footer['resources'];?></h5>
                    <ul class="list-2">
                       <li><a href="learn-how-to-trade-online-platform-support.htm"><?php echo $nav['foot']['platform_support'];?></a></li>
                    </ul>
                </div></div>
            </div> -->
            <div class="grid_3 w1">
                <div style="height: 210px;" class="maxheight1"><div class="box_inner">
                        <ul class="list-3">
                            <li><a href="<?php echo $base_link;?>FAQ.php"><?php echo $nav['foot']['faq'];?></a></li>
                            <li><a href="<?php echo $base_link;?>contact-academy-financial-trading-online.htm"><?php echo $nav['foot']['contact_us'];?></a></li>
                            <li> <a href="/complaint-form.php" target="_new"><?php if(isset( $nav['foot']['Complaint Form'])){ echo $nav['foot']['Complaint Form'];}else{ echo 'Complaint Form'; }?></a></li>

                            <li><a href="<?php echo $base_link;?>terms.htm"><?php echo $nav['foot']['terms'];?></a></li>
                            <li><a href="<?php echo $base_link;?>disclaimer.htm"><?php echo $nav['foot']['disclaimer'];?></a></li>

                            <li><a href="<?php echo $base_link;?>privacy-policy.htm"><?php echo $nav['foot']['pivacy'];?></a></li>
                            <?php if($lang == 'jp'){?>
                                <li><a href="http://www.academyft.com/jp/pages/commercial-transactions.html">特商法取引に基づく表示について</a></li>
                            <?php }?>
                        </ul>
                    </div></div>
            </div>
        </div>        <div class="row">
            <ul class="list-services clearfix">
                <li><a class="list-services" href="<?php echo $fb_url;?>" target="new"><span class="sp-1"></span></a></li>
                <li><a class="list-services" href="https://twitter.com/AcademyofFT" target="new"><span class="sp-2"></span></a></li>
                <li><a class="list-services" href="https://www.linkedin.com/company/academy-of-financial-trading" target="new"><span class="sp-3"></span></a></li>
                <li><a class="list-services" href="https://plus.google.com/+AcademyftOfficial/posts" rel="publisher" target="new"><span class="sp-4"></span></a></li>
                <li><a class="list-services" href="http://academyoffinancialtrading.tumblr.com/" target="new"><span class="sp-5"></span></a></li>
                <li><a class="list-services" href="http://www.pinterest.com/academyofft/" target="new"><span class="sp-6"></span></a></li>
                <li><a class="list-services" href="https://www.youtube.com/c/academyftofficial" target="new"><span class="sp-7"></span></a></li>


            </ul>
        </div>
        <div class="row-4">
            <span class="color-1">&copy; 2016</span> | <B><span style="color:#fff;">Academy of Financial Trading.</span></B> <?php echo $footer['rights_reserved'];?>.
            <!--{%FOOTER_LINK} -->
        </div>
        <div class="grid_12 row row-4">
            <div class="footer-txt">
                <?php echo $footer['disclaimer_text'];?>
            </div>
        </div>
    </div>
</footer>