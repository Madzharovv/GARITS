let clicked = false;

const item1 = document.querySelector('.sidebar');
const item2 = document.querySelectorAll('.side-nav span');
const item3 = document.querySelector('.side-nav');
const menu = document.querySelector('.sidebar__menu');

const activeClass = document.querySelectorAll('.reception a');
const activeLink = document.querySelectorAll('.reception');
const windowLocation = window.location.pathname;
const pathName = windowLocation;

const init = () => {
  item1.classList.toggle('sidemenu-flex');
  item1.classList.toggle('sidemenu-align');
  item3.classList.toggle('sidemenu-marging');
  item2.forEach((item) => {
    item.classList.toggle('display-block');
  });
};

// menu.addEventListener('click', function () {
//   if (clicked) {
//     init();
//     clicked = false;
//   } else {
//     init();
//     clicked = true;
//   }
// });

menu.addEventListener('click', init);

activeClass.forEach((item) => {
  const hrefLink = item.getAttribute('href');
  if (pathName === hrefLink) {
    item.parentElement.style.backgroundColor = '#f6a873';
    item.parentElement.style.color = '#1b1c1e';
  } else {
    return null;
  }
});

// const mediaQuery = window.matchMedia('(max-width: 720px)');
// if (mediaQuery.matches) {
//   menu.style.display = 'none';
// }

const userEl = document.querySelectorAll('.user-type');

userEl.forEach((el) => {
  const userType = el.textContent;

  if (userType === 'Mechanic') {
    el.style.color = '#89C752';
  } else if (userType === 'Receptionist') {
    el.style.color = '#DAD109';
  } else if (userType === 'Franchise') {
    el.style.color = '#214DE8';
  } else if (userType === 'Administrator') {
    el.style.color = '#E87121';
  }
});
