<?php $this->inc('elements/header.php');?>
        <div class="pure-u-1" id="bgslider">
            <div id="slider">
                <?php 
                    $a = new Area('Slider');
                    $a->display($c);
                ?>
            </div>
        </div>
        <div class="pure-u-1" id="content">
            <div class="container">
                <div class="pure-u-1-3">
                    <div class="groupe">
                        <?php 
                            $a = new Area('Colonne1');
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="pure-u-1-3">
                    <div class="groupe">
                        <?php 
                            $a = new Area('Colonne2');
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="pure-u-1-3">
                    <div class="groupe">
                        <?php 
                            $a = new Area('Colonne3');
                            $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pure-u-1-3">
                    <div class="groupe">
                        <?php 
                            $a = new Area('Social');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="groupe" id="newsletter">
                        <?php 
                            $a = new Area('Newsletter');
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="pure-u-1-3">
                    <div class="groupe">
                        <?php 
                            $a = new Area('Contact');
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="pure-u-1-3">
                    <?php 
                            $a = new Area('Actualite');
                            $a->display($c);
                        ?>
                </div>
            </div>
        </div>
<?php $this->inc('elements/footer.php'); ?>
        
    
