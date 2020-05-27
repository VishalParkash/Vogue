<?php
if (   ! is_active_sidebar( 'first-footer-widget-area'  )
&& ! is_active_sidebar( 'second-footer-widget-area' )
&& ! is_active_sidebar( 'third-footer-widget-area'  )
&& ! is_active_sidebar( 'fourth-footer-widget-area' )
):
return;

elseif ( is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && ! is_active_sidebar( 'third-footer-widget-area'  )
    && ! is_active_sidebar( 'fourth-footer-widget-area' )
) :
?>


<?php endif;?>

    
    <footer>
    <aside class="fatfooter" role="complementary">
    <div class="first full-width widget-area">
       
    </div><!-- .first .widget-area -->

    <div class="second half right widget-area">
       
    </div><!-- .second .widget-area -->
 
</aside><!-- #fatfooter -->
            <div class="footer-location-list">
                    <div class="container">
                            <div class="select-location ">
                                <span>Edition </span>
                            <div class="choose" id="choose-footer"> <span>India<svg data-test-id="Icon" class="down-arrow Wrapper-dyuznp jLaXJl" width="9px" height="9px" fill="currentColor" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><title>Chevron</title><path d="M12.5 3L14 4.4 7 11 0 4.4 1.5 3 7 8.2 12.5 3z"></path></svg></span></div>
                          </div>
                    </div>

                    <div class="location-list" id="location-list-footer">

                            <div class="container">
                                    <div class="row">
                                    <div class="col-xl-3 col-md-4">
                                        <div class="label">
                                            Vogue Edition
                                        </div>
                                    </div>
    
                                    <div class="col-xl-9 col-md-8">
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

            <div class="footer-center-wrap">
                <div class="container">
                <div class="footer-logo">
                    <svg viewBox="0 0 948 250" fill="#2D2E2F" preserveAspectRatio="xMinYMax meet" xmlns="http://www.w3.org/2000/svg" aria-labelledby="brand-title"><title id="brand-title">Vogue</title><path d="M377.651 89.431c1.056 4.008 13.003 52.856-7.91 97.701-2.042 4.373-25.775 61.692-90.24 61.868-64.465-.176-88.198-57.495-90.24-61.868-20.917-44.845-8.966-93.693-7.91-97.7C207.03.763 279.265 2 279.265 2h.465s72.241-1.237 97.92 87.43zm-53.917 123.642c1.616-3.991 14.797-30.378 14.823-87.538.022-57.156-13.254-83.539-14.866-87.534C311.427.747 280.079 3.63 280.079 3.63h-1.156S247.57.747 235.311 38c-1.616 3.995-14.797 30.378-14.823 87.534-.022 57.16 13.255 83.547 14.87 87.538 12.26 37.25 43.609 34.372 43.609 34.372h1.155s31.353 2.878 43.612-34.372zm582.039 16.843c40.893-25.07 41.71-74.582 41.71-74.582H948v88.552H777.084v-1.695h18.321V6.6h-31.862v171.824c0 73.958-60.254 71.566-70.257 71.566-78.314 0-81.421-50.088-81.421-71.919V6.747H593V5.052h79.135v1.72h-18.86v189.06c0 14.366 3.168 21.156 5.015 25.333 13.715 27.944 39.62 25.987 42.653 25.987 48.307 0 60.753-37.147 60.753-72.431V6.764h-18.991V5h198.103v76.256h-.743c0-22.85-16.045-43.558-18.708-47.086-17.718-26.636-52.618-27.608-52.618-27.608h-31.976v113.794c28.908 0 35.04-7.577 37.434-9.401 21.05-17.106 17.053-39.96 17.053-39.96h1.599v101.467h-1.734c0-27.686-17.583-39.294-22.241-43.097-10.66-8.747-32.11-7.18-32.11-7.18v119.959h26.378c26.109-1.313 40.632-11.058 42.63-12.228zM113.853 248L21.006 6.691H0V5h82.123l-.013 1.73H62.219l69.289 174.57L183.389 6.76h-19.148V5.013H204V6.76h-18.766L113.853 248zM533.4 10.767C556.728 16.125 564.475 0 564.475 0v85.641c-8.64-38.701-32.744-63.88-34.862-66.357-11.242-12.638-22.745-16.678-35.572-16.678-28.54.652-37.398 28.145-39.381 32.575-11.904 29.446-12.035 77.009-12.035 81.173-1.058 47.171 7.804 81.314 9.255 86.912 7.673 29.446 20.632 36.873 22.75 38.435 17.559 10.553 37.515 3.293 39.907 2.477 26.584-10.942 25.921-41.693 25.921-41.693v-53.813h-17.851v-1.958H596v1.825h-16.13v96.03c-12.697-21.761-38.087-9.118-42.714-7.165-25.264 11.986-33.595 11.08-36.771 11.338-32.37 2.73-54.853-17.07-56.7-18.632-40.47-34.013-44.702-81.83-44.968-85.736-5.29-57.462 20.366-92.257 21.556-94.21C453.867 2.348 485.71.914 491.265.653c15.468-1.306 36.583 9.023 42.135 10.114z" fill-rule="evenodd"></path></svg>
                </div>

                <div class="footer-social-link">
                    <div class="social-link GTWalsheimProBold">

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
            </div>
        </div>

            <div class="bottom-content">
                <div class="container">
                <div class="location-text">
                    <div class="figure">
                        <svg fill="#fff" width="239" height="42" viewBox="0 0 239 42" xmlns="http://www.w3.org/2000/svg"><title>Condé Nast</title><path d="M16.935 31.161l3.095-5.04h.289v7.387h-.289l-2.839-1.544c-.831.677-2.872 1.854-5.105 1.854C6.382 33.818 0 29.735 0 22.594s6.505-11.225 11.99-11.225c2.234 0 4.083 1.148 4.816 1.764l2.874-1.453h.287v7.078h-.287l-3.125-4.793a6.373 6.373 0 0 0-4.565-1.912c-5.64 0-6.917 4.824-6.917 10.54 0 5.72 1.367 10.513 7.013 10.542 1.818-.062 3.67-.769 4.85-1.974zm9.288-8.566c0-6.836 6.348-11.225 11.708-11.225 5.354 0 11.702 4.39 11.702 11.225 0 6.831-6.348 11.223-11.702 11.223-5.36 0-11.708-4.392-11.708-11.223zm5.01 0c0 6.028 1.306 10.51 6.698 10.51 5.385 0 6.694-4.482 6.694-10.51 0-6.027-1.309-10.513-6.694-10.513-5.392 0-6.699 4.486-6.699 10.513zM69.85 11.773h6.346v.558h-2.66v21.487h-.271L57.28 12.362v20.496h2.683v.558H53.62v-.558h2.65V12.331h-2.65v-.558h8.99l9.919 14.084V12.331H69.85v-.558zm11.225-.002H91.12c4.817 0 13.24 1.822 13.24 10.696 0 8.873-8.423 10.945-13.24 10.945H81.075v-.557h2.867V12.329h-2.867v-.558zm7.4 21.084h2.458c5.804 0 8.484-4.144 8.484-10.263 0-6.121-2.68-10.263-8.484-10.263h-2.458v20.526zm27.245 0h8.454c1.947-2.07 3.768-6.706 3.768-6.706h.28v7.264h-19.9v-.558h2.867V12.328h-2.867v-.558h19.267v5.812h-.288s-1.82-3.863-4.018-5.254h-7.563v9.182h4.241c1.404-1.083 2.936-4.204 2.936-4.204h.291v8.967h-.29s-1.533-3.127-2.937-4.205h-4.24v10.787zm.55-27.104L123.43 0l-.322 2.718.577 1.533-7.318 1.658-.097-.158zm62.781 5.275h.298l10.269 21.827h2.681v.56h-10.493v-.56h2.902l-3.7-7.852-7.227.01-3.416 7.851 2.541-.009v.56h-6.03v-.56h2.607l9.568-21.827zm-1.755 5.905l-3.252 7.513h6.708l-3.456-7.513zm40.802-5.16h20.735v6.706h-.255s-2.012-4.083-3.956-6.148h-3.89v20.526h3.51v.557h-11.549v-.557h3.507V12.329h-3.89c-1.947 2.065-3.955 6.148-3.955 6.148h-.257V11.77zm-14.536 7.484l4.4 1.454c2.781.898 5.36 2.537 5.329 6.122 0 3.65-3.187 6.986-8.068 6.986-2.236 0-4.434-1.115-5.361-1.822l-2.873 1.514h-.287l-.158-7.48h.287l3.288 5.314c1.242 1.177 3.347 1.794 5.104 1.855 3.89-.031 5.356-2.162 5.356-4.111 0-2.285-1.625-3.276-3.986-4.113l-4.497-1.574c-2.521-.898-4.721-2.474-4.752-5.536.03-3.776 2.835-6.463 7.08-6.463 2.169 0 3.443.804 4.21 1.42l2.903-1.42h.257v6.865h-.257l-3.128-4.762c-1.145-1.08-2.167-1.483-3.985-1.483-2.936 0-4.85 1.297-4.85 3.43 0 2.041 1.787 3.092 3.988 3.804zm-45.023-7.482h6.346v.558h-2.66v21.487h-.274l-15.984-21.454v20.494h2.681v.558h-6.342v-.558h2.652V12.331h-2.652v-.558h8.993l9.917 14.08V12.332h-2.677v-.558z"></path></svg>
                        <svg fill="#fff" width="24" height="5" viewBox="0 0 24 5" xmlns="http://www.w3.org/2000/svg"><title>India</title><path d="M0 .035h1.078v4.9H0v-4.9zm3.143 0h.994l2.296 3.017V.035h1.064v4.9H6.58L4.207 1.82v3.115H3.143v-4.9zm8.281 3.927c.22 0 .42-.035.602-.105.182-.07.337-.17.466-.301.128-.13.228-.285.3-.462.073-.177.109-.376.109-.595v-.014c0-.215-.036-.413-.108-.595a1.333 1.333 0 0 0-.767-.773 1.616 1.616 0 0 0-.602-.109h-.833v2.954h.833zM9.513.035h1.911c.383 0 .734.062 1.054.185.32.124.594.296.826.515.23.22.409.477.535.773.126.297.189.618.189.963v.014c0 .345-.063.667-.189.966a2.282 2.282 0 0 1-.535.777c-.232.22-.507.392-.826.518-.32.126-.671.189-1.054.189H9.513v-4.9zm6.363 0h1.078v4.9h-1.078v-4.9zm5.957 2.849l-.651-1.589-.651 1.589h1.302zM20.699 0h.994l2.1 4.935h-1.127l-.448-1.099h-2.072l-.448 1.099h-1.099L20.699 0z"></path></svg>
                    </div>
                </div>

                <div class="LinksContainer GTWalsheimProBold">
                    <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                </div>

                <div class="LinksContainer page-links">
                    <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                </div>
            </div>

        </div>
    </footer>

