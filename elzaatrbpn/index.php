
<!DOCTYPE html>
<html>
<head>
  <title>Upload Gambar</title>

  <style type="text/css">
    body {
       font-family: 'sans-serif', 'arial';
    }
  
    /*#content{
      width: 50%;
      margin: 20px auto;
    }*/
     
    form{
      width: 20%;
      margin: 20px auto;
    }
     
    form div{
      margin-top: 15px;
    }
    
    form div input, textarea {
      margin-top: 4px;
    }

    form div button {
      width: auto;
      padding: 10px;
      background-color: #f0f0f0;
      border: thin solid #999;
      cursor: pointer;
      font-weight: bold;
    }
     
    #img_div{
      width: 80%;
      padding: 5px;
      margin: 15px auto;
      border: 1px solid #cbcbcb;
    }
     
    #img_div:after{
      content: "";
      display: block;
      clear: both;
    }
     
    img{
      float: left;
      margin: 5px;
      width: 150px;
      height: 140px;
    }
  /*  img{
      float: left;
      margin: 5px;
      width: 150px;
      height: 140px;*/
    }
  </style>
</head>
<head>
  <link rel="shortcut icon" href="lambang.png">
  <img src="logoatrbpn.png" text-align=center; style="float: left;" height="125px;" width="125px;" style="margin-left:30px;" style="margin:3px 1px;">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Kementerian Agraria dan Tata Ruang/Badan Pertanahan Nasional</title>
</head>
<body>
  
  <div class="text-center">
    <h2>KEMENTERIAN AGRARIA DAN TATA RUANG</h2>
    <h2>BADAN PERTANAHAN NASIONAL</h2>
    <h5>Jalan Sisingamangaraja Nomor 2 Jakarta Selatan Telp. 021-7393939, 7228901: www.atrbpn.go.id</h5>
  </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
<p><p><p><p><p><p>
 <hr><br>
<body>
  <div id="content">
    <h1 align="center">Upload Gambar</h1>
    <form method="post" action="proses_upload.php" enctype="multipart/form-data">
      <div>
        <label for="gambar">Pilih gambar yang akan diupload</label>
 <input type="file" name="gambar" required=""><br>
      </div>
      <div>
 <button type="submit" name="upload">Upload</button>
      </div>
    </form>

   

    <?php
      require_once 'koneksi.php';
      
      // ambil semua data dari database
      $stmt = mysqli_query($koneksi, "SELECT * FROM upload");
      
      // tampilkan data
      while ($r = $stmt->fetch_assoc()) {
 echo "<img src='gambar/" . $r['gambar'] . "'>";
      }
    ?>

  </div>
</body>
</html>