let darkMode = JSON.parse(localStorage.getItem('darkMode')) || false;

// darkMode function
const activeDarkMode = () => {
  changeDarkModeIcon();

  darkMode = !darkMode;
  JSON.stringify(localStorage.setItem('darkMode', darkMode));

  darkModeToggle();
};

function darkModeToggle() {
  if (darkMode) {
    document.querySelector('html').setAttribute('data-bs-theme', 'dark');
  } else if (!darkMode) {
    document.querySelector('html').setAttribute('data-bs-theme', 'light');
  }
}

function changeDarkModeIcon() {
  const switchMode = document.getElementById('switch-mode');
  const iTag = switchMode.querySelectorAll('i');

  iTag.forEach((element) => {
    element.classList.toggle('d-none');
  });
}

if (darkMode != false) {
  darkModeToggle();
  changeDarkModeIcon();
}

function addActiveClass(event) {
  const navUl = document.querySelector('#navUl');
  const navAnchorEl = navUl.querySelectorAll('a');

  navAnchorEl.forEach((element) => {
    if (element.classList.contains('active')) {
      element.classList.remove('active');
    }
  });

  event.target.classList.add('active');
}

const myCarouselElement = document.querySelector(
  '#carouselExampleAutoplayingM'
);

function searchToggle() {
  document.querySelector('#search-bar').classList.toggle('activeSearch');
}

function changeIconCart(event) {
  const targetEl = event.target.parentElement.querySelector('i');

  if (targetEl.classList.contains('bi-bag')) {
    targetEl.classList.remove('bi-bag');
    targetEl.classList.add('bi-bag-fill');
  } else {
    targetEl.classList.remove('bi-bag-fill');
    targetEl.classList.add('bi-bag');
  }
}

function changeSection(section, event) {
  document.querySelector('#men').classList.toggle('d-none', section !== 'men');
  document
    .querySelector('#women')
    .classList.toggle('d-none', section !== 'women');

  if (section === 'men') {
    document.querySelector('#womenatag').classList.remove('text-danger');
    document.querySelector('#menatag').classList.add('text-danger');
  } else if (section === 'women') {
    document.querySelector('#menatag').classList.remove('text-danger');
    document.querySelector('#womenatag').classList.add('text-danger');
  }
}

function showLogin() {
  const loginElement = document.querySelector('#login');

  loginElement.classList.toggle('d-block');

  document.querySelector('#sign-up').classList.add('d-none');
  document.querySelector('#sign-in').classList.remove('d-none');
  document.querySelector('#sign-in').classList.add('d-block');
}

function showSignup() {
  document.querySelector('#sign-up').classList.toggle('d-none');
  document.querySelector('#sign-up').classList.add('d-block');

  document.querySelector('#sign-in').classList.add('d-none');
  document.querySelector('#sign-in').classList.remove('d-block');
}

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 30000,
  touch: false
});
