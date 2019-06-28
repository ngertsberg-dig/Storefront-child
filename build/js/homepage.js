
class Homepage{
	constructor(){
		this.init();
		this.homepageSlider();
	}
	homepageSlider(){
		var homepageSlider = new Swiper('.slider-container .swiper-container', {
		    speed: 400,
		    effect: 'fade',
		    autoplay: true
		});
		$(".slider-container .next-slide").click(function(){
			$(".slider-container .swiper-container")[0].swiper.slideNext()
		});

		$(".slider-container .previous-slide").click(function(){
			$(".slider-container .swiper-container")[0].swiper.slidePrev()
		});
	}
	init(){
		console.log('homepage');
	}
}
new Homepage();

