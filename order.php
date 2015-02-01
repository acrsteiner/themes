<?php
get_header();
?>

<div id="content">
<ul>
<?php
// we add this, to show all posts in our
// Glossary sorted alphabetically
if (is_category('venuelist')) 
{
$args = array( 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC' );
$tiles = get_posts( $args ); 
}
foreach( $titles as $post ) :	setup_postdata($post); 
 ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
</ul>