<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mycloth</title>
  </head>
  <body>
    <div class="header flex">
      <div class="header-title">
        <p>Mycloth</p>
      </div>
      <div class="header-right flex">
        <a href="{{ url('/signup')}}">新規登録</a>
      </div>
    </div>
    <div class="form">
      <p>ログイン</p>
      <div class="form">
        <input placeholder="メールアドレス" type="email" />
        <input placeholder="パスワード" type="password" />
        <input type="submit" name="login" value="ログイン">
      </div>
    </div>
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
button {
width: 100px;
text-align: center;
padding: 8px 0 10px;
color: #fff;
background-color: #1760a0;
border-radius: 25px;
cursor: pointer;
}
.card {
margin: 100px auto;
width: 350px;
background: #fff;
border-radius: 5px;
padding: 20px;
}
.card p {
color: black;
font-weight: bold;
text-align: center;
}
input {
margin-top: 15px;
width: 80%;
border-radius: 10px;
padding: 10px;
border: 1px solid black;
color: black;
}
.form {
text-align: center;
}
.form button {
margin-top: 15px;
}
@media screen and (max-width:480px) {
  .logo {
  width: 100px;
  height: 25px;
  }
  .right p {
  margin-right: 10px;
  font-size: 10px;
  }
  .card {
  margin: 100px 20px;
  width: 80%;
  }
}
</style>