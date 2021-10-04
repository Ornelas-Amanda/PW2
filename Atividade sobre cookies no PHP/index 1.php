<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojinha da Galera</title>

    <style type="text/css">
        * {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
         legend {
            font-weight: bold;
            font-size: 2.5em;
            color: yellow;
            -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: #000;
        }  

        table {
            width: 100%;
            text-align: center;
            background-image: url(https://i.pinimg.com/originals/e2/30/0c/e2300cb981799385e961ae76d5595d5f.png);
            background-repeat: no-repeat;
            background-size: cover;
        }

        select {
            width: 10%;
            height: 40px;
        }

        input {
            height: 40px;
            font-weight: bold;
        }

        td {
            padding: 20px;
        }

        td:hover {
            background-color: #EAE8E8;
        }

        p {
            padding: 5px;
            color: blue;
        }

        button {
            color: white;
            background-image: linear-gradient(to bottom, #038DFF , #0108DB);
            cursor: pointer;
        }     
    </style>
</head>
<body>

    <?php
        if(isset($_COOKIE['codigoCategoria'])) {
            echo("
                <fieldset>
                    <legend>LOJINHA DO RICK RICK</legend>
                    <form method=post action=ler-categoria.php>
                        Categoria:
                        <select name=selectCategoria id=selectCategoria required> 
            ");
            if($_COOKIE['codigoCategoria'] == 1) {
                echo("
                    <option disabled></option>
                    <option value='1' selected>Eletrodomésticos</option>
                    <option value='2'>Eletrônicos</option>
                    <option value='3'>Papelaria</option>
                    <option value='4'>Livros</option>
                ");
            }else if($_COOKIE['codigoCategoria'] == 2) {
                echo("
                    <option disabled></option>
                    <option value='1'>Eletrodomésticos</option>
                    <option value='2' selected>Eletrônicos</option>
                    <option value='3'>Papelaria</option>
                    <option value='4'>Livros</option>
                ");
            }else if($_COOKIE['codigoCategoria'] == 3) {
                echo("
                    <option disabled></option>
                    <option value='1'>Eletrodomésticos</option>
                    <option value='2'>Eletrônicos</option>
                    <option value='3' selected>Papelaria</option>
                    <option value='4'>Livros</option>
                ");
            }else if($_COOKIE['codigoCategoria'] == 4) {
                echo("
                    <option disabled></option>
                    <option value='1'>Eletrodomésticos</option>
                    <option value='2'>Eletrônicos</option>
                    <option value='3'>Papelaria</option>
                    <option value='4' selected>Livros</option>
                ");
            }else {
                echo("
                    <option disabled selected></option>
                    <option value='1'>Eletrodomésticos</option>
                    <option value='2'>Eletrônicos</option>
                    <option value='3'>Papelaria</option>
                    <option value='4'>Livros</option>
                ");
            }
            echo("
                        </select>
                        <input type='submit' value='Procurar'>
                    </form>
                </fieldset>
            ");

            if($_COOKIE['codigoCategoria'] == 1) {
                echo("
                        <table border='1'>
                            <tr>
                                <td>
                                    <img src=img/geladeira.png alt=geladeira>
                                    <h3>Galadeira</h3>
                                    <p>Preço: R$ 2.649,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/fogao.png alt=fogao>
                                    <h3>Fogão</h3>
                                    <p>Preço: R$ 939,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/maquinadelavarroupas.png alt=maquinadelavarroupas>
                                    <h3>Maquina de Lavar</h3>
                                    <p>Preço: R$ 1.489,00</p>
                                    <button>COMPRAR</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src=img/TV.png alt=tv>
                                    <h3>TV</h3>
                                    <p>Preço: R$ 1.699,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/notebook.png alt=notebook>
                                    <h3>Notebook</h3>
                                    <p>Preço: R$ 2.799,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/ps5.png alt=ps5> 
                                    <h3>PS5</h3>
                                    <p>Preço: R$ 4.999,00</p>
                                    <button>COMPRAR</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src=img/caixadelapisdecor.png alt=caixadelapisdecor>
                                    <h3>Caixa de lapis de cor</h3>
                                    <p>Preço: R$ 49,99</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/canetaazul.png alt=canetaazul>
                                    <h3>Caneta Azul</h3>
                                    <p>Preço: R$ 10,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/marcatexto.png alt=marcatexto> 
                                    <h3>Marca Texto</h3>
                                    <p>Preço: R$ 19,99</p>
                                    <button>COMPRAR</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src=img/livroaculpaedasestrelas.png alt=livroaculpaedasestrelas>
                                    <h3>A culpa é das estrelas</h3>
                                    <p>Preço: R$ 29,99</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/livroquemevocealasca.png alt=livroquemevocealasca>
                                    <h3>Quem é você Alasca?</h3>
                                    <p>Preço: R$ 25,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img  src=img/livrocidadesdepapel.png alt=livrocidadesdepapel>
                                    <h3>Cidades de papel</h3>
                                    <p>Preço: R$ 34,99</p>
                                    <button>COMPRAR</button>
                                </td>
                            </tr>
                        </table>           
                    ");
            }else if($_COOKIE['codigoCategoria'] == 2) {
                echo("
                    <table border='1'>
                        <tr>
                            <td>
                                <img src=img/TV.png alt=tv>
                                <h3>TV</h3>
                                <p>Preço: R$ 1.699,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/notebook.png alt=notebook>
                                <h3>Notebook</h3>
                                <p>Preço: R$ 2.799,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/ps5.png alt=ps5> 
                                <h3>PS5</h3>
                                <p>Preço: R$ 4.999,00</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/geladeira.png alt=geladeira>
                                <h3>Galadeira</h3>
                                <p>Preço: R$ 2.649,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/fogao.png alt=fogao>
                                <h3>Fogão</h3>
                                <p>Preço: R$ 939,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/maquinadelavarroupas.png alt=maquinadelavarroupas>
                                <h3>Maquina de Lavar</h3>
                                <p>Preço: R$ 1.489,00</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/caixadelapisdecor.png alt=caixadelapisdecor>
                                <h3>Caixa de lapis de cor</h3>
                                <p>Preço: R$ 49,99</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/canetaazul.png alt=canetaazul>
                                <h3>Caneta Azul</h3>
                                <p>Preço: R$ 10,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/marcatexto.png alt=marcatexto> 
                                <h3>Marca Texto</h3>
                                <p>Preço: R$ 19,99</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/livroaculpaedasestrelas.png alt=livroaculpaedasestrelas>
                                <h3>A culpa é das estrelas</h3>
                                <p>Preço: R$ 29,99</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/livroquemevocealasca.png alt=livroquemevocealasca>
                                <h3>Quem é você Alasca?</h3>
                                <p>Preço: R$ 25,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img  src=img/livrocidadesdepapel.png alt=livrocidadesdepapel>
                                <h3>Cidades de papel</h3>
                                <p>Preço: R$ 34,99</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>
                    </table>
                ");  
            }else if($_COOKIE['codigoCategoria'] == 3) {
                echo("
                    <table border='1'>
                        <tr>
                            <td>
                                <img src=img/caixadelapisdecor.png alt=caixadelapisdecor>
                                <h3>Caixa de lapis de cor</h3>
                                <p>Preço: R$ 49,99</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/canetaazul.png alt=canetaazul>
                                <h3>Caneta Azul</h3>
                                <p>Preço: R$ 10,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/marcatexto.png alt=marcatexto> 
                                <h3>Marca Texto</h3>
                                <p>Preço: R$ 19,99</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/TV.png alt=tv>
                                <h3>TV</h3>
                                <p>Preço: R$ 1.699,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/notebook.png alt=notebook>
                                <h3>Notebook</h3>
                                <p>Preço: R$ 2.799,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/ps5.png alt=ps5> 
                                <h3>PS5</h3>
                                <p>Preço: R$ 4.999,00</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/geladeira.png alt=geladeira>
                                <h3>Galadeira</h3>
                                <p>Preço: R$ 2.649,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/fogao.png alt=fogao>
                                <h3>Fogão</h3>
                                <p>Preço: R$ 939,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/maquinadelavarroupas.png alt=maquinadelavarroupas>
                                <h3>Maquina de Lavar</h3>
                                <p>Preço: R$ 1.489,00</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/livroaculpaedasestrelas.png alt=livroaculpaedasestrelas>
                                <h3>A culpa é das estrelas</h3>
                                <p>Preço: R$ 29,99</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/livroquemevocealasca.png alt=livroquemevocealasca>
                                <h3>Quem é você Alasca?</h3>
                                <p>Preço: R$ 25,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img  src=img/livrocidadesdepapel.png alt=livrocidadesdepapel>
                                <h3>Cidades de papel</h3>
                                <p>Preço: R$ 34,99</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>
                    </table>
                ");  
            }else if($_COOKIE['codigoCategoria'] == 4) {
                echo("
                <table border='1'>
                    <tr>
                        <td>
                            <img src=img/livroaculpaedasestrelas.png alt=livroaculpaedasestrelas>
                            <h3>A culpa é das estrelas</h3>
                            <p>Preço: R$ 29,99</p>
                            <button>COMPRAR</button>
                        </td>

                        <td>
                            <img src=img/livroquemevocealasca.png alt=livroquemevocealasca>
                            <h3>Quem é você Alasca?</h3>
                            <p>Preço: R$ 25,00</p>
                            <button>COMPRAR</button>
                        </td>

                        <td>
                            <img  src=img/livrocidadesdepapel.png alt=livrocidadesdepapel>
                            <h3>Cidades de papel</h3>
                            <p>Preço: R$ 34,99</p>
                            <button>COMPRAR</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src=img/caixadelapisdecor.png alt=caixadelapisdecor>
                            <h3>Caixa de lapis de cor</h3>
                            <p>Preço: R$ 49,99</p>
                            <button>COMPRAR</button>
                        </td>

                        <td>
                            <img src=img/canetaazul.png alt=canetaazul>
                            <h3>Caneta Azul</h3>
                            <p>Preço: R$ 10,00</p>
                            <button>COMPRAR</button>
                        </td>

                        <td>
                            <img src=img/marcatexto.png alt=marcatexto> 
                            <h3>Marca Texto</h3>
                            <p>Preço: R$ 19,99</p>
                            <button>COMPRAR</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src=img/TV.png alt=tv>
                            <h3>TV</h3>
                            <p>Preço: R$ 1.699,00</p>
                            <button>COMPRAR</button>
                        </td>

                        <td>
                            <img src=img/notebook.png alt=notebook>
                            <h3>Notebook</h3>
                            <p>Preço: R$ 2.799,00</p>
                            <button>COMPRAR</button>
                        </td>

                        <td>
                            <img src=img/ps5.png alt=ps5> 
                            <h3>PS5</h3>
                            <p>Preço: R$ 4.999,00</p>
                            <button>COMPRAR</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src=img/geladeira.png alt=geladeira>
                            <h3>Galadeira</h3>
                            <p>Preço: R$ 2.649,00</p>
                            <button>COMPRAR</button>
                        </td>

                        <td>
                            <img src=img/fogao.png alt=fogao>
                            <h3>Fogão</h3>
                            <p>Preço: R$ 939,00</p>
                            <button>COMPRAR</button>
                        </td>

                        <td>
                            <img src=img/maquinadelavarroupas.png alt=maquinadelavarroupas>
                            <h3>Maquina de Lavar</h3>
                            <p>Preço: R$ 1.489,00</p>
                            <button>COMPRAR</button>
                        </td>
                    </tr>
                </table>
            ");  
            }else {
                echo("
                        <table border='1'>
                            <tr>
                                <td>
                                    <img src=img/geladeira.png alt=geladeira>
                                    <h3>Galadeira</h3>
                                    <p>Preço: R$ 2.649,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/fogao.png alt=fogao>
                                    <h3>Fogão</h3>
                                    <p>Preço: R$ 939,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/maquinadelavarroupas.png alt=maquinadelavarroupas>
                                    <h3>Maquina de Lavar</h3>
                                    <p>Preço: R$ 1.489,00</p>
                                    <button>COMPRAR</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src=img/TV.png alt=tv>
                                    <h3>TV</h3>
                                    <p>Preço: R$ 1.699,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/notebook.png alt=notebook>
                                    <h3>Notebook</h3>
                                    <p>Preço: R$ 2.799,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/ps5.png alt=ps5> 
                                    <h3>PS5</h3>
                                    <p>Preço: R$ 4.999,00</p>
                                    <button>COMPRAR</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src=img/caixadelapisdecor.png alt=caixadelapisdecor>
                                    <h3>Caixa de lapis de cor</h3>
                                    <p>Preço: R$ 49,99</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/canetaazul.png alt=canetaazul>
                                    <h3>Caneta Azul</h3>
                                    <p>Preço: R$ 10,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/marcatexto.png alt=marcatexto> 
                                    <h3>Marca Texto</h3>
                                    <p>Preço: R$ 19,99</p>
                                    <button>COMPRAR</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src=img/livroaculpaedasestrelas.png alt=livroaculpaedasestrelas>
                                    <h3>A culpa é das estrelas</h3>
                                    <p>Preço: R$ 29,99</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img src=img/livroquemevocealasca.png alt=livroquemevocealasca>
                                    <h3>Quem é você Alasca?</h3>
                                    <p>Preço: R$ 25,00</p>
                                    <button>COMPRAR</button>
                                </td>

                                <td>
                                    <img  src=img/livrocidadesdepapel.png alt=livrocidadesdepapel>
                                    <h3>Cidades de papel</h3>
                                    <p>Preço: R$ 34,99</p>
                                    <button>COMPRAR</button>
                                </td>
                            </tr>
                        </table>           
                    ");
            }
        }else {
            echo("
                <fieldset>
                    <legend>LOJINHA DO RICK RICK</legend>
                    <form method=post action=ler-categoria.php>
                        Categoria:
                        <select name=selectCategoria id=selectCategoria required>
                            <option disabled selected></option>
                            <option value='1'>Eletrodomésticos</option>
                            <option value='2'>Eletrônicos</option>
                            <option value='3'>Papelaria</option>
                            <option value='4'>Livros</option>
                        </select>
                            <input type='submit' value='Procurar'>
                    </form>
                </fieldset>
            ");

            echo("
                    <table border='1'>
                        <tr>
                            <td>
                                <img src=img/geladeira.png alt=geladeira>
                                <h3>Galadeira</h3>
                                <p>Preço: R$ 2.649,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/fogao.png alt=fogao>
                                <h3>Fogão</h3>
                                <p>Preço: R$ 939,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/maquinadelavarroupas.png alt=maquinadelavarroupas>
                                <h3>Maquina de Lavar</h3>
                                <p>Preço: R$ 1.489,00</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/TV.png alt=tv>
                                <h3>TV</h3>
                                <p>Preço: R$ 1.699,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/notebook.png alt=notebook>
                                <h3>Notebook</h3>
                                <p>Preço: R$ 2.799,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/ps5.png alt=ps5> 
                                <h3>PS5</h3>
                                <p>Preço: R$ 4.999,00</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/caixadelapisdecor.png alt=caixadelapisdecor>
                                <h3>Caixa de lapis de cor</h3>
                                <p>Preço: R$ 49,99</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/canetaazul.png alt=canetaazul>
                                <h3>Caneta Azul</h3>
                                <p>Preço: R$ 10,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/marcatexto.png alt=marcatexto> 
                                <h3>Marca Texto</h3>
                                <p>Preço: R$ 19,99</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <img src=img/livroaculpaedasestrelas.png alt=livroaculpaedasestrelas>
                                <h3>A culpa é das estrelas</h3>
                                <p>Preço: R$ 29,99</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img src=img/livroquemevocealasca.png alt=livroquemevocealasca>
                                <h3>Quem é você Alasca?</h3>
                                <p>Preço: R$ 25,00</p>
                                <button>COMPRAR</button>
                            </td>

                            <td>
                                <img  src=img/livrocidadesdepapel.png alt=livrocidadesdepapel>
                                <h3>Cidades de papel</h3>
                                <p>Preço: R$ 34,99</p>
                                <button>COMPRAR</button>
                            </td>
                        </tr>
                    </table>           
                ");
        }
    ?>
    
</body>
</html>