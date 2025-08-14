<?php 
include("BLOCKS/header.php");
?>
 <tr>

<?php 
include("BLOCKS/leftmenu.php");
?>
<script type="text/javascript">
// Browser Slide-Show script.
// With image cross fade effect for those browsers that support it.
// Script copyright (c) 2004-2008 www.cryer.co.uk.
// Script is free to use provided this copyright header is included.
var slideCache = new Array();
function RunSlideShow(pictureName,imageFiles,displaySecs)
{
  var imageSeparator = imageFiles.indexOf(";");
  var nextImage = imageFiles.substring(0,imageSeparator);
  var picture = document.getElementById(pictureName);
  if (picture.filters)
  {
    picture.style.filter="blendTrans(duration=2)";
    picture.filters.blendTrans.Apply();
  }
  picture.src = nextImage;
  if (picture.filters)
  {
    picture.filters.blendTrans.Play();
  }
  var futureImages= imageFiles.substring(imageSeparator+1,imageFiles.length)
    + ';' + nextImage;
  setTimeout("RunSlideShow('"+pictureName+"','"+futureImages+"',"+displaySecs+")",
    displaySecs*1000);
  // Cache the next image to improve performance.
  imageSeparator = futureImages.indexOf(";");
  nextImage = futureImages.substring(0,imageSeparator);
  if (slideCache[nextImage] == null) {
    slideCache[nextImage] = new Image;
    slideCache[nextImage].src = nextImage;
  }
}
</script>

    <td width="30"><img src="mm_spacer.gif" alt="" width="44" height="49" border="0" /></td>
    <td colspan="1" valign="top"><img src="mm_spacer.gif" alt="" width="305" height="1" border="0" /><br />
	&nbsp;<br />
	&nbsp;<br />
	<table width="550" height="230" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="550" class="pageName"><div align="center">Welcome to My Site</div></td>
		</tr>
		<tr>
          <td valign="top" class="bodyText">
            
			
			<p>I create art works and projects that challenge observers and   participants to understand the impact of human consumption and development on   natural eco systems and environments.  Although much of my work is related to fiber, I was an interdisciplinary major at <a href="http://www.nhia.edu/">The New Hampshire Institute Art</a>, where I graduated summa cum laude with a Bachelor of Fine Arts degree.  I like to incorporate various mediums to my work as each project unveils itself to me.  I am interested in working with 2 and 3D form.</p>
            <p>My work is nature based. It may reflect on the  miracle of the smallest thing in our environment, such as a seed.&nbsp; At other times it may take a look at the  natural cycle of life, growth, and death.&nbsp;  My work speaks of the beauty and complexity of the natural world.&nbsp; By creating this type of art I hope I can  help connect people with nature, and empower them to become active in trying to  help make positive environmental choices.</p>
            <p align="center"><strong><span class="pageName"><a href="shibori.php">Shibori Summer Scarves Now Available</a> </span></strong></p>
            <p align="center">


<a href="shibori.php">			
			<div align="center"><img src="images/scarf/IMG_2146.jpg" name="EmilyPicture" width="462" height="344" border="1" id="EmilyPicture">
 <script language="JavaScript" type="text/javascript">
RunSlideShow("EmilyPicture","images/scarf/IMG_2146.jpg;images/scarf/IMG_2146.jpg;images/scarf/IMG_2148.jpg;images/scarf/close_up_shiboris.jpg;images/scarf/detail_shibori_scarvess.jpg;images/scarf/five_scarvess.jpg;images/scarf/four_scarvess.jpg;images/scarf/scarves_details.jpg;images/scarf/IMG_2151.jpg;images/IMG_2162s.jpg;images/new_scarvess.jpg",5);
            </script>
			
          </div>
</a>

			
			&nbsp;</p>
            <p>&nbsp;</p></td>
        </tr>
      </table>
	<br />
	&nbsp;<br />	</td>
    <td width="30"><img src="mm_spacer.gif" alt="" width="50" height="1" border="0" /></td>
<?php 
include("BLOCKS/rightmenu.php");
?>
	<td width="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
