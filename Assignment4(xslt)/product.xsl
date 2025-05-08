<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Product List</title>
                <style>
                    table { width: 50%; border-collapse: collapse; }
                    th, td { border: 1px solid black; padding: 10px; text-align: left; }
                    th { background-color: #f2f2f2; }
                </style>
            </head>
            <body>
                <h2>Product List</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Price</th>
                    </tr>
                    <xsl:for-each select="products/product">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="brand"/></td>
                            <td><xsl:value-of select="price"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
