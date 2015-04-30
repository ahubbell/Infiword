    
    <!-- footer -->
    <footer>
    
        <!-- container -->
        <div class="container footer-container">
            
            <!-- footer-wrapper -->
            <div class="footer-wrapper">
        
                <!-- row -->
                <div class="row clearfix">
                    
                    <!-- column -->
                    <div class="col-md-3">
                        <div id="footer-sidebar1">
                            <?php
                                if(is_active_sidebar('footer-sidebar-1')){
                                    dynamic_sidebar('footer-sidebar-1');
                                }
                            ?>
                        </div>
                    </div>
                    <!-- /.column -->
                    
                    <!-- column -->
                    <div class="col-md-3">
                        <div id="footer-sidebar2">
                            <?php
                                if(is_active_sidebar('footer-sidebar-2')){
                                    dynamic_sidebar('footer-sidebar-2');
                                }
                            ?>
                        </div>
                    </div>
                    <!-- /.column -->
                    
                    <!-- column -->
                    <div class="col-md-3">
                        <div id="footer-sidebar3">
                            <?php
                                if(is_active_sidebar('footer-sidebar-3')){
                                    dynamic_sidebar('footer-sidebar-3');
                                }
                            ?>
                        </div>
                    </div>
                    <!-- /.column -->
                    
                    <!-- column -->
                    <div class="col-md-3">
                        <div id="footer-sidebar4">
                            <?php
                                if(is_active_sidebar('footer-sidebar-4')){
                                    dynamic_sidebar('footer-sidebar-4');
                                }
                            ?>
                        </div>
                    </div>
                    <!-- /.column -->
                    
                </div>
                <!-- /.row -->
                                
                <!-- row -->
                <div class="row clearfix">
                    
                    <!-- column -->
                    <div class="col-md-12 text-center">
                        <p class="footer-copyright">Infismash - Creativity that inspires you!</p>
                    </div>
                    <!-- /.column -->
                    
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.footer-wrapper -->
            
        </div>
        <!-- /.container -->
        
        <?php wp_footer(); ?>
        
    </footer>
    <!-- /.footer -->

    <script>
        jQuery(function($) {
            $('.post-container').responsiveEqualHeightGrid();
        });
    </script>
        
</body>
<!-- /.body -->
    
</html>
<!-- /.html -->