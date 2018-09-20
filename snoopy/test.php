<?php
include "Snoopy.class.php";
$vector=array(
    0=>'https://ferreteria.es/sartenes/conjuntos-de-sartenes.html',
    1=>'https://ferreteria.es/sartenes/sartenes-de-induccion.html',
    2=>'https://ferreteria.es/sartenes/sartenes-para-gas-y-vitro.html',
    3=>'https://ferreteria.es/sartenes/sartenes-de-titanio.html',
    4=>'https://ferreteria.es/sartenes/sartenes-de-hierro.html',
    5=>'https://ferreteria.es/sartenes/woks-y-creperas.html',
    6=>'https://ferreteria.es/sartenes/asadores.html',
    7=>'https://ferreteria.es/sartenes/grills.html',
    8=>'https://ferreteria.es/sartenes/planchas-y-asadores-bandeja.html',
    9=>'https://ferreteria.es/sartenes/protectores-de-sartenes.html',
    10=>'https://ferreteria.es/sartenes/tapas-para-sartenes.html',
    11=>'https://ferreteria.es/ollas-y-cacerolas/ollas.html',
    12=>'https://ferreteria.es/ollas-y-cacerolas/ollas-a-presion-expres.html',
    13=>'https://ferreteria.es/ollas-y-cacerolas/cacerolas.html',
    14=>'https://ferreteria.es/ollas-y-cacerolas/cocottes.html',
    15=>'https://ferreteria.es/ollas-y-cacerolas/cazuelas-de-barro.html',
    16=>'https://ferreteria.es/ollas-y-cacerolas/baterias-de-cocina.html',
    17=>'https://ferreteria.es/ollas-y-cacerolas/potes-hervidores.html',
    18=>'https://ferreteria.es/ollas-y-cacerolas/cazos.html',
    19=>'https://ferreteria.es/ollas-y-cacerolas/tapas-sueltas-y-recambios-para-olla.html',
    20=>'https://ferreteria.es/cubos-de-basura-y-reciclaje/cubos-de-basura-y-reciclaje.html',
    21=>'https://ferreteria.es/cubos-de-basura-y-reciclaje/cubos-de-reciclaje-domestico.html',
    22=>'https://ferreteria.es/cubos-de-basura-y-reciclaje/cubos-de-basura-para-el-bano.html',
    23=>'https://ferreteria.es/cubos-de-basura-y-reciclaje/contenedores-reciclaje-industrial.html',
    24=>'https://ferreteria.es/cubos-de-basura-y-reciclaje/barrenos-y-cubos-de-goma.html',
    25=>'https://ferreteria.es/cubos-de-basura-y-reciclaje/bolsas-de-basura.html',
    26=>'https://ferreteria.es/cuchillos-y-tijeras-de-cocina/cuchillos-de-ceramica.html',
    27=>'https://ferreteria.es/cuchillos-y-tijeras-de-cocina/cuchillo-de-colores-acero-inox.html',
    28=>'https://ferreteria.es/cuchillos-y-tijeras-de-cocina/juego-de-cuchillos.html',
    29=>'https://ferreteria.es/cuchillos-y-tijeras-de-cocina/tijeras-de-cocina.html',
    30=>'https://ferreteria.es/carros-verduleros/verduleros-de-3-cestas.html',
    31=>'https://ferreteria.es/carros-verduleros/verduleros-de-4-cestas.html',
    32=>'https://ferreteria.es/carros-verduleros/verduleros-dobles.html',
    33=>'https://ferreteria.es/carros-verduleros/carros-de-cocina.html',
    34=>'https://ferreteria.es/menaje-de-cocina/escurreplatos.html',
    35=>'https://ferreteria.es/menaje-de-cocina/jamoneros.html',
    36=>'https://ferreteria.es/menaje-de-cocina/portarrollos-de-cocina.html',
    37=>'https://ferreteria.es/menaje-de-cocina/recipientes-horno.html',
    38=>'https://ferreteria.es/menaje-de-cocina/vajillas-completas.html',
    39=>'https://ferreteria.es/menaje-de-cocina/fondues-y-raclettes.html',
    40=>'https://ferreteria.es/menaje-de-cocina/paelleros-de-gas.html',
    41=>'https://ferreteria.es/menaje-de-cocina/grifos-cocina.html',
    42=>'https://ferreteria.es/muebles-de-jardin/conjuntos-muebles-jardin.html',
    43=>'https://ferreteria.es/muebles-de-jardin/mesas-de-jardin-plegables.html',
    44=>'https://ferreteria.es/muebles-de-jardin/mesas-de-metal-aluminio-jardin.html',
    45=>'https://ferreteria.es/muebles-de-jardin/mesas-de-ratan-resina-jardin.html',
    46=>'https://ferreteria.es/muebles-de-jardin/mesas-de-madera-para-jardin.html',
    47=>'https://ferreteria.es/muebles-de-jardin/hamacas-y-tumbonas.html',
    48=>'https://ferreteria.es/muebles-de-jardin/carpas-y-pergolas.html',
    49=>'https://ferreteria.es/muebles-de-jardin/balancines-bancos-de-jardin.html',
    50=>'https://ferreteria.es/muebles-de-jardin/baules-y-arcones.html',
    51=>'https://ferreteria.es/muebles-de-jardin/parasoles-y-pies.html',
    52=>'https://ferreteria.es/muebles-de-jardin/fundas-protectoras.html',
    53=>'https://ferreteria.es/muebles-de-jardin/casetas-madera.html',
    54=>'https://ferreteria.es/muebles-de-jardin/casetas-metalicas-y-cobertizos.html',
    55=>'https://ferreteria.es/muebles-de-jardin/casetas-de-resina.html',
    56=>'https://ferreteria.es/muebles-de-jardin/casetas-para-animales.html',
    57=>'https://ferreteria.es/muebles-de-jardin/mobiliario-y-juegos-infantiles.html',
    58=>'https://ferreteria.es/armarios-de-resina/armarios-escoberos-resina.html',
    59=>'https://ferreteria.es/armarios-de-resina/armarios-de-resina-medianos.html',
    60=>'https://ferreteria.es/armarios-de-resina/armarios-de-resina-altos.html',
    61=>'https://ferreteria.es/armarios-de-resina/armarios-de-resina-con-persiana.html',
    62=>'https://ferreteria.es/armarios-de-resina/taquillas-de-resina.html',
    63=>'https://ferreteria.es/armarios-de-resina/estanterias-de-resina.html',
    64=>'https://ferreteria.es/barbacoas/barbacoas-de-gas.html',
    65=>'https://ferreteria.es/barbacoas/barbacoas-de-carbon.html',
    66=>'https://ferreteria.es/barbacoas/parrillas-de-barbacoa.html',
    67=>'https://ferreteria.es/barbacoas/cajones-de-barbacoa.html',
    68=>'https://ferreteria.es/barbacoas/barbacoas-electricas.html',
    69=>'https://ferreteria.es/barbacoas/accesorios-barbacoa.html',
    70=>'https://ferreteria.es/piscinas/piscinas-desmontables.html',
    71=>'https://ferreteria.es/piscinas/duchas-de-jardin.html',
    72=>'https://ferreteria.es/piscinas/bombas-depuradoras-y-filtros.html',
    73=>'https://ferreteria.es/piscinas/accesorios-de-piscinas.html',
    74=>'https://ferreteria.es/piscinas/productos-quimicos-y-consumibles.html',
    75=>'https://ferreteria.es/piscinas/limpiafondos-piscinas.html',
    76=>'https://ferreteria.es/piscinas/cobertores-piscina.html',
    77=>'https://ferreteria.es/piscinas/pintura-de-piscinas.html',
    78=>'https://ferreteria.es/camping-y-playa/hornillos-y-camping-gas.html',
    79=>'https://ferreteria.es/camping-y-playa/linternas.html',
    80=>'https://ferreteria.es/camping-y-playa/cestas-de-picnic.html',
    81=>'https://ferreteria.es/camping-y-playa/neveras-bolsas-termicas.html',
    82=>'https://ferreteria.es/camping-y-playa/termos-y-cantimploras.html',
    83=>'https://ferreteria.es/camping-y-playa/colchones-de-camping.html',
    84=>'https://ferreteria.es/camping-y-playa/sombrillas.html',
    85=>'https://ferreteria.es/camping-y-playa/sillas-y-sillones-de-playa.html',
    86=>'https://ferreteria.es/camping-y-playa/accesorios-de-deporte.html',
    87=>'https://ferreteria.es/camping-y-playa/flotadores-y-colchonetas.html',
    88=>'https://ferreteria.es/jardin/huertos-urbanos.html',
    89=>'https://ferreteria.es/jardin/animales.html',
    90=>'https://ferreteria.es/jardin/mallas-sombreadoras-y-ocultacion.html',
    91=>'https://ferreteria.es/jardin/toldos.html',
    92=>'https://ferreteria.es/jardin/canizo.html',
    93=>'https://ferreteria.es/jardin/cubos-de-jardin.html',
    94=>'https://ferreteria.es/carros-de-compra-y-bolsas/carros-de-compra-play.html',
    95=>'https://ferreteria.es/carros-de-compra-y-bolsas/carros-de-compra-rolser.html',
    96=>'https://ferreteria.es/carros-de-compra-y-bolsas/carros-de-compra-ambit.html',
    97=>'https://ferreteria.es/carros-de-compra-y-bolsas/bolsas-para-la-compra.html',
    98=>'https://ferreteria.es/productos-de-bano/dosificador-de-jabon.html',
    99=>'https://ferreteria.es/productos-de-bano/vasos-portacepillos.html',
    100=>'https://ferreteria.es/productos-de-bano/portarollos-de-bano.html',
    101=>'https://ferreteria.es/productos-de-bano/cestos-de-bano.html',
    102=>'https://ferreteria.es/productos-de-bano/escobilleros.html',
    103=>'https://ferreteria.es/productos-de-bano/toalleros.html',
    104=>'https://ferreteria.es/productos-de-bano/taburetes-de-bano.html',
    105=>'https://ferreteria.es/productos-de-bano/seguridad-3a-edad.html',
    106=>'https://ferreteria.es/productos-de-bano/alfombras-de-bano-y-antideslizantes.html',
    107=>'https://ferreteria.es/productos-de-bano/espejos.html',
    108=>'https://ferreteria.es/productos-de-bano/basculas-de-bano.html',
    109=>'https://ferreteria.es/productos-de-bano/muebles-bano.html',
    110=>'https://ferreteria.es/productos-de-bano/mampara-de-ducha.html',
    111=>'https://ferreteria.es/productos-de-bano/sanitarios-y-tapas.html',
    112=>'https://ferreteria.es/productos-de-bano/tarimas.html',
    113=>'https://ferreteria.es/ventilacion/ventiladores.html',
    114=>'https://ferreteria.es/ventilacion/ventiladores-industriales.html',
    115=>'https://ferreteria.es/ventilacion/ventiladores-de-torre.html',
    116=>'https://ferreteria.es/ventilacion/ventiladores-de-techo-y-pared.html',
    117=>'https://ferreteria.es/ventilacion/aire-acondicionado-y-complementos.html',
    118=>'https://ferreteria.es/ventilacion/nebulizadores.html',
    119=>'https://ferreteria.es/muebles/cajoneras.html',
    120=>'https://ferreteria.es/muebles/botelleros.html',
    121=>'https://ferreteria.es/muebles/zapateros.html',
    122=>'https://ferreteria.es/muebles/armarios-y-taquillas.html',
    123=>'https://ferreteria.es/muebles/muebles-infantiles.html',
    124=>'https://ferreteria.es/muebles/muebles-para-cocinas.html',
    125=>'https://ferreteria.es/muebles/estantes.html',
    126=>'https://ferreteria.es/muebles/sillas.html',
    127=>'https://ferreteria.es/muebles/resortes-para-muebles.html',
    128=>'https://ferreteria.es/tendederos/tendederos-sisi.html',
    129=>'https://ferreteria.es/tendederos/tendederos-de-pared.html',
    130=>'https://ferreteria.es/tendederos/tendederos-de-pared-extensibles.html',
    131=>'https://ferreteria.es/tendederos/tendederos-de-banera.html',
    132=>'https://ferreteria.es/tendederos/accesorios-para-tender.html',
    133=>'https://ferreteria.es/hogar/mirillas-digitales.html',
    134=>'https://ferreteria.es/hogar/bolsas-fundas-protectoras.html',
    135=>'https://ferreteria.es/hogar/cestas-pongotodo-para-la-ropa.html',
    136=>'https://ferreteria.es/hogar/cuadros-marcos-y-vinilos.html',
    137=>'https://ferreteria.es/hogar/perchas-y-percheros.html',
    138=>'https://ferreteria.es/hogar/relojes-y-despertadores.html',
    139=>'https://ferreteria.es/hogar/gadgets.html',
    140=>'https://ferreteria.es/herramienta-manual/niveles-de-construccion.html',
    141=>'https://ferreteria.es/herramienta-manual/remachadora-y-remaches.html',
    142=>'https://ferreteria.es/herramienta-manual/grapadora-clavadora-y-consumible.html',
    143=>'https://ferreteria.es/herramienta-manual/estuches-de-herramientas.html',
    144=>'https://ferreteria.es/herramienta-manual/plomada.html',
    145=>'https://ferreteria.es/herramienta-manual/herramientas-y-utiles-de-engrase.html',
    146=>'https://ferreteria.es/herramienta-manual/desbarbadoras.html',
    147=>'https://ferreteria.es/herramienta-manual/barras-industriales.html',
    148=>'https://ferreteria.es/herramientas-electricas/cepillos.html',
    149=>'https://ferreteria.es/herramientas-electricas/cortadoras-perfiladoras-tronzadoras.html',
    150=>'https://ferreteria.es/herramientas-electricas/pistolas-de-aire-caliente-y-decapadoras.html',
    151=>'https://ferreteria.es/herramientas-electricas/fresadoras.html',
    152=>'https://ferreteria.es/herramientas-electricas/lijadoras.html',
    153=>'https://ferreteria.es/herramientas-electricas/martillos-electricos.html',
    154=>'https://ferreteria.es/herramientas-electricas/miniherramientas-y-accesorios.html',
    155=>'https://ferreteria.es/herramientas-electricas/sierras-circulares.html',
    156=>'https://ferreteria.es/herramientas-electricas/sierras-de-calar.html',
    157=>'https://ferreteria.es/herramientas-electricas/sierras-sable.html',
    158=>'https://ferreteria.es/herramientas-electricas/medidores-y-niveles-laser-ultrasonido.html',
    159=>'https://ferreteria.es/herramientas-electricas/pistolas-de-silicona-y-encoladoras.html',
    160=>'https://ferreteria.es/maquinaria/aspiradores-industriales.html',
    161=>'https://ferreteria.es/maquinaria/compresores-y-accesorios.html',
    162=>'https://ferreteria.es/maquinaria/generadores-y-accesorios.html',
    163=>'https://ferreteria.es/maquinaria/motobombas.html',
    164=>'https://ferreteria.es/maquinaria/soportes-anti-vibratorios.html',
    165=>'https://ferreteria.es/escaleras-de-aluminio/escaleras-de-aluminio-domesticas.html',
    166=>'https://ferreteria.es/escaleras-de-aluminio/escaleras-de-aluminio-profesional.html',
    167=>'https://ferreteria.es/escaleras-de-aluminio/escaleras-telescopicas.html',
    168=>'https://ferreteria.es/escaleras-de-aluminio/escaleras-de-fibra-de-vidrio.html',
    169=>'https://ferreteria.es/escaleras-de-aluminio/escaleras-de-madera.html',
    170=>'https://ferreteria.es/escaleras-de-aluminio/taburetes-accesorios-escaleras.html',
    171=>'https://ferreteria.es/escaleras-de-aluminio/recambios-escaleras.html',
    172=>'https://ferreteria.es/escaleras-de-aluminio/andamios.html',
    173=>'https://ferreteria.es/escaleras-de-aluminio/rampas.html',
    174=>'https://ferreteria.es/seguridad-infantil/protectores-cantoneras.html',
    175=>'https://ferreteria.es/seguridad-infantil/vallas-de-seguridad-infantil.html',
    176=>'https://ferreteria.es/seguridad-infantil/protectores-para-enchufes.html',
    177=>'https://ferreteria.es/seguridad-infantil/cierres-de-seguridad-y-salvadedos.html',
    178=>'https://ferreteria.es/pinturas-y-esmaltes/pintura-de-interior.html',
    179=>'https://ferreteria.es/pinturas-y-esmaltes/pistolas-para-pintar.html',
    180=>'https://ferreteria.es/pinturas-y-esmaltes/aislamientos-impermeabilizacion.html',
    181=>'https://ferreteria.es/pinturas-y-esmaltes/decapantes-y-quitapinturas.html',
    182=>'https://ferreteria.es/pinturas-y-esmaltes/disolvente-aguarras.html',
    183=>'https://ferreteria.es/pinturas-y-esmaltes/pintura-aerosol-esprais.html',
    184=>'https://ferreteria.es/vestuario-y-calzado-laboral/impermeables.html',
    185=>'https://ferreteria.es/vestuario-y-calzado-laboral/polos-camisas-y-camisetas.html',
    186=>'https://ferreteria.es/vestuario-y-calzado-laboral/camisetas-termicas.html',
    187=>'https://ferreteria.es/vestuario-y-calzado-laboral/pantalones-termicos.html',
    188=>'https://ferreteria.es/vestuario-y-calzado-laboral/fajas-tobilleras.html',
    189=>'https://ferreteria.es/vestuario-y-calzado-laboral/arneses.html',
    190=>'https://ferreteria.es/vestuario-y-calzado-laboral/calcetines.html',
    191=>'https://ferreteria.es/vestuario-y-calzado-laboral/plantillas.html',
    192=>'https://ferreteria.es/vestuario-y-calzado-laboral/monos-buzos.html',
    193=>'https://ferreteria.es/vestuario-y-calzado-laboral/vestuario-sanitario.html',
    194=>'https://ferreteria.es/vestuario-y-calzado-laboral/gorras.html',
    195=>'https://ferreteria.es/cerraduras/cerraduras-azbe.html',
    196=>'https://ferreteria.es/cerraduras/cerraduras-mcm.html',
    197=>'https://ferreteria.es/cerraduras/cerraduras-ezkurra.html',
    198=>'https://ferreteria.es/cerraduras/cerraduras-jis.html',
    199=>'https://ferreteria.es/cerraduras/cilindros-abus.html',
    200=>'https://ferreteria.es/cerraduras/cerraduras-ucem.html',
    201=>'https://ferreteria.es/cerraduras/cerraduras-urko.html',
    202=>'https://ferreteria.es/cerraduras/cerraduras-lar.html',
    203=>'https://ferreteria.es/cerraduras/picaportes.html',
    204=>'https://ferreteria.es/buzones/buzones-y-accesorios.html',
    205=>'https://ferreteria.es/buzones/armarios-archivar-llaves.html',
    206=>'https://ferreteria.es/buzones/botiquines.html',
    207=>'https://ferreteria.es/buzones/panel-anuncios.html',
    208=>'https://ferreteria.es/ferreteria-industrial/abrazaderas.html',
    209=>'https://ferreteria.es/ferreteria-industrial/consumibles-soldadura.html',
    210=>'https://ferreteria.es/ferreteria-industrial/remaches.html',
    211=>'https://ferreteria.es/ferreteria-industrial/cable-de-acero.html',
    212=>'https://ferreteria.es/ferreteria-industrial/mangueras.html',
    213=>'https://ferreteria.es/ferreteria-y-bricolaje/topes-puerta.html',
    214=>'https://ferreteria.es/ferreteria-y-bricolaje/cierrapuertas-retenedores-y-accesorios.html',
    215=>'https://ferreteria.es/ferreteria-y-bricolaje/elementos-de-fijacion-cables.html',
    216=>'https://ferreteria.es/ferreteria-y-bricolaje/ceniceros-de-exterior.html',
    217=>'https://ferreteria.es/ferreteria-y-bricolaje/papeleras-urbanas.html',
    218=>'https://ferreteria.es/ferreteria-y-bricolaje/bancos-de-trabajo-armarios-y-accesorios.html',
    219=>'https://ferreteria.es/ferreteria-y-bricolaje/mudanzas-embalajes.html',
    220=>'https://ferreteria.es/ferreteria-y-bricolaje/carretillas-y-transpaletas.html'
);

$snoopy = new Snoopy;
$snoopy->user = "joe";
$snoopy->pass = "bloe";
foreach ($vector as $url){
    if($snoopy->fetchlinks("http://www.ferreteria.net"))
    {

        echo "response code: ".$snoopy->response_code."<br>\n";
        while(list($key,$val) = each($snoopy->headers))
            echo $key.": ".$val."<br>\n";
        echo "<p>\n";
        echo "<PRE>".var_dump($snoopy->results)."</PRE>\n";
        echo "<PRE>".htmlspecialchars($snoopy->results)."</PRE>\n";

    }
    else
        echo "error fetching document: ".$snoopy->error."\n";
}
?>