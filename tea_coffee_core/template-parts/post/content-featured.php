<?
/**
 * Template part for displaying sticky post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.0
 */

$sticky = get_option( 'sticky_posts' );
$args = array(
	'posts_per_page' => 1,
	'post__in'  => $sticky,
	'ignore_sticky_posts' => 1
);
$the_query = new WP_Query( $args );
if ( isset($sticky[0]) ) : ?>

<div class="news-page-title">News<span>Featured</span></div>            
<article class="featured">
    <a href="<? $the_query->the_permalink(); ?>">
        <container class="featured-content">

            <p class="featured-title post-title"><? $the_query->the_title(); ?></p>
            <div class="post-excerpt content"><? $the_query->the_excerpt(); ?></div>

        </container>
    </a>
</article>

<? else :?>

<div class="news-page-title no-featured">News</div>            

<? endif; ?>