<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime List</title>
</head>
<style>

header{
    text-align: center;
    padding: 20px;
}
.parent{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top:  25px;
    gap: 10px;
}
</style>
<body>
    
  <header>ANIME LIST</header>
  <div class="parent">
    <div class="left-parent">
        <h2>{{$prod_name1}}</h2>
        <h2>{{$prod_genre1}}</h2>
        <h2>{{$prod_price1}}</h2>
    </div>
    <div class="right-parent">
        <img src="https://static.wikia.nocookie.net/shingekinokyojin/images/e/ef/Attack_on_Titan_Season_3_sixth_key_visual_%28clean%29.jpg/revision/latest?cb=20210711062001" alt="">
    </div>

    <div class="left-parent">
        <h2>{{$prod_name2}}</h2>
        <h2>{{$prod_genre2}}</h2>
        <h2>{{$prod_price2}}</h2>
    </div>
    <div class="right-parent">
        <img src="https://static.wikia.nocookie.net/shingekinokyojin/images/e/ef/Attack_on_Titan_Season_3_sixth_key_visual_%28clean%29.jpg/revision/latest?cb=20210711062001" alt="">
    </div>
  </div>
</body>
</html>