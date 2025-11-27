<?php
$_ = function ($str) {
  return $str;
};
$terms = get_the_terms( $post->ID, 'user_type' );
if ( !empty( $terms ) ){
  // get the first term
  $term = array_shift( $terms );
}
$type_slug = $term->slug;
if($type_slug == 'owner') {
  $post_user_type_id = 33; // owner
} elseif ($type_slug == 'management') {
  $post_user_type_id = 32; // management
} else {
  $post_user_type_id = 115; // chat
}

$user_types = array($post_user_type_id);
    foreach ($user_types as $type) {
        $query = new WP_Query(
            array(
            'post_type' => 'case_study',
            'post_status' => 'publish',
            'posts_per_page' => 8,
            'no_found_rows' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'user_type',
                    'field' => 'id',
                    'terms' => $type
            )
            )
        )
        );
        if ($query->have_posts()) {
            echo "
            <section class='case-study-list'>
            <h2 class='case-study-list__title'>{$_(get_term($type)->name)}様の活用事例</h2>
            ";
            while ($query->have_posts()) {
                $query->the_post();
                $title = get_the_title();
                $url = get_the_permalink();
                $terms = get_the_terms(get_the_ID(), "features");
                $tags = "";
                foreach ((array)$terms as $term) {
                    if (empty($term)) {
                        break;
                    }
                    $link = get_term_link($term);
                    $tags .= "
                    <li class='case-study-list__tag'>
                        <a class='case-study-list__tag--link' href='{$link}'>{$term->name}</a>
                    </li>
                    ";
                }
                $name = $_acf('companyname');
                if (empty($name)) {
                    $name = $_acf('name');
                }
                echo "
                <div class='case-study-list__item'>
                <a class='case-study-list__thumb' href='{$url}'>
                <img loading='lazy' src='{$_acf('small_thumbnail')}' />
                </a>
                <div class='case-study-list__text'>
                <a class='case-study-list__hd' href='{$url}'>{$name}</a>
                <p class='case-study-list__catch'>{$title}</p>
                <ul class='case-study-list__tags'>
                {$tags}
                </ul>
                </div>
                </div>
                ";
            }
            echo "</section>";
        }
        wp_reset_query();
    }
