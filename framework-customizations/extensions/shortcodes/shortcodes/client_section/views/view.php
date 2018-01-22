<?php
if( !defined('FW')) {die('Forbidden');}

/**
* @var $atts The shotrcode attributes
*/
?>
<section id="client">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client-area">
                    <ul class="client-table">
                        <?php  foreach  ( fw_akg( 'clients', $atts, array() ) as $client ):  ?>
                        <li><img src="<?=$client['logo']['url']?>" alt="client logo"></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>