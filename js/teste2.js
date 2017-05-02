window.onload = function() {
          function iniciaAjax() {
          var objetoAjax = false;
            if (window.XMLHttpRequest) {
              objetoAjax = new XMLHttpRequest();
              alert("O objeto AJAX para este navegador é: XMLHttpRequest");
          } else if (window.ActiveXObject) {
            try {
            objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
              alert("O objeto AJAX para este navegador é: Msxml2.XMLHTTP");
            } catch(e) {
              try {
              objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
              alert("O objeto AJAX para este navegador é: Microsoft.XMLHTTP");
            } catch(ex) {
            objetoAjax = false;
               }
            }
          }
        return objetoAjax;
          }
            var disparador = document.getElementById("btn");
              disparador.onclick = function () {
                return iniciaAjax();
              };
        }