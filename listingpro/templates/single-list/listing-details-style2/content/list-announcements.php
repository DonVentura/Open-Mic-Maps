<?phpglobal $listingpro_options;$lp_detail_page_styles  =   $listingpro_options['lp_detail_page_styles'];$announcements_show =   true;if( isset( $listingpro_options['announcements_dashoard'] ) && $listingpro_options['announcements_dashoard'] == 0 ){    $announcements_show =   false;}if( $announcements_show == false ) return false;$lp_listing_announcements  =   get_post_meta( get_the_ID(), 'lp_listing_announcements', true );if( $lp_listing_announcements != '' && is_array( $lp_listing_announcements ) && count($lp_listing_announcements) > 0 ):    ?><div class="tab-pane" id="announcements_tab">    <div class="lp-listing-announcement">        <?php        foreach ( $lp_listing_announcements as $k => $v ):            if( $v['annLI'] == get_the_ID() ):                if( !isset( $v['annStatus'] ) || $v['annStatus'] == 1 ):                    $annSt  =   'style1';                    if( isset( $v['annSt'] ) && !empty( $v['annSt'] ) )                    {                        $annSt  =    $v['annSt'];                    }                    ?>                    <div class="announcement-wrap ann-<?php echo $annSt; ?>">                        <i class="fa fa-bullhorn" aria-hidden="true"></i>                        <p>                            <?php                            if( !empty( $v['annTI'] ) ):                            ?>                            <strong><?php echo $v['annTI']; ?></strong>                            <?php endif; ?>                            <span><?php echo $v['annMsg']; ?></span>                        </p>                        <?php                        if( !empty( $v['annBT'] ) ):                            ?>                            <a target="_blank" href="<?php echo $v['annBL']; ?>" class="announcement-btn"><?php echo $v['annBT']; ?></a>                        <?php endif; ?>                        <div class="clearfix"></div>                    </div>                <?php endif; endif; endforeach; ?>        <div class="clearfix"></div>    </div></div><?php endif; ?>