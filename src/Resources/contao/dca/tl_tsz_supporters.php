<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');



/**
 * Table tl_tsz_supporters
 */
$GLOBALS['TL_DCA']['tl_tsz_supporters'] = array
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
			'fields'                  => array('nachname ASC'),
			'panelLayout'             => 'filter;sort,search,limit',

		),
		'label' => array
		(
			'fields'                  => array('vorname','nachname','ort','plz'),
			'showColumns'             => true
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
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
			
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('art','werbung'),
		'default'                     => '{title_legend},art',
		'privatperson'				  => '{title_legend},art,vorname,nachname,plz,ort,email;{region_legend},reg_bundesland,reg_bezirk,reg_plz;{published_legend},published',
		'tierarztpraxis'			  => '{title_legend},art,name,vorname,nachname,plz,ort,email;{region_legend},reg_bundesland,reg_bezirk,reg_plz;{werbung_legend},werbung;{published_legend},published',
		'tierheim'			  => '{title_legend},art,name,vorname,nachname,plz,ort,email;{region_legend},reg_bundesland,reg_bezirk,reg_plz;{werbung_legend},werbung;{published_legend},published',
		'sonstigTierschutz'			  => '{title_legend},art,name,vorname,nachname,plz,ort,email;{region_legend},reg_bundesland,reg_bezirk,reg_plz;{werbung_legend},werbung;{published_legend},published',
		
	),
	'subpalettes' => array
	(
		'werbung' => 'logo'
	),
	

	// Fields
	'fields' => array
	(
		'art' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['art'],
			'exclude'                 => true,
			'sorting'                 => true,
			'filter'				  => true,
			'inputType'               => 'select',
			'options'				  => array('','privatperson','tierarztpraxis','tierheim','sonstigTierschutz'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_supporters'],
			'eval'                    => array('mandatory'=>true, 'submitOnChange'=>true)
		),
		'name' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['name'],
			'exclude'                 => true,
			'filter'                  => false,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255)
		),
		'vorname' => array
		(
			'label'					  => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['vorname'],
			'exclude'				  => true,
			'filter'				  => true,
			'inputType'				  => 'text',
			'eval'					  >= array('mandatory'=>true,'maxlength'=>255)
		),
		'nachname' => array
		(
			'label'					  => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['nachname'],
			'exclude'				  => true,
			'filter'				  => true,
			'sorting'                 => true,
			'inputType'				  => 'text',
			'eval'					  >= array('mandatory'=>true,'maxlength'=>255)
		),
		'plz' => array
		(
			'label'					  => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['plz'],
			'exclude'				  => true,
			'filter'				  => true,
			'inputType'				  => 'text',
			'eval'					  >= array('mandatory'=>true,'maxlength'=>16)
		),
		'ort' => array
		(
			'label'					  => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['ort'],
			'exclude'				  => true,
			'filter'				  => true,
			'inputType'				  => 'text',
			'eval'					  >= array('mandatory'=>true,'maxlength'=>512)
		),
		'email' => array
		(
			'label'					  => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['email'],
			'exclude'				  => true,
			'filter'				  => true,
			'inputType'				  => 'text',
			'eval'					  >= array('mandatory'=>true,'maxlength'=>255)
		),
		'reg_bundesland' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['reg_bundesland'],
			'exclude'                 => true,
			'sorting'                 => true,
			'filter'				  => true,
			'inputType'               => 'select',
			'options'				  => array('','bgl','ktn','noe','ooe','slzb','stmk','tir','vlbg','w'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['reg_bundesland'],
			'eval'                    => array('submitOnChange'=>true)
		),
		'reg_bezirk' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['reg_bezirk'],
			'exclude'                 => true,
			'search'                  => true,
			'filter'				  => true,
			'sorting'                 => true,
			'inputType'               => 'select',
			'reference'               => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['reg_bezirk'],
			'options_callback'	  	  => array('tl_tsz_supporters','getbezirk')
		),
		'reg_plz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['reg_plz'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>16)
		),
		'werbung' => array
		(
			'label'					  => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['werbung'],
			'exclude'				  => true,
			'filter'				  => false,
			'inputType'				  => 'checkbox',
			'eval'					  => array('submitOnChange'=>true)
		),
		'logo' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['logo'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'mandatory'=>true)
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_tsz_supporters']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'flag'                    => 1,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true)
		)
	)
);

class tl_tsz_supporters extends Backend
{
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}
	
	public function getbezirk(DataContainer $dc)
	{
		$arrRet = array();
		if ($dc->activeRecord->reg_bundesland == 'ktn')
			$arrRet = array('','fe','he','k','sv','sp','vi','vk','wo');
		else if ($dc->activeRecord->reg_bundesland == 'stmk')
			$arrRet = array('','bm','dl','g','hf','lb','le','li','mu','mt','so','vo','wz');
		else if ($dc->activeRecord->reg_bundesland == 'bgl')
			$arrRet = array('','e','gs','je','ma','nd','op','ow','ru');
		else if ($dc->activeRecord->reg_bundesland == 'noe')
			$arrRet = array('','am','bn','bl','gf','gd','hl','ho','ko','ks','lf','me','mi','md','nk','p','pl','sb','tu','wt','wy','wu','wn','zt');
		else if ($dc->activeRecord->reg_bundesland == 'ooe')
			$arrRet = array('','br','ef','fr','gm','gr','ki','l','pe','ri','ro','sd','sr','uu','vb','we');
		else if ($dc->activeRecord->reg_bundesland == 'slzb')
			$arrRet = array('','ha','s','jo','ta','ze');
		else if ($dc->activeRecord->reg_bundesland == 'tir')
			$arrRet = array('','im','i','kb','ku','la','lz','re','sz');
		else if ($dc->activeRecord->reg_bundesland == 'vlbg')
			$arrRet = array('','bz','b','do','fk');
		else if ($dc->activeRecord->reg_bundesland == 'w')
			$arrRet = array('','w');
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
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_tsz_supporters::disable', 'alexf'))
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
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_tsz_supporters::disable', 'alexf'))
		{
			$this->log('Not enough permissions to activate/deactivate helfer ID "'.$intId.'"', 'tl_tsz_supporters toggleVisibility', TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}

		$this->createInitialVersion('tl_tsz_supporters', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_tsz_supporters']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_tsz_supporters']['fields']['published']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		$time = time();

		// Update the database
		$this->Database->prepare("UPDATE tl_tsz_supporters SET tstamp=$time, published='" . ($blnVisible ? '' : 1) . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_veranstaltung', $intId);

		// HOOK: update newsletter subscriptions
		
	}
	
	
	
}

?>