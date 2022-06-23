<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<div class="form popup<?=($arResult['FORM_NOTE'] ? ' success' : '')?><?=($arResult['isFormErrors'] == 'Y' ? ' error' : '')?>">
	<!--noindex-->
	<div class="form-header">
		<?if($arResult["isFormTitle"] == "Y"):?>
			<div class="text">
				<div class="title"><?=($arResult['FORM_NOTE'] ? GetMessage("SUCCESS_TITLE") : $arResult["FORM_TITLE"]);?></div>
				<?if($arResult["isFormDescription"] == "Y" && !$arResult['FORM_NOTE']):?>
					<div class="form_desc"><?=$arResult["FORM_DESCRIPTION"]?></div>
				<?endif;?>
			</div>
		<?endif;?>
		<?if(strlen($arResult["FORM_NOTE"])){?>
			<div class="form_result <?=($arResult["isFormErrors"] == "Y" ? 'error' : 'success')?>">
				<?if($arResult["isFormErrors"] == "Y"):?>
					<?=$arResult["FORM_ERRORS_TEXT"]?>
				<?else:?>
					<?$successNoteFile = SITE_DIR."include/form/success_{$arResult["arForm"]["SID"]}.php";?>
					<?if(\Bitrix\Main\IO\File::isFileExists(\Bitrix\Main\Application::getDocumentRoot().$successNoteFile)):?>
						<?$APPLICATION->IncludeFile($successNoteFile, array(), array("MODE" => "html", "NAME" => "Form success note"));?>
					<?elseif($arParams["SUCCESS_MESSAGE"]):?>
						<?=$arParams["SUCCESS_MESSAGE"];?>
					<?else:?>
						<?=GetMessage("FORM_SUCCESS");?>
					<?endif;?>
					<script>
						if(arAllcorp2Options['THEME']['USE_FORMS_GOALS'] !== 'NONE')
						{
							var id = '_'+'<?=((isset($arResult["arForm"]["ID"]) && $arResult["arForm"]["ID"]) ? $arResult["arForm"]["ID"] : $arResult["ID"] )?>';
							var eventdata = {goal: 'goal_webform_success' + (arAllcorp2Options['THEME']['USE_FORMS_GOALS'] === 'COMMON' ? '' : id)};
							BX.onCustomEvent('onCounterGoals', [eventdata]);
						}
						$(window).scroll();
					</script>
					<?if( $arParams["DISPLAY_CLOSE_BUTTON"] ){?>
						<div class="form-footer" style="text-align: center;">
							<button class="btn-lg <?=$arParams["CLOSE_BUTTON_CLASS"];?>"><?=($arParams["CLOSE_BUTTON_NAME"] ? $arParams["CLOSE_BUTTON_NAME"] : GetMessage("RELOAD_PAGE"));?></button>
						</div>
					<?}?>
				<?endif;?>
			</div>
		<?}?>
	</div>
	<?if(!$arResult["FORM_NOTE"]){?>
		<?if($arResult["isFormErrors"] == "Y"):?>
			<div class="form-error alert alert-danger"><?=$arResult["FORM_ERRORS_TEXT"]?></div>
		<?endif;?>
		<?=$arResult["FORM_HEADER"]?>
		<?=bitrix_sessid_post();?>
		<div class="form-body">
			<?if(is_array($arResult["QUESTIONS"])):?>
				<?foreach($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):?>
					<?CAllcorp2::drawFormField($FIELD_SID, $arQuestion);?>
				<?endforeach;?>				
			<?endif;?>
			<?if($arResult["isUseCaptcha"] == "Y"):?>
				<div class="captcha-row clearfix">
					<label><span><?=GetMessage("FORM_CAPRCHE_TITLE")?>&nbsp;<span class="required-star">*</span></span></label>
					<div class="captcha_image">
						<img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"])?>" class="captcha_img" border="0" />
						<input type="hidden" name="captcha_sid" class="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"])?>" />
						<div class="captcha_reload"></div>
						<span class="refresh"><a href="javascript:;" rel="nofollow"><?=GetMessage("REFRESH")?></a></span>
					</div>
					<div class="captcha_input">
						<input type="text" class="inputtext form-control captcha" name="captcha_word" size="30" maxlength="50" value="" required />
					</div>
				</div>
			<?else:?>
				<textarea name="nspm" style="display:none;"></textarea>
			<?endif;?>
		</div>
		<div class="form-footer">
			<?if($arParams["SHOW_LICENCE"] == "Y"):?>
				<div class="licence_block bx_filter">
					<input type="checkbox" id="licenses_popup" <?=(COption::GetOptionString("aspro.allcorp2", "LICENCE_CHECKED", "N") == "Y" ? "checked" : "");?> name="licenses_popup" required value="Y">
					<label for="licenses_popup">
						<?$APPLICATION->IncludeFile(SITE_DIR."include/licenses_text.php", Array(), Array("MODE" => "html", "NAME" => "LICENSES")); ?>
					</label>
				</div>
			<?endif;?>
			<div class="">
	            <input name="dn" class="dn" value="" />
				<input type="submit" class="btn btn-default btn-lg" value="<?=$arResult["arForm"]["BUTTON"]?>" name="web_form_submit">
			</div>
		</div>
		<?=$arResult["FORM_FOOTER"]?>
	<?}?>
	<!--/noindex-->
	<script type="text/javascript">
	$(document).ready(function(){
		$('.dn').val('nospam');
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

if ('aspro_allcorp2_callback_s1'=='<?=$arResult["arForm"]["VARNAME"]?>')
{
ga('send', 'event', 'lead', 'callme');
yaCounter31109961.reachGoal('callme');	
}
if ('aspro_allcorp2_question_s1'=='<?=$arResult["arForm"]["VARNAME"]?>')
{
ga('send', 'event', 'lead', 'askme');
yaCounter31109961.reachGoal('askme');	
}
if ('aspro_allcorp2_order_services_s1'=='<?=$arResult["arForm"]["VARNAME"]?>')
{
ga('send', 'event', 'lead', 'usluga');
yaCounter31109961.reachGoal('usluga');	
}
if ('aspro_allcorp2_order_product_s1'=='<?=$arResult["arForm"]["VARNAME"]?>')
{
ga('send', 'event', 'lead', 'tovar');
yaCounter31109961.reachGoal('tovar');	
}


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
			$('.popup form input.phone').inputmask('mask', {'mask': arAllcorp2Options['THEME']['PHONE_MASK'], 'showMaskOnHover': false });
			$('.popup form input.phone').blur(function(){
				if( $(this).val() == base_mask || $(this).val() == '' ){
					if( $(this).hasClass('required') ){
						$(this).parent().find('div.error').html(BX.message('JS_REQUIRED'));
					}
				}
			});
		}
		
		if(arAllcorp2Options['THEME']['DATE_MASK'].length)
			$('.popup form input.date').inputmask(arAllcorp2Options['THEME']['DATE_MASK'], { 'placeholder': arAllcorp2Options['THEME']['DATE_PLACEHOLDER'], 'showMaskOnHover': false  });

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
</div>