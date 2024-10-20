function addToWishlist(event) {
  if (event.target.classList.contains('bi-heart-fill')) {
    const xhr = new XMLHttpRequest();
    xhr.open(
      'GET',
      `../zulo/inc/handlers/wishlist_handler.php?cart=false&product_id=${event.target.dataset.product_id}`,
      true
    );
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      if (this.status === 200) {
        // console.log(this.responseText);
      }
    };

    xhr.send();
  } else if (event.target.classList.contains('bi-heart')) {
    const xhr = new XMLHttpRequest();
    xhr.open(
      'GET',
      `../zulo/inc/handlers/wishlist_handler.php?cart=true&product_id=${event.target.dataset.product_id}`,
      true
    );
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      if (this.status === 200) {
      }
    };

    xhr.send();
  }

  event.target.classList.toggle('bi-heart');
  event.target.classList.toggle('bi-heart-fill');
}

function addToCart(productId) {
  console.log(productId);
  const xhr = new XMLHttpRequest();
  xhr.open(
    'GET',
    `../zulo/inc/handlers/cart_handler.php?product_id=${productId}`,
    true
  );
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.onload = function () {
    if (this.status === 200) {
      // console.log(this.responseText);
    }
  };
  xhr.send();
}
