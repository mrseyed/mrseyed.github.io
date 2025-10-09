<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<body dir="rtl" style="direction:rtl; text-align:center">
 <xsl:for-each select="CARDS/CARD">
  <div style="width:60%; border:3px double navy; border-radius:15px 3px 15px 3px;background-color:lightgreen;">
   <h2>نوع</h2>
   <xsl:value-of select="TYPE"/>
   <ul>
    <li>
     <p>شماره کارت:</p>
     <xsl:value-of select="NUM"/>
    </li>
    <li>
     <p>CVV2</p>
     <xsl:value-of select="CVV"/>
    </li>
    <li>
     <p>انقضا</p>
     <xsl:value-of select="EXP"/>
    </li>
    <li>
     <p>صاحب کارت</p>
     <xsl:value-of select="NAME"/>
    </li>
   </ul>
   <hr></hr>
  </div>
 </xsl:for-each>
</body>
</html>