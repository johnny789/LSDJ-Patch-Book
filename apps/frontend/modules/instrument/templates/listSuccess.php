<?php
// auto-generated by sfPropelCrud
// date: 2009/01/25 05:42:40
?>
<?php use_helper('Text','Global') ?>

<h1>The <?=sfConfig::get('app_tag')?> Patch Book</h1>
The Patch Book is an online repository for <? echo (sfConfig::get('app_tag'))? sfConfig::get('app_tag'):"LSDJ" ?> synth patches. <br/>
Explore &amp; experiment.
<br/><br/>
<h1>Recently Added Instruments <span><?php echo link_to_feed('New', 'feed/new')?></span></h1>
<?php echo include_partial('list', array('instrument_pager' => $instrument_pager, 'rule' => 'instrument/list')) ?>
