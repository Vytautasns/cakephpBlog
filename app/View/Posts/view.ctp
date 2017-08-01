<h1><?php echo h($post['Post']['title']); ?></h1>
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
<p><small>Created at: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo h($post['Post']['body']); ?></p>
