<script type = "text/javascript">

//Script para Ocultar o mostrar los campos Otro Cual al iniciar/cargar la página, estos se ocultan si su campo NO tiene datos
// . value cuando es checkBox y . checked cuando es radio
function Init(){
  var appotrocual8 = document.getElementById('aplicaciones-appotrocual8').value;
  var appotrocual9 = document.getElementById('aplicaciones-appotrocual9').value;
  var appotrocual10 = document.getElementById('aplicaciones-appotrocual10').value;
  var appotrocual12 = document.getElementById('aplicaciones-appotrocual12').value;
  var appotrocual14 = document.getElementById('aplicaciones-appotrocual14').value;
  var appotrocual16 = document.getElementById('aplicaciones-appotrocual16').value;
  var appotrocual18 = document.getElementById('aplicaciones-appotrocual18').value;
  var appotrocual19 = document.querySelector('#aplicaciones-tiposid_fk19 > label:nth-child(1) > input[type="radio"]').checked;
  var appotrocual20 = document.querySelector('#aplicaciones-tiposid_fk20 > label:nth-child(1) > input[type="radio"]').checked;
  var appotrocual25 = document.querySelector('#aplicaciones-tiposid_fk25 > label:nth-child(3) > input[type="radio"]').checked;
  var appotrocual27 = document.querySelector('#aplicaciones-tiposid_fk27 > label:nth-child(5) > input[type="radio"]').checked;
  var appotrocual28 = document.querySelector('#aplicaciones-tiposid_fk28 > label:nth-child(3) > input[type="radio"]').checked;
  var tiposid_fk12 = document.querySelector('#aplicaciones-tiposid_fk11 > label:nth-child(1) > input[type="radio"]').checked;
  var tiposid_fk14 = document.querySelector('#aplicaciones-tiposid_fk13 > label:nth-child(1) > input[type="radio"]').checked;
  var tiposid_fk16 = document.querySelector('#aplicaciones-tiposid_fk15 > label:nth-child(1) > input[type="radio"]').checked;
  var tiposid_fk18 = document.querySelector('#aplicaciones-tiposid_fk17 > label:nth-child(1) > input[type="radio"]').checked;
  var tiposid_fk18 = document.querySelector('#aplicaciones-tiposid_fk17 > label:nth-child(1) > input[type="radio"]').checked;

  // alert(appotrocual27);
  // #w0-tab5 > div.form-group.field-aplicaciones-appotrocual8

  if (appotrocual8 ==="") {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual8').style.visibility = "hidden";
  }
  if (appotrocual9 ==="") {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual9').style.visibility = "hidden";
  }
  if (appotrocual10 ==="") {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual10').style.visibility = "hidden";
  }
  if (appotrocual12 ==="") {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual12').style.visibility = "hidden";
  }
  if (appotrocual14 ==="") {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual14').style.visibility = "hidden";
  }
  if (appotrocual16 ==="") {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual16').style.visibility = "hidden";
  }
  if (appotrocual18 ==="") {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual18').style.visibility = "hidden";
  }
  if (appotrocual19 ==="") {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual19').style.visibility = "hidden";
  }
  if (!tiposid_fk12) {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-tiposid_fk12').style.visibility = "hidden";
  }
  if (!tiposid_fk14) {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-tiposid_fk14').style.visibility = "hidden";
  }
  if (!tiposid_fk16) {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-tiposid_fk16').style.visibility = "hidden";
  }
  if (!tiposid_fk18) {
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-tiposid_fk18').style.visibility = "hidden";
  }
  if (!appotrocual19) {
    // alert(appotrocual19);
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual19').style.visibility = "hidden";
  }
  if (!appotrocual20) {
    // alert(appotrocual19);
    document.querySelector('#w0-tab5 > div.form-group.field-aplicaciones-appotrocual20').style.visibility = "hidden";
  }
  if (!appotrocual25) {
    document.querySelector('#w0-tab10 > div.form-group.field-aplicaciones-appotrocual25').style.visibility = "hidden";
  }
  if (!appotrocual27) {
    document.querySelector('#w0-tab10 > div.form-group.field-aplicaciones-appotrocual27').style.visibility = "hidden";
  }
  if (!appotrocual28) {
    document.querySelector('#w0-tab10 > div.form-group.field-aplicaciones-appotrocual28').style.visibility = "hidden";
  }

}

