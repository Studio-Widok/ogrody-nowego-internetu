import 'lazysizes';
import $ from 'cash-dom';

import 'widok';

let timeout;
$('.list-more').on('click', event => {
  const element = $(event.currentTarget);
  const parentElement = element.parents('.list-item');
  const descriptionElement = parentElement.find('.list-description');
  if (parentElement.hasClass('list-item--expanded')) {
    clearTimeout(timeout);
    descriptionElement.css({ height: descriptionElement[0].scrollHeight });
    timeout = setTimeout(() => {
      descriptionElement.css({ height: 0 });
    }, 0);
  } else {
    descriptionElement.css({ height: descriptionElement[0].scrollHeight });
    timeout = setTimeout(() => {
      descriptionElement.css({ height: 'auto' });
    }, 500);
  }
  parentElement.toggleClass('list-item--expanded');
});
