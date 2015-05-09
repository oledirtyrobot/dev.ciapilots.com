

<?php foreach($airportFbos as $airportFbo) : ?>
            <h2><?= $airportFbo->fboName; ?></h2>
            <p><?= $airportFbo->fboDetails; ?></p>
<?php   endforeach; ?>
