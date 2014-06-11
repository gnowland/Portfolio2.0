<header>
  <nav>
    <ul>
      <li class="<?php if (basename($_SERVER['PHP_SELF']) != 'index.php') echo 'external'; ?>"><a href="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo '#about'; } else { echo 'index.php#about'; } ?>" class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo 'scrollto'; } ?>">About</a></li>
      <li class="<?php if (basename($_SERVER['PHP_SELF']) != 'index.php') echo 'external'; ?>"><a href="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo '#work'; } else { echo 'index.php#work'; } ?>" class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo 'scrollto'; } ?>">Work</a></li>
      <li class="<?php if (basename($_SERVER['PHP_SELF']) != 'index.php') echo 'external'; ?>"><a href="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo '#contact'; } else { echo 'index.php#contact'; } ?>" class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { echo 'scrollto'; } ?>">Hire</a></li>
      <li class="<?php if (basename($_SERVER['PHP_SELF']) != 'blog.php') echo 'external'; ?>"><a href="blog.php">Weblog</a></li>
    </ul>
  </nav>
  <h1>GIFFORD <span aria-hidden="true" data-icon="&#61696;"></span> NOWLAND</h1>
</header>