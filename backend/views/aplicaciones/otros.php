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
  var appotrocual21 = document.getElementById('aplicaciones-appotrocual21').value;
  var appentiimag = document.querySelector('#aplicaciones-appentiimag').value;
  // alert(appentiimag);

  var appotrocual19 = document.querySelector('#aplicaciones-tiposid_fk19 > label:nth-child(1) > input[type="radio"]').checked;
  var appotrocual20 = document.querySelector('#aplicaciones-tiposid_fk20 > label:nth-child(1) > input[type="radio"]').checked;
  var tiposid_fk12 = document.querySelector('#aplicaciones-tiposid_fk11 > label:nth-child(1) > input[type="radio"]').checked;
  var tiposid_fk14 = document.querySelector('#aplicaciones-tiposid_fk13 > label:nth-child(1) > input[type="radio"]').checked;
  var tiposid_fk16 = document.querySelector('#aplicaciones-tiposid_fk15 > label:nth-child(1) > input[type="radio"]').checked;
  var tiposid_fk18 = document.querySelector('#aplicaciones-tiposid_fk17 > label:nth-child(1) > input[type="radio"]').checked;
  // var tiposid_fk5 = document.querySelector('#aplicaciones-tiposid_fk5 > label:nth-child(1) > input[type="checkbox"]').checked;
  // var tiposid_fk5_1 = document.querySelector('#aplicaciones-tiposid_fk5 > label:nth-child(2) > input[type="checkbox"]').checked;
  // var tiposid_fk5_2 = document.querySelector('#aplicaciones-tiposid_fk5 > label:nth-child(3) > input[type="checkbox"]').checked;

  // NOTE: Con esta función se carga los checkBox del DynamicFormWidget en views/aplicaciones/Tabs/datosApp.php
  //       correspondiente a Aplicaciones Relacionadas
  Appinteractua();

  // NOTE: Con esta función se carga los campos de AppFechPues y AppServPues (X3) en views/aplicaciones/Tabs/datosApp.php
  TipoPuesta();

  if (appotrocual8 ==="") {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual8').style.display = "none";
  }
  if (appotrocual9 ==="") {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual9').style.display = "none";
  }
  if (appotrocual10 ==="") {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual10').style.display = "none";
  }
  if (appotrocual12 ==="") {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual12').style.display = "none";
  }
  if (appotrocual14 ==="") {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual14').style.display = "none";
  }
  if (appotrocual16 ==="") {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual16').style.display = "none";
  }
  if (appotrocual18 ==="") {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual18').style.display = "none";
  }
  // if (appotrocual19 ==="") {
  //   document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual19').style.display = "none";
  // }
  if (appotrocual21 ==="") {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual21').style.display = "none";
  }
  // if (!tiposid_fk5) {
  //   document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(1)').style.display = "none";
  // }
  // if (!tiposid_fk5_1) {
  //   document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(2)').style.display = "none";
  // }
  // if (!tiposid_fk5_2) {
  //   document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(3)').style.display = "none";
  // }
  if (!tiposid_fk12) {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-tiposid_fk12').style.display = "none";
  }
  if (!tiposid_fk14) {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-tiposid_fk14').style.display = "none";
  }
  if (!tiposid_fk16) {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-tiposid_fk16').style.display = "none";
  }
  if (!tiposid_fk18) {
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-tiposid_fk18').style.display = "none";
  }
  // if (!appotrocual19) {
  //   // alert(appotrocual19);
  //   document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual19').style.display = "none";
  // }
  if (!appotrocual20) {
    // alert(appotrocual19);
    document.querySelector('#w1-tab5 > div.form-group.field-aplicaciones-appotrocual20').style.display = "none";
  }
  if (appentiimag === '') {
    document.querySelector('#w1-tab1 > div.form-group.field-aplicaciones-appentiimag').style.display = "none";
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

  // NOTE: Se diferencia los ID 25, 27 y 28 por que pertenecen al modelo 1:N entre Aplicaciones y Appbasedatos y estos son para ocultar/mostra campos Otrocual
  if ($id == 25 || $id == 27 || $id == 28) {



  }else {
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
            if ($id ==19 || $id==20) {
              // alert($id);
              // alert("Here");
              document.querySelector('#w1-tab'+$tab+' > div.form-group.field-aplicaciones-appotrocual'+$id+'').style.display = "block";
            }else {
              // alert($id);
              // alert("2nd Here");
              $id++;
              document.querySelector('#w1-tab'+$tab+' > div.form-group.field-aplicaciones-tiposid_fk'+$id+'').style.display = "block";
            }
          }else {
            // alert($id + " id Check Visible");
            //Código para desplegar el campo Cual luego de seleccionar Otro como opción en el checkbox o Si en el radio Button
            document.querySelector('#w1-tab'+$tab+' > div.form-group.field-aplicaciones-appotrocual'+$id+'').style.display = "block";
            document.getElementById('aplicaciones-appotrocual'+$id+'').type="";
            document.getElementById('aplicaciones-appotrocual'+$id+'').placeholder="Otro";
          }
        } else {
          if ($tipo==="radio") {
            // alert($id + " id Radio Hidden");
            //Código para ocultar el campo Cual luego de seleccionar diferente a Otro como opción en el checkbox o Si en el radio Button
            //Se parchea porque hay un inconveninete con TiposId_fk19, TiposId_fk27, esto debido a mala nomenclatura de campos, se parchea con IF()
            //Autor Diego Realpe
            if ($id ==19 || $id==20) {
              document.querySelector('#w1-tab'+$tab+' > div.form-group.field-aplicaciones-appotrocual'+$id+'').style.display = "none";

            }else {
              $id++;
              document.querySelector('#w1-tab'+$tab+' > div.form-group.field-aplicaciones-tiposid_fk'+$id+'').style.display = "none";
            }

          }else {
            // alert($id + " id Check Hidden");
            document.querySelector('#w1-tab'+$tab+' > div.form-group.field-aplicaciones-appotrocual'+$id+'').style.display = "none";
            // Opción para borrar el texto dentro de el campo Cual SI en el Checkbox se quita el chequeo en Otro
            // document.getElementById('aplicaciones-appotrocual'+$id+'').value="";
          }
        }
      }
    }
  }

}

