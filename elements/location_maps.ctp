<?php
    $locations = Cache::read('location_maps');

    if (!$locations) {
        $locations = $this->requestAction('/locations/maps');
        Cache::write('location_maps', $locations);
    }
?>

<div class="container maps">
    <div class="row">
        <?php foreach ($locations as $location): ?>
            <div class="col-xs-12 col-md-4 map">
                <h5 class="map-title"><?= $location['Location']['public_name'] ?></h5>

                <?php
                $addressString = $location['Location']['address_1'];

                if (isset($location['Location']['address_2']) && !empty($location['Location']['address_2'])) {
                    $addressString .= ", {$location['Location']['address_2']}";
                }

                $addressString .= " {$location['Location']['city']}, {$location['Location']['state']} {$location['Location']['zip']}";
                ?>

                <a href="//maps.google.com/maps?q=<?= $addressString ?>" target="_blank" class="map-link">
                    <img src="//maps.google.com/maps/api/staticmap?center=<?= $location['Location']['lat'] ?>,<?= $location['Location']['lng'] ?>&amp;zoom=15&amp;size=380x240&amp;maptype=roadmap&amp;sensor=false&amp;language=&amp;markers=color:blue|label:none|<?= $location['Location']['lat'] ?>,<?= $location['Location']['lng'] ?>" class="map-image img-fluid">
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>

