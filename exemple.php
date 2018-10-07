<?php

  echo "<h2>Méthodes XToolbox</h2>";

  echo "<h3>Méthode showGlyph</h3>";
  // Affichage d'une Glyphe FontAwsome
  echo "Affichage d'une icône : ".                        XToolbox::showGlyph('archway')."<br/>";
  echo "Affichage d'une icône avec couleur : ".           XToolbox::showGlyph('archway', 'fas', 'blue')."<br/>";

  echo "<h3>Méthode showAlert</h3>";
  // Affichage d'un Label Bootstrap
  echo "Affichage d'une alerte : ".                       XToolbox::showAlert('Hello World !')."<br/>";
  echo "Affichage d'une alerte d'un style différent : ".  XToolbox::showAlert('Hello World !', 'info')."<br/>";

  echo "<h3>Méthode colorize</h3>";
  // Affichage d'un Label Bootstrap
  echo "Affichage d'une chaîne colorée : ".               XToolbox::colorize('Hello World !')."<br/>";
  echo "Affichage d'une partie de chaîne colorée : ".     XToolbox::colorize('Hello World !', 'world')."<br/>";
  echo "Affichage d'une partie de chaîne colorée : ".     XToolbox::colorize('Hello World !', 'world', 'orange')."<br/>";

  echo "<h3>Méthode showMessage</h3>";
  // Affichage d'un Label Bootstrap
  echo "Affichage d'un message : ".                       XToolbox::showMessage('Hello World !')."<br/>";
  echo "Affichage d'un message d'avertissement : ".       XToolbox::showMessage('Hello World !', 'warning')."<br/>";
  echo "Affichage d'un message d'erreur : ".              XToolbox::showMessage('Hello World !', 'error')."<br/>";
  echo "Affichage d'un message de succès : ".             XToolbox::showMessage('Hello World !', 'success')."<br/>";

?>
