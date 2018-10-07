<?php
/*************************************
 * @project:  Xenomorph - System - Toolbox
 * @file:		  TOOLBOX CLASS XToolbox
 * @author: 	Mickaël POLLET
 *************************************/

//namespace Xenomorph;

/*
  Paraètres Bootstrap par défaut

    Types de couleur :

    - primary
    - secondary
    - success
    - danger
    - warning
    - info
    - light
    - dark

*/

class XToolbox
{
/******************************************************/
/*****************     PARAMETRES     *****************/
/******************************************************/
/**********************************************************/
/*****************     FIN PARAMETRES     *****************/
/**********************************************************/


/********************************************************/
/*****************     CONSTRUCTEUR     *****************/
/********************************************************/
/************************************************************/
/*****************     FIN CONSTRUCTEUR     *****************/
/************************************************************/


/*******************************************************/
/*****************     HYDRATATION     *****************/
/*******************************************************/
/***********************************************************/
/*****************     FIN HYDRATATION     *****************/
/***********************************************************/


/*******************************************************/
/*****************      FONCTIONS      *****************/
/*******************************************************/

  // Affiche une icône FontAwsome en fonction de son nom
  // ATTENTION : Il faut faire un echo pour l'affichage !
	public static function showGlyph($glyphName, $type = 'fas', $color = '', $params = '') {

		// Récupération du type par défaut
		if ($type == null) {	$type = 'fas';	}

		// Préparation de la variable à retourner
		$glyphMessage = "";

		if (empty($color)) {
			if (!empty($params)) {
				$glyphMessage = '<i class="'.$type.' fa-'.$glyphName.'" style=\''.$params.'\'></i>';
			} else {
				$glyphMessage = '<i class="'.$type.' fa-'.$glyphName.'"></i>';
			}
		} else {
			if (!empty($params)) {
				$glyphMessage = '<i class="'.$type.' fa-'.$glyphName.'" style=\'color:'.$color.';'.$params.'\'></i>';
			} else {
				$glyphMessage = '<i class="'.$type.' fa-'.$glyphName.'" style=\'color:'.$color.'\'></i>';
			}
		}

		return $glyphMessage;
	}

  // Affiche une chaine de caractères dans une alerte Bootstrap
  // ATTENTION : Il faut faire un echo pour l'affichage !
	public static function showAlert($alert, $type = 'primary') {
		return '<span class="alert alert-'.$type.'">'.$alert.'</span>';
	}

  // Surligne une chaîne de caractères ou une partie de cette chaîne
  // ATTENTION : Il faut faire un echo pour l'affichage !
	public static function colorize($data, $search = null, $color = '#ffff66') {
		if ($search != null) {
			return str_ireplace($search, '<span style="background-color:'.$color.';">'.$search.'</span>', $data);
		} else {
			return '<span style="background-color:'.$color.';">'.$data.'</span>';
		}
	}

  // Affiche un message d'alerte
	// ATTENTION : Il faut faire un echo pour l'affichage !
	public static function showMessage($message, $type = 'info') {
		switch ($type) {
			case 'success':
				return '<div class="alert alert-success" role="alert"><b>'.self::showGlyph('check-circle').'</b> '.$message.'</div>';
				break;

			case 'info':
				return '<div class="alert alert-info" role="alert"><b>'.self::showGlyph('search').'</b> '.$message.'</div>';
				break;

			case 'warning':
				return '<div class="alert alert-warning" role="alert"><b>'.self::showGlyph('exclamation-triangle').'</b> '.$message.'</div>';
				break;

			case 'error':
				return '<div class="alert alert-danger" role="alert"><b>'.self::showGlyph('exclamation-circle').'</b> '.$message.'</div>';
				break;

			default:
				return '<div class="alert alert-info" role="alert"><b>'.self::showGlyph('search').'</b> '.$message.'</div>';
				break;
		}
	}

/*******************************************************/
/*****************    FIN FONCTIONS    *****************/
/*******************************************************/
}
?>
