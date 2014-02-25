<?php $this->inc('elements/header.php');?>
        <div class="pure-u-1" id="content">
            <div class="container">
                        <?php 
                            $a = new Area('Contenu');
                            $a->display($c);
                        ?>
            </div>           
        </div>
<?php $this->inc('elements/footer.php'); ?>
        
    
