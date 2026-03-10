<?php 
require 'conexao.php';

?>

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
            <p>Tratamentos</p>
        </section>

    <section id="servicos-tratamentos">
            <h2>Tratamentos</h2>
            <article>
                <h3>Restaurações</h3>
                 <img src="img/restaurar.jpg" alt="">
                <p><strong>Obturações, restaurações e canal para tratar dentes danificados ou com infecção. A restauração odontológica é um tratamento que repara dentes danificados por cáries, fraturas ou traumas, devolvendo a forma, função e estética originais. Utiliza materiais como resina composta (estética), amálgama (resistente), porcelana ou ouro, sendo a resina a mais comum, com duração de 5 a 10 anos, e procedimentos geralmente realizados sob anestesia</strong></p>
            </article>

            <article>
                <h3>Ortodontia</h3>
                 <img src="img/ortodontia1.png" alt="">
                <p> <strong>Uso de aparelhos para corrigir a posição dos dentes e a mordida. A ortodontia é a especialidade odontológica focada em corrigir a posição dos dentes e ossos maxilares mal posicionados, utilizando aparelhos fixos, móveis ou alinhadores transparentes. O tratamento, realizado pelo ortodontista, melhora a mastigação, a saúde bucal (facilitando a higiene), a estética e a fala, prevenindo doenças periodontais e dores na articulação temporomandibular (ATM)</strong></p>
            </article>

            <article>
                <h3>Clareamento</h3>
                 <img src="img/clareamento.jpeg" alt="">
                <p> <strong>Combina as técnicas de consultório e caseira para maximizar resultados e durabilidade. O clareamento dental é um procedimento estético que utiliza géis à base de peróxido de hidrogênio ou carbamida para remover pigmentações e clarear a tonalidade dos dentes. Pode ser realizado no consultório (rápido, alta concentração) ou em casa (moldeiras personalizadas, menor concentração) sob supervisão de um dentista.</strong></p>
            </article>

            <article>
                <h3>Implantodontia</h3>
                 <img src="img/implante.webp" alt="">
                <p><strong> A implantodontia é a especialidade da odontologia dedicada a reabilitar a mastigação e estética bucal através da instalação de implantes dentários, geralmente de titânio, que substituem raízes perdidas e se integram ao osso (osseointegração). Oferece soluções fixas ou removíveis para perda de um, vários ou todos os dentes.</strong></p>
            </article>

    </section>
            
           <a href="https://wa.me/5511999999999" 
                class="whatsapp-btn" 
                target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
        </a>
       

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

            <h2>Formulario para empresas que queiram fornecer materiais ou equipamentos.</h2>


            <div class="contato-container">

                <form class="form-contato" action="https://formsubmit.co/candangobsb17@gmail.com" method="post"  onsubmit="return confirmarEnvio()">
                    <input type="text" placeholder="Seu nome" name="nome" required>
                    <input type="email" placeholder="Seu e-mail" name="email" required>
                    <input type="tel" placeholder="Seu telefone" name="telefone">
                    <textarea placeholder="Digite sua mensagem" rows="5" name="mensagem" required></textarea>
                    <button type="submit" name="tratamento.php">Enviar Mensagem</button>
                </form>

            </div>

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