<!-- js -->
<script src="<?php echo get_stylesheet_directory_uri().'/js/jquery-3.4.1.min.js'; ?>"></script>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script> -->
<script src="<?php echo get_stylesheet_directory_uri().'/js/slick.js'; ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri().'/js/custom.js'; ?>"></script>

 
<script>


$("#filters").on("submit", function(event){
    event.preventDefault();
    getData();
});
getData();

function getData(){
    var str = "";
    var checkBoxs = "";
    $.each($("input[name='filters']:checked"), function(){
      if(checkBoxs !== "") {
        checkBoxs = checkBoxs + "," + $(this).val();
      }
      else {
        checkBoxs = checkBoxs + $(this).val();
      }
    //   alert(checkBoxs);
    str = checkBoxs
      
  });
   



    // if (str.length == 0) {
        // document.getElementById("portfolioSlide").innerHTML = "";
        // return;
    // } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("portfolioSlide").innerHTML = this.responseText;
                document.getElementById("portfolioSlide").innerHTML = this.responseText;
                $(".portfolioSlide").slick({
                  // infinite: true,
                  slidesToShow: 4,
                  slidesToScroll: 1,
                  responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 4
                      }
                    },
                    {
                      breakpoint: 980,
                      settings: {
                        slidesToShow: 3
                      }
                    },
                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1
                      }
                    }
                  ]
                });
            }
        }
        xmlhttp.open("GET", "<?php echo get_stylesheet_directory_uri(); ?>/filter-ajax.php?q="+str, true);
        xmlhttp.send();
    // }
}







