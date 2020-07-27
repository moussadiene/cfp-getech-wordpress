<?php tempo_get_template_part( 'templates/footer/navigation' ); ?>

<!-- tools wrapper -->
<div class="gardener-tools">

    <!-- container -->
    <div <?php echo tempo_container_class(); ?>>
        <div <?php echo tempo_row_class(); ?>>

            <!-- content -->
            <div <?php echo tempo_content_class(); ?>>
                <div <?php echo tempo_row_class(); ?>>

                    <?php
                        /**
                         *  Social Items
                         *
                         *  Customer can disable this section by disabling
                         *  all social items.
                         *
                         *  To remove default RSS social item please go to:
                         *
                         *  Appearance / Customize / Social - item RSS
                         **/

                        $items = tempo_cfgs::get( 'social' );

                        $has_social_items = false;

                        foreach( $items as $item ){
                            $url = tempo_options::get( $item );
                            $has_social_items = $has_social_items || !empty( $item );
                        }

                        if( tempo_options::get( 'display-rss' ) ){
                            $rss = tempo_options::get( 'rss' );

                            $has_social_items = $has_social_items || !empty( $rss );
                        }

                        $classes = 'col-lg-12 copyright-wrapper';

                        if( $has_social_items ) :
                            $classes = 'col-lg-5 copyright-wrapper';
                    ?>

                            <!-- social content -->
                            <div class="col-lg-7 social-wrapper">
                                <div class="gardener-social">

                                    <?php
                                        foreach( $items as $item ){
                                            $url = tempo_options::get( $item );

                                            if( !empty( $url ) ){
                                                echo '<a href="' . esc_url( $url ) . '" class="gardener-social-item tempo-icon-' . esc_attr( $item ) . '" target="_blank" rel="nofollow"></a>';
                                            }
                                        }

                                        if( tempo_options::get( 'display-rss' ) ){
                                            $rss = tempo_options::get( 'rss' );

                                            if( !empty( $rss ) ){
                                                echo '<a href="' . esc_url( $rss ) . '" class="gardener-social-item tempo-icon-rss" target="_blank" rel="nofollow"></a>';
                                            }
                                        }
                                    ?>

                                </div>
                            </div><!-- end social content -->

                    <?php endif; ?>


                    <!-- copyright content -->
                    <div class="<?php echo esc_attr( $classes ); ?>">
                        <div class="gardener-copyright">
                            <p>

                                <?php
                                    /**
                                     *
                                     *  Content Copyright
                                     *  Customer can overwrite Content Copyright from the theme options
                                     *
                                     *  Appearance / Customize / Others / Copyright - option "Website Content Copyright"
                                     */
                                ?>

                                <span class="copyright"><?php echo tempo_options::get( 'website-copyright' ); ?></span>

                                <?php
                                    /**
                                     *
                                     *  Tempo WordPress Theme Copyright and Credit Link
                                     *
                                     *  We strongly recommend do not alter, modify, change or / and overwrite this section.
                                     *  Also we strongly recommend do not alter, modify, change or / and overwrite the visula
                                     *  appearance for this section by using css rules or JavaScript code.
                                     *
                                     *  Before make some changes to this section please consult
                                     *  the license terms of use. Also you can discus this with
                                     *  your law consultant.
                                     *
                                     *  @link : http://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
                                     */
                                ?>

                                <span><?php echo tempo_options::get( 'author-copyright' ); ?></span>

                            </p>
                        </div>

                    </div><!-- end copyright content -->


                </div>
            </div><!-- end content -->

        </div>
    </div><!-- end container -->

</div><!-- end tools wrapper -->
