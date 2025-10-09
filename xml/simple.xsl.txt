<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <body style="font-family:vazir;font-size:13pt;background-color:silver;text-align:right;margin-right:0">
    <xsl:for-each select="config/vpn">
      <div style="background-color:black;color:gold;padding:4px;font-size:15px">
        <span style="font-weight:bold"><xsl:value-of select="name"/> - </span>
        <xsl:value-of select="cont"/>
      </div>
      <div style="margin-right:20px;margin-bottom:1em;font-size:12px">
        <li>
        	<p>کد:</p>
        	<xsl:value-of select="id"/>
        </li>
        <li>
        	<p>برنامه:</p>
        	<xsl:value-of select="app"/>
        </li>
        <li>
        	<p>پروتکل:</p>
        	<xsl:value-of select="protocol"/>
        </li>
        <li>
        	<p>تعداد سرور:</p>
        	<xsl:value-of select="server"/>
        </li>
        <li>
        	<p>لینک</p>
        	<xsl:value-of select="link"/>
        </li>
      </div>
    </xsl:for-each>
  </body>
</html>