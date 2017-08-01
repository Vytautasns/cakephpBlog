<?php
/**
 * Post Controller
 */
class PostsController extends AppController
{
    public $helpers = ['Form', 'Html'];

    // Dispay listing of all posts
    public function index()
    {
      $this->set('posts', $this->Post->find('all', ['order' => ['Post.created DESC']]));
    }

    // Retrieve post detailed view
    public function view($id = null, $slug = null)
    {
      if (!$id || !$slug) {
        throw new NotFoundException(__('Invalid post'));
      }


      $post = $this->Post->findById($id);
      if (!$post) {
        throw new NotFoundException(__('Invalid post'));
      }

      //  Check if slug is valid
      $generatedSlug = Inflector::slug($post['Post']['title'], '-');
      if ($generatedSlug != $slug) {
        throw new NotFoundException(__('Invalid post'));
      }

      $this->set('post', $post);
    }

    // Store posts to database
    public function add()
    {
      // post as in _POST method
      if ($this->request->is('post')) {
        $this->Post->create();
        if ($this->Post->save($this->request->data)) {
          $this->Flash->success(__('Post has been saved!'));
          return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('Unable to save the post. '));
      }
    }

    // Updates the resource in current model
    public function edit($id = null)
    {
      if (!$id) {
        throw new NotFoundException(__('Invalid post'));
      }

      $post = $this->Post->findById($id);
      if (!$post) {
        throw new NotFoundException(__('Invalid post'));
      }

      if ($this->request->is(['post', 'put'])) {
        $this->Post->id = $id;
        if ($this->Post->save($this->request->data)) {
          $this->Flash->success(__('Post updated!'));
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your post'));
      }

      if (!$this->request->data) {
        $this->request->data = $post;
      }
    }


    //  Deletes the post
    public function delete($id)
    {
      if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
      }

      if ($this->Post->delete($id)) {
        $this->Flash->success(__('Post %s deleted successfully.', h($id)));
      } else {
        $this->Flash->error(__('Post %s could not be deleted', h($id)));
      }

      return $this->redirect(['action' => 'index']);

    }


}
