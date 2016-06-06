<!DOCTYPE html>
<html lang="en">
<head>
    <?=$this->Html->charset()?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Dan Mark Lagman">
    <title>Login - Technowise 360 Time Tracker</title>
    <?php
        echo $this->Html->css(array(
            '/css/bootstrap.min.css',
            '/css/sb-admin-2.css'
    )); ?>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <div class="users form">
                            <?php echo $this->Form->create('User', array('role' => 'form')); ?>
                                <fieldset>
                                    <div class="form-group">
                                        <?php echo $this->Form->input('UserName', array(
                                            'class' => 'form-control', 
                                            'autofocus' => 'true',
                                            'placeholder' => 'Username', 
                                            'autocomplete' => 'off',
                                            'label' => false));
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $this->Form->input('Password', array(
                                            'type' => 'Password',
                                            'class' => 'form-control',
                                            'placeholder' => 'Password', 
                                            'label' => false)); 
                                        ?>
                                    </div>
                                    <?php echo $this->Form->submit('Login', 
                                        array('class' => 'btn btn-lg btn-success btn-block'));
                                    ?>
                                </fieldset>
                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php echo $this->Session->flash('login_message'); ?>
                <?php echo $this->Session->flash('auth'); ?>
            </div>
        </div>
    </div>
    <?php
        echo $this->Html->script(array(
            '/js/jquery-1.11.0.js',
            '/js/bootstrap.min.js',
            '/js/sb-admin-2.js'
    )); ?>
</body>
</html>
    
