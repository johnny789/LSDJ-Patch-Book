<?php
// auto-generated by sfPropelCrud
// date: 2009/01/25 05:42:40
?>
<?php use_helper('Object','Global','Validation') ?>

<h1><? echo ($sf_context->getActionName() == 'create')? "Create":"Edit" ?> Instrument</h1>

<?php echo form_tag('instrument/update') ?>

<?php echo object_input_hidden_tag($instrument, 'getId') ?>
<?
if (sfConfig::get('app_tag') == "LSDJ") { // this is temporary and ugly
if ($sf_params->get('type')) {
  $type = $sf_params->get('type');
  $INS = ($instrument->getType() == $type)? unserialize($instrument->getObject()):false;
} else {
  $INS = ($instrument)? unserialize($instrument->getObject()):false;
  $type = ($INS)? $instrument->getType():'PULSE';
} 
} else {
  $INS = ($instrument)? unserialize($instrument->getObject()):false;
  $type = "NOISE";
}
?>
<table id="cInstrument">
<tbody>
<?php if (sfConfig::get('app_tag') == "LSDJ") { // this is temporary and ugly ?>
<tr>
  <th>Type:</th>
  <td><?=select_tag('type',options_for_select(array('NOISE'=>'NOISE','PULSE'=>'PULSE','WAVE'=>'WAVE'),$type),array('onchange'=>'changeINStype(this.options[this.selectedIndex].value)'))?></td>
</tr>
<?php } elseif (sfConfig::get('app_tag') == "FamiTracker") { // this is temporary and ugly ?>
<tr>
  <th>Type:</th>
  <td><?=select_tag('type',options_for_select(array('SQR'=>'SQR','TRI'=>'TRI','NOISE'=>'NOISE','ARP'=>'ARP'),$type))?></td>
</tr>
<?php } ?>
<tr>
  <th>Author:</th>
  <td><?php echo object_input_tag($instrument, 'getAuthor', array (
)) ?></td>
</tr>
<tr>
  <th><span>Name:</span></th>
  <td><span><?php echo form_error('name') ?></span><?php echo object_input_tag($instrument, 'getName', array (
)) ?></td>
</tr>
<tr>
  <th><span>Instrument:</span></th>
  <td><?php include_partial("edit_".sfConfig::get('app_tag'),array('type'=>$type,'INS'=>$INS)); ?></td>
</tr>
<tr>
  <th>Description:</th>
  <td><?php echo object_textarea_tag($instrument, 'getDescription', array (
  'style'=>'width: 500px; height: 100px;'
)) ?></td>
</tr>
<tr>
  <th>Share:</th>
  <td><?php echo object_checkbox_tag($instrument, 'getShare') ?> <a href="javascript:;" name="share" onclick="whatsShare()">What's this?</a></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('Save') ?>
&nbsp;<?php echo link_to('Cancel', 'instrument/list') ?>
</form>