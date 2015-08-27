/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

$(function () {
  var logo = "OA's Elastica Search";
  var title = ''
  var now = document.URL.replace (/^.*[\\\/]/, '');
  now = now === '' ? 'index.html' : now;

  var leftMenu = [
    {
      group: '主選單',
      items: [
        {target: '_self', href: 'index.html', text: '首頁', class: 'icon-home', },
        {target: '_self', href: 'struct.html', text: '結構', class: 'icon-list2', },
      ]
    },
    {
      group: 'CRUD',
      items: [
        {target: '_self', href: 'create.html', text: '新增 (Create)', class: 'icon-plus', },
        {target: '_self', href: 'read.html', text: '讀取 (Read)', class: 'icon-file-text2', },
        {target: '_self', href: 'update.html', text: '更新 (Update)', class: 'icon-pencil2', },
        {target: '_self', href: 'delete.html', text: '刪除 (Delete)', class: 'icon-bin', },
      ]
    },
    {
      group: '其他',
      items: [
        {target: '_self', href: 'github.html', text: 'GitHub', class: 'icon-github', },
        {target: '_self', href: 'https://github.com/comdan66/OA-ElasticaSearch/archive/master.zip', text: '下載', class: 'icon-in', },
        {target: '_self', href: 'about.html', text: '關於', class: 'icon-exclamation', },
        {target: '_blank', href: 'http://comdan66.github.io/', text: '更多', class: 'icon-more', },
      ]
    }
  ];

  var optionMenu = [
    {text: '關於作品', href: 'about.html', target: '_self', class: ''},
    {text: '原始碼', href: 'https://github.com/comdan66/OA-ElasticaSearch', target: '_blank', class: ''},
    {text: '更多作品', href: 'http://comdan66.github.io/', target: '_blank', class: ''},
    {text: 'GitHub', href: 'https://github.com/comdan66', target: '_blank', class: ''},
    {text: '作者', href: 'https://www.facebook.com/comdan66', target: '_blank', class: 'top_line'},
  ];

  var footer = '<div>OA-ElasticaSearch © 2015</div><div>如有相關問題歡迎與<a href="https://www.facebook.com/comdan66" target="_blank">作者</a>討論。</div>';


  leftMenu.forEach (function (t) {
    t.items.forEach (function (t) {
      if (/(http(s?))\:\/\//gi.test (t.href)) return;
      if (t.href == now) {
        title = t.text;
        t.class += ' active';
      }
      t.href = window.url + t.href;
    });
  });
  optionMenu.forEach (function (t) {
    if (/(http(s?))\:\/\//gi.test (t.href)) return;
    t.href = window.url + t.href;
  });

  $('title').text (title.length ? title + ' - ' + logo : logo);

  var overflow = window.body.css ('overflow');
  var $container = $('#container');
  var $wrapper = $container.find ('.wrapper');
  var $wrapperCover = $('<div />').addClass ('cover').prependTo ($wrapper).click (function () {
    $container.removeClass ('show');
    window.body.css ('overflow', overflow);
  });
  var $wrapperLeft = $('<div />').addClass ('wrapper_left').prependTo ($wrapper);

  var $leftOption = $('<div />').addClass ('option').addClass ('icon-menu').click (function () {
    if ($container.hasClass ('show')) {
      $container.removeClass ('show');
      window.body.css ('overflow', overflow);
    } else {
      $container.addClass ('show');
      window.body.css ('overflow', 'hidden');
    }
  });

  var $rightOption = $('<div />').addClass ('option').addClass ('icon-more').addClass ('white').append ($('<div />').addClass ('cover')).append ($('<div />').addClass ('menu').addClass ('i' + optionMenu.length).append (optionMenu.map (function (t) {
    return $('<a />').attr ('href', t.href).text (t.text).attr ('target', t.target).addClass (t.class);
  }))).click (function () {
    $(this).toggleClass ('show');
  });

  var $nav = $('<nav />').append ($('<div />').addClass ('container').append ($('<div />').addClass ('logo').text (logo)).append ($('<div />').addClass ('left').append ($leftOption).append ($('<div />').addClass ('title').text (title))).append ($('<div />').addClass ('right').append ($rightOption))).prependTo (window.body);

  $wrapperLeft.append ($('<div />').addClass ('logo').text (logo)).append (leftMenu.map (function (t) {
      return $('<div />').addClass ('title').text (t.group).add ($('<div />').addClass ('group').append (t.items.map (function (t) {
        return $('<a />').text (t.text).attr ('target', t.target).addClass (t.class).attr ('href', t.href);
      })));
    }));

  var $action = $('<a />').attr ('id', 'action').addClass ('icon-github').attr ('href', 'https://github.com/comdan66/OA-ElasticaSearch').attr ('target', '_blank').appendTo (window.body);
  var $footer = $('<div />').attr ('id', 'footer').append ($('<div />').addClass ('l')).append ($('<div />').addClass ('c').html (footer)).append ($('<div />').addClass ('r')).appendTo (window.body);

  window.closeLoading ();
});