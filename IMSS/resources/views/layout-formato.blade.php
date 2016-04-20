<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<style>
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p,
    blockquote, pre, a, abbr, acronym, address, big,
    cite, code, del, dfn, em, font, img,
    ins, kbd, q, s, samp, small, strike,
    strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    center, u, b, i {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-weight: normal;
        font-style: normal;
        font-size: 100%;
        font-family: inherit;
        vertical-align: baseline
    }

    strong>p{
        display: inline;
    }
    #dos>strong{
        margin-left: 180px;
    }
    #dos>strong:nth-child(1){
        margin-left: 0px;
    }
    #tres>strong{
        margin-left: 140px;
    }
    #tres>strong:nth-child(1){
        margin-left: 0px;
    }
    #cuatro>strong{
        margin-left: 110px;
    }
    #cuatro>strong:nth-child(1){
        margin-left: 0px;
    }
    td{
        width: 100px;
    }
    #ims{
        width: 100px;
        height:100px;
    }
    #nutricion{

    }
    .carta{
        margin:auto;
        padding: auto;
        /*margin-top:10px;
        margin-left: 5px;*/
        width:70%;
        height: 3300px;
        border:1px solid black;
    }

    #primertabla tr td{
        border:1px solid black;
    }
    th{
        border:1px solid black;
    }
    #principal{
        width: 100%;
    }
    #contenedor1{
        width: 300px;
    }
    #contenedor2{
        width: 300px;
        float: right;
    }
