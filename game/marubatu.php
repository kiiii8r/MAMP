<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>○✖︎ゲーム</title>
  <style>
    #container {
      width: 306px;
      height: 306px;
      background: gray;
      margin: 20px auto;
    }

    .box {
      width: 100px;
      height: 100px;
      border: 1px solid black;
      background: white;
      float: left;
      text-align: center;
      font-size: 72px;
      line-height: 100px;
    }

    #clear {
      clear: left;
      width: 306px;
      height: 50px;
      background: whitesmoke;
      text-align: center;
      line-height: 50px;
      border: 1px solid #ccc;
      border-radius: 20px;
      ;
    }
  </style>
</head>

<body>

  <div id="container">
    <?php for ($x = 0; $x < 3; $x++) { ?>
      <?php for ($y = 0; $y < 3; $y++) { ?>
        <div id="id<?php echo $x * 3 + $y; ?>" class="box" onclick="action(<?php echo $x * 3 + $y; ?>);"></div>
      <?php } ?>
    <?php } ?>
    <div id="clear" onclick="clear1();">Clear</button>
    </div>

    <script>
      var turn = 0 // 0:○、1:x
      function action(n) {
        var elem = document.getElementById('id' + n);
        if (elem.innerText === '') {
          if (turn === 0) {
            elem.innerText = '○';
            turn = 1;
          } else {
            elem.innerText = '✖️';
            turn = 0;
          }
          check();
        }
      }

      function check() {
        //３つ揃ったら勝つアラート表示
      }

      function clear1() {
        for (var i = 0; i <= 8; i++) {
          document.getElementById('id' + i).innerText = '';
        }
        turn = 0;
      }
    </script>

</body>

</html>