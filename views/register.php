<h1>Create an Account</h1>

<?php $form = \app\core\form\Form::begin('', "post"); ?>
  <div class="row">
    <div class="col">
      <?php echo $form->field($model, 'first') ?>
    </div>
    <div class="col">
      <?php echo $form->field($model, 'last') ?>
    </div>
  </div>
  <?php echo $form->field($model, 'email') ?>
  <?php echo $form->field($model, 'password')->passwordField() ?>
  <?php echo $form->field($model, 'confirmation')->passwordField() ?>

  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo \app\core\form\Form::end(); ?>
