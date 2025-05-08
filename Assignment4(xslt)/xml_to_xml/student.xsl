<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="xml" indent="yes"/>

    <xsl:template match="/">
        <university>
            <department name="Engineering">
                <xsl:for-each select="students/student">
                    <studentRecord>
                        <studentID><xsl:value-of select="id"/></studentID>
                        <fullName><xsl:value-of select="name"/></fullName>
                        <major><xsl:value-of select="course"/></major>
                    </studentRecord>
                </xsl:for-each>
            </department>
        </university>
    </xsl:template>
</xsl:stylesheet>
