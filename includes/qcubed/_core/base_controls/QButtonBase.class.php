<?php
	/**
	 * This file contains the QButtonBase class.
	 *
	 * @package Controls
	 */

	/**
	 * This class will render an HTML Button.
	 *
	 * @package Controls
	 *
	 * @property string $Text is used to display the button's text
	 * @property boolean $PrimaryButton is a boolean to specify whether or not the button is 'primary' (e.g. makes this button a "Submit" form element rather than a "Button" form element)
	 * @property boolean $HtmlEntities
	 * @property QButtonMode $ButtonMode for specifying the button mode
	 * @property QBuutonSize $ButtonSize for specifying size of button
	 */
	abstract class QButtonBase extends QActionControl {
		///////////////////////////
		// Private Member Variables
		///////////////////////////

		// APPEARANCE
		protected $strText = null;
		protected $blnHtmlEntities = true;
		protected $strButtonMode = QButtonMode::DefaultMode;
		protected $strButtonSize = null;

		// BEHAVIOR
		protected $blnPrimaryButton = false;

		// SETTINGS
		protected $blnActionsMustTerminate = true;

		//////////
		// Methods
		//////////
		protected function GetControlHtml() {
                        $this->HtmlEntities = FALSE;
			$strStyle = $this->GetStyleAttributes();
			if ($strStyle)
				$strStyle = sprintf('style="%s"', $strStyle);

			switch ($this->strButtonMode) {
				case QButtonMode::DefaultMode:
					$this->AddCssClass('btn btn-default');
					break;
				case QButtonMode::Primary:
					$this->AddCssClass('btn btn-primary');
					break;
				case QButtonMode::Success:
					$this->AddCssClass('btn btn-success');
                                        break;
				case QButtonMode::Save:
					$this->AddCssClass('btn btn-success');
                                        $this->Text = "<i class='fa fa-floppy-o'></i> Save";
                                        break;
				case QButtonMode::Add:
					$this->AddCssClass('btn btn-success');
                                        $this->Text = "<i class='fa fa-plus-circle'></i> Add";
                                        break;
                                case QButtonMode::AddNew:
					$this->AddCssClass('btn btn-success');
                                        $this->Text = "<i class='fa fa-asterisk'></i> Add New";
                                        break;
                                case QButtonMode::listall:
					$this->AddCssClass('btn btn-info');
                                        $this->Text = "<i class='fa fa-th-list fa-fw'></i> View List";
                                        break;
                                case QButtonMode::Info:
					$this->AddCssClass('btn btn-info');
					break;
				case QButtonMode::Warning:
					$this->AddCssClass('btn btn-warning');
					break;
				case QButtonMode::Cancel:
					$this->AddCssClass('btn btn-warning');
                                        $this->Text = "<i class='fa fa-arrow-circle-left'></i> Cancel";
					break;
				case QButtonMode::Danger:
					$this->AddCssClass('btn btn-danger');
					break;
				case QButtonMode::Delete:
					$this->AddCssClass('btn btn-danger');
                                        $this->Text = "<i class='fa fa-trash-o'></i> Remove";
					break;
				case QButtonMode::Link:
					$this->AddCssClass('btn btn-link');
					break;
                                case QButtonMode::Remove:
                                    $this->AddCssClass('btn btn-danger');
                                    $this->Text = "<i class='fa fa-trash-o'></i>";
                                    break;
                                case QButtonMode::Generate:
                                    $this->AddCssClass('btn btn-success');
                                    $this->Text = "<i class='fa fa-refresh'></i> Generate";
                                    break;
			}

			switch ($this->strButtonSize) {
				case QButtonSize::Large:
					$this->AddCssClass('btn-lg');
					break;
				case QButtonSize::Small:
					$this->AddCssClass('btn-sm');
					break;
				case QButtonSize::ExtraSmall:
					$this->AddCssClass('btn-xs');
					break;
			}

			if ($this->blnPrimaryButton)
				$strCommand = "submit";
			else
				$strCommand = "button";

			$strToReturn = sprintf('<button type="%s" name="%s" id="%s" %s%s > %s </button>',
				$strCommand,
				$this->strControlId,
				$this->strControlId,
				$this->GetAttributes(),
				$strStyle,                    
				($this->blnHtmlEntities) ? QApplication::HtmlEntities($this->strText) : $this->strText
			);
  
                        return $strToReturn;

		}



		/////////////////////////
		// Public Properties: GET
		/////////////////////////
		public function __get($strName) {
			switch ($strName) {
				// APPEARANCE
				case "Text": return $this->strText;
				case "HtmlEntities": return $this->blnHtmlEntities;
				case "ButtonMode": return $this->strButtonMode;
				case "ButtonSize": return $this->strButtonSize;

				// BEHAVIOR
				case "PrimaryButton": return $this->blnPrimaryButton;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/////////////////////////
		// Public Properties: SET
		/////////////////////////
		public function __set($strName, $mixValue) {
			$this->blnModified = true;

			switch ($strName) {
				// APPEARANCE
				case "Text": 
					try {
						$this->strText = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "HtmlEntities":
					try {
						$this->blnHtmlEntities = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
				case "ButtonMode":
					try {
						$this->strButtonMode = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case "ButtonSize":
					try {
						$this->strButtonSize = QType::Cast($mixValue, QType::String);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				// BEHAVIOR
				case "PrimaryButton":
					try {
						$this->blnPrimaryButton = QType::Cast($mixValue, QType::Boolean);
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}
?>
