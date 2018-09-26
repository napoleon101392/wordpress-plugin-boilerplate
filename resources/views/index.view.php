<div class="wrap">
    <?php foreach($users as $user) :?>
        <div class="card">
            <?php echo $user->first_name ?>
        </div>
    <?php endforeach;?>
</div>