<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
        
    <?php $this->RenderBegin() ?>

	<div id="titleBar">
		<?php
                    $course = Hierarchy::LoadByIdhierarchy($_GET['course']); 
                _t($course->Name);
                _t('Teaching Plan')?>
	</div>
        <script language="javascript">
            function Clickheretoprint()
            {
              var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
                  disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
              var content_vlue = document.getElementById("formprint").innerHTML;

              var docprint=window.open("","",disp_setting);
              var course = document.getElementById("course").innerHTML;
               docprint.document.open();
               docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../assets/_core/css/styles_blue.css");</style>');
               docprint.document.write("<div style='width: 300px; border: 1px solid lightgrey;border-radius: 5px;padding: 5px;'>");
               docprint.document.write(course);
               docprint.document.write('</div></br></br>');
               docprint.document.write(content_vlue);
               docprint.document.write('</body></html>');
               docprint.document.close();
              
            }
        </script>  
        
        
        <div id="formControls"  style="width: 700px;">
            <a href="javascript:Clickheretoprint()" style="position: absolute;float: left;">
                <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
            </a>
            <div style="margin-left: 70px;">
                <?php $this->lstYear->RenderWithName(); ?>
            </div>
            
            <div id="formprint">
                <div id="course" style="display: none;">
                    <div style="text-align: left;"><b>Course - </b> <?php _t($course->Name); ?></div>
                    <div style="text-align: left;"><b>Year - </b><?php _p($this->lstYear->SelectedName); ?></div>
                    <div style="clear: both;"></div>
                </div>             
               
            <table class="datagrid">
                <tr>
                    <th>Sr</th>                    
                    <th width="350">Subject</th>
                    <th width="300">Staff</th>                   
                </tr>
                <?php
                if(isset($_GET['year'])){
                    $datas = YearSubject::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::YearSubject()->Course, $_GET['course']),
                            QQ::Equal(QQN::YearSubject()->Semister, $_GET['year'])
                                    ),
                            QQ::OrderBy(
                            QQN::YearSubject()->Semister
                                    )
                            );
                    $sr = 1;
                    foreach ($datas as $data){
                ?>
                <tr>
                    <td><?php _p($sr++); ?></td>                                                          
                    <td>
                        <div class="staff" style=" width: 97%;" onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/configration/academics/yearcal.php?yearid=17&course=<?php _p($course->Idhierarchy); ?>&yearsubid=<?php _p($data->IdyearSubject); ?>&subagenda=1'">
                            <?php _p($data->SubjectObject->Name ); ?>
                            <div class="sdisdiv">
                                <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/view.png" width="20"/>
                            </div>                            
                        </div>
                    </td>
                    <td>
                        
                        <?php
                            $staffs = StaffHasYearSubject::LoadArrayByYearSubject($data->IdyearSubject);
                            foreach ($staffs as $staff){
                        ?>
                        <div class="staff"  onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/configration/academics/yearcal.php?yearid=17&course=<?php _p($course->Idhierarchy); ?>&yearsubid=<?php _p($staff->YearSubject); ?>&staff=<?php _p($staff->Staff); ?>'">
                        <?php        _p($staff->StaffObject->IdloginObject->FirstName.' '.$staff->StaffObject->IdloginObject->MiddleName.' '.$staff->StaffObject->IdloginObject->LastName);
                        ?>
                            <div class="sdisdiv">
                                <img src="<?php _p(__VIRTUAL_DIRECTORY__.__IMAGE_ASSETS__); ?>/view.png" width="20"/>
                            </div>
                            
                        </div>
                        
                        <?php 
                            } 
                         ?>
                    </td>
                </tr>
                    
                    <?php }} ?>
            </table>
            </div>    
        </div>
    <?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>