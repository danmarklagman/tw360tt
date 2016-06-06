<?php echo $this->start('title'); ?>
Update Info
<?php echo $this->end(); ?>
<?php $this->Html->addCrumb('Update Information'); ?>

<div class="panel panel-default">
    <div class="panel-heading">Update Information</div>
    <div class="panel-body">
        <?php echo $this->Form->create('Employee', array('class' => 'form-horizontal', 'role' => 'form', 'id' => 'employeeUpdateInfoForm', 'url' => array('controller' => 'employee', 'action' => 'doupdate'))); ?>
        <div class="form-group">
            <?php echo $this->Form->input('Id', array('type' => 'hidden')); ?>
            <label class="control-label col-sm-2">First Name</label>
            <?php echo $this->Form->input('FirstName', array(
                'type' => 'text',
                'class' => 'form-control col-sm-10', 
                'placeholder' => 'First Name', 
                'value' => '',
                'label' => false,
                'div' => array('class' => 'col-sm-10'))); 
            ?>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Middle Name</label>
            <?php echo $this->Form->input('MiddleName', array(
                'type' => 'text',
                'class' => 'form-control', 
                'placeholder' => 'Middle Name', 
                'value' => '',
                'label' => false,
                'div' => array('class' => 'col-sm-10'))); 
            ?>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Last Name</label>
            <?php echo $this->Form->input('LastName', array(
                'type' => 'text',
                'class' => 'form-control', 
                'placeholder' => 'Last Name', 
                'value' => '',
                'label' => false,
                'div' => array('class' => 'col-sm-10'))); 
            ?>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Gender</label>
            <?php echo $this->Form->input('Gender', array(
                'options' => array('' => 'Select Gender', 'male' => 'Male', 'female' => 'Female'),
                'class' => 'form-control',
                'required' => 'required',
                'label' => false,
                'div' => array('class' => 'col-sm-10')));
            ?>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Phone Number</label>
            <?php echo $this->Form->input('PhoneNumber', array(
                'type' => 'text',
                'class' => 'form-control', 
                'placeholder' => 'Phone Number', 
                'value' => '',
                'label' => false,
                'div' => array('class' => 'col-sm-10'))); 
            ?>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email Address</label>
            <?php echo $this->Form->input('Email Address', array(
                'type' => 'email',
                'class' => 'form-control', 
                'placeholder' => 'Email Address', 
                'value' => '',
                'label' => false,
                'div' => array('class' => 'col-sm-10'))); 
            ?>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-success', 'div' => false)); ?>
                <a href="<?php echo $this->Html->Url(array('controller' => 'employee', 'action' => 'index')); ?>" class="btn btn-default">Cancel</a>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>