// Función para ocultar o mostrar los campos al selecionar una determinada respuesta en los campos tipo Radio o checkBoxList
// Sus datos de ingreso son:
// $id que corresponde al número que acompaña a TiposId, en este caso queda TiposId$id_fk. Ejemplo TiposId25_fk
// $tab corresponde al número de pestaña en el tabulado
// $tipo corresponde al tipo de selección, radio o checkbox.
// Estos datos son llamados por ['onchange'=>'TiposId_fk($id=19,$tab=5,$tipo="radio");'] desde los campos del formulario

function TiposId_fk($id,$tab,$tipo){
  // Selector Padre para contar el número de Items seleccionables en el campo TiposId_fk,
  // donde #aplicaciones-tiposid_fk es el ID PADRE
  var parent = document.querySelector('#aplicaciones-tiposid_fk'+$id+'');
  // var label selecciona los elementos tipo label
  var label = parent.querySelectorAll('label');
  // var cantidad cuenta la cantidad de elementos tipo label
  var cantidad = label.length;
  //Ciclo FOR para recorrer cada uno de los elementos seleccionables dentro del checkBoxList de TiposId_fk

  for (var i = 1; i <= cantidad; i++) {
    // alert("HERE");
    // var arry ='';
    var TiposId_fk = document.querySelector("#aplicaciones-tiposid_fk"+$id+" > label:nth-child("+i+") > input[type='"+$tipo+"']");
    // alert(TiposId_fk);
    arry= TiposId_fk.value;

    // Si el valor dentro de un objeto tipo checkbox o radio es igual a "Otro" entonces ingresa. Por eso en la DB se maneja
    // Tipo de Tipos, donde Tipos es Si o No y el valor de Si = Otro
    if (arry === "Otro") {
      var flag = TiposId_fk.checked;

      if (flag) {
        if ($tipo==="radio") {
          // alert($id + " id Radio Visible");
          //Se parchea porque hay un inconveninete con TiposId_fk19, TiposId_fk27, esto debido a mala nomenclatura de campos, se parchea con IF()
          //Autor Diego Realpe
          if ($id ==19 ||$id ==25 || $id==27 || $id==28 || $id==20) {
            // alert($id);
            // alert("Here");
            document.querySelector('#w0-tab'+$tab+' > div.form-group.field-aplicaciones-appotrocual'+$id+'').style.visibility = "visible";
          }else {
            // alert($id);
            // alert("2nd Here");
            $id++;
            document.querySelector('#w0-tab'+$tab+' > div.form-group.field-aplicaciones-tiposid_fk'+$id+'').style.visibility = "visible";
          }
        }else {
          // alert($id + " id Check Visible");
          //Código para desplegar el campo Cual luego de seleccionar Otro como opción en el checkbox o Si en el radio Button
          document.querySelector('#w0-tab'+$tab+' > div.form-group.field-aplicaciones-appotrocual'+$id+'').style.visibility = "visible";
          document.getElementById('aplicaciones-appotrocual'+$id+'').type="";
          document.getElementById('aplicaciones-appotrocual'+$id+'').placeholder="Otro";
        }
      } else {
        if ($tipo==="radio") {
          // alert($id + " id Radio Hidden");
          //Código para ocultar el campo Cual luego de seleccionar diferente a Otro como opción en el checkbox o Si en el radio Button
          //Se parchea porque hay un inconveninete con TiposId_fk19, TiposId_fk27, esto debido a mala nomenclatura de campos, se parchea con IF()
          //Autor Diego Realpe
          if ($id ==19 ||$id ==25 || $id==27 || $id==28 || $id==20) {
            document.querySelector('#w0-tab'+$tab+' > div.form-group.field-aplicaciones-appotrocual'+$id+'').style.visibility = "hidden";

          }else {
            $id++;
            document.querySelector('#w0-tab'+$tab+' > div.form-group.field-aplicaciones-tiposid_fk'+$id+'').style.visibility = "hidden";
          }

        }else {
          // alert($id + " id Check Hidden");
          document.querySelector('#w0-tab'+$tab+' > div.form-group.field-aplicaciones-appotrocual'+$id+'').style.visibility = "hidden";
          // Opción para borrar el texto dentro de el campo Cual SI en el Checkbox se quita el chequeo en Otro
          // document.getElementById('aplicaciones-appotrocual'+$id+'').value="";
        }
      }
    }
  }
}
</script>
