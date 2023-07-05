<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.112.5" />
  <title>Halaman Member</title> 

  <style>
  *{
  padding: 0; margin: 0;
  }
  body{
    background: #1e243c;
    padding: 20px;
  }

  .container{
    background-color: #708090;
    width: 1200px;
    margin: auto;
    padding: 20px;
    border: 10px solid #fff;
    position: relative;
  }
  h1{
    color:#fff;
    font-size: 24px;
    font-family: 'Gugi', cursive;
    text-align: center;
  }
  p{
    text-align: center;
    font-size: 14px;
    font-family: 'Gamja Flower', cursive;
    margin-bottom: 100px;
  }
  span{
    color: #fff;
  }
  a{
    text-decoration: none;
  }
  button{
    position: absolute;
    right: 250px;
    bottom:70px;
    padding: 25px;
    border: none;
    border-radius: 50px;
    color: #fff;
    background: #1e243c;
    cursor: pointer;
    font-size: 25px;
    font-family: 'Gamja Flower', cursive;
  }
  form{
    margin-bottom: 50px;
  } 
  @media screen and (max-width: 1300px) {
    .container {
      width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
    }
  }
  </style>
</head>
<body class="container">
  <?php session_start(); ?>
  <div">
    <main>
      <h1>Anda Login Sebagai <?= $_SESSION['status'] ?>.</h1>
      <p>
        Halaman member memiliki tampilan menarik karena member miliki prioritas khusus dalam pelayanan sehingga
        diberikan tampilan yang berbeda dengan admin.
      </p>
      <p>
        <a href="logoutTugas.php" class="btn-light fw-bold border-white bg-white">Log Out</a>
      </p>
    </main>
  </div>
</body>

</html>