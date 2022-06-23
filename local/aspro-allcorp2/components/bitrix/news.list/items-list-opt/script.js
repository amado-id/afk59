$(document).ready(function(){
	if($('.table .row.sid').length)
	{
		if(BX.browser.IsIE9() && BX.browser.IsIE())
		{
			$('.table .row.sid').each(function(){
				// $(this).find('.item:visible .image').sliceHeight({lineheight: -3});
				$(this).find('.item:visible .properties').sliceHeight({fixWidth: 2});
				$(this).find('.item:visible .text').sliceHeight({fixWidth: 2});
			})
		}
	}
	if($('.table.item-views .tabs a').length)
	{
		$('.table.item-views .tabs a').first().addClass('heightsliced');
		$('.table.item-views .tabs a').on('click', function() {
			if(!$(this).hasClass('heightsliced')){
				$('.table.item-views .tab-pane.active').find('.item .image').sliceHeight({lineheight: -3});
				$('.table.item-views .tab-pane.active').find('.item .properties').sliceHeight();
				$('.table.item-views .tab-pane.active').find('.item .text').sliceHeight();
				$(this).addClass('heightsliced');
			}
		});
	}
})

document.addEventListener('DOMContentLoaded', () => {
	const swiper = new Swiper('.certificate-slider', {
		slidesPerView: 2,
		spaceBetween: 17,
		pagination: {
			el: '.swiper-pagination',
			dynamicBullets: true,
			clickable: true
		},
		breakpoints: {
			600: {
				slidesPerView: 4,
				spaceBetween: 32
			},
			781: {
				slidesPerView: 2,
				spaceBetween: 32
			},
			1000: {
				slidesPerView: 3,
				spaceBetween: 32
			},
			1600: {
				slidesPerView: 4,
				spaceBetween: 32
			}
		}
	});
})



