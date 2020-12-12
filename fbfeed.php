<?php
header("Content-type: text/xml; charset=utf-8");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '-1');
error_reporting(E_ALL);
require 'vendor/autoload.php';
define ("BING_BAD_IDS", "37383,42681,41581,41581,41581,41517,41517,41517,41517,41517,41503,41503,36273,36289,37402,74917,71326,72298,64336,71295,71295,41540,57631,78644,66832,69296,61988,65985,102683,46155,42448,54666,54666,61295,100883,55908,36505,37355,74916,73989,75122,69444,100987,100960,36291,51175,57634,74894,68147,66247,36184,69627,74014,66442,68012,65512,41159,37142,74206,67956,69808,67071,102870,102718,35539,35813,41494,41494,47600,44519,45816,55655,69410,70761,74934,101033,100878,43382,56674,56674,75726,78227,66618,66604,66734,65934,41616,41616,41528,41528,36294,57540,69777,71296,64339,101872,101872,41384,43730,42220,41513,41513,41513,41513,74068,67456,99034,41459,57548,69626,73991,66659,61688,101052,62604,55764,65998,69559,69790,72889,100937,33528,42068,36383,58349,101679,43377,41150,41150,36223,53247,53247,36193,69624,60744,102695,102695,41621,41536,36514,66792,67266,69708,68258,73001,98713,36385,37415,61298,61294,74913,67938,69642,62251,101833,35178,55179,70759,74899,67847,69747,71294,62979,101682,102270,36079,42127,41489,41489,42468,41769,73995,79808,70302,69824,65940,61689,104896,34536,40838,46718,37133,72310,80059,69005,65508,65508,98828,42483,42483,53419,74918,74906,60771,66591,70301,101675,101675,42627,42627,42627,41951,36379,58383,61237,75964,62041,69569,58587,69652,67947,102811,36984,42133,41577,41577,41577,41577,47145,61240,61818,66002,66216,74911,76309,67739,74473,67675,34992,41870,41870,71328,68102,101011,102240,41919,46279,74901,74093,68331,66546,67064,61983,65947,102634,36433,74924,66920,64340,34050,41168,47601,58241,58241,101871,102396,34738,34738,42177,57494,57494,68309,72579,72890,60850,70624,65938,65938,100894,102212,43116,37131,74915,74078,69467,69510,62989,102812,35202,35202,35931,33738,37089,41573,43091,37078,36473,74052,74015,69663,67949,51672,71045,74999,55765,55723,74080,69735,61928,67716,62986,62986,101611,101611,101738,53538,74939,74931,70538,62250,58331,34944,34944,37367,69629,74094,67900,69461,66578,68832,101599,102363,34166,41210,54343,61210,71324,75727,71548,79231,69294,72880,60421,62819,62819,98786,100940,100940,101123,34532,34532,37150,37167,57830,69432,68926,62255,35967,35967,40985,43150,49915,48810,56137,74942,69597,69154,61697,36697,57810,61823,71327,66990,74833,69450,66536,69753,61682,100888,32919,43263,36386,41171,69631,66981,72365,98815,101646,33475,37502,36995,41395,41107,61239,66004,65996,74077,67890,68933,61526,61704,100945,79579,49568,50051,50051,66631,61957,72259,101733,102376,61209,75569,63899,59430,62818,98753,35992,36518,42056,41358,41358,66007,62481,65445,65445,46897,46897,69577,66759,72894,62814,62814,72268,36284,74064,74923,71540,102315,100938,33455,53526,36326,36485,61234,60540,68544,69117,70073,63100,64334,65953,34442,34442,33461,44453,71323,35887,41737,74893,74207,74017,61665,41694,41694,49804,49030,50751,36283,36479,57552,66744,74922,63716,69317,42203,42203,42203,42203,36489,58206,74929,70287,72879,67957,61780,102745,102745,67996,60444,102242,100936,101610,101610,100932,34640,34640,42425,42410,42117,43832,57163,57163,74096,74830,63837,67283,79720,62817,62817,102252,102769,102769,41376,41787,37159,67142,70132,60829,61989,72266,98794,37434,37434,36493,67984,72574,68093,100881,43802,46969,51949,51949,70286,74233,62988,98614,71361,65002,42403,57984,61816,69632,71329,74892,69427,61557,72256,65994,100882,101879,43416,52653,52653,61304,41493,58429,61235,61231,74907,71320,67914,62821,62821,67954,43163,36262,36308,69413,102594,72778,58246,61229,74063,71566,74908,69457,68560,102248,102696,102696,102696,49163,53531,42782,55446,57503,57503,74912,67539,42405,36286,65997,101612,41724,42142,54675,63632,33115,41486,41486,41486,41353,49367,49174,36281,53544,74920,74928,72893,61698,62982,102360,42137,56487,69628,66748,74927,69524,72884,100907,41222,41711,42495,47532,36522,54648,53428,61297,61820,74909,60686,70303,68195,66645,62253,102631,41555,42213,42213,53978,60573,66475,66878,102697,102697,69634,61705,102673,37126,42518,49898,36210,37153,58317,73054,72999,68902,100903,102304,36915,36206,67408,70299,68476,101708,41001,41083,46012,54657,54657,57495,57495,74910,79052,62102,69547,63683,71291,101832,101832,35038,35038,41508,41508,41484,49564,57982,57580,69625,74921,70760,69388,75658,65993,102698,102698,36162,41499,41499,41499,41499,54533,54533,55421,71547,74903,65444,65444,75942,101613,75648,37213,36900,74932,70280,66749,68298,102243,40847,40907,79230,69584,69140,65942,72363,98825,35934,50758,36269,66864,69620,74476,68052,69802,100856,79281,37313,49904,77392,67480,61695,101828,100992,35054,36731,36731,35531,35531,69638,78228,68941,65451,65451,102726,100956,105310,43053,43053,43053,74937,79920,74213,68555,73111,100854,100854,44477,57645,72296,75728,73041,67728,69670,65941,102358,41700,41700,49314,36330,56817,72295,37157,42588,53382,54736,54736,58365,69640,74905,60746,69741,68579,73043,102278,35964,42123,41761,71321,68157,58591,60789,67950,101603,34726,67013,61103,61693,34328,44291,32838,41079,36482,74081,74926,74919,69437,101862,102426,36446,36303,61242,69419,67377,65943,101619,100902,35938,36510,36218,36318,33743,75722,100968,43927,41490,36475,58330,74941,74902,72881,100891,101835,100948,58386,66683,102699,105148,36287,36885,57161,57161,66177,70764,60559,101028,41152,49909,46245,69636,74896,101884,101884,101846,35190,35190,51168,75245,72307,73662,62990,62990,102602,102602,61207,66006,69623,61187,68887,98672,98672,56714,105387,49892,36270,69715,68456,100950,42775,46195,71322,63103,34528,34528,37109,41096,41651,42476,42146,36521,53971,42417,43046,61814,66210,69211,65509,65509,36742,42770,42770,42770,42770,41992,53399,55775,74067,69200,67004,61684,101016,41217,50744,57577,66000,74012,72297,69529,61324,61361,70017,69785,73133,60858,65447,65447,102758,46352,41104,67971,72892,72255,65452,65452,101718,36894,42347,43265,36227,37285,60528,66819,68417,72270,102263,35953,74897,66902,100918,102254,37103,41818,41599,41599,36313,36103,32237,57493,61215,61819,74940,68227,100889,41681,50739,49815,49557,70295,68863,102235,102235,41691,41691,36277,69635,71567,74936,63885,73112,61214,65995,61435,65515,65511,65511,36198,37115,55145,79919,67509,63017,67686,61778,65516,65449,102514,43057,35066,40944,36297,70762,63730,75930,70128,102722,43799,36274,36258,53517,41099,66916,69730,63916,69191,66774,102705,40823,47678,74938,72941,67170,73665,105506,42482,79735,79735,62985,62985,101387,58831,37532,43840,54509,53551,58340,74011,63934,62812,62247,101614,100913,68149,34941,34941,36382,55411,57162,57162,68505,41733,54335,36375,72299,74933,67927,80055,102420,102420,102420,35929,35033,35033,43813,41312,58223,66676,102424,49255,73994,74930,74053,79810,67324,62468,60900,61603,60805,67948,62980,62980,72293,100914,37430,41120,41120,53368,72308,79170,79170,73042,66702,102538,102284,42507,57781,69637,75377,74648,59790,67700,68962,69614,72883,62245,61741,102316,34947,34947,37529,42168,32603,73039,65937,65988,102299,43218,35071,50765,61822,69633,67498,69795,55879,45830,57647,74018,69165,64742,100958,57036,57036,67762,60868,63104,100857,101057,100916,36499,37125,41644,41644,42063,42047,36322,61212,66802,68430,66726,34154,36295,53222,53222,66001,68462,69658,72257,100892,43825,44470,53444,37136,57094,57094,74097,68167,58509,75967,62981,62981,101605,35583,49693,49574,36664,37222,69639,69630,100890,55749,41986,41986,41764,53991,55759,74895,79761,41522,41522,41522,36501,73992,74900,73053,68846,101628,34936,43726,40842,65999,69765,100898,100898,43126,42761,41780,43921,48682,36214,56775,61290,74925,80009,67295,102245,100908,41921,36380,36498,61217,74898,60591,70075,98737,98737,102322,102736,42171,42171,43951,43270,43657,36343,71325,58369,61206,74914,70763,70298,64341,101678,101678,43902,56481,57539,71558,74647,62515,61493,101037,102743,43714,44679,57230,56135,58230,61218,66003,75570,79376,66464,66709,105507,36292,41538,41538,57646,74935,55982");
/**
 * Set here the full path to the private key .json file obtained when you
 * created the service account. Notice that this path must be readable by
 * this script.
 */
