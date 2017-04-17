<?php $this->pageTitle = "Sony Console Parts"; ?>
<style>
    div.clear {
        clear: both;
    }

    div.product-chooser {

    }

    div.product-chooser.disabled div.product-chooser-item {
        zoom: 1;
        filter: alpha(opacity=60);
        opacity: 0.6;
        cursor: default;
    }

    div.product-chooser div.product-chooser-item {
        padding: 11px;
        border-radius: 6px;
        cursor: pointer;
        position: relative;
        border: 1px solid #efefef;
        margin-bottom: 10px;
        margin-left: 10px;
        margin-right: 10px;
    }

    div.product-chooser div.product-chooser-item.selected {
        border: 4px solid #428bca;
        background: #efefef;
        padding: 8px;
        filter: alpha(opacity=100);
        opacity: 1;
    }

    div.product-chooser div.product-chooser-item img {
        padding: 0;
    }

    div.product-chooser div.product-chooser-item h2.title {
        font-size: 20px;
    }

</style>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Sony</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="container">
    <h2></h2>
    <div class="product-breadcroumb">
        <a href="<?=$this->createUrl('index')?>">Home</a>
        <a href="<?=$this->createUrl('product')?>">Products</a>
        <a href="<?=$this->createUrl('parts')?>">Parts</a>
        <a href="<?=$this->createUrl('partsConsole')?>">Game Console</a>
        <a href="<?=$this->createUrl('Sony')?>">Sony</a>
    </div>

    <div class="row form-group product-chooser">

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('PS3')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Sony/ps3.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='PS3'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">PS 3</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('PS3Slim')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Sony/ps3Slim.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='PS3 Slim'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">PS 3 Slim</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('PS3SuperSlim')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Sony/ps3SuperSlim.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='PS3 Super Slim'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">PS 3 Super Slim</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('PS4')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Sony/ps4.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='PS4'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">PS 4</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('PSP2000')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Sony/psp2000.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='PSP 2000'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">PSP 2000</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('PSP3000')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Sony/psp3000.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='PSP 3000'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">PSP 3000</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('PSPGo')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Sony/pspGo.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='PSP Go'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">PSP Go</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('PSVita')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Sony/psVita.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='PSVita'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">PS Vita</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
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