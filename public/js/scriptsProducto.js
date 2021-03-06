const items = document.querySelectorAll(".bEliminar");
const botonesEditar = document.querySelectorAll(".bEditar");

items.forEach(item => {
  item.addEventListener("click", function () {
    let producto_id = this.dataset.producto_id;
    // alert(this.dataset.producto_id);
    let confirm = window.confirm("Deseas eliminar el elemento?");

    if (confirm) {
      httpRequest(url + "/crudproducto/eliminarProducto/" + producto_id, function (e) {
        console.log(this.responseText);
        const tbody = document.querySelector("#tbody-productos");
        const fila = document.querySelector("#fila-" + producto_id);
        tbody.removeChild(fila);
      })
    }
  });
});

botonesEditar.forEach(item => {
  item.estado = 1;
  item.addEventListener("click", function () {
    let producto_id = this.dataset.producto_id;
    console.log(this.dataset.producto_id);
    let tbody = document.querySelector("#tbody-productos");
    console.log(tbody);
    let fila = document.querySelector("#fila-" + producto_id);
    console.log(fila);
    let iEditar = document.querySelector(`#fila-${producto_id} .iEditar`);
    // const confirm = window.confirm("Deseas eliminar el elemento?");
    if (item.estado == 1) {

      fila.cells[0].innerHTML = `<td><input disabled style="width: 60px" name='producto_id' value='${fila.cells[0].innerText}'></td>`;
      fila.cells[1].innerHTML = `<td><input style="width: 200px" name='nombre' value='${fila.cells[1].innerText}'></td>`;
      fila.cells[2].innerHTML = `<td><input style="width: 200px" name='descripcion' value='${fila.cells[2].innerText}'></td>`;
      fila.cells[3].innerHTML = `<td><input style="width: 60px" name='costo' type="number" value='${fila.cells[3].innerText}'></td>`;
      fila.cells[4].innerHTML = `<td><input style="width: 60px" name='cantidad' type="number" value='${fila.cells[4].innerText}'></td>`;

      iEditar.classList.remove('fa-pencil');
      iEditar.classList.add('fa-save');
      item.estado = 2;
    } else {
      let f = document.createElement("form");
      f.setAttribute('method', "post");
      f.setAttribute('action', url + "crudproducto/actualizarProducto/" + producto_id);

      let iproducto_id = document.createElement("input"); //input element, text
      iproducto_id.setAttribute('type', "text");
      iproducto_id.setAttribute('name', "producto_id");
      iproducto_id.setAttribute('value', fila.cells[0].firstChild.value);

      let inombre = document.createElement("input"); //input element, text
      inombre.setAttribute('type', "text");
      inombre.setAttribute('name', "nombre");
      inombre.setAttribute('value', fila.cells[1].firstChild.value);

      let idescripcion = document.createElement("input"); //input element, text
      idescripcion.setAttribute('type', "text");
      idescripcion.setAttribute('name', "descripcion");
      idescripcion.setAttribute('value', fila.cells[2].firstChild.value);

      let icosto = document.createElement("input"); //input element, text
      icosto.setAttribute('type', "number");
      icosto.setAttribute('name', "costo");
      icosto.setAttribute('value', fila.cells[3].firstChild.value);

      let icantidad = document.createElement("input"); //input element, text
      icantidad.setAttribute('type', "number");
      icantidad.setAttribute('name', "cantidad");
      icantidad.setAttribute('value', fila.cells[4].firstChild.value);

      let s = document.createElement("input"); //input element, Submit button
      s.setAttribute('type', "submit");
      s.setAttribute('value', "Submit");

      f.appendChild(iproducto_id);
      f.appendChild(inombre);
      f.appendChild(idescripcion);
      f.appendChild(icantidad);
      f.appendChild(icosto);
      f.appendChild(s);
      fila.appendChild(f);

      iEditar.classList.remove('fa-save');
      iEditar.classList.add('fa-pencil');

      fila.cells[0].innerHTML = `<td>${fila.cells[0].firstChild.value}</td>`;
      fila.cells[1].innerHTML = `<td>${fila.cells[1].firstChild.value}</td>`;
      fila.cells[2].innerHTML = `<td>${fila.cells[2].firstChild.value}</td>`;
      fila.cells[3].innerHTML = `<td>${fila.cells[3].firstChild.value}</td>`;
      fila.cells[4].innerHTML = `<td>${fila.cells[4].firstChild.value}</td>`;

      item.estado = 1;
      s.click();
      console.log('enviar');
    }
  });
});


function httpRequest (url, callback) {
  const http = new XMLHttpRequest();
  http.open("GET", url);
  http.send();

  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      callback.apply(http);
    }
  }
}