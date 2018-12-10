<?php 



$facebook_like_share_count = function ( $url ) {
 
    $api = file_get_contents( 'http://graph.facebook.com/?id=' . $url );
 
    $count = json_decode( $api );
 
    return $count->shares;
};

echo $facebook_like_share_count( 'https://designmodo.com/wordpress-https/' );




$facebook_page_like_count = function ( $url ) {
 
    $api = file_get_contents( 'http://graph.facebook.com/?id=' . $url );
 
    $count = json_decode( $api );
 
    return $count->likes;
};
 
echo $facebook_page_like_count( 'http://www.facebook.com/designmodo' );




$twitter_tweet_count = function ( $url ) {
 
    $api = file_get_contents( 'https://cdn.api.twitter.com/1/urls/count.json?url=' . $url );
 
    $count = json_decode( $api );
 
    return $count->count;
};
 
echo $twitter_tweet_count( 'https://designmodo.com/wordpress-https/' );


$pinterest_pins = function ( $url ) {
 
    $api = file_get_contents( 'http://api.pinterest.com/v1/urls/count.json?callback%20&url=' . $url );
 
    $body = preg_replace( '/^receiveCount\((.*)\)$/', '\\1', $api );
 
    $count = json_decode( $body );
 
    return $count->count;
 
};
 
echo $pinterest_pins( 'https://designmodo.com/' );



$linkedin_share = function ( $url ) {
 
    $api = file_get_contents( 'https://www.linkedin.com/countserv/count/share?url=' . $url . '&format=json' );
 
    $count = json_decode( $api );
 
    return $count->count;
 
};
 
echo $linkedin_share( 'https://designmodo.com/' );


$stumbleupon = function ( $url ) {
 
    $api = file_get_contents( 'https://www.stumbleupon.com/services/1.01/badge.getinfo?url=' . $url );
 
    $count = json_decode( $api );
 
    return $count->result->views;
 
};
 
echo $stumbleupon ( 'https://designmodo.com/' );




$google_plusones = function ( $url ) {
    $curl = curl_init();
    curl_setopt( $curl, CURLOPT_URL, "https://clients6.google.com/rpc" );
    curl_setopt( $curl, CURLOPT_POST, 1 );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]' );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-type: application/json' ) );
    $curl_results = curl_exec( $curl );
    curl_close( $curl );
    $json = json_decode( $curl_results, true );
 
    return intval( $json[0]['result']['metadata']['globalCounts']['count'] );
};
 
echo $google_plusones('https://designmodo.com/wordpress-https');

?>

<?php $url = get_permalink( $post_id ); echo $facebook_like_share_count ("$url");?>
<?php $url = get_permalink( $post_id ); echo $twitter_tweet_count ("$url");?>
<?php $url = get_permalink( $post_id ); echo $pinterest_pins ("$url");?>
<?php $url = get_permalink( $post_id ); echo $google_plusones ("$url");?>