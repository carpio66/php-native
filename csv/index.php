<?php
/*
 * Importación csv
 * Prestashop
 * Clientes, Productos, Categorias
 */

// Caracteristicas
/*
    'Tipo de Vino',
    'Bodega',
    'Regiones',
    'Variedad de Uva',
    'Enólogo',
    'Bodeguero',
    'Tipo de botella',
    'Capacidad (cl)',
    'Servicio',
    'Embotellado',
    'Consumo',
    'Acidez total (g/l)',
    'Acidez volátil (g/l)',
    'Azúcar (g/l)',
    'PH',
    'Graduación (% vol.)',
    'Tipo de barrica',
    'Permanencia en Barrica',
    'Curva consumo',
    'Densidad',
    'Extracto seco'
*/
$output = fopen('products_import2.csv', 'w');
$vectorCategorias = array(
    array(
        'ID',
        'Active (0/1)',
        'Name *',
        'Parent category',
        'Root category (0/1)',
        'Description',
        'Meta title',
        'Meta keywords',
        'Meta description',
        'URL rewritten',
        'Image URL'
    ),
    array(
        '3',
        '1',
        'Rioja',
        '2',
        '0',
        'Rioja fue la primera Denominación de Origen Calificada de nuestro país. La D.O.Ca. Rioja está dividida en tres subzonas perfectamente delimitadas por sus diferentes condiciones geográficas y climatológicas: Rioja Alta, Rioja Alavesa y Rioja Baja. La primera concentra casi la mitad de la producción total y es idónea para la elaboración de vinos aptos para la crianza en madera, con buen cuerpo y acidez elevada. Rioja Baja, con un 30%, produce los tintos y rosados con mayor graduación y extracto de toda la D.O. Por su parte, Rioja Alavesa supone un 20% de la producción y es la cuna de algunos de los mejores vinos con crianza en madera de la región y de los tradicionales tintos de maceración carbónica.
La producción media actual de la D.O.Ca. Rioja se sitúa entre 280 y 300 millones de litros, de los que el 90% corresponde a vino tinto y el resto a blanco y rosado.',
        'vinos-rioja',
        'vinos-rioja',
        'vinos-rioja',
        'vinos-rioja',
        ' ',
    ),
    array(
        '4',
        '1',
        'Ribera del duero',
        '2',
        '0',
        'Aunque los orígenes vitivinícolas de la Ribera del Duero se remontan a la época de los romanos, no es hasta 1975 cuando un grupo de elaboradores locales, conscientes del enorme salto de calidad que habían dado en los últimos años, comenzó a plantearse seriamente la creación de una Denominación de Origen que amparara los vinos de la zona. Bodegas como Vega Sicilia, Hermanos Pérez Pascuas, Protos o Torremilanos fueron algunos de los principales impulsores de una iniciativa que se materializó en 1982 y marcó un antes y un después en la historia del vino español.
Hoy, la D. O. Ribera del Duero puede presumir de ser una de las Denominaciones de Origen vinícolas más importantes del mundo. Aunque sus vinos sólo se elaboran en cuatro provincias (Valladolid, Segovia, Burgos y Soria), no conocen fronteras gracias a la enorme fama que han adquirido en las últimas dos décadas. Continúan surgiendo nuevas bodegas que siguen la línea impuesta por las más veteranas, aquellas que han hecho que un vino de Ribera del Duero sea fácilmente reconocible gracias a su especial personalidad.
El tinto es el vino estrella de la denominación, elaborado fundamentalmente a partir de la uva tempranillo (tinto fino).',
        'ribera-del-duero',
        'ribera-del-duero',
        'ribera-del-duero',
        'ribera-del-duero',
        ' ',
    ),
    array(
        '5',
        '1',
        'Toro',
        '2',
        '0',
        'La D.O. Toro (aprobada en 1987) comprende 12 municipios de Zamora y 3 de Valladolid, que corresponde con la comarca del Bajo Duero. El río Duero cruza la región de este a oeste, y la D.O. queda ubicada al sur del río.
La D.O. Toro es famosa por la producción de vinos tintos a partir de la uva local tinta de Toro. También ampara la producción de rosados y blancos (minoritarios).',
        'toro',
        'toro',
        'toro',
        'toro',
        ' ',
    ),
    array(
        '6',
        '1',
        'Rias Baixas',
        '2',
        '0',
        'La D.O. Rías Baixas (1988) se ubica en la parte suroccidental de la provincia de Pontevedra, y engloba cinco subzonas: Val do Salnés, Condado do Tea, O Rosal, Soutomaior y Ribeira do Ulla. La Subzona Val do Salnés es la gran zona productora, con más del 50% de la superficie y el 70% de los viticultores.
La variedad que da fama universal a esta denominación de origen es la blanca albariño: la producción de albariño supone el 96% de la producción total. Tintos y espumosos son muy minoritarios.',
        'rias-baixas',
        'rias-baixas',
        'rias-baixas',
        'rias-baixas',
        ' ',
    ),
);


