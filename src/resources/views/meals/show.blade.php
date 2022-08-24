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
    　  <div class="meal-detail">
          <button><a href="/">編集</a></button>
        　<form action='/'id='' method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">消去</button> 
        　</form>
    　     <div class="meal-name">
           <h2>料理名</h2>
           <p>{{$meal->name}}</p>
          </div>
            
          <div class="meal-Ingredients_Memo">
            <h2>材料メモ</h2>
          </div>
            
            <div class="meal-way">
              <h2>作り方</h2>
            </div>
    
            <div class="meal-cost">
              <h2>コスト</h2>
            </div>  
            
            <div class="meal-categoly">
              <h2>カテゴリー</h2>
            </div>
            
            <div clas="meal-diffyculty">
              <h2>難易度</h2>
            </div>
            
            <div class="meal-satiety">
              <h2>満腹度</h2>
            </div>  
    　  </div>
      </div>
      <div class="footer">
          
      </div>
    </body>
</html>