$service_account_file = __DIR__ . '/credentials.json';

/**
 * This is the long string that identifies the spreadsheet. Pick it up from
 * the spreadsheet's URL and paste it below.
 */
$spreadsheet_id = '1rxg_zwrBoM4vSKqNpWE4fayPLXg8ky8cwTkDDhCa91w';

/**
 * This is the range that you want to extract out of the spreadsheet. It uses
 * A1 notation. For example, if you want a whole sheet of the spreadsheet, then
 * set here the sheet name.
 *
 * @see https://developers.google.com/sheets/api/guides/concepts#a1_notation
 */
$spreadsheet_range = 'weekly outfits!A2:Q';

putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $service_account_file);
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->addScope(Google_Service_Sheets::SPREADSHEETS_READONLY);
$service = new Google_Service_Sheets($client);

$types = $service->spreadsheets_values->get($spreadsheet_id, $spreadsheet_range);
require_once "Class.php";



if(file_exists("wp-load.php"))require( 'wp-load.php' );
else require( '../wp-load.php' );

global $wpdb;
$table_prefix = $wpdb->prefix;
$page = (isset($_GET['page'])) ? $_GET['page'] : 0;
$append = trim($_GET['append']);
$descblock = isset($_GET['descblock']) ? trim($_GET['descblock']) : null;

