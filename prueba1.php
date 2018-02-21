<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
    <link rel="stylesheet" type="text/css" href="lib/jquery.imgareaselect-0.9.10/css/imgareaselect-default.css" />
    <script type="text/javascript" src="lib/jquery.imgareaselect-0.9.10/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="lib/jquery.imgareaselect-0.9.10/scripts/jquery.imgareaselect.pack.js"></script>
    <script type="text/javascript" src="js/previewFormField.js"></script>
    <link rel="stylesheet" type="text/css" href="css/previewFormField.css" />

    </head>
    <body>
        <form>
            <table>
                <tr>
                    <td valign="top">
                        <table>
                            <tr>
                                <td>Fecha</td>
                                <td><input type="text" id="campo1" name="campo1" onFocus="campo(19,58,132,73,0);" /></td>
                            </tr>
                            <tr>
                                <td>Ciudad</td>
                                <td><input type="text" id="campo2" name="campo2" onFocus="campo(129,57,280,72,0);"/></td>
                            </tr>
                            <tr>
                                <td>Codigo Oficina</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(283,59,356,74,0);" /></td>
                            </tr>
                            <tr>
                                <td>Nombre Oficina</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(19,71,191,87,0);"/></td>
                            </tr>
                            <tr>
                                <td>Codigo Sucursal</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(190,72,274,85,0);"/></td>
                            </tr>
                            <tr>
                                <td>Codigo Estrategia</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(274,71,353,87,0);"/></td>
                            </tr>
                            <tr>
                                <td>Codigo Convenio</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(19,84,128,96,0);"/></td>
                            </tr>
                            <tr>
                                <td>Nombre Convenio</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(128,84,355,98,0);"/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><br></td>
                            </tr>
                            <tr>
                                <td>Salario Basico</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(81,22,252,37,1);"/></td>
                            </tr>
                            <tr>
                                <td>Arriendo</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(302,26,494,36,1);"/></td>
                            </tr>
                            <tr>
                                <td>Descripcion otros ingresos</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(22,59,177,77,1);"/></td>
                            </tr>
                            <tr>
                                <td colspan="2"><br></td>
                            </tr>
                            <tr>
                                <td>Salario Basico</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(81,22,252,37,2);"/></td>
                            </tr>
                            <tr>
                                <td>Arriendo</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(302,26,494,36,2);"/></td>
                            </tr>
                            <tr>
                                <td>Descripcion otros ingresos</td>
                                <td><input type="text" id="campo3" name="campo3" onFocus="campo(22,59,177,77,2);"/></td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <div id="divImg">
                            <img src="test.jpg" height="800px" width="" class="img" id="imgpreview"name="imgDocumento">
                        </div>
                        
                        <div id="caja_flotante">
                            <div id="cont_caja_flotante">
                                <div id="previewZoom" style="width: 100px; height: 100px; overflow: hidden;">
                                    <img src="page1.png" id="imgZoom" style="width: 10px; height: 10px;" />
                                </div>
                            </div>
                         </div>
                        
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value0="prueba"></td>
                </tr>    
            </table>
        </form>
    </body>
</html>
