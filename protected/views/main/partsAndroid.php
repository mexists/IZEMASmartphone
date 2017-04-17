<?php $this->pageTitle = "Android Parts"; ?>
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
    .text-center{
        font-size:26px;
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
        <a href="<?=$this->createUrl('partsAndroid')?>">Android</a>
    </div>

    <div class="row form-group product-chooser">

        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 ">
            <a href="<?=$this->createUrl('SamsungGalaxyS2')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Android/SamsungGalaxyS2.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Samsung Galaxy S2">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">Samsung Galaxy S2</h2>
                        <!--<span class="title">Mobile and Desktop</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile_desktop" checked="checked">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 ">
            <a href="<?=$this->createUrl('SamsungGalaxyS3')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Android/SamsungGalaxyS3.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Samsung Galaxy S3">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">Samsung Galaxy S3</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 ">
            <a href="<?=$this->createUrl('SamsungGalaxyS3Mini')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Android/SamsungGalaxyS3Mini.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Samsung Galaxy S3 Mini">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">Samsung Galaxy S3 Mini</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 ">
            <a href="<?=$this->createUrl('SamsungGalaxyS4')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Android/SamsungGalaxyS4.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Samsung Galaxy S4">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">Samsung Galaxy S4</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 ">
            <a href="<?=$this->createUrl('SamsungGalaxyS5')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Android/SamsungGalaxyS5.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Sasmung Galaxy S5">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">Samsung Galaxy S5</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 ">
            <a href="<?=$this->createUrl('SamsungGalaxyNote')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Android/SamsungGalaxyNote.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Samsung Galaxy Note">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">Samsung Galaxy Note</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 ">
            <a href="<?=$this->createUrl('SamsungGalaxyNote2')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Android/SamsungGalaxyNote2.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Samsung Galaxy Note 2">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">Samsung Galaxy Note 2</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
                    </div>
                    <div class="clear"></div>
                </div>
            </a>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 ">
            <a href="<?=$this->createUrl('SamsungGalaxyNote3')?>">
                <div class="product-chooser-item">
                    <img src="<?= Yii::app()->baseUrl ?>/images/Android/SamsungGalaxyNote3.standard"
                         class="img-rounded col-xs-4 col-sm-4 col-md-12 col-lg-12" alt="Samsung Galaxy Note 3">

                    <div class="col-xs-8 col-sm-8 col-md-12 col-lg-12">
                        <h2 class="text-center">Samsung Galaxy Note 3</h2>
                        <!--<span class="title">Mobile</span>
                        <span
                            class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>-->
                        <!--<input type="radio" name="product" value="mobile">-->
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