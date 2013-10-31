<?php

$imgBaseUrl = 'http://www.juniper.net/shared/img/email/';

$page = $_GET{'page'};
$action = $_GET{'action'};

switch ( $page ) {

  case 'campusbranch1':
    $subjectline = 'How mobile is your workforce?';
    $heroImg = array( filename => 'campus_branch_edm_images/campusbranch_eDM_01_hero.jpg', width => 480, height => 330, alt => 'You can’t stop mobility.');
    $heroCellPadding = '0 0 10px 0';
    $heroUrl = '';

    $bodyHeadline = 'You can embrace BYOD without the worry.';
    $bodyHeadlineColor = '#565656';
    $bodyHeadlinePadding = '20px 10px 5px 30px';

    $bodyCopyColor = '#807f83';
    $bodyCopyPadding = '5px 30px 5px 30px';
    $bodyCopy1 = 'You can’t stop your workforce from going mobile. And why would you? Especially, with all of the productivity gains and associated cost-savings. If you’re looking to enable BYOD securely, you’ll find that <a href="" title="our video featuring Bob and Karl" style="color: orange; text-decoration: underline;">our video featuring Bob and Karl</a> will feel familiar. Watch it and realize just how simple it is to keep your business secure while reaping all the benefits of BYOD.';
    $bodyCopy2 = 'The escalating importance of workplace mobility means today’s Wi-Fi access network needs to be ubiquitous, enterprise-grade and high capacity. It must also be highly reliable. Discover all the concerns you’ll need to address when selecting the right Wi-Fi solution for your enterprise in Network World’s <a href="" title="2013 Wi-Fi Challenge white paper." style="color: orange; text-decoration: underline;">2013 Wi-Fi Challenge white paper.</a>';
    $bodyCopy3 = 'If you find yourself balancing BYOD and security, Gatepoint Research’s <a href="" title="Top Network Considerations for Enterprise Mobility and BYOD" style="color: orange; text-decoration: underline;">Top Network Considerations for Enterprise Mobility and BYOD</a> is a survey-based paper you can use to assess the costs and security issues involved in supporting the growing array of mobile devices in the workplace.';
    $bodyCopy4 = '';

    break;

    default:
    // code here
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?= $subjectline ?></title>

  <style type="text/css">
  /* Resets all body margins and padding to "0" for good measure. */
    body {
        margin:0;
        padding:0;
    }
  /* Resolves webkit padding issue. */
    table {
        border-spacing:0;
    }
  /* Outlook 07, 10 Padding issue fix */
    table td {border-collapse: collapse;}
  /* Prevent Webkit and Windows Mobile platforms from changing default font sizes.*/ 
    #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}


    /***************************************************
      MOBILE TARGETING
    ***************************************************/
    @media only screen and (max-device-width: 480px) {
      body, div, table { margin: 0 !important; padding: 0 !important; }

      table[id="backgroundTable"], table[id="insideWrapper"], table[id="contentCell"], table[id="footerCell"] { width: 100% !important; } /* down from 600px */

      td[id="juniperLogoCell"] {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }

      img[id="heroImg"] {
        width: 100%;
        height: auto;
      }

    }
  </style>
	

</head>
<body style="-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; background-color: #f4f4f4;">
<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
<table width="550" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" bgcolor="#f4f4f4" align="left">
	<tr>
		<td id="paddingLeft" valign="top"> 
    <!-- Tables are the most common way to format your email consistently. Set your table widths inside cells and in most cases reset cellpadding, cellspacing, and border to zero. Use nested tables as a way to space effectively in your message. -->
		<table id="insideWrapper" width="480" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
			<tr>
				<td colspan="3" valign="top" id="juniperLogoCell" style="padding: 21px 0px 10px 0px;"><a href="http://www.juniper.net/us/en/"><img id="juniperLogoImg" src="<?= $imgBaseUrl ?>campus_branch_edm_images/jun-logo.png" alt="Juniper Networks" title="" width="96" height="26" style="outline:none; text-decoration:none; -ms-interpolation-mode: bicubic; border: 0; display:block;" /></a></td>
			</tr>
			<tr>
			  <td colspan="3" valign="top" id="heroCell" style="padding: <?= $heroCellPadding ?>;"><a href="<?= $heroUrl ?>"><img id="heroImg" src="<?= $imgBaseUrl . $heroImg[filename] ?>" width="<?= $heroImg[width] ?>" height="<?= $heroImg[height] ?>" alt="<?= $heroImg[alt] ?>" style="outline:none; text-decoration:none; -ms-interpolation-mode: bicubic; border: 0; display:block;" /></a></td>
		  </tr>
			 
			<tr>
			  <td id="contentPadding" colspan="3" valign="top">
        	<table id="contentCell" bgcolor="#FFFFFF" width="480" border="0" cellspacing="0" cellpadding="0">
          
            <tr>
              <td width="23">&nbsp;</td>
              <td width="417" align="left" style="color: <?= $bodyHeadlineColor ?>;font-family: Arial,Helvetica,sans-serif;font-size:14px; font-weight: bold; padding: <?= $bodyHeadlinePadding ?>; text-align: left;"><?= $bodyHeadline ?></td>
              <td width="30">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td align="left" style="color: <?= $bodyCopyColor ?>;font-family: Arial,Helvetica,sans-serif;font-size:13px; padding: <?= $bodyCopyPadding ?>; text-align: left;"><?= $bodyCopy1 ?></td>
              <td>&nbsp;</td>
            </tr>
                           
            <tr>
              <td>&nbsp;</td>
              <td align="left" style="color: <?= $bodyCopyColor ?>;font-family: Arial,Helvetica,sans-serif;font-size:13px; padding: <?= $bodyCopyPadding ?>; text-align: left;"><?= $bodyCopy2 ?></td>
              <td>&nbsp;</td>
            </tr>
            
            <tr>
              <td>&nbsp;</td>
              <td align="left" style="color: <?= $bodyCopyColor ?>;font-family: Arial,Helvetica,sans-serif;font-size:13px; padding: <?= $bodyCopyPadding ?>; text-align: left;"><?= $bodyCopy3 ?></td>
              <td>&nbsp;</td>
            </tr>
            
             <tr>
              <td>&nbsp;</td>
              <td align="left" style="color: <?= $bodyCopyColor ?>;font-family: Arial,Helvetica,sans-serif;font-size:12px; padding:  <?= $bodyCopyPadding ?>; text-align: left;"><?= $bodyCopy4 ?></td>
              <td>&nbsp;</td>
            </tr>
          
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
               <td colspan="3" style="border-bottom: 1px solid #c2c2c2;">&nbsp;</td>
            </tr>
            
          </table>
        </td>
		  </tr>
			<tr>
			  <td colspan="3" valign="top">
          
          <table id="footerCell" width="480" bgcolor="#f4f4f4" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="42">&nbsp;</td>
                <td  width="385" style="color:#696868;font-family: Arial,Helvetica,sans-serif;font-size:9px; font-weight: normal; padding: 25px 0px 5px 0px; text-align: left;">Juniper Networks, 1194 North Mathilda Avenue, Sunnyvale, CA 94089-1206 USA <br />Additional information can be found at <a href="http://www.juniper.net/" target="_blank" title="Juniper Networks" style="color: #5d87a1; text-decoration: underline;">www.juniper.net</a>. </td>
                <td width="45">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="385" style="color:#696868;font-family: Arial,Helvetica,sans-serif;font-size:9px; padding: 5px 0px 5px 0px; text-align: left;">Copyright © 2013 Juniper Networks, Inc. All rights reserved. Juniper Networks, the Juniper Networks logo, Junos, NetScreen, and ScreenOS are registered trademarks of Juniper Networks, Inc. in the United States and other countries. Junos™ is a trademark of Juniper Networks, Inc. All other trademarks, service marks, registered trademarks, or registered service marks are the property of their respective owners.</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td width="385" style="color:#696868;font-family: Arial,Helvetica,sans-serif;font-size:9px; padding: 5px 0px 10px 0px; text-align: left;">Juniper Networks may collect personal information from our customers for a variety of business purposes, such as sales, marketing and customer support. We may share this information with our affiliates, resellers, distributors and third party service providers, which may be located in other countries, as appropriate to achieve such business purposes. We are committed to protect personal information in accordance with applicable laws. For more information, please refer to our <a href="http://www.juniper.net/us/en/privacy-policy/" target="_blank" title="Privacy Policy" style="color: #5d87a1; text-decoration: underline;">privacy policy</a>.</td>
                <td>&nbsp;</td>
              </tr>
            
              <tr>
                <td colspan="3" style="padding: 10px 0px 0px 0px;">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3" style="padding: 10px 0px 0px 0px;">&nbsp;</td>
              </tr>
          </table>
          
        </td>
		  </tr>
		</table>
		<!-- End table -->
		</td>
	</tr>
</table>  
<!-- End of wrapper table -->
</body>
</html>
