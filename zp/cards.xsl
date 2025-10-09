<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<body dir="rtl" style="direction:rtl; text-align:center">

  <table border="1" style="text-align:center">
   <tr style="background-color:black;color:white">
    <th>نوع</th>
    <th>شماره کارت</th>
    <th>CVV2</th>
    <th>انقضا</th>
    <th>صاحب</th>
   </tr>
    <xsl:for-each select="CARDS/CARD">
   <tr>
    <td><xsl:value-of select="TYPE"/></td>
    <td><xsl:value-of select="NUM"/></td>
    <td><xsl:value-of select="CVV"/></td>
    <td><xsl:value-of select="EXP"/></td>
    <td><xsl:value-of select="NAME"/></td>
   </tr>
    </xsl:for-each>
  </table>
</body>
</html>