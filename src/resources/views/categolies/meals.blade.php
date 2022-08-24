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
    　  <div class="meals-list">
   　     <h1>カテゴリー名：</h1>
　         <button><a href="/">編集</a></button>
        　 <form action='/'id='' method="post" style="display:inline">
             @csrf
             @method('DELETE')
             <button type="submit">消去</button> 
           </form>
    　   <h2>レシピ一覧</h1>

    　  </div>    　  
      </div>
      <div class="footer">
          
      </div>
    </body>
</html>