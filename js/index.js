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

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 30000,
  touch: false
});

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
