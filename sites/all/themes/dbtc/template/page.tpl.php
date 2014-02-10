<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">ІФНТУНГ</a> -->
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php if ($main_menu): ?>
          <a href="#main-nav" class="element-invisible element-focusable" data-target=".nav-collapse" data-toggle="collapse"><?php print t('Skip to navigation'); ?></a>
        <?php endif; ?>
        <?php print theme('main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav', 'navbar-nav', 'navbar-right', 'clearfix')), 'heading' => t('Main menu'))); ?>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <div class="input-group">
              <input type="text" class="form-control" placeholder="я шукаю...">
            <div class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
              </div>    
            </div>
          </form>  
      </div>
  </div>
</nav>

<br /><br /><br />

<div class="container">
  <div class="row">
        <?php if ($logo): ?>
          <div class="col-md-1">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive" />
          </div>
        <?php endif; ?>

        <?php if ($site_name): ?>
          <div class="col-md-5">
            <h4><?php print $site_name; ?></h4>
          </div>
        <?php endif; ?>
  </div>
</div>

<br />

<div class="container">

  <div class="row">
  <nav role="navigation" class="navbar navbar-default navbar-static" id="navbar-example">
        <div class="navbar-header">
          <button data-target=".bs-js-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
            <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse bs-js-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Університет <b class="caret"></b></a>
              <ul aria-labelledby="drop1" role="menu" class="dropdown-menu">
                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Університет 1</a></li>
                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Університет 2</a></li>
                <li role="presentation"><a href="#" tabindex="-1" role="menuitem">Університет 3</a></li>
                <li class="divider" role="presentation"></li>
                <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Університет 4</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" role="button" id="drop2" href="#">Абітурієнтам <b class="caret"></b></a>
              <ul aria-labelledby="drop2" role="menu" class="dropdown-menu">
                <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Абітурієнтам 1</a></li>
                <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Абітурієнтам 2</a></li>
                <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Абітурієнтам 3</a></li>
                <li class="divider" role="presentation"></li>
                <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Абітурієнтам 4</a></li>
              </ul>
            </li>
            <li><a href="#">Працівникам</a></li>
            <li><a href="#">Партнери</a></li>

          </ul>

        </div><!-- /.nav-collapse -->
      </nav>
  </div>

</div>

<div class="container">
  <div class="row">
    <?php print render($page['banner']); ?>
  </div>
</div>
  

<div class="container">
  <div class="row">
    <div class="col-md-8">
          <!-- carusel start  -->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <!-- slide 1  -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="/files/images/slide_2.jpg" alt=" ">
                <div class="carousel-caption">
                  <a href="#"><h1>Заголовок статті 1</h1></a><br />
                  Коротенька вибірка з новини. Щою одтримати детальнішу інформацію перейдіть за посиланням.
                </div>
              </div>            
              <div class="item">
                <img src="/files/images/slide_2.jpg" alt=" ">
                <div class="carousel-caption">
                  <a href="#"><h1>Заголовок статті 2</h1></a><br />
                  Коротенька вибірка з новини. Щою одтримати детальнішу інформацію перейдіть за посиланням.
                </div>
              </div>            
              <div class="item">
                <img src="/files/images/slide_2.jpg" alt=" ">
                <div class="carousel-caption">
                  <a href="#"><h1>Заголовок статті 3</h1></a><br />
                  Коротенька вибірка з новини. Щою одтримати детальнішу інформацію перейдіть за посиланням.
                </div>
              </div>            
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
          <!-- carusel end  -->
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Важлива новина</h3>
        </div>
        <div class="panel-body">
          Коротка інформація
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">

        <?php if ($breadcrumb): ?>
          <div id="breadcrumb"><?php print $breadcrumb; ?></div>
        <?php endif; ?>

        <?php print $messages; ?>

        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>    

    </div>

    <div class="col-md-8">
      <?php print render($page['content_right']); ?>
    </div>
  </div>
</div>



<div class="clear"></div>

<footer id="footer">
  <?php print render($page['footer']); ?>
</footer>
