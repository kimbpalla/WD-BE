<h2 id="islandofpersonality">MY ISLAND OF PERSONALITY</h2>
<div class="w3-row"><br>
    <?php foreach ($islands as $island) { ?>
        <div class="w3-quarter">
            <img src="images/<?php echo $island['image']; ?>"
                alt="<?php echo $island['name']; ?>" style="width:100%"
                class="w3-circle w3-hover-opacity center">
            <h3><?php echo $island['name']; ?></h3>
        </div>
    <?php } ?>
</div> 