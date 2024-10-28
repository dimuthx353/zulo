const updateProductForms = document.querySelectorAll('.updateProduct');

console.log('hello from');

updateProductForms.forEach((form) => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const productId = form.productId.value;

    const xhr = new XMLHttpRequest();
    xhr.open(
      'GET',
      `../../../zulo/inc/handlers/updateProduct_handler.php?name=${form.productName.value}&price=${form.productPrice.value}&productId=${productId}`,
      true
    );

    xhr.onload = function () {
      if (this.status === 200) {
        alert('done');
      }
    };

    xhr.send();
  });
});
