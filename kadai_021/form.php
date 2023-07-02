<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_021</title>
 </head>
 
 <body>
  <h2>お問い合わせ</h2>
  <form action="confirmation.php" method="post">
    <div>
      <lavel>お名前</lavel>
      <input type="text" name="user_name" >
    </div>
    <div>
      <lavel>性別</lavel>
      <input type="radio" name="user_gender" value="男性" checkd>男性
      <input type="radio" name="user_gender" value="女性">女性
      <input type="radio" name="user_gender" vallue="その他">その他
    </div>
    <div>
      <label>メールアドレス</label>
      <input type="text" name="user_email">
    </div>
    <div>
      <label>お問い合わせ内容</label>
      <textarea name="message" cols="30" rows="5"></textarea>
    </div>
    <input type="submit" value="送信">
   </form>

     <p>
         <?php

         ?>
     </p>
 </body>
 
 </html>