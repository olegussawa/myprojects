 const menuBtn=document.querySelector('.header__two-btn');
  const menuClose=document.querySelector('.menu__close-btn');
  const menuList=document.querySelector('.menu__block');
//  const menuShad=document.querySelector('.menu--close');

 menuBtn.addEventListener('click',()=>{menuList.classList.toggle('menu__block--open')});
// menuBtn.addEventListener('click',()=>{menuShad.classList.toggle('menu--open')});

 menuClose.addEventListener('click',()=>{menuList.classList.remove('menu__block--open')});
// menuClose.addEventListener('click',()=>{menuShad.classList.remove('menu--open')});















