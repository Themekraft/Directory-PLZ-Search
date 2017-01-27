<?php

// Search the directory
function tk_ud_directory_search_map_de( $atts ) {

	ob_start();
	?>
	<script type="text/javascript">
		function ReplaceImage(filename)
		{
			document.getElementById("deMap").src = filename;
		}
	</script>
	<div class="panel">
	<div id="mapDiv">

		<img name="deMap" src="<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif" width="302" height="406" border="0" id="deMap" usemap="#m_deMap" alt="" />
		<map name="m_deMap" id="m_deMap">

			<area shape="poly" coords="107,28x6,111,286,113,283,116,283,117,281,117,280,113,278,114,277,120,276,122,277,124,276,125,278,125,280,125,280,127,279,128,280,129,279,131,282,132,284,132,287,133,286,134,288,134,290,136,291,137,291,139,288,140,289,140,293,142,295,140,299,141,302,142,305,145,309,144,311,148,314,150,315,151,319,151,327,153,331,152,332,150,333,149,333,147,332,146,332,146,333,147,336,147,339,142,344,141,343,138,344,137,347,136,348,141,361,142,365,140,370,141,374,141,377,140,378,141,381,141,384,140,385,137,385,134,386,131,385,127,388,123,389,122,391,109,385,108,385,107,385,102,384,100,385,98,385,97,383,96,382,93,384,92,383,91,383,93,380,88,378,86,379,82,382,82,384,85,386,88,385,89,386,89,388,88,388,85,387,84,388,85,389,82,390,79,389,76,387,73,387,70,390,65,390,63,388,61,389,59,391,56,390,55,390,56,388,55,388,54,388,52,385,51,382,51,380,53,375,52,374,53,372,53,371,55,369,54,366,53,363,55,357,58,353,58,351,60,350,60,345,61,343,61,341,62,339,63,335,67,329,67,328,69,328,71,326,72,325,76,317,80,313,83,304,85,300,85,299,86,297,86,294,85,292,84,289,84,286,84,285,85,285,89,288,90,287,89,285,90,284,92,284,93,287,95,289,97,289,99,290,97,293,98,294,100,294,101,292,101,290,107,290,107,286"
			      href="index.php?page=suche&amp;land=1" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap1.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="16,289,16,286,22,286,29,285,34,282,36,282,42,284,46,285,47,289,45,292,46,295,48,295,49,297,48,300,46,303,48,306,45,309,40,307,38,309,37,305,34,303,31,303,31,305,31,306,28,306,27,304,27,303,26,302,22,296,23,295,21,292,21,292,19,290,16,289"
			      href="index.php?page=suche&amp;land=2" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap2.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="48,306,46,303,48,300,49,297,48,295,46,295,45,292,47,289,46,285,42,284,36,282,34,282,29,285,22,286,16,286,15,284,17,282,17,280,20,278,21,274,20,272,18,272,16,270,15,270,13,268,12,265,10,264,9,259,9,257,9,254,10,253,11,251,11,250,11,249,14,248,15,246,18,245,17,242,19,242,21,244,23,243,25,242,26,244,28,244,29,245,31,244,30,239,31,237,34,238,35,237,35,235,35,234,40,232,43,232,45,230,47,231,50,230,51,226,54,226,61,223,61,221,64,219,64,217,65,215,67,216,66,217,67,218,70,220,71,221,70,223,73,228,74,227,75,228,75,229,76,234,74,236,73,236,71,238,71,241,70,242,71,244,74,247,74,250,72,250,71,252,69,252,67,255,68,256,67,258,66,257,63,260,64,261,67,264,71,264,78,262,81,266,82,269,83,271,83,273,86,277,82,280,84,285,84,286,84,289,85,292,86,294,86,297,85,299,85,300,83,304,80,313,76,317,73,316,68,314,67,313,64,313,63,312,61,313,58,313,57,312,54,311,52,309,53,307,50,306,48,306"
			      href="index.php?page=suche&amp;land=3" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap3.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="7,222,7,220,7,218,9,217,9,215,7,212,7,211,3,210,3,207,4,206,5,207,5,207,11,203,12,202,13,201,12,200,11,201,10,200,11,196,15,190,15,188,15,185,11,178,12,176,10,175,9,174,10,172,8,171,9,169,8,167,11,165,13,166,14,166,14,165,13,164,14,163,17,165,20,167,23,165,24,166,30,163,32,164,34,162,36,160,31,156,32,155,34,153,36,153,38,150,40,150,41,148,43,146,50,145,57,141,60,139,60,138,61,135,62,136,65,139,69,140,72,144,71,145,70,150,73,151,73,152,72,154,69,155,70,157,72,158,74,156,79,156,82,153,84,154,88,151,87,149,88,146,87,142,83,139,83,137,87,137,87,136,89,134,92,133,94,134,96,136,95,139,97,140,102,140,104,139,105,136,107,135,109,136,108,141,105,143,104,144,104,146,106,148,106,150,104,151,105,153,108,154,110,157,110,159,111,160,110,161,112,162,113,162,113,164,113,164,115,166,115,167,117,168,118,168,118,172,116,175,116,179,115,182,115,183,109,189,107,189,106,187,104,186,101,188,101,189,102,191,102,192,97,193,94,193,90,198,91,199,95,199,96,201,96,203,94,206,93,207,89,208,89,210,88,213,86,218,83,219,81,218,80,219,76,223,77,226,75,228,74,227,73,228,70,223,71,221,70,220,67,218,66,217,67,216,65,215,64,217,64,219,61,221,61,223,54,226,51,226,50,230,47,231,45,230,43,232,40,232,35,234,35,235,35,237,34,238,31,237,30,239,31,244,29,245,28,244,26,244,25,242,23,243,21,244,19,242,17,242,17,242,18,239,16,237,17,237,15,236,13,236,11,233,14,230,14,230,12,229,11,227,10,224,7,224,7,222"
			      href="index.php?page=suche&amp;land=4" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap4.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="107,286,105,284,106,283,106,281,108,279,108,277,106,273,105,273,104,268,104,264,103,261,104,259,106,258,108,258,109,258,110,257,113,257,118,259,120,258,121,256,119,254,120,252,125,252,126,250,127,249,128,245,130,243,132,244,135,242,138,236,138,234,139,232,138,230,136,230,133,231,132,231,133,228,134,222,137,220,138,219,135,216,138,214,137,213,138,212,141,212,143,211,141,209,141,206,143,206,143,205,142,202,140,202,138,200,138,198,134,197,133,193,130,192,127,194,128,196,128,197,127,197,126,196,124,195,122,194,122,193,124,191,125,189,123,186,123,184,126,182,124,180,121,180,119,178,116,179,115,182,115,183,109,189,107,189,106,187,104,186,101,188,101,189,102,191,102,192,97,193,94,193,90,198,91,199,95,199,96,201,96,203,94,206,93,207,89,208,89,210,88,213,86,218,83,219,81,218,80,219,76,223,77,226,75,228,75,229,76,234,74,236,73,236,71,238,71,241,70,242,71,244,74,247,74,250,72,250,71,252,69,252,67,255,68,256,67,258,66,257,63,260,64,261,67,264,71,264,78,262,81,266,82,269,83,271,83,273,86,277,82,280,84,285,85,285,89,288,90,287,89,285,90,284,92,284,93,287,95,289,97,289,99,290,97,293,98,294,100,294,101,292,101,290,107,290,107,286"
			      href="index.php?page=suche&amp;land=5" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap5.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="122,391,123,389,127,388,131,385,134,386,137,385,140,385,141,384,141,381,140,378,141,377,141,374,140,370,142,365,141,361,136,348,137,347,138,344,141,343,142,344,147,339,147,336,146,333,146,332,147,332,149,333,150,333,152,332,153,331,151,327,151,319,150,315,148,314,144,311,145,309,142,305,141,302,140,299,142,295,140,293,140,289,139,288,137,291,136,291,134,290,134,288,133,286,132,287,132,284,131,282,129,279,128,280,127,279,125,280,125,280,125,278,124,276,122,277,120,276,114,277,113,278,117,280,117,281,116,283,113,283,111,286,107,286,105,284,106,283,106,281,108,279,108,277,106,273,105,273,104,268,104,264,103,261,104,259,106,258,108,258,109,258,110,257,113,257,118,259,120,258,121,256,119,254,120,252,125,252,126,250,127,249,128,245,130,243,132,244,135,242,138,236,140,235,141,236,143,235,147,240,149,243,151,244,154,246,156,248,156,251,158,253,160,253,161,252,164,251,164,250,160,248,159,246,160,245,161,245,163,244,167,244,168,246,170,245,173,245,173,248,173,248,175,249,177,249,178,248,178,241,177,239,181,236,183,237,183,240,186,243,191,243,196,242,197,242,199,241,202,245,205,247,206,249,205,250,209,254,209,257,213,261,217,263,218,263,219,266,220,267,220,268,219,271,218,272,218,273,216,276,220,280,220,282,222,283,223,286,225,287,225,291,228,293,230,296,235,296,238,299,238,300,243,305,243,306,245,307,248,308,251,312,254,315,254,315,255,314,259,315,261,318,263,319,266,324,265,326,267,328,266,332,264,335,263,337,261,336,259,335,256,334,253,336,254,338,253,340,253,341,253,345,250,348,244,350,240,351,238,353,236,355,231,359,234,364,236,367,237,367,240,372,237,380,238,380,242,380,244,384,242,387,243,391,242,392,239,392,233,388,234,385,232,382,230,382,224,385,221,382,218,382,215,382,214,382,215,380,214,380,212,382,213,385,213,386,209,386,201,387,200,388,194,388,192,389,191,392,188,392,186,393,186,395,183,396,181,398,180,398,179,396,176,398,170,398,171,396,170,395,167,394,167,394,168,393,168,392,166,391,165,392,157,390,156,391,154,391,153,389,152,390,152,393,153,395,153,397,148,403,144,405,143,405,143,404,144,403,144,402,145,400,144,399,141,401,140,400,141,397,138,394,137,394,135,391,131,391,130,389,129,389,127,391,122,391"
			      href="index.php?page=suche&amp;land=6" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap6.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="209,207,212,206,213,207,215,207,217,208,218,210,219,210,221,212,221,214,219,214,215,219,211,224,213,226,212,228,207,229,207,231,205,233,204,233,202,230,202,230,199,232,200,238,199,241,197,242,196,242,191,243,186,243,183,240,183,237,181,236,177,239,178,241,178,248,177,249,175,249,173,248,173,248,173,245,170,245,168,246,167,244,163,244,161,245,160,245,159,246,160,248,164,250,164,251,161,252,160,253,158,253,156,251,156,248,154,246,151,244,149,243,147,240,143,235,141,236,140,235,138,236,138,234,139,232,138,230,136,230,133,231,132,231,133,228,134,222,137,220,138,219,135,216,138,214,137,213,138,212,141,212,143,211,141,209,141,206,143,206,143,205,142,202,140,202,138,200,138,198,134,197,133,193,137,191,141,190,146,186,148,183,149,181,153,183,155,182,157,182,157,181,158,179,158,176,161,177,161,178,163,180,164,182,165,185,167,188,166,188,163,187,162,188,162,188,165,190,170,190,172,191,175,192,177,193,176,195,170,197,172,199,173,201,174,204,176,204,183,203,183,205,186,206,195,207,196,207,196,208,197,211,200,211,202,213,205,212,207,212,210,211,208,209,209,207"
			      href="index.php?page=suche&amp;land=7" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap7.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="205,247,207,246,208,247,209,249,210,250,210,251,212,254,213,254,213,250,218,243,221,242,225,242,226,240,228,239,232,241,234,239,235,236,238,236,241,235,242,232,243,231,244,232,245,231,246,228,248,230,251,228,252,224,256,223,257,223,260,223,263,222,263,220,265,218,268,218,274,214,277,213,279,212,278,211,275,209,274,208,275,205,279,207,281,206,285,208,285,212,286,211,287,212,286,213,287,215,291,216,292,215,294,213,293,213,293,213,296,204,298,193,296,189,295,183,289,180,287,179,287,177,287,176,284,177,283,176,280,178,278,178,275,180,272,180,270,179,268,181,269,183,268,184,264,182,258,184,257,186,258,190,257,191,255,192,248,190,245,188,240,189,236,188,228,187,223,187,220,189,215,188,212,189,209,191,208,194,209,199,207,204,208,205,209,207,212,206,213,207,215,207,217,208,218,210,219,210,221,212,221,214,219,214,215,219,211,224,213,226,212,228,207,229,207,231,205,233,204,233,202,230,202,230,199,232,200,238,199,241,202,245,205,247"
			      href="index.php?page=suche&amp;land=8" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap8.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="185,107,187,107,190,109,193,110,194,112,198,115,200,117,204,119,204,122,208,126,208,131,212,134,212,136,210,138,214,142,215,143,214,145,215,148,212,151,208,152,208,153,212,157,217,159,226,158,228,158,235,163,239,164,240,165,247,166,249,171,244,177,248,180,253,181,257,181,258,183,258,184,257,186,258,190,257,191,255,192,248,190,245,188,240,189,236,188,228,187,223,187,220,189,215,188,212,189,209,191,208,194,209,199,207,204,208,205,209,207,208,209,210,211,207,212,205,212,202,213,200,211,197,211,196,208,196,207,195,207,186,206,183,205,183,203,176,204,174,204,173,201,172,199,170,197,176,195,177,193,175,192,172,191,170,190,165,190,162,188,162,188,163,187,166,188,167,188,165,185,164,182,163,180,161,178,161,177,158,176,156,174,154,169,156,165,155,163,156,162,154,161,154,160,155,160,157,158,164,157,167,156,166,155,169,153,168,150,170,148,168,146,168,143,169,142,166,136,167,135,165,131,166,128,166,128,164,127,160,121,159,118,160,117,164,116,167,113,171,113,175,114,182,111,182,109,185,107"
			      href="index.php?page=suche&amp;land=9" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap9.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="241,138,240,138,238,137,235,138,234,137,234,135,235,133,235,128,235,127,236,127,237,124,238,124,241,126,241,126,244,122,245,125,246,127,247,128,249,128,250,129,250,132,252,133,253,134,251,139,251,138,249,137,247,136,244,136,244,138,241,138,237,164,239,164,240,165,247,166,249,171,244,177,248,180,253,181,257,181,258,183,258,184,264,182,268,184,269,183,268,181,270,179,272,180,275,180,278,178,280,178,283,176,284,177,287,176,288,173,285,170,284,168,282,165,286,159,285,157,286,152,284,149,284,147,284,146,284,142,280,141,278,134,279,133,281,130,280,129,280,125,278,123,267,114,265,114,265,113,265,111,265,106,266,105,271,101,271,95,268,94,268,91,269,87,268,84,263,82,260,82,255,81,250,82,246,85,244,90,239,92,235,92,231,94,235,98,234,100,224,97,220,95,213,94,210,92,204,89,201,89,199,88,197,90,197,91,195,94,191,97,188,97,183,99,180,102,176,103,177,105,181,104,183,105,184,106,185,107,187,107,190,109,193,110,194,112,198,115,200,117,204,119,204,122,208,126,208,131,212,134,212,136,210,138,214,142,215,143,214,145,215,148,212,151,208,152,208,153,212,157,217,159,226,158,228,158,235,163,237,164,241,138"
			      href="index.php?page=suche&amp;land=10" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap10.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="145,86,143,86,142,88,140,87,138,85,135,87,133,87,133,85,131,86,128,81,127,80,128,76,129,76,130,77,133,75,135,75,139,72,139,71,141,71,141,73,142,76,141,80,142,82,145,85,145,86"
			      href="index.php?page=suche&amp;land=11" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap11.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="98,108,101,107,103,106,104,101,103,100,101,101,97,98,95,98,90,96,90,98,93,100,94,102,96,106,97,106,98,108,96,116,90,134,89,134,87,136,87,137,83,137,83,139,87,142,88,146,87,149,88,151,84,154,82,153,79,156,74,156,72,158,70,157,69,155,72,154,73,152,73,151,70,150,71,145,72,144,69,140,65,139,62,136,61,135,60,138,60,139,57,141,50,145,43,146,43,144,44,141,43,138,41,135,39,136,36,135,34,135,33,133,33,130,34,129,33,127,34,125,38,125,41,126,43,126,44,122,45,114,49,108,49,101,49,100,50,96,49,95,50,93,50,90,49,90,45,89,44,87,45,81,48,80,46,77,52,72,58,72,64,72,72,71,75,71,76,77,79,80,76,83,77,85,79,85,81,87,84,83,84,82,81,80,82,78,83,76,85,77,88,79,90,80,90,80,91,82,90,86,93,85,94,82,92,78,90,77,89,73,92,64,94,62,96,63,99,65,106,64,109,63,112,64,115,66,120,75,124,78,127,80,128,81,131,86,133,85,133,87,135,87,138,85,140,87,142,88,143,86,145,86,150,88,155,89,157,90,160,94,169,100,170,99,174,101,176,103,176,103,177,105,181,104,183,105,184,106,185,107,182,109,182,111,175,114,171,113,167,113,164,116,160,117,159,118,160,121,164,127,166,128,166,128,165,131,167,135,166,136,169,142,168,143,168,146,170,148,168,150,169,153,166,155,167,156,164,157,157,158,155,160,154,160,154,161,156,162,155,163,156,165,154,169,156,174,158,176,158,179,157,181,157,182,155,182,153,183,149,181,148,183,146,186,141,190,137,191,133,193,130,192,127,194,128,196,128,197,127,197,126,196,124,195,122,194,122,193,124,191,125,189,123,186,123,184,126,182,124,180,121,180,119,178,116,179,116,175,118,172,118,168,117,168,115,167,115,166,113,164,113,164,113,162,112,162,110,161,111,160,110,159,110,157,108,154,105,153,104,151,106,150,106,148,104,146,104,144,105,143,108,141,109,136,107,135,105,136,104,139,102,140,97,140,95,139,96,136,94,134,92,133,90,134,98,108"
			      href="index.php?page=suche&amp;land=12" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap12.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="271,95,268,94,268,91,269,87,268,84,263,82,260,82,255,81,250,82,246,85,244,90,239,92,235,92,231,94,235,98,234,100,224,97,220,95,213,94,210,92,204,89,201,89,199,88,197,90,197,91,195,94,191,97,188,97,183,99,180,102,176,103,176,103,174,101,170,99,169,100,160,94,157,90,155,89,155,86,157,84,160,82,161,79,164,78,164,73,159,69,159,63,160,62,162,60,162,58,163,58,169,56,171,56,173,58,173,59,174,59,176,59,179,60,180,59,181,55,184,53,184,51,185,49,187,48,195,47,197,46,199,47,199,45,206,40,210,30,218,32,222,32,221,33,216,33,215,33,214,33,212,35,209,35,206,40,208,42,209,39,213,36,214,36,216,34,220,35,221,36,224,32,225,32,228,35,227,36,230,40,234,42,236,45,238,45,241,49,241,49,242,47,246,45,249,47,250,53,253,57,252,61,253,62,259,66,264,66,266,66,268,74,268,77,270,81,271,85,272,89,273,90,271,95"
			      href="index.php?page=suche&amp;land=13" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap13.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />


			<area shape="poly" coords="109,63,107,62,103,61,100,57,101,55,104,55,105,54,104,50,104,49,101,50,99,48,100,45,100,43,103,41,103,41,101,41,99,42,97,41,95,42,93,39,95,38,94,36,97,35,101,35,105,32,105,30,97,19,94,12,95,11,89,11,88,12,87,12,85,11,84,14,84,15,84,15,83,14,84,11,84,10,86,5,87,2,88,4,87,6,87,9,89,11,95,10,95,9,97,10,101,9,106,10,111,12,113,14,116,14,118,13,119,14,121,12,123,13,127,15,130,17,131,17,132,16,133,16,135,20,133,21,136,22,136,26,135,29,131,32,133,33,138,31,141,33,141,36,139,38,140,39,142,36,143,34,146,34,158,40,160,39,163,37,167,36,168,36,169,36,167,39,168,45,166,47,161,52,159,52,158,54,159,56,162,57,162,58,162,60,160,62,159,63,159,69,164,73,164,78,161,79,160,82,157,84,155,86,155,89,150,88,145,86,145,85,142,82,141,80,142,76,141,73,141,71,139,71,139,72,135,75,133,75,130,77,129,76,128,76,127,80,124,78,120,75,115,66,112,64,109,63"
			      href="index.php?page=suche&amp;land=14" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap14.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="101,101,97,98,95,98,90,96,90,98,93,100,94,102,96,106,97,106,99,107,101,107,103,106,104,101,103,100,101,101"
			      href="index.php?page=suche&amp;land=15" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap15.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />

			<area shape="poly" coords="241,126,244,122,245,125,246,127,247,128,249,128,250,129,250,132,252,133,253,134,251,139,251,138,249,137,247,136,244,136,243,138,242,138,238,137,235,138,234,137,234,135,235,133,235,128,235,127,236,127,237,124,238,124,241,126"
			      href="index.php?page=suche&amp;land=16" alt=""
			      onmouseover="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap16.gif')" onmouseout="ReplaceImage('<?php echo TK_UD_PLZ_INSTALL_URL  ?>assets/map/deMap<?php if ($land) echo $_REQUEST['land'];?>.gif')" />
		</map>
	</div>
	<?php

	$tmp = ob_get_clean();

	return $tmp;
}
add_shortcode( 'directory_search_map_de', 'tk_ud_directory_search_map_de' );