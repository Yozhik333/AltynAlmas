import sayHello from './lib/sayHello';
import {mainTopSlider} from './lib/mainTopSlider';
import {mainNewsSlider} from './lib/mainNewsSlider';
import {historySlider} from './lib/historySlider';
import {mainDeposits} from './lib/mainDeposits';
import {numberDaySlider} from './lib/numberDaySlider';
import {dropdown} from './lib/dropdown';
import {search} from './lib/search';
import {teamoftrainers} from './lib/teamoftrainers';
import {mobile} from './lib/mobile';
import {map} from './lib/map';

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
$(".tabs-wrapper .tab").click(function () {
    $(".tabs-wrapper .tab").removeClass("tabs-active").eq($(this).index()).addClass("tabs-active");
    $(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("tabs-active");

// !Не учел, что на ОДНОЙ странице может быть только ОДИН tabs-wrapper

$(".tab_item-security").not(":first").hide();
$(".tabs-wrapper-environment .tab-security").click(function () {
    $(".tabs-wrapper-environment .tab-security").removeClass("tabs-active").eq($(this).index()).addClass("tabs-active");
    $(".tab_item-security").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("tabs-active");

let desc = document.querySelector('.activity-detail__description')
if(desc){
    let removeP = desc.querySelectorAll('p')
    let removeDiv = desc.querySelectorAll('div')
    let removeUl = desc.querySelectorAll('ul')
    let removeSpan = desc.querySelectorAll('span')
    let removeLi = desc.querySelectorAll('li')

    Array.from(removeDiv).forEach(item => {
        item.removeAttribute('style')
    })

    Array.from(removeP).forEach(item => {
        item.removeAttribute('style')
    })

    Array.from(removeUl).forEach(item => {
        item.removeAttribute('style')
    })

    Array.from(removeSpan).forEach(item => {
        item.removeAttribute('style')
    })

    Array.from(removeLi).forEach(item => {
        item.removeAttribute('style')
    })
}

$("#doc1").on('click', function() {
console.log(123)
    $.fancybox.open({
        src  : '{{asset(\'img/corupcia.pdf\')}}',
        type : 'iframe',
        opts : {
            afterShow : function( instance, current ) {
                console.info( 'done!' );
            }
        }
    });

});