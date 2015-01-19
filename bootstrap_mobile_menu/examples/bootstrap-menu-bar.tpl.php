<?php if($item_list): ?>
<nav class="navbar navbar-default hidden-lg hidden-md">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php print url('<front>', array('absolute' => true)); ?>">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php foreach($item_list as $item): ?>
          <?php if ($item['below']): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php print $item['link']['link_title']; ?> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <?php print theme('bootstrap_menu_item', array('item' => $item)); ?>
                <?php foreach($item['below'] as $item): ?>
                  <?php print theme('bootstrap_menu_item', array('item' => $item)); ?>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php else: ?>
            <?php print theme('bootstrap_menu_item', array('item' => $item)); ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php endif; ?>