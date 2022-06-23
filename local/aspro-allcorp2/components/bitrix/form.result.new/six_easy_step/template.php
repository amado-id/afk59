<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
    <div class="form order<?=($arResult['FORM_NOTE'] ? ' success' : '')?><?=($arResult['isFormErrors'] == 'Y' ? ' error' : '')?>">
        <!--noindex-->
<!--        --><?// echo '<pre>'; print_r($arResult); echo '</pre>';?>
        <?if($arResult["isFormErrors"] == "Y"):?>
            <div class="form-error alert alert-danger"><?=$arResult["FORM_ERRORS_TEXT"]?></div>
        <?endif;?>
        <form name="<?=$arResult["WEB_FORM_NAME"]?>" action="<?=POST_FORM_ACTION_URI?>" method="POST" enctype="multipart/form-data" class="form callback-form" novalidate="novalidate">
            <input type="hidden" name="WEB_FORM_ID" value="<?=$arParams["WEB_FORM_ID"]?>">
            <?=bitrix_sessid_post()?>
            <div class="callback-form__title">
                <?if($arResult["isFormDescription"] == "Y"):?>
                    <div class="description">
                        <h2 class="callback-form__title">Заполните заявку</h2>
                        <p class="callback-form__text"><?=$arResult["FORM_DESCRIPTION"]?></p>
                    </div>
                <?endif;?>
            </div>
            <div class="callback-form__inputs">
                <?if(is_array($arResult["QUESTIONS"])):?>
                    <?foreach($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):?>
                        <?if($FIELD_SID == "ORDER_LIST"):?>
                            <div class="hidden">
                        <?endif;?>
