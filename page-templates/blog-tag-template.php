<?php
/**
 * Template Name: Blog Tag Archive
 *
 * @package Astra Child
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main blog-tag-archive">
        <div class="container">
            <?php
            // Get the featured image if it exists
            if(function_exists('get_field') && get_field('tag_featured_image')):
                $featured_image = get_field('tag_featured_image');
                if($featured_image): ?>
                    <div class="tag-featured-image">
                        <?php echo wp_get_attachment_image($featured_image, 'full', false, array('class' => 'img-fluid')); ?>
                    </div>
                <?php endif;
            endif; ?>

            <header class="page-header">
                <h1 class="page-title">
                    <?php 
                    if(function_exists('get_field') && get_field('tag_title')):
                        echo esc_html(get_field('tag_title'));
                    else:
                        the_title();
                    endif;
                    ?>
                </h1>
                
                <?php if(function_exists('get_field') && get_field('tag_description')): ?>
                    <div class="archive-description">
                        <?php echo wp_kses_post(get_field('tag_description')); ?>
                    </div>
                <?php endif; ?>
            </header>

            <div class="blog-posts">
                <?php
                // Get the posts to display if using ACF
                if(function_exists('get_field') && get_field('tag_posts')):
                    $posts = get_field('tag_posts');
                    
                    if($posts):
                        foreach($posts as $post_id):
                            // Setup post data
                            $post_title = get_the_title($post_id);
                            $post_url = get_permalink($post_id);
                            $post_date = get_the_date('Y-m-d', $post_id);
                            $post_author = get_the_author_meta('display_name', get_post_field('post_author', $post_id));
                            $post_thumbnail = get_the_post_thumbnail($post_id, 'large');
                            ?>

                            <article class="blog-post">
                                <div class="post-thumbnail">
                                    <?php if($post_thumbnail): ?>
                                        <a href="<?php echo esc_url($post_url); ?>">
                                            <?php echo $post_thumbnail; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="post-meta">
                                    <span class="post-author"><?php echo esc_html($post_author); ?></span>
                                    <span class="post-date"><?php echo esc_html($post_date); ?></span>
                                </div>
                                
                                <h2 class="post-title">
                                    <a href="<?php echo esc_url($post_url); ?>">
                                        <?php echo esc_html($post_title); ?>
                                    </a>
                                </h2>
                                
                                <div class="post-excerpt">
                                    <?php echo wp_kses_post(get_the_excerpt($post_id)); ?>
                                </div>
                                
                                <a href="<?php echo esc_url($post_url); ?>" class="read-more">
                                    Read More
                                </a>
                            </article>

                            <?php
                        endforeach;
                    else:
                        // Manually show posts from hard-coded content
                        ?>
                        <article class="blog-post">
                            <div class="post-thumbnail">
                                <a href="https://www.33lock.com/blogpublishing/z2vzfacbkpg2ax02xo5fgtg15rusru">
                                    <img src="https://images.squarespace-cdn.com/content/v1/64864a0f6459c271adb893d5/1717014335172-MTASKKCJ0E7JGUEAHHTD/Untitled+design+%282%29.png?format=2500w" alt="Time to upgrade your old locks? A guide to retrofitting new mortise locks to your old door" class="img-fluid">
                                </a>
                            </div>
                            
                            <div class="post-meta">
                                <span class="post-author">Derek Boudreau</span>
                                <span class="post-date">2024-05-29</span>
                            </div>
                            
                            <h2 class="post-title">
                                <a href="https://www.33lock.com/blogpublishing/z2vzfacbkpg2ax02xo5fgtg15rusru">
                                    Time to upgrade your old locks? A guide to retrofitting new mortise locks to your old door.
                                </a>
                            </h2>
                            
                            <a href="https://www.33lock.com/blogpublishing/z2vzfacbkpg2ax02xo5fgtg15rusru" class="read-more">
                                Read More
                            </a>
                        </article>
                        <?php
                    endif;
                
                // If not using ACF, display the default Old Doors tag content
                else:
                    ?>
                    <article class="blog-post">
                        <div class="post-thumbnail">
                            <a href="https://www.33lock.com/blogpublishing/z2vzfacbkpg2ax02xo5fgtg15rusru">
                                <img src="https://images.squarespace-cdn.com/content/v1/64864a0f6459c271adb893d5/1717014335172-MTASKKCJ0E7JGUEAHHTD/Untitled+design+%282%29.png?format=2500w" alt="Time to upgrade your old locks? A guide to retrofitting new mortise locks to your old door" class="img-fluid">
                            </a>
                        </div>
                        
                        <div class="post-meta">
                            <span class="post-author">Derek Boudreau</span>
                            <span class="post-date">2024-05-29</span>
                        </div>
                        
                        <h2 class="post-title">
                            <a href="https://www.33lock.com/blogpublishing/z2vzfacbkpg2ax02xo5fgtg15rusru">
                                Time to upgrade your old locks? A guide to retrofitting new mortise locks to your old door.
                            </a>
                        </h2>
                        
                        <a href="https://www.33lock.com/blogpublishing/z2vzfacbkpg2ax02xo5fgtg15rusru" class="read-more">
                            Read More
                        </a>
                    </article>
                <?php endif; ?>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>