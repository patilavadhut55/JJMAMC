<?php
	/**
	 * The abstract AppDocsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AppDocs subclass which
	 * extends this AppDocsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AppDocs class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdappDocs the value for intIdappDocs (Read-Only PK)
	 * @property integer $Application the value for intApplication 
	 * @property integer $Document the value for intDocument (Not Null)
	 * @property string $Description the value for strDescription 
	 * @property string $Remark the value for strRemark 
	 * @property string $Scans the value for strScans 
	 * @property boolean $OnCertificate the value for blnOnCertificate 
	 * @property integer $Seq the value for intSeq 
	 * @property boolean $Required the value for blnRequired 
	 * @property integer $Member the value for intMember 
	 * @property Application $ApplicationObject the value for the Application object referenced by intApplication 
	 * @property Ledger $DocumentObject the value for the Ledger object referenced by intDocument (Not Null)
	 * @property Login $MemberObject the value for the Login object referenced by intMember 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AppDocsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column app_docs.idapp_docs
		 * @var integer intIdappDocs
		 */
		protected $intIdappDocs;
		const IdappDocsDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.application
		 * @var integer intApplication
		 */
		protected $intApplication;
		const ApplicationDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.document
		 * @var integer intDocument
		 */
		protected $intDocument;
		const DocumentDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.remark
		 * @var string strRemark
		 */
		protected $strRemark;
		const RemarkDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.scans
		 * @var string strScans
		 */
		protected $strScans;
		const ScansDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.on_certificate
		 * @var boolean blnOnCertificate
		 */
		protected $blnOnCertificate;
		const OnCertificateDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.seq
		 * @var integer intSeq
		 */
		protected $intSeq;
		const SeqDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.required
		 * @var boolean blnRequired
		 */
		protected $blnRequired;
		const RequiredDefault = null;


		/**
		 * Protected member variable that maps to the database column app_docs.member
		 * @var integer intMember
		 */
		protected $intMember;
		const MemberDefault = null;


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
		 * in the database column app_docs.application.
		 *
		 * NOTE: Always use the ApplicationObject property getter to correctly retrieve this Application object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Application objApplicationObject
		 */
		protected $objApplicationObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column app_docs.document.
		 *
		 * NOTE: Always use the DocumentObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objDocumentObject
		 */
		protected $objDocumentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column app_docs.member.
		 *
		 * NOTE: Always use the MemberObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objMemberObject
		 */
		protected $objMemberObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdappDocs = AppDocs::IdappDocsDefault;
			$this->intApplication = AppDocs::ApplicationDefault;
			$this->intDocument = AppDocs::DocumentDefault;
			$this->strDescription = AppDocs::DescriptionDefault;
			$this->strRemark = AppDocs::RemarkDefault;
			$this->strScans = AppDocs::ScansDefault;
			$this->blnOnCertificate = AppDocs::OnCertificateDefault;
			$this->intSeq = AppDocs::SeqDefault;
			$this->blnRequired = AppDocs::RequiredDefault;
			$this->intMember = AppDocs::MemberDefault;
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
		 * Load a AppDocs from PK Info
		 * @param integer $intIdappDocs
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs
		 */
		public static function Load($intIdappDocs, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AppDocs', $intIdappDocs);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AppDocs::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AppDocs()->IdappDocs, $intIdappDocs)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AppDocses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AppDocs::QueryArray to perform the LoadAll query
			try {
				return AppDocs::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AppDocses
		 * @return int
		 */
		public static function CountAll() {
			// Call AppDocs::QueryCount to perform the CountAll query
			return AppDocs::QueryCount(QQ::All());
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
			$objDatabase = AppDocs::GetDatabase();

			// Create/Build out the QueryBuilder object with AppDocs-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'app_docs');

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
				AppDocs::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('app_docs');

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
		 * Static Qcubed Query method to query for a single AppDocs object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AppDocs the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppDocs::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AppDocs object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AppDocs::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AppDocs::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AppDocs objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AppDocs[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppDocs::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AppDocs::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AppDocs::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AppDocs objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppDocs::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AppDocs::GetDatabase();

			$strQuery = AppDocs::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/appdocs', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AppDocs::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AppDocs
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'app_docs';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idapp_docs', $strAliasPrefix . 'idapp_docs');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idapp_docs', $strAliasPrefix . 'idapp_docs');
			    $objBuilder->AddSelectItem($strTableName, 'application', $strAliasPrefix . 'application');
			    $objBuilder->AddSelectItem($strTableName, 'document', $strAliasPrefix . 'document');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'remark', $strAliasPrefix . 'remark');
			    $objBuilder->AddSelectItem($strTableName, 'scans', $strAliasPrefix . 'scans');
			    $objBuilder->AddSelectItem($strTableName, 'on_certificate', $strAliasPrefix . 'on_certificate');
			    $objBuilder->AddSelectItem($strTableName, 'seq', $strAliasPrefix . 'seq');
			    $objBuilder->AddSelectItem($strTableName, 'required', $strAliasPrefix . 'required');
			    $objBuilder->AddSelectItem($strTableName, 'member', $strAliasPrefix . 'member');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AppDocs from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AppDocs::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AppDocs
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the AppDocs object
			$objToReturn = new AppDocs();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idapp_docs';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdappDocs = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'application';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intApplication = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'document';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDocument = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'remark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRemark = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'scans';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strScans = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'on_certificate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnOnCertificate = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'seq';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSeq = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'required';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnRequired = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMember = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdappDocs != $objPreviousItem->IdappDocs) {
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
				$strAliasPrefix = 'app_docs__';

			// Check for ApplicationObject Early Binding
			$strAlias = $strAliasPrefix . 'application__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objApplicationObject = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DocumentObject Early Binding
			$strAlias = $strAliasPrefix . 'document__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDocumentObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'document__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for MemberObject Early Binding
			$strAlias = $strAliasPrefix . 'member__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMemberObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'member__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of AppDocses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AppDocs[]
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
					$objItem = AppDocs::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AppDocs::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AppDocs object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AppDocs next row resulting from the query
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
			return AppDocs::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AppDocs object,
		 * by IdappDocs Index(es)
		 * @param integer $intIdappDocs
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs
		*/
		public static function LoadByIdappDocs($intIdappDocs, $objOptionalClauses = null) {
			return AppDocs::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AppDocs()->IdappDocs, $intIdappDocs)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of AppDocs objects,
		 * by Application Index(es)
		 * @param integer $intApplication
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs[]
		*/
		public static function LoadArrayByApplication($intApplication, $objOptionalClauses = null) {
			// Call AppDocs::QueryArray to perform the LoadArrayByApplication query
			try {
				return AppDocs::QueryArray(
					QQ::Equal(QQN::AppDocs()->Application, $intApplication),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppDocses
		 * by Application Index(es)
		 * @param integer $intApplication
		 * @return int
		*/
		public static function CountByApplication($intApplication) {
			// Call AppDocs::QueryCount to perform the CountByApplication query
			return AppDocs::QueryCount(
				QQ::Equal(QQN::AppDocs()->Application, $intApplication)
			);
		}

		/**
		 * Load an array of AppDocs objects,
		 * by Document Index(es)
		 * @param integer $intDocument
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs[]
		*/
		public static function LoadArrayByDocument($intDocument, $objOptionalClauses = null) {
			// Call AppDocs::QueryArray to perform the LoadArrayByDocument query
			try {
				return AppDocs::QueryArray(
					QQ::Equal(QQN::AppDocs()->Document, $intDocument),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppDocses
		 * by Document Index(es)
		 * @param integer $intDocument
		 * @return int
		*/
		public static function CountByDocument($intDocument) {
			// Call AppDocs::QueryCount to perform the CountByDocument query
			return AppDocs::QueryCount(
				QQ::Equal(QQN::AppDocs()->Document, $intDocument)
			);
		}

		/**
		 * Load an array of AppDocs objects,
		 * by Member Index(es)
		 * @param integer $intMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppDocs[]
		*/
		public static function LoadArrayByMember($intMember, $objOptionalClauses = null) {
			// Call AppDocs::QueryArray to perform the LoadArrayByMember query
			try {
				return AppDocs::QueryArray(
					QQ::Equal(QQN::AppDocs()->Member, $intMember),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppDocses
		 * by Member Index(es)
		 * @param integer $intMember
		 * @return int
		*/
		public static function CountByMember($intMember) {
			// Call AppDocs::QueryCount to perform the CountByMember query
			return AppDocs::QueryCount(
				QQ::Equal(QQN::AppDocs()->Member, $intMember)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this AppDocs
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AppDocs::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `app_docs` (
							`application`,
							`document`,
							`description`,
							`remark`,
							`scans`,
							`on_certificate`,
							`seq`,
							`required`,
							`member`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intApplication) . ',
							' . $objDatabase->SqlVariable($this->intDocument) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->strRemark) . ',
							' . $objDatabase->SqlVariable($this->strScans) . ',
							' . $objDatabase->SqlVariable($this->blnOnCertificate) . ',
							' . $objDatabase->SqlVariable($this->intSeq) . ',
							' . $objDatabase->SqlVariable($this->blnRequired) . ',
							' . $objDatabase->SqlVariable($this->intMember) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdappDocs = $objDatabase->InsertId('app_docs', 'idapp_docs');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`app_docs`
						SET
							`application` = ' . $objDatabase->SqlVariable($this->intApplication) . ',
							`document` = ' . $objDatabase->SqlVariable($this->intDocument) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`remark` = ' . $objDatabase->SqlVariable($this->strRemark) . ',
							`scans` = ' . $objDatabase->SqlVariable($this->strScans) . ',
							`on_certificate` = ' . $objDatabase->SqlVariable($this->blnOnCertificate) . ',
							`seq` = ' . $objDatabase->SqlVariable($this->intSeq) . ',
							`required` = ' . $objDatabase->SqlVariable($this->blnRequired) . ',
							`member` = ' . $objDatabase->SqlVariable($this->intMember) . '
						WHERE
							`idapp_docs` = ' . $objDatabase->SqlVariable($this->intIdappDocs) . '
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
		 * Delete this AppDocs
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdappDocs)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AppDocs with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AppDocs::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_docs`
				WHERE
					`idapp_docs` = ' . $objDatabase->SqlVariable($this->intIdappDocs) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AppDocs ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AppDocs', $this->intIdappDocs);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AppDocses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AppDocs::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_docs`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate app_docs table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AppDocs::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `app_docs`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AppDocs from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AppDocs object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AppDocs::Load($this->intIdappDocs);

			// Update $this's local variables to match
			$this->Application = $objReloaded->Application;
			$this->Document = $objReloaded->Document;
			$this->strDescription = $objReloaded->strDescription;
			$this->strRemark = $objReloaded->strRemark;
			$this->strScans = $objReloaded->strScans;
			$this->blnOnCertificate = $objReloaded->blnOnCertificate;
			$this->intSeq = $objReloaded->intSeq;
			$this->blnRequired = $objReloaded->blnRequired;
			$this->Member = $objReloaded->Member;
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
				case 'IdappDocs':
					/**
					 * Gets the value for intIdappDocs (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdappDocs;

				case 'Application':
					/**
					 * Gets the value for intApplication 
					 * @return integer
					 */
					return $this->intApplication;

				case 'Document':
					/**
					 * Gets the value for intDocument (Not Null)
					 * @return integer
					 */
					return $this->intDocument;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'Remark':
					/**
					 * Gets the value for strRemark 
					 * @return string
					 */
					return $this->strRemark;

				case 'Scans':
					/**
					 * Gets the value for strScans 
					 * @return string
					 */
					return $this->strScans;

				case 'OnCertificate':
					/**
					 * Gets the value for blnOnCertificate 
					 * @return boolean
					 */
					return $this->blnOnCertificate;

				case 'Seq':
					/**
					 * Gets the value for intSeq 
					 * @return integer
					 */
					return $this->intSeq;

				case 'Required':
					/**
					 * Gets the value for blnRequired 
					 * @return boolean
					 */
					return $this->blnRequired;

				case 'Member':
					/**
					 * Gets the value for intMember 
					 * @return integer
					 */
					return $this->intMember;


				///////////////////
				// Member Objects
				///////////////////
				case 'ApplicationObject':
					/**
					 * Gets the value for the Application object referenced by intApplication 
					 * @return Application
					 */
					try {
						if ((!$this->objApplicationObject) && (!is_null($this->intApplication)))
							$this->objApplicationObject = Application::Load($this->intApplication);
						return $this->objApplicationObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DocumentObject':
					/**
					 * Gets the value for the Ledger object referenced by intDocument (Not Null)
					 * @return Ledger
					 */
					try {
						if ((!$this->objDocumentObject) && (!is_null($this->intDocument)))
							$this->objDocumentObject = Ledger::Load($this->intDocument);
						return $this->objDocumentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MemberObject':
					/**
					 * Gets the value for the Login object referenced by intMember 
					 * @return Login
					 */
					try {
						if ((!$this->objMemberObject) && (!is_null($this->intMember)))
							$this->objMemberObject = Login::Load($this->intMember);
						return $this->objMemberObject;
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
				case 'Application':
					/**
					 * Sets the value for intApplication 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objApplicationObject = null;
						return ($this->intApplication = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Document':
					/**
					 * Sets the value for intDocument (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDocumentObject = null;
						return ($this->intDocument = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					/**
					 * Sets the value for strDescription 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Remark':
					/**
					 * Sets the value for strRemark 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRemark = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Scans':
					/**
					 * Sets the value for strScans 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strScans = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OnCertificate':
					/**
					 * Sets the value for blnOnCertificate 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnOnCertificate = QType::Cast($mixValue, QType::Boolean));
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

				case 'Required':
					/**
					 * Sets the value for blnRequired 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnRequired = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Member':
					/**
					 * Sets the value for intMember 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMemberObject = null;
						return ($this->intMember = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ApplicationObject':
					/**
					 * Sets the value for the Application object referenced by intApplication 
					 * @param Application $mixValue
					 * @return Application
					 */
					if (is_null($mixValue)) {
						$this->intApplication = null;
						$this->objApplicationObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Application object
						try {
							$mixValue = QType::Cast($mixValue, 'Application');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Application object
						if (is_null($mixValue->Idapplication))
							throw new QCallerException('Unable to set an unsaved ApplicationObject for this AppDocs');

						// Update Local Member Variables
						$this->objApplicationObject = $mixValue;
						$this->intApplication = $mixValue->Idapplication;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DocumentObject':
					/**
					 * Sets the value for the Ledger object referenced by intDocument (Not Null)
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intDocument = null;
						$this->objDocumentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved DocumentObject for this AppDocs');

						// Update Local Member Variables
						$this->objDocumentObject = $mixValue;
						$this->intDocument = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'MemberObject':
					/**
					 * Sets the value for the Login object referenced by intMember 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intMember = null;
						$this->objMemberObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Login object
						try {
							$mixValue = QType::Cast($mixValue, 'Login');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Login object
						if (is_null($mixValue->Idlogin))
							throw new QCallerException('Unable to set an unsaved MemberObject for this AppDocs');

						// Update Local Member Variables
						$this->objMemberObject = $mixValue;
						$this->intMember = $mixValue->Idlogin;

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
			return "app_docs";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AppDocs::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AppDocs"><sequence>';
			$strToReturn .= '<element name="IdappDocs" type="xsd:int"/>';
			$strToReturn .= '<element name="ApplicationObject" type="xsd1:Application"/>';
			$strToReturn .= '<element name="DocumentObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="Remark" type="xsd:string"/>';
			$strToReturn .= '<element name="Scans" type="xsd:string"/>';
			$strToReturn .= '<element name="OnCertificate" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Seq" type="xsd:int"/>';
			$strToReturn .= '<element name="Required" type="xsd:boolean"/>';
			$strToReturn .= '<element name="MemberObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AppDocs', $strComplexTypeArray)) {
				$strComplexTypeArray['AppDocs'] = AppDocs::GetSoapComplexTypeXml();
				Application::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AppDocs::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AppDocs();
			if (property_exists($objSoapObject, 'IdappDocs'))
				$objToReturn->intIdappDocs = $objSoapObject->IdappDocs;
			if ((property_exists($objSoapObject, 'ApplicationObject')) &&
				($objSoapObject->ApplicationObject))
				$objToReturn->ApplicationObject = Application::GetObjectFromSoapObject($objSoapObject->ApplicationObject);
			if ((property_exists($objSoapObject, 'DocumentObject')) &&
				($objSoapObject->DocumentObject))
				$objToReturn->DocumentObject = Ledger::GetObjectFromSoapObject($objSoapObject->DocumentObject);
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'Remark'))
				$objToReturn->strRemark = $objSoapObject->Remark;
			if (property_exists($objSoapObject, 'Scans'))
				$objToReturn->strScans = $objSoapObject->Scans;
			if (property_exists($objSoapObject, 'OnCertificate'))
				$objToReturn->blnOnCertificate = $objSoapObject->OnCertificate;
			if (property_exists($objSoapObject, 'Seq'))
				$objToReturn->intSeq = $objSoapObject->Seq;
			if (property_exists($objSoapObject, 'Required'))
				$objToReturn->blnRequired = $objSoapObject->Required;
			if ((property_exists($objSoapObject, 'MemberObject')) &&
				($objSoapObject->MemberObject))
				$objToReturn->MemberObject = Login::GetObjectFromSoapObject($objSoapObject->MemberObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AppDocs::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objApplicationObject)
				$objObject->objApplicationObject = Application::GetSoapObjectFromObject($objObject->objApplicationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intApplication = null;
			if ($objObject->objDocumentObject)
				$objObject->objDocumentObject = Ledger::GetSoapObjectFromObject($objObject->objDocumentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDocument = null;
			if ($objObject->objMemberObject)
				$objObject->objMemberObject = Login::GetSoapObjectFromObject($objObject->objMemberObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMember = null;
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
			$iArray['IdappDocs'] = $this->intIdappDocs;
			$iArray['Application'] = $this->intApplication;
			$iArray['Document'] = $this->intDocument;
			$iArray['Description'] = $this->strDescription;
			$iArray['Remark'] = $this->strRemark;
			$iArray['Scans'] = $this->strScans;
			$iArray['OnCertificate'] = $this->blnOnCertificate;
			$iArray['Seq'] = $this->intSeq;
			$iArray['Required'] = $this->blnRequired;
			$iArray['Member'] = $this->intMember;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdappDocs ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdappDocs
     * @property-read QQNode $Application
     * @property-read QQNodeApplication $ApplicationObject
     * @property-read QQNode $Document
     * @property-read QQNodeLedger $DocumentObject
     * @property-read QQNode $Description
     * @property-read QQNode $Remark
     * @property-read QQNode $Scans
     * @property-read QQNode $OnCertificate
     * @property-read QQNode $Seq
     * @property-read QQNode $Required
     * @property-read QQNode $Member
     * @property-read QQNodeLogin $MemberObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAppDocs extends QQNode {
		protected $strTableName = 'app_docs';
		protected $strPrimaryKey = 'idapp_docs';
		protected $strClassName = 'AppDocs';
		public function __get($strName) {
			switch ($strName) {
				case 'IdappDocs':
					return new QQNode('idapp_docs', 'IdappDocs', 'Integer', $this);
				case 'Application':
					return new QQNode('application', 'Application', 'Integer', $this);
				case 'ApplicationObject':
					return new QQNodeApplication('application', 'ApplicationObject', 'Integer', $this);
				case 'Document':
					return new QQNode('document', 'Document', 'Integer', $this);
				case 'DocumentObject':
					return new QQNodeLedger('document', 'DocumentObject', 'Integer', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'Blob', $this);
				case 'Scans':
					return new QQNode('scans', 'Scans', 'Blob', $this);
				case 'OnCertificate':
					return new QQNode('on_certificate', 'OnCertificate', 'Bit', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'Integer', $this);
				case 'Required':
					return new QQNode('required', 'Required', 'Bit', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'Integer', $this);
				case 'MemberObject':
					return new QQNodeLogin('member', 'MemberObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idapp_docs', 'IdappDocs', 'Integer', $this);
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
     * @property-read QQNode $IdappDocs
     * @property-read QQNode $Application
     * @property-read QQNodeApplication $ApplicationObject
     * @property-read QQNode $Document
     * @property-read QQNodeLedger $DocumentObject
     * @property-read QQNode $Description
     * @property-read QQNode $Remark
     * @property-read QQNode $Scans
     * @property-read QQNode $OnCertificate
     * @property-read QQNode $Seq
     * @property-read QQNode $Required
     * @property-read QQNode $Member
     * @property-read QQNodeLogin $MemberObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAppDocs extends QQReverseReferenceNode {
		protected $strTableName = 'app_docs';
		protected $strPrimaryKey = 'idapp_docs';
		protected $strClassName = 'AppDocs';
		public function __get($strName) {
			switch ($strName) {
				case 'IdappDocs':
					return new QQNode('idapp_docs', 'IdappDocs', 'integer', $this);
				case 'Application':
					return new QQNode('application', 'Application', 'integer', $this);
				case 'ApplicationObject':
					return new QQNodeApplication('application', 'ApplicationObject', 'integer', $this);
				case 'Document':
					return new QQNode('document', 'Document', 'integer', $this);
				case 'DocumentObject':
					return new QQNodeLedger('document', 'DocumentObject', 'integer', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'string', $this);
				case 'Scans':
					return new QQNode('scans', 'Scans', 'string', $this);
				case 'OnCertificate':
					return new QQNode('on_certificate', 'OnCertificate', 'boolean', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'integer', $this);
				case 'Required':
					return new QQNode('required', 'Required', 'boolean', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'integer', $this);
				case 'MemberObject':
					return new QQNodeLogin('member', 'MemberObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idapp_docs', 'IdappDocs', 'integer', $this);
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
