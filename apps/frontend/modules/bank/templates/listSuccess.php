<?php
// auto-generated by sfPropelCrud
// date: 2009/03/15 20:44:07
?>
<h1>Latest Banks</h1>
<div class="home_instrument">
<ul>
  <li><strong>Name</strong></li>
  <li><strong>Owner</strong></li>
  <li><strong>Type</strong></li>
</ul>
</div>

<?php foreach ($banks as $bank): ?>
<div class="home_instrument">
<ul>
	  <li><?php echo link_to($bank->getName(), '@bank?id='.$bank->getId()) ?></li>
      <li><?php echo $bank->getOwner() ?></li>
	  <li><?php echo $bank->getSoftware() ?></li>
</ul>
</div>
<?php endforeach; ?>

<?php echo link_to ('create', 'bank/create') ?>
