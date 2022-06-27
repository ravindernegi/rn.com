<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php if ( is_home() ) { ?>
	<title><?php bloginfo('name') ?> - <?php bloginfo('description');?></title>
<?php }else{?>
    <title><?php  echo get_the_title();?> - <?php bloginfo('name') ?></title>
	<?php }?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head() ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DHN3PNTXEQ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-DHN3PNTXEQ');
    </script>
</head>

<body <?php body_class(); ?>>
    <div class="bg-white">
      <header class="blog-header py-2 shadow">
        <div class="container">
          
          <div
            class="row flex-nowrap justify-content-between align-items-center"
          >
            <div class="col-10 col-md-3 pt-1 text-center">
        
              <a href="<?php echo home_url(); ?>">
                Ravinder Negi
              </a>
            </div>
            <div class="col-1 col-md-9 text-center justify-content-end d-none d-md-block">
				<nav class="navbar navbar-expand-lg navbar-dark">
          
                <div class="container-fluid">
                  <div
                    class="collapse navbar-collapse justify-content-md-end"
                  >
					  
                     <?php
                        wp_nav_menu(array(
                            'container' => '', // Leaving it empty removes the <div> container.
                            'menu_class'=>'navbar-nav',
                            'theme_location'=>'main'
                        ));
                    ?>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col-2 col-md-1 d-flex d-block d-lg-none justify-content-end align-items-center">
              <a href="#" ><svg style="fill:#fff;"height="16pt" viewBox="0 -53 384 384" width="16pt" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg></a>
              
            </div>
          </div>
        </div>
      </header>

      <main class="container">