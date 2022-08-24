<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css" >
    </head>
    <body>
    　<div class="header">
    　　<div class="header-logo">男の自炊アプリ</div>
    　　<div class="header-list">
　　      <button><a href="/register">レシピ登録</a></button>
　　      <button><a href="/meals">料理一覧</a></button>
　　      <button><a href="/categoly">カテゴリー</a></button>
    　　</div>
    　</div>
    　<div class="main">
    　  <div class="categoly-create">
        　<h2>カテゴリー名編集</h2>
        　<input type="text"placeholder="主食">
        　<input type="submit"value="保存する">    　  
      </div>
      <div class="footer">
          
      </div>
    </body>
</html>