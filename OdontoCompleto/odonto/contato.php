<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odontologia</title>
    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <img src="img/dente.jpg" alt="">
        </div>

        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="tratamento.php">Tratamentos</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    
    <!-- Conteúdo principal -->
    <main>

        <section id="banner">
            <h2>Bem-vindo ao meu site</h2>
            <p>A qualidade de vida começa pela saude bucal.</p>
            <p>Contatos</p>
        </section>

          <section id="contato">
            <h2>Nossos Contatos</h2>
             <div class="logo">
                <img src="img/insta.jpg" alt="">
                <p>Texto explicando sobre o contato1.</p>
            </div>

            <div class="logo">
                <img src="img/facebook.png" alt="">
                <p>Texto explicando sobre o contato2.</p>
            </div>

            <div class="logo">
                <img src="img/twitter-x-logo-png-9.png" alt="">
                <p>Texto explicando sobre o contato3.</p>
            </div>

        </section>    

            
        <section>
    <div class="mapa">
        <h2>Onde Estamos</h2>

        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.325778821998!2d-47.8889043!3d-15.786767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3afbea5539b9%3A0x24c1a41a6e075b93!2siOrto!5e0!3m2!1spt-BR!2sbr!4v1772058219254!5m2!1spt-BR!2sbr" width="1350" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> 
            allowfullscreen 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>
</section>

<section>

    <h2>Formulario para empresas que queiram fornecer materiais ou equipamentos.</h2>


    <div class="contato-container">

        <form class="form-contato" action="acoes.php" method="post" onsubmit="return confirmarEnvio()">
            <input type="text" placeholder="Seu nome" name="nome" required>
            <input type="email" placeholder="Seu e-mail" name="email" required>
            <input type="tel" placeholder="Seu telefone" name="telefone">
            <textarea placeholder="Digite sua mensagem" rows="5" name="mensagem" required></textarea>
            <button type="submit">Enviar Mensagem</button>
        </form>

    </div>

</section>

    
            <a href="https://wa.me/5511999999999" 
                class="whatsapp-btn" 
                target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
        </a>

        </section>

    </main>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2026 - Meu Site | Todos os direitos reservados</p>
    </footer>

</body>
</html>

<script>
    function confirmarEnvio(){
        if(confirm("Deseja realmente enviar os dados para o banco "))
            {
                return true;
            }else{
                return false;
            }
    }
</script>

