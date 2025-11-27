<?php
/**
 * WP Next Landing Page functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Next_Landing_Page
 */

if (! function_exists('wp_next_landing_page_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_next_landing_page_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on WP Next Landing Page, use a find and replace
     * to change 'wp-next-landing-page' to the name of your theme in all the template files.
     */
    load_theme_textdomain('wp-next-landing-page', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'wp-next-landing-page'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('wp_next_landing_page_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}
endif;
add_action('after_setup_theme', 'wp_next_landing_page_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_next_landing_page_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wp_next_landing_page_content_width', 640);
}
add_action('after_setup_theme', 'wp_next_landing_page_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_next_landing_page_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'wp-next-landing-page'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'wp-next-landing-page'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'wp_next_landing_page_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wp_next_landing_page_scripts()
{
    wp_enqueue_style('wp-next-landing-page-style', get_stylesheet_uri());

    wp_enqueue_script('wp-next-landing-page-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('wp-next-landing-page-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'wp_next_landing_page_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Do not show admin bar
 */
show_admin_bar(false);

/**
 * Load text domain for translation
 */
load_theme_textdomain('wp-next-landing-page', get_template_directory() . '/languages');


/**
 * Customize Excerpt
 */
function custom_excerpt_length($length)
{
    return 180;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/**
 * Customize Excerpt More
 */
function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Pagination
 */
function page_navi()
{
    global $wp_rewrite;
    global $wp_query;
    global $paged;

    $paginate_base = get_pagenum_link(1);
    if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
        $paginate_format = '';
        $paginate_base = add_query_arg('page', '%#%');
    } else {
        $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
    untrailingslashit('?page=%#%', 'paged');
        ;
        $paginate_base .= '%_%';
    }

    $result = paginate_links(array(
    'base' => $paginate_base,
    'format' => $paginate_format,
    'total' => $wp_query->max_num_pages,
    'mid_size' => 5,
    'current' => ($paged ? $paged : 1),
  ));

    return $result;
}

// WordPressで特定の親ページを持つ子孫ページ（子・孫・玄孫）全てを対象とする条件分岐
//固定ページの親ページを判別して条件分岐 ex.Aページを親に持つ子ページすべてに同じものを表示させたい **/
function is_parent_slug()
{
    global $post;
    if (!empty($post)) {
        if ($post->post_parent) {
            $post_data = get_post($post->post_parent);
            return $post_data->post_name;
        }
    }
}

//DBに接続する
class connect
{
    public function __construct()
    {
        $_ = function ($str) {
            return $str;
        };
        $dsn = "mysql:dbname={$_(DB_NAME)};host={$_(DB_HOST)};charset={$_(DB_CHARSET)}";
        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES {$_(DB_CHARSET)}"));
        } catch (Exception $e) {
            echo 'error' .$e->getMesseage;
            die();
        }
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        $this->dbh = $pdo;
    }
}

//投稿タイプの何番目の記事か取得
function getPostNumber($id)
{
    $con = new connect();
    $dbh = $con->dbh;
    $postType = get_post_type($id);
    $sql = "SELECT ID FROM rjcwpn_posts WHERE post_status = 'publish' AND post_type = :type ORDER BY post_date ASC;";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':type', $postType, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $ids = array();
    foreach ($rows as $row) {
        $ids[] = $row['ID'];
    }
    $num = array_search($id, $ids) + 1;
    return $num;
}

//管理画面上に会社名を表示させる
function addPostColumn($columns)
{
    $columns['companyName'] = "会社名";
    return $columns;
}

function addColumn($columnName, $postID)
{
    if ($columnName === 'companyName') {
        echo mb_substr(get_post_meta($postID, 'companyname', true) ?: get_post_meta($postID, 'name', true), 5, -3);
    }
}

add_filter('manage_posts_columns', 'addPostColumn');
add_action('manage_posts_custom_column', 'addColumn', 10, 2);

//サムネイルを強制的に出力する
function forceWriteThumbnailUrl($id = 0)
{
    global $post, $wpdb;
    $id = $id === 0 ? $post->ID : $id;

    if (has_post_thumbnail($id)) {
        $thumbnail_url = get_the_post_thumbnail_url($id);
        if (!empty($thumbnail_url)) {
            return $thumbnail_url;
        }

        // localhost環境でattachmentが見つからない場合、本番環境のURLを直接構築
        if (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
            $thumbnail_id = get_post_thumbnail_id($id);
            if ($thumbnail_id) {
                // Get the file path from meta (this exists even if attachment post doesn't)
                $file_path = $wpdb->get_var($wpdb->prepare(
                    "SELECT meta_value FROM {$wpdb->postmeta} WHERE post_id = %d AND meta_key = '_wp_attached_file'",
                    $thumbnail_id
                ));
                if ($file_path) {
                    return 'https://wealth-park.com/wp-content/uploads/' . $file_path;
                }
            }
        }
    }

    return get_template_directory_uri()."/img/no-image.jpg";
}

class PHPDOM
{
    public function __construct()
    {
        $this->doc = new DOMDocument('1.0', 'UTF-8');
    }

    public function setNode($tagName, $className = null, $text = null)
    {
        $node = $this->doc->createElement($tagName, $text);
        if (!empty($className)) {
            $node->setAttribute("class", $className);
        }

        return $node;
    }

    public function a($href, $className = null, $text = null)
    {
        $node = $this->doc->createElement("a", $text);
        if (!empty($className)) {
            $node->setAttribute("class", $className);
        }
        $node->setAttribute("href", $href);

        return $node;
    }

    public function img($src, $className = null)
    {
        $node = $this->doc->createElement("img");
        if (!empty($className)) {
            $node->setAttribute("class", $className);
        }
        $node->setAttribute("src", $src);
        $node->setAttribute("loading", "lazy");

        return $node;
    }

    public function generator($obj)
    {
        $this->doc->appendChild($obj);
        echo $this->doc->saveHTML();
    }
}

class breadcrumb extends PHPDOM
{
    public function __construct($className = "breadcrumb")
    {
        parent::__construct();
        $this->json = array(
            '@context'          => 'https://schema.org',
            '@type'             => 'BreadcrumbList',
            'itemListElement'   => array()
        );

        $this->class = $className;

        $this->list = $this->setNode("ul", "{$this->class}__list");

        $this->position = 1;
    }

    public function append($name, $link)
    {
        array_push($this->json['itemListElement'], array(
            '@type'     => 'ListItem',
            'position'  => $this->position,
            'name'      => $name,
            'item'      => $link
        ));

        $item = $this->setNode("li", "{$this->class}__item");
        $item->appendChild($this->a($link, "{$this->class}__link", $name));
        $this->list->appendChild($item);

        $this->position++;
    }

    public function build()
    {
        $wrap = $this->setNode("section", $this->class);
        $wrap->appendChild($this->list);
        $this->generator($wrap);
        echo '<script type="application/ld+json">';
        echo json_encode($this->json, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
        echo '</script>';
    }
}

class TableOfContents extends PHPDOM
{
    public function __construct()
    {
        parent::__construct();
        add_filter('the_content', array($this, 'generate'), 11);
    }

    private function parseContent($content)
    {
        libxml_use_internal_errors(true);
        $this->doc->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'utf-8'));
        libxml_use_internal_errors(false);
        $xpath = new DOMXpath($this->doc);
        $h2s = $xpath->query('//h2');
        $obj = new ArrayObject();
        $i = 1;
        foreach ($h2s as $h2) {
            $query = "//h2[{$i}]/following-sibling::h3[following::h2[.='{$h2s->item($i)->nodeValue}']]";
            if ($h2s->length === $i) {
                $query = "//h2[{$i}]/following-sibling::h3";
            }
            $h3s = $xpath->query($query);
            $obj->append($h2);
            $h2->child = new ArrayObject();
            if ($h3s->length > 0) {
                foreach ($h3s as $h3) {
                    $h2->child->append($h3);
                }
            }
            $i++;
        }
        $this->hds = $obj;
    }

    private function addSpanTag()
    {
        $i = 1;
        foreach ($this->hds as $hd) {
            $newNode = $this->doc->createElement('span', $hd->nodeValue);
            $newNode->setAttribute('id', "toc_index{$i}");
            $hd->replaceChild($newNode, $hd->childNodes->item(0));
            if (!empty($hd->child)) {
                $o = 1;
                foreach ($hd->child as $child) {
                    $newChildNode = $this->doc->createElement('span', $child->nodeValue);
                    $newChildNode->setAttribute('id', "toc_index{$i}-{$o}");
                    $child->replaceChild($newChildNode, $child->childNodes->item(0));
                    $o++;
                }
            }
            $i++;
        }
    }

    private function createTable()
    {
        global $q_config;// q translate key:languageに言語情報が入っている
        $lang = $q_config['language'];
        $root = 'toc';
        $wrap = $this->setNode('section', $root);
        $wrap->appendChild($this->setNode('p', "{$root}__title", esc_html__("TOC_TITLE", 'wp-next-landing-page')));

        $ul = $this->setNode('ul', "{$root}__list");
        $i = 1;
        foreach ($this->hds as $hd) {
            $tagName = $hd->tagName;
            $li = $this->setNode('li', "{$root}__item");
            $li->appendChild($this->a("#toc_index{$i}", "{$root}__link", $hd->nodeValue));
            if (!empty($hd->child)) {
                $ul2 = $this->setNode('ul', "{$root}__list--child");
                $o = 1;
                foreach ($hd->child as $h3) {
                    $li2 = $this->setNode('li', "{$root}__item--child");
                    $li2->appendChild($this->a("#toc_index{$i}-{$o}", "{$root}__link--child", $h3->nodeValue));
                    $ul2->appendChild($li2);
                    $o++;
                }
                $li->appendChild($ul2);
            }
            $ul->appendChild($li);
            $i++;
        }

        $wrap->appendChild($ul);
        if (!empty($this->hds[1])) {
            $this->hds[0]->parentNode->insertBefore($wrap, $this->hds[0]);
        }
    }


    public function generate($content)
    {
        if (!is_singular()) {
            return $content;
        }
        $this->parseContent($content);
        $this->addSpanTag();
        $this->createTable();

        return $this->doc->saveHTML();
    }
}

// 画像にwidthやheightが差し込まれないようにする
function removeSizeSpecification($html)
{
    return preg_replace('/(width|height)="\d*"\s/', '', $html);
}

add_filter('post_thumbnail_html', 'removeSizeSpecification', 10);
add_filter('image_send_to_editor', 'removeSizeSpecification', 10);

function remove_wp_version_rss() {
 return'';
 }

add_filter('the_generator','remove_wp_version_rss');

function remove_src_wp_ver( $dep ) {
    $dep->default_version = '';
}
add_action( 'wp_default_scripts', 'remove_src_wp_ver' );
add_action( 'wp_default_styles', 'remove_src_wp_ver' );

/* 外部リンク対応ブログカードのショートコードを作成 */
function show_Linkcard($atts) {
  extract(shortcode_atts(array(
    'url'=>"",
    'title'=>"",
    'excerpt'=>""
  ),$atts));

  //OGP情報を取得
  require_once 'OpenGraph.php';
  $graph = OpenGraph::fetch($url);

  //OGPタグからタイトルを取得
  $Link_title = $graph->title;
  $src        = $graph->image;

  if(!empty($title)){
    $Link_title = $title;//title=""の入力がある場合はそちらを優先
  }

  //OGPタグからdescriptionを取得（抜粋文として利用）
  $Link_description = wp_trim_words($graph->description, 60, '…' );//文字数は任意で変更
  if(!empty($excerpt)){
    $Link_description = $excerpt;//値を取得できない時は手動でexcerpt=""を入力
  }

  if ( !empty($src) ) {
    $xLink_img = '<img src="'. $src .'" />';
  } else {
    $src = 'https://wealth-park.com/wp-content/themes/wp-next-landing-page/img/footer_logo_wp.svg';
    $xLink_img = '<img src="'. $src .'" />';
  }

  //外部リンク用ブログカードHTML出力
  $sc_Linkcard .='
  <div class="blogcard ex">
  <a href="'. $url .'" target="_blank">
   <div class="blogcard_thumbnail">'. $xLink_img .'</div>
   <div class="blogcard_content">
    <div class="blogcard_title">'. $Link_title .'</div>
    <div class="blogcard_excerpt">'. $Link_description .'</div>
    <div class="blogcard_link">'. $url .'</div>
   </div>
   <div class="clear"></div>
  </a>
  </div>';

  return $sc_Linkcard;
}
//ショートコードに追加
add_shortcode("sc_Linkcard", "show_Linkcard");

//WPB導入企業一覧の表示投稿数変更
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('wpb_pm_list') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '-1' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
return $content .= '<p>with:1200px / height:675px<br>画像サイズは幅1200px、高さ675px推奨</p>';
}


add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
	return 180 * DAY_IN_SECONDS;
}


// Get Current Page Without the Language
// For example https://wealth-park.com/ja/corporate/contact/
// Output: /corporate/contact/
function cleanPath() {
  $url = $_SERVER['REQUEST_URI'];

  // Parse the URL to get its components
  $parsed_url = parse_url($url);
  
  // Extract the path component from the parsed URL
  $path = $parsed_url['path'];
  
  // Remove the language segment from the path if needed
  // This assumes the language segment is always in the format /xx/ (where xx is the language code)
  $path_parts = explode('/', $path);
  if (isset($path_parts[1]) && preg_match('/^[a-z]{2}$/', $path_parts[1])) {
      // Remove the first two elements which are the empty string and the language code
      array_shift($path_parts);
      array_shift($path_parts);
  }
  
  // Reassemble the path
  $cleaned_path = '/' . implode('/', $path_parts);
  
  // Make sure the path ends with a slash
  if (substr($cleaned_path, -1) !== '/') {
      $cleaned_path .= '/';
  }
  return $cleaned_path;
}

/**
 * ローカル開発環境用: 画像を本番サーバーから読み込む
 * uploadsディレクトリは軽量化のため除外しているため、本番サーバーのURLを使用
 *
 * 本番環境では自動的に無効化される（localhost以外では実行されない）
 */
if (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    add_filter('upload_dir', function($uploads) {
        $uploads['baseurl'] = 'https://wealth-park.com/wp-content/uploads';
        $uploads['url'] = 'https://wealth-park.com/wp-content/uploads' . $uploads['subdir'];
        return $uploads;
    }, 10, 1);
}