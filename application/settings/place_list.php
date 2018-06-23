<?php
    require('../../qcubed.inc.php');
    require(__FORMBASE_CLASSES__ . '/PlaceListFormBase.class.php');
    class PlaceListForm extends PlaceListFormBase {
        protected $dtgNation;
        protected $dtgState;
        protected $dtgDist;
        protected $dtgTal;
        
        protected $txtcode;
        protected $txtNation;
        protected $txtStatecode;
        protected $txtState;
        protected $lstParanet;
        protected $txtDist;
        protected $txtDistcode;
        protected $lstState;
        protected $txtTal;
        protected $txtTalcode;
        protected $lstDist;

        protected $btnAdd;
        protected $btnAdd1;
        protected $btnAdd2;
        protected $btnAdd3;
        protected $btnDelete;
        protected $btnDelete1;
        protected $btnDelete2;
        protected $btnDelete3;
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }
        
        protected function Form_Create() {
            
              //control declaration for Nation
            //-----------------------------------------------
            $this->txtNation = new QTextBox($this);
            $this->txtNation->Placeholder = 'Nation';
            $this->txtcode = new QTextBox($this);
            $this->txtcode->Placeholder = 'Code';
            
            
            $this->btnAdd = new QButton($this);
            if(isset($_GET['id'])){
                $this->btnAdd->ButtonMode = QButtonMode::Save;
            }else{
                $this->btnAdd->ButtonMode = QButtonMode::Add;
            }
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
            
            //datagride for Nation
            $this->dtgNation = new QDataGrid($this);
            $this->dtgNation->CssClass = "datagrid";

            $this->dtgNation->ShowFilter = TRUE;

            $this->dtgNation->Paginator = new QPaginator($this->dtgNation);
            $this->dtgNation->ItemsPerPage = 10;

            $this->dtgNation->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));

            $Nation = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Place()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Place()->Name, false)));

            $Nation->Filter = QQ::Like(QQN::Place()->Name, null);
            $Nation->FilterPostfix = $Nation->FilterPrefix = '%';
            $Nation->FilterType = QFilterType::TextFilter;
            $this->dtgNation->AddColumn($Nation);
            
            $this->dtgNation->SetDataBinder('dtgNation_Bind');
            
            $this->dtgNation->RowActionParameterHtml = '<?= $_ITEM->Idplace ?>';
            $this->dtgNation->AddRowAction(new QClickEvent(), new QServerAction('dtgNationRow_Click'));
            //---------------------------------------------------------
            //control declaration for state
            //--------------------------------------------------------
            $this->txtState = new QTextBox($this);
            $this->txtState->Placeholder = 'State';
            $this->txtStatecode = new QTextBox($this);
            $this->txtStatecode->Placeholder = 'code'; 
            
             $this->lstParanet = new QSelect2ListBox($this);
                $states = Place::LoadArrayByGrp(1);
                    $this->lstParanet->AddItem("-Select Nation-", NULL);    
                foreach ($states as $state) {
                    $this->lstParanet->AddItem($state->Name, $state->Idplace);    
                }

            $this->btnAdd1 = new QButton($this);
            if(isset($_GET['id1']))
                $this->btnAdd1->ButtonMode = QButtonMode::Save;
            else
                $this->btnAdd1->ButtonMode = QButtonMode::Add;
            
            $this->btnAdd1->AddAction(new QClickEvent(), new QAjaxAction("btnAdd1_Click"));
            
            $this->btnDelete1 = new QButton($this);
            $this->btnDelete1->ButtonMode = QButtonMode::Delete;
            $this->btnDelete1->Visible = FALSE;
            $this->btnDelete1->AddAction(new QClickEvent(), new QAjaxAction("btnDelete1_Click"));
            
            //datagride for State
            $this->dtgState = new QDataGrid($this);
            $this->dtgState->CssClass = "datagrid";

            $this->dtgState->ShowFilter = TRUE;

            $this->dtgState->Paginator = new QPaginator($this->dtgState);
            $this->dtgState->ItemsPerPage = 10;

            $this->dtgState->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));
                //state name
            $State = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Place()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Place()->Name, false)));

            $State->Filter = QQ::Like(QQN::Place()->Name, null);
            $State->FilterPostfix = $State->FilterPrefix = '%';
            $State->FilterType = QFilterType::TextFilter;
            $this->dtgState->AddColumn($State);
            
            //state parent
            $this->dtgState->AddColumn(new QDataGridColumn('Under', '<?= $_ITEM->ParrentObject ?>', 'Width=300'));
                
            $this->dtgState->SetDataBinder('dtgState_Bind');
            
            $this->dtgState->RowActionParameterHtml = '<?= $_ITEM->Idplace ?>';
            $this->dtgState->AddRowAction(new QClickEvent(), new QServerAction('dtgStateRow_Click'));
            //-------------------------------------------------------------------
            //control declaration for district
            //-------------------------------------------------------------------
            $this->txtDist = new QTextBox($this);
            $this->txtDist->Placeholder = 'District'; 
            $this->txtDistcode = new QTextBox($this);
            $this->txtDistcode->Placeholder = 'Code'; 
            
             $this->lstState = new QSelect2ListBox($this);
                $dists = Place::LoadArrayByGrp(2);
                    $this->lstState->AddItem("-Select State-", NULL);    
                foreach ($dists as $dist) {
                    $this->lstState->AddItem($dist->Name, $dist->Idplace);    
                }

            $this->btnAdd2 = new QButton($this);
            if(isset($_GET['id2'])){
                $this->btnAdd2->ButtonMode = QButtonMode::Save;
            }else{
                $this->btnAdd2->ButtonMode = QButtonMode::Add;
            }
            $this->btnAdd2->AddAction(new QClickEvent(), new QServerAction("btnAdd2_Click"));
            
            $this->btnDelete2 = new QButton($this);
            $this->btnDelete2->ButtonMode = QButtonMode::Delete;
            $this->btnDelete2->Visible = FALSE;
            $this->btnDelete2->AddAction(new QClickEvent(), new QServerAction("btnDelete2_Click"));
            
            //datagride for District
            $this->dtgDist = new QDataGrid($this);
            $this->dtgDist->CssClass = "datagrid";

            $this->dtgDist->ShowFilter = TRUE;

            $this->dtgDist->Paginator = new QPaginator($this->dtgDist);
            $this->dtgDist->ItemsPerPage =10;
            $this->dtgDist->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));
            //district name
            $dist = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Place()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Place()->Name, false)));

            $dist->Filter = QQ::Like(QQN::Place()->Name, null);
            $dist->FilterPostfix = $dist->FilterPrefix = '%';
            $dist->FilterType = QFilterType::TextFilter;
            $this->dtgDist->AddColumn($dist);
            
            //state parent
            $this->dtgDist->AddColumn(new QDataGridColumn('Under', '<?= $_ITEM->ParrentObject ?>', 'Width=300'));
                
            $this->dtgDist->SetDataBinder('dtgDist_Bind');
            
            $this->dtgDist->RowActionParameterHtml = '<?= $_ITEM->Idplace ?>';
            $this->dtgDist->AddRowAction(new QClickEvent(), new QServerAction('dtgDistRow_Click'));
            //-------------------------------------------------------------------------
            // control declaration for Taluka
            //-------------------------------------------------------------------------
           
            $this->txtTal = new QTextBox($this);
            $this->txtTal->Placeholder = 'Taluka'; 
            $this->txtTalcode = new QTextBox($this);
            $this->txtTalcode->Placeholder = 'Code';  
            
            $this->lstDist = new QSelect2ListBox($this);
                $tals = Place::LoadArrayByGrp(3);
                    $this->lstDist->AddItem("-Select District-", NULL);
                foreach ($tals as $tal) {
                    $this->lstDist->AddItem($tal->Name, $tal->Idplace);    
                }

            $this->btnAdd3 = new QButton($this);
            if(isset($_GET['id3'])){
                $this->btnAdd3->ButtonMode = QButtonMode::Save;
            }else{
                $this->btnAdd3->ButtonMode = QButtonMode::Add;
            }
            $this->btnAdd3->AddAction(new QClickEvent(), new QAjaxAction("btnAdd3_Click"));
            
            $this->btnDelete3 = new QButton($this);
            $this->btnDelete3->ButtonMode = QButtonMode::Delete;
            $this->btnDelete3->Visible = FALSE;
            $this->btnDelete3->AddAction(new QClickEvent(), new QAjaxAction("btnDelete3_Click"));
            
            //datagride for taluka
            $this->dtgTal = new QDataGrid($this);
            $this->dtgTal->CssClass = "datagrid";

            $this->dtgTal->ShowFilter = TRUE;

            $this->dtgTal->Paginator = new QPaginator($this->dtgTal);
            $this->dtgTal->ItemsPerPage =10;

            $this->dtgTal->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->Code ?>', 'Width=50'));
                //district name
            $Tal = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::Place()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::Place()->Name, false)));

            $Tal->Filter = QQ::Like(QQN::Place()->Name, null);
            $Tal->FilterPostfix = $Tal->FilterPrefix = '%';
            $Tal->FilterType = QFilterType::TextFilter;
            $this->dtgTal->AddColumn($Tal);
            
            //state parent
            $this->dtgTal->AddColumn(new QDataGridColumn('Under', '<?= $_ITEM->ParrentObject ?>', 'Width=300'));
                
            $this->dtgTal->SetDataBinder('dtgTal_Bind');
          
            $this->dtgTal->RowActionParameterHtml = '<?= $_ITEM->Idplace ?>';
            $this->dtgTal->AddRowAction(new QClickEvent(), new QAjaxAction('dtgTalRow_Click'));
           //------------------------------------------------------------------------- 
        
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;   
                $place = Place::LoadByIdplace($_GET['id']);
                $this->txtcode->Text = $place->Code;
                $this->txtNation->Text = $place->Name;
            }else{
                 $grps = PlaceGrp::LoadAll();
                 foreach ($grps as $grp){
                 if($grp->IdplaceGrp == 1){
                     $this->txtcode->Text = $grp->Abbrivation.''.$grp->Counter; 
                 }
               }
            }
             if(isset($_GET['id1'])){ 
                   $this->btnDelete1->Visible = TRUE;   
                    $place = Place::LoadByIdplace($_GET['id1']);
                    $this->txtStatecode->Text = $place->Code;
                    $this->txtState->Text = $place->Name;
                    $this->lstParanet->SelectedValue = $place->Parrent;
              }else{
                $grps = PlaceGrp::LoadAll();
                foreach ($grps as $grp){
                if($grp->IdplaceGrp == 2){
                     $this->txtStatecode->Text = $grp->Abbrivation.''.$grp->Counter; 
                  }
                }
              }
             if(isset($_GET['id2'])){ 
                 $this->btnDelete2->Visible = TRUE;   
                    $place = Place::LoadByIdplace($_GET['id2']);
                    $this->txtDistcode->Text = $place->Code;
                    $this->txtDist->Text = $place->Name;
                    $this->lstState->SelectedValue = $place->Parrent;
            }else{
                $grps = PlaceGrp::LoadAll();
                foreach ($grps as $grp){
                if($grp->IdplaceGrp == 3)   {
                     $this->txtDistcode->Text = $grp->Abbrivation.''.$grp->Counter; 
                 }
               }
           }
           if(isset($_GET['id3'])){ 
                 $this->btnDelete3->Visible = TRUE;   
                    $place = Place::LoadByIdplace($_GET['id3']);
                    $this->txtTalcode->Text = $place->Code;
                    $this->txtTal->Text = $place->Name;
                    $this->lstDist->SelectedValue = $place->Parrent;
            }else{
                $grps = PlaceGrp::LoadAll();
                foreach ($grps as $grp){
                if($grp->IdplaceGrp == 7)   {
                     $this->txtTalcode->Text = $grp->Abbrivation.''.$grp->Counter; 
                 }
               }
           }
        }
        //Nation
        protected function dtgNation_Bind(){
                $this->dtgNation->TotalItemCount = Place::QueryCount(
                        QQ::AndCondition(
                                    $this->dtgNation->Conditions,
                                    QQ::Equal(QQN::Place()->Grp, 1)
                                
                                ));

                $data = Place::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgNation->Conditions,
                                    QQ::Equal(QQN::Place()->Grp, 1)
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::Place()->Idplace, TRUE),
                        $this->dtgNation->LimitClause
                ));

                $this->dtgNation->DataSource = $data;

        }
        //State
        protected function dtgState_Bind(){
                $this->dtgState->TotalItemCount = Place::QueryCount(
                        QQ::AndCondition(
                                    $this->dtgState->Conditions,
                                    QQ::Equal(QQN::Place()->Grp, 2)
                                
                                ));

                $data = Place::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgState->Conditions,
                                    QQ::Equal(QQN::Place()->Grp, 2)
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::Place()->Idplace, TRUE),
                        $this->dtgState->LimitClause
                ));

                $this->dtgState->DataSource = $data;

            }
        //District
        protected function dtgDist_Bind(){
                $this->dtgDist->TotalItemCount = Place::QueryCount(
                        QQ::AndCondition(
                                    $this->dtgDist->Conditions,
                                    QQ::Equal(QQN::Place()->Grp, 3)
                                
                                ));

                $data = Place::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgDist->Conditions,
                                    QQ::Equal(QQN::Place()->Grp, 3)
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::Place()->Idplace, TRUE),
                        $this->dtgDist->LimitClause
                ));

                $this->dtgDist->DataSource = $data;

            }
        //Taluka
        protected function dtgTal_Bind(){
                $this->dtgTal->TotalItemCount = Place::QueryCount(
                        QQ::AndCondition(
                                    $this->dtgTal->Conditions,
                                    QQ::Equal(QQN::Place()->Grp, 7)
                                
                                ));

                $data = Place::QueryArray(
                            QQ::AndCondition(
                                    $this->dtgTal->Conditions,
                                    QQ::Equal(QQN::Place()->Grp, 7)
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::Place()->Idplace, TRUE),
                        $this->dtgTal->LimitClause
                ));

                $this->dtgTal->DataSource = $data;
               
        }
        
        public function dtgNationRow_Click($strFormId, $strControlId, $strParameter) {
             QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?id='.$strParameter);
        }
        
        public function dtgStateRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?id1='.$strParameter.'&tab=1#1');
        }
        
        public function dtgDistRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?id2='.$strParameter.'&tab=2#2');
        }
        public function dtgTalRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?id3='.$strParameter.'&tab=3#3');
        }
        
        protected function btnAdd_Click($strFormId, $strControlId, $strParameter) {
                $nation = Place::LoadByCode($this->txtcode->Text);
                if($nation){                    
                    $nation->Code = $this->txtcode->Text;
                    $nation->Name = $this->txtNation->Text;
                    $nation->Grp = 1;
                    $nation->Save();
                }else{
                    $nation = new Place();
                    $nation->Code = $this->txtcode->Text;
                    $nation->Name = $this->txtNation->Text;
                    $nation->Grp = 1;
                    $nation->Save();
                    if(!isset($_GET['id'])){
                    $grp = PlaceGrp::LoadByIdplaceGrp(1);
                    $grp->Counter = $grp->Counter + 1;
                    $grp->Save();
                }
              }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php');
        }   
        protected function btnAdd1_Click($strFormId, $strControlId, $strParameter) {
                $state = Place::LoadByCode($this->txtStatecode->Text);
                if($state){
                    $state->Code = $this->txtStatecode->Text;
                    $state->Name = $this->txtState->Text;
                    $state->Parrent = $this->lstParanet->SelectedValue;
                    $state->Grp = 2;
                    $state->Save(); 
                }else{
                    $state = new Place();
                    $state->Code = $this->txtStatecode->Text;
                    $state->Name = $this->txtState->Text;
                    $state->Parrent = $this->lstParanet->SelectedValue;
                    $state->Grp = 2;
                    $state->Save();
                      if(!isset($_GET['id1'])){
                    $grp = PlaceGrp::LoadByIdplaceGrp(2);
                    $grp->Counter = $grp->Counter + 1;
                    $grp->Save();
                    }
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?tab=2#2');
        }
        protected function btnAdd2_Click($strFormId, $strControlId, $strParameter) {
                $dist = Place::LoadByCode($this->txtDistcode->Text);
                If($dist){
                    $dist->Code = $this->txtDistcode->Text;
                    $dist->Name = $this->txtDist->Text;
                    $dist->Parrent = $this->lstState->SelectedValue;
                    $dist->Grp = 3;
                    $dist->Save();
                }else{
                    $dist = new Place();
                    $dist->Code = $this->txtDistcode->Text;
                    $dist->Name = $this->txtDist->Text;
                    $dist->Parrent = $this->lstState->SelectedValue;
                    $dist->Grp = 3;
                    $dist->Save();
                      if(!isset($_GET['id2'])){
                    $grp = PlaceGrp::LoadByIdplaceGrp(3);
                    $grp->Counter = $grp->Counter + 1;
                    $grp->Save();
                }
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?tab=3#3');
        }
        protected function btnAdd3_Click($strFormId, $strControlId, $strParameter) {
                $tal = Place::LoadByCode($this->txtTalcode->Text);
                if($tal){  
                    $tal->Code = $this->txtTalcode->Text;
                    $tal->Name = $this->txtTal->Text;
                    $tal->Parrent = $this->lstDist->SelectedValue;
                    $tal->Grp = 7;
                    $tal->Save();
                 }else{
                    $tal = new Place();
                    $tal->Code = $this->txtTalcode->Text;
                    $tal->Name = $this->txtTal->Text;
                    $tal->Parrent = $this->lstDist->SelectedValue;
                    $tal->Grp = 7;
                    $tal->Save();
                    if(!isset($_GET['id3'])){
                    $grp = PlaceGrp::LoadByIdplaceGrp(7);
                    $grp->Counter = $grp->Counter + 1;
                    $grp->Save();
                   }
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?tab=4#4');
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
               $pls = Place::LoadByIdplace($_GET['id']);
               $pls->Delete();
               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php');
        }
        
        protected function btnDelete1_Click($strFormId, $strControlId, $strParameter) {
               $pls = Place::LoadByIdplace($_GET['id1']);
               $pls->Delete();
               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?tab=2#2');
        }
        
        protected function btnDelete2_Click($strFormId, $strControlId, $strParameter) {
               $pls = Place::LoadByIdplace($_GET['id2']);
               $pls->Delete();
               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?tab=3#3');
        }
        
        protected function btnDelete3_Click($strFormId, $strControlId, $strParameter) {
               $pls = Place::LoadByIdplace($_GET['id3']);
               $pls->Delete();
               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php?tab=4#4');
        }
      }

    PlaceListForm::Run('PlaceListForm');
?>