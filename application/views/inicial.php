<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt">
<?php echo $head; ?>
<div id="fb-root"></div>

<body class="no-js">
    <section class="main">
        <header>
            <div class="wrap">
                <div class="logo">
                    <a href="<?php echo $url; ?>">
                        <img title="Redação para o enem" alt="redação agora" src="<?php echo $url; ?>user_guide/paginaini/upload/logo.png" width="262" height="52">
                    </a>
                </div><!-- logo -->
                <div class="social" style="margin-right: -150px;">
                    <ul class="clearfix">
                        <li><a  class="social-facebook" href="https://www.facebook.com/redacaoagora/" title="facebook">facebook</a></li>
                        <li><a class="social-twitter" href="#" title="twitter">twitter</a></li>
												<li><button class="btn btn-primary btn-lg cadastraEncaminha">CADASTRAR</button></li>
												<li>ou</li>
												<li><button class="btn btn-default entrarEncaminha">ENTRAR</button></li>
                    </ul>
                </div><!--social -->
            </div><!-- wrap -->
        </header>
        <section class="promo">
            <div class="wrap">
                <div class="promo-text">
                    <div class="promo-title">CORREÇÃO DE REDAÇÕES PARA O ENEM</div>
                    <p>Com o Redação Agora você poderá enviar sua redação para correção e receber um feedback completo. Nosso sistema usa os mesmos critérios adotados pelo ENEM.</p>
                    <p><a class="promo-button" href="<?php echo $url."site/cadastro"; ?>">CADASTRE-SE GRÁTIS</a> &nbsp; <a class="promo-link" href="<?php echo $url."site/login"; ?>">LOGIN</a></p>
                </div><!-- promo-text -->
                <img title="Redação para o enem" src="<?php echo $url; ?>user_guide/paginaini/upload/promo.png" width="333" height="551" alt="redação agora">
            </div><!-- wrap -->
        </section><!-- promo -->
        <section class="simple">
            <div class="wrap">
                <h1>Simples e fácil de usar</h1>
                <p>O redação agora foi feito para você que está se preparando para o ENEM, a partir de nosso sistema você poderá enviar redações para correção com preços acessíveis e sem mensalidades!</p>
            </div><!-- wrap -->
        </section><!-- simple -->
        <section class="features">
            <div class="wrap">
                <div class="features-columns clearfix">
                    <div class="feature">
                        <div class="ico-help"></div>
                        <h4>Fácil de usar</h4>
                        <p>Nossa plataforma foi projetada para facilitar sua vida, cadastre-se, escolha um tema, escreva e envie para correção de forma simples e fácil.</p>
                    </div><!-- feature -->
                    <div class="feature">
                        <div class="ico-like"></div>
                        <h4>Sem mensalidades</h4>
                        <p>Nosso sistema foi projetado para ser acessível a qualquer pessoa, dessa forma, não cobramos mensalidades e você poderá adquirir sua correção a hora que quiser!</p>
                    </div><!-- feature -->
                    <div class="feature">
                        <div class="ico-present"></div>
                        <h4>A 1&ordm;	 é GRÁTIS</h4>
                        <p>Basta se cadastrar e indicar 1 amigo para ganhar a primeira correção absolutamente grátis! (Promoção por tempo limitado)</p>
                    </div><!-- feature -->

                </div><!-- features-columns -->
            </div><!-- wrap -->
        </section><!-- features -->
				<section style="background-color: #24b2a5;" class="promo">
						<div class="wrap">
								<div class="promo-text">
										<div class="promo-title"><span style="color: #ffe521;">PODEMOS TE AJUDAR NISSO!</spam></div>
										<p>Nós sabemos o quanto você quer cursar uma faculdade. Nós ACREDITAMOS em você e realmente estamos dispostos a te ajudar nisso! Cadastre-se e deixe-nos te ajudar a realizar teu sonho.</p>

								</div><!-- promo-text -->
								<img src="<?php echo $url; ?>user_guide/images/promo2.png" width="333" height="551" title="Redação para o enem" alt="redação agora">
						</div><!-- wrap -->
				</section><!-- promo -->
        <section class="simple">
            <div class="wrap">
                <h2>Correção Completa</h2>
                <p>Nosso sistema utiliza os mesmos critérios adotados pelo ENEM dessa forma você terá a garantia de que estará se preparando de forma eficiente e responsável para o Exame Nacional do Ensino Médio.</p>
            </div><!-- wrap -->
        </section><!-- simple -->
        <section class="subscribe">
            <div class="wrap">
                <div class="subscribe-title">Cadastre seu e-mail para receber novidades</div>
                <div class="subscribe-form clearfix">
                    <form>
                        <input type="email" placeholder="Seu e-mail" class="subscribe-email">
                        <input type="button" value="Subscribe" class="subscribe-button">
                    </form>
                </div><!-- subscribe-form -->
                <div class="subscribe-note">Se você quiser receber atualizações e novidades basta cadastrar seu e-mail acima, garantimos que não enviaremos spam nossa equipe é totalmente contra essa prática.</div>
            </div><!-- wrap -->
        </section><!-- subscribe -->
        <footer>
            <div class="wrap">
                <div class="logo">
                    <a href="<?php echo $url; ?>">
                        <img alt="redação agora" title="Redação para o enem" src="<?php echo $url; ?>user_guide/paginaini/upload/logo-min.png" width="128" height="104">
                    </a>
                </div><!-- logo -->

                <div class="copy">

                </div><!-- copy -->
                <div class="social">
                    <ul class="clearfix">
                        <li><a class="social-facebook" href="https://www.facebook.com/redacaoagora/" title="facebook">facebook</a></li>
                        <li><a class="social-twitter" href="#" title="twitter">twitter</a></li>

                    </ul>

                </div><!--social -->
								<div>REDAÇÃO AGORA LTDA | Copyright © 2017</br>
									<a href="<?php echo $url; ?>site/termosdeservico">Termos de uso</a> | <a href="<?php echo $url; ?>site/politica">Política de Privacidade</a> |
			            <a class="grey-text text-lighten-4 right" href="<?php echo $url; ?>site/funciona">Sobre</a>
								</div>
								<center><div class="fb-like" data-href="https://www.facebook.com/redacaoagora/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div></center>
            </div><!-- wrap -->
        </footer>
    </section><!-- main -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo $url; ?>user_guide/paginaini/js/library.js"></script>
    <script src="<?php echo $url; ?>user_guide/paginaini/js/script.js"></script>
    <script src="<?php echo $url; ?>user_guide/paginaini/js/retina.js"></script>
</body>

</html>
