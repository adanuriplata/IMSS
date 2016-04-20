//inicio jquery de desayuno 
         $(document).ready(function(){
            var hctot=$("#hctot").val();
            var prottot=$("#prottot").val();
            var liptot=$("#liptot").val();

            $("#rcleche").keyup(function(){
                var rcleche=$("#rcleche").val();
                var hcleche=rcleche*12;
                var proleche=rcleche*9;
                var lileche=rcleche*5;
                var kcleche=(hcleche*4)+(proleche*4)+(lileche*9);

                $("#hcleche").val(hcleche);
                $("#proleche").val(proleche);
                $("#lileche").val(lileche);
                $("#kcleche").val(kcleche);
            });

            $("#rccarne").keyup(function(){
                var rccarne=$("#rccarne").val();
                var hccarne=rccarne*0;
                var procarne=rccarne*7;
                var licarne=rccarne*4;
                var kccarne=(hccarne*4)+(procarne*4)+(licarne*9);
                $("#hccarne").val(hccarne);
                $("#procarne").val(procarne);
                $("#licarne").val(licarne);
                $("#kccarne").val(kccarne);
            });

            $("#rcfruta").keyup(function(){
                var rcfruta=$("#rcfruta").val();
                var hcfruta=rcfruta*15;
                var profruta=rcfruta*0;
                var lifruta=rcfruta*0;
                var kcfruta=(hcfruta*4)+(profruta*4)+(lifruta*9);
                $("#hcfruta").val(hcfruta);
                $("#profruta").val(profruta);
                $("#lifruta").val(lifruta);
                $("#kcfruta").val(kcfruta);
            });

            $("#rcvegetales").keyup(function(){
                var rcvegetales=$("#rcvegetales").val();
                var hcvegetales=rcvegetales*4;
                var provegetales=rcvegetales*2;
                var livegetales=rcvegetales*0;
                var kcvegetales=(hcvegetales*4)+(provegetales*4)+(livegetales*9);
                $("#hcvegetales").val(hcvegetales);
                $("#provegetales").val(provegetales);
                $("#livegetales").val(livegetales);
                $("#kcvegetales").val(kcvegetales);
            });

            $("#rccereal").keyup(function(){
                var rccereal=$("#rccereal").val();
                var hccereal=rccereal*15;
                var procereal=rccereal*2;
                var licereal=rccereal*0;
                var kccereal=(hccereal*4)+(procereal*4)+(licereal*9);
                $("#hccereal").val(hccereal);
                $("#procereal").val(procereal);
                $("#licereal").val(licereal);
                $("#kccereal").val(kccereal);
            });

            $("#rcleguminosas").keyup(function(){
                var rcleguminosas=$("#rcleguminosas").val();
                var hcleguminosas=rcleguminosas*20;
                var proleguminosas=rcleguminosas*8;
                var lileguminosas=rcleguminosas*1;
                var kcleguminosas=(hcleguminosas*4)+(proleguminosas*4)+(lileguminosas*9);
                $("#hcleguminosas").val(hcleguminosas);
                $("#proleguminosas").val(proleguminosas);
                $("#lileguminosas").val(lileguminosas);
                $("#kcleguminosas").val(kcleguminosas);
            });

            $("#rcgrasas").keyup(function(){
                var rcgrasas=$("#rcgrasas").val();
                var hcgrasas=rcgrasas*0;
                var prograsas=rcgrasas*0;
                var ligrasas=rcgrasas*5;
                var kcgrasas=(hcgrasas*4)+(prograsas*4)+(ligrasas*9);
                $("#hcgrasas").val(hcgrasas);
                $("#prograsas").val(prograsas);
                $("#ligrasas").val(ligrasas);
                $("#kcgrasas").val(kcgrasas);
            });

            $("#rcazucar").keyup(function(){
                var rcazucar=$("#rcazucar").val();
                var hcazucar=rcazucar*10;
                var proazucar=rcazucar*0;
                var liazucar=rcazucar*0;
                var kcazucar=(hcazucar*4)+(proazucar*4)+(liazucar*9);
                $("#hcazucar").val(hcazucar);
                $("#proazucar").val(proazucar);
                $("#liazucar").val(liazucar);
                $("#kcazucar").val(kcazucar);
            
            });

            //TOTALES BOTON CLICK
            $("#botondesayuno").click(function(){
                //h.c.
                 var h1=$("#hccereal").val();
                var h2=$("#hcleguminosas").val();
                var h3=$("#hcleche").val();
                var h4=$("#hccarne").val();
                var h5=$("#hcfruta").val();
                var h6=$("#hcvegetales").val();
                var h7=$("#hcgrasas").val();
                var h8=$("#hcazucar").val();
             var totaldesayunoh = parseInt(h1)  + parseInt(h2) + parseInt(h3) + parseInt(h4) + parseInt(h5) + parseInt(h6) + parseInt(h7) + parseInt(h8);
                $("#totaldesayunoh").html(totaldesayunoh);
               

                //Proteinas
               

                 var p1=$("#procereal").val();
                var p2=$("#proleguminosas").val();
                var p3=$("#proleche").val();
                var p4=$("#procarne").val();
                var p5=$("#profruta").val();
                var p6=$("#provegetales").val();
                var p7=$("#prograsas").val();
                var p8=$("#proazucar").val();
             var totaldesayunop = parseInt(p1)  + parseInt(p2) + parseInt(p3) + parseInt(p4) + parseInt(p5) + parseInt(p6) + parseInt(p7) + parseInt(p8);
                $("#totaldesayunop").html(totaldesayunop);

                //Lipidos

                var l1=$("#licereal").val();
                var l2=$("#lileguminosas").val();
                var l3=$("#lileche").val();
                var l4=$("#licarne").val();
                var l5=$("#lifruta").val();
                var l6=$("#livegetales").val();
                var l7=$("#ligrasas").val();
                var l8=$("#liazucar").val();
             var totaldesayunol = parseInt(l1)  + parseInt(l2) + parseInt(l3) + parseInt(l4) + parseInt(l5) + parseInt(l6) + parseInt(l7) + parseInt(l8);
                $("#totaldesayunol").html(totaldesayunol);


//kcalorias
                var t1=$("#kccereal").val();
                var t2=$("#kcleguminosas").val();
                var t3=$("#kcleche").val();
                var t4=$("#kccarne").val();
                var t5=$("#kcfruta").val();
                var t6=$("#kcvegetales").val();
                var t7=$("#kcgrasas").val();
                var t8=$("#kcazucar").val();
             var totaldesayunok = parseInt(t1)  + parseInt(t2) + parseInt(t3) + parseInt(t4) + parseInt(t5) + parseInt(t6) + parseInt(t7) + parseInt(t8);
                $("#totaldesayunok").html(totaldesayunok);
});

            



        });
