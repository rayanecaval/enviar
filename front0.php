<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>a</title>
        <style type="text/css"> 
            #container{
            margin: 10px auto;
            width: 1000px;
            background: #808080;
            position: relative;
        }
            #conteudo{
            float: left;
            width: 1000px;
            margin: 0 0 0 20px;
        }
        body{
            height: 100%;
            margin: 0;
        }

        img {
            opacity : 0.8
        }
        
        .bg {
            background-image: url("img/rituais.jpg");
        }


        p{
		color: #fff;
	    }
        header{
                width: 100%;
                height: 150px;
                float: left;
            }
            .sct{
                width: 50%;
                height: 550px;
                float: left;
            } 
       
            footer{
                width: 100%;
                height: 50px;
                background-color: #CD853F;
                float: left;
            }


        </style>
        		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		        <script type="text/javascript">
                	$(document).ready(function() {
					$("#header").load("headerContent.php"   );
					$("#sct01" ).load("section01Content.php");
					$("#sct02" ).load("section02Content.php");
					$("#footer").load("footerContent.php"   );
				});
		</script>
    </head>
        <body class="bg">
            <div id="container">
                <div id="corpo">
                    <div id="conteudo">
                        <header id="header"><img src="img/banner.png" width="1000" height="150"></h1></header>
                        <section class="sct" id="sct01" ></section>
                        <section class="sct" id="sct02"></section>
                        <footer id="footer" align="center">É ironia do destino. É realmente uma Divina Comédia. </br>-Dante</footer>
                    </div>
                </div>
            </div>
        </body>
</html>