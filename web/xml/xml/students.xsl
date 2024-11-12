<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <head>
                <title>Student List</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 20px;
                        text-align: center;
                    }
                    .container {
                        display: flex;
                         justify-content: center;
                        gap: 20px;
                    }
                    .card {
                        border: 1px solid #ccc;
                        border-radius: 10px;
                        padding: 20px;
                        width: 200px;
                        text-align: left;
                        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
                        background-color: #f9f9f9;
                    }
                    .card h2 {
                        font-size: 20px;
                        margin-bottom: 10px;
                        text-align: center;
                    }
                    .card p {
                        font-size: 16px;
                        margin: 5px 0;
                    }
                    .card p span {
                        font-weight: bold;
                    }
                    h1 {
                        text-align: center;
                        margin-bottom: 20px;
                    }
                </style>
            </head>
            <body>
                <h1>Student List</h1>
                <div class="container">
                    <xsl:for-each select="students/student">
                        <div class="card">
                            <h2><xsl:value-of select="name"/></h2>
                            <p><span>Age:</span> <xsl:value-of select="age"/></p>
                            <p><span>Course:</span> <xsl:value-of select="course"/></p>
                            <p><span>Grade:</span> <xsl:value-of select="grade"/></p>
                        </div>
                    </xsl:for-each>
                </div>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