// temrina calculos desayuno

//inicia calculos comida
$(document).ready(function(){
            var hctot=$("#hctot").val();
            var prottot=$("#prottot").val();
            var liptot=$("#liptot").val();

            $("#rcleche2").keyup(function(){
                var rcleche2=$("#rcleche2").val();
                var hcleche2=rcleche2*12;
                var proleche2=rcleche2*9;
                var lileche2=rcleche2*5;
                var kcleche2=(hcleche2*4)+(proleche2*4)+(lileche2*9);
                $("#hcleche2").html(hcleche2);
                $("#proleche2").html(proleche2);
                $("#lileche2").html(lileche2);
                $("#kcleche2").html(kcleche2);
            });

            $("#rccarne2").keyup(function(){
                var rccarne2=$("#rccarne2").val();
                var hccarne2=rccarne2*0;
                var procarne2=rccarne2*7;
                var licarne2=rccarne2*4;
                var kccarne2=(hccarne2*4)+(procarne2*4)+(licarne2*9);
                $("#hccarne2").html(hccarne2);
                $("#procarne2").html(procarne2);
                $("#licarne2").html(licarne2);
                $("#kccarne2").html(kccarne2);
            });

            $("#rcfruta2").keyup(function(){
                var rcfruta2=$("#rcfruta2").val();
                var hcfruta2=rcfruta2*15;
                var profruta2=rcfruta2*0;
                var lifruta2=rcfruta2*0;
                var kcfruta2=(hcfruta2*4)+(profruta2*4)+(lifruta2*9);
                $("#hcfruta2").html(hcfruta2);
                $("#profruta2").html(profruta2);
                $("#lifruta2").html(lifruta2);
                $("#kcfruta2").html(kcfruta2);
            });

            $("#rcvegetales2").keyup(function(){
                var rcvegetales2=$("#rcvegetales2").val();
                var hcvegetales2=rcvegetales2*4;
                var provegetales2=rcvegetales2*2;
                var livegetales2=rcvegetales2*0;
                var kcvegetales2=(hcvegetales2*4)+(provegetales2*4)+(livegetales2*9);
                $("#hcvegetales2").html(hcvegetales2);
                $("#provegetales2").html(provegetales2);
                $("#livegetales2").html(livegetales2);
                $("#kcvegetales2").html(kcvegetales2);
            });

            $("#rccereal2").keyup(function(){
                var rccereal2=$("#rccereal2").val();
                var hccereal2=rccereal2*15;
                var procereal2=rccereal2*2;
                var licereal2=rccereal2*0;
                var kccereal2=(hccereal2*4)+(procereal2*4)+(licereal2*9);
                $("#hccereal2").html(hccereal2);
                $("#procereal2").html(procereal2);
                $("#licereal2").html(licereal2);
                $("#kccereal2").html(kccereal2);
            });

            $("#rcleguminosas2").keyup(function(){
                var rcleguminosas2=$("#rcleguminosas2").val();
                var hcleguminosas2=rcleguminosas2*20;
                var proleguminosas2=rcleguminosas2*8;
                var lileguminosas2=rcleguminosas2*1;
                var kcleguminosas2=(hcleguminosas2*4)+(proleguminosas2*4)+(lileguminosas2*9);
                $("#hcleguminosas2").html(hcleguminosas2);
                $("#proleguminosas2").html(proleguminosas2);
                $("#lileguminosas2").html(lileguminosas2);
                $("#kcleguminosas2").html(kcleguminosas2);
            });

            $("#rcgrasas2").keyup(function(){
                var rcgrasas2=$("#rcgrasas2").val();
                var hcgrasas2=rcgrasas2*0;
                var prograsas2=rcgrasas2*0;
                var ligrasas2=rcgrasas2*5;
                var kcgrasas2=(hcgrasas2*4)+(prograsas2*4)+(ligrasas2*9);
                $("#hcgrasas2").html(hcgrasas2);
                $("#prograsas2").html(prograsas2);
                $("#ligrasas2").html(ligrasas2);
                $("#kcgrasas2").html(kcgrasas2);
            });

            $("#rcazucar2").keyup(function(){
                var rcazucar2=$("#rcazucar2").val();
                var hcazucar2=rcazucar2*10;
                var proazucar2=rcazucar2*0;
                var liazucar2=rcazucar2*0;
                var kcazucar2=(hcazucar2*4)+(proazucar2*4)+(liazucar2*9);
                $("#hcazucar2").html(hcazucar2);
                $("#proazucar2").html(proazucar2);
                $("#liazucar2").html(liazucar2);
                $("#kcazucar2").html(kcazucar2);
            });

        });

        // termina calculos comida
