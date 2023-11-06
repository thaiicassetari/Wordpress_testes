<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site template-base">

    <nav id="skip-links">
      <div class="skip-links" aria-label="Acesso rápido"><a accesskey="1" href="#main-content">Ir para o Conteúdo<strong class="accesskey">1</strong></a><a accesskey="2" href="#main-navigation">Ir para para Navegação<strong class="accesskey">2</strong></a><a accesskey="3" href="#main-searchbox">Ir para para Busca<strong class="accesskey">3</strong></a>
      </div>
    </nav>

    <header class="br-header large" id="header" data-sticky="data-sticky">
      <div class="container-lg">
        <div class="header-top">
          <div class="header-logo"><img src="<?php echo (esc_url(get_template_directory_uri()) . '/assets/images/govbr-logo-large.png') ?>" alt="logo" />
            <div class="header-sign">Ministério da Ciência, Tecnologia e Inovações</div>
          </div>
          <div class="header-actions">
            <div class="header-links dropdown">
              <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Acesso Rápido"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <div class="br-list">
                <div class="header">
                  <div class="title">Acesso Rápido</div>
                </div><a class="br-item" href="https://www.gov.br/pt-br/orgaos-do-governo">Órgãos do Governo</a><a class="br-item" href="http://www.acessoainformacao.gov.br/">Acesso à Informação</a><a class="br-item" href="http://www4.planalto.gov.br/legislacao">Legislação</a><a class="br-item" href="https://www.gov.br/governodigital/pt-br/acessibilidade-digital">Acessibilidade</a>
              </div>
            </div><span class="vertical mx-half mx-sm-1"></span>

            <div class="header-functions dropdown">
              <button class="br-button circle small" type="button" data-toggle="dropdown" aria-label="Abrir Funcionalidades do Sistema"><i class="fas fa-th" aria-hidden="true"></i>
              </button>
              <div class="br-list">
                <div class="header">
                  <div class="title">Funcionalidades do Sistema</div>
                </div>
                <div class="align-items-center br-item">
                  <button id="increase-font" class="br-button circle small" type="button" accesskey="1"><b>A+</b><span class="text">Aumentar Fonte</span>
                  </button>
                </div>
                <div class="align-items-center br-item">
                  <button id="decrease-font" class="br-button circle small" type="button" accesskey="2"><b>A-</b><span class="text">Diminuir Fonte</span>
                  </button>
                </div>
                <div class="align-items-center br-item">
                  <button class="br-button circle small" type="button" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()"><i class="fas fa-adjust" aria-hidden="true"></i><span class="text">Alto contraste</span>
                  </button>
                </div>
              </div>
            </div><span class="vertical mx-half mx-sm-1"></span>

            <div class="header-search-trigger">
              <button class="br-button circle" type="button" aria-label="Abrir Busca" data-toggle="search" data-target=".header-search"><i class="fas fa-search" aria-hidden="true"></i>
              </button>
            </div>
            
            <?php //if(!is_user_logged_in()) : 
            ?>
            <div class="header-login">
              
              <div class="header-avatar d-none">
                <div class="avatar dropdown"><span class="br-tag status small danger mr-n1">2</span><span class="br-avatar" title="Fulana da Silva"><span class="image"><img src="https://picsum.photos/id/823/400" alt="Avatar" /></span></span>
                  <button class="br-button circle small" type="button" aria-label="Abrir Menu de usuário" data-toggle="dropdown"><i class="fas fa-angle-down" aria-hidden="true"></i>
                  </button>
                  <div class="br-notification show">
                    <div class="notification-header">
                      <div class="row">
                        <div class="col-10"><span class="text-bold">Fulano da Silva</span><br /><small><a>nome.sobrenome@dominio.gov</a></small></div>
                      </div>
                    </div>
                    <div class="notification-body">
                      <div class="br-tab">
                        <nav class="tab-nav">
                          <ul>
                            <li class="tab-item">
                              <button type="button" data-panel="notif-item749" aria-label="notif-item749"><span class="name"><span class="icon"><i class="fas fa-image" aria-hidden="true"></i></span><span class="name">Item</span></span></button>
                            </li>
                            <li class="tab-item is-active">
                              <button type="button" data-panel="notif-item750" aria-label="notif-item750"><span class="name"><span class="icon"><i class="fas fa-image" aria-hidden="true"></i></span><span class="name">Item</span></span></button>
                            </li>
                          </ul>
                        </nav>

                        <div class="tab-content">
                          <div class="tab-panel" id="notif-item749">
                            <div class="br-list">
                              <button class="br-item" type="button"><i class="fas fa-heartbeat" aria-hidden="true"></i>Link de Acesso
                              </button><span class="br-divider"></span>
                              <button class="br-item" type="button"><i class="fas fa-heartbeat" aria-hidden="true"></i>Link de Acesso
                              </button><span class="br-divider"></span>
                              <button class="br-item" type="button"><i class="fas fa-heartbeat" aria-hidden="true"></i>Link de Acesso
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php //endif; 
            ?>
          </div>
        </div>
        
        <div class="header-bottom " >              <!-- MENU LATERAL botão-->
          <div class="header-menu">
            <div class="header-menu-trigger">
              <div class="br-menu" id="main-navigation">

                <div class="menu-trigger">
                  <button class="br-button circle small" type="button" data-toggle="menu" aria-label="Abrir Menu Principal"><i class="fas fa-bars" aria-hidden="true"></i>
                  </button>
                </div>

                <div class="menu-container">     <!-- MENU LATERAL -->
                  <div class="row">
                    <div class="col-sm-4 col-lg-3">
                      <div class="menu-panel">
                        <div class="menu-header">
                          <div class="menu-close">
                            <button class="br-button circle" type="button" arial-label="Fechar o menu" data-dismiss="menu"><i class="fas fa-times" aria-hidden="true"></i>
                            </button>
                          </div>
                          <div class="menu-title"><img src="<?php echo (esc_url(get_template_directory_uri()) . '/assets/images/govbr-logo-large.png') ?>" alt="Imagem ilustrativa" /></div>
                        </div>

                        <nav class="menu-body">
                          <div>
                            <a class="menu-item divider" href="https://localhost/wordpress/">
                              <span class="content">Página inicial</span>
                            </a>
                          </div>
                          <div>
                            <a class="menu-item" href="/#contato">
                              <span class="icon"><i class="fas fa-user" aria-hidden="true"></i></span>
                              <span class="content">Minha página</span>
                            </a>
                          </div>
                          <div class="menu-folder">
                            <a class="menu-item"><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Sobre a biblioteca</span></a>
                            <ul>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Histórico</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Lydia de Queiroz Sambaquy</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Organograma</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Normas e políticas</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Regimento</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Biblioteca em números</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Equipe</span></a></li>
                            </ul>
            			        </div>
                          <div class="menu-folder">
                            <a class="menu-item"><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Serviços</span></a>
                            <ul>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Serviços</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Acervo</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Empréstimo</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Levantamento bibliográfico</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">capacitação</span></a></li>
                            </ul>
            			        </div>
                          <div class="menu-folder">
                            <a class="menu-item"><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Ajuda</span></a>
                            <ul>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Fale conosco</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Dúvidas frequentes</span></a></li>
                              <li><a class="menu-item" href=""><span class="icon"><i class="" aria-hidden="true"></i></span><span class="content">Computadores e wi-fi</span></a></li>
                            </ul>
            			        </div>
                        </nav>

                        <div class="menu-footer"> 
                          <div class="menu-links"><a href="https://www.gov.br/pt-br/orgaos-do-governo">Órgãos do Governo&nbsp;<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a><a href="http://www4.planalto.gov.br/legislacao">Legislação&nbsp;<i class="fas fa-external-link-square-alt" aria-hidden="true"></i></a></div>
                          <div class="menu-social">
                            <div class="text-semi-bold mb-1">Redes sociais</div>
                            <div class="sharegroup">
                              <div class="share"><a class="br-button circle" href="https://www.twitter.com/mcti" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                              </div>
                              <div class="share"><a class="br-button circle" href="https://www.youtube.com/mcti" aria-label="Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                              </div>
                              <div class="share"><a class="br-button circle" href="https://www.facebook.com/mcti" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                              </div>
                              <div class="share"><a class="br-button circle" href="https://www.flickr.com/SintonizeMCTI" aria-label="Flicker"><i class="fab fa-flickr" aria-hidden="true"></i></a>
                              </div>
                              <div class="share"><a class="br-button circle" href="https://www.instagram.com/mcti" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                              </div>
                              <div class="share"><a class="br-button circle" href="https://soundcloud.com/mcti" aria-label="Soundcloud"><i class="fab fa-soundcloud" aria-hidden="true"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="menu-info">
                            <div class="text-center text-down-01">Todo o conteúdo deste site está publicado sob a licença <strong>Creative Commons Atribuição-SemDerivações 3.0 Não adaptada.</strong></div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="menu-scrim" data-dismiss="menu" tabindex="0"></div>
                </div>

              </div>
            </div>
            <div class="header-info">
              <div class="header-title">
                <a class="linkTitulo" href="https://localhost/wordpress/"> <!--link do titulo -->
                  Biblioteca do IBICT
                </a>
              </div>
              <div class="header-subtitle">Lydia de Queiroz Sambaquy</div>
            </div>
          </div>
          
          <div class="header-search">
            <div class="br-input has-icon">
              <label for="main-searchbox">Texto da pesquisa</label>
              <input class="has-icon" id="main-searchbox" type="search" placeholder="O que você procura?" />
              <button class="br-button circle small" type="button" aria-label="Pesquisar" onclick="redirect_after_search()"><i class="fas fa-search" aria-hidden="true"></i>
              </button>
            </div>
            <button class="br-button circle search-close" type="button" aria-label="Fechar Busca" data-dismiss="search"><i class="fas fa-times" aria-hidden="true"></i>
            </button>
          </div>

        </div>   <!-- FIM MENU LATERAL botão-->
      </div>
    </header>

    <?php //get_template_part( 'template-parts/header/site-header' ); 
    ?>

    <div id="content" class="site-content">
      <div id="primary" class="content-area">
        <main id="main" class="site-main d-block" role="main">