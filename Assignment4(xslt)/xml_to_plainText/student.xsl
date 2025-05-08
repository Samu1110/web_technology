<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="text"/>
    
    <xsl:template match="/">
        <xsl:text>===== Student Records =====&#10;&#10;</xsl:text>
        
        <xsl:for-each select="students/student">
            <xsl:text>ID: </xsl:text><xsl:value-of select="id"/><xsl:text>&#10;</xsl:text>
            <xsl:text>Name: </xsl:text><xsl:value-of select="name"/><xsl:text>&#10;</xsl:text>
            <xsl:text>Course: </xsl:text><xsl:value-of select="course"/><xsl:text>&#10;&#10;</xsl:text>
        </xsl:for-each>
        
        <xsl:text>==========================&#10;</xsl:text>
    </xsl:template>
</xsl:stylesheet>
