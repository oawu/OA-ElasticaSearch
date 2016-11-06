# Welcome To OA's Elastica Search!
這是一個 Elastica Search 基本 CRUD 的使用工具，架構於 [Elastica Library](https://github.com/ruflin/Elastica)，將讀取出來的資料物件化，以及包裝成方便開發的工具。

---

<br/>
## 聲明
本作品授權採用 姓名標示-非商業性 2.0 台灣 (CC BY-NC 2.0 TW) 授權，詳見 [http://creativecommons.org/licenses/by-nc/2.0/tw/](http://creativecommons.org/licenses/by-nc/2.0/tw/)



<br/>
## 詳細 DEMO 說明網頁
* [https://works.ioa.tw/OA-ElasticaSearch/index.html](https://works.ioa.tw/OA-ElasticaSearch/index.html)


<br/>
## 簡介
* 這是一套架構於 [Elastica Library](https://github.com/ruflin/Elastica) 所開發的工具，進階方便使用物件操作 Elastica Search 資料讀取。
* 經由各種類別方法(static)，對 Elastica Search 實作 [新增](https://works.ioa.tw/OA-ElasticaSearch/guide/create.html)、[查詢](https://works.ioa.tw/OA-ElasticaSearch/guide/read.html)、[修改](https://works.ioa.tw/OA-ElasticaSearch/guide/update.html)、[刪除](https://works.ioa.tw/OA-ElasticaSearch/guide/delete.html) 的操作。
* 查詢出來的每一筆資料，再將其封裝成物件單位，方便於物件化思維的設計。
* 每筆物件皆可繼承基礎的 [修改](https://works.ioa.tw/OA-ElasticaSearch/guide/update.html)、[刪除](https://works.ioa.tw/OA-ElasticaSearch/guide/delete.html) 的實體方法。
* 分別對不同 Type 分類出不同的類別(Class)。
* 使用前要先引入 `demo/Elastica/ElasticaSearch.php` 檔案後即可使用。
* CRUD 範例，將會以 Type User 作為範例說明，詳細結構可以查閱 [結構說明](https://works.ioa.tw/OA-ElasticaSearch/guide/struct.html)。
* 後端 PHP 語言範例可以查閱檔案 `demo/index.php`。
* 相關 Elastica Search 語法可以查閱 [https://www.elastic.co/](https://www.elastic.co/)。




<br/>
## 目錄
* [結構說明](https://works.ioa.tw/OA-ElasticaSearch/guide/struct.html)
* [Mac 安裝](https://works.ioa.tw/OA-ElasticaSearch/guide/install.html)
* [新增 (Create)](https://works.ioa.tw/OA-ElasticaSearch/guide/create.html)
	* [單筆新增 - create()](https://works.ioa.tw/OA-ElasticaSearch/guide/create.html#create)
	* [多筆新增 - createMany()](https://works.ioa.tw/OA-ElasticaSearch/guide/create.html#createMany)
* [讀取 (Read)](https://works.ioa.tw/OA-ElasticaSearch/guide/read.html)
	* [單筆查詢 - find('one')](https://works.ioa.tw/OA-ElasticaSearch/guide/read.html#findOne)
	* [多筆查詢 - find('all')](https://works.ioa.tw/OA-ElasticaSearch/guide/read.html#findAll)
	* [多項條件查詢 - find('all', $conditions)](https://works.ioa.tw/OA-ElasticaSearch/guide/read.html#findConditions)
* [更新 (Update)](https://works.ioa.tw/OA-ElasticaSearch/guide/update.html)
	* [物件資料更新 - save()](https://works.ioa.tw/OA-ElasticaSearch/guide/update.html#save)
	* [單筆資料更新 - update()](https://works.ioa.tw/OA-ElasticaSearch/guide/update.html#update)
	* [多筆資料更新 - updateMany()](https://works.ioa.tw/OA-ElasticaSearch/guide/update.html#updateMany)
* [刪除 (Delete)](https://works.ioa.tw/OA-ElasticaSearch/guide/delete.html)
	* [物件資料刪除 - delete()](https://works.ioa.tw/OA-ElasticaSearch/guide/delete.html#delete)
	* [多筆刪除 - deleteMany()](https://works.ioa.tw/OA-ElasticaSearch/guide/delete.html#deleteMany)



<br/>
### 關於

* 作者名稱 - [OA Wu](http://www.ioa.tw/)
* E-mail - <comdan66@gmail.com>
* 作品名稱 - OA-ElasticaSearch
* 最新版本 - 1.1
* GitHub - [OA-ElasticaSearch](https://github.com/comdan66/OA-ElasticaSearch)
* Reference - [Elastica Library](https://github.com/ruflin/Elastica)
* Reference - [https://www.elastic.co/](https://www.elastic.co/)
* 更新日期 - 2015/08/28