// NOTE: Función para mostrar u ocultar los campos de AppFechPues y AppServPues (X3) de la vista views/aplicaciones/Tabs/datosApp.php
function TipoPuesta(){
  if (document.querySelector('#aplicaciones-tiposid_fk5 > label:nth-child(1) > input[type="checkbox"]').checked) {
    document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(1)').style.display = "block";
  }else {
    document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(1)').style.display = "none";
  }
  if (document.querySelector('#aplicaciones-tiposid_fk5 > label:nth-child(2) > input[type="checkbox"]').checked) {
    document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(2)').style.display = "block";
  }else {
    document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(2)').style.display = "none";
  }
  if (document.querySelector('#aplicaciones-tiposid_fk5 > label:nth-child(3) > input[type="checkbox"]').checked) {
    document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(3)').style.display = "block";
  }else {
    document.querySelector('#w1-tab5 > div:nth-child(6) > div:nth-child(3)').style.display = "none";
  }
}

// NOTE: Función para mostrar u ocultar el campo AIntOtroCual de la vista views/aplicaciones/Tabs/datosApp.php, este campo se encuentra dentro de DynamicFormWidget y la función se llama desde este.

function Appinteractua(){

  var parent = document.querySelector('#w1-tab5 > div:nth-child(29) > div > div.panel-body');
  var label = parent.querySelectorAll('#w1-tab5 > div:nth-child(29) > div > div.panel-body > div > div > div');
  var cantidad = label.length;
  var value = document.querySelector('#appinteractua-0-appid_fk1').value;

  if (cantidad ==1) {
    if (value != 1) {
      document.querySelector('#w1-tab5 > div:nth-child(29) > div > div.panel-body > div > div > div > div.panel-body > div > div.col-sm-4 > div').style.display = "none";
    }else {
      document.querySelector('#w1-tab5 > div:nth-child(29) > div > div.panel-body > div > div > div > div.panel-body > div > div.col-sm-4 > div').style.display = "block";
    }
  }else {
    for (var i = 0; i < cantidad; i++) {

      var valor = document.querySelector('#appinteractua-'+i+'-appid_fk1').value;
      if (valor != 1) {
        i++;
        document.querySelector('#w1-tab5 > div:nth-child(29) > div > div.panel-body > div > div > div:nth-child('+i+') > div.panel-body > div > div.col-sm-4 > div').style.display = "none";
        i--;

      }else {
        i++;
        document.querySelector('#w1-tab5 > div:nth-child(29) > div > div.panel-body > div > div > div:nth-child('+i+') > div.panel-body > div > div.col-sm-4 > div').style.display = "block";
        i--;
      }
    }
  }
}