//inicia calculos cena
$(document).ready(function(){
            var hctot=$("#hctot").val();
            var prottot=$("#prottot").val();
            var liptot=$("#liptot").val();

            $("#rcleche3").keyup(function(){
                var rcleche3=$("#rcleche3").val();
                var hcleche3=rcleche3*12;
                var proleche3=rcleche3*9;
                var lileche3=rcleche3*5;
                var kcleche3=(hcleche3*4)+(proleche3*4)+(lileche3*9);
            
                
                $("#hcleche3").html(hcleche3);
                $("#proleche3").html(proleche3);
                $("#lileche3").html(lileche3);
                $("#kcleche3").html(kcleche3);
                $("#kctot").html(kctot);
            });

            $("#rccarne3").keyup(function(){
                var rccarne3=$("#rccarne3").val();
                var hccarne3=rccarne3*0;
                var procarne3=rccarne3*7;
                var licarne3=rccarne3*4;
                var kccarne3=(hccarne3*4)+(procarne3*4)+(licarne3*9);
                $("#hccarne3").html(hccarne3);
                $("#procarne3").html(procarne3);
                $("#licarne3").html(licarne3);
                $("#kccarne3").html(kccarne3);
            });

            $("#rcfruta3").keyup(function(){
                var rcfruta3=$("#rcfruta3").val();
                var hcfruta3=rcfruta3*15;
                var profruta3=rcfruta3*0;
                var lifruta3=rcfruta3*0;
                var kcfruta3=(hcfruta3*4)+(profruta3*4)+(lifruta3*9);
                $("#hcfruta3").html(hcfruta3);
                $("#profruta3").html(profruta3);
                $("#lifruta3").html(lifruta3);
                $("#kcfruta3").html(kcfruta3);
            });

            $("#rcvegetales3").keyup(function(){
                var rcvegetales3=$("#rcvegetales3").val();
                var hcvegetales3=rcvegetales3*4;
                var provegetales3=rcvegetales3*2;
                var livegetales3=rcvegetales3*0;
                var kcvegetales3=(hcvegetales3*4)+(provegetales3*4)+(livegetales3*9);
                $("#hcvegetales3").html(hcvegetales3);
                $("#provegetales3").html(provegetales3);
                $("#livegetales3").html(livegetales3);
                $("#kcvegetales3").html(kcvegetales3);
            });

            $("#rccereal3").keyup(function(){
                var rccereal3=$("#rccereal3").val();
                var hccereal3=rccereal3*15;
                var procereal3=rccereal3*2;
                var licereal3=rccereal3*0;
                var kccereal3=(hccereal3*4)+(procereal3*4)+(licereal3*9);
                $("#hccereal3").html(hccereal3);
                $("#procereal3").html(procereal3);
                $("#licereal3").html(licereal3);
                $("#kccereal3").html(kccereal3);
            });

            $("#rcleguminosas3").keyup(function(){
                var rcleguminosas3=$("#rcleguminosas3").val();
                var hcleguminosas3=rcleguminosas3*20;
                var proleguminosas3=rcleguminosas3*8;
                var lileguminosas3=rcleguminosas3*1;
                var kcleguminosas3=(hcleguminosas3*4)+(proleguminosas3*4)+(lileguminosas3*9);
                $("#hcleguminosas3").html(hcleguminosas3);
                $("#proleguminosas3").html(proleguminosas3);
                $("#lileguminosas3").html(lileguminosas3);
                $("#kcleguminosas3").html(kcleguminosas3);
            });

            $("#rcgrasas3").keyup(function(){
                var rcgrasas3=$("#rcgrasas3").val();
                var hcgrasas3=rcgrasas3*0;
                var prograsas3=rcgrasas3*0;
                var ligrasas3=rcgrasas3*5;
                var kcgrasas3=(hcgrasas3*4)+(prograsas3*4)+(ligrasas3*9);
                $("#hcgrasas3").html(hcgrasas3);
                $("#prograsas3").html(prograsas3);
                $("#ligrasas3").html(ligrasas3);
                $("#kcgrasas3").html(kcgrasas3);
            });

            $("#rcazucar3").keyup(function(){
                var rcazucar3=$("#rcazucar3").val();
                var hcazucar3=rcazucar3*10;
                var proazucar3=rcazucar3*0;
                var liazucar3=rcazucar3*0;
                var kcazucar3=(hcazucar3*4)+(proazucar3*4)+(liazucar3*9);
                $("#hcazucar3").html(hcazucar3);
                $("#proazucar3").html(proazucar3);
                $("#liazucar3").html(liazucar3);
                $("#kcazucar3").html(kcazucar3);
            });

        });
        //temrina calculos cena