<?php echo $this->start('title'); ?>
Change Password
<?php echo $this->end(); ?>
<?php $this->Html->addCrumb('Change Password'); ?>

<div class="panel panel-default">
    <div class="panel-heading">Change Password</div>
    <div class="panel-body">
        <?php echo $this->Form->create('Employee', array('role' => 'form', 'id' => 'employeeChangePasswordForm', 'url' => array('controller' => 'employee', 'action' => 'dochangepassword'))); ?>
            <div class="form-group">
                <?php echo $this->Form->input('Id', array('type' => 'hidden')); ?>
                <?php echo $this->Form->input('Password', array(
                    'type' => 'password',
                    'class' => 'form-control', 
                    'placeholder' => 'Enter your new password', 
                    'value' => '',
                    'label' => false)); 
                ?>
            </div>
            <div class="form-group">
                <?php 
                    echo $this->Form->submit('Submit', array(
                        'class' => 'btn btn-success',
                        'div' => false));
                ?>
                <a href="<?php echo $this->Html->Url(array('controller' => 'user', 'action' => 'index', 'plugin' => 'admin')); ?>" class="btn btn-default">Cancel</a>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
<div id="editTarget"></div>
<?php echo $this->start('footerScripts'); ?>
<script>
var password = document.getElementById("newpepassword")
  , confirm_password = document.getElementById("retypepassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<script>
$('#employeeChangePasswordForm').customEdit('#editTarget');
</script>
<?php echo $this->end(); ?>