import sayHello from './lib/sayHello';
import {mainTopSlider} from './lib/mainTopSlider';
import {mainNewsSlider} from './lib/mainNewsSlider';
import {historySlider} from './lib/historySlider';
import {mainDeposits} from './lib/mainDeposits';
import {numberDaySlider} from './lib/numberDaySlider';
import {dropdown} from './lib/dropdown';

sayHello();

(function () {
  
  const cropElement = document.querySelectorAll('.js-text-ellipsis'); // выбор элементов
  const size = 270;                                   // кол-во символов
  const endCharacter = '...';                                  // окончание
  
  cropElement.forEach(el => {
    let text = el.innerHTML;
    
    if (el.innerHTML.length > size) {
      text = text.substr(0, size);
      el.innerHTML = text + endCharacter;
    }
  });
  
}());


// Tabs

$(".tab_item").not(":first").hide();
$(".tabs-wrapper .tab").click(function() {
	$(".tabs-wrapper .tab").removeClass("tabs-active").eq($(this).index()).addClass("tabs-active");
	$(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("tabs-active");

// Не учел, что на ОДНОЙ странице может быть только ОДИН tabs-wrapper

$(".tab_item-security").not(":first").hide();
$(".tabs-wrapper-environment .tab-security").click(function() {
	$(".tabs-wrapper-environment .tab-security").removeClass("tabs-active").eq($(this).index()).addClass("tabs-active");
	$(".tab_item-security").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("tabs-active");
