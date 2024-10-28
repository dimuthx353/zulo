const updateProductForms = document.querySelectorAll('.updateProduct');

updateProductForms.forEach((form) => {
  const updateBtn = form.update;
  updateBtn.addEventListener('click', (event) => {
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
