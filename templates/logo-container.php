                    <div class="logo-container">                                
                        <?php if ( get_theme_mod( 'infiword_logo' ) ) : ?>
                            <a class="navmenu-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                                <img src='<?php echo esc_url( get_theme_mod( 'infiword_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' <?php if ( get_theme_mod( 'infiword_logo_width' ) ) { $infiword_logo_width = get_theme_mod( 'infiword_logo_width' )?> width="<?php echo $infiword_logo_width; ?>" <?php } else{ ?> width="200" <?php } ?> <?php if ( get_theme_mod( 'infiword_logo_height' ) ) { $infiword_logo_height = get_theme_mod( 'infiword_logo_height' )?> height="<?php echo $infiword_logo_height; ?>"<?php } else{ ?> height="100" <?php } ?>>
                            </a>
                        <?php else : ?>
                            <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                        <?php endif; ?>
                    </div>