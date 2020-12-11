<?php
header("Content-Type: application/rss+xml; charset=ISO-8859-1");

DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'ltshop');

$actual_link = `http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]`;
?>
<?xml version="1.0" encoding="ISO-8859-1"?>
<rss xmlns:g="http://base.google.com/ns/1.0" xmlns:c="http://base.google.com/cns/1.0" version="2.0">
    <channel>
        <title>getnowstore</title>
        <link>
        <![CDATA[getnowstore.com?>]]>
        </link>
        <language>en-us</language>
        <?php

        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        $result = mysqli_query($con, "
            select meta_value,post_id from wp_postmeta
                where meta_key='json_shopify'
        ");
        while ($row = mysqli_fetch_array($result)) {
            extract($row);
            $obj = json_decode($row[0]);
        ?>
            <item>
                <g:id><?php echo $obj->product->{"id"} ; ?></g:id>
                <g:id><?php echo $row["post_id"]; ?></g:id>
            </item>
        <?php
        }
        ?>
    </channel>
</rss>
<?php
exit();
?>