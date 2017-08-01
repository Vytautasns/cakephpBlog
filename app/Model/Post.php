<?php
 /**
  * Post model class
 */
 class Post extends AppModel
 {
  //  Validation rules
   public $validate = [
     'title' => [
       'rule' => 'notBlank',
     ],
     'body'=> [
       'rule' => 'notBlank',
     ]
   ];

 }
