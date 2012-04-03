<?php

require_once('../inc/config.php');

$page_title = 'local groups';
$body_extra = 'onload="showMap();" onunload="GUnload()"'; // onload stuff for google maps
// Need to include Google Maps javascript in the head.
$scripts = "<script src=\"http://maps.google.com/maps?file=api&amp;v=2&amp;key="
                . htmlspecialchars(CONFIG_GOOGLE_MAPS_API_KEY)
                . "\" type=\"text/javascript\"></script>";
require_once('../inc/pageHead.php');
require_once('../inc/dbConn.php');?>
<h1>NO2ID Local Groups</h1>
<p>Opposition to identity cards exists all around the UK.  Groups of people have come together locally under
the NO2ID banner to campaign against this dangerous legislation.  To get more involved, please contact your
nearest group.  If there isn't one near you, consider starting one!  For more information on this please
<a href="mailto:local.groups&#x40;no2id.net">contact us</a>.</p>
<div id="map" style="width:90%; height:500px; border:solid gray 1px;">
<script type="text/javascript">
    //<![CDATA[
    function showMap()
        {
        if (GBrowserIsCompatible()) {
			var map = new GMap2(document.getElementById("map"));
			
			map.addControl(new GSmallMapControl());
			map.addControl(new GMapTypeControl());
			
			var location = new GLatLng(54.188155,-4.570312)
			
			map.setCenter(location, 5);
			
			map.setMapType(G_HYBRID_MAP);
			var icon = new GIcon();
			icon.image = "/localgroups/sm_pointer.png";
			icon.shadow = "/localgroups/sm_pointer_shadow.png";
			icon.iconSize = new GSize(12, 20);
			icon.shadowSize = new GSize(22, 20);
			icon.iconAnchor = new GPoint(6, 20);
			icon.infoWindowAnchor = new GPoint(5, 1);
			// now the markers
			<?php
			$markers_sql = "SELECT * FROM no2id.localgroups";
			$markers_q = mysql_query($markers_sql);
			while($marker = mysql_fetch_assoc($markers_q)){
				if ($marker['latlng'] != ''){
					$id = $marker['id'];
					$name = ucwords(strtolower(htmlspecialchars($marker['name'])));
					$contact = $marker['contact_name'];
					$email = preg_replace('/@/', '&#x40;', $marker['contact_email']);
					$latlng = $marker['latlng'];
					if ($marker['contact_tel'] != ''){
						$tel = $marker['contact_tel'];
					}
					if ($marker['website'] != ''){
						$website = $marker['website'];
					}
					if ($marker['groupList'] != ''){
						$list = $marker['groupList'];
					}
					// now start greating the javascript strings
					echo "var group_$id = new GMarker(new GLatLng($latlng));\n\t\t\t";
					echo "map.addOverlay(group_$id, icon);\n\t\t\t";
					
					// now add a popup giving details for each group
					// build string
					$labelString =  "GEvent.addListener(group_$id, \"click\", function() {\n\t\t\t\t";
					$labelString .=	"group_$id.openInfoWindowHtml(\"<strong>NO2ID $name</strong><br/>Contact: $contact<br/>Email: <a href=\\\"mailto:$email\\\">$email</a>";
					if (isset($tel)){
						$labelString .= "<br/>Tel: $tel";
					}
					if (isset($website)){
						$labelString .="<br/><a href=\\\"$website\\\">NO2ID $name Website</a>";
					}
					if (isset($list)){
						$labelString .= "<br/>Mailing list: <a href=\\\"mailto:$list\\\">$list</a>";
					}
					$labelString .= "\")});\n\t\t\t";
					echo $labelString;
					
					// strip all the existing strings - this would work better if I'd made this a
					// function, but the JavaScript PHP mix is just too evil!
					unset($tel);unset($website);unset($list);
				}
			}
			?>			
          }
        }
    //]]>
    </script>
</div>

<!-- don't change anything after this -->
<?php require_once('../inc/pageFooter.php');?>
