<?php
header('Content-Type: application/rss+xml');
$bdd = new PDO('mysql:host=127.0.0.1;dbname=devsite_db;charseyt=utf8','root','');

$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC');

$lastBuildDate = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC');
$lastBuildDate = $lastBuildDate->fetch()['date_time_post'];
?>
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
    <channel>
        <title>Actulyoum</title>
        <description>Ceci est un exemple de flux RSS 2.0</description>
        <lastBuildDate><?= date(DATE_RSS, strtotime($lastBuildDate)) ?></lastBuildDate>
        <link>http://devsite.tw.tn/pfe2017/</link>
		<?php while 	($a = $article->fetch()){ ?>
        <item>
            <title><?= $a['titre'] ?></title>
            <description><?= $a['contenu'] ?></description>
            <pubDate><?= date(DATE_RSS, strtotime($a['date_time_post'])) ?></pubDate>
            <link>http://devsite.tw.tn/pfe2017/?id=<?= $a['id'] ?></link>
        </item>
    </channel>
</rss>