</style>
<div class="carta">
    <div class="top-header">
        <img src="{{url('images/logo-imss.png')}}" alt="" class="" id="ims">
        <h3 class="ui center aligned header">
            Instituto Mexicano Del Seguro Social <br>
            Departamento de Nutrición Y Dietetica HGR 36 <br>
        </h3>
        <img src="{{url('images/logo_nutricion.png')}}" alt="" id="nutricion">

    </div>
    <div class="">
        <div>
            <strong>NOMBRE:<p></p></strong>
            <strong style="margin-left: 30%;">NSS: <p></p></strong>
        </div>
        <div id="dos">
            <strong>FECHA:</strong>
            <strong>EDAD:</strong>
            <strong>SEXO:</strong>
            <strong>PESO ACTUAL: <p></p>Kg's</strong>
        </div>
        <div id="tres">
            <strong>ESTATURA: <p></p> M</strong>
            <strong>PESO IDEAL: <p></p> Kg's</strong>
            <strong>IMC: <p></p> %</strong>
            <strong>ICC: <p></p> %</strong>
        </div>
        <div id="cuatro">
            <strong>PESO CORREGIDO <p></p></strong>
            <strong>DIAGNOSTICO <p></p></strong>
            <strong>Tx:  DIETETICO <p></p> kCALS</strong>
        </div>
        <table class="" style="margin-top: 15px; " id="primertabla">
            <thead>
            <tr>
                <th></th>
                <th>RAC</th>
                <th>Desayuno</th>
                <th>Col. Mat.</th>
                <th>Comida</th>
                <th>Col. Vesp.</th>
                <th>Cena</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Leche</td>
                <td><p id="rcleche"></p></td>
                <td><p id="deleche"></p></td>
                <td><p id="cmleche"></p></td>
                <td><p id="coleche"></p></td>
                <td><p id="cvleche"></p></td>
                <td><p id="celeche"></p></td>
            </tr>
            <tr>
                <td>Carne</td>
                <td><p id="rccarne"></p></td>
                <td><p id="decarne"></p></td>
                <td><p id="cmcarne"></p></td>
                <td><p id="cocarne"></p></td>
                <td><p id="cvcarne"></p></td>
                <td><p id="cecarne"></p></td>
            </tr>
            <tr>
                <td>Fruta</td>
                <td><p id="rcfruta"></p></td>
                <td><p id="defruta"></p></td>
                <td><p id="cmfruta"></p></td>
                <td><p id="cofruta"></p></td>
                <td><p id="cvfruta"></p></td>
                <td><p id="cefruta"></p></td>
            </tr>
            <tr>
                <td>Vegetales</td>
                <td><p id="rcvegetales"></p></td>
                <td><p id="devegetales"></p></td>
                <td><p id="cmvegetales"></p></td>
                <td><p id="covegetales"></p></td>
                <td><p id="cvvegetales"></p></td>
                <td><p id="cevegetales"></p></td>
            </tr>
            <tr>
                <td>Cer. y tub.</td>
                <td><p id="rcceral"></p></td>
                <td><p id="decereal"></p></td>
                <td><p id="cmcereal"></p></td>
                <td><p id="cocereal"></p></td>
                <td><p id="cvcereal"></p></td>
                <td><p id="cecereal"></p></td>
            </tr>
            <tr>
                <td>Leguminosas</td>
                <td><p id="rcleguminosas"></p></td>
                <td><p id="deleguminosas"></p></td>
                <td><p id="cmleguminosas"></p></td>
                <td><p id="coleguminosas"></p></td>
                <td><p id="cvleguminosas"></p></td>
                <td><p id="celeguminosas"></p></td>
            </tr>
            <tr>
                <td>Grasas</td>
                <td><p id="rcgrasa"></p></td>
                <td><p id="degrasas"></p></td>
                <td><p id="cmgrasas"></p></td>
                <td><p id="cograsas"></p></td>
                <td><p id="cvgrasas"></p></td>
                <td><p id="cegrasas"></p></td>
            </tr>
            <tr>
                <td>Azucar</td>
                <td><p id="rcazucar"></p></td>
                <td><p id="deazucar"></p></td>
                <td><p id="cmazucar"></p></td>
                <td><p id="coazucar"></p></td>
                <td><p id="cvazucar"></p></td>
                <td><p id="ceazucar"></p></td>
            </tr>
            </tbody>
        </table>
        <div id="principal">
            <div id="contenedor1">
                <h3>Grupo de Leche</h3>
                <table class="" >
                    <tbody>
                    <tr>
                        <td>Leche descremada o light</td>
                        <td>
                            <p></p>
                                    Taza
                        </td>
                    </tr>
                    <tr>
                        <td>Yogurt natural o light</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Queso: Hebra, panela, requesón</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h3>Grupo de Carnes</h3>
                <table class="" >
                    <tbody>
                    <tr>
                        <td>Clara de huevo</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Atun en agua</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pollo sin piel</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Pescado fresco</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Res magra</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Queso panela</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Queso cottage</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <h3>Grupo de Frutas</h3>
                <table class="" >
                    <tbody>
                    <tr>
                        <td>Capulines</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td>Ciruela</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td>Chabacanos</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>Chicozapote </td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>Durazno</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>Fresas</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>Guayaba </td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>Higo fresco</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>Jícama</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>Kiwi</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>Sandia</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>betabel </td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td>toronja</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td>haba verde</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>lechuga </td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>apio</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>berro</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>berenjena</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>huazontle</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <h3>Grupo de Grasas</h3>
                <h4>Por cada ración de grasa puede consumir  5 gramos o una cucharadita cafetera de: <p> Aceite de maíz, girasol, algodón, cártamo, soya, margarina.</p></h4>
                <table class="" >

                    <tbody>
                    <tr>
                        <td>Aguacate</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nueces</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Avellanas</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Almendras</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div id="contenedor2">
                <h3>Grupo de Vegetales</h3>
                <table class="ui small celled definition table" >
                    <tbody>
                    <tr>
                        <td>acelgas</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>col</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr>
                    <tr>
                        <td>Chayote</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Chile Poblano</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>espinaca cocida</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>espinaca cruda</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>jitomate </td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>pimiento</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>zanahoria</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>calabacita cruda</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>calabaza cocida</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>betabel </td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>chicharo</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>hongos </td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>haba verde</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>lechuga </td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>apio</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>berro</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>berenjena</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr><tr>
                        <td>huazontle</td>
                        <td><div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div></td>
                    </tr>
                    </tbody>
                </table>

                <h3>Grupo de Cereales</h3>
                <table class="ui small celled definition table" >
                    <tbody>
                    <tr>
                        <td>Bolillo</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pan tostado integral</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tortilla de maíz</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Arroz con verduras</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Sopa de pasta</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Avena cocida</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Cereal integral</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Amaranto</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pan integral</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <h3>Grupo de Leguminosas</h3>
                <table class="ui small celled definition table" >
                    <tbody>
                    <tr>
                        <td>Frijol</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Haba</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Lenteja</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Garbanzos</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Alberjones</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Soya</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr><tr>
                        <td>Soya  hidratada</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>soya germinada</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pan integral</td>
                        <td>
                            <div class="ui right labeled transparent fluid input">
                                <input type="text">
                                <div class="ui basic label">
                                    Taza
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>





            <h3>Recomendaciones</h3>
            <ul>
                <li>*Respete las cantidades de alimentación que se indique en su dieta.</li>
                <li>*Tome mínimo 1.5 litros de agua al día.</li>
                <li>*Coma la fruta y la verdura preferentemente cocida.
                </li>
                <li>*No comer más cantidades de frutas de las indicadas.</li>
                <li>*Si nunca ha realizado ejercicio inicie con 10 minutos de caminata en superficies planas , con calzado comodo y ropa adecuada y aumente progresivamente el tiempo de ejercicio paulatinamente.</li>
                <li>*ANTES DE REALIZAR CUALQUIER ACTIVIDAD FISICA O EJERCICIO CONSULTE A SU MEDICO.</li>
                <li>*Asar, hervir, al vapor o al horno sus alimentos y evitar freír, capear o empanizar.</li>
            </ul>
</div>
</body>
</html>