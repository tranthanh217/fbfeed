<?php
header("Content-Type: application/rss+xml; charset=ISO-8859-1");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '-1');
error_reporting(E_ALL);

if(file_exists("wp-load.php"))require( 'wp-load.php' );
else require( '../wp-load.php' );
global $wpdb;
$table_prefix = $wpdb->prefix;

$newmoon = new stdClass();
$newmoon->types = [];
foreach ($types->values as $data) {
    array_push($newmoon->types, new Product_Type($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $data[16]));
    }

$brand = explode(".", $_SERVER['HTTP_HOST'])[0];
    $results = $wpdb->get_results( "SELECT * FROM  $wpdb->posts WHERE post_type = 'product' AND post_status = 'publish' " ,'ARRAY_A');
    // var_dump($results);
    // if($result->num_rows > 0){
        echo '<?xml version="1.0" encoding="UTF-8" ?>
        <rss version="2.0" xmlns:g="http://base.google.com/ns/1.0" xmlns:c="http://base.google.com/cns/1.0">
        <channel>
        <title>' . $brand . '</title>
        <link><![CDATA[https://' . $_SERVER['HTTP_HOST'] . ']]></link>';
        foreach($results as $row)
            {
                $post_title = $row["post_title"];
                $product_id = $row["ID"];
                $product_json = json_decode(get_post_meta($product_id, 'json_shopify', true), true)['product'];
                $img = $product_json['image']['src'];
                $price = $product_json['variants'][0]['price'];
                $compare_at_price = $product_json['variants'][0]['compare_at_price'];


                $permalink = get_permalink($product_id);
                $gg_category = htmlentities($type->google_category, ENT_QUOTES);
                $item = '<item>';
                $item .= '<g:id>'.esc_html($product_id).'</g:id>';
                $item .= '<g:identifier_exists>yes</g:identifier_exists>';
                $item .= '<g:title>'.esc_html($post_title).'</g:title>';
                $item .= '<g:link>'.esc_url($permalink).'</g:link>';

                $item .= '<g:image_link>'.esc_url($img).'</g:image_link>';  
                $item .= '<g:availability>'.esc_html('in stock').'</g:availability>';
                
                $item .= '<g:description>'.esc_html($row['post_content']).'</g:description>';
                $item .= '<g:google_product_category>'.esc_html($gg_category).'</g:google_product_category>';     
                if (empty($product_json['variants'][0]['compare_at_price'])) {
                    $item .= '<g:price>'.esc_html($price.' USD').'</g:price>';
                } else {
                    $item .= '<g:sale_price>'.esc_html($price.' USD').'</g:sale_price>';
                    $item .= '<g:price>'.esc_html($compare_at_price USD').'</g:price>';
                }
                
                $item .= '</item>';   
                
               echo $item;
            }
        echo '</channel>
        </rss>';
    // }
       
        
?>