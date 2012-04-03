<?php
// Create RSS feeds from data

// RSS
class RSS {
	var $sql; // the sql for getting data
	var $items; // array of all items returned
	var $title; // title of this feed.
	var $detailURL; // generic page that has specific item info on (may be accessed using ID)

	function RSS(){
		// connect to database
		require_once('inc/dbConn.php');
		// query database with SQL
		$rss_r = mysql_query($this->sql);
		while ($item = mysql_fetch_assoc($rss_r)){
			$this->items[] = $item;
		}
	}
	
	function output(){
		// output RSS
			header('Content-Type: text/xml');
			echo "<?xml version='1.0' encoding='UTF-8' ?>";
		?>
			<rss version="2.0">
				<channel>
					<title><?php echo $this->title?></title>
					<link>http://www.no2id.net/</link>
					<pubDate><?php echo date('r')?></pubDate>
					<description><?php echo $this->description ?></description>
					<?php
						// now output each item
						foreach ($this->items as $item){
							echo '<item>';
							// sort out annoying £ sign bugs
							//$item['description'] = str_replace('£','&pound;',$item['description']);
							//$item['description'] = htmlentities($item['description']);
							$item['title'] = htmlentities($item['title']);
							$item['id'] = urlencode($item['id']);
							echo "<title>{$item['title']}</title>\n";
							echo "\t<link>{$this->detailURL}{$item['id']}</link>\n";
							echo "\t<pubDate>{$item['pubDate']}</pubDate>\n";
							echo "\t<description><![CDATA[{$item['description']}]]></description>\n";
							echo "\t<guid>{$this->detailURL}{$item['id']}</guid>\n";
							echo "</item>\n\n";
						}
					?>
				</channel>
			</rss>
		<?php	
	}
}

class Events_RSS extends RSS {
	function Events_RSS(){
		$this->sql = 'SELECT id,title,DATE_FORMAT(date_start,"%a, %d %b %Y 00:00:01 GMT") AS pubDate,body as description FROM event WHERE date_end >= NOW() ORDER BY date_start LIMIT 10';
		$this->title = 'NO2ID Events RSS';
		$this->detailURL = 'http://www.no2id.net/news/events.php#';
		$this->description = 'Events organised by NO2ID - the UK Campagin against ID Cards and the Database State';
		$this->RSS();
	}
}

class Newsletter_RSS extends RSS {
	function Newsletter_RSS(){
		$this->sql = 'SELECT issue as id,CONCAT("NO2ID Newsletter ",issue) as title,DATE_FORMAT(release_date,"%a, %d %b %Y 00:00:01 GMT") AS pubDate,body as description FROM newsletter ORDER BY release_date DESC LIMIT 4';
		$this->title = 'NO2ID Newsletter RSS';
		$this->detailURL = 'http://www.no2id.net/news/newsletters/newsletter.php?issue=';
		$this->description = 'Newsletters of NO2ID - the UK Campagin against ID Cards and the Database State';
		$this->RSS();
	}
}

class PressRelease_RSS extends RSS {
	function PressRelease_RSS() {
		$this->sql = 'SELECT short_name as id,title,DATE_FORMAT(release_date,"%a, %d %b %Y 00:00:01 GMT") AS pubDate, body as description FROM press_release WHERE release_date <= now() ORDER BY release_date DESC LIMIT 5';
		$this->title = 'NO2ID Press Release RSS';
		$this->detailURL = 'http://www.no2id.net/news/pressRelease/release.php?name=';
		$this->description = 'The Latest Press Releases from NO2ID - the UK Campagin against ID Cards and the Database State';
		$this->RSS();
	}
}
?>
