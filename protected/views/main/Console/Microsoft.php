<?php $this->pageTitle = "Microsoft Console Parts"; ?>
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
                    <h2>Microsoft</h2>
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
        <a href="<?=$this->createUrl('Microsoft')?>">Microsoft</a>
    </div>

    <div class="row form-group product-chooser">

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <a href="<?=$this->createUrl('xboxOri')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Microsoft/xboxOri.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='Xbox Original'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">Xbox Original</h2>
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
            <a href="<?=$this->createUrl('xbox360')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Microsoft/xbox360.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='Xbox 360'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">Xbox 360</h2>
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
            <a href="<?=$this->createUrl('xbox360S')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Microsoft/xbox360S.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='Xbox 360S'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">Xbox 360S</h2>
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
            <a href="<?=$this->createUrl('xboxOne')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Console/Microsoft/xboxOne.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt='Xbox One'>

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center title">Xbox One</h2>
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