<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
   

    <xsl:template match="/">
        <html>
            <head>
                <title>Product List</title>
                <style>
                    table {
                        width: 60%;
                        border-collapse: collapse;
                        margin: 20px auto;
                        font-family: Arial, sans-serif;
                    }
                    th, td {
                        border: 1px solid #ddd;
                        padding: 12px;
                        text-align: left;
                    }
                    th {
                        background-color: #f2f2f2;
                        color: #333;
                    }
                    tr:nth-child(even) {
                        background-color: #f9f9f9;
                    }
                    tr:hover {
                        background-color: #f1f1f1;
                    }
                    h2 {
                        text-align: center;
                        color: #333;
                    }
                </style>
            </head>
            <body>
                <h2>Product List</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price ($)</th>
                    </tr>
                    <xsl:for-each select="products/product">
                        <tr>
                            <td><xsl:value-of select="name" /></td>
                            <td><xsl:value-of select="category" /></td>
                            <td><xsl:value-of select="price" /></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
