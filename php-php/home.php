<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-3">
     <div class="container">
     <h3 class="text-white pt-1">ようこそ</h3>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="">ログアウト</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="form1.php">問い合わせ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="use.php">使い方</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="app/index.php">掲示板</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="病院名入れてください" aria-label="Search">
        <button class="btn btn-primary ms-1" type="submit">Search</button>
      </form>
    </div>
  </div>
  </nav>
<div class="hero vh-100 d-flex aligh-items-center">
 <div class="container">
  <div class="row">
   <div class="col-lg-10 mx-auto text-center mt-5">   
    <h1>男性看護師プラットホーム</h1>
      <h2 class="mt-5">特徴から探す</h2>
        <div class="mt-3">
        <a href="" class="btn btn-primary">給料が高い</a>
        <a href="" class="btn btn-primary">満足度が高い</a>
        <a href="" class="btn btn-primary">離職率が低い</a>
        <a href="" class="btn btn-primary">男性看護師が多い</a>
        <a href="" class="btn btn-primary">平均年齢が低い</a>
        <a href="" class="btn btn-primary">子育て世代に優しい</a>
        </div>
    </div>
  </div>
    <div class="hero d-flex aligh-items-center">
    <div class="container">
    <div class="row">
    <div class="col-lg-10 mx-auto text-center">  
        <div>
        <h2 class="mt-5">データ一覧</h2>
        </div>
        <div class="mt-3">
        <a href="input.php"class="btn btn-primary">山口大学医学部附属病院 データ入力</a>
        <a href="graph.php"class="btn btn-primary">山口大学医学部附属病院 データ閲覧</a>
        <a href=""class="btn btn-primary">山口大学医学部附属病院 口コミ閲覧</a>
        </div>
        <div class="mt-2">
        <a href=""class="btn btn-primary">山口○○病院 データ入力</a>
        <a href=""class="btn btn-primary">山口○○病院 データ閲覧</a>
        <a href=""class="btn btn-primary">山口○○病院 口コミ閲覧</a>
        </div>
    </div>
    </div>
    </div>
</body>
</html>