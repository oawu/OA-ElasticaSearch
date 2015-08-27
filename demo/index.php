<?php

error_reporting(E_ALL ^ E_STRICT);

// load lib
require_once 'Elastica/ElasticaSearch.php';

// load class
require_once 'searches/User.php';

// $params = array(
//     'id' => 1,
//     'account' => 'OA',
//     'name' => "OA Wu",
//     'age' => 30,
//     'skills' => array(
//         'php', 'java', 'c'
//       )
//   );
// // 新增一筆資料
// $user = User::create($params);

// ===================================================================================================================

// $params1 = array(
//     'id' => 1,
//     'account' => 'OA',
//     'name' => "OA Wu",
//     'age' => 20,
//     'skills' => array(
//         'php', 'java', 'c'
//       )
//   );
// $params2 = array(
//     'id' => 2,
//     'account' => 'OB',
//     'name' => "OB Wu",
//     'age' => 30,
//     'skills' => array()
//   );
// // 新增多筆資料
// $users = User::createMany(array($params1, $params2));

// ===================================================================================================================

// // 藉由 id 等於 1
// $user = User::find('one', array(
//     'must' => array('id' => 1)
//   ));

// echo $user->name; // 印出 OA Wu

// ===================================================================================================================

// // 藉由 name 相似於字串 Wu
// $user = User::find('all', array(
//     'should' => array('name' => 'Wu')
//   ));
// echo count($user); // 印出 2

// ===================================================================================================================

// $user = User::find('all', array(
//     'must' => array('id' => 1),                                 // id 一定要為 1
//     'limit' => 10,                                              // 取前 10 筆
//     'range' => array('age' => array('from' => 0, 'to' => 100)), // 設定 age 範圍 0~100
//     'offset' => 0,                                              // 起始位移值 0
//     'select' => array('id', 'account', 'name'),                 // 取出 id、account、name
//     'should' => array('name' => 'Wu'),                          // 如果有 Wu
//     'must_not' => array('name' => 'A'),                         // 不能有 A
//     'script_fields' => array('var' => array(                    // 新增一個變數，並且使用 script 處理
//                                   'script' => "doc['age'].value / 2 + constantVal",
//                                   'params' => array(
//                                       'constantVal' => 10
//                                     )
//                                 ))
//   ));
// print_r($user[0]->fields); // 印出第一筆所有欄位資料

// ===================================================================================================================

// // 藉由 id 等於 1
// $user = User::find('one', array(
//     'must' => array('id' => 1)
//   ));

// $user->account = 'comdan66'; // 設定欄位
// $user->save(); // 儲存更新

// ===================================================================================================================

// // 欲新增的資料
// $params = array(
//     'id' => 1,
//     'account' => 'comdan66',
//     'name' => "OA Wu",
//     'age' => 30,
//     'skills' => array(
//         'php', 'java', 'c'
//       )
//   );

// // 依據 primary_key 欄位更新該筆資料
// User::update($params);

// ===================================================================================================================

// $params1 = array(
//     'id' => 1,
//     'account' => 'comdan66',
//     'name' => "OA Wu",
//     'age' => 20,
//     'skills' => array(
//         'php', 'java', 'c'
//       )
//   );
// $params2 = array(
//     'id' => 2,
//     'account' => 'comdan99',
//     'name' => "OB Wu",
//     'age' => 30,
//     'skills' => array()
//   );
// // 依據各筆資料的 primary_key 欄位更新該筆資料
// $users = User::updateMany(array($params1, $params2));

// ===================================================================================================================

// // 藉由 id 等於 1
// $user = User::find('one', array(
//     'must' => array('id' => 1)
//   ));

// $user->delete(); // 刪除

// ===================================================================================================================

// $ids = array(1, 2, 3);
// User::deleteMany ($ids); // 依據 id 陣列刪除
