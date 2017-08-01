<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapisdfsdfd development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
?>

<!DOCTYPE html>
<html lang="en">
    <?php echo $this->Html->charset(); ?>
    <title>
      <?php echo $cakeDescription ?>:
      <?php echo $this->fetch('title'); ?>
    </title>
    <?php
      echo $this->Html->meta('icon');

      echo $this->Html->css('cake.generic');

      echo $this->fetch('meta');
      echo $this->fetch('css');
      echo $this->fetch('script');
    ?>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>
    <div class="container panel panel-default">


			<div class="blog-header">
				<h1 class="blog-title"><em>Cakephp 2.x</em> blog</h1>
			</div>

			<div class="row panel-body">
				<?php echo $this->Flash->render(); ?>
				<div class="col-lg-12 blog-main">

				<?php echo $this->fetch('content'); ?>
			</div>


      </div><!-- /.row -->

    </div><!-- /.container -->
  </body>
</html>
