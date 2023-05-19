<?php
  // De URL van de website die je wilt weergeven
  $url = "https://www.google.com";

  // Optioneel: voeg eventuele queryparameters toe
  $query = $_SERVER['QUERY_STRING'];
  $url .= "?" . $query;

  // Haal de inhoud op van de externe website
  $content = file_get_contents($url);

  // Stuur de juiste HTTP-headers
  header("Content-Type: text/html");
  echo $content;
?>
