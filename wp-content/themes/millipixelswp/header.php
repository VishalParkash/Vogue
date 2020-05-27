<html>
<head>
<title><?php echo get_bloginfo( 'name' ); ?></title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link
      href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
      rel="stylesheet"
    />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap-grid.min.css'; ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/slick.css'; ?>">
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/header.css'; ?>"> -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/common.css'; ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/custom.css'; ?>">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/font.css'; ?>">
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/single-post.css'; ?>"> -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/developer.css'; ?>">
</head>
<body>
  <!-- Header -->
    <header>
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="logo">
              <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>
                  <a class="navHeaderTitle" href="<?php echo get_home_url(); ?>">
                      <?php if(!$image==""){ ?>
                        <img src="<?php echo $image[0]; ?>" alt="">
                      <?php 
                    }else{ ?>
                      <span> <?php echo get_bloginfo( 'name' );?> </span>
                    <?php } 
                    ?>
                  </a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="select-location ">
                <div class="choose" id="choose-header">Edition <span>India<svg data-test-id="Icon" class="down-arrow Wrapper-dyuznp jLaXJl" width="9px" height="9px" fill="currentColor" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><title>Chevron</title><path d="M12.5 3L14 4.4 7 11 0 4.4 1.5 3 7 8.2 12.5 3z"></path></svg></span></div>

                <div class="location-list" id="location-list-header">
                <?php
                        wp_nav_menu(
                          array(
                            
                            'menu' => 'edition-menu',
                            'container'  =>  'ul',
                          )
                        );
                    ?>      
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="menu-wrap GTWalsheimProBold">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="menu-wrapper">
                  <div class="menu-list">
                  <?php
                        wp_nav_menu(
                          array(
                            
                            'menu' => 'main-menu',
                            'container'  =>  'ul',
                          )
                        );
                    ?>
                  </div>

                  <div class="menu-right-wrap">
                    <div class="subscribe">
                      <a href="#">Subscribe</a>
                    </div>

                    <div class="marketplace-name">
                      <span>India</span>
                    </div>

                    <div class="open-menu">
                      <span class="menu-icon">
                        <svg
                          data-test-id="Icon"
                          class="Wrapper-dyuznp cLUlpE"
                          width="24"
                          height="24px"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <title>Menu</title>
                          <path
                            d="M2 4h20a1 1 0 0 1 0 2H2a1 1 0 1 1 0-2zm0 7h20a1 1 0 0 1 0 2H2a1 1 0 0 1 0-2zm0 7h20a1 1 0 0 1 0 2H2a1 1 0 0 1 0-2z"
                          ></path>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
       <!-- Menu Open on Click -->
    <div class="popup-menu">
      <button  class="CloseButton"><svg data-test-id="Icon" class="Wrapper-dyuznp cLUlpE" width="24" height="51px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Close</title><path d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z"></path></svg></button>

      <div class="logomark">
        <img src="<?php echo get_stylesheet_directory_uri().'/images/logomark.svg' ?>" />
      </div>

