<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/">
        <html>
            <head>
                <title>Library Books</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        text-align: center;
                        padding: 20px;
                    }
                    table {
                        width: 60%;
                        margin: auto;
                        border-collapse: collapse;
                        background: white;
                        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
                        border-radius: 10px;
                        overflow: hidden;
                    }
                    th, td {
                        border: 1px solid #ddd;
                        padding: 12px;
                        text-align: left;
                    }
                    th {
                        background-color: #007BFF;
                        color: white;
                        font-size: 18px;
                    }
                    tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }
                    tr:hover {
                        background-color: #ddd;
                        cursor: pointer;
                    }
                    td {
                        font-size: 16px;
                    }
                </style>
            </head>
            <body>
                <h2>Library Books</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price (₹)</th>
                    </tr>
                    <xsl:for-each select="library/book">
                        <tr>
                            <td><xsl:value-of select="id"/></td>
                            <td><xsl:value-of select="title"/></td>
                            <td><xsl:value-of select="author"/></td>
                            <td><xsl:value-of select="price"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
