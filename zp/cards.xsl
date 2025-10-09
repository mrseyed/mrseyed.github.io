<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body>
 <xsl:for-each select="CARDS/CARD">
  <kadr>
   <h2>نوع</h2>
   <p><xsl:value-of select="TYPE"/></p>
   <ul>
    <li>
     <span>شماره کارت:</span>
     <xsl:value-of select="NUM"/>
    </li>
    <li>
     <span>CVV2</span>
     <xsl:value-of select="CVV"/>
    </li>
    <li>
     <span>انقضا</span>
     <xsl:value-of select="EXP"/>
    </li>
    <li>
     <span>صاحب کارت</span>
     <xsl:value-of select="NAME"/>
    </li>
   </ul>
   <hr>
  </kadr>
 </xsl:for-each>
</body>
</html>