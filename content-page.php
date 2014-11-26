<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ustri-2014
 */
?>
<!--content-page.php-->
<?php
$children = wp_list_pages( array(
  'title_li' => '',
  'child_of' => $post->ID,
  'echo' => 0
) );

if ($post->post_parent > 0) {
  $parent_name = get_the_title($post->post_parent);
}
?>

<article class="primary-content page-content">
  <header class="page-content-header">
  <?php /* ?>
    <h1>
      <?php if ($parent_name) : ?>
        <span id="parent-page-name" <?php echo "data-parent-page-name='".$parent_name."'"?>>
        <?php echo $parent_name ?> -
        </span>
      <?php endif; ?>
      <?php echo the_title() ?>
    </h1>
  <?php */ ?>
    <?php if ($children) : ?>
    <nav class="child-nav navigation page-links">
      <ul class="child-nav-list">
        <?php echo $children; ?>
      </ul>
    </nav>
    <?php endif; ?>
  </header>
  <section class="content">
    <?php the_content(); ?>
  </section>
</article>
