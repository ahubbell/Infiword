
<div class="post-tags panel">
    <div class="row">
        <div class="large-12 columns">
            <p class="entry-tags"> Tagged with: 
            <?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo '<a href="'. get_tag_link($tag->term_id) .'" class="tags">'. $tag->name . '</a> ';   
  }
}
?>
            </p>
        </div>
    </div>
</div>