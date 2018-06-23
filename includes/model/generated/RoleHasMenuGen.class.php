<?php
	/**
	 * The abstract RoleHasMenuGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the RoleHasMenu subclass which
	 * extends this RoleHasMenuGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the RoleHasMenu class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $RoleIdrole the value for intRoleIdrole (PK)
	 * @property integer $MenuIdmenu the value for intMenuIdmenu (PK)
	 * @property integer $Seq the value for intSeq 
	 * @property string $Permission the value for strPermission 
	 * @property integer $Level the value for intLevel 
	 * @property integer $Parrent the value for intParrent 
	 * @property string $Refer the value for strRefer 
	 * @property Role $RoleIdroleObject the value for the Role object referenced by intRoleIdrole (PK)
	 * @property Menu $MenuIdmenuObject the value for the Menu object referenced by intMenuIdmenu (PK)
	 * @property Menu $ParrentObject the value for the Menu object referenced by intParrent 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class RoleHasMenuGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column role_has_menu.role_idrole
		 * @var integer intRoleIdrole
		 */
		protected $intRoleIdrole;
		const RoleIdroleDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intRoleIdrole;
		 */
		protected $__intRoleIdrole;

		/**
		 * Protected member variable that maps to the database PK column role_has_menu.menu_idmenu
		 * @var integer intMenuIdmenu
		 */
		protected $intMenuIdmenu;
		const MenuIdmenuDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intMenuIdmenu;
		 */
		protected $__intMenuIdmenu;

		/**
		 * Protected member variable that maps to the database column role_has_menu.seq
		 * @var integer intSeq
		 */
		protected $intSeq;
		const SeqDefault = null;


		/**
		 * Protected member variable that maps to the database column role_has_menu.permission
		 * @var string strPermission
		 */
		protected $strPermission;
		const PermissionMaxLength = 5;
		const PermissionDefault = null;


		/**
		 * Protected member variable that maps to the database column role_has_menu.level
		 * @var integer intLevel
		 */
		protected $intLevel;
		const LevelDefault = null;


		/**
		 * Protected member variable that maps to the database column role_has_menu.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Protected member variable that maps to the database column role_has_menu.refer
		 * @var string strRefer
		 */
		protected $strRefer;
		const ReferMaxLength = 45;
		const ReferDefault = null;


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
		 * in the database column role_has_menu.role_idrole.
		 *
		 * NOTE: Always use the RoleIdroleObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRoleIdroleObject
		 */
		protected $objRoleIdroleObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column role_has_menu.menu_idmenu.
		 *
		 * NOTE: Always use the MenuIdmenuObject property getter to correctly retrieve this Menu object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Menu objMenuIdmenuObject
		 */
		protected $objMenuIdmenuObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column role_has_menu.parrent.
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
			$this->intRoleIdrole = RoleHasMenu::RoleIdroleDefault;
			$this->intMenuIdmenu = RoleHasMenu::MenuIdmenuDefault;
			$this->intSeq = RoleHasMenu::SeqDefault;
			$this->strPermission = RoleHasMenu::PermissionDefault;
			$this->intLevel = RoleHasMenu::LevelDefault;
			$this->intParrent = RoleHasMenu::ParrentDefault;
			$this->strRefer = RoleHasMenu::ReferDefault;
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
		 * Load a RoleHasMenu from PK Info
		 * @param integer $intRoleIdrole		 * @param integer $intMenuIdmenu
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu
		 */
		public static function Load($intRoleIdrole, $intMenuIdmenu, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'RoleHasMenu', $intRoleIdrole, $intMenuIdmenu);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = RoleHasMenu::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $intRoleIdrole),
					QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, $intMenuIdmenu)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all RoleHasMenus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call RoleHasMenu::QueryArray to perform the LoadAll query
			try {
				return RoleHasMenu::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all RoleHasMenus
		 * @return int
		 */
		public static function CountAll() {
			// Call RoleHasMenu::QueryCount to perform the CountAll query
			return RoleHasMenu::QueryCount(QQ::All());
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
			$objDatabase = RoleHasMenu::GetDatabase();

			// Create/Build out the QueryBuilder object with RoleHasMenu-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'role_has_menu');

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
				RoleHasMenu::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('role_has_menu');

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
		 * Static Qcubed Query method to query for a single RoleHasMenu object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return RoleHasMenu the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RoleHasMenu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new RoleHasMenu object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = RoleHasMenu::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return RoleHasMenu::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of RoleHasMenu objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return RoleHasMenu[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RoleHasMenu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return RoleHasMenu::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = RoleHasMenu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of RoleHasMenu objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RoleHasMenu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = RoleHasMenu::GetDatabase();

			$strQuery = RoleHasMenu::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/rolehasmenu', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = RoleHasMenu::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this RoleHasMenu
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'role_has_menu';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'role_idrole', $strAliasPrefix . 'role_idrole');
			    $objBuilder->AddSelectItem($strTableName, 'menu_idmenu', $strAliasPrefix . 'menu_idmenu');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'role_idrole', $strAliasPrefix . 'role_idrole');
			    $objBuilder->AddSelectItem($strTableName, 'menu_idmenu', $strAliasPrefix . 'menu_idmenu');
			    $objBuilder->AddSelectItem($strTableName, 'seq', $strAliasPrefix . 'seq');
			    $objBuilder->AddSelectItem($strTableName, 'permission', $strAliasPrefix . 'permission');
			    $objBuilder->AddSelectItem($strTableName, 'level', $strAliasPrefix . 'level');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
			    $objBuilder->AddSelectItem($strTableName, 'refer', $strAliasPrefix . 'refer');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a RoleHasMenu from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this RoleHasMenu::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return RoleHasMenu
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the RoleHasMenu object
			$objToReturn = new RoleHasMenu();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'role_idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRoleIdrole = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intRoleIdrole = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'menu_idmenu';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMenuIdmenu = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intMenuIdmenu = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'seq';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSeq = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'permission';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPermission = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'level';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLevel = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'refer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRefer = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->RoleIdrole != $objPreviousItem->RoleIdrole) {
						continue;
					}
					if ($objToReturn->MenuIdmenu != $objPreviousItem->MenuIdmenu) {
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
				$strAliasPrefix = 'role_has_menu__';

			// Check for RoleIdroleObject Early Binding
			$strAlias = $strAliasPrefix . 'role_idrole__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRoleIdroleObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'role_idrole__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for MenuIdmenuObject Early Binding
			$strAlias = $strAliasPrefix . 'menu_idmenu__idmenu';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMenuIdmenuObject = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menu_idmenu__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idmenu';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of RoleHasMenus from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return RoleHasMenu[]
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
					$objItem = RoleHasMenu::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = RoleHasMenu::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single RoleHasMenu object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return RoleHasMenu next row resulting from the query
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
			return RoleHasMenu::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single RoleHasMenu object,
		 * by RoleIdrole, MenuIdmenu Index(es)
		 * @param integer $intRoleIdrole
		 * @param integer $intMenuIdmenu
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu
		*/
		public static function LoadByRoleIdroleMenuIdmenu($intRoleIdrole, $intMenuIdmenu, $objOptionalClauses = null) {
			return RoleHasMenu::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $intRoleIdrole),
					QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, $intMenuIdmenu)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of RoleHasMenu objects,
		 * by MenuIdmenu Index(es)
		 * @param integer $intMenuIdmenu
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu[]
		*/
		public static function LoadArrayByMenuIdmenu($intMenuIdmenu, $objOptionalClauses = null) {
			// Call RoleHasMenu::QueryArray to perform the LoadArrayByMenuIdmenu query
			try {
				return RoleHasMenu::QueryArray(
					QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, $intMenuIdmenu),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count RoleHasMenus
		 * by MenuIdmenu Index(es)
		 * @param integer $intMenuIdmenu
		 * @return int
		*/
		public static function CountByMenuIdmenu($intMenuIdmenu) {
			// Call RoleHasMenu::QueryCount to perform the CountByMenuIdmenu query
			return RoleHasMenu::QueryCount(
				QQ::Equal(QQN::RoleHasMenu()->MenuIdmenu, $intMenuIdmenu)
			);
		}

		/**
		 * Load an array of RoleHasMenu objects,
		 * by RoleIdrole Index(es)
		 * @param integer $intRoleIdrole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu[]
		*/
		public static function LoadArrayByRoleIdrole($intRoleIdrole, $objOptionalClauses = null) {
			// Call RoleHasMenu::QueryArray to perform the LoadArrayByRoleIdrole query
			try {
				return RoleHasMenu::QueryArray(
					QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $intRoleIdrole),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count RoleHasMenus
		 * by RoleIdrole Index(es)
		 * @param integer $intRoleIdrole
		 * @return int
		*/
		public static function CountByRoleIdrole($intRoleIdrole) {
			// Call RoleHasMenu::QueryCount to perform the CountByRoleIdrole query
			return RoleHasMenu::QueryCount(
				QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $intRoleIdrole)
			);
		}

		/**
		 * Load an array of RoleHasMenu objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RoleHasMenu[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call RoleHasMenu::QueryArray to perform the LoadArrayByParrent query
			try {
				return RoleHasMenu::QueryArray(
					QQ::Equal(QQN::RoleHasMenu()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count RoleHasMenus
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call RoleHasMenu::QueryCount to perform the CountByParrent query
			return RoleHasMenu::QueryCount(
				QQ::Equal(QQN::RoleHasMenu()->Parrent, $intParrent)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this RoleHasMenu
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = RoleHasMenu::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `role_has_menu` (
							`role_idrole`,
							`menu_idmenu`,
							`seq`,
							`permission`,
							`level`,
							`parrent`,
							`refer`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intRoleIdrole) . ',
							' . $objDatabase->SqlVariable($this->intMenuIdmenu) . ',
							' . $objDatabase->SqlVariable($this->intSeq) . ',
							' . $objDatabase->SqlVariable($this->strPermission) . ',
							' . $objDatabase->SqlVariable($this->intLevel) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . ',
							' . $objDatabase->SqlVariable($this->strRefer) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`role_has_menu`
						SET
							`role_idrole` = ' . $objDatabase->SqlVariable($this->intRoleIdrole) . ',
							`menu_idmenu` = ' . $objDatabase->SqlVariable($this->intMenuIdmenu) . ',
							`seq` = ' . $objDatabase->SqlVariable($this->intSeq) . ',
							`permission` = ' . $objDatabase->SqlVariable($this->strPermission) . ',
							`level` = ' . $objDatabase->SqlVariable($this->intLevel) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . ',
							`refer` = ' . $objDatabase->SqlVariable($this->strRefer) . '
						WHERE
							`role_idrole` = ' . $objDatabase->SqlVariable($this->__intRoleIdrole) . ' AND 
							`menu_idmenu` = ' . $objDatabase->SqlVariable($this->__intMenuIdmenu) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intRoleIdrole = $this->intRoleIdrole;
			$this->__intMenuIdmenu = $this->intMenuIdmenu;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this RoleHasMenu
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intRoleIdrole)) || (is_null($this->intMenuIdmenu)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this RoleHasMenu with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = RoleHasMenu::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role_has_menu`
				WHERE
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intRoleIdrole) . ' AND
					`menu_idmenu` = ' . $objDatabase->SqlVariable($this->intMenuIdmenu) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this RoleHasMenu ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'RoleHasMenu', $this->intRoleIdrole, $this->intMenuIdmenu);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all RoleHasMenus
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = RoleHasMenu::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`role_has_menu`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate role_has_menu table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = RoleHasMenu::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `role_has_menu`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this RoleHasMenu from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved RoleHasMenu object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = RoleHasMenu::Load($this->intRoleIdrole, $this->intMenuIdmenu);

			// Update $this's local variables to match
			$this->RoleIdrole = $objReloaded->RoleIdrole;
			$this->__intRoleIdrole = $this->intRoleIdrole;
			$this->MenuIdmenu = $objReloaded->MenuIdmenu;
			$this->__intMenuIdmenu = $this->intMenuIdmenu;
			$this->intSeq = $objReloaded->intSeq;
			$this->strPermission = $objReloaded->strPermission;
			$this->intLevel = $objReloaded->intLevel;
			$this->Parrent = $objReloaded->Parrent;
			$this->strRefer = $objReloaded->strRefer;
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
				case 'RoleIdrole':
					/**
					 * Gets the value for intRoleIdrole (PK)
					 * @return integer
					 */
					return $this->intRoleIdrole;

				case 'MenuIdmenu':
					/**
					 * Gets the value for intMenuIdmenu (PK)
					 * @return integer
					 */
					return $this->intMenuIdmenu;

				case 'Seq':
					/**
					 * Gets the value for intSeq 
					 * @return integer
					 */
					return $this->intSeq;

				case 'Permission':
					/**
					 * Gets the value for strPermission 
					 * @return string
					 */
					return $this->strPermission;

				case 'Level':
					/**
					 * Gets the value for intLevel 
					 * @return integer
					 */
					return $this->intLevel;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;

				case 'Refer':
					/**
					 * Gets the value for strRefer 
					 * @return string
					 */
					return $this->strRefer;


				///////////////////
				// Member Objects
				///////////////////
				case 'RoleIdroleObject':
					/**
					 * Gets the value for the Role object referenced by intRoleIdrole (PK)
					 * @return Role
					 */
					try {
						if ((!$this->objRoleIdroleObject) && (!is_null($this->intRoleIdrole)))
							$this->objRoleIdroleObject = Role::Load($this->intRoleIdrole);
						return $this->objRoleIdroleObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MenuIdmenuObject':
					/**
					 * Gets the value for the Menu object referenced by intMenuIdmenu (PK)
					 * @return Menu
					 */
					try {
						if ((!$this->objMenuIdmenuObject) && (!is_null($this->intMenuIdmenu)))
							$this->objMenuIdmenuObject = Menu::Load($this->intMenuIdmenu);
						return $this->objMenuIdmenuObject;
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
				case 'RoleIdrole':
					/**
					 * Sets the value for intRoleIdrole (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRoleIdroleObject = null;
						return ($this->intRoleIdrole = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MenuIdmenu':
					/**
					 * Sets the value for intMenuIdmenu (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMenuIdmenuObject = null;
						return ($this->intMenuIdmenu = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Seq':
					/**
					 * Sets the value for intSeq 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSeq = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Permission':
					/**
					 * Sets the value for strPermission 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPermission = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Level':
					/**
					 * Sets the value for intLevel 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intLevel = QType::Cast($mixValue, QType::Integer));
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

				case 'Refer':
					/**
					 * Sets the value for strRefer 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRefer = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'RoleIdroleObject':
					/**
					 * Sets the value for the Role object referenced by intRoleIdrole (PK)
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intRoleIdrole = null;
						$this->objRoleIdroleObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Role object
						try {
							$mixValue = QType::Cast($mixValue, 'Role');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Role object
						if (is_null($mixValue->Idrole))
							throw new QCallerException('Unable to set an unsaved RoleIdroleObject for this RoleHasMenu');

						// Update Local Member Variables
						$this->objRoleIdroleObject = $mixValue;
						$this->intRoleIdrole = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'MenuIdmenuObject':
					/**
					 * Sets the value for the Menu object referenced by intMenuIdmenu (PK)
					 * @param Menu $mixValue
					 * @return Menu
					 */
					if (is_null($mixValue)) {
						$this->intMenuIdmenu = null;
						$this->objMenuIdmenuObject = null;
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
							throw new QCallerException('Unable to set an unsaved MenuIdmenuObject for this RoleHasMenu');

						// Update Local Member Variables
						$this->objMenuIdmenuObject = $mixValue;
						$this->intMenuIdmenu = $mixValue->Idmenu;

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
							throw new QCallerException('Unable to set an unsaved ParrentObject for this RoleHasMenu');

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



		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "role_has_menu";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[RoleHasMenu::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="RoleHasMenu"><sequence>';
			$strToReturn .= '<element name="RoleIdroleObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="MenuIdmenuObject" type="xsd1:Menu"/>';
			$strToReturn .= '<element name="Seq" type="xsd:int"/>';
			$strToReturn .= '<element name="Permission" type="xsd:string"/>';
			$strToReturn .= '<element name="Level" type="xsd:int"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:Menu"/>';
			$strToReturn .= '<element name="Refer" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('RoleHasMenu', $strComplexTypeArray)) {
				$strComplexTypeArray['RoleHasMenu'] = RoleHasMenu::GetSoapComplexTypeXml();
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Menu::AlterSoapComplexTypeArray($strComplexTypeArray);
				Menu::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, RoleHasMenu::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new RoleHasMenu();
			if ((property_exists($objSoapObject, 'RoleIdroleObject')) &&
				($objSoapObject->RoleIdroleObject))
				$objToReturn->RoleIdroleObject = Role::GetObjectFromSoapObject($objSoapObject->RoleIdroleObject);
			if ((property_exists($objSoapObject, 'MenuIdmenuObject')) &&
				($objSoapObject->MenuIdmenuObject))
				$objToReturn->MenuIdmenuObject = Menu::GetObjectFromSoapObject($objSoapObject->MenuIdmenuObject);
			if (property_exists($objSoapObject, 'Seq'))
				$objToReturn->intSeq = $objSoapObject->Seq;
			if (property_exists($objSoapObject, 'Permission'))
				$objToReturn->strPermission = $objSoapObject->Permission;
			if (property_exists($objSoapObject, 'Level'))
				$objToReturn->intLevel = $objSoapObject->Level;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = Menu::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if (property_exists($objSoapObject, 'Refer'))
				$objToReturn->strRefer = $objSoapObject->Refer;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, RoleHasMenu::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objRoleIdroleObject)
				$objObject->objRoleIdroleObject = Role::GetSoapObjectFromObject($objObject->objRoleIdroleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRoleIdrole = null;
			if ($objObject->objMenuIdmenuObject)
				$objObject->objMenuIdmenuObject = Menu::GetSoapObjectFromObject($objObject->objMenuIdmenuObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMenuIdmenu = null;
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
			$iArray['RoleIdrole'] = $this->intRoleIdrole;
			$iArray['MenuIdmenu'] = $this->intMenuIdmenu;
			$iArray['Seq'] = $this->intSeq;
			$iArray['Permission'] = $this->strPermission;
			$iArray['Level'] = $this->intLevel;
			$iArray['Parrent'] = $this->intParrent;
			$iArray['Refer'] = $this->strRefer;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  array( $this->intRoleIdrole,  $this->intMenuIdmenu) ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $RoleIdrole
     * @property-read QQNodeRole $RoleIdroleObject
     * @property-read QQNode $MenuIdmenu
     * @property-read QQNodeMenu $MenuIdmenuObject
     * @property-read QQNode $Seq
     * @property-read QQNode $Permission
     * @property-read QQNode $Level
     * @property-read QQNode $Parrent
     * @property-read QQNodeMenu $ParrentObject
     * @property-read QQNode $Refer
     *
     *

     * @property-read QQNodeRole $_PrimaryKeyNode
     **/
	class QQNodeRoleHasMenu extends QQNode {
		protected $strTableName = 'role_has_menu';
		protected $strPrimaryKey = 'role_idrole';
		protected $strClassName = 'RoleHasMenu';
		public function __get($strName) {
			switch ($strName) {
				case 'RoleIdrole':
					return new QQNode('role_idrole', 'RoleIdrole', 'Integer', $this);
				case 'RoleIdroleObject':
					return new QQNodeRole('role_idrole', 'RoleIdroleObject', 'Integer', $this);
				case 'MenuIdmenu':
					return new QQNode('menu_idmenu', 'MenuIdmenu', 'Integer', $this);
				case 'MenuIdmenuObject':
					return new QQNodeMenu('menu_idmenu', 'MenuIdmenuObject', 'Integer', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'Integer', $this);
				case 'Permission':
					return new QQNode('permission', 'Permission', 'VarChar', $this);
				case 'Level':
					return new QQNode('level', 'Level', 'Integer', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeMenu('parrent', 'ParrentObject', 'Integer', $this);
				case 'Refer':
					return new QQNode('refer', 'Refer', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNodeRole('role_idrole', 'RoleIdrole', 'Integer', $this);
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
     * @property-read QQNode $RoleIdrole
     * @property-read QQNodeRole $RoleIdroleObject
     * @property-read QQNode $MenuIdmenu
     * @property-read QQNodeMenu $MenuIdmenuObject
     * @property-read QQNode $Seq
     * @property-read QQNode $Permission
     * @property-read QQNode $Level
     * @property-read QQNode $Parrent
     * @property-read QQNodeMenu $ParrentObject
     * @property-read QQNode $Refer
     *
     *

     * @property-read QQNodeRole $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeRoleHasMenu extends QQReverseReferenceNode {
		protected $strTableName = 'role_has_menu';
		protected $strPrimaryKey = 'role_idrole';
		protected $strClassName = 'RoleHasMenu';
		public function __get($strName) {
			switch ($strName) {
				case 'RoleIdrole':
					return new QQNode('role_idrole', 'RoleIdrole', 'integer', $this);
				case 'RoleIdroleObject':
					return new QQNodeRole('role_idrole', 'RoleIdroleObject', 'integer', $this);
				case 'MenuIdmenu':
					return new QQNode('menu_idmenu', 'MenuIdmenu', 'integer', $this);
				case 'MenuIdmenuObject':
					return new QQNodeMenu('menu_idmenu', 'MenuIdmenuObject', 'integer', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'integer', $this);
				case 'Permission':
					return new QQNode('permission', 'Permission', 'string', $this);
				case 'Level':
					return new QQNode('level', 'Level', 'integer', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeMenu('parrent', 'ParrentObject', 'integer', $this);
				case 'Refer':
					return new QQNode('refer', 'Refer', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNodeRole('role_idrole', 'RoleIdrole', 'integer', $this);
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
