<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
  <link rel="stylesheet" type="text/css" href="lib/jquery.imgareaselect-0.9.10/css/imgareaselect-default.css" />
  <script type="text/javascript" src="lib/jquery.imgareaselect-0.9.10/scripts/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery.imgareaselect-0.9.10/scripts/jquery.imgareaselect.pack.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function () {
        $('.img').imgAreaSelect({
            onSelectEnd: function (img, selection) {
                $('input[name="x1"]').val(selection.x1);
                $('input[name="y1"]').val(selection.y1);
                $('input[name="x2"]').val(selection.x2);
                $('input[name="y2"]').val(selection.y2);            
                var pageNumber = 0;
                if($('#pagina:checked').val()!=undefined){
                    pageNumber = Math.round($('#pagina:checked').val()-1);
                }

                $('#coordenadas').attr({value : selection.x1 + "," + selection.y1 + "," + selection.x2 + "," + selection.y2 + "," + pageNumber});
                $('#coordenadas').select();
                
                $('#lblCoordenadas').css({top: selection.y1 });
            }
        });
    });
    
            
  </script>
<style>
    #lblCoordenadas{
        position: absolute;
        top:10;
        left: 10px;
        border: 2px solid #FF0000;
        background-color: #F2F2F2;
        
    }
</style>
<?
    $pagina = "page1.png";
?>
    </head>
    <body>
        <form>
            <table>
                <tr>
                    <td valign="top">
                        <div id="lblCoordenadas">
                            coordenadas
                            <input type="text" size="30" id="coordenadas">
                        </div>
                    </td>
                    <td>
                        <?
                        //$pagina = "page1.png";
                        if($_REQUEST["pagina"]==1){
                            $pagina = "pagina1.png";
                        }else if($_REQUEST["pagina"]==2){
                            $pagina = "pagina2.png";
                        }else if($_REQUEST["pagina"]==3){
                            $pagina = "pagina3.png";
                        }else if($_REQUEST["pagina"]==4){
                            $pagina = "pagina4.png";
                        }
                        ?>
                        
                        <img src="test.jpg" height="800px" width="" class="img" id="imgDocumento" name="imgDocumento">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="x1" value="" />
                        <input type="hidden" name="y1" value="" />
                        <input type="hidden" name="x2" value="" />
                        <input type="hidden" name="y2" value="" />
                        <input type="hidden" name="paginaActual" id="paginaActual" value="$_REQUEST["pagina"]" />
                        pagina 1 <input type="radio" name="pagina" id="pagina" value="1" <? if($_REQUEST["pagina"]==1) echo "checked"; ?>>
                        pagina 2<input type="radio" name="pagina" id="pagina" value="2" <? if($_REQUEST["pagina"]==2) echo "checked"; ?>>
                        pagina 3<input type="radio" name="pagina" id="pagina" value="3" <? if($_REQUEST["pagina"]==3) echo "checked"; ?>>
                        pagina 4<input type="radio" name="pagina" id="pagina" value="4" <? if($_REQUEST["pagina"]==4) echo "checked"; ?>>
                        <input type="submit" name="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if(!empty($_REQUEST["x1"])){
            echo "x1: ".$_REQUEST["x1"].", y1: ".$_REQUEST["y1"].", x2: ".$_REQUEST["x2"].", y2: ".$_REQUEST["y2"];
            echo "<br>";
            echo $_REQUEST["x1"].",".$_REQUEST["y1"].",".$_REQUEST["x2"].",".$_REQUEST["y2"];
        }
        ?>
    </body>
</html>
