<?php

// load lib
require_once 'Elastica/ElasticaSearch.php';

// load class
require_once 'searches/User.php';


// ===================================================================

// ElasticaSearch::deleteIndex();

// -------------------------------------------------------------------

// User::clean();




// ===================================================================

// $params = array(
//     'id' => 1,
//     'account' => 'OA',
//     'name' => "OA Wu",
//     'age' => 20,
//     'skills' => array(
//         'PHP', 'Java', 'C'
//       )
//   );
// // 新增一筆資料
// $user = User::create($params);

// -------------------------------------------------------------------

// $params1 = array(
//     'id' => 1,
//     'account' => 'OA',
//     'name' => "OA Wu",
//     'age' => 20,
//     'skills' => array(
//         'PHP', 'Java', 'C'
//       )
//   );
// $params2 = array(
//     'id' => 2,
//     'account' => 'OB',
//     'name' => "OB Wu",
//     'age' => 20,
//     'skills' => array(
//         'MySQL'
//       )
//   );
// // 新增多筆資料
// $users = User::createMany(array($params1, $params2));




// ===================================================================

// // 藉由 id 等於 1
// $user = User::find('one', array(
//     'must' => array('id' => 1)
//   ));

// // 印出其詳細資料
// echo 'ID: ' . $user->id . '<br/>';
// echo 'Account: ' . $user->account . '<br/>';
// echo 'Name: ' . $user->name . '<br/>';
// echo 'Age: ' . $user->age . '<br/>';

// echo "Skills:";
// print_r($user->skills); 


// -------------------------------------------------------------------

// // 藉由 name 相似於字串 Wu
// $users = User::find('all', array(
//     'should' => array('name' => 'Wu')
//   ));
// echo '<meta http-equiv="Content-type" content="text/html; charset=utf-8" /><pre>';

// // 印出總數
// echo 'Count: ' . count($users) . '<hr/>';

// // 使用迴圈將其陣列物件內容印出
// foreach ($users as $user) {
//   echo 'ID: ' . $user->id . '<br/>';
//   echo 'Account: ' . $user->account . '<br/>';
//   echo 'Name: ' . $user->name . '<br/>';
//   echo 'Age: ' . $user->age . '<br/>';

//   echo "Skills:";
//   print_r($user->skills); 
//   echo "<br/>";
// }

// -------------------------------------------------------------------

// // 依照不同條件綜合查詢
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

// // 印出第一筆所有欄位資料
// print_r($user[0]->fields);




// ===================================================================

// // 藉由 id 等於 1
// $user = User::find('one', array(
//     'must' => array('id' => 1)
//   ));

// // 設定欄位
// $user->account = 'comdan66';
 
//  // 儲存更新
// $user->save();

// -------------------------------------------------------------------

// // 欲新增的資料
// $params = array(
//     'id' => 1,
//     'account' => 'oa',
//     'name' => "吳政賢",
//     'age' => 30,
//     'skills' => array(
//         'JavaScript', 'java', 'object-C'
//       )
//   );

// // 依據 primary_key 欄位更新該筆資料
// User::update($params);

// -------------------------------------------------------------------

// $params = array(
//     array(
//       'id' => 1,
//       'account' => 'oa',
//       'name' => "吳政賢",
//       'age' => 30,
//       'skills' => array(
//           'JavaScript', 'java', 'object-C'
//         )
//     ), array(
//       'id' => 2,
//       'account' => 'Linux',
//       'name' => "OB Wu",
//       'age' => 18,
//       'skills' => array()
//     )
//   );
// // 依據各筆資料的 primary_key 欄位更新該筆資料
// $users = User::updateMany($params);




// ===================================================================

// // 藉由 id 等於 1
// $user = User::find('one', array(
//     'must' => array('id' => 1)
//   ));

// // 刪除
// $user->delete();

// -------------------------------------------------------------------

// $ids = array(1, 2, 3);

// // 依據 primary_key 欄位值陣列刪除
// User::deleteMany ($ids);
