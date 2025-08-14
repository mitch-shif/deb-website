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
          <td width="550" class="pageName"><div align="center"><strong>Shibori Summer Scarves Now Available</strong></div></td>
		</tr>
		<tr>
          <td valign="top" class="bodyText">
            
			
			<p align="center"><br />
		      <span style="font-size: 12px; font-weight: bold">Each scarf is a one of a kind creation.  The techniques used to create them date back to 8th century Japan, where  there is a rich tradition in resist dyeing of textiles, for kimonos. Arashi shibori is created when the silk is wrapped around a pole, dyed, and over dyed, until the desired colors have been achieved. The scarves are 100% silk crepe de chine 12 mm. which has a beautiful drape, and sheen.</span></p>
			<div align="center"><img src="images/scarf/IMG_2146.jpg" name="EmilyPicture" width="392" height="291" border="1" id="EmilyPicture" />		    </div>
			<p align="center" style="font-size: 12px; font-weight: bold">The scarves come in different lengths. The 54"x8" is very popular for summer. It is a versatile size to wear as a head band, or neck scarf, and a hip or waist tie for an accent of color. The 11"x60" scarf can be sumptuously wrapped around your neck, or waist.</p>
			<p align="center" style="font-size: 12px; font-weight: bold"> Commissions welcome - custom dyed fabric for your home or wardrobe.</p>
			<p align="center" style="font-size: 12px; font-weight: bold"><a href="email.php">Contact me</a> for more info.			</p>
			<p align="center" style="font-size: 12px"><span style="font-weight: bold">	Scarves may also be purchased at:<br />
		Angelica's Muse
		19 Market Street, Portsmouth, NH<br />
		Ablaze
		113 Water Street	
		Exeter, NH </span>&nbsp;</p>
			<div align="center">
			  <script language="JavaScript" type="text/javascript">
RunSlideShow("EmilyPicture","images/scarf/IMG_2146.jpg;images/scarf/IMG_2146.jpg;images/scarf/IMG_2148.jpg;images/scarf/close_up_shiboris.jpg;images/scarf/detail_shibori_scarvess.jpg;images/scarf/five_scarvess.jpg;images/scarf/four_scarvess.jpg;images/scarf/scarves_details.jpg;images/scarf/IMG_2151.jpg;images/IMG_2162s.jpg;images/new_scarvess.jpg",5);
            </script>
          </div>


			
			 </p>
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
