<?php

if ($wo['config']['pages'] == 0) {
	header("Location: " . Wo_SeoLink('index.php?link1=welcome'));
    exit();
}
$wo['description'] = $wo['config']['siteDesc'];
$wo['keywords']    = $wo['config']['siteKeywords'];
$wo['page']        = 'mua-sam';
$wo['title']       = 'mua sắm | ' . $wo['config']['siteTitle'];
$wo['content']     = Wo_LoadPage('page/mua-sam');