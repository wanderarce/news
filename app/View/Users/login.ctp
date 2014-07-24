<h2 id="container">Login</h2>
<div class="row">
    <div class="col-md-5">
        <?php
        echo $this->Form->create('User', array('action' => 'login'));

        echo $this->Form->input('username', array('class' => 'form-control'));
        echo $this->Form->input('password', array('class' => 'form-control'));
        echo $this->Form->end('Login');
        ?>
    </div>
</div>
