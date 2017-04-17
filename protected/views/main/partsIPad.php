<?php $this->pageTitle = "iPad Parts"; ?>
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

    div.product-chooser div.product-chooser-item span.title {
        display: block;
        margin: 10px 0 5px 0;
        font-weight: bold;
        font-size: 12px;
    }

    div.product-chooser div.product-chooser-item span.description {
        font-size: 12px;
    }

    div.product-chooser div.product-chooser-item input {
        position: absolute;
        left: 0;
        top: 0;
        visibility: hidden;
    }
</style>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2><b><?= $this->pageTitle ?></b></h2>
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
        <a href="<?=$this->createUrl('partsIPad')?>">iPad</a>
    </div>

    <div class="row form-group product-chooser">

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('IPad1')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipad1.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad 1st Gen">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad 1st Gen</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('Ipad2')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipad2.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad 2nd Gen">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad 2nd Gen</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('IPad3')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipad3.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad 3rd Gen">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad 3rd Gen</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('IPad4')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipad4.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad 4th Gen">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad 4th Gen</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('IPadAir1')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipadAir1.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad Air">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad Air</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('IPadAir2')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipadAir2.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad Air 2">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad Air 2</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('IPadMini1')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipadMini.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad Mini">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad Mini</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('IPadMini3')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipadMini3.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad Mini 3">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad Mini 3</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-3 col-lg-3 ">
            <a href="<?=$this->createUrl('IPadMiniRetina')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/iPad/ipadMiniRetina.png"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="iPad Mini Retina">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">iPad Mini Retina</h2>
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