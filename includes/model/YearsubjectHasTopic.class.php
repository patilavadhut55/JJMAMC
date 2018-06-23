<?php
	require(__MODEL_GEN__ . '/YearsubjectHasTopicGen.class.php');

	/**
	 * The YearsubjectHasTopic class defined here contains any
	 * customized code for the YearsubjectHasTopic class in the
	 * Object Relational Model.  It represents the "yearsubject_has_topic" table
	 * in the database, and extends from the code generated abstract YearsubjectHasTopicGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * @package My QCubed Application
	 * @subpackage DataObjects
	 *
	 */
	class YearsubjectHasTopic extends YearsubjectHasTopicGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objYearsubjectHasTopic->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('YearsubjectHasTopic Object %s',  $this->intIdyearsubjectHasTopic);
		}


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of YearsubjectHasTopic objects
			return YearsubjectHasTopic::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::YearsubjectHasTopic()->Param1, $strParam1),
					QQ::GreaterThan(QQN::YearsubjectHasTopic()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single YearsubjectHasTopic object
			return YearsubjectHasTopic::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::YearsubjectHasTopic()->Param1, $strParam1),
					QQ::GreaterThan(QQN::YearsubjectHasTopic()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of YearsubjectHasTopic objects
			return YearsubjectHasTopic::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::YearsubjectHasTopic()->Param1, $strParam1),
					QQ::Equal(QQN::YearsubjectHasTopic()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using QCubed Query)

			// Get the Database Object for this Class
			$objDatabase = YearsubjectHasTopic::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`yearsubject_has_topic`.*
				FROM
					`yearsubject_has_topic` AS `yearsubject_has_topic`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return YearsubjectHasTopic::InstantiateDbResult($objDbResult);
		}
*/



		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/


		// Initialize each property with default values from database definition
/*
		public function __construct()
		{
			$this->Initialize();
		}
*/
	}
?>