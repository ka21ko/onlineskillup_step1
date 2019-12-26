<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      //if(isset($_POST["comment"])){
      if(isset($_GET["comment"])){
        //エスケープしてから表示
        //$comment = htmlspecialchars($_POST["comment"]);
        $comment = htmlspecialchars($_GET["comment"]);
        $name = htmlspecialchars($_GET["username"]);
        print("【 ${name}】さんのコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p>コメントを入力して送信ボタンを押してください。</p>
        <!-- <form method="POST" action="index.php"> -->
        <form method="GET" action="index.php">
          <P>コメント</p>
          <input name="comment"><br>
          <P>名前</p>
          <input name="username"><br>
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>