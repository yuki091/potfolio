<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>
  <div class="header flex">
    <div class="header-title">
        <p>Mycloth</p>
      </div>
      <div class="header-right flex">
        <a>新規登録</a>
      </div>
    </div>
  </div>
  
</div>
  <table>
  <ul>
    @foreach($cloth_data as $cloth_data)
    
    <li>{{ $cloth_data->brand_name }}</li>
    <li>{{ $cloth_data->memo }}</li>
    @endforeach
  </ul>
  </table>
<div>
</body>
</html>
<style>
*{
 margin: 0;
 padding: 0;
 font-family: Hiragino Maru Gothic ProN;
}
.flex {
display: flex;
justify-content: space-between;
}
.header {
  background-color: #333;
  height: 70px;
  font-size: 30px;
  color: #EEEEEE;
}
.header-title p {
  line-height: 70px;
  font-size: 30px;
  margin-left: 30px;
}
.header-right a {
  line-height: 70px;
  float: right;
  margin-right: 30px;
  cursor: pointer;
  font-size: 18px;
}
</style>