</script>



<script>
$(document).ready(function(){
    // header edition menu    
    $('#choose-header').click( function(e) {
        $(this).toggleClass('menu-edition-bg')
        e.preventDefault(); // stops link from making page jump to the top
        e.stopPropagation(); // when you click the button, it stops the page from seeing it as clicking the body too
        $('#location-list-header').toggle();
        
    });
    $('#location-list-header').click( function(e) {
        e.stopPropagation(); // when you click within the content area, it stops the page from seeing it as clicking the body too
    });
    // footer edition menu   
    $('#choose-footer').click( function(e) {
        $(this).toggleClass('menu-edition-bg')
        e.preventDefault(); // stops link from making page jump to the top
        e.stopPropagation(); // when you click the button, it stops the page from seeing it as clicking the body too
        $('#location-list-footer').toggle();
        
    });
    $('#location-list-footer').click( function(e) {
        e.stopPropagation(); // when you click within the content area, it stops the page from seeing it as clicking the body too
    });
    $('body').click( function() {

        $('#location-list-header').hide();
        $('#choose-header').removeClass('menu-edition-bg');
        $('#location-list-footer').hide();
    }); 
    
    //  Open popup Menu
    $(".open-menu").click(function(){
    $('body').addClass("menu-opened");
    });

    //  Close popup Menu
    $(".CloseButton").click(function(){
    $('body').removeClass("menu-opened");
    });

  

    });




</script>
      <?php wp_footer(); ?>
</body>
</html>