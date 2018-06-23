<?php
    $strPageTitle = QApplication::Translate('Registration');
    //require(__CONFIGURATION__ . '/header.inc.php');
?>
    <meta name="google-translate-customization" content="35234f97bf07e276-18cff260506fe6a3-g57d4003820d96f8d-12"></meta>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />

    <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 


    <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css">
    <!-- SlidePanel Css -->
    <link rel="stylesheet" href="<?php _p(__sidebar__); ?>/css/simple-sidebar.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php _p(__table__); ?>/dist/bootstrap-table.min.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="<?php _p(__table__); ?>/dist/bootstrap-table.min.js"></script>

    <!-- Latest compiled and minified Locales -->
    <script src="<?php _p(__table__); ?>/dist/locale/bootstrap-table-zh-CN.min.js"></script>

<style>
    body{
        background-color: #F0F0F1 !important;
    }
</style>

<h1>Import Summary</h1>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <script src="dragtable.js"></script>
    
    <table class="datagrid draggable sortable">
        <tr>
            <th>Sr.</th>            
            <th>PRN NO.</th>
            
            <th>NAME</th>
            
            <th>FYPI</th>
            
            <th>Credit - 1</th>
            <th>SPI-1</th>
            
            <th>Credit - 2</th>
            <th>SPI-2</th>
            
            <th>Cumulative Credits Earned</th>
            <th>CPI</th>
        </tr>
      
        <tr >
            <td><?php _p($count++);?></td>
        
        </tr>
        
    </table>
    <div style="float: right;"><?php $this->btnGenerate->Render(); ?></div>
    <div style="clear: both;"></div>
</div>
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
