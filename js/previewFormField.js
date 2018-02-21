
    $(document).ready(function () {
        $('.img').imgAreaSelect({ handles: true ,   onSelectChange: preview });
    });
    
    //en la variable paginas se indican las imagenes en orden
    var paginas = ["test.jpg","test.jpg","test.jpg","test.jpg"];
    //variable para indicar el factor de amento del zoom
    var factorAumento = 2.5;
    function campo(valX1,valY1,valX2,valY2,numPagina){
        // --- numPagina indica que pagina debe mostrar
        if($('.img').attr("src")!==paginas[numPagina] && numPagina != null){
            //alert("Cambio la imagen" + $('.img').attr("src") + " - " + paginas[numPagina]);
            $('.img').attr("src", paginas[numPagina]); 
            $('#imgZoom').attr("src", paginas[numPagina]);
        }
        $('.img').imgAreaSelect({ handles: false ,  x1: valX1, y1: valY1, x2: valX2, y2: valY2  });
        previewCoordenadas(valX1,valY1,valX2,valY2);
    }
         
    
    function preview(img, selection) {
        
        var widthImagen = $("#imgpreview").width();
        var heightImagen = $("#imgpreview").height();
        
        //jQuery("#caja_flotante").css({display : 'block' });        
        
        //redimensiona el area para hacer zoom en la imagen al doble en atributo ancho
        jQuery("#caja_flotante").css({width : selection.width * factorAumento});
        jQuery("#previewZoom").css({width : selection.width * factorAumento});
        
        //redimensiona el area para hacer zoom en la imagen al doble en atributo alto
        jQuery("#caja_flotante").css({height : selection.height * factorAumento});
        jQuery("#previewZoom").css({height : selection.height * factorAumento});
        
        //redimensiona la imagen y la ubica para mostrar solamente el area indicada
        $('#previewZoom > img').css({
            width: Math.round(widthImagen * factorAumento) + 'px',
            height: Math.round(heightImagen * factorAumento) + 'px',
            marginLeft: '-' + Math.round(factorAumento * selection.x1) + 'px',
            marginTop: '-' + Math.round(factorAumento * selection.y1) + 'px'
        });
        
        //esta funcion permite ubicar el div del zoom arriba o abajo del campo seleccionado segun la posicion en Y
        var posicionDiv = $('#divImg').position();
        
        if(selection.y1 < 200){
            // si es menor que 200 pixeles la posicion del campo este se ubica abajo de este
            $('#caja_flotante').css({                    
                left:  posicionDiv.left + selection.x1,
                top: posicionDiv.top + selection.y1 + selection.height + 10
            });
        }else{
            // si la posicion es 200 o mayor el div del zoom se ubica arriba del campo
            $('#caja_flotante').css({
                left:  posicionDiv.left + selection.x1,
                top: posicionDiv.top + selection.y1 - (selection.height * factorAumento ) - 20
            });    
        }

    }
 
 function previewCoordenadas(x1, y1, x2, y2) {
        //esta funcion se usa para poder invocar al div del zoom 
        //cuando se realiza clic en el campo -> esto debido a que 
        //la funcion preview solo funciona para cuando se selecciona
        //manualmente en la imagen
        
        var widthImagen = $("#imgpreview").width();
        var heightImagen = $("#imgpreview").height();
        var selectionWidth = x2 - x1;
        var selectionHeight = y2 - y1;
        
        //redimensiona el area para hacer zoom en la imagen al doble en atributo ancho
        
        jQuery("#caja_flotante").css({width : selectionWidth * factorAumento});
        jQuery("#previewZoom").css({width : selectionWidth * factorAumento});
        
        //redimensiona el area para hacer zoom en la imagen al doble en atributo alto
        jQuery("#caja_flotante").css({height : selectionHeight * factorAumento});
        jQuery("#previewZoom").css({height : selectionHeight * factorAumento});
        
        //redimensiona la imagen y la ubica para mostrar solamente el area indicada
        $('#previewZoom > img').css({
            width: Math.round(widthImagen * factorAumento) + 'px',
            height: Math.round(heightImagen * factorAumento) + 'px',
            marginLeft: '-' + Math.round(factorAumento * x1) + 'px',
            marginTop: '-' + Math.round(factorAumento * y1) + 'px'
        });
        
        var posicionDiv = $('#divImg').position();
       
        if(y1 < 200){
            $('#caja_flotante').css({                    
                left:  posicionDiv.left + x1,
                top: posicionDiv.top + y1 + selectionHeight + 10
            });
        }else{
            $('#caja_flotante').css({                    
                left:  posicionDiv.left + x1,
                top: posicionDiv.top + y1 - (selectionHeight * factorAumento ) - 20
            });    
        }

    }
 