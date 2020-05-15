<html>
     <head>
          <title>Program Pencari Link Game</title>
     <head>
     <body> 
     <body background="1.jpg">   
      <tr>
      
      <div style="background-color: rgba(0,0,0,.1); border: 1px solid #17202A; height: auto; margin: 20px 0px; padding: 10px; text-align: center; width: auto;">
        <?php 
        class nggolek_link{
        private $linke1;
        private $linke2;
        private $linke3;
        private $linke4;

        function setLink1($linke1){
          $this->linke1 = $linke1;
        }
        function setLink2($linke2){
          $this->linke2 = $linke2;
        }
        function setLink3($linke3){
          $this->linke3 = $linke3;
        }
        function setLink4($linke4){
          $this->linke4 = $linke4;
        }
        function getLink1(){
          return $this->linke1;
        }
        function getLink2(){
          return $this->linke2;
        }
        function getLink3(){
          return $this->linke3;
        }
        function getLink4(){
          return $this->linke4;
        }
      }
        $linke =new nggolek_link();
        $linke->setLink1("<a href=https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/>Counter-Strike: Global Offensive</a>");
        $linke->setLink2("<a href=https://store.steampowered.com/app/570/Dota_2/>Dota 2</a>");
        $linke->setLink3("<a href=https://www.ea.com/games/apex-legends>Apex Legends</a>");
        $linke->setLink4("<a href=https://www.callofduty.com/warzone>Call of Duty®: Warzone</a>");

        
        if (empty($_POST["nama"])) {
          echo "<b>Harap Masukkan Nama Anda Untuk Memilih Game</b>";
        }else{
          if(empty($_POST['cek'])){
          echo "<b> Mohon Masukkan Pilihan Game yang Anda Cari!</b>";
          }else{
        $nama = $_POST['nama'];
        echo "Halo $nama, Game yang Anda cari adalah ";
        $pil = $_POST['cek'];
        if($pil == 1){
          echo "Counter-Strike: Global Offensive <br> berikut adalah linknya ".$linke->getLink1();
          echo "<br> <img src=g1.jpg <br>";
          
        }
        else if($pil ==2){
          echo "Dota 2<br> berikut adalah linknya ".$linke->getLink2();
          echo "<br> <img src=g2.jpeg <br>";
        }
        else if($pil==3){
          echo "Apex Legends<br> berikut adalah linknya ".$linke->getLink3();
          echo "<br> <img src=g3.jpg <br>";
        }
        else if($pil==4){
          echo "Call of Duty®: Warzone<br>berikut adalah linknya ".$linke->getLink4();
          echo "<br> <img src=g4.jpg <br>";
        }
      }
    } 
        ?>
      </tr>
    </div>
     Mau Mencoba Lagi?
     <form action="index.php" method="post">
     <input type="submit" value="OK"/>
     </body>
</html>
