$(document).ready(function(){
            $('.ui.accordion').accordion();

            $(".ui.dropdown").dropdown();

            $("#pesoAc").keyup(function(){
                var peso=$("#pesoAc").val();
                var estatura=$("#estatura").keyup().val();
                var pesoTeorico=21.5*Math.pow(estatura,2);
                var porPesoT=(peso/pesoTeorico)*100;

                var msgTeor="";
                if(pesoTeorico <=89.9 )
                {
                    msgTeor="Bajo Peso";
                }
                if (pesoTeorico >= 90 && pesoTeorico <120  ){
                    msgTeor="Peso Aceptable";
                }
                if(pesoTeorico >120){
                    msgTeor="Exeso o sobrepeso";
                }
                $("#porPesoT").html(porPesoT.toFixed(2)+" "+"%"+" "+msgTeor);
                var pesoHab=$("#pesoHab").keyup().val();
                var porPesoHab=(peso/pesoHab)*100;
                var msgPesoHab="";
                if(porPesoHab <=54.9 ){
                    msgPesoHab="Peso Minimo de sobrevivencia";
                }
                if(porPesoHab == 75 ){
                    msgPesoHab="Desnutricion Severa 3er Grado";
                }
                if (porPesoHab <= 84.9){
                    msgPesoHab="Desnutricion moderada 2do grado";
                }
                if(porPesoHab == 85){
                    msgPesoHab="Desnutricion 1er grado";
                }
                if(porPesoHab > 90.1){
                    msgPesoHab="Sin problemas de desnutricion";
                }


                $("#porPesoHab").html(porPesoHab.toFixed(2)+" "+"%  "+msgPesoHab);

                var ppci=(peso/pesoTeorico)*100;
                //IF(D19<70,"SUGIERE DEPLECION SEVERA",IF(D19=70,"SUGIERE DEPLECION MODERADA",IF(D19<80,"SUGIERE DEPLECION MODERADA",
                    //IF(D19=80,"SUGIERE DEPLECION LEVE",IF(D19<=90,"SUGIERE DEPLECION LEVE",IF(D19>=91,"SIN DEPLECION"))))))
                var msgPPCI="";
                if(ppci < 70){
                    msgPPCI="Sugiere depleción severa";
                }
                if(ppci > 70 && ppci <80 ){
                    msgPPCI="Sugiere depleción moderada";
                }
                if(ppci >= 80 && ppci <=90){
                    msgPPCI="Sugiere depleción leve";
                }
                if(ppci >= 91){
                    msgPPCI="Sin depleción";
                }
                $("#ppci").html(ppci.toFixed(2)+" "+"%  "+msgPPCI);
            });

            $("#estatura").keyup(function(){
                var estatura=$("#estatura").val();
                var pesoTeorico=21.5*Math.pow(estatura,2);
                var rangoInf=18.5*Math.pow(estatura,2);
                var rangoSup=24.9*Math.pow(estatura,2);

                $("#PesoTeorico").html(pesoTeorico.toFixed(2)+" "+"Kg's");
                $("#RangoInferior").html(rangoInf.toFixed(2)+" "+"Kg's");
                $("#RangoSuperior").html(rangoSup.toFixed(2)+" "+"Kg's");
                $("#pesoAc").keyup(function(){
                    var pesoAc=$("#pesoAc").val();
                    var imc=pesoAc/Math.pow(estatura,2);
                    $("#imc").html(imc.toFixed(2)+" "+"Kg's/m");
                });
            });
            $("#cintura").keyup(function(){
                var cintura=$("#cintura").val();
                $("#cadera").keyup(function(){
                    var cadera=$("#cadera").val();
                    var icc=cintura/cadera;
                    var msgICC="";

                    if(icc >= 0.8){
                        msgICC="Mujer con distribución de grasa androide";
                    }
                    if(icc >= 0.79){
                        msgICC="Mujer con distribución de grasa ginecoide";
                    }

                    $("#icc").html(icc+" "+msgICC);
                });
            });

            $("#abdomen").keyup(function () {
                var abdomen=$("#abdomen").val();
                var msgAbdomen="";
                if(abdomen >= 88){
                    msgAbdomen="Medición de riesgo sustancialmente incrementado";
                }
                if(abdomen <= 87.9){
                    msgAbdomen="Medición de riesgo incrementado";
                }
                if(abdomen >=80){
                    msgAbdomen="Medición de riesgo incrementado";
                }
                $("#perimetro").html(msgAbdomen);
            });
    //=IF(E25>=10.9,"COMPLEXION PEQUEÑA",IF(E25>=9.9,"COMPLEXION MEDIANA",IF(E25<=9.8,"COMPLEXION GRANDE")))
            $("#cirMun").keyup(function () {
                var cirMun=$("#cirMun").val();
                var msgMun="";
                if(cirMun >= 10.9){
                    msgMun="Pequeña";
                }
                if(cirMun >=9.9){
                    msgMun="Mediana";
                }
                if(cirMun <= 9.8){
                    msgMun="Grande";
                }
                $("#complexion").html(msgMun);
            });
            $('.checkbox').checkbox();

            $('.message .close').on('click', function() {
                $(this).closest('.message').transition('fade');
            });

            /*
            * funciones para calcular rango de los estudios
            * */

            var mensajes=[];
            mensajes="<li>Hemoglobina Aumentada: Quemaduras graves, policitemia, insuficiencia cardiaca, talasemia, enfermedad  pulmonar obstructiva cronica, deshidratacion.</li>";
            mensajes="<li>Hemoglobina Baja: Anemia, hipertiroidismo,, cirrosis, varias enfermedades sistemicas (leucemia, lupus, Enfermedad  de Hodgkin. </li>";
            mensajes="<li>Hematrocitos Aumentados: Deshidratacion, policitemia, shock</li>";
            mensajes="<li>Hematrocitos Disminuidos: Anemia  (<30 ) , Perdida sanguinea, hemolisis, leucemia, hipertiroidismo, cirrosis, hiperhidratacion.</li>";
            mensajes="<li>Leucocitos Disminuidos: (LEUCOPENIA), en algunas  infecciones virales, quimiotrapia, radiacion, depresion de la medula osea.</li>";
            mensajes="<li>Leucocitos Aumentados: (Leucocitosis), en leucemia, infeccion bacteriana, hemorragia, traumatismo o lesion tisular, cancer</li>";
            mensajes="<li>Glucosa Aumentada (Ayuno): (Puede considerarse normal hasta 180mg/dL durante la infusion de nutricion parenteral) Diabetes, Sindrome de Cushing, deficiencia de tiamina, acromegalia, gigantismo, infecciones, graves, pancreatitis, enfermedad hepatica cronica, inactividad fisica prolongada, deficiencia de potasio. Consecuencia del uso de algunos farmacos, ( p.ej., corticoesteroides, dosis elevadas de antihipertensivos, ciclosporina)</li>";
            mensajes="<li>Glucosa Disminuida (Ayuno): Sobredosis de insulina, en carcinoma de pancreas, sepsis bacteriana, hipotiroidismo, En fermedad de Addison, enfermedad hepatica,glucogenosis, abuso de alcohol, privacion alimentaria prolongada, ejercicio extenuante, pancreatitis, farmacos hipoglucemiantes orales, intrerupcion abrupta de nutricion parenteral (principalmente) o enteral, sobretodo en pacientes que reciben hipoglucemientes orales o insulin</li>";
            mensajes="<li>Urea Aumentada: Refleja degradacion proteica endogena (catabolismo)  o exogena (ingesta). Puede indicar el estado de hidratacion del paciente. En  insuficiencia renal, shok, deshidratacion, fiebre, infeccion, diabetes, gota cronica,, ingesta/catabolismo proteico excesivos, infarto de miocardio. </li>";
            mensajes="<li>Urea Disminuida: En insuficiencia hepatica, desnutricion, baja ingesta proteica, malabsorcion, hiperhidratacion,(exceso de liquidos intravenosos), gestacion, emesis,diarrea, anabolismo proteico, sindrome de secresion inadecuada de hormona antidiuretica.</li>";
            mensajes="<li>Acido Urico Aumentado: Producto del metabolismo de las purinas,  En gota, insuficiencia renal</li>";
            mensajes="<li>Creatinina Aumentado: Es un marcador util y valido del stado nutricional calorico-proteico de pacientes en dialisis. Refleja la suma de la ingesta de alimentos ricos en creatinay en creatinina (p.e carnes) y la produccion endogena de creatinina (musculo esqueletico), menos la excresion urinaria, eliminacion dialitica y degradacion endogena de creatinina. Niveles bajos se asocian con mayor riesgo de mortalidad. Se encuentra aumentada en insuficiencia renal  aguda y cronica, daño muscular, hipertroidismo con el aumento de masa muscular, privacion alimentaria prolongada, acidosis diabetica, ingesta excesiva de carne, gigantismo, acromegalia.</li>";
            mensajes="<li>Creatinina Disminuida: En la gestacion y con la disminucion de la masa muscular.</li>";
            mensajes="<li>Proteinas Totales Aumentado: En deshidratacion, enfermedades con incremento de las globulinas</li>";
            mensajes="<li>Proteinas Totales Disminuido: En defiiencia proteica, enfermedad hepatica grave, desnutricion, diarrea, quemaduras graves o infeccion, edema, sindrome nefrotico</li>";
            mensajes="<li>Colesterol Aumentado: Es un marcador valido y clinicamente util para evaluar el estado nutricional calorico- oroteico de pacientes en hemodialisis. Niveles bajos en decliacion son pedictores de riesgo aumentado de mortalidad. Los niveles bajos tambien pueden asociarse con la presencia de estados comorbidos.    Se encuntra aumentado en hiperlipidemia, ictericia obstructiva, diabetes, hipotiroidismo, obesidad, dieta rica en grasas, Factor de riesgo grave de enfermedad cardiovascular</li>";
            mensajes="<li>Colesterol Disminuido: Se encuentra disminuido en malabsorcion, desnutricion, necrosis hepatocelular, estrés, anemia, sepsis, neoplasia maligna del higado, hipertiroidismo, quemaduras extensas, enfrmedad pulmonar obstructiva cronica, artritis reumatoide, anemia megaloblastica, talasemia</li>";
            mensajes="<li>Trigliceridos Aumentado: Importante en la evaluacion del metabolismo de los lipidos. La administracion intravenosa de emulsiones lipidicas, debe ser cautelosa en los pacientes con niveles elevados.  Se  encuentra elevado en insuficiencia renal, shock, deshidratacion, fiebre, infeccion, diabetes, gota cronica, ingesta/atabolismo proteico excesivos, infarto de miocardio</li>";
            $("#hemoglobina").keyup(function(){
                $("#resultadoHem").text(calcularRangoEstudios(12,16,$("#hemoglobina").val()));
                if(calcularRangoEstudios(12,16,$("#hemoglobina").val()) == "alto"){
                    var algo="<div class='ui error message'><i class='close icon'></i><div class='header'>Precaucion se han detectado niveles bajos o altos en algunos estudios de laboratorio</div>"
                            algo+="<ul class='list'>";
                            for (var i=0;i<mensajes.length;i++){
                               algo+= mensajes[i];
                            }
                            algo+="</ul></div>";
                    $("#mensaje").html(algo);
                }
            });
            $("#hematrocitos").keyup(function(){
                $("#resultadoHemt").text(calcularRangoEstudios(36,47,$("#hematrocitos").val()));
            });

            $("#leucocitos").keyup(function(){
                $("#resultadoLeu").text(calcularRangoEstudios(4000,11200,$("#leucocitos").val()));
            });
            $("#glucosa").keyup(function(){
                $("#resultadoGlu").text(calcularRangoEstudios(65,110,$("#glucosa").val()));
            });
            $("#urea").keyup(function(){
                $("#resultadoUre").text(calcularRangoEstudios(14,44,$("#urea").val()));
            });
            $("#urico").keyup(function(){
                $("#resultadoUri").text(calcularRangoEstudios(3.4,7,$("#urico").val()));
            });
            $("#creatinina").keyup(function(){
                $("#resultadoCrea").text(calcularRangoEstudios(0.5,1.6,$("#creatinina").val()));
            });
            $("#proteinas").keyup(function(){
                $("#resultadoProt").text(calcularRangoEstudios(6.4,8.3,$("#proteinas").val()));
            });
            $("#albumina").keyup(function(){
                $("#resultadoAlb").text(calcularRangoEstudios(3.4,5,$("#albumina").val()));
            });
            $("#colesterol").keyup(function(){
                $("#resultadoCol").text(calcularRangoEstudios(140,200,$("#colesterol").val()));
            });
            $("#trigliceridos").keyup(function(){
                $("#resultadoTri").text(calcularRangoEstudios(40,160,$("#trigliceridos").val()));
            });
            $("#reporte").click(function(event){

                //event.preventDefault();
                var nombre=$("#nombre").val();
                var materno=$("#materno").val();
                var paterno=$("#paterno").val();
                var nss=$("#nss").val();
                var anio=$("#anio").val();
                var edad=2016-anio;
                var adultos=$("#adultos").val();
                var menores=$("#menores").val();
                var escolaridad=$("#escolaridad").val();
                var ocupacion=$("#ocupacion").val();
                var token=$("#token").val();
                var ejercicio=$("#ejercicio").val();

                $.ajax({
                    url:"http://localhost:8000/reporte/pdf",
                    headers:{'X-CSRF-TOKEN':token},
                    type:"post",
                    data:{
                            'nombreCompleto':nombre+" "+paterno+" "+materno,
                            'nss':nss,
                            'edad':edad,
                            'escolaridad':escolaridad,
                            'ocupacion':ocupacion,
                            'menores':menores,
                            'adultos':adultos,
                            'ejercicio':ejercicio
                    },
                    success:function(respuesta){
                        //alert(respuesta);
                    }
                });
            });
});
function calcularRangoEstudios(inf,sup,valor){
    if (valor < inf){
        return "bajo";
    }
    if (valor >= inf && valor <=sup){
        return "normal";
    }
    if (valor > sup){
        return "alto";
    }
}

