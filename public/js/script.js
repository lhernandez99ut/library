/*!
    * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
   (function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

$(function(){
    var actualizarHora = function(){
      var fecha = new Date(),
          hora = fecha.getHours(),
          minutos = fecha.getMinutes(),
          segundos = fecha.getSeconds(),
          diaSemana = fecha.getDay(),
          dia = fecha.getDate(),
          mes = fecha.getMonth(),
          anio = fecha.getFullYear(),
          ampm;
      
      var $pHoras = $("#horas"),
          $pSegundos = $("#segundos"),
          $pMinutos = $("#minutos"),
          $pAMPM = $("#ampm"),
          $pDiaSemana = $("#diaSemana"),
          $pDia = $("#dia"),
          $pMes = $("#mes"),
          $pAnio = $("#anio");
      var semana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
      var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
      
      $pDiaSemana.text(semana[diaSemana]);
      $pDia.text(dia);
      $pMes.text(meses[mes]);
      $pAnio.text(anio);
      if(hora>=12){
        hora = hora - 12;
        ampm = "PM";
      }else{
        ampm = "AM";
      }
      if(hora == 0){
        hora = 12;
      }
      if(hora<10){$pHoras.text("0"+hora)}else{$pHoras.text(hora)};
      if(minutos<10){$pMinutos.text("0"+minutos)}else{$pMinutos.text(minutos)};
      if(segundos<10){$pSegundos.text("0"+segundos)}else{$pSegundos.text(segundos)};
      $pAMPM.text(ampm);
      
    };
    
    
    actualizarHora();
    var intervalo = setInterval(actualizarHora,1000);
  });