<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Company Employee List</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background: lightgray;
                        text-align: center;
                    }
                    table {
                        width: 60%;
                        margin: auto;
                        border-collapse: collapse;
                        background: white;
                        box-shadow: 2px 2px 10px gray;
                    }
                    th, td {
                        padding: 12px;
                        border: 1px solid gray;
                        text-align: left;
                    }
                    th {
                        background: steelblue;
                        color: white;
                    }
                    tr:nth-child(even) {
                        background: lightblue;
                    }
                </style>
            </head>
            <body>
                <h2>Company Employee List</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Salary</th>
                    </tr>
                    <xsl:for-each select="company/employee">
                        <tr>
                            <td><xsl:value-of select="id"/></td>
                            <td><xsl:value-of select="name"/></td>
                            <td><xsl:value-of select="department"/></td>
                            <td><xsl:value-of select="salary"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
