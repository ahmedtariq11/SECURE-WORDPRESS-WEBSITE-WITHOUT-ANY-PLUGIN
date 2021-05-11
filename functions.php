*restrict wp-login.php page*/
add_action( ‘init’, ‘force_404’, 1 );
function force_404() {
$requested_uri = $_SERVER[“REQUEST_URI”];
if (strpos( $requested_uri, ‘/wp-login.php’) !== false ) {
// The redirect code
status_header( 404 );
nocache_headers();
include( get_query_template( ‘404’ ) );
die();
}
}
