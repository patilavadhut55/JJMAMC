<?php
	/**
	 * The abstract MenuGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Menu subclass which
	 * extends this MenuGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Menu class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idmenu the value for intIdmenu (Read-Only PK)
	 * @property integer $Position the value for intPosition (Not Null)
	 * @property string $Code the value for strCode (Unique)
	 * @property string $Name the value for strName (Not Null)
	 * @property string $SubName the value for strSubName 
	 * @property string $Icon the value for strIcon (Not Null)
	 * @property string $Link the value for strLink (Not Null)
	 * @property string $LinkOption the value for strLinkOption 
	 * @property integer $Parrent the value for intParrent 
	 * @property integer $Level the value for intLevel (Not Null)
	 * @property MenuPosition $PositionObject the value for the MenuPosition object referenced by intPosition (Not Null)
	 * @property Menu $ParrentObject the value for the Menu object referenced by intParrent 
	 * @property-read Menu $_MenuAsParrent the value for the private _objMenuAsParrent (Read-Only) if set due to an expansion on the menu.parrent reverse relationship
	 * @property-read Menu[] $_MenuAsParrentArray the value for the private _objMenuAsParrentArray (Read-Only) if set due to an ExpandAsArray on the menu.parrent reverse relationship
	 * @property-read RoleHasMenu $_RoleHasMenuAsId the value for the private _objRoleHasMenuAsId (Read-Only) if set due to an expansion on the role_has_menu.menu_idmenu reverse relationship
	 * @property-read RoleHasMenu[] $_RoleHasMenuAsIdArray the value for the private _objRoleHasMenuAsIdArray (Read-Only) if set due to an ExpandAsArray on the role_has_menu.menu_idmenu reverse relationship
	 * @property-read RoleHasMenu $_RoleHasMenuAsParrent the value for the private _objRoleHasMenuAsParrent (Read-Only) if set due to an expansion on the role_has_menu.parrent reverse relationship
	 * @property-read RoleHasMenu[] $_RoleHasMenuAsParrentArray the value for the private _objRoleHasMenuAsParrentArray (Read-Only) if set due to an ExpandAsArray on the role_has_menu.parrent reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MenuGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column menu.idmenu
		 * @var integer intIdmenu
		 */
		protected $intIdmenu;
		const IdmenuDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.position
		 * @var integer intPosition
		 */
		protected $intPosition;
		const PositionDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.sub_name
		 * @var string strSubName
		 */
		protected $strSubName;
		const SubNameDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.icon
		 * @var string strIcon
		 */
		protected $strIcon;
		const IconMaxLength = 45;
		const IconDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.link
		 * @var string strLink
		 */
		protected $strLink;
		const LinkDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.link_option
		 * @var string strLinkOption
		 */
		protected $strLinkOption;
		const LinkOptionMaxLength = 45;
		const LinkOptionDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Protected member variable that maps to the database column menu.level
		 * @var integer intLevel
		 */
		protected $intLevel;
		const LevelDefault = null;


		/**
		 * Private member variable that stores a reference to a single MenuAsParrent object
		 * (of type Menu), if this Menu object was restored with
		 * an expansion on the menu association table.
		 * @var Menu _objMenuAsParrent;
		 */
		private $_objMenuAsParrent;

		/**
		 * Private member variable that stores a reference to an array of MenuAsParrent objects
		 * (of type Menu[]), if this Menu object was restored with
		 * an ExpandAsArray on the menu association table.
		 * @var Menu[] _objMenuAsParrentArray;
		 */
		private $_objMenuAsParrentArray = null;

		/**
		 * Private member variable that stores a reference to a single RoleHasMenuAsId object
		 * (of type RoleHasMenu), if this Menu object was restored with
		 * an expansion on the role_has_menu association table.
		 * @var RoleHasMenu _objRoleHasMenuAsId;
		 */
		private $_objRoleHasMenuAsId;

		/**
		 * Private member variable that stores a reference to an array of RoleHasMenuAsId objects
		 * (of type RoleHasMenu[]), if this Menu object was restored with
		 * an ExpandAsArray on the role_has_menu association table.
		 * @var RoleHasMenu[] _objRoleHasMenuAsIdArray;
		 */
		private $_objRoleHasMenuAsIdArray = null;

		/**
		 * Private member variable that stores a reference to a single RoleHasMenuAsParrent object
		 * (of type RoleHasMenu), if this Menu object was restored with
		 * an expansion on the role_has_menu association table.
		 * @var RoleHasMenu _objRoleHasMenuAsParrent;
		 */
		private $_objRoleHasMenuAsParrent;

		/**
		 * Private member variable that stores a reference to an array of RoleHasMenuAsParrent objects
		 * (of type RoleHasMenu[]), if this Menu object was restored with
		 * an ExpandAsArray on the role_has_menu association table.
		 * @var RoleHasMenu[] _objRoleHasMenuAsParrentArray;
		 */
		private $_objRoleHasMenuAsParrentArray = null;

		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column menu.position.
		 *
		 * NOTE: Always use the PositionObject property getter to correctly retrieve this MenuPosition object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var MenuPosition objPositionObject
		 */
		protected $objPositionObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column menu.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this Menu object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Menu objParrentObject
		 */
		protected $objParrentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdmenu = Menu::IdmenuDefault;
			$this->intPosition = Menu::PositionDefault;
			$this->strCode = Menu::CodeDefault;
			$this->strName = Menu::NameDefault;
			$this->strSubName = Menu::SubNameDefault;
			$this->strIcon = Menu::IconDefault;
			$this->strLink = Menu::LinkDefault;
			$this->strLinkOption = Menu::LinkOptionDefault;
			$this->intParrent = Menu::ParrentDefault;
			$this->intLevel = Menu::LevelDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a Menu from PK Info
		 * @param integer $intIdmenu
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu
		 */
		public static function Load($intIdmenu, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Menu', $intIdmenu);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Menu::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Menu()->Idmenu, $intIdmenu)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Menus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Menu::QueryArray to perform the LoadAll query
			try {
				return Menu::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Menus
		 * @return int
		 */
		public static function CountAll() {
			// Call Menu::QueryCount to perform the CountAll query
			return Menu::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Create/Build out the QueryBuilder object with Menu-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'menu');

			$blnAddAllFieldsToSelect = true;
			if ($objDatabase->OnlyFullGroupBy) {
				// see if we have any group by or aggregation clauses, if yes, don't add the fields to select clause
				if ($objOptionalClauses instanceof QQClause) {
					if ($objOptionalClauses instanceof QQAggregationClause || $objOptionalClauses instanceof QQGroupBy) {
						$blnAddAllFieldsToSelect = false;
					}
				} else if (is_array($objOptionalClauses)) {
					foreach ($objOptionalClauses as $objClause) {
						if ($objClause instanceof QQAggregationClause || $objClause instanceof QQGroupBy) {
							$blnAddAllFieldsToSelect = false;
							break;
						}
					}
				}
			}
			if ($blnAddAllFieldsToSelect) {
				Menu::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('menu');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single Menu object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Menu the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Menu object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Menu::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return Menu::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Menu objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Menu[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Menu::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcubed Query method to query for a count of Menu objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			$strQuery = Menu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/menu', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Menu::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Menu
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'menu';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idmenu', $strAliasPrefix . 'idmenu');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idmenu', $strAliasPrefix . 'idmenu');
			    $objBuilder->AddSelectItem($strTableName, 'position', $strAliasPrefix . 'position');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'sub_name', $strAliasPrefix . 'sub_name');
			    $objBuilder->AddSelectItem($strTableName, 'icon', $strAliasPrefix . 'icon');
			    $objBuilder->AddSelectItem($strTableName, 'link', $strAliasPrefix . 'link');
			    $objBuilder->AddSelectItem($strTableName, 'link_option', $strAliasPrefix . 'link_option');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
			    $objBuilder->AddSelectItem($strTableName, 'level', $strAliasPrefix . 'level');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Menu from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Menu::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Menu
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idmenu';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdmenu == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'menu__';


						// Expanding reverse references: MenuAsParrent
						$strAlias = $strAliasPrefix . 'menuasparrent__idmenu';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMenuAsParrentArray)
								$objPreviousItem->_objMenuAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMenuAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMenuAsParrentArray;
								$objChildItem = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMenuAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMenuAsParrentArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RoleHasMenuAsId
						$strAlias = $strAliasPrefix . 'rolehasmenuasid__role_idrole';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRoleHasMenuAsIdArray)
								$objPreviousItem->_objRoleHasMenuAsIdArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRoleHasMenuAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRoleHasMenuAsIdArray;
								$objChildItem = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRoleHasMenuAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRoleHasMenuAsIdArray[] = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RoleHasMenuAsParrent
						$strAlias = $strAliasPrefix . 'rolehasmenuasparrent__role_idrole';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRoleHasMenuAsParrentArray)
								$objPreviousItem->_objRoleHasMenuAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRoleHasMenuAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRoleHasMenuAsParrentArray;
								$objChildItem = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRoleHasMenuAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRoleHasMenuAsParrentArray[] = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'menu__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Menu object
			$objToReturn = new Menu();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idmenu';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdmenu = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'position';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPosition = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'sub_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSubName = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'icon';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strIcon = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'link';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLink = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'link_option';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkOption = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'level';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLevel = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idmenu != $objPreviousItem->Idmenu) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objMenuAsParrentArray);
					$cnt = count($objToReturn->_objMenuAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMenuAsParrentArray, $objToReturn->_objMenuAsParrentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRoleHasMenuAsIdArray);
					$cnt = count($objToReturn->_objRoleHasMenuAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRoleHasMenuAsIdArray, $objToReturn->_objRoleHasMenuAsIdArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRoleHasMenuAsParrentArray);
					$cnt = count($objToReturn->_objRoleHasMenuAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRoleHasMenuAsParrentArray, $objToReturn->_objRoleHasMenuAsParrentArray)) {
						continue;
					}


					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			$strVirtualPrefix = $strAliasPrefix . '__';
			$strVirtualPrefixLength = strlen($strVirtualPrefix);
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				if (strncmp($strColumnName, $strVirtualPrefix, $strVirtualPrefixLength) == 0)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'menu__';

			// Check for PositionObject Early Binding
			$strAlias = $strAliasPrefix . 'position__idmenu_position';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPositionObject = MenuPosition::InstantiateDbRow($objDbRow, $strAliasPrefix . 'position__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idmenu';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for MenuAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'menuasparrent__idmenu';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMenuAsParrentArray)
				$objToReturn->_objMenuAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMenuAsParrentArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMenuAsParrent = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RoleHasMenuAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'rolehasmenuasid__role_idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRoleHasMenuAsIdArray)
				$objToReturn->_objRoleHasMenuAsIdArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRoleHasMenuAsIdArray[] = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRoleHasMenuAsId = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RoleHasMenuAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'rolehasmenuasparrent__role_idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRoleHasMenuAsParrentArray)
				$objToReturn->_objRoleHasMenuAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRoleHasMenuAsParrentArray[] = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRoleHasMenuAsParrent = RoleHasMenu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rolehasmenuasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Menus from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Menu[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Menu::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Menu::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Menu object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Menu next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return Menu::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Menu object,
		 * by Idmenu Index(es)
		 * @param integer $intIdmenu
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu
		*/
		public static function LoadByIdmenu($intIdmenu, $objOptionalClauses = null) {
			return Menu::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Menu()->Idmenu, $intIdmenu)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Menu object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return Menu::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Menu()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Menu objects,
		 * by Position Index(es)
		 * @param integer $intPosition
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		*/
		public static function LoadArrayByPosition($intPosition, $objOptionalClauses = null) {
			// Call Menu::QueryArray to perform the LoadArrayByPosition query
			try {
				return Menu::QueryArray(
					QQ::Equal(QQN::Menu()->Position, $intPosition),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Menus
		 * by Position Index(es)
		 * @param integer $intPosition
		 * @return int
		*/
		public static function CountByPosition($intPosition) {
			// Call Menu::QueryCount to perform the CountByPosition query
			return Menu::QueryCount(
				QQ::Equal(QQN::Menu()->Position, $intPosition)
			);
		}

		/**
		 * Load an array of Menu objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call Menu::QueryArray to perform the LoadArrayByParrent query
			try {
				return Menu::QueryArray(
					QQ::Equal(QQN::Menu()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Menus
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call Menu::QueryCount to perform the CountByParrent query
			return Menu::QueryCount(
				QQ::Equal(QQN::Menu()->Parrent, $intParrent)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Menu
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `menu` (
							`position`,
							`code`,
							`name`,
							`sub_name`,
							`icon`,
							`link`,
							`link_option`,
							`parrent`,
							`level`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intPosition) . ',
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strSubName) . ',
							' . $objDatabase->SqlVariable($this->strIcon) . ',
							' . $objDatabase->SqlVariable($this->strLink) . ',
							' . $objDatabase->SqlVariable($this->strLinkOption) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . ',
							' . $objDatabase->SqlVariable($this->intLevel) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdmenu = $objDatabase->InsertId('menu', 'idmenu');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`menu`
						SET
							`position` = ' . $objDatabase->SqlVariable($this->intPosition) . ',
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`sub_name` = ' . $objDatabase->SqlVariable($this->strSubName) . ',
							`icon` = ' . $objDatabase->SqlVariable($this->strIcon) . ',
							`link` = ' . $objDatabase->SqlVariable($this->strLink) . ',
							`link_option` = ' . $objDatabase->SqlVariable($this->strLinkOption) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . ',
							`level` = ' . $objDatabase->SqlVariable($this->intLevel) . '
						WHERE
							`idmenu` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this Menu
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Menu with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`
				WHERE
					`idmenu` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Menu ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Menu', $this->intIdmenu);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Menus
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate menu table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `menu`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Menu from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Menu object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Menu::Load($this->intIdmenu);

			// Update $this's local variables to match
			$this->Position = $objReloaded->Position;
			$this->strCode = $objReloaded->strCode;
			$this->strName = $objReloaded->strName;
			$this->strSubName = $objReloaded->strSubName;
			$this->strIcon = $objReloaded->strIcon;
			$this->strLink = $objReloaded->strLink;
			$this->strLinkOption = $objReloaded->strLinkOption;
			$this->Parrent = $objReloaded->Parrent;
			$this->intLevel = $objReloaded->intLevel;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Idmenu':
					/**
					 * Gets the value for intIdmenu (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdmenu;

				case 'Position':
					/**
					 * Gets the value for intPosition (Not Null)
					 * @return integer
					 */
					return $this->intPosition;

				case 'Code':
					/**
					 * Gets the value for strCode (Unique)
					 * @return string
					 */
					return $this->strCode;

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
					 * @return string
					 */
					return $this->strName;

				case 'SubName':
					/**
					 * Gets the value for strSubName 
					 * @return string
					 */
					return $this->strSubName;

				case 'Icon':
					/**
					 * Gets the value for strIcon (Not Null)
					 * @return string
					 */
					return $this->strIcon;

				case 'Link':
					/**
					 * Gets the value for strLink (Not Null)
					 * @return string
					 */
					return $this->strLink;

				case 'LinkOption':
					/**
					 * Gets the value for strLinkOption 
					 * @return string
					 */
					return $this->strLinkOption;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;

				case 'Level':
					/**
					 * Gets the value for intLevel (Not Null)
					 * @return integer
					 */
					return $this->intLevel;


				///////////////////
				// Member Objects
				///////////////////
				case 'PositionObject':
					/**
					 * Gets the value for the MenuPosition object referenced by intPosition (Not Null)
					 * @return MenuPosition
					 */
					try {
						if ((!$this->objPositionObject) && (!is_null($this->intPosition)))
							$this->objPositionObject = MenuPosition::Load($this->intPosition);
						return $this->objPositionObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ParrentObject':
					/**
					 * Gets the value for the Menu object referenced by intParrent 
					 * @return Menu
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = Menu::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_MenuAsParrent':
					/**
					 * Gets the value for the private _objMenuAsParrent (Read-Only)
					 * if set due to an expansion on the menu.parrent reverse relationship
					 * @return Menu
					 */
					return $this->_objMenuAsParrent;

				case '_MenuAsParrentArray':
					/**
					 * Gets the value for the private _objMenuAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the menu.parrent reverse relationship
					 * @return Menu[]
					 */
					return $this->_objMenuAsParrentArray;

				case '_RoleHasMenuAsId':
					/**
					 * Gets the value for the private _objRoleHasMenuAsId (Read-Only)
					 * if set due to an expansion on the role_has_menu.menu_idmenu reverse relationship
					 * @return RoleHasMenu
					 */
					return $this->_objRoleHasMenuAsId;

				case '_RoleHasMenuAsIdArray':
					/**
					 * Gets the value for the private _objRoleHasMenuAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the role_has_menu.menu_idmenu reverse relationship
					 * @return RoleHasMenu[]
					 */
					return $this->_objRoleHasMenuAsIdArray;

				case '_RoleHasMenuAsParrent':
					/**
					 * Gets the value for the private _objRoleHasMenuAsParrent (Read-Only)
					 * if set due to an expansion on the role_has_menu.parrent reverse relationship
					 * @return RoleHasMenu
					 */
					return $this->_objRoleHasMenuAsParrent;

				case '_RoleHasMenuAsParrentArray':
					/**
					 * Gets the value for the private _objRoleHasMenuAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the role_has_menu.parrent reverse relationship
					 * @return RoleHasMenu[]
					 */
					return $this->_objRoleHasMenuAsParrentArray;


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'Position':
					/**
					 * Sets the value for intPosition (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPositionObject = null;
						return ($this->intPosition = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Code':
					/**
					 * Sets the value for strCode (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name':
					/**
					 * Sets the value for strName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SubName':
					/**
					 * Sets the value for strSubName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSubName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Icon':
					/**
					 * Sets the value for strIcon (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIcon = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Link':
					/**
					 * Sets the value for strLink (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLink = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkOption':
					/**
					 * Sets the value for strLinkOption 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkOption = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Parrent':
					/**
					 * Sets the value for intParrent 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objParrentObject = null;
						return ($this->intParrent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Level':
					/**
					 * Sets the value for intLevel (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intLevel = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'PositionObject':
					/**
					 * Sets the value for the MenuPosition object referenced by intPosition (Not Null)
					 * @param MenuPosition $mixValue
					 * @return MenuPosition
					 */
					if (is_null($mixValue)) {
						$this->intPosition = null;
						$this->objPositionObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a MenuPosition object
						try {
							$mixValue = QType::Cast($mixValue, 'MenuPosition');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED MenuPosition object
						if (is_null($mixValue->IdmenuPosition))
							throw new QCallerException('Unable to set an unsaved PositionObject for this Menu');

						// Update Local Member Variables
						$this->objPositionObject = $mixValue;
						$this->intPosition = $mixValue->IdmenuPosition;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ParrentObject':
					/**
					 * Sets the value for the Menu object referenced by intParrent 
					 * @param Menu $mixValue
					 * @return Menu
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Menu object
						try {
							$mixValue = QType::Cast($mixValue, 'Menu');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Menu object
						if (is_null($mixValue->Idmenu))
							throw new QCallerException('Unable to set an unsaved ParrentObject for this Menu');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->Idmenu;

						// Return $mixValue
						return $mixValue;
					}
					break;

				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////



		// Related Objects' Methods for MenuAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MenusAsParrent as an array of Menu objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		*/
		public function GetMenuAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdmenu)))
				return array();

			try {
				return Menu::LoadArrayByParrent($this->intIdmenu, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MenusAsParrent
		 * @return int
		*/
		public function CountMenusAsParrent() {
			if ((is_null($this->intIdmenu)))
				return 0;

			return Menu::CountByParrent($this->intIdmenu);
		}

		/**
		 * Associates a MenuAsParrent
		 * @param Menu $objMenu
		 * @return void
		*/
		public function AssociateMenuAsParrent(Menu $objMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuAsParrent on this unsaved Menu.');
			if ((is_null($objMenu->Idmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuAsParrent on this Menu with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
				WHERE
					`idmenu` = ' . $objDatabase->SqlVariable($objMenu->Idmenu) . '
			');
		}

		/**
		 * Unassociates a MenuAsParrent
		 * @param Menu $objMenu
		 * @return void
		*/
		public function UnassociateMenuAsParrent(Menu $objMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParrent on this unsaved Menu.');
			if ((is_null($objMenu->Idmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParrent on this Menu with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`parrent` = null
				WHERE
					`idmenu` = ' . $objDatabase->SqlVariable($objMenu->Idmenu) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Unassociates all MenusAsParrent
		 * @return void
		*/
		public function UnassociateAllMenusAsParrent() {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParrent on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Deletes an associated MenuAsParrent
		 * @param Menu $objMenu
		 * @return void
		*/
		public function DeleteAssociatedMenuAsParrent(Menu $objMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParrent on this unsaved Menu.');
			if ((is_null($objMenu->Idmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParrent on this Menu with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`
				WHERE
					`idmenu` = ' . $objDatabase->SqlVariable($objMenu->Idmenu) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Deletes all associated MenusAsParrent
		 * @return void
		*/
		public function DeleteAllMenusAsParrent() {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsParrent on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}


		// Related Objects' Methods for RoleHasMenuAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RoleHasMenusAsId as an array of RoleHasMenu objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu[]
		*/
		public function GetRoleHasMenuAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdmenu)))
				return array();

			try {
				return RoleHasMenu::LoadArrayByMenuIdmenu($this->intIdmenu, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RoleHasMenusAsId
		 * @return int
		*/
		public function CountRoleHasMenusAsId() {
			if ((is_null($this->intIdmenu)))
				return 0;

			return RoleHasMenu::CountByMenuIdmenu($this->intIdmenu);
		}

		/**
		 * Associates a RoleHasMenuAsId
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function AssociateRoleHasMenuAsId(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoleHasMenuAsId on this unsaved Menu.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoleHasMenuAsId on this Menu with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`menu_idmenu` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . '
			');
		}

		/**
		 * Unassociates a RoleHasMenuAsId
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function UnassociateRoleHasMenuAsId(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this unsaved Menu.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this Menu with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`menu_idmenu` = null
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Unassociates all RoleHasMenusAsId
		 * @return void
		*/
		public function UnassociateAllRoleHasMenusAsId() {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`menu_idmenu` = null
				WHERE
					`menu_idmenu` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Deletes an associated RoleHasMenuAsId
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function DeleteAssociatedRoleHasMenuAsId(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this unsaved Menu.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this Menu with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role_has_menu`
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Deletes all associated RoleHasMenusAsId
		 * @return void
		*/
		public function DeleteAllRoleHasMenusAsId() {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsId on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role_has_menu`
				WHERE
					`menu_idmenu` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}


		// Related Objects' Methods for RoleHasMenuAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RoleHasMenusAsParrent as an array of RoleHasMenu objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu[]
		*/
		public function GetRoleHasMenuAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdmenu)))
				return array();

			try {
				return RoleHasMenu::LoadArrayByParrent($this->intIdmenu, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RoleHasMenusAsParrent
		 * @return int
		*/
		public function CountRoleHasMenusAsParrent() {
			if ((is_null($this->intIdmenu)))
				return 0;

			return RoleHasMenu::CountByParrent($this->intIdmenu);
		}

		/**
		 * Associates a RoleHasMenuAsParrent
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function AssociateRoleHasMenuAsParrent(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoleHasMenuAsParrent on this unsaved Menu.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRoleHasMenuAsParrent on this Menu with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . '
			');
		}

		/**
		 * Unassociates a RoleHasMenuAsParrent
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function UnassociateRoleHasMenuAsParrent(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsParrent on this unsaved Menu.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsParrent on this Menu with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`parrent` = null
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Unassociates all RoleHasMenusAsParrent
		 * @return void
		*/
		public function UnassociateAllRoleHasMenusAsParrent() {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsParrent on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`role_has_menu`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Deletes an associated RoleHasMenuAsParrent
		 * @param RoleHasMenu $objRoleHasMenu
		 * @return void
		*/
		public function DeleteAssociatedRoleHasMenuAsParrent(RoleHasMenu $objRoleHasMenu) {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsParrent on this unsaved Menu.');
			if ((is_null($objRoleHasMenu->RoleIdrole)) || (is_null($objRoleHasMenu->MenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsParrent on this Menu with an unsaved RoleHasMenu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role_has_menu`
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($objRoleHasMenu->RoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($objRoleHasMenu->MenuIdmenu) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}

		/**
		 * Deletes all associated RoleHasMenusAsParrent
		 * @return void
		*/
		public function DeleteAllRoleHasMenusAsParrent() {
			if ((is_null($this->intIdmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRoleHasMenuAsParrent on this unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = Menu::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role_has_menu`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdmenu) . '
			');
		}


		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "menu";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Menu::GetDatabaseIndex()]->Database;
		}

		/**
		 * Static method to retrieve the Database index in the configuration.inc.php file.
		 * This can be useful when there are two databases of the same name which create
		 * confusion for the developer. There are no internal uses of this function but are
		 * here to help retrieve info if need be!
		 * @return int position or index of the database in the config file.
		 */
		public static function GetDatabaseIndex() {
			return 1;
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Menu"><sequence>';
			$strToReturn .= '<element name="Idmenu" type="xsd:int"/>';
			$strToReturn .= '<element name="PositionObject" type="xsd1:MenuPosition"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="SubName" type="xsd:string"/>';
			$strToReturn .= '<element name="Icon" type="xsd:string"/>';
			$strToReturn .= '<element name="Link" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkOption" type="xsd:string"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:Menu"/>';
			$strToReturn .= '<element name="Level" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Menu', $strComplexTypeArray)) {
				$strComplexTypeArray['Menu'] = Menu::GetSoapComplexTypeXml();
				MenuPosition::AlterSoapComplexTypeArray($strComplexTypeArray);
				Menu::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Menu::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Menu();
			if (property_exists($objSoapObject, 'Idmenu'))
				$objToReturn->intIdmenu = $objSoapObject->Idmenu;
			if ((property_exists($objSoapObject, 'PositionObject')) &&
				($objSoapObject->PositionObject))
				$objToReturn->PositionObject = MenuPosition::GetObjectFromSoapObject($objSoapObject->PositionObject);
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'SubName'))
				$objToReturn->strSubName = $objSoapObject->SubName;
			if (property_exists($objSoapObject, 'Icon'))
				$objToReturn->strIcon = $objSoapObject->Icon;
			if (property_exists($objSoapObject, 'Link'))
				$objToReturn->strLink = $objSoapObject->Link;
			if (property_exists($objSoapObject, 'LinkOption'))
				$objToReturn->strLinkOption = $objSoapObject->LinkOption;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = Menu::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if (property_exists($objSoapObject, 'Level'))
				$objToReturn->intLevel = $objSoapObject->Level;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Menu::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPositionObject)
				$objObject->objPositionObject = MenuPosition::GetSoapObjectFromObject($objObject->objPositionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPosition = null;
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = Menu::GetSoapObjectFromObject($objObject->objParrentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParrent = null;
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['Idmenu'] = $this->intIdmenu;
			$iArray['Position'] = $this->intPosition;
			$iArray['Code'] = $this->strCode;
			$iArray['Name'] = $this->strName;
			$iArray['SubName'] = $this->strSubName;
			$iArray['Icon'] = $this->strIcon;
			$iArray['Link'] = $this->strLink;
			$iArray['LinkOption'] = $this->strLinkOption;
			$iArray['Parrent'] = $this->intParrent;
			$iArray['Level'] = $this->intLevel;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}

		/**
		 * Default "toJsObject" handler
		 * Specifies how the object should be displayed in JQuery UI lists and menus. Note that these lists use
		 * value and label differently.
		 *
		 * value 	= The short form of what to display in the list and selection.
		 * label 	= [optional] If defined, is what is displayed in the menu
		 * id 		= Primary key of object.
		 *
		 * @return an array that specifies how to display the object
		 */
		public function toJsObject () {
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdmenu ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idmenu
     * @property-read QQNode $Position
     * @property-read QQNodeMenuPosition $PositionObject
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $SubName
     * @property-read QQNode $Icon
     * @property-read QQNode $Link
     * @property-read QQNode $LinkOption
     * @property-read QQNode $Parrent
     * @property-read QQNodeMenu $ParrentObject
     * @property-read QQNode $Level
     *
     *
     * @property-read QQReverseReferenceNodeMenu $MenuAsParrent
     * @property-read QQReverseReferenceNodeRoleHasMenu $RoleHasMenuAsId
     * @property-read QQReverseReferenceNodeRoleHasMenu $RoleHasMenuAsParrent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeMenu extends QQNode {
		protected $strTableName = 'menu';
		protected $strPrimaryKey = 'idmenu';
		protected $strClassName = 'Menu';
		public function __get($strName) {
			switch ($strName) {
				case 'Idmenu':
					return new QQNode('idmenu', 'Idmenu', 'Integer', $this);
				case 'Position':
					return new QQNode('position', 'Position', 'Integer', $this);
				case 'PositionObject':
					return new QQNodeMenuPosition('position', 'PositionObject', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'SubName':
					return new QQNode('sub_name', 'SubName', 'Blob', $this);
				case 'Icon':
					return new QQNode('icon', 'Icon', 'VarChar', $this);
				case 'Link':
					return new QQNode('link', 'Link', 'Blob', $this);
				case 'LinkOption':
					return new QQNode('link_option', 'LinkOption', 'VarChar', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeMenu('parrent', 'ParrentObject', 'Integer', $this);
				case 'Level':
					return new QQNode('level', 'Level', 'Integer', $this);
				case 'MenuAsParrent':
					return new QQReverseReferenceNodeMenu($this, 'menuasparrent', 'reverse_reference', 'parrent');
				case 'RoleHasMenuAsId':
					return new QQReverseReferenceNodeRoleHasMenu($this, 'rolehasmenuasid', 'reverse_reference', 'menu_idmenu');
				case 'RoleHasMenuAsParrent':
					return new QQReverseReferenceNodeRoleHasMenu($this, 'rolehasmenuasparrent', 'reverse_reference', 'parrent');

				case '_PrimaryKeyNode':
					return new QQNode('idmenu', 'Idmenu', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQNode $Idmenu
     * @property-read QQNode $Position
     * @property-read QQNodeMenuPosition $PositionObject
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $SubName
     * @property-read QQNode $Icon
     * @property-read QQNode $Link
     * @property-read QQNode $LinkOption
     * @property-read QQNode $Parrent
     * @property-read QQNodeMenu $ParrentObject
     * @property-read QQNode $Level
     *
     *
     * @property-read QQReverseReferenceNodeMenu $MenuAsParrent
     * @property-read QQReverseReferenceNodeRoleHasMenu $RoleHasMenuAsId
     * @property-read QQReverseReferenceNodeRoleHasMenu $RoleHasMenuAsParrent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeMenu extends QQReverseReferenceNode {
		protected $strTableName = 'menu';
		protected $strPrimaryKey = 'idmenu';
		protected $strClassName = 'Menu';
		public function __get($strName) {
			switch ($strName) {
				case 'Idmenu':
					return new QQNode('idmenu', 'Idmenu', 'integer', $this);
				case 'Position':
					return new QQNode('position', 'Position', 'integer', $this);
				case 'PositionObject':
					return new QQNodeMenuPosition('position', 'PositionObject', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'SubName':
					return new QQNode('sub_name', 'SubName', 'string', $this);
				case 'Icon':
					return new QQNode('icon', 'Icon', 'string', $this);
				case 'Link':
					return new QQNode('link', 'Link', 'string', $this);
				case 'LinkOption':
					return new QQNode('link_option', 'LinkOption', 'string', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeMenu('parrent', 'ParrentObject', 'integer', $this);
				case 'Level':
					return new QQNode('level', 'Level', 'integer', $this);
				case 'MenuAsParrent':
					return new QQReverseReferenceNodeMenu($this, 'menuasparrent', 'reverse_reference', 'parrent');
				case 'RoleHasMenuAsId':
					return new QQReverseReferenceNodeRoleHasMenu($this, 'rolehasmenuasid', 'reverse_reference', 'menu_idmenu');
				case 'RoleHasMenuAsParrent':
					return new QQReverseReferenceNodeRoleHasMenu($this, 'rolehasmenuasparrent', 'reverse_reference', 'parrent');

				case '_PrimaryKeyNode':
					return new QQNode('idmenu', 'Idmenu', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