$vectorProductos = array();
$vectorEtiquetas = array(
    "ID",
    "Active",
    "Name",
    "Categories",
    "Price",
    "Tax",
    "Wholesale price",
    "OnSale",
    "Discount",
    "DiscountPercent",
    "DiscountFrom",
    "DiscountTo",
    "Reference",
    "SupplierReference",
    "Supplier",
    "Manufacturer",
    "Ean13",
    "Upc",
    "Ecotax",
    "Width",
    "Height",
    "Depth",
    "Weight",
    "Quantity",
    "MinimalQuantity",
    "Visibility",
    "AdditionalShippingCost",
    "Unity",
    "UnityPrice",
    "ShortDescription",
    "Description",
    "Tags",
    "Metatitle",
    "MetaKeywords",
    "MetaDescription",
    "UrlRewritten",
    "TextStock",
    "TextBackorder",
    "Avaiable",
    "ProductAvaiableDate",
    "ProductCreationDate",
    "ShowPrice",
    "ImageUrls",
    "DeleteExistingImages",
    "Feature",
    "AvaiableOnline",
    "Condition",
    "Customizable",
    "Uploadable",
    "TextFields",
    "OutStock",
    "IdNameShop",
    "AdvancedStockManagement",
    "DependsOnStock",
    "Warehouse"
);

$vectorValores = array(
    1,
    1,
    "Vino La rioja Bueno",
    "2,3",
    "62,55",
    "31",
    "62,55",
    "0",
    "0",
    "0",
    "0",
    "0",
    "30248",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "50",
    "1",
    "both",
    "1",
    "",
    "",
    "Descripcion peke",
    "Descripcion larga",
    "Marqués-de-Cáceres-Rosado-2015",
    "Marqués-de-Cáceres-Rosado-2015",
    "Marqués-de-Cáceres-Rosado-2015",
    "Marqués-de-Cáceres-Rosado-2015",
    "",
    "",
    "",
    "1",
    "",
    "",
    "1",
    "http://www.vinoseleccion.com/media/catalog/product/cache/1/image/220x445/9df78eab33525d08d6e5fb8d27136e95/m/a/marques-de-caceres-rosado-2015-001.jpg",
    "",
    "Tipo de Vino:Rosado Blanco,Bodega:Mi Bodega Ribera del Duero Blanco,Regiones:Andalucia Interior",
    1,
    "new",
    "0",
    "0",
    "0",
    "0",
    "0",
    "0",
    "0",
    "0"
);

array_push($vectorProductos,$vectorEtiquetas);
array_push($vectorProductos,$vectorValores);

