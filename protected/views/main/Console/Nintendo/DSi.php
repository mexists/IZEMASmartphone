<?php $this->pageTitle = "Nintendo Console Parts"; ?>


<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Nintendo</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="container">
    <h2></h2>
    <div class="col-md-10">
    <div class="product-content-right">
    <div class="product-breadcroumb">
        <a href="<?=$this->createUrl('index')?>">Home</a>
        <a href="<?=$this->createUrl('product')?>">Products</a>
        <a href="<?=$this->createUrl('parts')?>">Parts</a>
        <a href="<?=$this->createUrl('partsConsole')?>">Game Console</a>
        <a href="<?=$this->createUrl('Nintendo')?>">Nintendo</a>
        <a href="<?=$this->createUrl('DSi')?>">DSi</a>
    </div>
    </div>

    <div class="related-products-wrapper">
        <h2 class="related-products-title">Parts that work with this model:</h2>

        <div class="related-products-carousel">
            <div class="single-product">
                <div class="product-f-image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Mac/Macbook/ModelA1181/macbookbattery.png" alt="MacBook Battery">

                    <div class="product-hover">
                        <a href="" class="add-to-cart-link"><i
                                class="fa fa-shopping-cart"></i> Add to cart</a>
                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                    </div>
                </div>

                <h2><a href="">MacBook Battery</a></h2>

                <div class="product-carousel-price">
                    <ins>$700.00</ins>
                    <del>$800.00</del>
                    <br>
                    <label name="">Available</label>
                </div>
            </div>
            <div class="single-product">
                <div class="product-f-image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Mac/Macbook/ModelA1181/macbookdisplaydatacable.png" alt="MacBook Battery">

                    <div class="product-hover">
                        <a href="" class="add-to-cart-link"><i
                                class="fa fa-shopping-cart"></i> Add to cart</a>
                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                    </div>
                </div>

                <h2><a href="">MacBook Display Data Cable</a></h2>

                <div class="product-carousel-price">
                    <ins>$899.00</ins>
                    <del>$999.00</del>
                    <br>
                    <label name="">Available</label>
                </div>
            </div>
            <div class="single-product">
                <div class="product-f-image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Mac/Macbook/ModelA1181/G4MagSafeACAdapterEnd.png" alt="G4/Mag Safe AC Adapter End">

                    <div class="product-hover">
                        <a href="" class="add-to-cart-link"><i
                                class="fa fa-shopping-cart"></i> Add to cart</a>
                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                    </div>
                </div>

                <h2><a href="">G4/MagSafe AC Adapter End</a></h2>

                <div class="product-carousel-price">
                    <ins>$899.00</ins>
                    <del>$999.00</del>
                    <br>
                    <label name="">Available</label>
                </div>
            </div>
            <div class="single-product">
                <div class="product-f-image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Mac/Macbook/ModelA1181/256GBSSD.png" alt="256 GB Solid State Drive">

                    <div class="product-hover">
                        <a href="" class="add-to-cart-link"><i
                                class="fa fa-shopping-cart"></i> Add to cart</a>
                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                    </div>
                </div>

                <h2><a href="">256 GB Solid State Drive</a></h2>

                <div class="product-carousel-price">
                    <ins>$200.00</ins>
                    <del>$225.00</del>
                    <br>
                    <label name="">Available</label>
                </div>
            </div>
            <div class="single-product">
                <div class="product-f-image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Mac/Macbook/ModelA1181/512GBSSD.png" alt="512 GB Solid State Drive">

                    <div class="product-hover">
                        <a href="" class="add-to-cart-link"><i
                                class="fa fa-shopping-cart"></i> Add to cart</a>
                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                    </div>
                </div>

                <h2><a href="">512 GB Solid State Drive</a></h2>

                <div class="product-carousel-price">
                    <ins>$1200.00</ins>
                    <del>$1355.00</del>
                    <br>
                    <label name="">Available</label>
                </div>
            </div>
            <div class="single-product">
                <div class="product-f-image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Mac/Macbook/ModelA1181/1TBSSD.png" alt='1 TB SSD Hybrid 2.5" HDD'>

                    <div class="product-hover">
                        <a href="" class="add-to-cart-link"><i
                                class="fa fa-shopping-cart"></i> Add to cart</a>
                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                    </div>
                </div>

                <h2><a href="">1 TB SSD Hybrid 2.5" HDD</a></h2>

                <div class="product-carousel-price">
                    <ins>$400.00</ins>
                    <br>
                    <label name="">Available</label>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>

<script>
    $(function () {
        /*$('div.product-chooser').find('div.product-chooser-item').not('.disabled').on('click', function(){
         $(this).parent().parent().find('div.product-chooser-item').removeClass('selected');
         $(this).addClass('selected');
         $(this).find('input[type="radio"]').prop("checked", true);

         });*/
    });
</script>