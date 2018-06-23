<?php
	/**
	 * The abstract PlaceGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Place subclass which
	 * extends this PlaceGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Place class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idplace the value for intIdplace (Read-Only PK)
	 * @property integer $Grp the value for intGrp (Not Null)
	 * @property string $Code the value for strCode (Unique)
	 * @property string $Name the value for strName (Not Null)
	 * @property integer $Parrent the value for intParrent 
	 * @property string $Mname the value for strMname 
	 * @property PlaceGrp $GrpObject the value for the PlaceGrp object referenced by intGrp (Not Null)
	 * @property Place $ParrentObject the value for the Place object referenced by intParrent 
	 * @property-read Address $_AddressAsCountry the value for the private _objAddressAsCountry (Read-Only) if set due to an expansion on the address.country reverse relationship
	 * @property-read Address[] $_AddressAsCountryArray the value for the private _objAddressAsCountryArray (Read-Only) if set due to an ExpandAsArray on the address.country reverse relationship
	 * @property-read Address $_AddressAsState the value for the private _objAddressAsState (Read-Only) if set due to an expansion on the address.state reverse relationship
	 * @property-read Address[] $_AddressAsStateArray the value for the private _objAddressAsStateArray (Read-Only) if set due to an ExpandAsArray on the address.state reverse relationship
	 * @property-read Address $_AddressAsDistrict the value for the private _objAddressAsDistrict (Read-Only) if set due to an expansion on the address.district reverse relationship
	 * @property-read Address[] $_AddressAsDistrictArray the value for the private _objAddressAsDistrictArray (Read-Only) if set due to an ExpandAsArray on the address.district reverse relationship
	 * @property-read Address $_AddressAsTaluka the value for the private _objAddressAsTaluka (Read-Only) if set due to an expansion on the address.taluka reverse relationship
	 * @property-read Address[] $_AddressAsTalukaArray the value for the private _objAddressAsTalukaArray (Read-Only) if set due to an ExpandAsArray on the address.taluka reverse relationship
	 * @property-read Address $_AddressAsCountry1 the value for the private _objAddressAsCountry1 (Read-Only) if set due to an expansion on the address.country1 reverse relationship
	 * @property-read Address[] $_AddressAsCountry1Array the value for the private _objAddressAsCountry1Array (Read-Only) if set due to an ExpandAsArray on the address.country1 reverse relationship
	 * @property-read Address $_AddressAsState1 the value for the private _objAddressAsState1 (Read-Only) if set due to an expansion on the address.state1 reverse relationship
	 * @property-read Address[] $_AddressAsState1Array the value for the private _objAddressAsState1Array (Read-Only) if set due to an ExpandAsArray on the address.state1 reverse relationship
	 * @property-read Address $_AddressAsDistrict1 the value for the private _objAddressAsDistrict1 (Read-Only) if set due to an expansion on the address.district1 reverse relationship
	 * @property-read Address[] $_AddressAsDistrict1Array the value for the private _objAddressAsDistrict1Array (Read-Only) if set due to an ExpandAsArray on the address.district1 reverse relationship
	 * @property-read Address $_AddressAsTaluka1 the value for the private _objAddressAsTaluka1 (Read-Only) if set due to an expansion on the address.taluka1 reverse relationship
	 * @property-read Address[] $_AddressAsTaluka1Array the value for the private _objAddressAsTaluka1Array (Read-Only) if set due to an ExpandAsArray on the address.taluka1 reverse relationship
	 * @property-read AssMember $_AssMemberAsState the value for the private _objAssMemberAsState (Read-Only) if set due to an expansion on the ass_member.state reverse relationship
	 * @property-read AssMember[] $_AssMemberAsStateArray the value for the private _objAssMemberAsStateArray (Read-Only) if set due to an ExpandAsArray on the ass_member.state reverse relationship
	 * @property-read Place $_PlaceAsParrent the value for the private _objPlaceAsParrent (Read-Only) if set due to an expansion on the place.parrent reverse relationship
	 * @property-read Place[] $_PlaceAsParrentArray the value for the private _objPlaceAsParrentArray (Read-Only) if set due to an ExpandAsArray on the place.parrent reverse relationship
	 * @property-read Profile $_ProfileAsState the value for the private _objProfileAsState (Read-Only) if set due to an expansion on the profile.state reverse relationship
	 * @property-read Profile[] $_ProfileAsStateArray the value for the private _objProfileAsStateArray (Read-Only) if set due to an ExpandAsArray on the profile.state reverse relationship
	 * @property-read Profile $_ProfileAsState1 the value for the private _objProfileAsState1 (Read-Only) if set due to an expansion on the profile.state1 reverse relationship
	 * @property-read Profile[] $_ProfileAsState1Array the value for the private _objProfileAsState1Array (Read-Only) if set due to an ExpandAsArray on the profile.state1 reverse relationship
	 * @property-read Profile $_ProfileAsDistrict the value for the private _objProfileAsDistrict (Read-Only) if set due to an expansion on the profile.district reverse relationship
	 * @property-read Profile[] $_ProfileAsDistrictArray the value for the private _objProfileAsDistrictArray (Read-Only) if set due to an ExpandAsArray on the profile.district reverse relationship
	 * @property-read Profile $_ProfileAsDistrict1 the value for the private _objProfileAsDistrict1 (Read-Only) if set due to an expansion on the profile.district1 reverse relationship
	 * @property-read Profile[] $_ProfileAsDistrict1Array the value for the private _objProfileAsDistrict1Array (Read-Only) if set due to an ExpandAsArray on the profile.district1 reverse relationship
	 * @property-read Profile $_ProfileAsTaluka the value for the private _objProfileAsTaluka (Read-Only) if set due to an expansion on the profile.taluka reverse relationship
	 * @property-read Profile[] $_ProfileAsTalukaArray the value for the private _objProfileAsTalukaArray (Read-Only) if set due to an ExpandAsArray on the profile.taluka reverse relationship
	 * @property-read Profile $_ProfileAsTaluka1 the value for the private _objProfileAsTaluka1 (Read-Only) if set due to an expansion on the profile.taluka1 reverse relationship
	 * @property-read Profile[] $_ProfileAsTaluka1Array the value for the private _objProfileAsTaluka1Array (Read-Only) if set due to an ExpandAsArray on the profile.taluka1 reverse relationship
	 * @property-read RegMember $_RegMemberAsPrmtState the value for the private _objRegMemberAsPrmtState (Read-Only) if set due to an expansion on the reg_member.prmt_state reverse relationship
	 * @property-read RegMember[] $_RegMemberAsPrmtStateArray the value for the private _objRegMemberAsPrmtStateArray (Read-Only) if set due to an ExpandAsArray on the reg_member.prmt_state reverse relationship
	 * @property-read RegMember $_RegMemberAsCoState the value for the private _objRegMemberAsCoState (Read-Only) if set due to an expansion on the reg_member.co_state reverse relationship
	 * @property-read RegMember[] $_RegMemberAsCoStateArray the value for the private _objRegMemberAsCoStateArray (Read-Only) if set due to an ExpandAsArray on the reg_member.co_state reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PlaceGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column place.idplace
		 * @var integer intIdplace
		 */
		protected $intIdplace;
		const IdplaceDefault = null;


		/**
		 * Protected member variable that maps to the database column place.grp
		 * @var integer intGrp
		 */
		protected $intGrp;
		const GrpDefault = null;


		/**
		 * Protected member variable that maps to the database column place.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column place.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column place.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Protected member variable that maps to the database column place.mname
		 * @var string strMname
		 */
		protected $strMname;
		const MnameDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsCountry object
		 * (of type Address), if this Place object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsCountry;
		 */
		private $_objAddressAsCountry;

		/**
		 * Private member variable that stores a reference to an array of AddressAsCountry objects
		 * (of type Address[]), if this Place object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsCountryArray;
		 */
		private $_objAddressAsCountryArray = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsState object
		 * (of type Address), if this Place object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsState;
		 */
		private $_objAddressAsState;

		/**
		 * Private member variable that stores a reference to an array of AddressAsState objects
		 * (of type Address[]), if this Place object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsStateArray;
		 */
		private $_objAddressAsStateArray = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsDistrict object
		 * (of type Address), if this Place object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsDistrict;
		 */
		private $_objAddressAsDistrict;

		/**
		 * Private member variable that stores a reference to an array of AddressAsDistrict objects
		 * (of type Address[]), if this Place object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsDistrictArray;
		 */
		private $_objAddressAsDistrictArray = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsTaluka object
		 * (of type Address), if this Place object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsTaluka;
		 */
		private $_objAddressAsTaluka;

		/**
		 * Private member variable that stores a reference to an array of AddressAsTaluka objects
		 * (of type Address[]), if this Place object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsTalukaArray;
		 */
		private $_objAddressAsTalukaArray = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsCountry1 object
		 * (of type Address), if this Place object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsCountry1;
		 */
		private $_objAddressAsCountry1;

		/**
		 * Private member variable that stores a reference to an array of AddressAsCountry1 objects
		 * (of type Address[]), if this Place object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsCountry1Array;
		 */
		private $_objAddressAsCountry1Array = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsState1 object
		 * (of type Address), if this Place object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsState1;
		 */
		private $_objAddressAsState1;

		/**
		 * Private member variable that stores a reference to an array of AddressAsState1 objects
		 * (of type Address[]), if this Place object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsState1Array;
		 */
		private $_objAddressAsState1Array = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsDistrict1 object
		 * (of type Address), if this Place object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsDistrict1;
		 */
		private $_objAddressAsDistrict1;

		/**
		 * Private member variable that stores a reference to an array of AddressAsDistrict1 objects
		 * (of type Address[]), if this Place object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsDistrict1Array;
		 */
		private $_objAddressAsDistrict1Array = null;

		/**
		 * Private member variable that stores a reference to a single AddressAsTaluka1 object
		 * (of type Address), if this Place object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsTaluka1;
		 */
		private $_objAddressAsTaluka1;

		/**
		 * Private member variable that stores a reference to an array of AddressAsTaluka1 objects
		 * (of type Address[]), if this Place object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsTaluka1Array;
		 */
		private $_objAddressAsTaluka1Array = null;

		/**
		 * Private member variable that stores a reference to a single AssMemberAsState object
		 * (of type AssMember), if this Place object was restored with
		 * an expansion on the ass_member association table.
		 * @var AssMember _objAssMemberAsState;
		 */
		private $_objAssMemberAsState;

		/**
		 * Private member variable that stores a reference to an array of AssMemberAsState objects
		 * (of type AssMember[]), if this Place object was restored with
		 * an ExpandAsArray on the ass_member association table.
		 * @var AssMember[] _objAssMemberAsStateArray;
		 */
		private $_objAssMemberAsStateArray = null;

		/**
		 * Private member variable that stores a reference to a single PlaceAsParrent object
		 * (of type Place), if this Place object was restored with
		 * an expansion on the place association table.
		 * @var Place _objPlaceAsParrent;
		 */
		private $_objPlaceAsParrent;

		/**
		 * Private member variable that stores a reference to an array of PlaceAsParrent objects
		 * (of type Place[]), if this Place object was restored with
		 * an ExpandAsArray on the place association table.
		 * @var Place[] _objPlaceAsParrentArray;
		 */
		private $_objPlaceAsParrentArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsState object
		 * (of type Profile), if this Place object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsState;
		 */
		private $_objProfileAsState;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsState objects
		 * (of type Profile[]), if this Place object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsStateArray;
		 */
		private $_objProfileAsStateArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsState1 object
		 * (of type Profile), if this Place object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsState1;
		 */
		private $_objProfileAsState1;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsState1 objects
		 * (of type Profile[]), if this Place object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsState1Array;
		 */
		private $_objProfileAsState1Array = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsDistrict object
		 * (of type Profile), if this Place object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsDistrict;
		 */
		private $_objProfileAsDistrict;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsDistrict objects
		 * (of type Profile[]), if this Place object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsDistrictArray;
		 */
		private $_objProfileAsDistrictArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsDistrict1 object
		 * (of type Profile), if this Place object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsDistrict1;
		 */
		private $_objProfileAsDistrict1;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsDistrict1 objects
		 * (of type Profile[]), if this Place object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsDistrict1Array;
		 */
		private $_objProfileAsDistrict1Array = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsTaluka object
		 * (of type Profile), if this Place object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsTaluka;
		 */
		private $_objProfileAsTaluka;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsTaluka objects
		 * (of type Profile[]), if this Place object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsTalukaArray;
		 */
		private $_objProfileAsTalukaArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsTaluka1 object
		 * (of type Profile), if this Place object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsTaluka1;
		 */
		private $_objProfileAsTaluka1;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsTaluka1 objects
		 * (of type Profile[]), if this Place object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsTaluka1Array;
		 */
		private $_objProfileAsTaluka1Array = null;

		/**
		 * Private member variable that stores a reference to a single RegMemberAsPrmtState object
		 * (of type RegMember), if this Place object was restored with
		 * an expansion on the reg_member association table.
		 * @var RegMember _objRegMemberAsPrmtState;
		 */
		private $_objRegMemberAsPrmtState;

		/**
		 * Private member variable that stores a reference to an array of RegMemberAsPrmtState objects
		 * (of type RegMember[]), if this Place object was restored with
		 * an ExpandAsArray on the reg_member association table.
		 * @var RegMember[] _objRegMemberAsPrmtStateArray;
		 */
		private $_objRegMemberAsPrmtStateArray = null;

		/**
		 * Private member variable that stores a reference to a single RegMemberAsCoState object
		 * (of type RegMember), if this Place object was restored with
		 * an expansion on the reg_member association table.
		 * @var RegMember _objRegMemberAsCoState;
		 */
		private $_objRegMemberAsCoState;

		/**
		 * Private member variable that stores a reference to an array of RegMemberAsCoState objects
		 * (of type RegMember[]), if this Place object was restored with
		 * an ExpandAsArray on the reg_member association table.
		 * @var RegMember[] _objRegMemberAsCoStateArray;
		 */
		private $_objRegMemberAsCoStateArray = null;

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
		 * in the database column place.grp.
		 *
		 * NOTE: Always use the GrpObject property getter to correctly retrieve this PlaceGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var PlaceGrp objGrpObject
		 */
		protected $objGrpObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column place.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objParrentObject
		 */
		protected $objParrentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdplace = Place::IdplaceDefault;
			$this->intGrp = Place::GrpDefault;
			$this->strCode = Place::CodeDefault;
			$this->strName = Place::NameDefault;
			$this->intParrent = Place::ParrentDefault;
			$this->strMname = Place::MnameDefault;
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
		 * Load a Place from PK Info
		 * @param integer $intIdplace
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Place
		 */
		public static function Load($intIdplace, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Place', $intIdplace);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Place::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Place()->Idplace, $intIdplace)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Places
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Place[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Place::QueryArray to perform the LoadAll query
			try {
				return Place::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Places
		 * @return int
		 */
		public static function CountAll() {
			// Call Place::QueryCount to perform the CountAll query
			return Place::QueryCount(QQ::All());
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
			$objDatabase = Place::GetDatabase();

			// Create/Build out the QueryBuilder object with Place-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'place');

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
				Place::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('place');

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
		 * Static Qcubed Query method to query for a single Place object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Place the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Place::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Place object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Place::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Place::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Place objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Place[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Place::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Place::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Place::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Place objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Place::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Place::GetDatabase();

			$strQuery = Place::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/place', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Place::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Place
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'place';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idplace', $strAliasPrefix . 'idplace');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idplace', $strAliasPrefix . 'idplace');
			    $objBuilder->AddSelectItem($strTableName, 'grp', $strAliasPrefix . 'grp');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
			    $objBuilder->AddSelectItem($strTableName, 'mname', $strAliasPrefix . 'mname');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Place from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Place::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Place
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdplace == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'place__';


						// Expanding reverse references: AddressAsCountry
						$strAlias = $strAliasPrefix . 'addressascountry__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsCountryArray)
								$objPreviousItem->_objAddressAsCountryArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsCountryArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsCountryArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascountry__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsCountryArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsCountryArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascountry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsState
						$strAlias = $strAliasPrefix . 'addressasstate__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsStateArray)
								$objPreviousItem->_objAddressAsStateArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsStateArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsStateArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasstate__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsStateArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsStateArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsDistrict
						$strAlias = $strAliasPrefix . 'addressasdistrict__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsDistrictArray)
								$objPreviousItem->_objAddressAsDistrictArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsDistrictArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsDistrictArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdistrict__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsDistrictArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsDistrictArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdistrict__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsTaluka
						$strAlias = $strAliasPrefix . 'addressastaluka__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsTalukaArray)
								$objPreviousItem->_objAddressAsTalukaArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsTalukaArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsTalukaArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressastaluka__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsTalukaArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsTalukaArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressastaluka__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsCountry1
						$strAlias = $strAliasPrefix . 'addressascountry1__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsCountry1Array)
								$objPreviousItem->_objAddressAsCountry1Array = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsCountry1Array)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsCountry1Array;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascountry1__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsCountry1Array[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsCountry1Array[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascountry1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsState1
						$strAlias = $strAliasPrefix . 'addressasstate1__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsState1Array)
								$objPreviousItem->_objAddressAsState1Array = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsState1Array)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsState1Array;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasstate1__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsState1Array[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsState1Array[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasstate1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsDistrict1
						$strAlias = $strAliasPrefix . 'addressasdistrict1__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsDistrict1Array)
								$objPreviousItem->_objAddressAsDistrict1Array = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsDistrict1Array)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsDistrict1Array;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdistrict1__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsDistrict1Array[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsDistrict1Array[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdistrict1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AddressAsTaluka1
						$strAlias = $strAliasPrefix . 'addressastaluka1__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsTaluka1Array)
								$objPreviousItem->_objAddressAsTaluka1Array = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsTaluka1Array)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsTaluka1Array;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressastaluka1__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsTaluka1Array[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsTaluka1Array[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressastaluka1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: AssMemberAsState
						$strAlias = $strAliasPrefix . 'assmemberasstate__idass_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAssMemberAsStateArray)
								$objPreviousItem->_objAssMemberAsStateArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAssMemberAsStateArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAssMemberAsStateArray;
								$objChildItem = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasstate__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAssMemberAsStateArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAssMemberAsStateArray[] = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: PlaceAsParrent
						$strAlias = $strAliasPrefix . 'placeasparrent__idplace';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objPlaceAsParrentArray)
								$objPreviousItem->_objPlaceAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objPlaceAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objPlaceAsParrentArray;
								$objChildItem = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'placeasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objPlaceAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objPlaceAsParrentArray[] = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'placeasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsState
						$strAlias = $strAliasPrefix . 'profileasstate__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsStateArray)
								$objPreviousItem->_objProfileAsStateArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsStateArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsStateArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasstate__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsStateArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsStateArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsState1
						$strAlias = $strAliasPrefix . 'profileasstate1__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsState1Array)
								$objPreviousItem->_objProfileAsState1Array = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsState1Array)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsState1Array;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasstate1__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsState1Array[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsState1Array[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasstate1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsDistrict
						$strAlias = $strAliasPrefix . 'profileasdistrict__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsDistrictArray)
								$objPreviousItem->_objProfileAsDistrictArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsDistrictArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsDistrictArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasdistrict__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsDistrictArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsDistrictArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasdistrict__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsDistrict1
						$strAlias = $strAliasPrefix . 'profileasdistrict1__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsDistrict1Array)
								$objPreviousItem->_objProfileAsDistrict1Array = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsDistrict1Array)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsDistrict1Array;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasdistrict1__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsDistrict1Array[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsDistrict1Array[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasdistrict1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsTaluka
						$strAlias = $strAliasPrefix . 'profileastaluka__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsTalukaArray)
								$objPreviousItem->_objProfileAsTalukaArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsTalukaArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsTalukaArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileastaluka__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsTalukaArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsTalukaArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileastaluka__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsTaluka1
						$strAlias = $strAliasPrefix . 'profileastaluka1__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsTaluka1Array)
								$objPreviousItem->_objProfileAsTaluka1Array = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsTaluka1Array)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsTaluka1Array;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileastaluka1__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsTaluka1Array[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsTaluka1Array[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileastaluka1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RegMemberAsPrmtState
						$strAlias = $strAliasPrefix . 'regmemberasprmtstate__idreg_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRegMemberAsPrmtStateArray)
								$objPreviousItem->_objRegMemberAsPrmtStateArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRegMemberAsPrmtStateArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRegMemberAsPrmtStateArray;
								$objChildItem = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasprmtstate__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRegMemberAsPrmtStateArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRegMemberAsPrmtStateArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasprmtstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RegMemberAsCoState
						$strAlias = $strAliasPrefix . 'regmemberascostate__idreg_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRegMemberAsCoStateArray)
								$objPreviousItem->_objRegMemberAsCoStateArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRegMemberAsCoStateArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRegMemberAsCoStateArray;
								$objChildItem = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberascostate__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRegMemberAsCoStateArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRegMemberAsCoStateArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberascostate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'place__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Place object
			$objToReturn = new Place();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdplace = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'mname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMname = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idplace != $objPreviousItem->Idplace) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsCountryArray);
					$cnt = count($objToReturn->_objAddressAsCountryArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsCountryArray, $objToReturn->_objAddressAsCountryArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsStateArray);
					$cnt = count($objToReturn->_objAddressAsStateArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsStateArray, $objToReturn->_objAddressAsStateArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsDistrictArray);
					$cnt = count($objToReturn->_objAddressAsDistrictArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsDistrictArray, $objToReturn->_objAddressAsDistrictArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsTalukaArray);
					$cnt = count($objToReturn->_objAddressAsTalukaArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsTalukaArray, $objToReturn->_objAddressAsTalukaArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsCountry1Array);
					$cnt = count($objToReturn->_objAddressAsCountry1Array);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsCountry1Array, $objToReturn->_objAddressAsCountry1Array)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsState1Array);
					$cnt = count($objToReturn->_objAddressAsState1Array);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsState1Array, $objToReturn->_objAddressAsState1Array)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsDistrict1Array);
					$cnt = count($objToReturn->_objAddressAsDistrict1Array);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsDistrict1Array, $objToReturn->_objAddressAsDistrict1Array)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAddressAsTaluka1Array);
					$cnt = count($objToReturn->_objAddressAsTaluka1Array);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsTaluka1Array, $objToReturn->_objAddressAsTaluka1Array)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objAssMemberAsStateArray);
					$cnt = count($objToReturn->_objAssMemberAsStateArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAssMemberAsStateArray, $objToReturn->_objAssMemberAsStateArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objPlaceAsParrentArray);
					$cnt = count($objToReturn->_objPlaceAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objPlaceAsParrentArray, $objToReturn->_objPlaceAsParrentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsStateArray);
					$cnt = count($objToReturn->_objProfileAsStateArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsStateArray, $objToReturn->_objProfileAsStateArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsState1Array);
					$cnt = count($objToReturn->_objProfileAsState1Array);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsState1Array, $objToReturn->_objProfileAsState1Array)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsDistrictArray);
					$cnt = count($objToReturn->_objProfileAsDistrictArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsDistrictArray, $objToReturn->_objProfileAsDistrictArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsDistrict1Array);
					$cnt = count($objToReturn->_objProfileAsDistrict1Array);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsDistrict1Array, $objToReturn->_objProfileAsDistrict1Array)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsTalukaArray);
					$cnt = count($objToReturn->_objProfileAsTalukaArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsTalukaArray, $objToReturn->_objProfileAsTalukaArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsTaluka1Array);
					$cnt = count($objToReturn->_objProfileAsTaluka1Array);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsTaluka1Array, $objToReturn->_objProfileAsTaluka1Array)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRegMemberAsPrmtStateArray);
					$cnt = count($objToReturn->_objRegMemberAsPrmtStateArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRegMemberAsPrmtStateArray, $objToReturn->_objRegMemberAsPrmtStateArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRegMemberAsCoStateArray);
					$cnt = count($objToReturn->_objRegMemberAsCoStateArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRegMemberAsCoStateArray, $objToReturn->_objRegMemberAsCoStateArray)) {
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
				$strAliasPrefix = 'place__';

			// Check for GrpObject Early Binding
			$strAlias = $strAliasPrefix . 'grp__idplace_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGrpObject = PlaceGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for AddressAsCountry Virtual Binding
			$strAlias = $strAliasPrefix . 'addressascountry__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsCountryArray)
				$objToReturn->_objAddressAsCountryArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsCountryArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascountry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsCountry = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascountry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsState Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasstate__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsStateArray)
				$objToReturn->_objAddressAsStateArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsStateArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsState = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsDistrict Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasdistrict__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsDistrictArray)
				$objToReturn->_objAddressAsDistrictArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsDistrictArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdistrict__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsDistrict = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdistrict__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsTaluka Virtual Binding
			$strAlias = $strAliasPrefix . 'addressastaluka__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsTalukaArray)
				$objToReturn->_objAddressAsTalukaArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsTalukaArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressastaluka__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsTaluka = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressastaluka__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsCountry1 Virtual Binding
			$strAlias = $strAliasPrefix . 'addressascountry1__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsCountry1Array)
				$objToReturn->_objAddressAsCountry1Array = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsCountry1Array[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascountry1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsCountry1 = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascountry1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsState1 Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasstate1__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsState1Array)
				$objToReturn->_objAddressAsState1Array = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsState1Array[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasstate1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsState1 = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasstate1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsDistrict1 Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasdistrict1__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsDistrict1Array)
				$objToReturn->_objAddressAsDistrict1Array = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsDistrict1Array[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdistrict1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsDistrict1 = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasdistrict1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AddressAsTaluka1 Virtual Binding
			$strAlias = $strAliasPrefix . 'addressastaluka1__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsTaluka1Array)
				$objToReturn->_objAddressAsTaluka1Array = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsTaluka1Array[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressastaluka1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsTaluka1 = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressastaluka1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for AssMemberAsState Virtual Binding
			$strAlias = $strAliasPrefix . 'assmemberasstate__idass_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAssMemberAsStateArray)
				$objToReturn->_objAssMemberAsStateArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAssMemberAsStateArray[] = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAssMemberAsState = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for PlaceAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'placeasparrent__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objPlaceAsParrentArray)
				$objToReturn->_objPlaceAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objPlaceAsParrentArray[] = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'placeasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objPlaceAsParrent = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'placeasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsState Virtual Binding
			$strAlias = $strAliasPrefix . 'profileasstate__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsStateArray)
				$objToReturn->_objProfileAsStateArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsStateArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsState = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsState1 Virtual Binding
			$strAlias = $strAliasPrefix . 'profileasstate1__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsState1Array)
				$objToReturn->_objProfileAsState1Array = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsState1Array[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasstate1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsState1 = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasstate1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsDistrict Virtual Binding
			$strAlias = $strAliasPrefix . 'profileasdistrict__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsDistrictArray)
				$objToReturn->_objProfileAsDistrictArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsDistrictArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasdistrict__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsDistrict = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasdistrict__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsDistrict1 Virtual Binding
			$strAlias = $strAliasPrefix . 'profileasdistrict1__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsDistrict1Array)
				$objToReturn->_objProfileAsDistrict1Array = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsDistrict1Array[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasdistrict1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsDistrict1 = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasdistrict1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsTaluka Virtual Binding
			$strAlias = $strAliasPrefix . 'profileastaluka__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsTalukaArray)
				$objToReturn->_objProfileAsTalukaArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsTalukaArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileastaluka__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsTaluka = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileastaluka__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsTaluka1 Virtual Binding
			$strAlias = $strAliasPrefix . 'profileastaluka1__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsTaluka1Array)
				$objToReturn->_objProfileAsTaluka1Array = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsTaluka1Array[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileastaluka1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsTaluka1 = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileastaluka1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RegMemberAsPrmtState Virtual Binding
			$strAlias = $strAliasPrefix . 'regmemberasprmtstate__idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRegMemberAsPrmtStateArray)
				$objToReturn->_objRegMemberAsPrmtStateArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRegMemberAsPrmtStateArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasprmtstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRegMemberAsPrmtState = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasprmtstate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RegMemberAsCoState Virtual Binding
			$strAlias = $strAliasPrefix . 'regmemberascostate__idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRegMemberAsCoStateArray)
				$objToReturn->_objRegMemberAsCoStateArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRegMemberAsCoStateArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberascostate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRegMemberAsCoState = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberascostate__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Places from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Place[]
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
					$objItem = Place::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Place::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Place object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Place next row resulting from the query
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
			return Place::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Place object,
		 * by Idplace Index(es)
		 * @param integer $intIdplace
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Place
		*/
		public static function LoadByIdplace($intIdplace, $objOptionalClauses = null) {
			return Place::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Place()->Idplace, $intIdplace)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Place object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Place
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return Place::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Place()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Place objects,
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Place[]
		*/
		public static function LoadArrayByGrp($intGrp, $objOptionalClauses = null) {
			// Call Place::QueryArray to perform the LoadArrayByGrp query
			try {
				return Place::QueryArray(
					QQ::Equal(QQN::Place()->Grp, $intGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Places
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @return int
		*/
		public static function CountByGrp($intGrp) {
			// Call Place::QueryCount to perform the CountByGrp query
			return Place::QueryCount(
				QQ::Equal(QQN::Place()->Grp, $intGrp)
			);
		}

		/**
		 * Load an array of Place objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Place[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call Place::QueryArray to perform the LoadArrayByParrent query
			try {
				return Place::QueryArray(
					QQ::Equal(QQN::Place()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Places
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call Place::QueryCount to perform the CountByParrent query
			return Place::QueryCount(
				QQ::Equal(QQN::Place()->Parrent, $intParrent)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Place
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `place` (
							`grp`,
							`code`,
							`name`,
							`parrent`,
							`mname`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intGrp) . ',
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . ',
							' . $objDatabase->SqlVariable($this->strMname) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdplace = $objDatabase->InsertId('place', 'idplace');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`place`
						SET
							`grp` = ' . $objDatabase->SqlVariable($this->intGrp) . ',
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . ',
							`mname` = ' . $objDatabase->SqlVariable($this->strMname) . '
						WHERE
							`idplace` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
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
		 * Delete this Place
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Place with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`place`
				WHERE
					`idplace` = ' . $objDatabase->SqlVariable($this->intIdplace) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Place ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Place', $this->intIdplace);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Places
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`place`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate place table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `place`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Place from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Place object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Place::Load($this->intIdplace);

			// Update $this's local variables to match
			$this->Grp = $objReloaded->Grp;
			$this->strCode = $objReloaded->strCode;
			$this->strName = $objReloaded->strName;
			$this->Parrent = $objReloaded->Parrent;
			$this->strMname = $objReloaded->strMname;
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
				case 'Idplace':
					/**
					 * Gets the value for intIdplace (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdplace;

				case 'Grp':
					/**
					 * Gets the value for intGrp (Not Null)
					 * @return integer
					 */
					return $this->intGrp;

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

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;

				case 'Mname':
					/**
					 * Gets the value for strMname 
					 * @return string
					 */
					return $this->strMname;


				///////////////////
				// Member Objects
				///////////////////
				case 'GrpObject':
					/**
					 * Gets the value for the PlaceGrp object referenced by intGrp (Not Null)
					 * @return PlaceGrp
					 */
					try {
						if ((!$this->objGrpObject) && (!is_null($this->intGrp)))
							$this->objGrpObject = PlaceGrp::Load($this->intGrp);
						return $this->objGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ParrentObject':
					/**
					 * Gets the value for the Place object referenced by intParrent 
					 * @return Place
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = Place::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AddressAsCountry':
					/**
					 * Gets the value for the private _objAddressAsCountry (Read-Only)
					 * if set due to an expansion on the address.country reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsCountry;

				case '_AddressAsCountryArray':
					/**
					 * Gets the value for the private _objAddressAsCountryArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.country reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsCountryArray;

				case '_AddressAsState':
					/**
					 * Gets the value for the private _objAddressAsState (Read-Only)
					 * if set due to an expansion on the address.state reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsState;

				case '_AddressAsStateArray':
					/**
					 * Gets the value for the private _objAddressAsStateArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.state reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsStateArray;

				case '_AddressAsDistrict':
					/**
					 * Gets the value for the private _objAddressAsDistrict (Read-Only)
					 * if set due to an expansion on the address.district reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsDistrict;

				case '_AddressAsDistrictArray':
					/**
					 * Gets the value for the private _objAddressAsDistrictArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.district reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsDistrictArray;

				case '_AddressAsTaluka':
					/**
					 * Gets the value for the private _objAddressAsTaluka (Read-Only)
					 * if set due to an expansion on the address.taluka reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsTaluka;

				case '_AddressAsTalukaArray':
					/**
					 * Gets the value for the private _objAddressAsTalukaArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.taluka reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsTalukaArray;

				case '_AddressAsCountry1':
					/**
					 * Gets the value for the private _objAddressAsCountry1 (Read-Only)
					 * if set due to an expansion on the address.country1 reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsCountry1;

				case '_AddressAsCountry1Array':
					/**
					 * Gets the value for the private _objAddressAsCountry1Array (Read-Only)
					 * if set due to an ExpandAsArray on the address.country1 reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsCountry1Array;

				case '_AddressAsState1':
					/**
					 * Gets the value for the private _objAddressAsState1 (Read-Only)
					 * if set due to an expansion on the address.state1 reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsState1;

				case '_AddressAsState1Array':
					/**
					 * Gets the value for the private _objAddressAsState1Array (Read-Only)
					 * if set due to an ExpandAsArray on the address.state1 reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsState1Array;

				case '_AddressAsDistrict1':
					/**
					 * Gets the value for the private _objAddressAsDistrict1 (Read-Only)
					 * if set due to an expansion on the address.district1 reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsDistrict1;

				case '_AddressAsDistrict1Array':
					/**
					 * Gets the value for the private _objAddressAsDistrict1Array (Read-Only)
					 * if set due to an ExpandAsArray on the address.district1 reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsDistrict1Array;

				case '_AddressAsTaluka1':
					/**
					 * Gets the value for the private _objAddressAsTaluka1 (Read-Only)
					 * if set due to an expansion on the address.taluka1 reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsTaluka1;

				case '_AddressAsTaluka1Array':
					/**
					 * Gets the value for the private _objAddressAsTaluka1Array (Read-Only)
					 * if set due to an ExpandAsArray on the address.taluka1 reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsTaluka1Array;

				case '_AssMemberAsState':
					/**
					 * Gets the value for the private _objAssMemberAsState (Read-Only)
					 * if set due to an expansion on the ass_member.state reverse relationship
					 * @return AssMember
					 */
					return $this->_objAssMemberAsState;

				case '_AssMemberAsStateArray':
					/**
					 * Gets the value for the private _objAssMemberAsStateArray (Read-Only)
					 * if set due to an ExpandAsArray on the ass_member.state reverse relationship
					 * @return AssMember[]
					 */
					return $this->_objAssMemberAsStateArray;

				case '_PlaceAsParrent':
					/**
					 * Gets the value for the private _objPlaceAsParrent (Read-Only)
					 * if set due to an expansion on the place.parrent reverse relationship
					 * @return Place
					 */
					return $this->_objPlaceAsParrent;

				case '_PlaceAsParrentArray':
					/**
					 * Gets the value for the private _objPlaceAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the place.parrent reverse relationship
					 * @return Place[]
					 */
					return $this->_objPlaceAsParrentArray;

				case '_ProfileAsState':
					/**
					 * Gets the value for the private _objProfileAsState (Read-Only)
					 * if set due to an expansion on the profile.state reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsState;

				case '_ProfileAsStateArray':
					/**
					 * Gets the value for the private _objProfileAsStateArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.state reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsStateArray;

				case '_ProfileAsState1':
					/**
					 * Gets the value for the private _objProfileAsState1 (Read-Only)
					 * if set due to an expansion on the profile.state1 reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsState1;

				case '_ProfileAsState1Array':
					/**
					 * Gets the value for the private _objProfileAsState1Array (Read-Only)
					 * if set due to an ExpandAsArray on the profile.state1 reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsState1Array;

				case '_ProfileAsDistrict':
					/**
					 * Gets the value for the private _objProfileAsDistrict (Read-Only)
					 * if set due to an expansion on the profile.district reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsDistrict;

				case '_ProfileAsDistrictArray':
					/**
					 * Gets the value for the private _objProfileAsDistrictArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.district reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsDistrictArray;

				case '_ProfileAsDistrict1':
					/**
					 * Gets the value for the private _objProfileAsDistrict1 (Read-Only)
					 * if set due to an expansion on the profile.district1 reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsDistrict1;

				case '_ProfileAsDistrict1Array':
					/**
					 * Gets the value for the private _objProfileAsDistrict1Array (Read-Only)
					 * if set due to an ExpandAsArray on the profile.district1 reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsDistrict1Array;

				case '_ProfileAsTaluka':
					/**
					 * Gets the value for the private _objProfileAsTaluka (Read-Only)
					 * if set due to an expansion on the profile.taluka reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsTaluka;

				case '_ProfileAsTalukaArray':
					/**
					 * Gets the value for the private _objProfileAsTalukaArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.taluka reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsTalukaArray;

				case '_ProfileAsTaluka1':
					/**
					 * Gets the value for the private _objProfileAsTaluka1 (Read-Only)
					 * if set due to an expansion on the profile.taluka1 reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsTaluka1;

				case '_ProfileAsTaluka1Array':
					/**
					 * Gets the value for the private _objProfileAsTaluka1Array (Read-Only)
					 * if set due to an ExpandAsArray on the profile.taluka1 reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsTaluka1Array;

				case '_RegMemberAsPrmtState':
					/**
					 * Gets the value for the private _objRegMemberAsPrmtState (Read-Only)
					 * if set due to an expansion on the reg_member.prmt_state reverse relationship
					 * @return RegMember
					 */
					return $this->_objRegMemberAsPrmtState;

				case '_RegMemberAsPrmtStateArray':
					/**
					 * Gets the value for the private _objRegMemberAsPrmtStateArray (Read-Only)
					 * if set due to an ExpandAsArray on the reg_member.prmt_state reverse relationship
					 * @return RegMember[]
					 */
					return $this->_objRegMemberAsPrmtStateArray;

				case '_RegMemberAsCoState':
					/**
					 * Gets the value for the private _objRegMemberAsCoState (Read-Only)
					 * if set due to an expansion on the reg_member.co_state reverse relationship
					 * @return RegMember
					 */
					return $this->_objRegMemberAsCoState;

				case '_RegMemberAsCoStateArray':
					/**
					 * Gets the value for the private _objRegMemberAsCoStateArray (Read-Only)
					 * if set due to an ExpandAsArray on the reg_member.co_state reverse relationship
					 * @return RegMember[]
					 */
					return $this->_objRegMemberAsCoStateArray;


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
				case 'Grp':
					/**
					 * Sets the value for intGrp (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objGrpObject = null;
						return ($this->intGrp = QType::Cast($mixValue, QType::Integer));
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

				case 'Mname':
					/**
					 * Sets the value for strMname 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'GrpObject':
					/**
					 * Sets the value for the PlaceGrp object referenced by intGrp (Not Null)
					 * @param PlaceGrp $mixValue
					 * @return PlaceGrp
					 */
					if (is_null($mixValue)) {
						$this->intGrp = null;
						$this->objGrpObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a PlaceGrp object
						try {
							$mixValue = QType::Cast($mixValue, 'PlaceGrp');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED PlaceGrp object
						if (is_null($mixValue->IdplaceGrp))
							throw new QCallerException('Unable to set an unsaved GrpObject for this Place');

						// Update Local Member Variables
						$this->objGrpObject = $mixValue;
						$this->intGrp = $mixValue->IdplaceGrp;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ParrentObject':
					/**
					 * Sets the value for the Place object referenced by intParrent 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved ParrentObject for this Place');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->Idplace;

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



		// Related Objects' Methods for AddressAsCountry
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsCountry as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsCountryArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Address::LoadArrayByCountry($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsCountry
		 * @return int
		*/
		public function CountAddressesAsCountry() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Address::CountByCountry($this->intIdplace);
		}

		/**
		 * Associates a AddressAsCountry
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsCountry(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsCountry on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsCountry on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`country` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsCountry
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsCountry(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`country` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`country` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AddressesAsCountry
		 * @return void
		*/
		public function UnassociateAllAddressesAsCountry() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`country` = null
				WHERE
					`country` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AddressAsCountry
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsCountry(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`country` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsCountry
		 * @return void
		*/
		public function DeleteAllAddressesAsCountry() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`country` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for AddressAsState
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsState as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsStateArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Address::LoadArrayByState($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsState
		 * @return int
		*/
		public function CountAddressesAsState() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Address::CountByState($this->intIdplace);
		}

		/**
		 * Associates a AddressAsState
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsState(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsState on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsState on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsState
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsState(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`state` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AddressesAsState
		 * @return void
		*/
		public function UnassociateAllAddressesAsState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`state` = null
				WHERE
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AddressAsState
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsState(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsState
		 * @return void
		*/
		public function DeleteAllAddressesAsState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for AddressAsDistrict
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsDistrict as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsDistrictArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Address::LoadArrayByDistrict($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsDistrict
		 * @return int
		*/
		public function CountAddressesAsDistrict() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Address::CountByDistrict($this->intIdplace);
		}

		/**
		 * Associates a AddressAsDistrict
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsDistrict(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsDistrict on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsDistrict on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsDistrict
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsDistrict(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`district` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AddressesAsDistrict
		 * @return void
		*/
		public function UnassociateAllAddressesAsDistrict() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`district` = null
				WHERE
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AddressAsDistrict
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsDistrict(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsDistrict
		 * @return void
		*/
		public function DeleteAllAddressesAsDistrict() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for AddressAsTaluka
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsTaluka as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsTalukaArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Address::LoadArrayByTaluka($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsTaluka
		 * @return int
		*/
		public function CountAddressesAsTaluka() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Address::CountByTaluka($this->intIdplace);
		}

		/**
		 * Associates a AddressAsTaluka
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsTaluka(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsTaluka on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsTaluka on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsTaluka
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsTaluka(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`taluka` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AddressesAsTaluka
		 * @return void
		*/
		public function UnassociateAllAddressesAsTaluka() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`taluka` = null
				WHERE
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AddressAsTaluka
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsTaluka(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsTaluka
		 * @return void
		*/
		public function DeleteAllAddressesAsTaluka() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for AddressAsCountry1
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsCountry1 as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsCountry1Array($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Address::LoadArrayByCountry1($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsCountry1
		 * @return int
		*/
		public function CountAddressesAsCountry1() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Address::CountByCountry1($this->intIdplace);
		}

		/**
		 * Associates a AddressAsCountry1
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsCountry1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsCountry1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsCountry1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`country1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsCountry1
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsCountry1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`country1` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`country1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AddressesAsCountry1
		 * @return void
		*/
		public function UnassociateAllAddressesAsCountry1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`country1` = null
				WHERE
					`country1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AddressAsCountry1
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsCountry1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`country1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsCountry1
		 * @return void
		*/
		public function DeleteAllAddressesAsCountry1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCountry1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`country1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for AddressAsState1
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsState1 as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsState1Array($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Address::LoadArrayByState1($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsState1
		 * @return int
		*/
		public function CountAddressesAsState1() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Address::CountByState1($this->intIdplace);
		}

		/**
		 * Associates a AddressAsState1
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsState1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsState1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsState1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsState1
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsState1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`state1` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AddressesAsState1
		 * @return void
		*/
		public function UnassociateAllAddressesAsState1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`state1` = null
				WHERE
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AddressAsState1
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsState1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsState1
		 * @return void
		*/
		public function DeleteAllAddressesAsState1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsState1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for AddressAsDistrict1
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsDistrict1 as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsDistrict1Array($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Address::LoadArrayByDistrict1($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsDistrict1
		 * @return int
		*/
		public function CountAddressesAsDistrict1() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Address::CountByDistrict1($this->intIdplace);
		}

		/**
		 * Associates a AddressAsDistrict1
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsDistrict1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsDistrict1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsDistrict1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsDistrict1
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsDistrict1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`district1` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AddressesAsDistrict1
		 * @return void
		*/
		public function UnassociateAllAddressesAsDistrict1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`district1` = null
				WHERE
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AddressAsDistrict1
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsDistrict1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsDistrict1
		 * @return void
		*/
		public function DeleteAllAddressesAsDistrict1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsDistrict1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for AddressAsTaluka1
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsTaluka1 as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsTaluka1Array($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Address::LoadArrayByTaluka1($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsTaluka1
		 * @return int
		*/
		public function CountAddressesAsTaluka1() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Address::CountByTaluka1($this->intIdplace);
		}

		/**
		 * Associates a AddressAsTaluka1
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsTaluka1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsTaluka1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsTaluka1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsTaluka1
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsTaluka1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`taluka1` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AddressesAsTaluka1
		 * @return void
		*/
		public function UnassociateAllAddressesAsTaluka1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`taluka1` = null
				WHERE
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AddressAsTaluka1
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsTaluka1(Address $objAddress) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka1 on this unsaved Place.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka1 on this Place with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsTaluka1
		 * @return void
		*/
		public function DeleteAllAddressesAsTaluka1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsTaluka1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for AssMemberAsState
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AssMembersAsState as an array of AssMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		*/
		public function GetAssMemberAsStateArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return AssMember::LoadArrayByState($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AssMembersAsState
		 * @return int
		*/
		public function CountAssMembersAsState() {
			if ((is_null($this->intIdplace)))
				return 0;

			return AssMember::CountByState($this->intIdplace);
		}

		/**
		 * Associates a AssMemberAsState
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function AssociateAssMemberAsState(AssMember $objAssMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAssMemberAsState on this unsaved Place.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAssMemberAsState on this Place with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . '
			');
		}

		/**
		 * Unassociates a AssMemberAsState
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function UnassociateAssMemberAsState(AssMember $objAssMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsState on this unsaved Place.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsState on this Place with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`state` = null
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . ' AND
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all AssMembersAsState
		 * @return void
		*/
		public function UnassociateAllAssMembersAsState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`state` = null
				WHERE
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated AssMemberAsState
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function DeleteAssociatedAssMemberAsState(AssMember $objAssMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsState on this unsaved Place.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsState on this Place with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . ' AND
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated AssMembersAsState
		 * @return void
		*/
		public function DeleteAllAssMembersAsState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for PlaceAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated PlacesAsParrent as an array of Place objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Place[]
		*/
		public function GetPlaceAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Place::LoadArrayByParrent($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated PlacesAsParrent
		 * @return int
		*/
		public function CountPlacesAsParrent() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Place::CountByParrent($this->intIdplace);
		}

		/**
		 * Associates a PlaceAsParrent
		 * @param Place $objPlace
		 * @return void
		*/
		public function AssociatePlaceAsParrent(Place $objPlace) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePlaceAsParrent on this unsaved Place.');
			if ((is_null($objPlace->Idplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePlaceAsParrent on this Place with an unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`place`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idplace` = ' . $objDatabase->SqlVariable($objPlace->Idplace) . '
			');
		}

		/**
		 * Unassociates a PlaceAsParrent
		 * @param Place $objPlace
		 * @return void
		*/
		public function UnassociatePlaceAsParrent(Place $objPlace) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePlaceAsParrent on this unsaved Place.');
			if ((is_null($objPlace->Idplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePlaceAsParrent on this Place with an unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`place`
				SET
					`parrent` = null
				WHERE
					`idplace` = ' . $objDatabase->SqlVariable($objPlace->Idplace) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all PlacesAsParrent
		 * @return void
		*/
		public function UnassociateAllPlacesAsParrent() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePlaceAsParrent on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`place`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated PlaceAsParrent
		 * @param Place $objPlace
		 * @return void
		*/
		public function DeleteAssociatedPlaceAsParrent(Place $objPlace) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePlaceAsParrent on this unsaved Place.');
			if ((is_null($objPlace->Idplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePlaceAsParrent on this Place with an unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`place`
				WHERE
					`idplace` = ' . $objDatabase->SqlVariable($objPlace->Idplace) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated PlacesAsParrent
		 * @return void
		*/
		public function DeleteAllPlacesAsParrent() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePlaceAsParrent on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`place`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for ProfileAsState
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsState as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsStateArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Profile::LoadArrayByState($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsState
		 * @return int
		*/
		public function CountProfilesAsState() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Profile::CountByState($this->intIdplace);
		}

		/**
		 * Associates a ProfileAsState
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsState(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsState on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsState on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsState
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsState(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`state` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsState
		 * @return void
		*/
		public function UnassociateAllProfilesAsState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`state` = null
				WHERE
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsState
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsState(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsState
		 * @return void
		*/
		public function DeleteAllProfilesAsState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for ProfileAsState1
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsState1 as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsState1Array($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Profile::LoadArrayByState1($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsState1
		 * @return int
		*/
		public function CountProfilesAsState1() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Profile::CountByState1($this->intIdplace);
		}

		/**
		 * Associates a ProfileAsState1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsState1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsState1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsState1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsState1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsState1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`state1` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsState1
		 * @return void
		*/
		public function UnassociateAllProfilesAsState1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`state1` = null
				WHERE
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsState1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsState1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsState1
		 * @return void
		*/
		public function DeleteAllProfilesAsState1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsState1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`state1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for ProfileAsDistrict
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsDistrict as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsDistrictArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Profile::LoadArrayByDistrict($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsDistrict
		 * @return int
		*/
		public function CountProfilesAsDistrict() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Profile::CountByDistrict($this->intIdplace);
		}

		/**
		 * Associates a ProfileAsDistrict
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsDistrict(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsDistrict on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsDistrict on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsDistrict
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsDistrict(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`district` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsDistrict
		 * @return void
		*/
		public function UnassociateAllProfilesAsDistrict() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`district` = null
				WHERE
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsDistrict
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsDistrict(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsDistrict
		 * @return void
		*/
		public function DeleteAllProfilesAsDistrict() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`district` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for ProfileAsDistrict1
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsDistrict1 as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsDistrict1Array($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Profile::LoadArrayByDistrict1($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsDistrict1
		 * @return int
		*/
		public function CountProfilesAsDistrict1() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Profile::CountByDistrict1($this->intIdplace);
		}

		/**
		 * Associates a ProfileAsDistrict1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsDistrict1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsDistrict1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsDistrict1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsDistrict1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsDistrict1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`district1` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsDistrict1
		 * @return void
		*/
		public function UnassociateAllProfilesAsDistrict1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`district1` = null
				WHERE
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsDistrict1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsDistrict1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsDistrict1
		 * @return void
		*/
		public function DeleteAllProfilesAsDistrict1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsDistrict1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`district1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for ProfileAsTaluka
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsTaluka as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsTalukaArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Profile::LoadArrayByTaluka($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsTaluka
		 * @return int
		*/
		public function CountProfilesAsTaluka() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Profile::CountByTaluka($this->intIdplace);
		}

		/**
		 * Associates a ProfileAsTaluka
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsTaluka(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsTaluka on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsTaluka on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsTaluka
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsTaluka(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`taluka` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsTaluka
		 * @return void
		*/
		public function UnassociateAllProfilesAsTaluka() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`taluka` = null
				WHERE
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsTaluka
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsTaluka(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsTaluka
		 * @return void
		*/
		public function DeleteAllProfilesAsTaluka() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`taluka` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for ProfileAsTaluka1
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsTaluka1 as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsTaluka1Array($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return Profile::LoadArrayByTaluka1($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsTaluka1
		 * @return int
		*/
		public function CountProfilesAsTaluka1() {
			if ((is_null($this->intIdplace)))
				return 0;

			return Profile::CountByTaluka1($this->intIdplace);
		}

		/**
		 * Associates a ProfileAsTaluka1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsTaluka1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsTaluka1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsTaluka1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsTaluka1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsTaluka1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`taluka1` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsTaluka1
		 * @return void
		*/
		public function UnassociateAllProfilesAsTaluka1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`taluka1` = null
				WHERE
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsTaluka1
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsTaluka1(Profile $objProfile) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka1 on this unsaved Place.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka1 on this Place with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsTaluka1
		 * @return void
		*/
		public function DeleteAllProfilesAsTaluka1() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsTaluka1 on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`taluka1` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for RegMemberAsPrmtState
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RegMembersAsPrmtState as an array of RegMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public function GetRegMemberAsPrmtStateArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return RegMember::LoadArrayByPrmtState($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RegMembersAsPrmtState
		 * @return int
		*/
		public function CountRegMembersAsPrmtState() {
			if ((is_null($this->intIdplace)))
				return 0;

			return RegMember::CountByPrmtState($this->intIdplace);
		}

		/**
		 * Associates a RegMemberAsPrmtState
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function AssociateRegMemberAsPrmtState(RegMember $objRegMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsPrmtState on this unsaved Place.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsPrmtState on this Place with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`prmt_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . '
			');
		}

		/**
		 * Unassociates a RegMemberAsPrmtState
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function UnassociateRegMemberAsPrmtState(RegMember $objRegMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsPrmtState on this unsaved Place.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsPrmtState on this Place with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`prmt_state` = null
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`prmt_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all RegMembersAsPrmtState
		 * @return void
		*/
		public function UnassociateAllRegMembersAsPrmtState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsPrmtState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`prmt_state` = null
				WHERE
					`prmt_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated RegMemberAsPrmtState
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function DeleteAssociatedRegMemberAsPrmtState(RegMember $objRegMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsPrmtState on this unsaved Place.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsPrmtState on this Place with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`prmt_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated RegMembersAsPrmtState
		 * @return void
		*/
		public function DeleteAllRegMembersAsPrmtState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsPrmtState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`prmt_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}


		// Related Objects' Methods for RegMemberAsCoState
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RegMembersAsCoState as an array of RegMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public function GetRegMemberAsCoStateArray($objOptionalClauses = null) {
			if ((is_null($this->intIdplace)))
				return array();

			try {
				return RegMember::LoadArrayByCoState($this->intIdplace, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RegMembersAsCoState
		 * @return int
		*/
		public function CountRegMembersAsCoState() {
			if ((is_null($this->intIdplace)))
				return 0;

			return RegMember::CountByCoState($this->intIdplace);
		}

		/**
		 * Associates a RegMemberAsCoState
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function AssociateRegMemberAsCoState(RegMember $objRegMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsCoState on this unsaved Place.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsCoState on this Place with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`co_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . '
			');
		}

		/**
		 * Unassociates a RegMemberAsCoState
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function UnassociateRegMemberAsCoState(RegMember $objRegMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCoState on this unsaved Place.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCoState on this Place with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`co_state` = null
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`co_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Unassociates all RegMembersAsCoState
		 * @return void
		*/
		public function UnassociateAllRegMembersAsCoState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCoState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`co_state` = null
				WHERE
					`co_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes an associated RegMemberAsCoState
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function DeleteAssociatedRegMemberAsCoState(RegMember $objRegMember) {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCoState on this unsaved Place.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCoState on this Place with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`co_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
			');
		}

		/**
		 * Deletes all associated RegMembersAsCoState
		 * @return void
		*/
		public function DeleteAllRegMembersAsCoState() {
			if ((is_null($this->intIdplace)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsCoState on this unsaved Place.');

			// Get the Database Object for this Class
			$objDatabase = Place::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`co_state` = ' . $objDatabase->SqlVariable($this->intIdplace) . '
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
			return "place";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Place::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Place"><sequence>';
			$strToReturn .= '<element name="Idplace" type="xsd:int"/>';
			$strToReturn .= '<element name="GrpObject" type="xsd1:PlaceGrp"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="Mname" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Place', $strComplexTypeArray)) {
				$strComplexTypeArray['Place'] = Place::GetSoapComplexTypeXml();
				PlaceGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Place::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Place();
			if (property_exists($objSoapObject, 'Idplace'))
				$objToReturn->intIdplace = $objSoapObject->Idplace;
			if ((property_exists($objSoapObject, 'GrpObject')) &&
				($objSoapObject->GrpObject))
				$objToReturn->GrpObject = PlaceGrp::GetObjectFromSoapObject($objSoapObject->GrpObject);
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = Place::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if (property_exists($objSoapObject, 'Mname'))
				$objToReturn->strMname = $objSoapObject->Mname;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Place::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objGrpObject)
				$objObject->objGrpObject = PlaceGrp::GetSoapObjectFromObject($objObject->objGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGrp = null;
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = Place::GetSoapObjectFromObject($objObject->objParrentObject, false);
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
			$iArray['Idplace'] = $this->intIdplace;
			$iArray['Grp'] = $this->intGrp;
			$iArray['Code'] = $this->strCode;
			$iArray['Name'] = $this->strName;
			$iArray['Parrent'] = $this->intParrent;
			$iArray['Mname'] = $this->strMname;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdplace ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idplace
     * @property-read QQNode $Grp
     * @property-read QQNodePlaceGrp $GrpObject
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $Parrent
     * @property-read QQNodePlace $ParrentObject
     * @property-read QQNode $Mname
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsCountry
     * @property-read QQReverseReferenceNodeAddress $AddressAsState
     * @property-read QQReverseReferenceNodeAddress $AddressAsDistrict
     * @property-read QQReverseReferenceNodeAddress $AddressAsTaluka
     * @property-read QQReverseReferenceNodeAddress $AddressAsCountry1
     * @property-read QQReverseReferenceNodeAddress $AddressAsState1
     * @property-read QQReverseReferenceNodeAddress $AddressAsDistrict1
     * @property-read QQReverseReferenceNodeAddress $AddressAsTaluka1
     * @property-read QQReverseReferenceNodeAssMember $AssMemberAsState
     * @property-read QQReverseReferenceNodePlace $PlaceAsParrent
     * @property-read QQReverseReferenceNodeProfile $ProfileAsState
     * @property-read QQReverseReferenceNodeProfile $ProfileAsState1
     * @property-read QQReverseReferenceNodeProfile $ProfileAsDistrict
     * @property-read QQReverseReferenceNodeProfile $ProfileAsDistrict1
     * @property-read QQReverseReferenceNodeProfile $ProfileAsTaluka
     * @property-read QQReverseReferenceNodeProfile $ProfileAsTaluka1
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsPrmtState
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsCoState

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodePlace extends QQNode {
		protected $strTableName = 'place';
		protected $strPrimaryKey = 'idplace';
		protected $strClassName = 'Place';
		public function __get($strName) {
			switch ($strName) {
				case 'Idplace':
					return new QQNode('idplace', 'Idplace', 'Integer', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'Integer', $this);
				case 'GrpObject':
					return new QQNodePlaceGrp('grp', 'GrpObject', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodePlace('parrent', 'ParrentObject', 'Integer', $this);
				case 'Mname':
					return new QQNode('mname', 'Mname', 'Blob', $this);
				case 'AddressAsCountry':
					return new QQReverseReferenceNodeAddress($this, 'addressascountry', 'reverse_reference', 'country');
				case 'AddressAsState':
					return new QQReverseReferenceNodeAddress($this, 'addressasstate', 'reverse_reference', 'state');
				case 'AddressAsDistrict':
					return new QQReverseReferenceNodeAddress($this, 'addressasdistrict', 'reverse_reference', 'district');
				case 'AddressAsTaluka':
					return new QQReverseReferenceNodeAddress($this, 'addressastaluka', 'reverse_reference', 'taluka');
				case 'AddressAsCountry1':
					return new QQReverseReferenceNodeAddress($this, 'addressascountry1', 'reverse_reference', 'country1');
				case 'AddressAsState1':
					return new QQReverseReferenceNodeAddress($this, 'addressasstate1', 'reverse_reference', 'state1');
				case 'AddressAsDistrict1':
					return new QQReverseReferenceNodeAddress($this, 'addressasdistrict1', 'reverse_reference', 'district1');
				case 'AddressAsTaluka1':
					return new QQReverseReferenceNodeAddress($this, 'addressastaluka1', 'reverse_reference', 'taluka1');
				case 'AssMemberAsState':
					return new QQReverseReferenceNodeAssMember($this, 'assmemberasstate', 'reverse_reference', 'state');
				case 'PlaceAsParrent':
					return new QQReverseReferenceNodePlace($this, 'placeasparrent', 'reverse_reference', 'parrent');
				case 'ProfileAsState':
					return new QQReverseReferenceNodeProfile($this, 'profileasstate', 'reverse_reference', 'state');
				case 'ProfileAsState1':
					return new QQReverseReferenceNodeProfile($this, 'profileasstate1', 'reverse_reference', 'state1');
				case 'ProfileAsDistrict':
					return new QQReverseReferenceNodeProfile($this, 'profileasdistrict', 'reverse_reference', 'district');
				case 'ProfileAsDistrict1':
					return new QQReverseReferenceNodeProfile($this, 'profileasdistrict1', 'reverse_reference', 'district1');
				case 'ProfileAsTaluka':
					return new QQReverseReferenceNodeProfile($this, 'profileastaluka', 'reverse_reference', 'taluka');
				case 'ProfileAsTaluka1':
					return new QQReverseReferenceNodeProfile($this, 'profileastaluka1', 'reverse_reference', 'taluka1');
				case 'RegMemberAsPrmtState':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberasprmtstate', 'reverse_reference', 'prmt_state');
				case 'RegMemberAsCoState':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberascostate', 'reverse_reference', 'co_state');

				case '_PrimaryKeyNode':
					return new QQNode('idplace', 'Idplace', 'Integer', $this);
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
     * @property-read QQNode $Idplace
     * @property-read QQNode $Grp
     * @property-read QQNodePlaceGrp $GrpObject
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $Parrent
     * @property-read QQNodePlace $ParrentObject
     * @property-read QQNode $Mname
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsCountry
     * @property-read QQReverseReferenceNodeAddress $AddressAsState
     * @property-read QQReverseReferenceNodeAddress $AddressAsDistrict
     * @property-read QQReverseReferenceNodeAddress $AddressAsTaluka
     * @property-read QQReverseReferenceNodeAddress $AddressAsCountry1
     * @property-read QQReverseReferenceNodeAddress $AddressAsState1
     * @property-read QQReverseReferenceNodeAddress $AddressAsDistrict1
     * @property-read QQReverseReferenceNodeAddress $AddressAsTaluka1
     * @property-read QQReverseReferenceNodeAssMember $AssMemberAsState
     * @property-read QQReverseReferenceNodePlace $PlaceAsParrent
     * @property-read QQReverseReferenceNodeProfile $ProfileAsState
     * @property-read QQReverseReferenceNodeProfile $ProfileAsState1
     * @property-read QQReverseReferenceNodeProfile $ProfileAsDistrict
     * @property-read QQReverseReferenceNodeProfile $ProfileAsDistrict1
     * @property-read QQReverseReferenceNodeProfile $ProfileAsTaluka
     * @property-read QQReverseReferenceNodeProfile $ProfileAsTaluka1
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsPrmtState
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsCoState

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodePlace extends QQReverseReferenceNode {
		protected $strTableName = 'place';
		protected $strPrimaryKey = 'idplace';
		protected $strClassName = 'Place';
		public function __get($strName) {
			switch ($strName) {
				case 'Idplace':
					return new QQNode('idplace', 'Idplace', 'integer', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'integer', $this);
				case 'GrpObject':
					return new QQNodePlaceGrp('grp', 'GrpObject', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodePlace('parrent', 'ParrentObject', 'integer', $this);
				case 'Mname':
					return new QQNode('mname', 'Mname', 'string', $this);
				case 'AddressAsCountry':
					return new QQReverseReferenceNodeAddress($this, 'addressascountry', 'reverse_reference', 'country');
				case 'AddressAsState':
					return new QQReverseReferenceNodeAddress($this, 'addressasstate', 'reverse_reference', 'state');
				case 'AddressAsDistrict':
					return new QQReverseReferenceNodeAddress($this, 'addressasdistrict', 'reverse_reference', 'district');
				case 'AddressAsTaluka':
					return new QQReverseReferenceNodeAddress($this, 'addressastaluka', 'reverse_reference', 'taluka');
				case 'AddressAsCountry1':
					return new QQReverseReferenceNodeAddress($this, 'addressascountry1', 'reverse_reference', 'country1');
				case 'AddressAsState1':
					return new QQReverseReferenceNodeAddress($this, 'addressasstate1', 'reverse_reference', 'state1');
				case 'AddressAsDistrict1':
					return new QQReverseReferenceNodeAddress($this, 'addressasdistrict1', 'reverse_reference', 'district1');
				case 'AddressAsTaluka1':
					return new QQReverseReferenceNodeAddress($this, 'addressastaluka1', 'reverse_reference', 'taluka1');
				case 'AssMemberAsState':
					return new QQReverseReferenceNodeAssMember($this, 'assmemberasstate', 'reverse_reference', 'state');
				case 'PlaceAsParrent':
					return new QQReverseReferenceNodePlace($this, 'placeasparrent', 'reverse_reference', 'parrent');
				case 'ProfileAsState':
					return new QQReverseReferenceNodeProfile($this, 'profileasstate', 'reverse_reference', 'state');
				case 'ProfileAsState1':
					return new QQReverseReferenceNodeProfile($this, 'profileasstate1', 'reverse_reference', 'state1');
				case 'ProfileAsDistrict':
					return new QQReverseReferenceNodeProfile($this, 'profileasdistrict', 'reverse_reference', 'district');
				case 'ProfileAsDistrict1':
					return new QQReverseReferenceNodeProfile($this, 'profileasdistrict1', 'reverse_reference', 'district1');
				case 'ProfileAsTaluka':
					return new QQReverseReferenceNodeProfile($this, 'profileastaluka', 'reverse_reference', 'taluka');
				case 'ProfileAsTaluka1':
					return new QQReverseReferenceNodeProfile($this, 'profileastaluka1', 'reverse_reference', 'taluka1');
				case 'RegMemberAsPrmtState':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberasprmtstate', 'reverse_reference', 'prmt_state');
				case 'RegMemberAsCoState':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberascostate', 'reverse_reference', 'co_state');

				case '_PrimaryKeyNode':
					return new QQNode('idplace', 'Idplace', 'integer', $this);
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