$limit  = (isset($_GET['limit'])) ? $_GET['limit'] : 10;
$offset = $limit * $page ;
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$newmoon = new stdClass();
$newmoon->teams = [];
$newmoon->types = [];

$descs = [];
$colors = [];

if (($h = fopen("descs.csv", "r")) !== FALSE)
{
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
  {
    $descs[$data[0]] = $data[1];
    $colors[$data[0]] = $data[2];
  }
  fclose($h);
}


if (($h = fopen("teams.csv", "r")) !== FALSE)
{
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
  {
    $team = new Team($data[0], $data[1], $data[2]);
    if (array_key_exists($data[0], $descs)) {
        $team->desc = $descs[$data[0]];
        $team->color = $colors[$data[0]];
    } else {
        echo $team->code . "\n";
    }
    array_push($newmoon->teams, $team);
  }
  fclose($h);
}
foreach ($types->values as $data) {
    array_push($newmoon->types, new Product_Type($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $data[16]));
    }

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "Loi ket noi co sơ du lieu xem lai cau hinh";
}
else {
    $brand = explode(".", $_SERVER['HTTP_HOST'])[0];

    $sql = "SELECT * FROM `".$table_prefix."posts` WHERE post_status = 'publish' AND post_type='product' AND post_parent=0 AND ID NOT IN (" . BING_BAD_IDS . ") ORDER BY `ID` ASC  LIMIT  ".$limit ." OFFSET ".$offset;
    $result = $conn->query($sql) or die($conn->error);
    if($result->num_rows > 0) {

        echo '<?xml version="1.0" encoding="UTF-8" ?>
            <rss version="2.0" xmlns:g="http://base.google.com/ns/1.0" xmlns:c="http://base.google.com/cns/1.0">
                <channel>
                <title>'.$brand.'</title>
                <link><![CDATA[https://' . $_SERVER['HTTP_HOST'] . ']]></link>
                <description>'.htmlspecialchars(get_bloginfo('description')).'</description>';

        while($row = $result->fetch_assoc() ) {

            $post_title = $row["post_title"];
            if (is_null($descblock))
                $description = do_shortcode($row["post_content"]);
            else
                $description = do_shortcode('[block id="' . $descblock . '"]');
            $team = getTeam($newmoon->teams, $post_title);
            if (!is_null($team)) {
                $post_title = $team->name;
                $description = strip_tags($team->desc);
                $color = $team->color;
            }
            
            if( strlen($description) > 5000) {
                $description = substr($description, 0, 4999);
            }

            $mpn = $brand."_".$row["ID"]; // SKU
            $label = "";
            $lable1 = "";
            $post_title = ucwords($post_title);

            
            
            
            $product_json = json_decode(get_post_meta($row["ID"], 'json_shopify', true), true)['product'];
            $img = $product_json['image']['src'];
            $price = $product_json['variants'][0]['price'];
            $sku = $product_json['variants'][0]['sku'];

            $type = getProductType($newmoon->types, $sku);
            if (is_null($type)) {
                continue;
            }
            if (!is_null($team)) {
                $post_title = $post_title . ' ' . $type->name;
                $post_title = $post_title . ' ' . $type->size;
                $post_title = $post_title . ' ' . $team->color;
            }
            
            $product_type = $type->name;
            $gender = $type->gender;               
            $material = $type->material;
            $age_group = $type->age_group;
            $gg_category = htmlentities($type->google_category);
            // $size = $type->size;
            foreach ($product_json['options'] as $option) {
                if (strtolower($option['name']) == 'size') {
                    $size = $option['values'][0];
                    break;
                }
            }

            if(!$img){
                continue;
            }

            $product_id = $row["ID"];
            $permalink = get_permalink($product_id);
            $link_product = trim($permalink, "/");
            // $total_sale = $wpdb->get_results(  "SELECT * FROM wp_postmeta WHERE meta_key = 'total_sales' AND post_id = '$product_id' "  ) ;
            if (!empty($append)) {
                $post_title .= " " . $append;
            }
            if(strlen($post_title) > 150)
            {
                $post_title = substr($post_title, 0, 150);
            }
            $item = '<item>';
            $item .= '<g:id>'.htmlspecialchars($row["ID"]).'</g:id>';
            $item .= '<g:identifier_exists>yes</g:identifier_exists>';
            $item .= '<g:title>'.htmlspecialchars($post_title).'</g:title>';            
            $item .= '<g:link>'.$link_product.'</g:link>';
            
            // addition image link ENDED            
            $item .= '<g:image_link>'.htmlspecialchars($img).'</g:image_link>';
            $item .= '<g:availability>'.htmlspecialchars('in stock').'</g:availability>';
            $item .= '<g:description>'.htmlspecialchars($description, ENT_QUOTES | ENT_SUBSTITUTE, 'utf-8').'</g:description>';
            $item .= '<g:google_product_category>'.htmlspecialchars($gg_category).'</g:google_product_category>';       
            if (empty($product_json['variants'][0]['compare_at_price'])) {
                $item .= '<g:price>'.htmlspecialchars($price.' USD').'</g:price>';
            } else {
                $item .= '<g:sale_price>'.htmlspecialchars($price.' USD').'</g:sale_price>';
                $item .= '<g:price>'.htmlspecialchars($product_json['variants'][0]['compare_at_price'].' USD').'</g:price>';
            }
            

            $item .= '<g:brand>'.htmlspecialchars($brand).'</g:brand>';
            $item .= '<g:condition>'.htmlspecialchars('new').'</g:condition>';
            if (!empty($age_group)) {
                $item .= '<g:age_group>'.htmlspecialchars($age_group).'</g:age_group>';  // coi lai    
            }
            if (!empty($color)) {
                $item .= '<g:color>'.htmlspecialchars($color).'</g:color>';
            }
            if (!empty($gender)) {
                $item .= '<g:gender>'.htmlspecialchars($gender).'</g:gender>';
            }
            if (!empty($size)) {
                $item .= '<g:size>'.htmlspecialchars($size).'</g:size>';
            }
            if (!empty($material)) {
                $item .= '<g:material>'.htmlspecialchars($material).'</g:material>';
            }
            if (!empty($product_type)) {
                $item .= '<g:product_type>'.htmlspecialchars($product_type).'</g:product_type>';
            }
            if (!empty($label)) {
                $item .= '<g:custom_label_0>'.htmlspecialchars($label).'</g:custom_label_0>';
            }
            if (!empty($label1)) {
                $item .= '<g:custom_label_1>'.htmlspecialchars($label1).'</g:custom_label_1>';
            }
            if(strpos(strtolower($post_title), 'creek')!==false){
                $item.='<g:custom_label_2>group_1</g:custom_label_2>';
            }
            $item .= '<g:mpn>'.htmlspecialchars($mpn).'</g:mpn>';
            $item .= "</item>"."\n";
            
            echo $item;
            
        }
        echo "</channel>";
        echo "</rss>";
    }

    $conn->close();
}

function getTeam($teams, $title) {
    foreach ($teams as $team) {
        if (strpos($title, $team->code) !== FALSE) {
            return $team;
        }
    }
    return null;
}


function getProductType($types, $sku) {
    foreach ($types as $type) {
        $str = $type->code;
        if (strpos($sku, $str) !== FALSE) {
            return $type;
        }
    }
    return null;
}