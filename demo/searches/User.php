<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class User extends ElasticaSearch {
  static $primary_key = 'id';
  static $type_name = 'users';

  public function __construct ($data = array ()) {
    parent::__construct ($data);
  }
}