<div class="popup-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 offset-sm-1">
        <div class="popup-left-wrap">
          <div class="main-links">
          <?php
              wp_nav_menu(
                array(
                  
                  'menu' => 'main-menu',
                  'container'  =>  'ul',
                  'menu_class'=> 'list-unstyled',
                )
              );
          ?>
        </div>

          <div class="subnav GTWalsheimProBold">
          <?php
              wp_nav_menu(
                array(
                  
                  'menu' => 'category-menu',
                  'container'  =>  'ul',
                  'menu_class'=> 'list-unstyled',
                )
              );
          ?>
          <?php
              wp_nav_menu(
                array(
                  
                  'menu' => 'subscription-menu',
                  'container'  =>  'ul',
                  'menu_class'=> 'list-unstyled CommercialOfferings',
                )
              );
          ?>
          </div>
        </div>

        <div class="social-link GTWalsheimProBold">
          <h6>Follow us</h6>
          
          <ul class="list-unstyled">
              <li>
                  <a href="#">
                          <svg data-test-id="Icon" class="Wrapper-dyuznp cLUlpE" width="24" height="46px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M13.49 21v-8.21h2.95l.44-3.2h-3.39V7.545c0-.926.276-1.557 1.697-1.557L17 5.988V3.126A25.971 25.971 0 0 0 14.359 3c-2.614 0-4.403 1.491-4.403 4.23v2.36H7v3.2h2.956V21h3.535z"></path></svg>
                  </a>
              </li>

              <li>
                  <a href="#">
                          <svg data-test-id="Icon" class="Wrapper-dyuznp cLUlpE" width="24" height="46px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M19.19 15.638V8.362a3.551 3.551 0 0 0-3.552-3.551H8.362a3.552 3.552 0 0 0-3.551 3.551v7.276a3.552 3.552 0 0 0 3.551 3.551h7.276a3.552 3.552 0 0 0 3.551-3.551zM15.637 3A5.368 5.368 0 0 1 21 8.362v7.276A5.368 5.368 0 0 1 15.638 21H8.362A5.368 5.368 0 0 1 3 15.638V8.362A5.368 5.368 0 0 1 8.362 3h7.276zm-3.73 11.964a3.055 3.055 0 1 0 0-6.11 3.055 3.055 0 0 0 0 6.11zM12 7c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5zm5-1a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path></svg>
                  </a>
              </li>

              <li>
                  <a href="#">
                          <svg data-test-id="Icon" class="Wrapper-dyuznp cLUlpE" width="24" height="46px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M20.23 6.607c-.378.163-.77.292-1.173.386a3.56 3.56 0 0 0 .965-1.5c.054-.165-.129-.307-.28-.219a6.854 6.854 0 0 1-1.792.723.481.481 0 0 1-.426-.103A3.716 3.716 0 0 0 15.1 5c-.387 0-.777.059-1.161.175-1.188.36-2.105 1.318-2.393 2.499a3.733 3.733 0 0 0-.087 1.318.126.126 0 0 1-.033.1.137.137 0 0 1-.114.045A9.679 9.679 0 0 1 4.706 5.69a.194.194 0 0 0-.314.024 3.513 3.513 0 0 0-.497 1.8c0 .97.4 1.885 1.093 2.552a3.332 3.332 0 0 1-.836-.317c-.127-.068-.283.02-.285.162-.018 1.442.846 2.724 2.14 3.302a3.36 3.36 0 0 1-.695-.057c-.143-.026-.263.106-.218.241.42 1.282 1.55 2.226 2.901 2.44a6.878 6.878 0 0 1-3.788 1.124h-.424a.28.28 0 0 0-.274.207.281.281 0 0 0 .139.313 10.243 10.243 0 0 0 5.055 1.331c1.553 0 3.007-.3 4.32-.895a9.524 9.524 0 0 0 3.16-2.313 10.097 10.097 0 0 0 1.935-3.166 9.796 9.796 0 0 0 .658-3.465v-.055c0-.183.085-.356.233-.474a7.14 7.14 0 0 0 1.458-1.562c.106-.156-.062-.351-.237-.275"></path></svg>
                  </a>
              </li>

              <li>
                  <a href="#">
                          <svg data-test-id="Icon" class="Wrapper-dyuznp cLUlpE" width="24" height="46px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M20.23 6.607c-.378.163-.77.292-1.173.386a3.56 3.56 0 0 0 .965-1.5c.054-.165-.129-.307-.28-.219a6.854 6.854 0 0 1-1.792.723.481.481 0 0 1-.426-.103A3.716 3.716 0 0 0 15.1 5c-.387 0-.777.059-1.161.175-1.188.36-2.105 1.318-2.393 2.499a3.733 3.733 0 0 0-.087 1.318.126.126 0 0 1-.033.1.137.137 0 0 1-.114.045A9.679 9.679 0 0 1 4.706 5.69a.194.194 0 0 0-.314.024 3.513 3.513 0 0 0-.497 1.8c0 .97.4 1.885 1.093 2.552a3.332 3.332 0 0 1-.836-.317c-.127-.068-.283.02-.285.162-.018 1.442.846 2.724 2.14 3.302a3.36 3.36 0 0 1-.695-.057c-.143-.026-.263.106-.218.241.42 1.282 1.55 2.226 2.901 2.44a6.878 6.878 0 0 1-3.788 1.124h-.424a.28.28 0 0 0-.274.207.281.281 0 0 0 .139.313 10.243 10.243 0 0 0 5.055 1.331c1.553 0 3.007-.3 4.32-.895a9.524 9.524 0 0 0 3.16-2.313 10.097 10.097 0 0 0 1.935-3.166 9.796 9.796 0 0 0 .658-3.465v-.055c0-.183.085-.356.233-.474a7.14 7.14 0 0 0 1.458-1.562c.106-.156-.062-.351-.237-.275"></path></svg>
                  </a>
              </li>

              <li>
                  <a href="#">
                          <svg data-test-id="Icon" class="Wrapper-dyuznp cLUlpE" width="24" height="46px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M14.894 12.336l-4.628 3.138c-.124.084-.266-.044-.266-.238V8.764c0-.197.146-.324.27-.235l4.628 3.333c.138.1.135.38-.004.474zM17.846 4.5H6.154C3.86 4.5 2 6.471 2 8.902v6.196c0 2.43 1.86 4.402 4.154 4.402h11.692C20.14 19.5 22 17.529 22 15.098V8.902c0-2.43-1.86-4.402-4.154-4.402z"></path></svg>
                  </a>
              </li>

              <li>
                  <a href="#" >
                          <svg data-test-id="Icon" class="Wrapper-dyuznp cLUlpE" width="24" height="46px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Flipboard</title><path d="M20 9.333h-5.333v5.334H9.333V20H4V4h16z"></path></svg>
                  </a>
              </li>
              
              <li>
                  <a href="#">
                          <svg data-test-id="Icon" class="Wrapper-dyuznp cLUlpE" width="24" height="46px" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Pinterest</title><path d="M5 9.457c0-.78.136-1.514.406-2.2.27-.688.643-1.29 1.12-1.803a7.637 7.637 0 0 1 3.646-2.173A8.573 8.573 0 0 1 12.358 3c1.138 0 2.2.24 3.18.72a6.006 6.006 0 0 1 2.392 2.094c.614.917.92 1.951.92 3.105 0 .692-.068 1.37-.205 2.033a8.227 8.227 0 0 1-.649 1.914 6.667 6.667 0 0 1-1.082 1.617 4.724 4.724 0 0 1-1.568 1.115 4.955 4.955 0 0 1-2.044.417c-.49 0-.977-.116-1.46-.346-.483-.231-.83-.547-1.038-.951-.072.28-.173.687-.303 1.218-.13.53-.215.872-.254 1.026-.04.155-.114.412-.222.768a5.154 5.154 0 0 1-.28.768c-.08.154-.196.38-.346.676-.15.296-.318.575-.498.838-.18.262-.404.575-.67.935L8.08 21l-.098-.108c-.109-1.132-.162-1.812-.162-2.034 0-.663.077-1.409.233-2.234a46.97 46.97 0 0 1 .72-3.11c.325-1.247.513-1.98.562-2.196-.231-.469-.345-1.079-.345-1.828 0-.599.187-1.161.562-1.688.375-.527.85-.79 1.427-.79.441 0 .783.147 1.027.439.246.292.367.661.367 1.11 0 .475-.158 1.164-.476 2.066-.317.902-.475 1.576-.475 2.022 0 .454.161.832.487 1.13.325.3.718.448 1.179.448.396 0 .764-.09 1.103-.27.34-.18.623-.426.849-.735a6.165 6.165 0 0 0 1.018-2.224c.097-.423.168-.823.216-1.201a8.59 8.59 0 0 0 .07-1.077c0-1.247-.395-2.219-1.185-2.915-.79-.696-1.818-1.043-3.087-1.043-1.442 0-2.647.466-3.613 1.401-.966.933-1.449 2.118-1.449 3.555 0 .317.046.624.136.92.09.296.187.53.292.703.105.173.202.338.292.493.09.154.136.264.136.33 0 .202-.053.465-.162.79-.108.325-.242.487-.4.487-.015 0-.075-.011-.184-.033a2.216 2.216 0 0 1-.979-.606 3.148 3.148 0 0 1-.659-1.023 6.695 6.695 0 0 1-.35-1.169A4.967 4.967 0 0 1 5 9.457z"></path></svg>
                  </a>
              </li>

              
          </ul>
        </div>

      </div>

      <div class="col-xl-4">
        <div class="location-edition GTWalsheimProBold">
            <h6>Edition</h6>
            <?php
                wp_nav_menu(
                  array(
                    
                    'menu' => 'edition-menu',
                    'container'  =>  'ul',
                    'menu_class'=> 'list-unstyled',
                  )
                );
            ?>        
            
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
      <!-- Header -->


