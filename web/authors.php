<!<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les auteurs </title>
  </head>
  <body>
    <table>
      <?php
      require_once 'authors.php';
      //make a request
      $aut = new PDO('mysql:host=localhost;dbname=bookstore','bookstore','bookstore');
      $statement = $aut->query("SELECT authors, authors_books FROM bookstore");
      //fetch results - get results
      while ($authors = $statement->fetch(PDO::FETCH_ASSOC)) {
        # code...
        echo "<tr>";
        echo '<td>'.$authors["name"].'</td>';
        echo '<td>'.$authors["town"].'</td>';
        echo '<td>'.$authors["company"].'</td>';
        echo "</tr>";
      }
      //post results
       ?>
    </table>
  </body>
</html>-->
