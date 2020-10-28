const items = document.querySelectorAll(".bEliminar");
const botonesEditar = document.querySelectorAll(".bEditar");

items.forEach(item => {
  item.addEventListener("click", function() {
    let cliente_id = this.dataset.cliente_id;
    // alert(this.dataset.cliente_id);
    let confirm = window.confirm("Deseas eliminar el elemento?");

    if (confirm) {
      httpRequest(url + "crudcliente/eliminarCliente/" + cliente_id, function(e) {
        console.log(this.responseText);
        const tbody = document.querySelector("#tbody-clientes");
        const fila = document.querySelector("#fila-" + cliente_id);
        tbody.removeChild(fila);
      })
    }
  });
});

botonesEditar.forEach(item => {
  item.estado = 1;
  item.addEventListener("click", function() {
    let cliente_id = this.dataset.cliente_id;
    console.log(this.dataset.cliente_id);
    let tbody = document.querySelector("#tbody-clientes");
    console.log(tbody);
    let fila = document.querySelector("#fila-" + cliente_id);
    console.log(fila);
    let iEditar = document.querySelector(`#fila-${cliente_id} .iEditar`);
    // const confirm = window.confirm("Deseas eliminar el elemento?");
    if (item.estado == 1) {

      fila.cells[0].innerHTML = `<td><input disabled style="width: 60px" name='cliente_id' type="text" value='${fila.cells[0].innerText}'></td>`;
      fila.cells[1].innerHTML = `<td><input style="width: 200px" name='nombre' type="text" value='${fila.cells[1].innerText}'></td>`;
      fila.cells[2].innerHTML = `<td><input style="width: 200px" name='apellido' type="text" value='${fila.cells[2].innerText}'></td>`;
      fila.cells[3].innerHTML = `<td><input style="width: 90px" name='dni' type="number" value='${fila.cells[3].innerText}'></td>`;
      fila.cells[4].innerHTML = `<td><input style="width: 50px" name='edad' type="number" value='${fila.cells[4].innerText}'></td>`;
      fila.cells[5].innerHTML = `<td><input style="width: 90px" name='distrito' type="text" value='${fila.cells[5].innerText}'></td>`;
      fila.cells[6].innerHTML = `<td><input style="width: 120px" name='direccion' type="text" value='${fila.cells[6].innerText}'></td>`;
      fila.cells[7].innerHTML = `<td><input style="width: 90px" name='telefono' type="number" value='${fila.cells[7].innerText}'></td>`;
      fila.cells[8].innerHTML = `<td><input style="width: 200px" name='email' type="text" value='${fila.cells[8].innerText}'></td>`;
      fila.cells[9].innerHTML = `<td><input style="width: 20px" name='estado' checked="true" type="checkbox" value='activo'></td>`;


      iEditar.classList.remove('fa-pencil');
      iEditar.classList.add('fa-save');
      item.estado = 2;
    } else {
      let f = document.createElement("form");
      f.setAttribute('method', "post");
      f.setAttribute('action', url + "crudcliente/actualizarCliente/" + cliente_id);

      let icliente_id = document.createElement("input"); //input element, text
      icliente_id.setAttribute('type', "text");
      icliente_id.setAttribute('name', "cliente_id");
      icliente_id.setAttribute('value', fila.cells[0].firstChild.value);

      let inombre = document.createElement("input"); //input element, text
      inombre.setAttribute('type', "text");
      inombre.setAttribute('name', "nombre");
      inombre.setAttribute('value', fila.cells[1].firstChild.value);

      let iapellido = document.createElement("input"); //input element, text
      iapellido.setAttribute('type', "text");
      iapellido.setAttribute('name', "apellido");
      iapellido.setAttribute('value', fila.cells[2].firstChild.value);

      let idni = document.createElement("input"); //input element, text
      idni.setAttribute('type', "number");
      idni.setAttribute('name', "dni");
      idni.setAttribute('value', fila.cells[3].firstChild.value);

      let iedad = document.createElement("input"); //input element, text
      iedad.setAttribute('type', "number");
      iedad.setAttribute('name', "edad");
      iedad.setAttribute('value', fila.cells[4].firstChild.value);

      let idistrito = document.createElement("input"); //input element, text
      idistrito.setAttribute('type', "text");
      idistrito.setAttribute('name', "distrito");
      idistrito.setAttribute('value', fila.cells[5].firstChild.value);

      let idireccion = document.createElement("input"); //input element, text
      idireccion.setAttribute('type', "text");
      idireccion.setAttribute('name', "direccion");
      idireccion.setAttribute('value', fila.cells[6].firstChild.value);

      let itelefono = document.createElement("input"); //input element, text
      itelefono.setAttribute('type', "number");
      itelefono.setAttribute('name', "telefono");
      itelefono.setAttribute('value', fila.cells[7].firstChild.value);

      let iemail = document.createElement("input"); //input element, text
      iemail.setAttribute('type', "text");
      iemail.setAttribute('name', "email");
      iemail.setAttribute('value', fila.cells[8].firstChild.value);

      let iestado = document.createElement("input"); //input element, text
      iestado.setAttribute('type', "checkbox");
      iestado.setAttribute('name', "estado");
      iestado.setAttribute('value', "activo");
      if (fila.cells[9].firstChild.checked) {
        iestado.click();
      }

      let s = document.createElement("input"); //input element, Submit button
      s.setAttribute('type', "submit");
      s.setAttribute('value', "Submit");

      f.appendChild(icliente_id);
      f.appendChild(inombre);
      f.appendChild(iapellido);
      f.appendChild(idni);
      f.appendChild(iedad);
      f.appendChild(idistrito);
      f.appendChild(idireccion);
      f.appendChild(itelefono);
      f.appendChild(iemail);
      f.appendChild(iestado);
      f.appendChild(s);
      fila.appendChild(f);

      iEditar.classList.remove('fa-save');
      iEditar.classList.add('fa-pencil');

      fila.cells[0].innerHTML = `<td>${fila.cells[0].firstChild.value}</td>`;
      fila.cells[1].innerHTML = `<td>${fila.cells[1].firstChild.value}</td>`;
      fila.cells[2].innerHTML = `<td>${fila.cells[2].firstChild.value}</td>`;
      fila.cells[3].innerHTML = `<td>${fila.cells[3].firstChild.value}</td>`;
      fila.cells[4].innerHTML = `<td>${fila.cells[4].firstChild.value}</td>`;
      fila.cells[5].innerHTML = `<td>${fila.cells[5].firstChild.value}</td>`;
      fila.cells[6].innerHTML = `<td>${fila.cells[6].firstChild.value}</td>`;
      fila.cells[7].innerHTML = `<td>${fila.cells[7].firstChild.value}</td>`;
      fila.cells[8].innerHTML = `<td>${fila.cells[8].firstChild.value}</td>`;
      fila.cells[9].innerHTML = `<td>${fila.cells[9].firstChild.value}</td>`;

      item.estado = 1;
      s.click();
      console.log('enviar');
    }
  });
});


function httpRequest(url, callback) {
  const http = new XMLHttpRequest();
  http.open("GET", url);
  http.send();

  http.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback.apply(http);
    }
  }
}