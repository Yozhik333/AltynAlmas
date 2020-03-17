import sayHello from './lib/sayHello';
import {mainTopSlider} from './lib/mainTopSlider';
import {mainNewsSlider} from './lib/mainNewsSlider';
import {mainDeposits} from './lib/mainDeposits';
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
