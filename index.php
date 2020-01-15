 <?php
include('proses-login.php');
include ('session.php');

?>

<!DOCTYPE html>
<html lang="en" style="padding-top: 40px;  background-image: url(../../simkud/img/city.jpg ) ; font-family: 'Lobster', cursive;">



<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
<link rel="stylesheet" href="index.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<style type="text/css">
  
</style>
</head>

<body class="main-content">

  <div class="header" >
    <div class="col-md-12 col-sm-12 ol-lg-12"></div>
                    <label><br><h1 align="center">Selamat Datang</h1></br></label>
                  </div>
                  <div style="
                  <div class="1-part" >
                  <form class="user" action="proses-login.php" method="POST">
                    <div class="1-part">
                      <input type="text" class="input-1" required id="exampleInputEmail" name="username" placeholder="Nama Pengguna..." />
                    </div>
                    <div class="overlap-text">
                      <input type="password" class="input-2" required id="exampleInputPassword" name="password" placeholder="Kata Kunci..." />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                        Masuk
                  
                    </button>
                   
                
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>