<!--                    --><?// echo '<pre>'; print_r($arQuestion); echo '</pre>';?>
                    <? if ($arQuestion['REQUIRED'] == 'Y'):?>
                        <div class="input">
                            <input type="<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'];?>" <?=$arQuestion['STRUCTURE'][0]['FIELD_PARAM'];?> placeholder="<?=$arQuestion['CAPTION'].': *';?>" id="ORDER_<?=$FIELD_SID?>" data-sid="<?=$FIELD_SID?>" required name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'];?>_<?=$arQuestion['STRUCTURE'][0]['ID'];?>" value >
                        </div>
                    <? else:?>
                        <div class="input">
                            <input type="<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'];?>" <?=$arQuestion['STRUCTURE'][0]['FIELD_PARAM'];?> placeholder="<?=$arQuestion['CAPTION'].':';?>" id="ORDER_<?=$FIELD_SID?>" data-sid="<?=$FIELD_SID?>" required name="form_<?=$arQuestion['STRUCTURE'][0]['FIELD_TYPE'];?>_<?=$arQuestion['STRUCTURE'][0]['ID'];?>" value >
                        </div>
                    <? endif; ?>
                            <!--                        --><?//CAllcorp2::drawFormField($FIELD_SID, $arQuestion, 'ORDER', $arParams);?>
                        <?if($FIELD_SID == "ORDER_LIST"):?>
                            </div>
                        <?endif;?>
                    <?endforeach;?>
                <?endif;?>
            </div>
                <div class="form-footer1" style="margin-top: 26px;">

                    <div class="callback-form__checkbox">
                            <label class="checkbox">
                            <input type="checkbox" id="licenses_inline_<?=$arResult["arForm"]["ID"];?>" <?=(COption::GetOptionString("aspro.allcorp2", "LICENCE_CHECKED", "N") == "Y" ? "checked" : "");?> name="licenses_popup" checked="checked" value="Y" class="checkbox__check">
                            <div class="checkbox__square">
                                <svg class="checkbox__check">
                                    <use xlink:href="#_sprite_check"></use>
                                </svg>
                            </div>
                            </label>

                        <label for="licenses_inline_<?=$arResult["arForm"]["ID"];?>" class="checkbox">
                            <?$APPLICATION->IncludeFile(SITE_DIR."include/licenses_text.php", Array(), Array("MODE" => "html", "NAME" => "LICENSES")); ?>
                        </label>
                    </div>

                    <div class="">
                        <input name="dn" class="dn" value="" />
                        <input type="submit" class="button callback-form__button" value="<?=$arResult["arForm"]["BUTTON"]?>" name="web_form_submit">
                    </div>
                </div>

        </form>
        </div>
        <?=$arResult["FORM_FOOTER"]?>
        <!--/noindex-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.dn').val('nospam');
                if(arAllcorp2Options['THEME']['USE_SALE_GOALS'] !== 'N'){
                    var eventdata = {goal: 'goal_order_begin'};
                    BX.onCustomEvent('onCounterGoals', [eventdata]);
                }
                var sessionID = '<?=bitrix_sessid()?>';
                $('input[data-sid=SESSION_ID]').val(sessionID);

                $('form[name="<?=$arResult["arForm"]["VARNAME"]?>"]').validate({
                    highlight: function( element ){
                        $(element).parent().addClass('error');
                    },
                    unhighlight: function( element ){
                        $(element).parent().removeClass('error');
                    },
                    submitHandler: function( form ){
                        if( $('form[name="<?=$arResult["arForm"]["VARNAME"]?>"]').valid() ){
                            setTimeout(function() {
                                $(form).find('button[type="submit"]').attr("disabled", "disabled");
                            }, 300);
                            var eventdata = {type: 'form_submit', form: form, form_name: '<?=$arResult["arForm"]["VARNAME"]?>'};
                            BX.onCustomEvent('onSubmitForm', [eventdata]);
                        }
                    },
                    errorPlacement: function( error, element ){
                        error.insertBefore(element);
                    },
                    messages:{
                        licenses_popup: {
                            required : BX.message('JS_REQUIRED_LICENSES')
                        }
                    }
                });


                if(arAllcorp2Options['THEME']['PHONE_MASK'].length){
                    var base_mask = arAllcorp2Options['THEME']['PHONE_MASK'].replace( /(\d)/g, '_' );
                    $('form[name="<?=$arResult["arForm"]["VARNAME"]?>"] input.phone').inputmask('mask', {'mask': arAllcorp2Options['THEME']['PHONE_MASK'], 'showMaskOnHover': false });
                    $('form[name="<?=$arResult["arForm"]["VARNAME"]?>"] input.phone').blur(function(){
                        if( $(this).val() == base_mask || $(this).val() == '' ){
                            if( $(this).hasClass('required') ){
                                $(this).parent().find('div.error').html(BX.message('JS_REQUIRED'));
                            }
                        }
                    });
                }

                if(arAllcorp2Options['THEME']['DATE_MASK'].length)
                    $('form[name="<?=$arResult["arForm"]["VARNAME"]?>"] input.date').inputmask(arAllcorp2Options['THEME']['DATE_MASK'], { 'placeholder': arAllcorp2Options['THEME']['DATE_PLACEHOLDER'], 'showMaskOnHover': false  });

                $('.jqmClose').on('click', function(e){
                    e.preventDefault();
                    $(this).closest('.jqmWindow').jqmHide();
                })

                $('input[type=file]').uniform({fileButtonHtml: BX.message('JS_FILE_BUTTON_NAME'), fileDefaultHtml: BX.message('JS_FILE_DEFAULT')});
                $(document).on('change', 'input[type=file]', function(){
                    if($(this).val())
                    {
                        $(this).closest('.uploader').addClass('files_add');
                    }
                    else
                    {
                        $(this).closest('.uploader').removeClass('files_add');
                    }
                })
                $('.form .add_file').on('click', function(){
                    var index = $(this).closest('.input').find('input[type=file]').length+1;
                    $('<input type="file" id="POPUP_FILE" name="FILE_n'+index+'"   class="inputfile" value="" />').insertBefore($(this));
                    $('input[type=file]').uniform({fileButtonHtml: BX.message('JS_FILE_BUTTON_NAME'), fileDefaultHtml: BX.message('JS_FILE_DEFAULT')});
                })
            });
        </script>

