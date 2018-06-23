<?php
	/**
	 * The abstract EventGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Event subclass which
	 * extends this EventGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Event class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idevent the value for intIdevent (Read-Only PK)
	 * @property string $Code the value for strCode (Unique)
	 * @property string $Name the value for strName (Not Null)
	 * @property integer $EventCat the value for intEventCat (Not Null)
	 * @property string $Note the value for strNote 
	 * @property QDateTime $Fromdate the value for dttFromdate (Not Null)
	 * @property QDateTime $Todate the value for dttTodate (Not Null)
	 * @property integer $SubOf the value for intSubOf 
	 * @property integer $ArragedBy the value for intArragedBy 
	 * @property EventCat $EventCatObject the value for the EventCat object referenced by intEventCat (Not Null)
	 * @property Event $SubOfObject the value for the Event object referenced by intSubOf 
	 * @property Login $ArragedByObject the value for the Login object referenced by intArragedBy 
	 * @property-read Event $_EventAsSubOf the value for the private _objEventAsSubOf (Read-Only) if set due to an expansion on the event.sub_of reverse relationship
	 * @property-read Event[] $_EventAsSubOfArray the value for the private _objEventAsSubOfArray (Read-Only) if set due to an ExpandAsArray on the event.sub_of reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EventGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column event.idevent
		 * @var integer intIdevent
		 */
		protected $intIdevent;
		const IdeventDefault = null;


		/**
		 * Protected member variable that maps to the database column event.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column event.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column event.event_cat
		 * @var integer intEventCat
		 */
		protected $intEventCat;
		const EventCatDefault = null;


		/**
		 * Protected member variable that maps to the database column event.note
		 * @var string strNote
		 */
		protected $strNote;
		const NoteDefault = null;


		/**
		 * Protected member variable that maps to the database column event.fromdate
		 * @var QDateTime dttFromdate
		 */
		protected $dttFromdate;
		const FromdateDefault = null;


		/**
		 * Protected member variable that maps to the database column event.todate
		 * @var QDateTime dttTodate
		 */
		protected $dttTodate;
		const TodateDefault = null;


		/**
		 * Protected member variable that maps to the database column event.sub_of
		 * @var integer intSubOf
		 */
		protected $intSubOf;
		const SubOfDefault = null;


		/**
		 * Protected member variable that maps to the database column event.arraged_by
		 * @var integer intArragedBy
		 */
		protected $intArragedBy;
		const ArragedByDefault = null;


		/**
		 * Private member variable that stores a reference to a single EventAsSubOf object
		 * (of type Event), if this Event object was restored with
		 * an expansion on the event association table.
		 * @var Event _objEventAsSubOf;
		 */
		private $_objEventAsSubOf;

		/**
		 * Private member variable that stores a reference to an array of EventAsSubOf objects
		 * (of type Event[]), if this Event object was restored with
		 * an ExpandAsArray on the event association table.
		 * @var Event[] _objEventAsSubOfArray;
		 */
		private $_objEventAsSubOfArray = null;

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
		 * in the database column event.event_cat.
		 *
		 * NOTE: Always use the EventCatObject property getter to correctly retrieve this EventCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var EventCat objEventCatObject
		 */
		protected $objEventCatObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column event.sub_of.
		 *
		 * NOTE: Always use the SubOfObject property getter to correctly retrieve this Event object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Event objSubOfObject
		 */
		protected $objSubOfObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column event.arraged_by.
		 *
		 * NOTE: Always use the ArragedByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objArragedByObject
		 */
		protected $objArragedByObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdevent = Event::IdeventDefault;
			$this->strCode = Event::CodeDefault;
			$this->strName = Event::NameDefault;
			$this->intEventCat = Event::EventCatDefault;
			$this->strNote = Event::NoteDefault;
			$this->dttFromdate = (Event::FromdateDefault === null)?null:new QDateTime(Event::FromdateDefault);
			$this->dttTodate = (Event::TodateDefault === null)?null:new QDateTime(Event::TodateDefault);
			$this->intSubOf = Event::SubOfDefault;
			$this->intArragedBy = Event::ArragedByDefault;
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
		 * Load a Event from PK Info
		 * @param integer $intIdevent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event
		 */
		public static function Load($intIdevent, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Event', $intIdevent);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Event::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Event()->Idevent, $intIdevent)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Events
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Event::QueryArray to perform the LoadAll query
			try {
				return Event::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Events
		 * @return int
		 */
		public static function CountAll() {
			// Call Event::QueryCount to perform the CountAll query
			return Event::QueryCount(QQ::All());
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
			$objDatabase = Event::GetDatabase();

			// Create/Build out the QueryBuilder object with Event-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'event');

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
				Event::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('event');

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
		 * Static Qcubed Query method to query for a single Event object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Event the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Event::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Event object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Event::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Event::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Event objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Event[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Event::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Event::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Event::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Event objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Event::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Event::GetDatabase();

			$strQuery = Event::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/event', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Event::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Event
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'event';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idevent', $strAliasPrefix . 'idevent');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idevent', $strAliasPrefix . 'idevent');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'event_cat', $strAliasPrefix . 'event_cat');
			    $objBuilder->AddSelectItem($strTableName, 'note', $strAliasPrefix . 'note');
			    $objBuilder->AddSelectItem($strTableName, 'fromdate', $strAliasPrefix . 'fromdate');
			    $objBuilder->AddSelectItem($strTableName, 'todate', $strAliasPrefix . 'todate');
			    $objBuilder->AddSelectItem($strTableName, 'sub_of', $strAliasPrefix . 'sub_of');
			    $objBuilder->AddSelectItem($strTableName, 'arraged_by', $strAliasPrefix . 'arraged_by');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Event from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Event::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Event
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idevent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdevent == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'event__';


						// Expanding reverse references: EventAsSubOf
						$strAlias = $strAliasPrefix . 'eventassubof__idevent';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objEventAsSubOfArray)
								$objPreviousItem->_objEventAsSubOfArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEventAsSubOfArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEventAsSubOfArray;
								$objChildItem = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'eventassubof__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEventAsSubOfArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEventAsSubOfArray[] = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'eventassubof__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'event__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Event object
			$objToReturn = new Event();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idevent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdevent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'event_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intEventCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'note';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNote = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'fromdate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttFromdate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'todate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttTodate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'sub_of';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubOf = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'arraged_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intArragedBy = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idevent != $objPreviousItem->Idevent) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objEventAsSubOfArray);
					$cnt = count($objToReturn->_objEventAsSubOfArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objEventAsSubOfArray, $objToReturn->_objEventAsSubOfArray)) {
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
				$strAliasPrefix = 'event__';

			// Check for EventCatObject Early Binding
			$strAlias = $strAliasPrefix . 'event_cat__idevent_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEventCatObject = EventCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'event_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SubOfObject Early Binding
			$strAlias = $strAliasPrefix . 'sub_of__idevent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSubOfObject = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'sub_of__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ArragedByObject Early Binding
			$strAlias = $strAliasPrefix . 'arraged_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objArragedByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'arraged_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for EventAsSubOf Virtual Binding
			$strAlias = $strAliasPrefix . 'eventassubof__idevent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objEventAsSubOfArray)
				$objToReturn->_objEventAsSubOfArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objEventAsSubOfArray[] = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'eventassubof__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEventAsSubOf = Event::InstantiateDbRow($objDbRow, $strAliasPrefix . 'eventassubof__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Events from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Event[]
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
					$objItem = Event::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Event::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Event object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Event next row resulting from the query
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
			return Event::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Event object,
		 * by Idevent Index(es)
		 * @param integer $intIdevent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event
		*/
		public static function LoadByIdevent($intIdevent, $objOptionalClauses = null) {
			return Event::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Event()->Idevent, $intIdevent)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Event object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return Event::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Event()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Event objects,
		 * by EventCat Index(es)
		 * @param integer $intEventCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event[]
		*/
		public static function LoadArrayByEventCat($intEventCat, $objOptionalClauses = null) {
			// Call Event::QueryArray to perform the LoadArrayByEventCat query
			try {
				return Event::QueryArray(
					QQ::Equal(QQN::Event()->EventCat, $intEventCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Events
		 * by EventCat Index(es)
		 * @param integer $intEventCat
		 * @return int
		*/
		public static function CountByEventCat($intEventCat) {
			// Call Event::QueryCount to perform the CountByEventCat query
			return Event::QueryCount(
				QQ::Equal(QQN::Event()->EventCat, $intEventCat)
			);
		}

		/**
		 * Load an array of Event objects,
		 * by ArragedBy Index(es)
		 * @param integer $intArragedBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event[]
		*/
		public static function LoadArrayByArragedBy($intArragedBy, $objOptionalClauses = null) {
			// Call Event::QueryArray to perform the LoadArrayByArragedBy query
			try {
				return Event::QueryArray(
					QQ::Equal(QQN::Event()->ArragedBy, $intArragedBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Events
		 * by ArragedBy Index(es)
		 * @param integer $intArragedBy
		 * @return int
		*/
		public static function CountByArragedBy($intArragedBy) {
			// Call Event::QueryCount to perform the CountByArragedBy query
			return Event::QueryCount(
				QQ::Equal(QQN::Event()->ArragedBy, $intArragedBy)
			);
		}

		/**
		 * Load an array of Event objects,
		 * by SubOf Index(es)
		 * @param integer $intSubOf
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event[]
		*/
		public static function LoadArrayBySubOf($intSubOf, $objOptionalClauses = null) {
			// Call Event::QueryArray to perform the LoadArrayBySubOf query
			try {
				return Event::QueryArray(
					QQ::Equal(QQN::Event()->SubOf, $intSubOf),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Events
		 * by SubOf Index(es)
		 * @param integer $intSubOf
		 * @return int
		*/
		public static function CountBySubOf($intSubOf) {
			// Call Event::QueryCount to perform the CountBySubOf query
			return Event::QueryCount(
				QQ::Equal(QQN::Event()->SubOf, $intSubOf)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Event
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `event` (
							`code`,
							`name`,
							`event_cat`,
							`note`,
							`fromdate`,
							`todate`,
							`sub_of`,
							`arraged_by`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intEventCat) . ',
							' . $objDatabase->SqlVariable($this->strNote) . ',
							' . $objDatabase->SqlVariable($this->dttFromdate) . ',
							' . $objDatabase->SqlVariable($this->dttTodate) . ',
							' . $objDatabase->SqlVariable($this->intSubOf) . ',
							' . $objDatabase->SqlVariable($this->intArragedBy) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdevent = $objDatabase->InsertId('event', 'idevent');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`event`
						SET
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`event_cat` = ' . $objDatabase->SqlVariable($this->intEventCat) . ',
							`note` = ' . $objDatabase->SqlVariable($this->strNote) . ',
							`fromdate` = ' . $objDatabase->SqlVariable($this->dttFromdate) . ',
							`todate` = ' . $objDatabase->SqlVariable($this->dttTodate) . ',
							`sub_of` = ' . $objDatabase->SqlVariable($this->intSubOf) . ',
							`arraged_by` = ' . $objDatabase->SqlVariable($this->intArragedBy) . '
						WHERE
							`idevent` = ' . $objDatabase->SqlVariable($this->intIdevent) . '
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
		 * Delete this Event
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdevent)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Event with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`event`
				WHERE
					`idevent` = ' . $objDatabase->SqlVariable($this->intIdevent) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Event ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Event', $this->intIdevent);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Events
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`event`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate event table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `event`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Event from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Event object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Event::Load($this->intIdevent);

			// Update $this's local variables to match
			$this->strCode = $objReloaded->strCode;
			$this->strName = $objReloaded->strName;
			$this->EventCat = $objReloaded->EventCat;
			$this->strNote = $objReloaded->strNote;
			$this->dttFromdate = $objReloaded->dttFromdate;
			$this->dttTodate = $objReloaded->dttTodate;
			$this->SubOf = $objReloaded->SubOf;
			$this->ArragedBy = $objReloaded->ArragedBy;
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
				case 'Idevent':
					/**
					 * Gets the value for intIdevent (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdevent;

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

				case 'EventCat':
					/**
					 * Gets the value for intEventCat (Not Null)
					 * @return integer
					 */
					return $this->intEventCat;

				case 'Note':
					/**
					 * Gets the value for strNote 
					 * @return string
					 */
					return $this->strNote;

				case 'Fromdate':
					/**
					 * Gets the value for dttFromdate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttFromdate;

				case 'Todate':
					/**
					 * Gets the value for dttTodate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttTodate;

				case 'SubOf':
					/**
					 * Gets the value for intSubOf 
					 * @return integer
					 */
					return $this->intSubOf;

				case 'ArragedBy':
					/**
					 * Gets the value for intArragedBy 
					 * @return integer
					 */
					return $this->intArragedBy;


				///////////////////
				// Member Objects
				///////////////////
				case 'EventCatObject':
					/**
					 * Gets the value for the EventCat object referenced by intEventCat (Not Null)
					 * @return EventCat
					 */
					try {
						if ((!$this->objEventCatObject) && (!is_null($this->intEventCat)))
							$this->objEventCatObject = EventCat::Load($this->intEventCat);
						return $this->objEventCatObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SubOfObject':
					/**
					 * Gets the value for the Event object referenced by intSubOf 
					 * @return Event
					 */
					try {
						if ((!$this->objSubOfObject) && (!is_null($this->intSubOf)))
							$this->objSubOfObject = Event::Load($this->intSubOf);
						return $this->objSubOfObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ArragedByObject':
					/**
					 * Gets the value for the Login object referenced by intArragedBy 
					 * @return Login
					 */
					try {
						if ((!$this->objArragedByObject) && (!is_null($this->intArragedBy)))
							$this->objArragedByObject = Login::Load($this->intArragedBy);
						return $this->objArragedByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_EventAsSubOf':
					/**
					 * Gets the value for the private _objEventAsSubOf (Read-Only)
					 * if set due to an expansion on the event.sub_of reverse relationship
					 * @return Event
					 */
					return $this->_objEventAsSubOf;

				case '_EventAsSubOfArray':
					/**
					 * Gets the value for the private _objEventAsSubOfArray (Read-Only)
					 * if set due to an ExpandAsArray on the event.sub_of reverse relationship
					 * @return Event[]
					 */
					return $this->_objEventAsSubOfArray;


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

				case 'EventCat':
					/**
					 * Sets the value for intEventCat (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objEventCatObject = null;
						return ($this->intEventCat = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Note':
					/**
					 * Sets the value for strNote 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNote = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fromdate':
					/**
					 * Sets the value for dttFromdate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFromdate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Todate':
					/**
					 * Sets the value for dttTodate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTodate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SubOf':
					/**
					 * Sets the value for intSubOf 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSubOfObject = null;
						return ($this->intSubOf = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ArragedBy':
					/**
					 * Sets the value for intArragedBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objArragedByObject = null;
						return ($this->intArragedBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'EventCatObject':
					/**
					 * Sets the value for the EventCat object referenced by intEventCat (Not Null)
					 * @param EventCat $mixValue
					 * @return EventCat
					 */
					if (is_null($mixValue)) {
						$this->intEventCat = null;
						$this->objEventCatObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a EventCat object
						try {
							$mixValue = QType::Cast($mixValue, 'EventCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED EventCat object
						if (is_null($mixValue->IdeventCat))
							throw new QCallerException('Unable to set an unsaved EventCatObject for this Event');

						// Update Local Member Variables
						$this->objEventCatObject = $mixValue;
						$this->intEventCat = $mixValue->IdeventCat;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SubOfObject':
					/**
					 * Sets the value for the Event object referenced by intSubOf 
					 * @param Event $mixValue
					 * @return Event
					 */
					if (is_null($mixValue)) {
						$this->intSubOf = null;
						$this->objSubOfObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Event object
						try {
							$mixValue = QType::Cast($mixValue, 'Event');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Event object
						if (is_null($mixValue->Idevent))
							throw new QCallerException('Unable to set an unsaved SubOfObject for this Event');

						// Update Local Member Variables
						$this->objSubOfObject = $mixValue;
						$this->intSubOf = $mixValue->Idevent;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ArragedByObject':
					/**
					 * Sets the value for the Login object referenced by intArragedBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intArragedBy = null;
						$this->objArragedByObject = null;
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
							throw new QCallerException('Unable to set an unsaved ArragedByObject for this Event');

						// Update Local Member Variables
						$this->objArragedByObject = $mixValue;
						$this->intArragedBy = $mixValue->Idlogin;

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



		// Related Objects' Methods for EventAsSubOf
		//-------------------------------------------------------------------

		/**
		 * Gets all associated EventsAsSubOf as an array of Event objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Event[]
		*/
		public function GetEventAsSubOfArray($objOptionalClauses = null) {
			if ((is_null($this->intIdevent)))
				return array();

			try {
				return Event::LoadArrayBySubOf($this->intIdevent, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated EventsAsSubOf
		 * @return int
		*/
		public function CountEventsAsSubOf() {
			if ((is_null($this->intIdevent)))
				return 0;

			return Event::CountBySubOf($this->intIdevent);
		}

		/**
		 * Associates a EventAsSubOf
		 * @param Event $objEvent
		 * @return void
		*/
		public function AssociateEventAsSubOf(Event $objEvent) {
			if ((is_null($this->intIdevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEventAsSubOf on this unsaved Event.');
			if ((is_null($objEvent->Idevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEventAsSubOf on this Event with an unsaved Event.');

			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`event`
				SET
					`sub_of` = ' . $objDatabase->SqlVariable($this->intIdevent) . '
				WHERE
					`idevent` = ' . $objDatabase->SqlVariable($objEvent->Idevent) . '
			');
		}

		/**
		 * Unassociates a EventAsSubOf
		 * @param Event $objEvent
		 * @return void
		*/
		public function UnassociateEventAsSubOf(Event $objEvent) {
			if ((is_null($this->intIdevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsSubOf on this unsaved Event.');
			if ((is_null($objEvent->Idevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsSubOf on this Event with an unsaved Event.');

			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`event`
				SET
					`sub_of` = null
				WHERE
					`idevent` = ' . $objDatabase->SqlVariable($objEvent->Idevent) . ' AND
					`sub_of` = ' . $objDatabase->SqlVariable($this->intIdevent) . '
			');
		}

		/**
		 * Unassociates all EventsAsSubOf
		 * @return void
		*/
		public function UnassociateAllEventsAsSubOf() {
			if ((is_null($this->intIdevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsSubOf on this unsaved Event.');

			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`event`
				SET
					`sub_of` = null
				WHERE
					`sub_of` = ' . $objDatabase->SqlVariable($this->intIdevent) . '
			');
		}

		/**
		 * Deletes an associated EventAsSubOf
		 * @param Event $objEvent
		 * @return void
		*/
		public function DeleteAssociatedEventAsSubOf(Event $objEvent) {
			if ((is_null($this->intIdevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsSubOf on this unsaved Event.');
			if ((is_null($objEvent->Idevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsSubOf on this Event with an unsaved Event.');

			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`event`
				WHERE
					`idevent` = ' . $objDatabase->SqlVariable($objEvent->Idevent) . ' AND
					`sub_of` = ' . $objDatabase->SqlVariable($this->intIdevent) . '
			');
		}

		/**
		 * Deletes all associated EventsAsSubOf
		 * @return void
		*/
		public function DeleteAllEventsAsSubOf() {
			if ((is_null($this->intIdevent)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEventAsSubOf on this unsaved Event.');

			// Get the Database Object for this Class
			$objDatabase = Event::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`event`
				WHERE
					`sub_of` = ' . $objDatabase->SqlVariable($this->intIdevent) . '
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
			return "event";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Event::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Event"><sequence>';
			$strToReturn .= '<element name="Idevent" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="EventCatObject" type="xsd1:EventCat"/>';
			$strToReturn .= '<element name="Note" type="xsd:string"/>';
			$strToReturn .= '<element name="Fromdate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Todate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="SubOfObject" type="xsd1:Event"/>';
			$strToReturn .= '<element name="ArragedByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Event', $strComplexTypeArray)) {
				$strComplexTypeArray['Event'] = Event::GetSoapComplexTypeXml();
				EventCat::AlterSoapComplexTypeArray($strComplexTypeArray);
				Event::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Event::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Event();
			if (property_exists($objSoapObject, 'Idevent'))
				$objToReturn->intIdevent = $objSoapObject->Idevent;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if ((property_exists($objSoapObject, 'EventCatObject')) &&
				($objSoapObject->EventCatObject))
				$objToReturn->EventCatObject = EventCat::GetObjectFromSoapObject($objSoapObject->EventCatObject);
			if (property_exists($objSoapObject, 'Note'))
				$objToReturn->strNote = $objSoapObject->Note;
			if (property_exists($objSoapObject, 'Fromdate'))
				$objToReturn->dttFromdate = new QDateTime($objSoapObject->Fromdate);
			if (property_exists($objSoapObject, 'Todate'))
				$objToReturn->dttTodate = new QDateTime($objSoapObject->Todate);
			if ((property_exists($objSoapObject, 'SubOfObject')) &&
				($objSoapObject->SubOfObject))
				$objToReturn->SubOfObject = Event::GetObjectFromSoapObject($objSoapObject->SubOfObject);
			if ((property_exists($objSoapObject, 'ArragedByObject')) &&
				($objSoapObject->ArragedByObject))
				$objToReturn->ArragedByObject = Login::GetObjectFromSoapObject($objSoapObject->ArragedByObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Event::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objEventCatObject)
				$objObject->objEventCatObject = EventCat::GetSoapObjectFromObject($objObject->objEventCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEventCat = null;
			if ($objObject->dttFromdate)
				$objObject->dttFromdate = $objObject->dttFromdate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTodate)
				$objObject->dttTodate = $objObject->dttTodate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objSubOfObject)
				$objObject->objSubOfObject = Event::GetSoapObjectFromObject($objObject->objSubOfObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSubOf = null;
			if ($objObject->objArragedByObject)
				$objObject->objArragedByObject = Login::GetSoapObjectFromObject($objObject->objArragedByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intArragedBy = null;
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
			$iArray['Idevent'] = $this->intIdevent;
			$iArray['Code'] = $this->strCode;
			$iArray['Name'] = $this->strName;
			$iArray['EventCat'] = $this->intEventCat;
			$iArray['Note'] = $this->strNote;
			$iArray['Fromdate'] = $this->dttFromdate;
			$iArray['Todate'] = $this->dttTodate;
			$iArray['SubOf'] = $this->intSubOf;
			$iArray['ArragedBy'] = $this->intArragedBy;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdevent ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idevent
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $EventCat
     * @property-read QQNodeEventCat $EventCatObject
     * @property-read QQNode $Note
     * @property-read QQNode $Fromdate
     * @property-read QQNode $Todate
     * @property-read QQNode $SubOf
     * @property-read QQNodeEvent $SubOfObject
     * @property-read QQNode $ArragedBy
     * @property-read QQNodeLogin $ArragedByObject
     *
     *
     * @property-read QQReverseReferenceNodeEvent $EventAsSubOf

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeEvent extends QQNode {
		protected $strTableName = 'event';
		protected $strPrimaryKey = 'idevent';
		protected $strClassName = 'Event';
		public function __get($strName) {
			switch ($strName) {
				case 'Idevent':
					return new QQNode('idevent', 'Idevent', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'EventCat':
					return new QQNode('event_cat', 'EventCat', 'Integer', $this);
				case 'EventCatObject':
					return new QQNodeEventCat('event_cat', 'EventCatObject', 'Integer', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'Blob', $this);
				case 'Fromdate':
					return new QQNode('fromdate', 'Fromdate', 'DateTime', $this);
				case 'Todate':
					return new QQNode('todate', 'Todate', 'DateTime', $this);
				case 'SubOf':
					return new QQNode('sub_of', 'SubOf', 'Integer', $this);
				case 'SubOfObject':
					return new QQNodeEvent('sub_of', 'SubOfObject', 'Integer', $this);
				case 'ArragedBy':
					return new QQNode('arraged_by', 'ArragedBy', 'Integer', $this);
				case 'ArragedByObject':
					return new QQNodeLogin('arraged_by', 'ArragedByObject', 'Integer', $this);
				case 'EventAsSubOf':
					return new QQReverseReferenceNodeEvent($this, 'eventassubof', 'reverse_reference', 'sub_of');

				case '_PrimaryKeyNode':
					return new QQNode('idevent', 'Idevent', 'Integer', $this);
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
     * @property-read QQNode $Idevent
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $EventCat
     * @property-read QQNodeEventCat $EventCatObject
     * @property-read QQNode $Note
     * @property-read QQNode $Fromdate
     * @property-read QQNode $Todate
     * @property-read QQNode $SubOf
     * @property-read QQNodeEvent $SubOfObject
     * @property-read QQNode $ArragedBy
     * @property-read QQNodeLogin $ArragedByObject
     *
     *
     * @property-read QQReverseReferenceNodeEvent $EventAsSubOf

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeEvent extends QQReverseReferenceNode {
		protected $strTableName = 'event';
		protected $strPrimaryKey = 'idevent';
		protected $strClassName = 'Event';
		public function __get($strName) {
			switch ($strName) {
				case 'Idevent':
					return new QQNode('idevent', 'Idevent', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'EventCat':
					return new QQNode('event_cat', 'EventCat', 'integer', $this);
				case 'EventCatObject':
					return new QQNodeEventCat('event_cat', 'EventCatObject', 'integer', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'string', $this);
				case 'Fromdate':
					return new QQNode('fromdate', 'Fromdate', 'QDateTime', $this);
				case 'Todate':
					return new QQNode('todate', 'Todate', 'QDateTime', $this);
				case 'SubOf':
					return new QQNode('sub_of', 'SubOf', 'integer', $this);
				case 'SubOfObject':
					return new QQNodeEvent('sub_of', 'SubOfObject', 'integer', $this);
				case 'ArragedBy':
					return new QQNode('arraged_by', 'ArragedBy', 'integer', $this);
				case 'ArragedByObject':
					return new QQNodeLogin('arraged_by', 'ArragedByObject', 'integer', $this);
				case 'EventAsSubOf':
					return new QQReverseReferenceNodeEvent($this, 'eventassubof', 'reverse_reference', 'sub_of');

				case '_PrimaryKeyNode':
					return new QQNode('idevent', 'Idevent', 'integer', $this);
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
