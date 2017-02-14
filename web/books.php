<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les livres </title>
  </head>
  <body>
    <table>
      <?php
      require_once 'books.php';
      //make a request
      $bks = new PDO('mysql:host=localhost;dbname=bookstore','bookstore','bookstore');
      $statement = $bks->query("SELECT * FROM books");
      //fetch results - get results
      while ($books = $statement->fetch(PDO::FETCH_ASSOC)) {
        # code...
        echo "<tr>";
        echo '<td>'.$books["title"].'</td>';
        echo '<td>'.$books["date"].'</td>';
        echo '<td>'.$books["isbn"].'</td>';
        echo "</tr>";
      }
      //post results
       ?>
    </table>
  </body>
</html>
