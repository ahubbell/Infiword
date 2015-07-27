<?php
    
    class infiword_RandomPostWidget extends WP_Widget {
        function infiword_RandomPostWidget() {
            $widget_ops = array('classname' => 'infiword_RandomPostWidget', 'description' => __( 'Displays a random post with thumbnail', 'infiword' ) );
            $this->__construct('infiword_RandomPostWidget', __( 'Random Post and Thumbnail', 'infiword' ), $widget_ops);
        }

      function form($instance) {
          $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
          $title = $instance['title'];
?>
      
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">
        Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
    </label>
</p>
    
<?php
      }
      function update($new_instance, $old_instance) {
          $instance = $old_instance;
          $instance['title'] = $new_instance['title'];
          return $instance;
      }
        
      function widget($args, $instance) {
          extract($args, EXTR_SKIP);
          echo $before_widget;
          $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
          if (!empty($title))
              echo $before_title . $title . $after_title;;
          
            // WIDGET CODE GOES HERE
            echo '<div class="sidebar-widget recentposts">';
            query_posts('posts_per_page=5');
            if (have_posts()) : 
            echo "";
            while (have_posts()) : the_post();           
?>

<div class="recentposts-container">
    <a rel="external" class="recentpostswidgetsidebar" href="<?php the_permalink()?>">
        <div class="recentpostslink-container row">
        
            <?php
                if ( has_post_thumbnail() ) { 
            ?> 
                    
                    <div class="small-3 columns">
                        <div class="sidebar-widget-recentposts-image"><?php the_post_thumbnail();?></div>
                    </div> 
            
            <?php } else{ ?> 
                    
                    <div class="sidebar-widget-recentposts-image">
                        <div class="small-3 columns">
                            <img src="<?php echo get_template_directory_uri() . '/images/defaults/default-background.jpg' ?>" alt="Default Fallback" class="img-responsive"/>
                        </div>
                    </div>
            
            <?php 
                }
                echo '<div class="small-9 columns"><div class="sidebar-widget recentpoststitle">'.get_the_title();
                echo '<div class="post-date"><h4>' .get_the_time('F jS, Y'). '</h4></div>';
                echo '</div></div></div></a></div/><div class="separator"></div>';	
                endwhile;
                echo "";
                echo '</div>';
                endif; 
                wp_reset_query();
                echo $after_widget;
        }

    }
    
add_action( 'widgets_init', create_function('', 'return register_widget("infiword_RandomPostWidget");') );
?>