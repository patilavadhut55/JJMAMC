<?php
	/**
	 * The abstract DocInOutGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DocInOut subclass which
	 * extends this DocInOutGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DocInOut class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IddocInOut the value for intIddocInOut (Read-Only PK)
	 * @property string $DocumentGrp the value for strDocumentGrp (Not Null)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property integer $InwordBy the value for intInwordBy (Not Null)
	 * @property string $From the value for strFrom 
	 * @property string $To the value for strTo 
	 * @property boolean $Closed the value for blnClosed 
	 * @property integer $RefDoc the value for intRefDoc 
	 * @property string $Code the value for strCode (Unique)
	 * @property string $DescIntro the value for strDescIntro 
	 * @property string $DescData the value for strDescData 
	 * @property string $TableNo the value for strTableNo 
	 * @property string $FilenoName the value for strFilenoName 
	 * @property string $SerialNo the value for strSerialNo 
	 * @property string $Name the value for strName 
	 * @property string $Address the value for strAddress 
	 * @property string $Place the value for strPlace 
	 * @property string $CourierCharges the value for strCourierCharges 
	 * @property string $Postage the value for strPostage 
	 * @property boolean $Outward the value for blnOutward 
	 * @property integer $Dept the value for intDept 
	 * @property boolean $Send the value for blnSend 
	 * @property integer $DocCateogry the value for intDocCateogry 
	 * @property string $Subject the value for strSubject 
	 * @property string $DocumentCode the value for strDocumentCode 
	 * @property Login $InwordByObject the value for the Login object referenced by intInwordBy (Not Null)
	 * @property DocInOut $RefDocObject the value for the DocInOut object referenced by intRefDoc 
	 * @property Role $DeptObject the value for the Role object referenced by intDept 
	 * @property DocCategory $DocCateogryObject the value for the DocCategory object referenced by intDocCateogry 
	 * @property-read DocInOut $_DocInOutAsRefDoc the value for the private _objDocInOutAsRefDoc (Read-Only) if set due to an expansion on the doc_in_out.ref_doc reverse relationship
	 * @property-read DocInOut[] $_DocInOutAsRefDocArray the value for the private _objDocInOutAsRefDocArray (Read-Only) if set due to an ExpandAsArray on the doc_in_out.ref_doc reverse relationship
	 * @property-read MarkTo $_MarkTo the value for the private _objMarkTo (Read-Only) if set due to an expansion on the mark_to.doc_in_out reverse relationship
	 * @property-read MarkTo[] $_MarkToArray the value for the private _objMarkToArray (Read-Only) if set due to an ExpandAsArray on the mark_to.doc_in_out reverse relationship
	 * @property-read MemberDoc $_MemberDocAsInOut the value for the private _objMemberDocAsInOut (Read-Only) if set due to an expansion on the member_doc.in_out reverse relationship
	 * @property-read MemberDoc[] $_MemberDocAsInOutArray the value for the private _objMemberDocAsInOutArray (Read-Only) if set due to an ExpandAsArray on the member_doc.in_out reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DocInOutGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column doc_in_out.iddoc_in_out
		 * @var integer intIddocInOut
		 */
		protected $intIddocInOut;
		const IddocInOutDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.document_grp
		 * @var string strDocumentGrp
		 */
		protected $strDocumentGrp;
		const DocumentGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.inword_by
		 * @var integer intInwordBy
		 */
		protected $intInwordBy;
		const InwordByDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.from
		 * @var string strFrom
		 */
		protected $strFrom;
		const FromMaxLength = 255;
		const FromDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.to
		 * @var string strTo
		 */
		protected $strTo;
		const ToMaxLength = 255;
		const ToDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.closed
		 * @var boolean blnClosed
		 */
		protected $blnClosed;
		const ClosedDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.ref_doc
		 * @var integer intRefDoc
		 */
		protected $intRefDoc;
		const RefDocDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.desc_intro
		 * @var string strDescIntro
		 */
		protected $strDescIntro;
		const DescIntroDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.desc_data
		 * @var string strDescData
		 */
		protected $strDescData;
		const DescDataDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.table_no
		 * @var string strTableNo
		 */
		protected $strTableNo;
		const TableNoMaxLength = 255;
		const TableNoDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.fileno_name
		 * @var string strFilenoName
		 */
		protected $strFilenoName;
		const FilenoNameMaxLength = 255;
		const FilenoNameDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.serial_no
		 * @var string strSerialNo
		 */
		protected $strSerialNo;
		const SerialNoMaxLength = 255;
		const SerialNoDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.address
		 * @var string strAddress
		 */
		protected $strAddress;
		const AddressDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.place
		 * @var string strPlace
		 */
		protected $strPlace;
		const PlaceDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.courier_charges
		 * @var string strCourierCharges
		 */
		protected $strCourierCharges;
		const CourierChargesMaxLength = 255;
		const CourierChargesDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.postage
		 * @var string strPostage
		 */
		protected $strPostage;
		const PostageMaxLength = 255;
		const PostageDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.outward
		 * @var boolean blnOutward
		 */
		protected $blnOutward;
		const OutwardDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.dept
		 * @var integer intDept
		 */
		protected $intDept;
		const DeptDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.send
		 * @var boolean blnSend
		 */
		protected $blnSend;
		const SendDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.doc_cateogry
		 * @var integer intDocCateogry
		 */
		protected $intDocCateogry;
		const DocCateogryDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.subject
		 * @var string strSubject
		 */
		protected $strSubject;
		const SubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column doc_in_out.document_code
		 * @var string strDocumentCode
		 */
		protected $strDocumentCode;
		const DocumentCodeMaxLength = 45;
		const DocumentCodeDefault = null;


		/**
		 * Private member variable that stores a reference to a single DocInOutAsRefDoc object
		 * (of type DocInOut), if this DocInOut object was restored with
		 * an expansion on the doc_in_out association table.
		 * @var DocInOut _objDocInOutAsRefDoc;
		 */
		private $_objDocInOutAsRefDoc;

		/**
		 * Private member variable that stores a reference to an array of DocInOutAsRefDoc objects
		 * (of type DocInOut[]), if this DocInOut object was restored with
		 * an ExpandAsArray on the doc_in_out association table.
		 * @var DocInOut[] _objDocInOutAsRefDocArray;
		 */
		private $_objDocInOutAsRefDocArray = null;

		/**
		 * Private member variable that stores a reference to a single MarkTo object
		 * (of type MarkTo), if this DocInOut object was restored with
		 * an expansion on the mark_to association table.
		 * @var MarkTo _objMarkTo;
		 */
		private $_objMarkTo;

		/**
		 * Private member variable that stores a reference to an array of MarkTo objects
		 * (of type MarkTo[]), if this DocInOut object was restored with
		 * an ExpandAsArray on the mark_to association table.
		 * @var MarkTo[] _objMarkToArray;
		 */
		private $_objMarkToArray = null;

		/**
		 * Private member variable that stores a reference to a single MemberDocAsInOut object
		 * (of type MemberDoc), if this DocInOut object was restored with
		 * an expansion on the member_doc association table.
		 * @var MemberDoc _objMemberDocAsInOut;
		 */
		private $_objMemberDocAsInOut;

		/**
		 * Private member variable that stores a reference to an array of MemberDocAsInOut objects
		 * (of type MemberDoc[]), if this DocInOut object was restored with
		 * an ExpandAsArray on the member_doc association table.
		 * @var MemberDoc[] _objMemberDocAsInOutArray;
		 */
		private $_objMemberDocAsInOutArray = null;

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
		 * in the database column doc_in_out.inword_by.
		 *
		 * NOTE: Always use the InwordByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objInwordByObject
		 */
		protected $objInwordByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column doc_in_out.ref_doc.
		 *
		 * NOTE: Always use the RefDocObject property getter to correctly retrieve this DocInOut object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DocInOut objRefDocObject
		 */
		protected $objRefDocObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column doc_in_out.dept.
		 *
		 * NOTE: Always use the DeptObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objDeptObject
		 */
		protected $objDeptObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column doc_in_out.doc_cateogry.
		 *
		 * NOTE: Always use the DocCateogryObject property getter to correctly retrieve this DocCategory object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DocCategory objDocCateogryObject
		 */
		protected $objDocCateogryObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIddocInOut = DocInOut::IddocInOutDefault;
			$this->strDocumentGrp = DocInOut::DocumentGrpDefault;
			$this->dttDate = (DocInOut::DateDefault === null)?null:new QDateTime(DocInOut::DateDefault);
			$this->intInwordBy = DocInOut::InwordByDefault;
			$this->strFrom = DocInOut::FromDefault;
			$this->strTo = DocInOut::ToDefault;
			$this->blnClosed = DocInOut::ClosedDefault;
			$this->intRefDoc = DocInOut::RefDocDefault;
			$this->strCode = DocInOut::CodeDefault;
			$this->strDescIntro = DocInOut::DescIntroDefault;
			$this->strDescData = DocInOut::DescDataDefault;
			$this->strTableNo = DocInOut::TableNoDefault;
			$this->strFilenoName = DocInOut::FilenoNameDefault;
			$this->strSerialNo = DocInOut::SerialNoDefault;
			$this->strName = DocInOut::NameDefault;
			$this->strAddress = DocInOut::AddressDefault;
			$this->strPlace = DocInOut::PlaceDefault;
			$this->strCourierCharges = DocInOut::CourierChargesDefault;
			$this->strPostage = DocInOut::PostageDefault;
			$this->blnOutward = DocInOut::OutwardDefault;
			$this->intDept = DocInOut::DeptDefault;
			$this->blnSend = DocInOut::SendDefault;
			$this->intDocCateogry = DocInOut::DocCateogryDefault;
			$this->strSubject = DocInOut::SubjectDefault;
			$this->strDocumentCode = DocInOut::DocumentCodeDefault;
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
		 * Load a DocInOut from PK Info
		 * @param integer $intIddocInOut
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut
		 */
		public static function Load($intIddocInOut, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DocInOut', $intIddocInOut);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DocInOut::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DocInOut()->IddocInOut, $intIddocInOut)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DocInOuts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DocInOut::QueryArray to perform the LoadAll query
			try {
				return DocInOut::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DocInOuts
		 * @return int
		 */
		public static function CountAll() {
			// Call DocInOut::QueryCount to perform the CountAll query
			return DocInOut::QueryCount(QQ::All());
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
			$objDatabase = DocInOut::GetDatabase();

			// Create/Build out the QueryBuilder object with DocInOut-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'doc_in_out');

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
				DocInOut::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('doc_in_out');

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
		 * Static Qcubed Query method to query for a single DocInOut object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DocInOut the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DocInOut::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DocInOut object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DocInOut::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DocInOut::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DocInOut objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DocInOut[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DocInOut::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DocInOut::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DocInOut::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DocInOut objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DocInOut::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DocInOut::GetDatabase();

			$strQuery = DocInOut::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/docinout', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DocInOut::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DocInOut
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'doc_in_out';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'iddoc_in_out', $strAliasPrefix . 'iddoc_in_out');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'iddoc_in_out', $strAliasPrefix . 'iddoc_in_out');
			    $objBuilder->AddSelectItem($strTableName, 'document_grp', $strAliasPrefix . 'document_grp');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'inword_by', $strAliasPrefix . 'inword_by');
			    $objBuilder->AddSelectItem($strTableName, 'from', $strAliasPrefix . 'from');
			    $objBuilder->AddSelectItem($strTableName, 'to', $strAliasPrefix . 'to');
			    $objBuilder->AddSelectItem($strTableName, 'closed', $strAliasPrefix . 'closed');
			    $objBuilder->AddSelectItem($strTableName, 'ref_doc', $strAliasPrefix . 'ref_doc');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'desc_intro', $strAliasPrefix . 'desc_intro');
			    $objBuilder->AddSelectItem($strTableName, 'desc_data', $strAliasPrefix . 'desc_data');
			    $objBuilder->AddSelectItem($strTableName, 'table_no', $strAliasPrefix . 'table_no');
			    $objBuilder->AddSelectItem($strTableName, 'fileno_name', $strAliasPrefix . 'fileno_name');
			    $objBuilder->AddSelectItem($strTableName, 'serial_no', $strAliasPrefix . 'serial_no');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'address', $strAliasPrefix . 'address');
			    $objBuilder->AddSelectItem($strTableName, 'place', $strAliasPrefix . 'place');
			    $objBuilder->AddSelectItem($strTableName, 'courier_charges', $strAliasPrefix . 'courier_charges');
			    $objBuilder->AddSelectItem($strTableName, 'postage', $strAliasPrefix . 'postage');
			    $objBuilder->AddSelectItem($strTableName, 'outward', $strAliasPrefix . 'outward');
			    $objBuilder->AddSelectItem($strTableName, 'dept', $strAliasPrefix . 'dept');
			    $objBuilder->AddSelectItem($strTableName, 'send', $strAliasPrefix . 'send');
			    $objBuilder->AddSelectItem($strTableName, 'doc_cateogry', $strAliasPrefix . 'doc_cateogry');
			    $objBuilder->AddSelectItem($strTableName, 'subject', $strAliasPrefix . 'subject');
			    $objBuilder->AddSelectItem($strTableName, 'document_code', $strAliasPrefix . 'document_code');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DocInOut from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DocInOut::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DocInOut
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'iddoc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIddocInOut == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'doc_in_out__';


						// Expanding reverse references: DocInOutAsRefDoc
						$strAlias = $strAliasPrefix . 'docinoutasrefdoc__iddoc_in_out';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDocInOutAsRefDocArray)
								$objPreviousItem->_objDocInOutAsRefDocArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDocInOutAsRefDocArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDocInOutAsRefDocArray;
								$objChildItem = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasrefdoc__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDocInOutAsRefDocArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDocInOutAsRefDocArray[] = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasrefdoc__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: MarkTo
						$strAlias = $strAliasPrefix . 'markto__idmark_to';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMarkToArray)
								$objPreviousItem->_objMarkToArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMarkToArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMarkToArray;
								$objChildItem = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'markto__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMarkToArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMarkToArray[] = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'markto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: MemberDocAsInOut
						$strAlias = $strAliasPrefix . 'memberdocasinout__idmember_doc';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMemberDocAsInOutArray)
								$objPreviousItem->_objMemberDocAsInOutArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMemberDocAsInOutArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMemberDocAsInOutArray;
								$objChildItem = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasinout__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMemberDocAsInOutArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMemberDocAsInOutArray[] = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasinout__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'doc_in_out__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the DocInOut object
			$objToReturn = new DocInOut();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'iddoc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIddocInOut = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'document_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDocumentGrp = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'inword_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intInwordBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'from';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFrom = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'closed';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnClosed = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'ref_doc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRefDoc = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'desc_intro';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescIntro = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'desc_data';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescData = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'table_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTableNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'fileno_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFilenoName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'serial_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSerialNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'address';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddress = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'place';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPlace = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'courier_charges';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCourierCharges = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'postage';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostage = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'outward';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnOutward = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'dept';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDept = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'send';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnSend = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'doc_cateogry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDocCateogry = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSubject = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'document_code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDocumentCode = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IddocInOut != $objPreviousItem->IddocInOut) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objDocInOutAsRefDocArray);
					$cnt = count($objToReturn->_objDocInOutAsRefDocArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDocInOutAsRefDocArray, $objToReturn->_objDocInOutAsRefDocArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objMarkToArray);
					$cnt = count($objToReturn->_objMarkToArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMarkToArray, $objToReturn->_objMarkToArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objMemberDocAsInOutArray);
					$cnt = count($objToReturn->_objMemberDocAsInOutArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMemberDocAsInOutArray, $objToReturn->_objMemberDocAsInOutArray)) {
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
				$strAliasPrefix = 'doc_in_out__';

			// Check for InwordByObject Early Binding
			$strAlias = $strAliasPrefix . 'inword_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objInwordByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inword_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RefDocObject Early Binding
			$strAlias = $strAliasPrefix . 'ref_doc__iddoc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRefDocObject = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ref_doc__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DeptObject Early Binding
			$strAlias = $strAliasPrefix . 'dept__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDeptObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DocCateogryObject Early Binding
			$strAlias = $strAliasPrefix . 'doc_cateogry__iddoc_category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDocCateogryObject = DocCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'doc_cateogry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for DocInOutAsRefDoc Virtual Binding
			$strAlias = $strAliasPrefix . 'docinoutasrefdoc__iddoc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDocInOutAsRefDocArray)
				$objToReturn->_objDocInOutAsRefDocArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDocInOutAsRefDocArray[] = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasrefdoc__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDocInOutAsRefDoc = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'docinoutasrefdoc__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for MarkTo Virtual Binding
			$strAlias = $strAliasPrefix . 'markto__idmark_to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMarkToArray)
				$objToReturn->_objMarkToArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMarkToArray[] = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'markto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMarkTo = MarkTo::InstantiateDbRow($objDbRow, $strAliasPrefix . 'markto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for MemberDocAsInOut Virtual Binding
			$strAlias = $strAliasPrefix . 'memberdocasinout__idmember_doc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMemberDocAsInOutArray)
				$objToReturn->_objMemberDocAsInOutArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMemberDocAsInOutArray[] = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasinout__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMemberDocAsInOut = MemberDoc::InstantiateDbRow($objDbRow, $strAliasPrefix . 'memberdocasinout__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of DocInOuts from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DocInOut[]
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
					$objItem = DocInOut::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DocInOut::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DocInOut object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DocInOut next row resulting from the query
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
			return DocInOut::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DocInOut object,
		 * by IddocInOut Index(es)
		 * @param integer $intIddocInOut
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut
		*/
		public static function LoadByIddocInOut($intIddocInOut, $objOptionalClauses = null) {
			return DocInOut::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DocInOut()->IddocInOut, $intIddocInOut)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single DocInOut object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return DocInOut::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DocInOut()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of DocInOut objects,
		 * by RefDoc Index(es)
		 * @param integer $intRefDoc
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut[]
		*/
		public static function LoadArrayByRefDoc($intRefDoc, $objOptionalClauses = null) {
			// Call DocInOut::QueryArray to perform the LoadArrayByRefDoc query
			try {
				return DocInOut::QueryArray(
					QQ::Equal(QQN::DocInOut()->RefDoc, $intRefDoc),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DocInOuts
		 * by RefDoc Index(es)
		 * @param integer $intRefDoc
		 * @return int
		*/
		public static function CountByRefDoc($intRefDoc) {
			// Call DocInOut::QueryCount to perform the CountByRefDoc query
			return DocInOut::QueryCount(
				QQ::Equal(QQN::DocInOut()->RefDoc, $intRefDoc)
			);
		}

		/**
		 * Load an array of DocInOut objects,
		 * by InwordBy Index(es)
		 * @param integer $intInwordBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut[]
		*/
		public static function LoadArrayByInwordBy($intInwordBy, $objOptionalClauses = null) {
			// Call DocInOut::QueryArray to perform the LoadArrayByInwordBy query
			try {
				return DocInOut::QueryArray(
					QQ::Equal(QQN::DocInOut()->InwordBy, $intInwordBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DocInOuts
		 * by InwordBy Index(es)
		 * @param integer $intInwordBy
		 * @return int
		*/
		public static function CountByInwordBy($intInwordBy) {
			// Call DocInOut::QueryCount to perform the CountByInwordBy query
			return DocInOut::QueryCount(
				QQ::Equal(QQN::DocInOut()->InwordBy, $intInwordBy)
			);
		}

		/**
		 * Load an array of DocInOut objects,
		 * by Dept Index(es)
		 * @param integer $intDept
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut[]
		*/
		public static function LoadArrayByDept($intDept, $objOptionalClauses = null) {
			// Call DocInOut::QueryArray to perform the LoadArrayByDept query
			try {
				return DocInOut::QueryArray(
					QQ::Equal(QQN::DocInOut()->Dept, $intDept),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DocInOuts
		 * by Dept Index(es)
		 * @param integer $intDept
		 * @return int
		*/
		public static function CountByDept($intDept) {
			// Call DocInOut::QueryCount to perform the CountByDept query
			return DocInOut::QueryCount(
				QQ::Equal(QQN::DocInOut()->Dept, $intDept)
			);
		}

		/**
		 * Load an array of DocInOut objects,
		 * by DocCateogry Index(es)
		 * @param integer $intDocCateogry
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut[]
		*/
		public static function LoadArrayByDocCateogry($intDocCateogry, $objOptionalClauses = null) {
			// Call DocInOut::QueryArray to perform the LoadArrayByDocCateogry query
			try {
				return DocInOut::QueryArray(
					QQ::Equal(QQN::DocInOut()->DocCateogry, $intDocCateogry),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DocInOuts
		 * by DocCateogry Index(es)
		 * @param integer $intDocCateogry
		 * @return int
		*/
		public static function CountByDocCateogry($intDocCateogry) {
			// Call DocInOut::QueryCount to perform the CountByDocCateogry query
			return DocInOut::QueryCount(
				QQ::Equal(QQN::DocInOut()->DocCateogry, $intDocCateogry)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DocInOut
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `doc_in_out` (
							`document_grp`,
							`date`,
							`inword_by`,
							`from`,
							`to`,
							`closed`,
							`ref_doc`,
							`code`,
							`desc_intro`,
							`desc_data`,
							`table_no`,
							`fileno_name`,
							`serial_no`,
							`name`,
							`address`,
							`place`,
							`courier_charges`,
							`postage`,
							`outward`,
							`dept`,
							`send`,
							`doc_cateogry`,
							`subject`,
							`document_code`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strDocumentGrp) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intInwordBy) . ',
							' . $objDatabase->SqlVariable($this->strFrom) . ',
							' . $objDatabase->SqlVariable($this->strTo) . ',
							' . $objDatabase->SqlVariable($this->blnClosed) . ',
							' . $objDatabase->SqlVariable($this->intRefDoc) . ',
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->strDescIntro) . ',
							' . $objDatabase->SqlVariable($this->strDescData) . ',
							' . $objDatabase->SqlVariable($this->strTableNo) . ',
							' . $objDatabase->SqlVariable($this->strFilenoName) . ',
							' . $objDatabase->SqlVariable($this->strSerialNo) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strAddress) . ',
							' . $objDatabase->SqlVariable($this->strPlace) . ',
							' . $objDatabase->SqlVariable($this->strCourierCharges) . ',
							' . $objDatabase->SqlVariable($this->strPostage) . ',
							' . $objDatabase->SqlVariable($this->blnOutward) . ',
							' . $objDatabase->SqlVariable($this->intDept) . ',
							' . $objDatabase->SqlVariable($this->blnSend) . ',
							' . $objDatabase->SqlVariable($this->intDocCateogry) . ',
							' . $objDatabase->SqlVariable($this->strSubject) . ',
							' . $objDatabase->SqlVariable($this->strDocumentCode) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIddocInOut = $objDatabase->InsertId('doc_in_out', 'iddoc_in_out');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`doc_in_out`
						SET
							`document_grp` = ' . $objDatabase->SqlVariable($this->strDocumentGrp) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`inword_by` = ' . $objDatabase->SqlVariable($this->intInwordBy) . ',
							`from` = ' . $objDatabase->SqlVariable($this->strFrom) . ',
							`to` = ' . $objDatabase->SqlVariable($this->strTo) . ',
							`closed` = ' . $objDatabase->SqlVariable($this->blnClosed) . ',
							`ref_doc` = ' . $objDatabase->SqlVariable($this->intRefDoc) . ',
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`desc_intro` = ' . $objDatabase->SqlVariable($this->strDescIntro) . ',
							`desc_data` = ' . $objDatabase->SqlVariable($this->strDescData) . ',
							`table_no` = ' . $objDatabase->SqlVariable($this->strTableNo) . ',
							`fileno_name` = ' . $objDatabase->SqlVariable($this->strFilenoName) . ',
							`serial_no` = ' . $objDatabase->SqlVariable($this->strSerialNo) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`address` = ' . $objDatabase->SqlVariable($this->strAddress) . ',
							`place` = ' . $objDatabase->SqlVariable($this->strPlace) . ',
							`courier_charges` = ' . $objDatabase->SqlVariable($this->strCourierCharges) . ',
							`postage` = ' . $objDatabase->SqlVariable($this->strPostage) . ',
							`outward` = ' . $objDatabase->SqlVariable($this->blnOutward) . ',
							`dept` = ' . $objDatabase->SqlVariable($this->intDept) . ',
							`send` = ' . $objDatabase->SqlVariable($this->blnSend) . ',
							`doc_cateogry` = ' . $objDatabase->SqlVariable($this->intDocCateogry) . ',
							`subject` = ' . $objDatabase->SqlVariable($this->strSubject) . ',
							`document_code` = ' . $objDatabase->SqlVariable($this->strDocumentCode) . '
						WHERE
							`iddoc_in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
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
		 * Delete this DocInOut
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DocInOut with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`doc_in_out`
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DocInOut ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DocInOut', $this->intIddocInOut);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DocInOuts
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`doc_in_out`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate doc_in_out table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `doc_in_out`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DocInOut from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DocInOut object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DocInOut::Load($this->intIddocInOut);

			// Update $this's local variables to match
			$this->strDocumentGrp = $objReloaded->strDocumentGrp;
			$this->dttDate = $objReloaded->dttDate;
			$this->InwordBy = $objReloaded->InwordBy;
			$this->strFrom = $objReloaded->strFrom;
			$this->strTo = $objReloaded->strTo;
			$this->blnClosed = $objReloaded->blnClosed;
			$this->RefDoc = $objReloaded->RefDoc;
			$this->strCode = $objReloaded->strCode;
			$this->strDescIntro = $objReloaded->strDescIntro;
			$this->strDescData = $objReloaded->strDescData;
			$this->strTableNo = $objReloaded->strTableNo;
			$this->strFilenoName = $objReloaded->strFilenoName;
			$this->strSerialNo = $objReloaded->strSerialNo;
			$this->strName = $objReloaded->strName;
			$this->strAddress = $objReloaded->strAddress;
			$this->strPlace = $objReloaded->strPlace;
			$this->strCourierCharges = $objReloaded->strCourierCharges;
			$this->strPostage = $objReloaded->strPostage;
			$this->blnOutward = $objReloaded->blnOutward;
			$this->Dept = $objReloaded->Dept;
			$this->blnSend = $objReloaded->blnSend;
			$this->DocCateogry = $objReloaded->DocCateogry;
			$this->strSubject = $objReloaded->strSubject;
			$this->strDocumentCode = $objReloaded->strDocumentCode;
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
				case 'IddocInOut':
					/**
					 * Gets the value for intIddocInOut (Read-Only PK)
					 * @return integer
					 */
					return $this->intIddocInOut;

				case 'DocumentGrp':
					/**
					 * Gets the value for strDocumentGrp (Not Null)
					 * @return string
					 */
					return $this->strDocumentGrp;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'InwordBy':
					/**
					 * Gets the value for intInwordBy (Not Null)
					 * @return integer
					 */
					return $this->intInwordBy;

				case 'From':
					/**
					 * Gets the value for strFrom 
					 * @return string
					 */
					return $this->strFrom;

				case 'To':
					/**
					 * Gets the value for strTo 
					 * @return string
					 */
					return $this->strTo;

				case 'Closed':
					/**
					 * Gets the value for blnClosed 
					 * @return boolean
					 */
					return $this->blnClosed;

				case 'RefDoc':
					/**
					 * Gets the value for intRefDoc 
					 * @return integer
					 */
					return $this->intRefDoc;

				case 'Code':
					/**
					 * Gets the value for strCode (Unique)
					 * @return string
					 */
					return $this->strCode;

				case 'DescIntro':
					/**
					 * Gets the value for strDescIntro 
					 * @return string
					 */
					return $this->strDescIntro;

				case 'DescData':
					/**
					 * Gets the value for strDescData 
					 * @return string
					 */
					return $this->strDescData;

				case 'TableNo':
					/**
					 * Gets the value for strTableNo 
					 * @return string
					 */
					return $this->strTableNo;

				case 'FilenoName':
					/**
					 * Gets the value for strFilenoName 
					 * @return string
					 */
					return $this->strFilenoName;

				case 'SerialNo':
					/**
					 * Gets the value for strSerialNo 
					 * @return string
					 */
					return $this->strSerialNo;

				case 'Name':
					/**
					 * Gets the value for strName 
					 * @return string
					 */
					return $this->strName;

				case 'Address':
					/**
					 * Gets the value for strAddress 
					 * @return string
					 */
					return $this->strAddress;

				case 'Place':
					/**
					 * Gets the value for strPlace 
					 * @return string
					 */
					return $this->strPlace;

				case 'CourierCharges':
					/**
					 * Gets the value for strCourierCharges 
					 * @return string
					 */
					return $this->strCourierCharges;

				case 'Postage':
					/**
					 * Gets the value for strPostage 
					 * @return string
					 */
					return $this->strPostage;

				case 'Outward':
					/**
					 * Gets the value for blnOutward 
					 * @return boolean
					 */
					return $this->blnOutward;

				case 'Dept':
					/**
					 * Gets the value for intDept 
					 * @return integer
					 */
					return $this->intDept;

				case 'Send':
					/**
					 * Gets the value for blnSend 
					 * @return boolean
					 */
					return $this->blnSend;

				case 'DocCateogry':
					/**
					 * Gets the value for intDocCateogry 
					 * @return integer
					 */
					return $this->intDocCateogry;

				case 'Subject':
					/**
					 * Gets the value for strSubject 
					 * @return string
					 */
					return $this->strSubject;

				case 'DocumentCode':
					/**
					 * Gets the value for strDocumentCode 
					 * @return string
					 */
					return $this->strDocumentCode;


				///////////////////
				// Member Objects
				///////////////////
				case 'InwordByObject':
					/**
					 * Gets the value for the Login object referenced by intInwordBy (Not Null)
					 * @return Login
					 */
					try {
						if ((!$this->objInwordByObject) && (!is_null($this->intInwordBy)))
							$this->objInwordByObject = Login::Load($this->intInwordBy);
						return $this->objInwordByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefDocObject':
					/**
					 * Gets the value for the DocInOut object referenced by intRefDoc 
					 * @return DocInOut
					 */
					try {
						if ((!$this->objRefDocObject) && (!is_null($this->intRefDoc)))
							$this->objRefDocObject = DocInOut::Load($this->intRefDoc);
						return $this->objRefDocObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DeptObject':
					/**
					 * Gets the value for the Role object referenced by intDept 
					 * @return Role
					 */
					try {
						if ((!$this->objDeptObject) && (!is_null($this->intDept)))
							$this->objDeptObject = Role::Load($this->intDept);
						return $this->objDeptObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DocCateogryObject':
					/**
					 * Gets the value for the DocCategory object referenced by intDocCateogry 
					 * @return DocCategory
					 */
					try {
						if ((!$this->objDocCateogryObject) && (!is_null($this->intDocCateogry)))
							$this->objDocCateogryObject = DocCategory::Load($this->intDocCateogry);
						return $this->objDocCateogryObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_DocInOutAsRefDoc':
					/**
					 * Gets the value for the private _objDocInOutAsRefDoc (Read-Only)
					 * if set due to an expansion on the doc_in_out.ref_doc reverse relationship
					 * @return DocInOut
					 */
					return $this->_objDocInOutAsRefDoc;

				case '_DocInOutAsRefDocArray':
					/**
					 * Gets the value for the private _objDocInOutAsRefDocArray (Read-Only)
					 * if set due to an ExpandAsArray on the doc_in_out.ref_doc reverse relationship
					 * @return DocInOut[]
					 */
					return $this->_objDocInOutAsRefDocArray;

				case '_MarkTo':
					/**
					 * Gets the value for the private _objMarkTo (Read-Only)
					 * if set due to an expansion on the mark_to.doc_in_out reverse relationship
					 * @return MarkTo
					 */
					return $this->_objMarkTo;

				case '_MarkToArray':
					/**
					 * Gets the value for the private _objMarkToArray (Read-Only)
					 * if set due to an ExpandAsArray on the mark_to.doc_in_out reverse relationship
					 * @return MarkTo[]
					 */
					return $this->_objMarkToArray;

				case '_MemberDocAsInOut':
					/**
					 * Gets the value for the private _objMemberDocAsInOut (Read-Only)
					 * if set due to an expansion on the member_doc.in_out reverse relationship
					 * @return MemberDoc
					 */
					return $this->_objMemberDocAsInOut;

				case '_MemberDocAsInOutArray':
					/**
					 * Gets the value for the private _objMemberDocAsInOutArray (Read-Only)
					 * if set due to an ExpandAsArray on the member_doc.in_out reverse relationship
					 * @return MemberDoc[]
					 */
					return $this->_objMemberDocAsInOutArray;


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
				case 'DocumentGrp':
					/**
					 * Sets the value for strDocumentGrp (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDocumentGrp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					/**
					 * Sets the value for dttDate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InwordBy':
					/**
					 * Sets the value for intInwordBy (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objInwordByObject = null;
						return ($this->intInwordBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'From':
					/**
					 * Sets the value for strFrom 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFrom = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'To':
					/**
					 * Sets the value for strTo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Closed':
					/**
					 * Sets the value for blnClosed 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnClosed = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefDoc':
					/**
					 * Sets the value for intRefDoc 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRefDocObject = null;
						return ($this->intRefDoc = QType::Cast($mixValue, QType::Integer));
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

				case 'DescIntro':
					/**
					 * Sets the value for strDescIntro 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescIntro = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DescData':
					/**
					 * Sets the value for strDescData 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescData = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TableNo':
					/**
					 * Sets the value for strTableNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTableNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FilenoName':
					/**
					 * Sets the value for strFilenoName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFilenoName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SerialNo':
					/**
					 * Sets the value for strSerialNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSerialNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name':
					/**
					 * Sets the value for strName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Address':
					/**
					 * Sets the value for strAddress 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAddress = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Place':
					/**
					 * Sets the value for strPlace 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPlace = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CourierCharges':
					/**
					 * Sets the value for strCourierCharges 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCourierCharges = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Postage':
					/**
					 * Sets the value for strPostage 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostage = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Outward':
					/**
					 * Sets the value for blnOutward 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnOutward = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Dept':
					/**
					 * Sets the value for intDept 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDeptObject = null;
						return ($this->intDept = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Send':
					/**
					 * Sets the value for blnSend 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnSend = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DocCateogry':
					/**
					 * Sets the value for intDocCateogry 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDocCateogryObject = null;
						return ($this->intDocCateogry = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Subject':
					/**
					 * Sets the value for strSubject 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSubject = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DocumentCode':
					/**
					 * Sets the value for strDocumentCode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDocumentCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'InwordByObject':
					/**
					 * Sets the value for the Login object referenced by intInwordBy (Not Null)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intInwordBy = null;
						$this->objInwordByObject = null;
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
							throw new QCallerException('Unable to set an unsaved InwordByObject for this DocInOut');

						// Update Local Member Variables
						$this->objInwordByObject = $mixValue;
						$this->intInwordBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RefDocObject':
					/**
					 * Sets the value for the DocInOut object referenced by intRefDoc 
					 * @param DocInOut $mixValue
					 * @return DocInOut
					 */
					if (is_null($mixValue)) {
						$this->intRefDoc = null;
						$this->objRefDocObject = null;
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
							throw new QCallerException('Unable to set an unsaved RefDocObject for this DocInOut');

						// Update Local Member Variables
						$this->objRefDocObject = $mixValue;
						$this->intRefDoc = $mixValue->IddocInOut;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DeptObject':
					/**
					 * Sets the value for the Role object referenced by intDept 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intDept = null;
						$this->objDeptObject = null;
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
							throw new QCallerException('Unable to set an unsaved DeptObject for this DocInOut');

						// Update Local Member Variables
						$this->objDeptObject = $mixValue;
						$this->intDept = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DocCateogryObject':
					/**
					 * Sets the value for the DocCategory object referenced by intDocCateogry 
					 * @param DocCategory $mixValue
					 * @return DocCategory
					 */
					if (is_null($mixValue)) {
						$this->intDocCateogry = null;
						$this->objDocCateogryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DocCategory object
						try {
							$mixValue = QType::Cast($mixValue, 'DocCategory');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED DocCategory object
						if (is_null($mixValue->IddocCategory))
							throw new QCallerException('Unable to set an unsaved DocCateogryObject for this DocInOut');

						// Update Local Member Variables
						$this->objDocCateogryObject = $mixValue;
						$this->intDocCateogry = $mixValue->IddocCategory;

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



		// Related Objects' Methods for DocInOutAsRefDoc
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DocInOutsAsRefDoc as an array of DocInOut objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DocInOut[]
		*/
		public function GetDocInOutAsRefDocArray($objOptionalClauses = null) {
			if ((is_null($this->intIddocInOut)))
				return array();

			try {
				return DocInOut::LoadArrayByRefDoc($this->intIddocInOut, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DocInOutsAsRefDoc
		 * @return int
		*/
		public function CountDocInOutsAsRefDoc() {
			if ((is_null($this->intIddocInOut)))
				return 0;

			return DocInOut::CountByRefDoc($this->intIddocInOut);
		}

		/**
		 * Associates a DocInOutAsRefDoc
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function AssociateDocInOutAsRefDoc(DocInOut $objDocInOut) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDocInOutAsRefDoc on this unsaved DocInOut.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDocInOutAsRefDoc on this DocInOut with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`ref_doc` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . '
			');
		}

		/**
		 * Unassociates a DocInOutAsRefDoc
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function UnassociateDocInOutAsRefDoc(DocInOut $objDocInOut) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsRefDoc on this unsaved DocInOut.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsRefDoc on this DocInOut with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`ref_doc` = null
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . ' AND
					`ref_doc` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Unassociates all DocInOutsAsRefDoc
		 * @return void
		*/
		public function UnassociateAllDocInOutsAsRefDoc() {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsRefDoc on this unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`doc_in_out`
				SET
					`ref_doc` = null
				WHERE
					`ref_doc` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Deletes an associated DocInOutAsRefDoc
		 * @param DocInOut $objDocInOut
		 * @return void
		*/
		public function DeleteAssociatedDocInOutAsRefDoc(DocInOut $objDocInOut) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsRefDoc on this unsaved DocInOut.');
			if ((is_null($objDocInOut->IddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsRefDoc on this DocInOut with an unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`doc_in_out`
				WHERE
					`iddoc_in_out` = ' . $objDatabase->SqlVariable($objDocInOut->IddocInOut) . ' AND
					`ref_doc` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Deletes all associated DocInOutsAsRefDoc
		 * @return void
		*/
		public function DeleteAllDocInOutsAsRefDoc() {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocInOutAsRefDoc on this unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`doc_in_out`
				WHERE
					`ref_doc` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}


		// Related Objects' Methods for MarkTo
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MarkTos as an array of MarkTo objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		*/
		public function GetMarkToArray($objOptionalClauses = null) {
			if ((is_null($this->intIddocInOut)))
				return array();

			try {
				return MarkTo::LoadArrayByDocInOut($this->intIddocInOut, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MarkTos
		 * @return int
		*/
		public function CountMarkTos() {
			if ((is_null($this->intIddocInOut)))
				return 0;

			return MarkTo::CountByDocInOut($this->intIddocInOut);
		}

		/**
		 * Associates a MarkTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function AssociateMarkTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarkTo on this unsaved DocInOut.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarkTo on this DocInOut with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`doc_in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . '
			');
		}

		/**
		 * Unassociates a MarkTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function UnassociateMarkTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this unsaved DocInOut.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this DocInOut with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`doc_in_out` = null
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . ' AND
					`doc_in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Unassociates all MarkTos
		 * @return void
		*/
		public function UnassociateAllMarkTos() {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`mark_to`
				SET
					`doc_in_out` = null
				WHERE
					`doc_in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Deletes an associated MarkTo
		 * @param MarkTo $objMarkTo
		 * @return void
		*/
		public function DeleteAssociatedMarkTo(MarkTo $objMarkTo) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this unsaved DocInOut.');
			if ((is_null($objMarkTo->IdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this DocInOut with an unsaved MarkTo.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($objMarkTo->IdmarkTo) . ' AND
					`doc_in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Deletes all associated MarkTos
		 * @return void
		*/
		public function DeleteAllMarkTos() {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarkTo on this unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`doc_in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}


		// Related Objects' Methods for MemberDocAsInOut
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MemberDocsAsInOut as an array of MemberDoc objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MemberDoc[]
		*/
		public function GetMemberDocAsInOutArray($objOptionalClauses = null) {
			if ((is_null($this->intIddocInOut)))
				return array();

			try {
				return MemberDoc::LoadArrayByInOut($this->intIddocInOut, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MemberDocsAsInOut
		 * @return int
		*/
		public function CountMemberDocsAsInOut() {
			if ((is_null($this->intIddocInOut)))
				return 0;

			return MemberDoc::CountByInOut($this->intIddocInOut);
		}

		/**
		 * Associates a MemberDocAsInOut
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function AssociateMemberDocAsInOut(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMemberDocAsInOut on this unsaved DocInOut.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMemberDocAsInOut on this DocInOut with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . '
			');
		}

		/**
		 * Unassociates a MemberDocAsInOut
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function UnassociateMemberDocAsInOut(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsInOut on this unsaved DocInOut.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsInOut on this DocInOut with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`in_out` = null
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . ' AND
					`in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Unassociates all MemberDocsAsInOut
		 * @return void
		*/
		public function UnassociateAllMemberDocsAsInOut() {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsInOut on this unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`member_doc`
				SET
					`in_out` = null
				WHERE
					`in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Deletes an associated MemberDocAsInOut
		 * @param MemberDoc $objMemberDoc
		 * @return void
		*/
		public function DeleteAssociatedMemberDocAsInOut(MemberDoc $objMemberDoc) {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsInOut on this unsaved DocInOut.');
			if ((is_null($objMemberDoc->IdmemberDoc)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsInOut on this DocInOut with an unsaved MemberDoc.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`member_doc`
				WHERE
					`idmember_doc` = ' . $objDatabase->SqlVariable($objMemberDoc->IdmemberDoc) . ' AND
					`in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
			');
		}

		/**
		 * Deletes all associated MemberDocsAsInOut
		 * @return void
		*/
		public function DeleteAllMemberDocsAsInOut() {
			if ((is_null($this->intIddocInOut)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMemberDocAsInOut on this unsaved DocInOut.');

			// Get the Database Object for this Class
			$objDatabase = DocInOut::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`member_doc`
				WHERE
					`in_out` = ' . $objDatabase->SqlVariable($this->intIddocInOut) . '
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
			return "doc_in_out";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DocInOut::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DocInOut"><sequence>';
			$strToReturn .= '<element name="IddocInOut" type="xsd:int"/>';
			$strToReturn .= '<element name="DocumentGrp" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="InwordByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="From" type="xsd:string"/>';
			$strToReturn .= '<element name="To" type="xsd:string"/>';
			$strToReturn .= '<element name="Closed" type="xsd:boolean"/>';
			$strToReturn .= '<element name="RefDocObject" type="xsd1:DocInOut"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="DescIntro" type="xsd:string"/>';
			$strToReturn .= '<element name="DescData" type="xsd:string"/>';
			$strToReturn .= '<element name="TableNo" type="xsd:string"/>';
			$strToReturn .= '<element name="FilenoName" type="xsd:string"/>';
			$strToReturn .= '<element name="SerialNo" type="xsd:string"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Address" type="xsd:string"/>';
			$strToReturn .= '<element name="Place" type="xsd:string"/>';
			$strToReturn .= '<element name="CourierCharges" type="xsd:string"/>';
			$strToReturn .= '<element name="Postage" type="xsd:string"/>';
			$strToReturn .= '<element name="Outward" type="xsd:boolean"/>';
			$strToReturn .= '<element name="DeptObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Send" type="xsd:boolean"/>';
			$strToReturn .= '<element name="DocCateogryObject" type="xsd1:DocCategory"/>';
			$strToReturn .= '<element name="Subject" type="xsd:string"/>';
			$strToReturn .= '<element name="DocumentCode" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DocInOut', $strComplexTypeArray)) {
				$strComplexTypeArray['DocInOut'] = DocInOut::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				DocInOut::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				DocCategory::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DocInOut::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DocInOut();
			if (property_exists($objSoapObject, 'IddocInOut'))
				$objToReturn->intIddocInOut = $objSoapObject->IddocInOut;
			if (property_exists($objSoapObject, 'DocumentGrp'))
				$objToReturn->strDocumentGrp = $objSoapObject->DocumentGrp;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'InwordByObject')) &&
				($objSoapObject->InwordByObject))
				$objToReturn->InwordByObject = Login::GetObjectFromSoapObject($objSoapObject->InwordByObject);
			if (property_exists($objSoapObject, 'From'))
				$objToReturn->strFrom = $objSoapObject->From;
			if (property_exists($objSoapObject, 'To'))
				$objToReturn->strTo = $objSoapObject->To;
			if (property_exists($objSoapObject, 'Closed'))
				$objToReturn->blnClosed = $objSoapObject->Closed;
			if ((property_exists($objSoapObject, 'RefDocObject')) &&
				($objSoapObject->RefDocObject))
				$objToReturn->RefDocObject = DocInOut::GetObjectFromSoapObject($objSoapObject->RefDocObject);
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'DescIntro'))
				$objToReturn->strDescIntro = $objSoapObject->DescIntro;
			if (property_exists($objSoapObject, 'DescData'))
				$objToReturn->strDescData = $objSoapObject->DescData;
			if (property_exists($objSoapObject, 'TableNo'))
				$objToReturn->strTableNo = $objSoapObject->TableNo;
			if (property_exists($objSoapObject, 'FilenoName'))
				$objToReturn->strFilenoName = $objSoapObject->FilenoName;
			if (property_exists($objSoapObject, 'SerialNo'))
				$objToReturn->strSerialNo = $objSoapObject->SerialNo;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Address'))
				$objToReturn->strAddress = $objSoapObject->Address;
			if (property_exists($objSoapObject, 'Place'))
				$objToReturn->strPlace = $objSoapObject->Place;
			if (property_exists($objSoapObject, 'CourierCharges'))
				$objToReturn->strCourierCharges = $objSoapObject->CourierCharges;
			if (property_exists($objSoapObject, 'Postage'))
				$objToReturn->strPostage = $objSoapObject->Postage;
			if (property_exists($objSoapObject, 'Outward'))
				$objToReturn->blnOutward = $objSoapObject->Outward;
			if ((property_exists($objSoapObject, 'DeptObject')) &&
				($objSoapObject->DeptObject))
				$objToReturn->DeptObject = Role::GetObjectFromSoapObject($objSoapObject->DeptObject);
			if (property_exists($objSoapObject, 'Send'))
				$objToReturn->blnSend = $objSoapObject->Send;
			if ((property_exists($objSoapObject, 'DocCateogryObject')) &&
				($objSoapObject->DocCateogryObject))
				$objToReturn->DocCateogryObject = DocCategory::GetObjectFromSoapObject($objSoapObject->DocCateogryObject);
			if (property_exists($objSoapObject, 'Subject'))
				$objToReturn->strSubject = $objSoapObject->Subject;
			if (property_exists($objSoapObject, 'DocumentCode'))
				$objToReturn->strDocumentCode = $objSoapObject->DocumentCode;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DocInOut::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objInwordByObject)
				$objObject->objInwordByObject = Login::GetSoapObjectFromObject($objObject->objInwordByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intInwordBy = null;
			if ($objObject->objRefDocObject)
				$objObject->objRefDocObject = DocInOut::GetSoapObjectFromObject($objObject->objRefDocObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRefDoc = null;
			if ($objObject->objDeptObject)
				$objObject->objDeptObject = Role::GetSoapObjectFromObject($objObject->objDeptObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDept = null;
			if ($objObject->objDocCateogryObject)
				$objObject->objDocCateogryObject = DocCategory::GetSoapObjectFromObject($objObject->objDocCateogryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDocCateogry = null;
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
			$iArray['IddocInOut'] = $this->intIddocInOut;
			$iArray['DocumentGrp'] = $this->strDocumentGrp;
			$iArray['Date'] = $this->dttDate;
			$iArray['InwordBy'] = $this->intInwordBy;
			$iArray['From'] = $this->strFrom;
			$iArray['To'] = $this->strTo;
			$iArray['Closed'] = $this->blnClosed;
			$iArray['RefDoc'] = $this->intRefDoc;
			$iArray['Code'] = $this->strCode;
			$iArray['DescIntro'] = $this->strDescIntro;
			$iArray['DescData'] = $this->strDescData;
			$iArray['TableNo'] = $this->strTableNo;
			$iArray['FilenoName'] = $this->strFilenoName;
			$iArray['SerialNo'] = $this->strSerialNo;
			$iArray['Name'] = $this->strName;
			$iArray['Address'] = $this->strAddress;
			$iArray['Place'] = $this->strPlace;
			$iArray['CourierCharges'] = $this->strCourierCharges;
			$iArray['Postage'] = $this->strPostage;
			$iArray['Outward'] = $this->blnOutward;
			$iArray['Dept'] = $this->intDept;
			$iArray['Send'] = $this->blnSend;
			$iArray['DocCateogry'] = $this->intDocCateogry;
			$iArray['Subject'] = $this->strSubject;
			$iArray['DocumentCode'] = $this->strDocumentCode;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIddocInOut ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IddocInOut
     * @property-read QQNode $DocumentGrp
     * @property-read QQNode $Date
     * @property-read QQNode $InwordBy
     * @property-read QQNodeLogin $InwordByObject
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Closed
     * @property-read QQNode $RefDoc
     * @property-read QQNodeDocInOut $RefDocObject
     * @property-read QQNode $Code
     * @property-read QQNode $DescIntro
     * @property-read QQNode $DescData
     * @property-read QQNode $TableNo
     * @property-read QQNode $FilenoName
     * @property-read QQNode $SerialNo
     * @property-read QQNode $Name
     * @property-read QQNode $Address
     * @property-read QQNode $Place
     * @property-read QQNode $CourierCharges
     * @property-read QQNode $Postage
     * @property-read QQNode $Outward
     * @property-read QQNode $Dept
     * @property-read QQNodeRole $DeptObject
     * @property-read QQNode $Send
     * @property-read QQNode $DocCateogry
     * @property-read QQNodeDocCategory $DocCateogryObject
     * @property-read QQNode $Subject
     * @property-read QQNode $DocumentCode
     *
     *
     * @property-read QQReverseReferenceNodeDocInOut $DocInOutAsRefDoc
     * @property-read QQReverseReferenceNodeMarkTo $MarkTo
     * @property-read QQReverseReferenceNodeMemberDoc $MemberDocAsInOut

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDocInOut extends QQNode {
		protected $strTableName = 'doc_in_out';
		protected $strPrimaryKey = 'iddoc_in_out';
		protected $strClassName = 'DocInOut';
		public function __get($strName) {
			switch ($strName) {
				case 'IddocInOut':
					return new QQNode('iddoc_in_out', 'IddocInOut', 'Integer', $this);
				case 'DocumentGrp':
					return new QQNode('document_grp', 'DocumentGrp', 'Blob', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'InwordBy':
					return new QQNode('inword_by', 'InwordBy', 'Integer', $this);
				case 'InwordByObject':
					return new QQNodeLogin('inword_by', 'InwordByObject', 'Integer', $this);
				case 'From':
					return new QQNode('from', 'From', 'VarChar', $this);
				case 'To':
					return new QQNode('to', 'To', 'VarChar', $this);
				case 'Closed':
					return new QQNode('closed', 'Closed', 'Bit', $this);
				case 'RefDoc':
					return new QQNode('ref_doc', 'RefDoc', 'Integer', $this);
				case 'RefDocObject':
					return new QQNodeDocInOut('ref_doc', 'RefDocObject', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'DescIntro':
					return new QQNode('desc_intro', 'DescIntro', 'Blob', $this);
				case 'DescData':
					return new QQNode('desc_data', 'DescData', 'Blob', $this);
				case 'TableNo':
					return new QQNode('table_no', 'TableNo', 'VarChar', $this);
				case 'FilenoName':
					return new QQNode('fileno_name', 'FilenoName', 'VarChar', $this);
				case 'SerialNo':
					return new QQNode('serial_no', 'SerialNo', 'VarChar', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'Blob', $this);
				case 'Place':
					return new QQNode('place', 'Place', 'Blob', $this);
				case 'CourierCharges':
					return new QQNode('courier_charges', 'CourierCharges', 'VarChar', $this);
				case 'Postage':
					return new QQNode('postage', 'Postage', 'VarChar', $this);
				case 'Outward':
					return new QQNode('outward', 'Outward', 'Bit', $this);
				case 'Dept':
					return new QQNode('dept', 'Dept', 'Integer', $this);
				case 'DeptObject':
					return new QQNodeRole('dept', 'DeptObject', 'Integer', $this);
				case 'Send':
					return new QQNode('send', 'Send', 'Bit', $this);
				case 'DocCateogry':
					return new QQNode('doc_cateogry', 'DocCateogry', 'Integer', $this);
				case 'DocCateogryObject':
					return new QQNodeDocCategory('doc_cateogry', 'DocCateogryObject', 'Integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'Blob', $this);
				case 'DocumentCode':
					return new QQNode('document_code', 'DocumentCode', 'VarChar', $this);
				case 'DocInOutAsRefDoc':
					return new QQReverseReferenceNodeDocInOut($this, 'docinoutasrefdoc', 'reverse_reference', 'ref_doc');
				case 'MarkTo':
					return new QQReverseReferenceNodeMarkTo($this, 'markto', 'reverse_reference', 'doc_in_out');
				case 'MemberDocAsInOut':
					return new QQReverseReferenceNodeMemberDoc($this, 'memberdocasinout', 'reverse_reference', 'in_out');

				case '_PrimaryKeyNode':
					return new QQNode('iddoc_in_out', 'IddocInOut', 'Integer', $this);
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
     * @property-read QQNode $IddocInOut
     * @property-read QQNode $DocumentGrp
     * @property-read QQNode $Date
     * @property-read QQNode $InwordBy
     * @property-read QQNodeLogin $InwordByObject
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Closed
     * @property-read QQNode $RefDoc
     * @property-read QQNodeDocInOut $RefDocObject
     * @property-read QQNode $Code
     * @property-read QQNode $DescIntro
     * @property-read QQNode $DescData
     * @property-read QQNode $TableNo
     * @property-read QQNode $FilenoName
     * @property-read QQNode $SerialNo
     * @property-read QQNode $Name
     * @property-read QQNode $Address
     * @property-read QQNode $Place
     * @property-read QQNode $CourierCharges
     * @property-read QQNode $Postage
     * @property-read QQNode $Outward
     * @property-read QQNode $Dept
     * @property-read QQNodeRole $DeptObject
     * @property-read QQNode $Send
     * @property-read QQNode $DocCateogry
     * @property-read QQNodeDocCategory $DocCateogryObject
     * @property-read QQNode $Subject
     * @property-read QQNode $DocumentCode
     *
     *
     * @property-read QQReverseReferenceNodeDocInOut $DocInOutAsRefDoc
     * @property-read QQReverseReferenceNodeMarkTo $MarkTo
     * @property-read QQReverseReferenceNodeMemberDoc $MemberDocAsInOut

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDocInOut extends QQReverseReferenceNode {
		protected $strTableName = 'doc_in_out';
		protected $strPrimaryKey = 'iddoc_in_out';
		protected $strClassName = 'DocInOut';
		public function __get($strName) {
			switch ($strName) {
				case 'IddocInOut':
					return new QQNode('iddoc_in_out', 'IddocInOut', 'integer', $this);
				case 'DocumentGrp':
					return new QQNode('document_grp', 'DocumentGrp', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'InwordBy':
					return new QQNode('inword_by', 'InwordBy', 'integer', $this);
				case 'InwordByObject':
					return new QQNodeLogin('inword_by', 'InwordByObject', 'integer', $this);
				case 'From':
					return new QQNode('from', 'From', 'string', $this);
				case 'To':
					return new QQNode('to', 'To', 'string', $this);
				case 'Closed':
					return new QQNode('closed', 'Closed', 'boolean', $this);
				case 'RefDoc':
					return new QQNode('ref_doc', 'RefDoc', 'integer', $this);
				case 'RefDocObject':
					return new QQNodeDocInOut('ref_doc', 'RefDocObject', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'DescIntro':
					return new QQNode('desc_intro', 'DescIntro', 'string', $this);
				case 'DescData':
					return new QQNode('desc_data', 'DescData', 'string', $this);
				case 'TableNo':
					return new QQNode('table_no', 'TableNo', 'string', $this);
				case 'FilenoName':
					return new QQNode('fileno_name', 'FilenoName', 'string', $this);
				case 'SerialNo':
					return new QQNode('serial_no', 'SerialNo', 'string', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'string', $this);
				case 'Place':
					return new QQNode('place', 'Place', 'string', $this);
				case 'CourierCharges':
					return new QQNode('courier_charges', 'CourierCharges', 'string', $this);
				case 'Postage':
					return new QQNode('postage', 'Postage', 'string', $this);
				case 'Outward':
					return new QQNode('outward', 'Outward', 'boolean', $this);
				case 'Dept':
					return new QQNode('dept', 'Dept', 'integer', $this);
				case 'DeptObject':
					return new QQNodeRole('dept', 'DeptObject', 'integer', $this);
				case 'Send':
					return new QQNode('send', 'Send', 'boolean', $this);
				case 'DocCateogry':
					return new QQNode('doc_cateogry', 'DocCateogry', 'integer', $this);
				case 'DocCateogryObject':
					return new QQNodeDocCategory('doc_cateogry', 'DocCateogryObject', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'string', $this);
				case 'DocumentCode':
					return new QQNode('document_code', 'DocumentCode', 'string', $this);
				case 'DocInOutAsRefDoc':
					return new QQReverseReferenceNodeDocInOut($this, 'docinoutasrefdoc', 'reverse_reference', 'ref_doc');
				case 'MarkTo':
					return new QQReverseReferenceNodeMarkTo($this, 'markto', 'reverse_reference', 'doc_in_out');
				case 'MemberDocAsInOut':
					return new QQReverseReferenceNodeMemberDoc($this, 'memberdocasinout', 'reverse_reference', 'in_out');

				case '_PrimaryKeyNode':
					return new QQNode('iddoc_in_out', 'IddocInOut', 'integer', $this);
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
