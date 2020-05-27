
    
    <div class="filters">
        <form>
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <input type="text" class="inputFilde search" />
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 offset-md-2">
                <div class="row">
                  <div class="col-md-4">
                    <div class="inputFilde dropDoenBtn">
                      <span>BRAND</span>
                      <div class="dropDoenBtnOver">
                        <button class="closeBtn">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-red.png" alt="close" />
                        </button>
                        <div class="row">
                          <div class="col-12">
                                <?php
                                    if( $terms = get_terms( array( 'taxonomy' => 'topics' ) ) ) : 
                                        foreach ( $terms as $term ) :
                                            ?>
                                            <label class="customCheck">
                                                <input type="checkbox" name="brand" id="<?php echo $term->term_id; ?>" />
                                                <span class="customRadioCheck"></span>
                                                <span><?php echo $term->name; ?></span>
                                            </label>
                                            <?php
                                        endforeach;
                                    endif;
                                ?>
                          </div>
                          <!-- <div class="col-12">
                            <label class="customCheck">
                              <input type="checkbox" name="brand" />
                              <span class="customRadioCheck"></span>
                              <span>431-88 By Shweta Kapur</span>
                            </label>
                            <label class="customCheck">
                              <input type="checkbox" name="brand" />
                              <span class="customRadioCheck"></span>
                              <span>431-88 By Shweta Kapur</span>
                            </label>
                          </div> -->
                        </div>
                        <button class="doneBtn">Done</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="inputFilde dropDoenBtn">
                      <span>CITY</span>
                      <div class="dropDoenBtnOver">
                        <button class="closeBtn">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-red.png" alt="close" />
                        </button>
                        <div class="row">
                          <div class="col-12">
                          <?php
                                    if( $terms = get_terms( array( 'taxonomy' => 'topicscity' ) ) ) : 
                                        foreach ( $terms as $term ) :
                                            ?>
                                            <label class="customCheck">
                                                <input type="checkbox" name="brand" id="<?php echo $term->term_id; ?>" />
                                                <span class="customRadioCheck"></span>
                                                <span><?php echo $term->name; ?></span>
                                            </label>
                                            <?php
                                        endforeach;
                                    endif;
                                ?>       
                           
                          </div>
                        
                        </div>
                        <button class="doneBtn">Done</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="inputFilde dropDoenBtn">
                      <span>SERVICES</span>
                      <div class="dropDoenBtnOver">
                        <button class="closeBtn">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-red.png" alt="close" />
                        </button>
                        <div class="row">
                          <div class="col-12">
                          <?php
                                    if( $terms = get_terms( array( 'taxonomy' => 'labelsservice' ) ) ) : 
                                        foreach ( $terms as $term ) :
                                            ?>
                                            <label class="customCheck">
                                                <input type="checkbox" name="brand" id="<?php echo $term->term_id; ?>" />
                                                <span class="customRadioCheck"></span>
                                                <span><?php echo $term->name; ?></span>
                                            </label>
                                            <?php
                                        endforeach;
                                    endif;
                                ?> 
                          </div>
                        
                        </div>
                        <button class="doneBtn">Done</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>

          </div>