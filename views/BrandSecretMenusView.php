<div class="row ">
 <div class="form-inline">
        <!-- <h2 class="name"><?= $this->title ?></h2> -->
        <p class="intro"><?= $this->title ?> </p>

    </div> 
    <?php
    $isNew = true;
    foreach ($this->data['secret_menus'] as $menu) {
    ?>
        <div class="card my-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="imgs/<?= $menu->image ?>" class="card-img" alt="<?= $menu->names ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"style="font-size: 20px;font-family: ovo; color:#ffc10c;font-size: 30px;"><strong class=""><?= $menu->name ?></strong></h5>
                        <p class="card-text"style="font-size: 20px;font-family: ovo;"><?= $menu->description ?> </p>
                        <h5 class="text-dark text-left card-title"> $ <strong class=""><?= $menu->price ?></strong></h5>
                        <p>
                            Rating: <?= $this->ratings[$menu->rating] ?><br>
                            <img src="imgs/r<?= $menu->rating ?>.png" height="20px" />
                        </p>
                        <?php if($isNew) { ?>
                            <img width="150" class="float-right" src="imgs/new.png" />
                        <?php $isNew = false; } ?>

                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
</div>