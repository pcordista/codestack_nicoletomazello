<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>

<?php include 'components/menu-internal.php'; ?>

<?php include 'components/sidebar.php'; ?>

<?php include 'components/banner-about.php'; ?>

<div class="about-page">
    <div class="container">
        <div class="section-title center-align">
            <div class="subtitle">
                Conheça
            </div>
            <div class="title">
                Nicole Tomazella
            </div>
        </div>

        <div class="section-one">
            <div>
                <img src="assets/images/nicole-about.png" alt="">
            </div>
            <div class="text">
                Psicóloga graduada pela Universidade Estadual de Londrina (UEL - PR), pós graduada em Gestão de Recursos Humanos (PUC - PR) e em Dinâmica dos Grupos (SBDG), com formação em Health & Wellness Coaching (ICF - Toronto, Canadá) e em Mentoria (Escola de Mentores - SP).<BR><BR>Atua há mais de 13 anos em empresas na área de Desenvolvimento Estratégico da Essência Humana, com foco em mudança e fortalecimento da Cultura Organizacional por meio de alinhamento entre os princípios da Diretoria, atuação e comunicação das Lideranças e treinamento das Equipes.<BR><BR>Atua como Coach de Felicidade Profissional e Organizacional desde 2014, dedicando-se à ajudar profissionais a construírem sua jornada com mais autenticidade, simplicidade, leveza e resultados.
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9NI-PXFYaS0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="section-two container">
        <div class="services">
            <div class="section-title center-align">
                <div class="subtitle">
                    Conheça
                </div>
                <div class="title">
                    Nossos Serviços & Produtos
                </div>
            </div>
            <div class="bg">
                <div class="container margin_3_top">
                    <div class="grid relative">
                        <img src="assets/images/shape-bool-gray.png" alt="Shape" class="imgBg" />
                        <div class="service-item">
                            <div class="title flex alignCenter justifycenter">
                                Business & Executive Coaching
                            </div>
                            <div class="text">
                                Sabemos que são as pessoas que trazem os resultados às organizações. Sabemos também que boas práticas de Desenvolvimento Pessoal são necessárias para que as empresas se desenvolvam.<BR><BR>Mas por que, ainda assim, muitas pessoas não se desenvolvem em suas funções? Por que por mais que o líder faça de tudo, ainda assim os processos - e principalmente os resultados - estão distante do que a empresa busca?<BR><BR>Saiba que existem comportamentos muito sutis no aprendizado organizacional que o líder precisa aprender a "ler", para desenvolver realmente sua equipe. <BR><BR>Entre em contato e Saiba mais!
                            </div>
                            <div class="button text-center">
                                <a class="modal-trigger" href="#contact">
                                    Saiba Mais
                                </a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="title flex alignCenter justifycenter">
                                Professional Coaching
                            </div>
                            <div class="text">
                                Focado em ajudar a ampliar a sua percepção sobre si mesmo, sobre seus talentos, competências, e principalmente, sobre sua Essência - o que eu creio ser nosso diferencial competitivo no mercado.<BR><BR>Sim! Pois mesmo o conhecimento técnico sendo importante para nosso crescimento, o que realmente nos coloca à frente são as ações que realizamos - principalmente quando elas são congruentes com quem somos.<BR><BR>Processo voltado para quem busca realizar uma transição profissional, mudar seus resultados, e se destacar no mercado de trabalho!<BR><BR>Saiba mais sobre os programas - Online e Presencial (em Londrina-PR)
                            </div>
                            <div class="button text-center">
                                <a class="modal-trigger" href="#contact">
                                    Saiba Mais
                                </a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="title flex alignCenter justifycenter">
                                CoachBook Cada Vez Melhor
                            </div>
                            <div class="text">
                                Eu creio muito no provérbio africano "Se quer ir rápido, vá sozinho. Mas se quer ir longe, vá acompanhado".<BR><BR>Também creio que a maior conquista do ser humano é ser social e quando compreendemos o quanto podemos ser melhores ao estar ao lado das pessoas certas, nossa vida se desenrola de maneira muito mais leve - e divertida!<BR><BR>O CoachBook Cada Vez Melhor tem por objetivo ajudar pessoas a se conectar para transformar suas carreiras de forma mais intensa, sem enrolação, e com dinamismo.<BR><BR>Saiba mais!
                            </div>
                            <div class="button text-center">
                                <a class="modal-trigger" href="#contact">
                                    Saiba Mais
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'components/testemonials.php'; ?>

    <?php include 'components/parallax-about.php'; ?>

    <?php include 'components/purpose.php'; ?>
</div>


<?php include 'components/events.php'; ?>

<?php include 'components/contact.php'; ?>

<?php include 'components/instagram.php'; ?>

<?php include 'components/modal.php'; ?>

<?php include 'footer.php'; ?>


<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>
<script>
    document.addEventListener("load", startHome())
</script>

</body>

</html>