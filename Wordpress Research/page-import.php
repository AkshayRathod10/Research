<?php 

// $args = array(
//     'post_type' => 'product', // Only get the posts
//     'posts_per_page'   => -1 // Get every post
// );
// $posts = get_posts($args);
// foreach ( $posts as $post ) {
//     // Run a loop and update every meta data
//     update_post_meta( $post->ID, 'botanical_name', 'aaaaaa' );

// }


$args = array(
    'post_type' => 'product', // Only get the posts
    'posts_per_page'   => -1 // Get every post
);
$posts = get_posts($args);
foreach ( $posts as $post ) {

    $mypost = get_page_by_title($post->post_title, OBJECT, 'product');
    // echo $mypost->ID;

}
echo dirname(__FILE__);

// $mypost = get_page_by_title('Ashwagandha Root', OBJECT, 'product');
// print_r($mypost);

// echo $mypost->post_title;

    // echo $mypost->ID;

// echo $test = get_page_by_title( 'Ashwagandha Root','product' );

$row = 1;
if (($handle = fopen("/var/www/html/jk5/wp-content/themes/wimpie-lite-child/Final Products sheet 4_2019 JK Website final.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    if($row == 1){ $row++; continue; }
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
    }
  }
  fclose($handle);
}


?>