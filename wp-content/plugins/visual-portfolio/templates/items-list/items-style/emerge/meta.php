<?php
/**
 * Item meta template.
 *
 * @var $args
 * @var $opts
 * @package visual-portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// phpcs:ignore
$inline_meta = $opts['show_author'] && $args['author'] ||
    $opts['show_date'] ||
    $opts['show_comments_count'] && '' !== $args['comments_count'] ||
    $opts['show_views_count'] && $args['views_count'] ||
    $opts['show_reading_time'] && $args['reading_time'];

// phpcs:ignore
$show_meta = $inline_meta ||
    $opts['show_title'] && $args['title'] ||
    $opts['show_excerpt'] && $args['excerpt'] ||
    $opts['show_categories'] && $args['categories'] && ! empty( $args['categories'] );

?>

<figcaption class="vp-portfolio__item-overlay vp-portfolio__item-align-<?php echo esc_attr( $opts['align'] ); ?>">
    <?php if ( $show_meta ) : ?>
        <div class="vp-portfolio__item-meta">

                        <a href="<?php echo esc_url( $args['url'] ); ?>"
                            <?php
                            if ( isset( $args['url_target'] ) && $args['url_target'] ) :
                                ?>
                                target="<?php echo esc_attr( $args['url_target'] ); ?>"
                                <?php
                            endif;
                            if ( isset( $args['url_rel'] ) && $args['url_rel'] ) :
                                ?>
                                rel="<?php echo esc_attr( $args['url_rel'] ); ?>"
                                <?php
                            endif;
                            ?>
                        >

            <?php

            // Show Categories.
            if ( $opts['show_categories'] && $args['categories'] && ! empty( $args['categories'] ) ) {
                ?>
                <div class="vp-portfolio__item-meta-categories">
                    <?php
                    // phpcs:ignore
                    $count = $opts['categories_count'];

                    // phpcs:ignore
                    foreach ( $args['categories'] as $category ) {
                        if ( ! $count ) {
                            break;
                        }
                        ?>
                        <div class="vp-portfolio__item-meta-category">
                            <a href="<?php echo esc_url( $category['url'] ); ?>">
                                <?php echo esc_html( $category['label'] ); ?>
                            </a>
                        </div>
                        <?php
                        $count--;
                    }
                    ?>
                </div>
                <?php
            }

            // Show Title.
            if ( $opts['show_title'] && $args['title'] ) {
                ?>
                
                <h2 class="vp-portfolio__item-meta-title">
                    <?php
                    if ( $args['url'] ) {
                        ?>
                        
                            <?php echo wp_kses_post( $args['title'] ); ?>
                       
                        <?php
                    } else {
                        echo wp_kses_post( $args['title'] );
                    }
                    ?>
                </h2>
                <?php
            }
            // Show Excerpt.
            if ( $opts['show_excerpt'] && $args['excerpt'] ) {
                ?>
                <div class="vp-portfolio__item-meta-excerpt">
                    <?php echo wp_kses_post( $args['excerpt'] ); ?>
                </div>
                
                <?php
            }
            ?>
            </a> 
        </div>
    <?php endif; ?>
</figcaption>
