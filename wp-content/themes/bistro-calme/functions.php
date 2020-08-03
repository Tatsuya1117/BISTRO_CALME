<?php
/**
* <title>タグを出力する
*/
add_theme_support('title-tag');

add_filter('docment_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator) {
    $separator = '|';
    return $separator;
}

add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title) {
    if(is_home()) {
        unset($title['tagline']);//タグラインを削除
        $title['title'] = 'BISTRO CALMEは、カジュアルなワインバーよりなビストロです。';//テキストを変更
    }
    return $title;
}

// アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');