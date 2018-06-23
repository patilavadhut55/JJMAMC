<?php
	/**
	 * The abstract CastGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Cast subclass which
	 * extends this CastGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Cast class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idcast the value for intIdcast (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property string $MarName the value for strMarName (Not Null)
	 * @property string $Abbrivation the value for strAbbrivation 
	 * @property string $Print the value for strPrint 
	 * @property integer $Parent the value for intParent 
	 * @property Cast $ParentObject the value for the Cast object referenced by intParent 
	 * @property-read Address $_AddressAsE the value for the private _objAddressAsE (Read-Only) if set due to an expansion on the address.caste reverse relationship
	 * @property-read Address[] $_AddressAsEArray the value for the private _objAddressAsEArray (Read-Only) if set due to an ExpandAsArray on the address.caste reverse relationship
	 * @property-read Cast $_ChildCast the value for the private _objChildCast (Read-Only) if set due to an expansion on the cast.parent reverse relationship
	 * @property-read Cast[] $_ChildCastArray the value for the private _objChildCastArray (Read-Only) if set due to an ExpandAsArray on the cast.parent reverse relationship
	 * @property-read CertificateTemplet $_CertificateTempletAsCategory the value for the private _objCertificateTempletAsCategory (Read-Only) if set due to an expansion on the certificate_templet.category reverse relationship
	 * @property-read CertificateTemplet[] $_CertificateTempletAsCategoryArray the value for the private _objCertificateTempletAsCategoryArray (Read-Only) if set due to an ExpandAsArray on the certificate_templet.category reverse relationship
	 * @property-read Inquiry $_InquiryAsE the value for the private _objInquiryAsE (Read-Only) if set due to an expansion on the inquiry.caste reverse relationship
	 * @property-read Inquiry[] $_InquiryAsEArray the value for the private _objInquiryAsEArray (Read-Only) if set due to an ExpandAsArray on the inquiry.caste reverse relationship
	 * @property-read Profile $_ProfileAsE the value for the private _objProfileAsE (Read-Only) if set due to an expansion on the profile.caste reverse relationship
	 * @property-read Profile[] $_ProfileAsEArray the value for the private _objProfileAsEArray (Read-Only) if set due to an ExpandAsArray on the profile.caste reverse relationship
	 * @property-read Profile $_ProfileAsECat the value for the private _objProfileAsECat (Read-Only) if set due to an expansion on the profile.caste_cat reverse relationship
	 * @property-read Profile[] $_ProfileAsECatArray the value for the private _objProfileAsECatArray (Read-Only) if set due to an ExpandAsArray on the profile.caste_cat reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CastGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column cast.idcast
		 * @var integer intIdcast
		 */
		protected $intIdcast;
		const IdcastDefault = null;


		/**
		 * Protected member variable that maps to the database column cast.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column cast.mar_name
		 * @var string strMarName
		 */
		protected $strMarName;
		const MarNameDefault = null;


		/**
		 * Protected member variable that maps to the database column cast.abbrivation
		 * @var string strAbbrivation
		 */
		protected $strAbbrivation;
		const AbbrivationDefault = null;


		/**
		 * Protected member variable that maps to the database column cast.print
		 * @var string strPrint
		 */
		protected $strPrint;
		const PrintDefault = null;


		/**
		 * Protected member variable that maps to the database column cast.parent
		 * @var integer intParent
		 */
		protected $intParent;
		const ParentDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsE object
		 * (of type Address), if this Cast object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsE;
		 */
		private $_objAddressAsE;

		/**
		 * Private member variable that stores a reference to an array of AddressAsE objects
		 * (of type Address[]), if this Cast object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsEArray;
		 */
		private $_objAddressAsEArray = null;

		/**
		 * Private member variable that stores a reference to a single ChildCast object
		 * (of type Cast), if this Cast object was restored with
		 * an expansion on the cast association table.
		 * @var Cast _objChildCast;
		 */
		private $_objChildCast;

		/**
		 * Private member variable that stores a reference to an array of ChildCast objects
		 * (of type Cast[]), if this Cast object was restored with
		 * an ExpandAsArray on the cast association table.
		 * @var Cast[] _objChildCastArray;
		 */
		private $_objChildCastArray = null;

		/**
		 * Private member variable that stores a reference to a single CertificateTempletAsCategory object
		 * (of type CertificateTemplet), if this Cast object was restored with
		 * an expansion on the certificate_templet association table.
		 * @var CertificateTemplet _objCertificateTempletAsCategory;
		 */
		private $_objCertificateTempletAsCategory;

		/**
		 * Private member variable that stores a reference to an array of CertificateTempletAsCategory objects
		 * (of type CertificateTemplet[]), if this Cast object was restored with
		 * an ExpandAsArray on the certificate_templet association table.
		 * @var CertificateTemplet[] _objCertificateTempletAsCategoryArray;
		 */
		private $_objCertificateTempletAsCategoryArray = null;

		/**
		 * Private member variable that stores a reference to a single InquiryAsE object
		 * (of type Inquiry), if this Cast object was restored with
		 * an expansion on the inquiry association table.
		 * @var Inquiry _objInquiryAsE;
		 */
		private $_objInquiryAsE;

		/**
		 * Private member variable that stores a reference to an array of InquiryAsE objects
		 * (of type Inquiry[]), if this Cast object was restored with
		 * an ExpandAsArray on the inquiry association table.
		 * @var Inquiry[] _objInquiryAsEArray;
		 */
		private $_objInquiryAsEArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsE object
		 * (of type Profile), if this Cast object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsE;
		 */
		private $_objProfileAsE;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsE objects
		 * (of type Profile[]), if this Cast object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsEArray;
		 */
		private $_objProfileAsEArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsECat object
		 * (of type Profile), if this Cast object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsECat;
		 */
		private $_objProfileAsECat;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsECat objects
		 * (of type Profile[]), if this Cast object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsECatArray;
		 */
		private $_objProfileAsECatArray = null;

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
		 * in the database column cast.parent.
		 *
		 * NOTE: Always use the ParentObject property getter to correctly retrieve this Cast object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cast objParentObject
		 */
		protected $objParentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdcast = Cast::IdcastDefault;
			$this->strName = Cast::NameDefault;
			$this->strMarName = Cast::MarNameDefault;
			$this->strAbbrivation = Cast::AbbrivationDefault;
			$this->strPrint = Cast::PrintDefault;
			$this->intParent = Cast::ParentDefault;
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
		 * Load a Cast from PK Info
		 * @param integer $intIdcast
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cast
		 */
		public static function Load($intIdcast, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Cast', $intIdcast);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Cast::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Cast()->Idcast, $intIdcast)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Casts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cast[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Cast::QueryArray to perform the LoadAll query
			try {
				return Cast::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Casts
		 * @return int
		 */
		public static function CountAll() {
			// Call Cast::QueryCount to perform the CountAll query
			return Cast::QueryCount(QQ::All());
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
			$objDatabase = Cast::GetDatabase();

			// Create/Build out the QueryBuilder object with Cast-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'cast');

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
				Cast::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('cast');

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
		 * Static Qcubed Query method to query for a single Cast object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Cast the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cast::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Cast object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Cast::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Cast::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Cast objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Cast[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cast::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Cast::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Cast::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Cast objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Cast::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Cast::GetDatabase();

			$strQuery = Cast::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/cast', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Cast::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Cast
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'cast';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idcast', $strAliasPrefix . 'idcast');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idcast', $strAliasPrefix . 'idcast');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'mar_name', $strAliasPrefix . 'mar_name');
			    $objBuilder->AddSelectItem($strTableName, 'abbrivation', $strAliasPrefix . 'abbrivation');
			    $objBuilder->AddSelectItem($strTableName, 'print', $strAliasPrefix . 'print');
			    $objBuilder->AddSelectItem($strTableName, 'parent', $strAliasPrefix . 'parent');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Cast from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Cast::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Cast
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdcast == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'cast__';


						// Expanding reverse references: AddressAsE
						$strAlias = $strAliasPrefix . 'addressase__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsEArray)
								$objPreviousItem->_objAddressAsEArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsEArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsEArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressase__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsEArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsEArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ChildCast
						$strAlias = $strAliasPrefix . 'childcast__idcast';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objChildCastArray)
								$objPreviousItem->_objChildCastArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objChildCastArray)) {
								$objPreviousChildItems = $objPreviousItem->_objChildCastArray;
								$objChildItem = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childcast__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objChildCastArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objChildCastArray[] = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childcast__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: CertificateTempletAsCategory
						$strAlias = $strAliasPrefix . 'certificatetempletascategory__idcertificate_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objCertificateTempletAsCategoryArray)
								$objPreviousItem->_objCertificateTempletAsCategoryArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCertificateTempletAsCategoryArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCertificateTempletAsCategoryArray;
								$objChildItem = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetempletascategory__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCertificateTempletAsCategoryArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCertificateTempletAsCategoryArray[] = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetempletascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: InquiryAsE
						$strAlias = $strAliasPrefix . 'inquiryase__idinquiry';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objInquiryAsEArray)
								$objPreviousItem->_objInquiryAsEArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objInquiryAsEArray)) {
								$objPreviousChildItems = $objPreviousItem->_objInquiryAsEArray;
								$objChildItem = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryase__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objInquiryAsEArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objInquiryAsEArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsE
						$strAlias = $strAliasPrefix . 'profilease__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsEArray)
								$objPreviousItem->_objProfileAsEArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsEArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsEArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilease__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsEArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsEArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilease__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsECat
						$strAlias = $strAliasPrefix . 'profileasecat__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsECatArray)
								$objPreviousItem->_objProfileAsECatArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsECatArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsECatArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasecat__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsECatArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsECatArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasecat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'cast__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Cast object
			$objToReturn = new Cast();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdcast = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mar_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMarName = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'abbrivation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAbbrivation = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'print';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPrint = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'parent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParent = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idcast != $objPreviousItem->Idcast) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsEArray);
					$cnt = count($objToReturn->_objAddressAsEArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsEArray, $objToReturn->_objAddressAsEArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objChildCastArray);
					$cnt = count($objToReturn->_objChildCastArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objChildCastArray, $objToReturn->_objChildCastArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objCertificateTempletAsCategoryArray);
					$cnt = count($objToReturn->_objCertificateTempletAsCategoryArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objCertificateTempletAsCategoryArray, $objToReturn->_objCertificateTempletAsCategoryArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objInquiryAsEArray);
					$cnt = count($objToReturn->_objInquiryAsEArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objInquiryAsEArray, $objToReturn->_objInquiryAsEArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsEArray);
					$cnt = count($objToReturn->_objProfileAsEArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsEArray, $objToReturn->_objProfileAsEArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsECatArray);
					$cnt = count($objToReturn->_objProfileAsECatArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsECatArray, $objToReturn->_objProfileAsECatArray)) {
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
				$strAliasPrefix = 'cast__';

			// Check for ParentObject Early Binding
			$strAlias = $strAliasPrefix . 'parent__idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParentObject = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for AddressAsE Virtual Binding
			$strAlias = $strAliasPrefix . 'addressase__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsEArray)
				$objToReturn->_objAddressAsEArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsEArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsE = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ChildCast Virtual Binding
			$strAlias = $strAliasPrefix . 'childcast__idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objChildCastArray)
				$objToReturn->_objChildCastArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objChildCastArray[] = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childcast__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objChildCast = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'childcast__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for CertificateTempletAsCategory Virtual Binding
			$strAlias = $strAliasPrefix . 'certificatetempletascategory__idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objCertificateTempletAsCategoryArray)
				$objToReturn->_objCertificateTempletAsCategoryArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objCertificateTempletAsCategoryArray[] = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetempletascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCertificateTempletAsCategory = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetempletascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for InquiryAsE Virtual Binding
			$strAlias = $strAliasPrefix . 'inquiryase__idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objInquiryAsEArray)
				$objToReturn->_objInquiryAsEArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objInquiryAsEArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objInquiryAsE = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsE Virtual Binding
			$strAlias = $strAliasPrefix . 'profilease__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsEArray)
				$objToReturn->_objProfileAsEArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsEArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilease__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsE = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilease__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsECat Virtual Binding
			$strAlias = $strAliasPrefix . 'profileasecat__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsECatArray)
				$objToReturn->_objProfileAsECatArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsECatArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasecat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsECat = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasecat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Casts from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Cast[]
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
					$objItem = Cast::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Cast::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Cast object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Cast next row resulting from the query
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
			return Cast::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Cast object,
		 * by Idcast Index(es)
		 * @param integer $intIdcast
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cast
		*/
		public static function LoadByIdcast($intIdcast, $objOptionalClauses = null) {
			return Cast::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Cast()->Idcast, $intIdcast)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Cast object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cast
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return Cast::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Cast()->Name, $strName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Cast objects,
		 * by Parent Index(es)
		 * @param integer $intParent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cast[]
		*/
		public static function LoadArrayByParent($intParent, $objOptionalClauses = null) {
			// Call Cast::QueryArray to perform the LoadArrayByParent query
			try {
				return Cast::QueryArray(
					QQ::Equal(QQN::Cast()->Parent, $intParent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Casts
		 * by Parent Index(es)
		 * @param integer $intParent
		 * @return int
		*/
		public static function CountByParent($intParent) {
			// Call Cast::QueryCount to perform the CountByParent query
			return Cast::QueryCount(
				QQ::Equal(QQN::Cast()->Parent, $intParent)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Cast
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `cast` (
							`name`,
							`mar_name`,
							`abbrivation`,
							`print`,
							`parent`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strMarName) . ',
							' . $objDatabase->SqlVariable($this->strAbbrivation) . ',
							' . $objDatabase->SqlVariable($this->strPrint) . ',
							' . $objDatabase->SqlVariable($this->intParent) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdcast = $objDatabase->InsertId('cast', 'idcast');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`cast`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`mar_name` = ' . $objDatabase->SqlVariable($this->strMarName) . ',
							`abbrivation` = ' . $objDatabase->SqlVariable($this->strAbbrivation) . ',
							`print` = ' . $objDatabase->SqlVariable($this->strPrint) . ',
							`parent` = ' . $objDatabase->SqlVariable($this->intParent) . '
						WHERE
							`idcast` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
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
		 * Delete this Cast
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Cast with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cast`
				WHERE
					`idcast` = ' . $objDatabase->SqlVariable($this->intIdcast) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Cast ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Cast', $this->intIdcast);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Casts
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cast`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate cast table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `cast`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Cast from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Cast object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Cast::Load($this->intIdcast);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strMarName = $objReloaded->strMarName;
			$this->strAbbrivation = $objReloaded->strAbbrivation;
			$this->strPrint = $objReloaded->strPrint;
			$this->Parent = $objReloaded->Parent;
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
				case 'Idcast':
					/**
					 * Gets the value for intIdcast (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdcast;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'MarName':
					/**
					 * Gets the value for strMarName (Not Null)
					 * @return string
					 */
					return $this->strMarName;

				case 'Abbrivation':
					/**
					 * Gets the value for strAbbrivation 
					 * @return string
					 */
					return $this->strAbbrivation;

				case 'Print':
					/**
					 * Gets the value for strPrint 
					 * @return string
					 */
					return $this->strPrint;

				case 'Parent':
					/**
					 * Gets the value for intParent 
					 * @return integer
					 */
					return $this->intParent;


				///////////////////
				// Member Objects
				///////////////////
				case 'ParentObject':
					/**
					 * Gets the value for the Cast object referenced by intParent 
					 * @return Cast
					 */
					try {
						if ((!$this->objParentObject) && (!is_null($this->intParent)))
							$this->objParentObject = Cast::Load($this->intParent);
						return $this->objParentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AddressAsE':
					/**
					 * Gets the value for the private _objAddressAsE (Read-Only)
					 * if set due to an expansion on the address.caste reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsE;

				case '_AddressAsEArray':
					/**
					 * Gets the value for the private _objAddressAsEArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.caste reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsEArray;

				case '_ChildCast':
					/**
					 * Gets the value for the private _objChildCast (Read-Only)
					 * if set due to an expansion on the cast.parent reverse relationship
					 * @return Cast
					 */
					return $this->_objChildCast;

				case '_ChildCastArray':
					/**
					 * Gets the value for the private _objChildCastArray (Read-Only)
					 * if set due to an ExpandAsArray on the cast.parent reverse relationship
					 * @return Cast[]
					 */
					return $this->_objChildCastArray;

				case '_CertificateTempletAsCategory':
					/**
					 * Gets the value for the private _objCertificateTempletAsCategory (Read-Only)
					 * if set due to an expansion on the certificate_templet.category reverse relationship
					 * @return CertificateTemplet
					 */
					return $this->_objCertificateTempletAsCategory;

				case '_CertificateTempletAsCategoryArray':
					/**
					 * Gets the value for the private _objCertificateTempletAsCategoryArray (Read-Only)
					 * if set due to an ExpandAsArray on the certificate_templet.category reverse relationship
					 * @return CertificateTemplet[]
					 */
					return $this->_objCertificateTempletAsCategoryArray;

				case '_InquiryAsE':
					/**
					 * Gets the value for the private _objInquiryAsE (Read-Only)
					 * if set due to an expansion on the inquiry.caste reverse relationship
					 * @return Inquiry
					 */
					return $this->_objInquiryAsE;

				case '_InquiryAsEArray':
					/**
					 * Gets the value for the private _objInquiryAsEArray (Read-Only)
					 * if set due to an ExpandAsArray on the inquiry.caste reverse relationship
					 * @return Inquiry[]
					 */
					return $this->_objInquiryAsEArray;

				case '_ProfileAsE':
					/**
					 * Gets the value for the private _objProfileAsE (Read-Only)
					 * if set due to an expansion on the profile.caste reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsE;

				case '_ProfileAsEArray':
					/**
					 * Gets the value for the private _objProfileAsEArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.caste reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsEArray;

				case '_ProfileAsECat':
					/**
					 * Gets the value for the private _objProfileAsECat (Read-Only)
					 * if set due to an expansion on the profile.caste_cat reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsECat;

				case '_ProfileAsECatArray':
					/**
					 * Gets the value for the private _objProfileAsECatArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.caste_cat reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsECatArray;


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
				case 'Name':
					/**
					 * Sets the value for strName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MarName':
					/**
					 * Sets the value for strMarName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMarName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Abbrivation':
					/**
					 * Sets the value for strAbbrivation 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAbbrivation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Print':
					/**
					 * Sets the value for strPrint 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPrint = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Parent':
					/**
					 * Sets the value for intParent 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objParentObject = null;
						return ($this->intParent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ParentObject':
					/**
					 * Sets the value for the Cast object referenced by intParent 
					 * @param Cast $mixValue
					 * @return Cast
					 */
					if (is_null($mixValue)) {
						$this->intParent = null;
						$this->objParentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Cast object
						try {
							$mixValue = QType::Cast($mixValue, 'Cast');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Cast object
						if (is_null($mixValue->Idcast))
							throw new QCallerException('Unable to set an unsaved ParentObject for this Cast');

						// Update Local Member Variables
						$this->objParentObject = $mixValue;
						$this->intParent = $mixValue->Idcast;

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



		// Related Objects' Methods for AddressAsE
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsE as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsEArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcast)))
				return array();

			try {
				return Address::LoadArrayByCaste($this->intIdcast, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsE
		 * @return int
		*/
		public function CountAddressesAsE() {
			if ((is_null($this->intIdcast)))
				return 0;

			return Address::CountByCaste($this->intIdcast);
		}

		/**
		 * Associates a AddressAsE
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsE(Address $objAddress) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsE on this unsaved Cast.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsE on this Cast with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsE
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsE(Address $objAddress) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsE on this unsaved Cast.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsE on this Cast with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`caste` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Unassociates all AddressesAsE
		 * @return void
		*/
		public function UnassociateAllAddressesAsE() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsE on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`caste` = null
				WHERE
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes an associated AddressAsE
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsE(Address $objAddress) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsE on this unsaved Cast.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsE on this Cast with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsE
		 * @return void
		*/
		public function DeleteAllAddressesAsE() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsE on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}


		// Related Objects' Methods for ChildCast
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ChildCasts as an array of Cast objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Cast[]
		*/
		public function GetChildCastArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcast)))
				return array();

			try {
				return Cast::LoadArrayByParent($this->intIdcast, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ChildCasts
		 * @return int
		*/
		public function CountChildCasts() {
			if ((is_null($this->intIdcast)))
				return 0;

			return Cast::CountByParent($this->intIdcast);
		}

		/**
		 * Associates a ChildCast
		 * @param Cast $objCast
		 * @return void
		*/
		public function AssociateChildCast(Cast $objCast) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateChildCast on this unsaved Cast.');
			if ((is_null($objCast->Idcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateChildCast on this Cast with an unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cast`
				SET
					`parent` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
				WHERE
					`idcast` = ' . $objDatabase->SqlVariable($objCast->Idcast) . '
			');
		}

		/**
		 * Unassociates a ChildCast
		 * @param Cast $objCast
		 * @return void
		*/
		public function UnassociateChildCast(Cast $objCast) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildCast on this unsaved Cast.');
			if ((is_null($objCast->Idcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildCast on this Cast with an unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cast`
				SET
					`parent` = null
				WHERE
					`idcast` = ' . $objDatabase->SqlVariable($objCast->Idcast) . ' AND
					`parent` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Unassociates all ChildCasts
		 * @return void
		*/
		public function UnassociateAllChildCasts() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildCast on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`cast`
				SET
					`parent` = null
				WHERE
					`parent` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes an associated ChildCast
		 * @param Cast $objCast
		 * @return void
		*/
		public function DeleteAssociatedChildCast(Cast $objCast) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildCast on this unsaved Cast.');
			if ((is_null($objCast->Idcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildCast on this Cast with an unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cast`
				WHERE
					`idcast` = ' . $objDatabase->SqlVariable($objCast->Idcast) . ' AND
					`parent` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes all associated ChildCasts
		 * @return void
		*/
		public function DeleteAllChildCasts() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateChildCast on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`cast`
				WHERE
					`parent` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}


		// Related Objects' Methods for CertificateTempletAsCategory
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CertificateTempletsAsCategory as an array of CertificateTemplet objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTemplet[]
		*/
		public function GetCertificateTempletAsCategoryArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcast)))
				return array();

			try {
				return CertificateTemplet::LoadArrayByCategory($this->intIdcast, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CertificateTempletsAsCategory
		 * @return int
		*/
		public function CountCertificateTempletsAsCategory() {
			if ((is_null($this->intIdcast)))
				return 0;

			return CertificateTemplet::CountByCategory($this->intIdcast);
		}

		/**
		 * Associates a CertificateTempletAsCategory
		 * @param CertificateTemplet $objCertificateTemplet
		 * @return void
		*/
		public function AssociateCertificateTempletAsCategory(CertificateTemplet $objCertificateTemplet) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCertificateTempletAsCategory on this unsaved Cast.');
			if ((is_null($objCertificateTemplet->IdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCertificateTempletAsCategory on this Cast with an unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet`
				SET
					`category` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
				WHERE
					`idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTemplet->IdcertificateTemplet) . '
			');
		}

		/**
		 * Unassociates a CertificateTempletAsCategory
		 * @param CertificateTemplet $objCertificateTemplet
		 * @return void
		*/
		public function UnassociateCertificateTempletAsCategory(CertificateTemplet $objCertificateTemplet) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsCategory on this unsaved Cast.');
			if ((is_null($objCertificateTemplet->IdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsCategory on this Cast with an unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet`
				SET
					`category` = null
				WHERE
					`idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTemplet->IdcertificateTemplet) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Unassociates all CertificateTempletsAsCategory
		 * @return void
		*/
		public function UnassociateAllCertificateTempletsAsCategory() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsCategory on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet`
				SET
					`category` = null
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes an associated CertificateTempletAsCategory
		 * @param CertificateTemplet $objCertificateTemplet
		 * @return void
		*/
		public function DeleteAssociatedCertificateTempletAsCategory(CertificateTemplet $objCertificateTemplet) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsCategory on this unsaved Cast.');
			if ((is_null($objCertificateTemplet->IdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsCategory on this Cast with an unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet`
				WHERE
					`idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTemplet->IdcertificateTemplet) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes all associated CertificateTempletsAsCategory
		 * @return void
		*/
		public function DeleteAllCertificateTempletsAsCategory() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsCategory on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet`
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}


		// Related Objects' Methods for InquiryAsE
		//-------------------------------------------------------------------

		/**
		 * Gets all associated InquiriesAsE as an array of Inquiry objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public function GetInquiryAsEArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcast)))
				return array();

			try {
				return Inquiry::LoadArrayByCaste($this->intIdcast, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated InquiriesAsE
		 * @return int
		*/
		public function CountInquiriesAsE() {
			if ((is_null($this->intIdcast)))
				return 0;

			return Inquiry::CountByCaste($this->intIdcast);
		}

		/**
		 * Associates a InquiryAsE
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function AssociateInquiryAsE(Inquiry $objInquiry) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsE on this unsaved Cast.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsE on this Cast with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . '
			');
		}

		/**
		 * Unassociates a InquiryAsE
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function UnassociateInquiryAsE(Inquiry $objInquiry) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsE on this unsaved Cast.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsE on this Cast with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`caste` = null
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Unassociates all InquiriesAsE
		 * @return void
		*/
		public function UnassociateAllInquiriesAsE() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsE on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`caste` = null
				WHERE
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes an associated InquiryAsE
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function DeleteAssociatedInquiryAsE(Inquiry $objInquiry) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsE on this unsaved Cast.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsE on this Cast with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes all associated InquiriesAsE
		 * @return void
		*/
		public function DeleteAllInquiriesAsE() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsE on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}


		// Related Objects' Methods for ProfileAsE
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsE as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsEArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcast)))
				return array();

			try {
				return Profile::LoadArrayByCaste($this->intIdcast, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsE
		 * @return int
		*/
		public function CountProfilesAsE() {
			if ((is_null($this->intIdcast)))
				return 0;

			return Profile::CountByCaste($this->intIdcast);
		}

		/**
		 * Associates a ProfileAsE
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsE(Profile $objProfile) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsE on this unsaved Cast.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsE on this Cast with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsE
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsE(Profile $objProfile) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsE on this unsaved Cast.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsE on this Cast with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`caste` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsE
		 * @return void
		*/
		public function UnassociateAllProfilesAsE() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsE on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`caste` = null
				WHERE
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsE
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsE(Profile $objProfile) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsE on this unsaved Cast.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsE on this Cast with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsE
		 * @return void
		*/
		public function DeleteAllProfilesAsE() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsE on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`caste` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}


		// Related Objects' Methods for ProfileAsECat
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsECat as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsECatArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcast)))
				return array();

			try {
				return Profile::LoadArrayByCasteCat($this->intIdcast, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsECat
		 * @return int
		*/
		public function CountProfilesAsECat() {
			if ((is_null($this->intIdcast)))
				return 0;

			return Profile::CountByCasteCat($this->intIdcast);
		}

		/**
		 * Associates a ProfileAsECat
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsECat(Profile $objProfile) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsECat on this unsaved Cast.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsECat on this Cast with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsECat
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsECat(Profile $objProfile) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsECat on this unsaved Cast.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsECat on this Cast with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`caste_cat` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsECat
		 * @return void
		*/
		public function UnassociateAllProfilesAsECat() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsECat on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`caste_cat` = null
				WHERE
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsECat
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsECat(Profile $objProfile) {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsECat on this unsaved Cast.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsECat on this Cast with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsECat
		 * @return void
		*/
		public function DeleteAllProfilesAsECat() {
			if ((is_null($this->intIdcast)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsECat on this unsaved Cast.');

			// Get the Database Object for this Class
			$objDatabase = Cast::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdcast) . '
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
			return "cast";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Cast::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Cast"><sequence>';
			$strToReturn .= '<element name="Idcast" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="MarName" type="xsd:string"/>';
			$strToReturn .= '<element name="Abbrivation" type="xsd:string"/>';
			$strToReturn .= '<element name="Print" type="xsd:string"/>';
			$strToReturn .= '<element name="ParentObject" type="xsd1:Cast"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Cast', $strComplexTypeArray)) {
				$strComplexTypeArray['Cast'] = Cast::GetSoapComplexTypeXml();
				Cast::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Cast::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Cast();
			if (property_exists($objSoapObject, 'Idcast'))
				$objToReturn->intIdcast = $objSoapObject->Idcast;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'MarName'))
				$objToReturn->strMarName = $objSoapObject->MarName;
			if (property_exists($objSoapObject, 'Abbrivation'))
				$objToReturn->strAbbrivation = $objSoapObject->Abbrivation;
			if (property_exists($objSoapObject, 'Print'))
				$objToReturn->strPrint = $objSoapObject->Print;
			if ((property_exists($objSoapObject, 'ParentObject')) &&
				($objSoapObject->ParentObject))
				$objToReturn->ParentObject = Cast::GetObjectFromSoapObject($objSoapObject->ParentObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Cast::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objParentObject)
				$objObject->objParentObject = Cast::GetSoapObjectFromObject($objObject->objParentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParent = null;
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
			$iArray['Idcast'] = $this->intIdcast;
			$iArray['Name'] = $this->strName;
			$iArray['MarName'] = $this->strMarName;
			$iArray['Abbrivation'] = $this->strAbbrivation;
			$iArray['Print'] = $this->strPrint;
			$iArray['Parent'] = $this->intParent;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdcast ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idcast
     * @property-read QQNode $Name
     * @property-read QQNode $MarName
     * @property-read QQNode $Abbrivation
     * @property-read QQNode $Print
     * @property-read QQNode $Parent
     * @property-read QQNodeCast $ParentObject
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsE
     * @property-read QQReverseReferenceNodeCast $ChildCast
     * @property-read QQReverseReferenceNodeCertificateTemplet $CertificateTempletAsCategory
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsE
     * @property-read QQReverseReferenceNodeProfile $ProfileAsE
     * @property-read QQReverseReferenceNodeProfile $ProfileAsECat

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeCast extends QQNode {
		protected $strTableName = 'cast';
		protected $strPrimaryKey = 'idcast';
		protected $strClassName = 'Cast';
		public function __get($strName) {
			switch ($strName) {
				case 'Idcast':
					return new QQNode('idcast', 'Idcast', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'MarName':
					return new QQNode('mar_name', 'MarName', 'Blob', $this);
				case 'Abbrivation':
					return new QQNode('abbrivation', 'Abbrivation', 'Blob', $this);
				case 'Print':
					return new QQNode('print', 'Print', 'Blob', $this);
				case 'Parent':
					return new QQNode('parent', 'Parent', 'Integer', $this);
				case 'ParentObject':
					return new QQNodeCast('parent', 'ParentObject', 'Integer', $this);
				case 'AddressAsE':
					return new QQReverseReferenceNodeAddress($this, 'addressase', 'reverse_reference', 'caste');
				case 'ChildCast':
					return new QQReverseReferenceNodeCast($this, 'childcast', 'reverse_reference', 'parent');
				case 'CertificateTempletAsCategory':
					return new QQReverseReferenceNodeCertificateTemplet($this, 'certificatetempletascategory', 'reverse_reference', 'category');
				case 'InquiryAsE':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryase', 'reverse_reference', 'caste');
				case 'ProfileAsE':
					return new QQReverseReferenceNodeProfile($this, 'profilease', 'reverse_reference', 'caste');
				case 'ProfileAsECat':
					return new QQReverseReferenceNodeProfile($this, 'profileasecat', 'reverse_reference', 'caste_cat');

				case '_PrimaryKeyNode':
					return new QQNode('idcast', 'Idcast', 'Integer', $this);
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
     * @property-read QQNode $Idcast
     * @property-read QQNode $Name
     * @property-read QQNode $MarName
     * @property-read QQNode $Abbrivation
     * @property-read QQNode $Print
     * @property-read QQNode $Parent
     * @property-read QQNodeCast $ParentObject
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsE
     * @property-read QQReverseReferenceNodeCast $ChildCast
     * @property-read QQReverseReferenceNodeCertificateTemplet $CertificateTempletAsCategory
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsE
     * @property-read QQReverseReferenceNodeProfile $ProfileAsE
     * @property-read QQReverseReferenceNodeProfile $ProfileAsECat

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeCast extends QQReverseReferenceNode {
		protected $strTableName = 'cast';
		protected $strPrimaryKey = 'idcast';
		protected $strClassName = 'Cast';
		public function __get($strName) {
			switch ($strName) {
				case 'Idcast':
					return new QQNode('idcast', 'Idcast', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'MarName':
					return new QQNode('mar_name', 'MarName', 'string', $this);
				case 'Abbrivation':
					return new QQNode('abbrivation', 'Abbrivation', 'string', $this);
				case 'Print':
					return new QQNode('print', 'Print', 'string', $this);
				case 'Parent':
					return new QQNode('parent', 'Parent', 'integer', $this);
				case 'ParentObject':
					return new QQNodeCast('parent', 'ParentObject', 'integer', $this);
				case 'AddressAsE':
					return new QQReverseReferenceNodeAddress($this, 'addressase', 'reverse_reference', 'caste');
				case 'ChildCast':
					return new QQReverseReferenceNodeCast($this, 'childcast', 'reverse_reference', 'parent');
				case 'CertificateTempletAsCategory':
					return new QQReverseReferenceNodeCertificateTemplet($this, 'certificatetempletascategory', 'reverse_reference', 'category');
				case 'InquiryAsE':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryase', 'reverse_reference', 'caste');
				case 'ProfileAsE':
					return new QQReverseReferenceNodeProfile($this, 'profilease', 'reverse_reference', 'caste');
				case 'ProfileAsECat':
					return new QQReverseReferenceNodeProfile($this, 'profileasecat', 'reverse_reference', 'caste_cat');

				case '_PrimaryKeyNode':
					return new QQNode('idcast', 'Idcast', 'integer', $this);
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
