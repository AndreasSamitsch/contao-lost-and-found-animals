<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');



/**
 * Table tl_tsz_lostandfoundanimals
 */
$GLOBALS['TL_DCA']['tl_tsz_lostandfoundanimals'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true
		
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'flag'					  => 2,
			'fields'                  => array('datum DESC'),
			'panelLayout'             => 'filter;sort,search,limit',

		),
		'label' => array
		(
			'fields'                  => array('bild','art','plz','ort','datum','anzeigenid',),
			'format'				  => '<div style="height:100px; width:0px; float: left; visibility: hidden;">.</div><img src="%s" style="height:100px; width:auto;"/><br/> %s in %s %s &nbsp;&nbsp;&nbsp; Datum: %s &nbsp;&nbsp;&nbsp; ID:%s'
			//'showColumns'             => true
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(

			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
	
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('kategorie'),
		'default'                     => '{title_legend},kategorie',
		'hunde'						=> '{title_legend},kategorie,eintrag,art,datum,bundesland,bezirk,plz,ort;{tierdaten_legend},name_tier,rasse,geschlecht,groesse,fell_haarlaenge,fellmusterung,farbe_tier,ungefaehre_altersgruppe,hundemarke,nummer_hundemarke,chipnummer,besondere_hinweise,bild;{kontaktdaten_legend},vorname,nachname,kontakt_strasse,kontakt_plz,kontakt_ort,telefonnummer,mail,published',
		'katzen'					=> '{title_legend},kategorie,eintrag,art,datum,bundesland,bezirk,plz,ort;{tierdaten_legend},name_tier,rasse,geschlecht,fell_haarlaenge,fellmusterung,farbe_tier,ungefaehre_altersgruppe,chipnummer,besondere_hinweise,bild;{kontaktdaten_legend},vorname,nachname,kontakt_strasse,kontakt_plz,kontakt_ort,telefonnummer,mail,published',
		'kleintiere'					=> '{title_legend},kategorie,eintrag,art,datum,bundesland,bezirk,plz,ort;{tierdaten_legend},name_tier,rasse,geschlecht,farbe_tier,ungefaehre_altersgruppe,chipnummer,besondere_hinweise,bild;{kontaktdaten_legend},vorname,nachname,kontakt_strasse,kontakt_plz,kontakt_ort,telefonnummer,mail,published'
	),


	// Fields
	'fields' => array
	(
		'kategorie' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['kategorie'],
			'exclude'                 => true,
			'filter'				  => true,
			'inputType'               => 'select',
			'options'				  => array('','hunde','katzen','kleintiere'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals'],
			'eval'                    => array('mandatory'=>true, 'submitOnChange'=>true)
		),
		'eintrag' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['eintrag'],
			'exclude'                 => true,
			'inputType'               => 'radio',
			'options'				  => array('1','2'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['eintrag'],
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'art' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['art'],
			'exclude'                 => true,
			'filter'				  => true,
			'inputType'               => 'radio',
			'options'				  => array('vermisst','zugelaufen'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals'],
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'datum' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['datum'],
			'default'                 => date('Ymd'),
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 6,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'date', 'datepicker'=>true)
		),
		'bundesland' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['bundesland'],
			'exclude'                 => true,
			'filter'				  => true,
			'inputType'               => 'select',
			'options'				  => array('','bgl','ktn','noe','ooe','slzb','stmk','tir','vlbg','w'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['bundesland'],
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128, 'submitOnChange'=>true)
		),
		'bezirk' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['bezirk'],
			'exclude'                 => true,
			'search'                  => true,
			'filter'				  => true,
			'inputType'               => 'select',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['bezirk'],
			'options_callback'	  	  => array('tl_tsz_lostandfoundanimals','getbezirk')
		),
		'plz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['plz'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128)
		),
		'ort' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['ort'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128)
		),
		'name_tier' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['name_tier'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'rasse' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['rasse'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['rasse'],
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255),
			'options_callback'	  	  => array('tl_tsz_lostandfoundanimals','getrasse')
		),
		'geschlecht' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['geschlecht'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'				  => array('','maennlich','weiblich','nichtbekannt'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['geschlecht'],
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'groesse' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['groesse'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'				  => array('','groesser30','kleiner30'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['groesse'],
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'fell_haarlaenge' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['fell_haarlaenge'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'				  => array('','kurz','halb_lang'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['fell_haarlaenge'],
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'fellmusterung' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['fellmusterung'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'				  => array('','einfarbig_keine','gefleckt','gestromt','getigert'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['fellmusterung'],
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'farbe_tier' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['farbe_tier'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'ungefaehre_altersgruppe' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['ungefaehre_altersgruppe'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'				  => array('','jung','erwachsen','alt'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['ungefaehre_altersgruppe'],
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'besondere_hinweise' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['besondere_hinweise'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('rte'=>'tinyMCE')
		),
		'hundemarke' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['hundemarke'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'				  => array('','ja','nein'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['hundemarke'],
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'nummer_hundemarke' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['nummer_hundemarke'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'chipnummer' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['chipnummer'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'bild' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['bild'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'mandatory'=>true)
		),
		'vorname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['vorname'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128)
		),
		'nachname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['nachname'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>128)
		),
		'telefonnummer' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['telefonnummer'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'mail' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['mail'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'kontakt_strasse' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['kontakt_strasse'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'kontakt_ort' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['ort'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
		),
		'kontakt_plz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['plz'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'anzeigenid' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['anzeigenid'],
			'exclude'                 => false,
			'inputType'               => 'text',
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>128)
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_lostandfoundanimals']['published'],
			'exclude'                 => true,
			'flag'                    => 1,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true)
		)
	)
);

class tl_tsz_lostandfoundanimals extends Backend
{
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}
	
	public function getbezirk(DataContainer $dc)
	{
		$arrRet = array();
		if ($dc->activeRecord->bundesland == 'ktn')
			$arrRet = array('','fe','he','k','sv','sp','vi','vk','wo');
		else if ($dc->activeRecord->bundesland == 'stmk')
			$arrRet = array('','bm','dl','g','hf','lb','le','li','mu','mt','so','vo','wz');
		else if ($dc->activeRecord->bundesland == 'bgl')
			$arrRet = array('','e','gs','je','ma','nd','op','ow','ru');
		else if ($dc->activeRecord->bundesland == 'noe')
			$arrRet = array('','am','bn','bl','gf','gd','hl','ho','ko','ks','lf','me','mi','md','nk','p','pl','sb','tu','wt','wy','wu','wn','zt');
		else if ($dc->activeRecord->bundesland == 'ooe')
			$arrRet = array('','br','ef','fr','gm','gr','ki','l','pe','ri','ro','sd','sr','uu','vb','we');
		else if ($dc->activeRecord->bundesland == 'slzb')
			$arrRet = array('','ha','s','jo','ta','ze');
		else if ($dc->activeRecord->bundesland == 'tir')
			$arrRet = array('','im','i','kb','ku','la','lz','re','sz');
		else if ($dc->activeRecord->bundesland == 'vlbg')
			$arrRet = array('','bz','b','do','fk');
		else if ($dc->activeRecord->bundesland == 'w')
			$arrRet = array('','w');
		return $arrRet;
	}
	
	public function getrasse(DataContainer $dc)
	{
		$arrRet = array();
		if ($dc->activeRecord->kategorie == 'hunde')
			$arrRet = array('','affenpinscher','afghanischer_windhund','aidi','ainu_hund','airedale_terrier','akbash','akita_inu','alaskan_malamute','alpenlaendische_dachsbracke','altdaenischer_vorstehhund','american_und_english_foxhound','american_staffordshire_terrier','amerikanischer_cockerspaniel','appenzeller_sennenhund','australian_shepherd','barsoi','basenji','basset_hound','beagle','bearded_collie','belgischer_schaeferhund','berner_sennenhund','bernhardiner',
'bichon','bloodhound_und_coonhound','bobtail','border_collie','border_terrier','boston_terrier','bouvier_des_flandres','boxer','briard','bruesseler_griffon','bullmastiff',
'bullterrier','cairn_terrier','cavalier_king_charles_spaniel','chart_polski','chihuahua','chinesischer_schopfhund','chow_chow','clumber_spaniel_und_field_spaniel',
'cockerspaniel','curly_coated_retriever','dachshund_dackel','dalmatiner','deerhound','deutsch_drahthaar','deutsche_dogge','deutscher_boxer','deutscher_schaeferhund',
'deutscher_wachtelhund','deutsch_kurzhaar','do_khyi','dobermann','drahthaar_foxterrier','elchhund','englische_bulldogge','english_setter','english_toy_terrier',
'entlebucher_sennenhund','flatcoated_retriever','französische_bulldogge','galgo_espanol','glatthaar_foxterrier','golden_retriever','gordon_setter',
'großer_schweizer_sennenhund','harrier','irischer_wolfshund','irish_red_and_white_setter','irish_setter','italienisches_windspiel','japan_chin',
'japanischer_spitz','king_charles_spaniel','komondor_und_puli','kurzhaarcollie','labrador_retriever','langhaarcollie','lhasa_apso','loewchen','magyar_agar',
'magyar_vizsla','malteser','mastiff','mittelschnauzer','molosser','mops','norsk_buhund','otterhund','papillon','pekinese','pharaoh_hound','podenco_ibicenco',
'pointer','pudel','riesenschnauzer','rhodesian_ridgeback','rottweiler','saluki','samojede','schwedischer_schaeferspitz','schweizer_sennenhund',
'scottish_terrier','shar_pei','sheltie','shih_tzu','shipperke','siberian_husky','sloughi','spinone_italiano','staffordshire_bullterrier','sussex_spaniel',
'tibet_dogge','tibet_mastiff','tibet_spaniel','tibet_terrier','weimaraner','weisser_schaeferhund','welsh_corgie_cardigan','welsh_corgie_pembroke',
'welsh_terrier','west_highland_white_terrier','whippet','windhund','wolfsspitz','yorkshire_terrier','zwergpinscher','zwergschnauzer','zwergspitz'

);
		else if ($dc->activeRecord->kategorie == 'katzen')
			$arrRet = array('','nicht_bekannt','abessinier','balinesen','bengalen','birma','british_kurzhaar','burma','chinchilla','exotisch_kurzhaar','hauskatze','havanna','kartaeuser','korat','maine_coon','norwegische_waldkatze','perser','russisch_blau','siamkatze','somali','türkisch_van');
		else if ($dc->activeRecord->kategorie == 'kleintiere')
			$arrRet = array('','chinchilla','degu','echse','frettchen','hamster','hase','hörnchen','maus','meerschweinchen','ratte','schildkroete','schlange','vogel','zwergkaninchen','sonstiges');
		return $arrRet;
	}
	
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		
		if (strlen($this->Input->get('tid')))
		{
			$this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') != 1));
			$this->redirect($this->getReferer());
		}

		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_tsz_lostandfoundanimals::disable', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;tid='.$row['id'].'&amp;state='.$row['disable'];

		if (!$row['published'])
		{
			$icon = 'invisible.gif';
		}			

		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}


	/**
	 * Disable/enable a user group
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($intId, $blnVisible)
	{
		// Check permissions
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_tsz_lostandfoundanimals::disable', 'alexf'))
		{
			$this->log('Not enough permissions to activate/deactivate anzeigen ID "'.$intId.'"', 'tl_tsz_lostandfoundanimals toggleVisibility', TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}

		$this->createInitialVersion('tl_tsz_lostandfoundanimals', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_tsz_lostandfoundanimals']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_tsz_lostandfoundanimals']['fields']['published']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		$time = time();

		// Update the database
		$this->Database->prepare("UPDATE tl_tsz_lostandfoundanimals SET tstamp=$time, published='" . ($blnVisible ? '' : 1) . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_veranstaltung', $intId);

		// HOOK: update newsletter subscriptions
		
	}
	
	
	
}

?>