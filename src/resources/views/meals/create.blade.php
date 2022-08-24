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
        <div class="meal-register">
          <form action="/register"method="POST"id='form'>
            <h1>料理登録</h1>
            <div class="meal-name">
              <h2>料理名</h2>
              <input type="text"placeholder="オムライス"name="名前">
            </div>
            
            <div class="meal-Ingredients_Memo">
              <h2>材料メモ</h2>
              <input type="text"placeholder="卵二個、牛乳"name="メモ">
            </div>
            
            <div class="meal-way">
              <h2>作り方</h2>
              <input type="text"placeholder="卵を割って～～～"name='作り方'>
            </div>
            
            <div class="meal-cost">
              <h2>コスト</h2>
              <input type="number"placeholder="500"name='コスト'>円
            </div>  
            
            <div class="meal-categoly">
              <h2>カテゴリー</h2>
              <select class="select-categoly">
                <option>選択してください</option>
            　</select>                
            </div>
            
            <div clas="meal-diffyculty">
              <h2>難易度</h2>
              <input type="radio"name="難易度" value=1 checked> レベル1
              <input type="radio" name="難易度"  value=2> レベル２
              <input type="radio" name="難易度" value=3> レベル3
            </div>
            
            <div class="meal-satiety">
              <h2>満腹度</h2>
              <input type="radio"name="満足度" value=1 checked> ちょっと食べたい
              <input type="radio"  name="満足度"value=2> ちょうどいい
              <input type="radio"name="満足度" value=3> がっつり

            </div>
            
            <input type="button" value="登録する" class="postBtn"id="meal_create">  
          </form>
        </div>
      </div>
      <script src="js/meal_card.js"></script>
    </body>
</html>