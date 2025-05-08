<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <xsl:template match="/">
        <html>
            <head>
                <title>Group Members</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        text-align: center;
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
                        padding: 10px;
                        text-align: left;
                    }
                    th {
                        background-color: #007BFF;
                        color: white;
                    }
                    tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }
                </style>
            </head>
            <body>
                <h2>Group Members</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Expertise</th>
                    </tr>
                    <xsl:for-each select="groupMembers/member">
                        <tr>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="roll"/></td>
                            <td><xsl:value-of select="expertise"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
