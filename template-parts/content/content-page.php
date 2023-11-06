<?php
/**
 * Template part for displaying page content in page.php
 * Parte do modelo para exibir o conteúdo da página em page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="paginas-main">
	<div class="d-flex">
		<div class="entry-content child-40">
			<img src="<?php echo (esc_url(get_template_directory_uri()) .
				'../assets/images/logosolo.png') ?>" alt="Imagem" />
		</div>
		<div class="entry-content child-60">
			<div class="br-tab">
				<nav class="tab-nav">
					<ul>
						<li class="tab-item">
							<button type="button" data-panel="panel-1-icon">
								<span class="name">Início</span>
							</button>
						</li>
						<li class="tab-item">
							<button type="button" data-panel="panel-1-icon">
								<span class="name">Sobre</span>
							</button>
						</li>
						<li class="tab-item">
							<button type="button" data-panel="panel-1-icon">
								<span class="name">Acervo</span>
							</button>
						</li>
						<li class="tab-item">
							<button type="button" data-panel="panel-1-icon">
								<span class="name">Serviços</span>
							</button>
						</li>
						<li class="tab-item">
							<button type="button" data-panel="panel-1-icon">
								<span class="name">Ajuda</span>
							</button>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>


<div class="paginas-main"> 
	<div class="alinhamento-div"><!-- barra pesquisa -->
		<div class="header-search search-input">
			<div class="br-input has-icon">
				<label for="main-searchbox"></label>
				<input class="has-icon" id="new-searchbox" type="search" placeholder="O que você procura?" />
				<button class="br-button circle small" type="button" aria-label="Pesquisar" 
				 onclick="redirect_after_search(1)"><i class="fas fa-search" aria-hidden="true"></i>
				</button>
			</div>
		</div>
		<div class="alinhamento-componentes">
			
			<div class="alinhamento-tex">
				<h1 class="search-text2 ">Pesquisar por tipo</h1>
			</div>
			<div class="p-1 alinhamento-button">
				<button class="br-button block secondary mb-3" type="button" onclick="buscar('02')">Pesquisar por autor</button>
			</div>
			<div class="p-1 alinhamento-button">
				<button class="br-button block primary mb-3" type="button" onclick="buscar('03')">Pesquisa avançada</button>
			</div>
		</div>
	</div>
	<div class="spacing"></div>

	<h1 class="titulo-baner">Conheça a biblioteca​</h1>
	<div class="container-card">
      <div class="div-transform">
			<div class="card card-1">
				<p class="titulo-card">Coleções especiais</p>
				<a href="172.16.17.20:8080/wordpress/index.php/2023/05/31/colecoes-especiais" target="_blank">
					<div class="img-card"><img src="<?php echo (esc_url(get_template_directory_uri()) .
					'../assets/images/colEspeciais.svg') ?>" alt="Imagem" />
					</div>
				</a>
				<p class="texto-card">Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="card card-1">
				<p class="titulo-card">Acervo</p>
				<a href="172.16.17.20:8080/wordpress/index.php/acervo/" target="_blank">
					<div class="img-card"><img src="<?php echo (esc_url(get_template_directory_uri()) .
					'../assets/images/acervo.svg') ?>" alt="Imagem" />
					</div>
				</a>
				<p class="texto-card">Lorem ipsum dolor sit amet</p>
			</div>
			<div class="card card-1">
				<p class="titulo-card">Periódicos</p>
				<a href="172.16.17.20:8080/wordpress/index.php/periodicos/" target="_blank">
					<div class="img-card"><img src="<?php echo (esc_url(get_template_directory_uri()) .
					'../assets/images/periodicos.svg') ?>" alt="Imagem" />
					</div>
				</a>
				<p class="texto-card">Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
    </div>
</div>

<div class="paginas-main">	
	<div>
		<?php if ( ! is_front_page() ) : ?>
			<header class="entry-header alignwide">
				<?php get_template_part( 'template-parts/header/entry-header' ); ?>
				<?php twenty_twenty_one_post_thumbnail(); ?>
			</header> <!--.entry-header      -->
		<?php elseif ( has_post_thumbnail() ) : ?>
			<header class="entry-header alignwide">
				<?php twenty_twenty_one_post_thumbnail(); ?>
			</header><!-- .entry-header       -->
		<?php endif; ?>
	</div>
	<dsiv class="pading-pagina">
		<div class="entry-content">
			<?php
			the_content();
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr( 'Page', 'twentytwentyone' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html( 'Page %', 'twentytwentyone' ),
				)
			);
			?>
		</div><!-- .entry-content -->
	</div>
</div>

<div class="paginas-form"> <!-- form -->
	<h1 class="form-titulo1">Informações</h1>
	<div class="d-flex">
		<div class="entry-content child-60">
			<p class="form-titulo2">Newsletter</p>
			<div class="col-sm-6 col-lg-10 mb-3">
				<div class="br-input small">
					<label for="input-icon-small">Nome:</label>
					<div class="input-group">
						<div class="input-icon">
							<i class="fas fa-user" aria-hidden="true"></i>
						</div>
						<input class="small" id="input-icon-small" type="text" placeholder="Nome Completo"/>
					</div>
					<p>Digite o nome pelo qual o usuário deseja ser identificado.</p>
				</div> <br>
			</div>
			<div class="col-sm-6 col-lg-10 mb-3">
				<div class="br-input small">
					<label for="input-icon-small">E-mail:</label>
					<div class="input-group">
						<div class="input-icon">
							<i class="fas fa-envelope" aria-hidden="true"></i>
						</div>
						<input class="small" id="input-icon-small" type="text" placeholder="E.: seuemail@gov.br"/>
					</div>
					<p>Digite e-mail corporativo mais utilizado .</p>
				</div>
			</div>
			<div class="p-3 button-azul">
				<button class="br-button primary mr-2" type="button">Assinar</button>
			</div>
		</div>
		<div class="entry-content child-40">
			<p class="form-titulo2">Horário de funcionamento</p><br>
			<p class="form-texto">De segunda-feira à sexta-feira</p>
			<img src="<?php echo (esc_url(get_template_directory_uri()) .
				'../assets/images/clock.svg') ?>" alt="Imagem" />
			<p class="form-texto">De 09h às 17h</p>
		</div>
	</div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> > <!--  chamando footer -->
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer default-max-width">
				<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Nome da postagem atual. Visível apenas para leitores de tela. */
						esc_html__( 'Edit %s', 'twentytwentyone' ),
						'<span class="screen-reader-text">' . get_the_title() . '</span>'
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
