<?php
	/**
	 * The abstract MemberDocGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the MemberDoc subclass which
	 * extends this MemberDocGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the MemberDoc class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdmemberDoc the value for intIdmemberDoc (Read-Only PK)
	 * @property integer $Member the value for intMember 
	 * @property integer $Document the value for intDocument 
	 * @property string $Remark the value for strRemark 
	 * @property string $Scans the value for strScans 
	 * @property integer $Seq the value for intSeq 
	 * @property boolean $Required the value for blnRequired 
	 * @property integer $Meeting the value for intMeeting 
	 * @property integer $InOut the value for intInOut 
	 * @property string $DocName the value for strDocName 
	 * @property Ledger $MemberObject the value for the Ledger object referenced by intMember 
	 * @property Ledger $DocumentObject the value for the Ledger object referenced by intDocument 
	 * @property DocInOut $InOutObject the value for the DocInOut object referenced by intInOut 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MemberDocGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column member_doc.idmember_doc
		 * @var integer intIdmemberDoc
		 */
		protected $intIdmemberDoc;
		const IdmemberDocDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.member
		 * @var integer intMember
		 */
		protected $intMember;
		const MemberDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.document
		 * @var integer intDocument
		 */
		protected $intDocument;
		const DocumentDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.remark
		 * @var string strRemark
		 */
		protected $strRemark;
		const RemarkDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.scans
		 * @var string strScans
		 */
		protected $strScans;
		const ScansDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.seq
		 * @var integer intSeq
		 */
		protected $intSeq;
		const SeqDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.required
		 * @var boolean blnRequired
		 */
		protected $blnRequired;
		const RequiredDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.meeting
		 * @var integer intMeeting
		 */
		protected $intMeeting;
		const MeetingDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.in_out
		 * @var integer intInOut
		 */
		protected $intInOut;
		const InOutDefault = null;


		/**
		 * Protected member variable that maps to the database column member_doc.doc_name
		 * @var string strDocName
		 */
		protected $strDocName;
		const DocNameMaxLength = 255;
		const DocNameDefault = null;


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
		 * in the database column member_doc.member.
		 *
		 * NOTE: Always use the MemberObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objMemberObject
		 */
		protected $objMemberObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column member_doc.document.
		 *
		 * NOTE: Always use the DocumentObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objDocumentObject
		 */
		protected $objDocumentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column member_doc.in_out.
		 *
		 * NOTE: Always use the InOutObject property getter to correctly retrieve this DocInOut object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DocInOut objInOutObject
		 */
		protected $objInOutObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdmemberDoc = MemberDoc::IdmemberDocDefault;
			$this->intMember = MemberDoc::MemberDefault;
			$this->intDocument = MemberDoc::DocumentDefault;
			$this->strRemark = MemberDoc::RemarkDefault;
			$this->strScans = MemberDoc::ScansDefault;
			$this->intSeq = MemberDoc::SeqDefault;
			$this->blnRequired = MemberDoc::RequiredDefault;
			$this->intMeeting = MemberDoc::MeetingDefault;
			$this->intInOut = MemberDoc::InOutDefault;
			$this->strDocName = MemberDoc::DocNameDefault;
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
		 * Load a MemberDoc from PK Info
		 * @param integer $intIdmemberDoc
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc
		 */
		public static function Load($intIdmemberDoc, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'MemberDoc', $intIdmemberDoc);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = MemberDoc::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MemberDoc()->IdmemberDoc, $intIdmemberDoc)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all MemberDocs
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call MemberDoc::QueryArray to perform the LoadAll query
			try {
				return MemberDoc::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all MemberDocs
		 * @return int
		 */
		public static function CountAll() {
			// Call MemberDoc::QueryCount to perform the CountAll query
			return MemberDoc::QueryCount(QQ::All());
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
			$objDatabase = MemberDoc::GetDatabase();

			// Create/Build out the QueryBuilder object with MemberDoc-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'member_doc');

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
				MemberDoc::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('member_doc');

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
		 * Static Qcubed Query method to query for a single MemberDoc object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return MemberDoc the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MemberDoc::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new MemberDoc object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = MemberDoc::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return MemberDoc::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of MemberDoc objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return MemberDoc[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MemberDoc::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return MemberDoc::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = MemberDoc::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of MemberDoc objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MemberDoc::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = MemberDoc::GetDatabase();

			$strQuery = MemberDoc::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/memberdoc', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = MemberDoc::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this MemberDoc
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'member_doc';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idmember_doc', $strAliasPrefix . 'idmember_doc');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idmember_doc', $strAliasPrefix . 'idmember_doc');
			    $objBuilder->AddSelectItem($strTableName, 'member', $strAliasPrefix . 'member');
			    $objBuilder->AddSelectItem($strTableName, 'document', $strAliasPrefix . 'document');
			    $objBuilder->AddSelectItem($strTableName, 'remark', $strAliasPrefix . 'remark');
			    $objBuilder->AddSelectItem($strTableName, 'scans', $strAliasPrefix . 'scans');
			    $objBuilder->AddSelectItem($strTableName, 'seq', $strAliasPrefix . 'seq');
			    $objBuilder->AddSelectItem($strTableName, 'required', $strAliasPrefix . 'required');
			    $objBuilder->AddSelectItem($strTableName, 'meeting', $strAliasPrefix . 'meeting');
			    $objBuilder->AddSelectItem($strTableName, 'in_out', $strAliasPrefix . 'in_out');
			    $objBuilder->AddSelectItem($strTableName, 'doc_name', $strAliasPrefix . 'doc_name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a MemberDoc from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this MemberDoc::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return MemberDoc
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the MemberDoc object
			$objToReturn = new MemberDoc();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idmember_doc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdmemberDoc = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMember = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'document';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDocument = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'remark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRemark = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'scans';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strScans = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'seq';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSeq = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'required';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnRequired = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'meeting';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMeeting = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intInOut = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'doc_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDocName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdmemberDoc != $objPreviousItem->IdmemberDoc) {
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
				$strAliasPrefix = 'member_doc__';

			// Check for MemberObject Early Binding
			$strAlias = $strAliasPrefix . 'member__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMemberObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'member__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DocumentObject Early Binding
			$strAlias = $strAliasPrefix . 'document__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDocumentObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'document__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for InOutObject Early Binding
			$strAlias = $strAliasPrefix . 'in_out__iddoc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objInOutObject = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'in_out__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of MemberDocs from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return MemberDoc[]
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
					$objItem = MemberDoc::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = MemberDoc::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single MemberDoc object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return MemberDoc next row resulting from the query
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
			return MemberDoc::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single MemberDoc object,
		 * by IdmemberDoc Index(es)
		 * @param integer $intIdmemberDoc
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc
		*/
		public static function LoadByIdmemberDoc($intIdmemberDoc, $objOptionalClauses = null) {
			return MemberDoc::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MemberDoc()->IdmemberDoc, $intIdmemberDoc)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of MemberDoc objects,
		 * by Member Index(es)
		 * @param integer $intMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc[]
		*/
		public static function LoadArrayByMember($intMember, $objOptionalClauses = null) {
			// Call MemberDoc::QueryArray to perform the LoadArrayByMember query
			try {
				return MemberDoc::QueryArray(
					QQ::Equal(QQN::MemberDoc()->Member, $intMember),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count MemberDocs
		 * by Member Index(es)
		 * @param integer $intMember
		 * @return int
		*/
		public static function CountByMember($intMember) {
			// Call MemberDoc::QueryCount to perform the CountByMember query
			return MemberDoc::QueryCount(
				QQ::Equal(QQN::MemberDoc()->Member, $intMember)
			);
		}

		/**
		 * Load an array of MemberDoc objects,
		 * by InOut Index(es)
		 * @param integer $intInOut
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc[]
		*/
		public static function LoadArrayByInOut($intInOut, $objOptionalClauses = null) {
			// Call MemberDoc::QueryArray to perform the LoadArrayByInOut query
			try {
				return MemberDoc::QueryArray(
					QQ::Equal(QQN::MemberDoc()->InOut, $intInOut),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count MemberDocs
		 * by InOut Index(es)
		 * @param integer $intInOut
		 * @return int
		*/
		public static function CountByInOut($intInOut) {
			// Call MemberDoc::QueryCount to perform the CountByInOut query
			return MemberDoc::QueryCount(
				QQ::Equal(QQN::MemberDoc()->InOut, $intInOut)
			);
		}

		/**
		 * Load an array of MemberDoc objects,
		 * by Document Index(es)
		 * @param integer $intDocument
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc[]
		*/
		public static function LoadArrayByDocument($intDocument, $objOptionalClauses = null) {
			// Call MemberDoc::QueryArray to perform the LoadArrayByDocument query
			try {
				return MemberDoc::QueryArray(
					QQ::Equal(QQN::MemberDoc()->Document, $intDocument),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count MemberDocs
		 * by Document Index(es)
		 * @param integer $intDocument
		 * @return int
		*/
		public static function CountByDocument($intDocument) {
			// Call MemberDoc::QueryCount to perform the CountByDocument query
			return MemberDoc::QueryCount(
				QQ::Equal(QQN::MemberDoc()->Document, $intDocument)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this MemberDoc
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = MemberDoc::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `member_doc` (
							`member`,
							`document`,
							`remark`,
							`scans`,
							`seq`,
							`required`,
							`meeting`,
							`in_out`,
							`doc_name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intMember) . ',
							' . $objDatabase->SqlVariable($this->intDocument) . ',
							' . $objDatabase->SqlVariable($this->strRemark) . ',
							' . $objDatabase->SqlVariable($this->strScans) . ',
							' . $objDatabase->SqlVariable($this->intSeq) . ',
							' . $objDatabase->SqlVariable($this->blnRequired) . ',
							' . $objDatabase->SqlVariable($this->intMeeting) . ',
							' . $objDatabase->SqlVariable($this->intInOut) . ',
							' . $objDatabase->SqlVariable($this->strDocName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdmemberDoc = $objDatabase->InsertId('member_doc', 'idmember_doc');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`member_doc`
						SET
							`member` = ' . $objDatabase->SqlVariable($this->intMember) . ',
							`document` = ' . $objDatabase->SqlVariable($this->intDocument) . ',
							`remark` = ' . $objDatabase->SqlVariable($this->strRemark) . ',
							`scans` = ' . $objDatabase->SqlVariable($this->strScans) . ',
							`seq` = ' . $objDatabase->SqlVariable($this->intSeq) . ',
							`required` = ' . $objDatabase->SqlVariable($this->blnRequired) . ',
							`meeting` = ' . $objDatabase->SqlVariable($this->intMeeting) . ',
							`in_out` = ' . $objDatabase->SqlVariable($this->intInOut) . ',
							`doc_name` = ' . $objDatabase->SqlVariable($this->strDocName) . '
						WHERE
							`idmember_doc` = ' . $objDatabase->SqlVariable($this->intIdmemberDoc) . '
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
		 * Delete this MemberDoc
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this MemberDoc with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = MemberDoc::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`member_doc`
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($this->intIdmemberDoc) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this MemberDoc ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'MemberDoc', $this->intIdmemberDoc);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all MemberDocs
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = MemberDoc::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`member_doc`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate member_doc table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = MemberDoc::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `member_doc`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this MemberDoc from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved MemberDoc object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = MemberDoc::Load($this->intIdmemberDoc);

			// Update $this's local variables to match
			$this->Member = $objReloaded->Member;
			$this->Document = $objReloaded->Document;
			$this->strRemark = $objReloaded->strRemark;
			$this->strScans = $objReloaded->strScans;
			$this->intSeq = $objReloaded->intSeq;
			$this->blnRequired = $objReloaded->blnRequired;
			$this->intMeeting = $objReloaded->intMeeting;
			$this->InOut = $objReloaded->InOut;
			$this->strDocName = $objReloaded->strDocName;
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
				case 'IdmemberDoc':
					/**
					 * Gets the value for intIdmemberDoc (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdmemberDoc;

				case 'Member':
					/**
					 * Gets the value for intMember 
					 * @return integer
					 */
					return $this->intMember;

				case 'Document':
					/**
					 * Gets the value for intDocument 
					 * @return integer
					 */
					return $this->intDocument;

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

				case 'Meeting':
					/**
					 * Gets the value for intMeeting 
					 * @return integer
					 */
					return $this->intMeeting;

				case 'InOut':
					/**
					 * Gets the value for intInOut 
					 * @return integer
					 */
					return $this->intInOut;

				case 'DocName':
					/**
					 * Gets the value for strDocName 
					 * @return string
					 */
					return $this->strDocName;


				///////////////////
				// Member Objects
				///////////////////
				case 'MemberObject':
					/**
					 * Gets the value for the Ledger object referenced by intMember 
					 * @return Ledger
					 */
					try {
						if ((!$this->objMemberObject) && (!is_null($this->intMember)))
							$this->objMemberObject = Ledger::Load($this->intMember);
						return $this->objMemberObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DocumentObject':
					/**
					 * Gets the value for the Ledger object referenced by intDocument 
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

				case 'InOutObject':
					/**
					 * Gets the value for the DocInOut object referenced by intInOut 
					 * @return DocInOut
					 */
					try {
						if ((!$this->objInOutObject) && (!is_null($this->intInOut)))
							$this->objInOutObject = DocInOut::Load($this->intInOut);
						return $this->objInOutObject;
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

				case 'Document':
					/**
					 * Sets the value for intDocument 
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

				case 'Meeting':
					/**
					 * Sets the value for intMeeting 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMeeting = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InOut':
					/**
					 * Sets the value for intInOut 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objInOutObject = null;
						return ($this->intInOut = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DocName':
					/**
					 * Sets the value for strDocName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDocName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'MemberObject':
					/**
					 * Sets the value for the Ledger object referenced by intMember 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intMember = null;
						$this->objMemberObject = null;
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
							throw new QCallerException('Unable to set an unsaved MemberObject for this MemberDoc');

						// Update Local Member Variables
						$this->objMemberObject = $mixValue;
						$this->intMember = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DocumentObject':
					/**
					 * Sets the value for the Ledger object referenced by intDocument 
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
							throw new QCallerException('Unable to set an unsaved DocumentObject for this MemberDoc');

						// Update Local Member Variables
						$this->objDocumentObject = $mixValue;
						$this->intDocument = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'InOutObject':
					/**
					 * Sets the value for the DocInOut object referenced by intInOut 
					 * @param DocInOut $mixValue
					 * @return DocInOut
					 */
					if (is_null($mixValue)) {
						$this->intInOut = null;
						$this->objInOutObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DocInOut object
						try {
							$mixValue = QType::Cast($mixValue, 'DocInOut');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED DocInOut object
						if (is_null($mixValue->IddocInOut))
							throw new QCallerException('Unable to set an unsaved InOutObject for this MemberDoc');

						// Update Local Member Variables
						$this->objInOutObject = $mixValue;
						$this->intInOut = $mixValue->IddocInOut;

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
			return "member_doc";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[MemberDoc::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="MemberDoc"><sequence>';
			$strToReturn .= '<element name="IdmemberDoc" type="xsd:int"/>';
			$strToReturn .= '<element name="MemberObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="DocumentObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="Remark" type="xsd:string"/>';
			$strToReturn .= '<element name="Scans" type="xsd:string"/>';
			$strToReturn .= '<element name="Seq" type="xsd:int"/>';
			$strToReturn .= '<element name="Required" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Meeting" type="xsd:int"/>';
			$strToReturn .= '<element name="InOutObject" type="xsd1:DocInOut"/>';
			$strToReturn .= '<element name="DocName" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('MemberDoc', $strComplexTypeArray)) {
				$strComplexTypeArray['MemberDoc'] = MemberDoc::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				DocInOut::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, MemberDoc::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new MemberDoc();
			if (property_exists($objSoapObject, 'IdmemberDoc'))
				$objToReturn->intIdmemberDoc = $objSoapObject->IdmemberDoc;
			if ((property_exists($objSoapObject, 'MemberObject')) &&
				($objSoapObject->MemberObject))
				$objToReturn->MemberObject = Ledger::GetObjectFromSoapObject($objSoapObject->MemberObject);
			if ((property_exists($objSoapObject, 'DocumentObject')) &&
				($objSoapObject->DocumentObject))
				$objToReturn->DocumentObject = Ledger::GetObjectFromSoapObject($objSoapObject->DocumentObject);
			if (property_exists($objSoapObject, 'Remark'))
				$objToReturn->strRemark = $objSoapObject->Remark;
			if (property_exists($objSoapObject, 'Scans'))
				$objToReturn->strScans = $objSoapObject->Scans;
			if (property_exists($objSoapObject, 'Seq'))
				$objToReturn->intSeq = $objSoapObject->Seq;
			if (property_exists($objSoapObject, 'Required'))
				$objToReturn->blnRequired = $objSoapObject->Required;
			if (property_exists($objSoapObject, 'Meeting'))
				$objToReturn->intMeeting = $objSoapObject->Meeting;
			if ((property_exists($objSoapObject, 'InOutObject')) &&
				($objSoapObject->InOutObject))
				$objToReturn->InOutObject = DocInOut::GetObjectFromSoapObject($objSoapObject->InOutObject);
			if (property_exists($objSoapObject, 'DocName'))
				$objToReturn->strDocName = $objSoapObject->DocName;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, MemberDoc::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objMemberObject)
				$objObject->objMemberObject = Ledger::GetSoapObjectFromObject($objObject->objMemberObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMember = null;
			if ($objObject->objDocumentObject)
				$objObject->objDocumentObject = Ledger::GetSoapObjectFromObject($objObject->objDocumentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDocument = null;
			if ($objObject->objInOutObject)
				$objObject->objInOutObject = DocInOut::GetSoapObjectFromObject($objObject->objInOutObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intInOut = null;
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
			$iArray['IdmemberDoc'] = $this->intIdmemberDoc;
			$iArray['Member'] = $this->intMember;
			$iArray['Document'] = $this->intDocument;
			$iArray['Remark'] = $this->strRemark;
			$iArray['Scans'] = $this->strScans;
			$iArray['Seq'] = $this->intSeq;
			$iArray['Required'] = $this->blnRequired;
			$iArray['Meeting'] = $this->intMeeting;
			$iArray['InOut'] = $this->intInOut;
			$iArray['DocName'] = $this->strDocName;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdmemberDoc ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdmemberDoc
     * @property-read QQNode $Member
     * @property-read QQNodeLedger $MemberObject
     * @property-read QQNode $Document
     * @property-read QQNodeLedger $DocumentObject
     * @property-read QQNode $Remark
     * @property-read QQNode $Scans
     * @property-read QQNode $Seq
     * @property-read QQNode $Required
     * @property-read QQNode $Meeting
     * @property-read QQNode $InOut
     * @property-read QQNodeDocInOut $InOutObject
     * @property-read QQNode $DocName
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeMemberDoc extends QQNode {
		protected $strTableName = 'member_doc';
		protected $strPrimaryKey = 'idmember_doc';
		protected $strClassName = 'MemberDoc';
		public function __get($strName) {
			switch ($strName) {
				case 'IdmemberDoc':
					return new QQNode('idmember_doc', 'IdmemberDoc', 'Integer', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'Integer', $this);
				case 'MemberObject':
					return new QQNodeLedger('member', 'MemberObject', 'Integer', $this);
				case 'Document':
					return new QQNode('document', 'Document', 'Integer', $this);
				case 'DocumentObject':
					return new QQNodeLedger('document', 'DocumentObject', 'Integer', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'Blob', $this);
				case 'Scans':
					return new QQNode('scans', 'Scans', 'Blob', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'Integer', $this);
				case 'Required':
					return new QQNode('required', 'Required', 'Bit', $this);
				case 'Meeting':
					return new QQNode('meeting', 'Meeting', 'Integer', $this);
				case 'InOut':
					return new QQNode('in_out', 'InOut', 'Integer', $this);
				case 'InOutObject':
					return new QQNodeDocInOut('in_out', 'InOutObject', 'Integer', $this);
				case 'DocName':
					return new QQNode('doc_name', 'DocName', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idmember_doc', 'IdmemberDoc', 'Integer', $this);
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
     * @property-read QQNode $IdmemberDoc
     * @property-read QQNode $Member
     * @property-read QQNodeLedger $MemberObject
     * @property-read QQNode $Document
     * @property-read QQNodeLedger $DocumentObject
     * @property-read QQNode $Remark
     * @property-read QQNode $Scans
     * @property-read QQNode $Seq
     * @property-read QQNode $Required
     * @property-read QQNode $Meeting
     * @property-read QQNode $InOut
     * @property-read QQNodeDocInOut $InOutObject
     * @property-read QQNode $DocName
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeMemberDoc extends QQReverseReferenceNode {
		protected $strTableName = 'member_doc';
		protected $strPrimaryKey = 'idmember_doc';
		protected $strClassName = 'MemberDoc';
		public function __get($strName) {
			switch ($strName) {
				case 'IdmemberDoc':
					return new QQNode('idmember_doc', 'IdmemberDoc', 'integer', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'integer', $this);
				case 'MemberObject':
					return new QQNodeLedger('member', 'MemberObject', 'integer', $this);
				case 'Document':
					return new QQNode('document', 'Document', 'integer', $this);
				case 'DocumentObject':
					return new QQNodeLedger('document', 'DocumentObject', 'integer', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'string', $this);
				case 'Scans':
					return new QQNode('scans', 'Scans', 'string', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'integer', $this);
				case 'Required':
					return new QQNode('required', 'Required', 'boolean', $this);
				case 'Meeting':
					return new QQNode('meeting', 'Meeting', 'integer', $this);
				case 'InOut':
					return new QQNode('in_out', 'InOut', 'integer', $this);
				case 'InOutObject':
					return new QQNodeDocInOut('in_out', 'InOutObject', 'integer', $this);
				case 'DocName':
					return new QQNode('doc_name', 'DocName', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idmember_doc', 'IdmemberDoc', 'integer', $this);
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