function Appbasedatos($id, $child){

  var parent = document.querySelector('#w1-tab10 > div > div > div.panel-body'); //Selecciona cada Forma dinámica que exista
  var label = parent.querySelectorAll('#w1-tab10 > div > div > div.panel-body > div > div > div > div.panel-body');
  var cantidad = label.length; // Cuenta la cantidad de formas dinámicas que existan

  if (cantidad == 1) {

    // #appinformacion-0-tiposid_fk26

    var parent = document.querySelector('#appinformacion-0-tiposid_fk'+$id+'');
    // var label selecciona los elementos tipo label
    var label = parent.querySelectorAll('label');
    // var cantidad cuenta la cantidad de elementos tipo label
    var cantidad = label.length;
    //Ciclo FOR para recorrer cada uno de los elementos seleccionables dentro del checkBoxList de TiposId_fk

    for (var i = 1; i <= cantidad; i++) {
      var TiposId_fk = document.querySelector('#appinformacion-0-tiposid_fk'+$id+' > label:nth-child('+i+') > input[type="checkbox"]');
      arry= TiposId_fk.value;

      if (arry === "Otro") {
        var flag = TiposId_fk.checked;

        if (flag) {
          // NOTE: id Otro cual para 1 sola formas dinámicas
          // #w1-tab10 > div > div > div.panel-body > div > div > div > div.panel-body > div:nth-child(5) > div:nth-child(2) > div
          // #w1-tab10 > div > div > div.panel-body > div > div > div > div.panel-body > div:nth-child(8) > div:nth-child(2) > div
          // #w1-tab10 > div > div > div.panel-body > div > div > div > div.panel-body > div:nth-child(9) > div:nth-child(2) > div

          // NOTE: id Otro cual para 2 o más formas dinámicas
          // #w1-tab10 > div > div > div.panel-body > div > div > div:nth-child(1) > div.panel-body > div:nth-child(5) > div:nth-child(2) > div
          // #w1-tab10 > div > div > div.panel-body > div > div > div:nth-child(1) > div.panel-body > div:nth-child(8) > div:nth-child(2) > div
          // #w1-tab10 > div > div > div.panel-body > div > div > div:nth-child(1) > div.panel-body > div:nth-child(9) > div:nth-child(2) > div

          // #w1-tab10 > div > div > div.panel-body > div > div > div:nth-child(2) > div.panel-body > div:nth-child(5) > div:nth-child(2) > div
          // #w1-tab10 > div > div > div.panel-body > div > div > div:nth-child(2) > div.panel-body > div:nth-child(8) > div:nth-child(2) > div
          // #w1-tab10 > div > div > div.panel-body > div > div > div:nth-child(2) > div.panel-body > div:nth-child(9) > div:nth-child(2) > div
          document.querySelector('#w1-tab10 > div > div > div.panel-body > div > div > div > div.panel-body > div:nth-child('+$child+') > div:nth-child(2) > div').style.display = "block";
          // alert(cantidad);
        }else {
          document.querySelector('#w1-tab10 > div > div > div.panel-body > div > div > div > div.panel-body > div:nth-child('+$child+') > div:nth-child(2) > div').style.display = "none";
        }
      }
    }
  }
}
</script>
