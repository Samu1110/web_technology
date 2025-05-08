<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Hostel Room Allocation</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        text-align: center;
                        margin: 20px;
                    }
                    h2 {
                        color: darkblue;
                        text-shadow: 1px 1px 2px gray;
                    }
                    table {
                        width: 70%;
                        margin: auto;
                        border-collapse: collapse;
                        background-color: white;
                        box-shadow: 2px 2px 10px gray;
                    }
                    th, td {
                        padding: 12px;
                        border: 1px solid gray;
                        text-align: left;
                    }
                    th {
                        background-color: darkblue;
                        color: white;
                    }
                    tr:nth-child(even) {
                        background-color: lightgray;
                    }
                </style>
            </head>
            <body>
                <h2>Hostel Room Allocation</h2>
                <table>
                    <tr>
                        <th>Room No</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Room Type</th>
                        <th>Fees</th>
                    </tr>
                    <xsl:for-each select="hostel/room">
                        <tr>
                            <td><xsl:value-of select="room_no"/></td>
                            <td><xsl:value-of select="student_name"/></td>
                            <td><xsl:value-of select="student_id"/></td>
                            <td><xsl:value-of select="room_type"/></td>
                            <td><xsl:value-of select="fees"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
