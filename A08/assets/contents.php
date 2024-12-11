<?php 
foreach ($islandContents as $contents) {
    $islandID = $islandContents;
    $island = $contents[0];
?>
    <div class="w3-row-padding w3-padding-64 w3-theme-custom" id="content">
        <div class="w3-quarter">
            <h2><?php echo $island['name']; ?></h2>
        </div>
        <?php foreach ($contents as $content) { ?>
            <div class="w3-quarter">
                <div class="w3-card">
                    <img src="images/<?php echo $content['image'] ? $content['image'] : 'default-image.png'; ?>" alt="Image" style="width:100%">
                    <div class="w3-container">
                        <p><?php echo $content['content'] ? $content['content'] : ' '; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>
