<?php
	/**
	 * The abstract TempletDocumentsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TempletDocuments subclass which
	 * extends this TempletDocumentsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TempletDocuments class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdtempletDocuments the value for intIdtempletDocuments (Read-Only PK)
	 * @property integer $Code the value for intCode (Not Null)
	 * @property integer $CertificateTemplet the value for intCertificateTemplet (Not Null)
	 * @property integer $Document the value for intDocument (Not Null)
	 * @property string $Description the value for strDescription 
	 * @property boolean $ShowOnCertificate the value for blnShowOnCertificate 
	 * @property boolean $Required the value for blnRequired 
	 * @property CertificateTemplet $CertificateTempletObject the value for the CertificateTemplet object referenced by intCertificateTemplet (Not Null)
	 * @property Ledger $DocumentObject the value for the Ledger object referenced by intDocument (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TempletDocumentsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column templet_documents.idtemplet_documents
		 * @var integer intIdtempletDocuments
		 */
		protected $intIdtempletDocuments;
		const IdtempletDocumentsDefault = null;


		/**
		 * Protected member variable that maps to the database column templet_documents.code
		 * @var integer intCode
		 */
		protected $intCode;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column templet_documents.certificate_templet
		 * @var integer intCertificateTemplet
		 */
		protected $intCertificateTemplet;
		const CertificateTempletDefault = null;


		/**
		 * Protected member variable that maps to the database column templet_documents.document
		 * @var integer intDocument
		 */
		protected $intDocument;
		const DocumentDefault = null;


		/**
		 * Protected member variable that maps to the database column templet_documents.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column templet_documents.show_on_certificate
		 * @var boolean blnShowOnCertificate
		 */
		protected $blnShowOnCertificate;
		const ShowOnCertificateDefault = null;


		/**
		 * Protected member variable that maps to the database column templet_documents.required
		 * @var boolean blnRequired
		 */
		protected $blnRequired;
		const RequiredDefault = null;


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
		 * in the database column templet_documents.certificate_templet.
		 *
		 * NOTE: Always use the CertificateTempletObject property getter to correctly retrieve this CertificateTemplet object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CertificateTemplet objCertificateTempletObject
		 */
		protected $objCertificateTempletObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column templet_documents.document.
		 *
		 * NOTE: Always use the DocumentObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objDocumentObject
		 */
		protected $objDocumentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdtempletDocuments = TempletDocuments::IdtempletDocumentsDefault;
			$this->intCode = TempletDocuments::CodeDefault;
			$this->intCertificateTemplet = TempletDocuments::CertificateTempletDefault;
			$this->intDocument = TempletDocuments::DocumentDefault;
			$this->strDescription = TempletDocuments::DescriptionDefault;
			$this->blnShowOnCertificate = TempletDocuments::ShowOnCertificateDefault;
			$this->blnRequired = TempletDocuments::RequiredDefault;
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
		 * Load a TempletDocuments from PK Info
		 * @param integer $intIdtempletDocuments
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempletDocuments
		 */
		public static function Load($intIdtempletDocuments, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'TempletDocuments', $intIdtempletDocuments);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = TempletDocuments::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TempletDocuments()->IdtempletDocuments, $intIdtempletDocuments)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all TempletDocumentses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempletDocuments[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call TempletDocuments::QueryArray to perform the LoadAll query
			try {
				return TempletDocuments::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TempletDocumentses
		 * @return int
		 */
		public static function CountAll() {
			// Call TempletDocuments::QueryCount to perform the CountAll query
			return TempletDocuments::QueryCount(QQ::All());
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
			$objDatabase = TempletDocuments::GetDatabase();

			// Create/Build out the QueryBuilder object with TempletDocuments-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'templet_documents');

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
				TempletDocuments::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('templet_documents');

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
		 * Static Qcubed Query method to query for a single TempletDocuments object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TempletDocuments the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TempletDocuments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new TempletDocuments object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TempletDocuments::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return TempletDocuments::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of TempletDocuments objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TempletDocuments[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TempletDocuments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return TempletDocuments::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = TempletDocuments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of TempletDocuments objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TempletDocuments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = TempletDocuments::GetDatabase();

			$strQuery = TempletDocuments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/templetdocuments', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = TempletDocuments::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this TempletDocuments
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'templet_documents';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idtemplet_documents', $strAliasPrefix . 'idtemplet_documents');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idtemplet_documents', $strAliasPrefix . 'idtemplet_documents');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'certificate_templet', $strAliasPrefix . 'certificate_templet');
			    $objBuilder->AddSelectItem($strTableName, 'document', $strAliasPrefix . 'document');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'show_on_certificate', $strAliasPrefix . 'show_on_certificate');
			    $objBuilder->AddSelectItem($strTableName, 'required', $strAliasPrefix . 'required');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a TempletDocuments from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TempletDocuments::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return TempletDocuments
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the TempletDocuments object
			$objToReturn = new TempletDocuments();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idtemplet_documents';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdtempletDocuments = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'certificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCertificateTemplet = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'document';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDocument = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'show_on_certificate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnShowOnCertificate = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'required';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnRequired = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdtempletDocuments != $objPreviousItem->IdtempletDocuments) {
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
				$strAliasPrefix = 'templet_documents__';

			// Check for CertificateTempletObject Early Binding
			$strAlias = $strAliasPrefix . 'certificate_templet__idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCertificateTempletObject = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificate_templet__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DocumentObject Early Binding
			$strAlias = $strAliasPrefix . 'document__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDocumentObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'document__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of TempletDocumentses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return TempletDocuments[]
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
					$objItem = TempletDocuments::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TempletDocuments::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single TempletDocuments object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TempletDocuments next row resulting from the query
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
			return TempletDocuments::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single TempletDocuments object,
		 * by IdtempletDocuments Index(es)
		 * @param integer $intIdtempletDocuments
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempletDocuments
		*/
		public static function LoadByIdtempletDocuments($intIdtempletDocuments, $objOptionalClauses = null) {
			return TempletDocuments::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TempletDocuments()->IdtempletDocuments, $intIdtempletDocuments)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of TempletDocuments objects,
		 * by CertificateTemplet Index(es)
		 * @param integer $intCertificateTemplet
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempletDocuments[]
		*/
		public static function LoadArrayByCertificateTemplet($intCertificateTemplet, $objOptionalClauses = null) {
			// Call TempletDocuments::QueryArray to perform the LoadArrayByCertificateTemplet query
			try {
				return TempletDocuments::QueryArray(
					QQ::Equal(QQN::TempletDocuments()->CertificateTemplet, $intCertificateTemplet),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TempletDocumentses
		 * by CertificateTemplet Index(es)
		 * @param integer $intCertificateTemplet
		 * @return int
		*/
		public static function CountByCertificateTemplet($intCertificateTemplet) {
			// Call TempletDocuments::QueryCount to perform the CountByCertificateTemplet query
			return TempletDocuments::QueryCount(
				QQ::Equal(QQN::TempletDocuments()->CertificateTemplet, $intCertificateTemplet)
			);
		}

		/**
		 * Load an array of TempletDocuments objects,
		 * by Document Index(es)
		 * @param integer $intDocument
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempletDocuments[]
		*/
		public static function LoadArrayByDocument($intDocument, $objOptionalClauses = null) {
			// Call TempletDocuments::QueryArray to perform the LoadArrayByDocument query
			try {
				return TempletDocuments::QueryArray(
					QQ::Equal(QQN::TempletDocuments()->Document, $intDocument),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TempletDocumentses
		 * by Document Index(es)
		 * @param integer $intDocument
		 * @return int
		*/
		public static function CountByDocument($intDocument) {
			// Call TempletDocuments::QueryCount to perform the CountByDocument query
			return TempletDocuments::QueryCount(
				QQ::Equal(QQN::TempletDocuments()->Document, $intDocument)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this TempletDocuments
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TempletDocuments::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `templet_documents` (
							`code`,
							`certificate_templet`,
							`document`,
							`description`,
							`show_on_certificate`,
							`required`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCode) . ',
							' . $objDatabase->SqlVariable($this->intCertificateTemplet) . ',
							' . $objDatabase->SqlVariable($this->intDocument) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->blnShowOnCertificate) . ',
							' . $objDatabase->SqlVariable($this->blnRequired) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdtempletDocuments = $objDatabase->InsertId('templet_documents', 'idtemplet_documents');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`templet_documents`
						SET
							`code` = ' . $objDatabase->SqlVariable($this->intCode) . ',
							`certificate_templet` = ' . $objDatabase->SqlVariable($this->intCertificateTemplet) . ',
							`document` = ' . $objDatabase->SqlVariable($this->intDocument) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`show_on_certificate` = ' . $objDatabase->SqlVariable($this->blnShowOnCertificate) . ',
							`required` = ' . $objDatabase->SqlVariable($this->blnRequired) . '
						WHERE
							`idtemplet_documents` = ' . $objDatabase->SqlVariable($this->intIdtempletDocuments) . '
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
		 * Delete this TempletDocuments
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdtempletDocuments)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TempletDocuments with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TempletDocuments::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`templet_documents`
				WHERE
					`idtemplet_documents` = ' . $objDatabase->SqlVariable($this->intIdtempletDocuments) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this TempletDocuments ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'TempletDocuments', $this->intIdtempletDocuments);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all TempletDocumentses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TempletDocuments::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`templet_documents`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate templet_documents table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TempletDocuments::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `templet_documents`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this TempletDocuments from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TempletDocuments object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = TempletDocuments::Load($this->intIdtempletDocuments);

			// Update $this's local variables to match
			$this->intCode = $objReloaded->intCode;
			$this->CertificateTemplet = $objReloaded->CertificateTemplet;
			$this->Document = $objReloaded->Document;
			$this->strDescription = $objReloaded->strDescription;
			$this->blnShowOnCertificate = $objReloaded->blnShowOnCertificate;
			$this->blnRequired = $objReloaded->blnRequired;
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
				case 'IdtempletDocuments':
					/**
					 * Gets the value for intIdtempletDocuments (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdtempletDocuments;

				case 'Code':
					/**
					 * Gets the value for intCode (Not Null)
					 * @return integer
					 */
					return $this->intCode;

				case 'CertificateTemplet':
					/**
					 * Gets the value for intCertificateTemplet (Not Null)
					 * @return integer
					 */
					return $this->intCertificateTemplet;

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

				case 'ShowOnCertificate':
					/**
					 * Gets the value for blnShowOnCertificate 
					 * @return boolean
					 */
					return $this->blnShowOnCertificate;

				case 'Required':
					/**
					 * Gets the value for blnRequired 
					 * @return boolean
					 */
					return $this->blnRequired;


				///////////////////
				// Member Objects
				///////////////////
				case 'CertificateTempletObject':
					/**
					 * Gets the value for the CertificateTemplet object referenced by intCertificateTemplet (Not Null)
					 * @return CertificateTemplet
					 */
					try {
						if ((!$this->objCertificateTempletObject) && (!is_null($this->intCertificateTemplet)))
							$this->objCertificateTempletObject = CertificateTemplet::Load($this->intCertificateTemplet);
						return $this->objCertificateTempletObject;
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
				case 'Code':
					/**
					 * Sets the value for intCode (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCode = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CertificateTemplet':
					/**
					 * Sets the value for intCertificateTemplet (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCertificateTempletObject = null;
						return ($this->intCertificateTemplet = QType::Cast($mixValue, QType::Integer));
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

				case 'ShowOnCertificate':
					/**
					 * Sets the value for blnShowOnCertificate 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnShowOnCertificate = QType::Cast($mixValue, QType::Boolean));
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


				///////////////////
				// Member Objects
				///////////////////
				case 'CertificateTempletObject':
					/**
					 * Sets the value for the CertificateTemplet object referenced by intCertificateTemplet (Not Null)
					 * @param CertificateTemplet $mixValue
					 * @return CertificateTemplet
					 */
					if (is_null($mixValue)) {
						$this->intCertificateTemplet = null;
						$this->objCertificateTempletObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CertificateTemplet object
						try {
							$mixValue = QType::Cast($mixValue, 'CertificateTemplet');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CertificateTemplet object
						if (is_null($mixValue->IdcertificateTemplet))
							throw new QCallerException('Unable to set an unsaved CertificateTempletObject for this TempletDocuments');

						// Update Local Member Variables
						$this->objCertificateTempletObject = $mixValue;
						$this->intCertificateTemplet = $mixValue->IdcertificateTemplet;

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
							throw new QCallerException('Unable to set an unsaved DocumentObject for this TempletDocuments');

						// Update Local Member Variables
						$this->objDocumentObject = $mixValue;
						$this->intDocument = $mixValue->Idledger;

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
			return "templet_documents";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[TempletDocuments::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="TempletDocuments"><sequence>';
			$strToReturn .= '<element name="IdtempletDocuments" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:int"/>';
			$strToReturn .= '<element name="CertificateTempletObject" type="xsd1:CertificateTemplet"/>';
			$strToReturn .= '<element name="DocumentObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="ShowOnCertificate" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Required" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TempletDocuments', $strComplexTypeArray)) {
				$strComplexTypeArray['TempletDocuments'] = TempletDocuments::GetSoapComplexTypeXml();
				CertificateTemplet::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TempletDocuments::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TempletDocuments();
			if (property_exists($objSoapObject, 'IdtempletDocuments'))
				$objToReturn->intIdtempletDocuments = $objSoapObject->IdtempletDocuments;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->intCode = $objSoapObject->Code;
			if ((property_exists($objSoapObject, 'CertificateTempletObject')) &&
				($objSoapObject->CertificateTempletObject))
				$objToReturn->CertificateTempletObject = CertificateTemplet::GetObjectFromSoapObject($objSoapObject->CertificateTempletObject);
			if ((property_exists($objSoapObject, 'DocumentObject')) &&
				($objSoapObject->DocumentObject))
				$objToReturn->DocumentObject = Ledger::GetObjectFromSoapObject($objSoapObject->DocumentObject);
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'ShowOnCertificate'))
				$objToReturn->blnShowOnCertificate = $objSoapObject->ShowOnCertificate;
			if (property_exists($objSoapObject, 'Required'))
				$objToReturn->blnRequired = $objSoapObject->Required;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TempletDocuments::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCertificateTempletObject)
				$objObject->objCertificateTempletObject = CertificateTemplet::GetSoapObjectFromObject($objObject->objCertificateTempletObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCertificateTemplet = null;
			if ($objObject->objDocumentObject)
				$objObject->objDocumentObject = Ledger::GetSoapObjectFromObject($objObject->objDocumentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDocument = null;
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
			$iArray['IdtempletDocuments'] = $this->intIdtempletDocuments;
			$iArray['Code'] = $this->intCode;
			$iArray['CertificateTemplet'] = $this->intCertificateTemplet;
			$iArray['Document'] = $this->intDocument;
			$iArray['Description'] = $this->strDescription;
			$iArray['ShowOnCertificate'] = $this->blnShowOnCertificate;
			$iArray['Required'] = $this->blnRequired;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdtempletDocuments ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdtempletDocuments
     * @property-read QQNode $Code
     * @property-read QQNode $CertificateTemplet
     * @property-read QQNodeCertificateTemplet $CertificateTempletObject
     * @property-read QQNode $Document
     * @property-read QQNodeLedger $DocumentObject
     * @property-read QQNode $Description
     * @property-read QQNode $ShowOnCertificate
     * @property-read QQNode $Required
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTempletDocuments extends QQNode {
		protected $strTableName = 'templet_documents';
		protected $strPrimaryKey = 'idtemplet_documents';
		protected $strClassName = 'TempletDocuments';
		public function __get($strName) {
			switch ($strName) {
				case 'IdtempletDocuments':
					return new QQNode('idtemplet_documents', 'IdtempletDocuments', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'Integer', $this);
				case 'CertificateTemplet':
					return new QQNode('certificate_templet', 'CertificateTemplet', 'Integer', $this);
				case 'CertificateTempletObject':
					return new QQNodeCertificateTemplet('certificate_templet', 'CertificateTempletObject', 'Integer', $this);
				case 'Document':
					return new QQNode('document', 'Document', 'Integer', $this);
				case 'DocumentObject':
					return new QQNodeLedger('document', 'DocumentObject', 'Integer', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'ShowOnCertificate':
					return new QQNode('show_on_certificate', 'ShowOnCertificate', 'Bit', $this);
				case 'Required':
					return new QQNode('required', 'Required', 'Bit', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idtemplet_documents', 'IdtempletDocuments', 'Integer', $this);
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
     * @property-read QQNode $IdtempletDocuments
     * @property-read QQNode $Code
     * @property-read QQNode $CertificateTemplet
     * @property-read QQNodeCertificateTemplet $CertificateTempletObject
     * @property-read QQNode $Document
     * @property-read QQNodeLedger $DocumentObject
     * @property-read QQNode $Description
     * @property-read QQNode $ShowOnCertificate
     * @property-read QQNode $Required
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTempletDocuments extends QQReverseReferenceNode {
		protected $strTableName = 'templet_documents';
		protected $strPrimaryKey = 'idtemplet_documents';
		protected $strClassName = 'TempletDocuments';
		public function __get($strName) {
			switch ($strName) {
				case 'IdtempletDocuments':
					return new QQNode('idtemplet_documents', 'IdtempletDocuments', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'integer', $this);
				case 'CertificateTemplet':
					return new QQNode('certificate_templet', 'CertificateTemplet', 'integer', $this);
				case 'CertificateTempletObject':
					return new QQNodeCertificateTemplet('certificate_templet', 'CertificateTempletObject', 'integer', $this);
				case 'Document':
					return new QQNode('document', 'Document', 'integer', $this);
				case 'DocumentObject':
					return new QQNodeLedger('document', 'DocumentObject', 'integer', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'ShowOnCertificate':
					return new QQNode('show_on_certificate', 'ShowOnCertificate', 'boolean', $this);
				case 'Required':
					return new QQNode('required', 'Required', 'boolean', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idtemplet_documents', 'IdtempletDocuments', 'integer', $this);
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
