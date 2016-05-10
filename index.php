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
      <div class="one-half column" style="margin-top: 10%">
        <h3>Strona główna.</h3>		
		<?php
include('db_connect.php'); 
// nawiązanie połączenia z bazą danych w pliku db_connect.php	

$result = $mysqli->query("SELECT * FROM sites ORDER BY weight");

echo '<ul>';
while ( $sites = mysqli_fetch_array($result) ) {
	echo '<li>' . '<a href="index.php?href=' . $sites['ahref'] . '">' . $sites['name'] . '</a></li>';
	
}
echo '<li><a href=admin.php>Panel administratora</a></li>';
echo '</ul>';
?>

	 </div>

	 <div class="one-half column" style="margin-top: 10%">
  <?php
include('db_connect.php'); 
// nawiązanie połączenia z bazą danych w pliku db_connect.php	

$result = $mysqli->query("SELECT * FROM sites WHERE ahref = '$_GET[href]'");
$site = mysqli_fetch_array($result);

//jeśli link jest do strony głównej pokazuje artykuły, jeśli nie, to wyświetla to co w bazie jest pod href w db i ahref z GET.
if ($site['ahref'] == 'index' || ! $site['ahref']) {
	$result = $mysqli->query("SELECT * FROM articles ORDER BY date");

	while ( $article = mysqli_fetch_array($result) ) {
		echo '<article class="single-article">';
		echo '<h3>' . $article['title'] . '</h3>';
		echo 'autor: ' . $article['author'] . '<br/>';
		echo 'data publikacji: ' . $article['date'] . '<br/>';
		echo 'kategoria: ' . $article['category'] . '<br/>';
		echo '<div class="article-content">';
		echo '<p>' . $article['content'] . '</p>';
		echo '</div>';
		echo '</article>';
	}
} 
else {
	echo '<article class="single-article">';
	echo '<h3>' . $site['name'] . '</h3>';
	echo '<p>' . $site['content'] . '<br/></p>';
	echo '</div>';
	echo '</article>';	

}


	
	

	
	
?>
        
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
