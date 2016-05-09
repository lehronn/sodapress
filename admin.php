<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
	
		<div class="eleven columns" style="">
		<h3>Panel administracyjny</h3>
		</div>
	</div>
	
    <div class="row">
	
	<div class="one columns" style="margin-top: 0%"><p>Treść treść treść</p></div>
	
      <div class="ten columns" style="margin-top: 5%">
        <h3>Witaj administratorze!</h3>
        <p>Tutaj, w panelu administracyjnym możesz zarządzać stronami, artykułami oraz użytkownikami.</p>
		<p><a href="index.php">Wróć na stronę główną witryny.</a></p>
		<h4>Artykuły</h4>
  <?php
include('db_connect.php'); 
// nawiązanie połączenia z bazą danych w pliku db_connect.php	

$result = $mysqli->query("SELECT * FROM articles ORDER BY date");

echo '<table class="u-full-width">
  <thead>
    <tr>
      <th>id</th>
      <th>Tytuł</th>
      <th>Autor</th>
      <th>Kategoria</th>
	  <th>Data pub.</th>
    </tr>
  </thead>
  <tbody>
    <tr>';
while ( $article = mysqli_fetch_array($result) ) {
	echo '<tr>';
	echo '<td>' . $article['id'] . '</td>';
	echo '<td>' . $article['title'] . '</td>';
	echo '<td>' . $article['author'] . '</td>';
	echo '<td>' . $article['category'] . '</td>';
	echo '<td>' . $article['date'] . '</td>';
	echo '</tr>';
}
?>
</tr>
</tbody>
</table>


		<h4>Strony</h4>
  <?php
include('db_connect.php'); 
// nawiązanie połączenia z bazą danych w pliku db_connect.php	

$result = $mysqli->query("SELECT * FROM sites ORDER BY weight");

echo '<table class="u-full-width">
  <thead>
    <tr>
	  <th>id</th>
      <th>Waga</th>
      <th>Nazwa</th>
      <th>Odnośnik</th>
      <th>Rodzic</th>
    </tr>
  </thead>
  <tbody>
    <tr>';
while ( $sites = mysqli_fetch_array($result) ) {
	echo '<tr>';
	echo '<td>' . $sites['id'] . '</td>';
	echo '<td>' . $sites['weight'] . '</td>';
	echo '<td>' . $sites['name'] . '</td>';
	echo '<td>' . $sites['ahref'] . '</td>';
	echo '<td>' . $sites['parent'] . '</td>';
	echo '</tr>';
}
?>
</tr>
</tbody>
</table>

		<h4>Użytkownicy</h4>
  <?php
include('db_connect.php'); 
// nawiązanie połączenia z bazą danych w pliku db_connect.php	

$result = $mysqli->query("SELECT * FROM users ORDER BY id");

echo '<table class="u-full-width">
  <thead>
    <tr>
      <th>id</th>
      <th>Login</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>';
while ( $users = mysqli_fetch_array($result) ) {
	echo '<tr>';
	echo '<td>' . $users['id'] . '</td>';
	echo '<td>' . $users['login'] . '</td>';
	echo '<td>' . $users['email'] . '</td>';
	echo '</tr>';
}
?>
</tr>
</tbody>
</table>
		
		
      </div>
	  
	  <div class="ten columns" style="margin-top: 5%">
		<h4>Dodaj nowy artykuł</h4>
		<form>
		<label for="exampleEmailInput">Tytuł</label>
		<input class="u-full-width" type="email" placeholder="Tytuł nowego artykułu..." id="title">
		
		<label for="exampleEmailInput">Kategoria</label>
		<input class="u-full-width" type="email" placeholder="Kategoria nowego artykułu..." id="category">
		
		<label for="exampleMessage">Treść artykułu</label>
		<textarea class="u-full-width" placeholder="Treść artykułu..." id="content"></textarea>
		<input class="button-primary" type="button" value="Dodaj artykuł" id="addArticule">
		</form>
		
		<h4>Dodaj nową stronę</h4>
		<form>
		<label for="exampleEmailInput">Nazwa strony</label>
		<input class="u-full-width" type="email" placeholder="Nazwa strony" id="title">
		
		<label for="exampleEmailInput">Odnośnik</label>
		<input class="u-full-width" type="email" placeholder="Kategoria nowego artykułu..." id="category">
		
		<label for="exampleEmailInput">Strona nadrzędna</label>
		<input class="u-full-width" type="email" placeholder="Kategoria nowego artykułu..." id="category">
		
		<label for="exampleMessage">Treść strony</label>
		<textarea class="u-full-width" placeholder="Treść artykułu..." id="content"></textarea>
		<input class="button-primary" type="button" value="Dodaj artykuł" id="addArticule">
		</form>
		
				<h4>Dodaj nowego użytkownika</h4>
		<form>
		<label for="exampleEmailInput">Login</label>
		<input class="u-full-width" type="email" placeholder="Tytuł nowego artykułu..." id="title">
		
		<label for="exampleEmailInput">Hasło</label>
		<input class="u-full-width" type="email" placeholder="Tytuł nowego artykułu..." id="title">
		
		<label for="exampleEmailInput">Potwierdzenie hasła</label>
		<input class="u-full-width" type="email" placeholder="Tytuł nowego artykułu..." id="title">
		
		<label for="exampleEmailInput">Adres email</label>
		<input class="u-full-width" type="email" placeholder="Kategoria nowego artykułu..." id="category">
		
		 <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Akceptuję i znam regulamin.</span>
  </label>
   <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Wyślij użytkownikowi potwierdzenie.</span>
  </label>
		<input class="button-primary" type="submit" value="Submit">
		</form>
		
		<h4>Statystyki</h4>
	  <p>Ile stron, użytkowników, artykułów, kategorii i ewentualnie jakieś inne bzdury do dodania.</p>
		
      </div>
	  
	  
	  
	  
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
