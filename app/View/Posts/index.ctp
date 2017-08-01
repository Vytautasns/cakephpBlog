<div class="col-sm-8 blog-main">
  <span>
    <?php
      echo $this->html->link(
        'Add new post',
        ['action' => 'add']
      );
     ?>
  </span>
  <?php foreach ($posts as $post): ?>
  <div class="blog-post">
    <h2 class="blog-post-title">  <?php
          echo $this->Html->link( $post['Post']['title'], [
              'controller' => 'posts',
              'action' => 'view',
              'id' => $post['Post']['id'],
              'slug' =>  Inflector::slug($post['Post']['title'], '-')
            ]
          );
       ?></h2>
    <p class="blog-post-meta"><?php echo $post['Post']['created'] ?><a href="#"> Anyone</a></p>
    <p><?php echo $post['Post']['body'] ?></p>
    <div>
      <?php
          echo $this->Html->link(
              'Edit',
              array('action' => 'edit', $post['Post']['id'])
          );
      ?>
      |
      <?php
          echo $this->Form->postLink(
            'Delete',
            ['action' => 'delete', $post['Post']['id']],
            ['confirm' => 'Are you sure?']
          );
       ?>
    </div>
  </div><!-- /.blog-post -->
<?php endforeach; ?>
<?php unset($post); ?>
