<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    |


    

    

    <!-- Root template -->
    <xsl:template match="/">
        <html>
            <head>
                <title>Bookstore</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f9f9f9;
                    }
                   .container{
                        display:flex;
                        justify-content:center;
                   }
                   .card{
                    width=50%;
                    padding:20px;
                    border:1px solid;
                    border-radius:10px;
                    background-color:yellow;
                   }
                   .card h2{
                    font-weight:bold;
                    text-align:center;
                   }
                   .card p span{
                    font-weight:bold;
                    }
                    .card p{
                        text-align:center;
                    }
                    h1{
                        text-align:center;
                    }
                </style>
            </head>
            <body>
                <h1>Bookstore Catalog</h1>
                <div class="container">
                <xsl:for-each select="bookstore/book">
                <div class="card">
                <h2><xsl:value-of select="@category"/></h2>
                <p><span>title</span><xsl:value-of select="title"/></p>
                <p><span>author</span><xsl:value-of select="author"/></p>
                <p><span>year</span><xsl:value-of select="year"/></p>
                <p><span>price</span><xsl:value-of select="price"/></p>
                </div>
                </xsl:for-each>
                </div>
                    
                
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
