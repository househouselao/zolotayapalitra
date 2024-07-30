/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Menu show */
if(navToggle){
   navToggle.addEventListener('click', () =>{
      navMenu.classList.add('show-menu')
   })
}

/* Menu hidden */
if(navClose){
   navClose.addEventListener('click', () =>{
      navMenu.classList.remove('show-menu')
   })
}
let swiperCards = new Swiper(".card__content", {
   loop: true,
   spaceBetween: 32,
   grabCursor: true,
 
   pagination: {
     el: ".swiper-pagination",
     clickable: true,
     dynamicBullets: true,
   },
 
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
 
   breakpoints:{
     600: {
       slidesPerView: 2,
     },
     968: {
       slidesPerView: 3,
     },
   },
 });


 // получаем форму добавления товара в корзину
const addToCartForm = document.getElementById('add-to-cart-form');

// функция добавления товара в корзину
function addToCart(event) {
  // отменяем действие по умолчанию для формы
  event.preventDefault();

  // получаем данные из формы
  const formData = new FormData(addToCartForm);
  const productId = formData.get('product_id');
  const quantity = formData.get('quantity');

  // отправляем AJAX-запрос на сервер
  fetch('/add-to-cart', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ productId: productId, quantity: quantity })
  })
  .then(response => response.json())
  .then(data => {
    // обновляем корзину
    const cartItem = document.createElement('li');
    cartItem.textContent = `Товар ${productId} добавлен в корзину`;
    cartList.appendChild(cartItem);
  })
  .catch(error => console.error('Ошибка добавления товара в корзину:', error));
}

// добавляем обработчик события для формы добавления товара в корзину
addToCartForm.addEventListener('submit', addToCart);

document.addEventListener('DOMContentLoaded', () => {
  const subtotalPrice = document.getElementById('subtotal-price');
  const quantityInputs = document.querySelectorAll('input[type="number"][data-product-id]');

  function updateSubtotal() {
    let newSubtotal = 0;

    quantityInputs.forEach((input) => {
      const productId = input.getAttribute('data-product-id');
      const quantity = parseInt(input.value, 10);
      const price = parseFloat(document.querySelector(`input[data-product-id="${productId}"]`).dataset.productPrice);

      newSubtotal += quantity * price;
    });

    subtotalPrice.textContent = `$${newSubtotal.toFixed(2)}`;
  }

  quantityInputs.forEach((input) => {
    input.addEventListener('input', updateSubtotal);
    input.dataset.productPrice = input.closest('tr').querySelector('.price').textContent.replace(' ', '').replace('$', '');
  });

  updateSubtotal();
});

 