/*
$vectorProductos = array(
    array(
        "ID",
        "Active",
        "Name",
        "Categories",
        "Price",
        "Tax",
        "Wholesale price",
        "OnSale",
        "Discount",
        "DiscountPercent",
        "DiscountFrom",
        "DiscountTo",
        "Reference",
        "SupplierReference",
        "Supplier",
        "Manufacturer",
        "Ean13",
        "Upc",
        "Ecotax",
        "Width",
        "Height",
        "Depth",
        "Weight",
        "Quantity",
        "MinimalQuantity",
        "Visibility",
        "AdditionalShippingCost",
        "Unity",
        "UnityPrice",
        "ShortDescription",
        "Description",
        "Tags",
        "Metatitle",
        "MetaKeywords",
        "MetaDescription",
        "UrlRewritten",
        "TextStock",
        "TextBackorder",
        "Avaiable",
        "ProductAvaiableDate",
        "ProductCreationDate",
        "ShowPrice",
        "ImageUrls",
        "DeleteExistingImages",
        "Feature",
        "AvaiableOnline",
        "Condition",
        "Customizable",
        "Uploadable",
        "TextFields",
        "OutStock",
        "IdNameShop",
        "AdvancedStockManagement",
        "DependsOnStock",
        "Warehouse"

    ),
    array(
        1,
        1,
        "Vino La rioja",
        "2,3",
        "62,55",
        "31",
        "62,55",
        "0",
        "0",
        "0",
        "0",
        "0",
        "30248",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "50",
        "1",
        "both",
        "1",
        "",
        "",
        "Descripcion peke",
        "Descripcion larga",
        "Marqués-de-Cáceres-Rosado-2015",
        "Marqués-de-Cáceres-Rosado-2015",
        "Marqués-de-Cáceres-Rosado-2015",
        "Marqués-de-Cáceres-Rosado-2015",
        "",
        "",
        "",
        "1",
        "",
        "",
        "1",
        "http://www.vinoseleccion.com/media/catalog/product/cache/1/image/220x445/9df78eab33525d08d6e5fb8d27136e95/m/a/marques-de-caceres-rosado-2015-001.jpg",
        "",
        "Tipo de Vino:Rosado Blanco,Bodega:Mi Bodega Ribera del Duero Blanco,Regiones:Andalucia Interior",
        1,
        "new",
        "0",
        "0",
        "0",
        "0",
        "0",
        "0",
        "0",
        "0"
    )
);
*/

$vectorClientes = array(
    array(
        'ID',
        'Active (0/1)',
        'Titles ID (Mr = 1, Ms = 2, else 0)',
        'Email *',
        'Password *',
        'Birthday (yyyy-mm-dd)',
        'Last Name *',
        'First Name *',
        'Newsletter (0/1)',
        'Opt-in (0/1)',
        'Groups (x,y,z...)',
        'Default group ID'
    ),
    array(
        1,
        1,
        1,
        "davidberruezo@ecommercebarcelona360.com",
        "Berruezin23",
        "1978-11-23",
        "Berruezo",
        "David",
        1,
        1,
        "Customer",
        "Customer"
    )
);

$vectorDirecciones = array(
    array(
        'id',
        'Alias*',
        'Active (0/1)',
        'Customer e-mail*',
        'Customer ID',
        'Manufacturer',
        'Supplier',
        'Company',
        'Lastname*',
        'Firstname*',
        'Address 1*',
        'Address 2',
        'Zipcode*',
        'City*',
        'Country*',
        'State',
        'Other',
        'Phone',
        'Mobile Phone',
        'VAT number',
        'DNI'
    ),
    array(
        1,
        "David Berruezo / Barcelona",
        1,
        "davidberruezo@ecommercebarcelona360.com",
        1,
        1,
        "",
        "eCommerce",
        "Berruezo",
        "David",
        "Vallirana 19",
        "Malgrat de Mar 1",
        "08006",
        "Barcelona",
        "España",
        "España",
        "",
        "(93)2176757",
        "615231533",
        31,
        "47649039P"
    )
);

$vectorFabricantes = array(
    array(
        "ID",
        "Active (0/1)",
        "Name *",
        "Description",
        "Short description",
        "Meta title",
        "Meta keywords",
        "Meta description",
        "Image URL"
    ),
    array(
        3,
        1,
        "Bodegas Toro",
        "Super bodegas toro larga descripcion",
        "Super bodegas toro corta descripcion",
        "bodegas-toro",
        "bodegas-toro",
        "bodegas-toro",
        ""
    )
);

$vectorSuppliers = array(
    array(
        "ID",
        "Active (0/1)",
        "Name *",
        "Description",
        "Short description",
        "Meta title",
        "Meta keywords",
        "Meta description",
        "Image URL"
    ),
    array(
        1,
        1,
        "Distribuidor La Rioja",
        "Descripcion larga distribuidor La rioja",
        "Descripcion corta distribuidor La rioja",
        "distribuidor-la-rioja",
        "distribuidor-la-rioja",
        "distribuidor-la-rioja",
        ""
    )
);

foreach ($vectorCategorias as $campo) {
    fputcsv($output, $campo,';');
}
fclose($output);
?>