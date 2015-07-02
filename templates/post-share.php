<div class="entry-share panel">
    <div class="row">
        <div class="large-12 columns">
            <h4>Share the post</h4>
            <div class="sharer">
                <div class="large-4 columns">
                    <div id="twitter" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Tweet"></div>
                </div>
                <div class="large-4 columns">
                    <div id="facebook" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Like"></div>
                </div>
                <div class="large-4 columns">
                    <div id="googleplus" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="+1"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
	// Sharrre
	jQuery(document).ready(function(){
		jQuery('#twitter').sharrre({
			share: {
				twitter: true
			},
			template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-twitter"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: { twitter: {via: ''}},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('twitter');
			}
		});
		jQuery('#facebook').sharrre({
			share: {
				facebook: true
			},
			template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-facebook-square"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			click: function(api, options){
				api.simulateClick();
				api.openPopup('facebook');
			}
		});
		jQuery('#googleplus').sharrre({
			share: {
				googlePlus: true
			},
			template: '<a class="box" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-google-plus-square"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			urlCurl: '<?php get_template_directory_uri() . '/js/vendor/sharrre.php'; ?>',
			click: function(api, options){
				api.simulateClick();
				api.openPopup('googlePlus');
			}
		});
		jQuery('#pinterest').sharrre({
			share: {
				pinterest: true
			},
			template: '<a class="box" href="#" rel="nofollow"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-pinterest"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: {
			pinterest: {
				description: 'Gallery Format Post',media: 'http://demo.alxmedia.se/hueman/wp-content/uploads/sites/2/2013/07/journal-141494_1280.jpg'				}
			},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('pinterest');
			}
		});
		
				
	});
</script>					