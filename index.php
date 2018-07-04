<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="mobileoptimized" content="300" />
<meta name="HandheldFriendly" content="true" />
<meta http-equiv="cleartype" content="on" />
<!-- Latest compiled and minified CSS aaaaaaaaaaaaaaaaaaaaaaa-->
<link rel="stylesheet" href="./bootstrap-3.3.2-dist/css/bootstrap.min.css" />
<!-- jQuery library -->
<script src="/bootstrap-3.3.2-dist/js/jquery-1.11.2.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="./bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/css/main.css" />
<script type="text/javascript">

function hideAllCollapsibles(show) {

   $( "div#menu li a" ).each(function( index ) {

        $( $( this ).attr( 'data-target' ) ).collapse( 'hide' );

   });
    
   if (typeof show != 'undefined') {
     
      setTimeout(function() {
        
        // Collapse after 2 seconds
        $( show ).collapse('show');
        
      }, 1000);
     
   }
  
}

$( document ).ready(function() {

hideAllCollapsibles();

setTimeout(function() {
  $( "#home" ).collapse( 'show' );
}, 1000);
  
$( "div#menu li a" ).each(function( index ) {
  
  $(this).mousedown(function (e) {
    
    if (typeof $( this ).attr( 'data-target' ) != 'undefined') {

      hideAllCollapsibles($( this ).attr( 'data-target' ));

    }

    $('#btnCollapse').html('^');
    setTimeout(function() {
    	document.getElementById('menuCollapse').style.visibility = 'hidden';
    }, 2000);

  });
  
});

});

function changeBtnCollapse(ariaExpandedAttr) {
    window.scrollTo(0, 0);
    if (eval($('#menuCollapse').attr('aria-expanded')) == true) {
	$('#btnCollapse').html('...');
	document.getElementById('menuCollapse').style.visibility = 'hidden';
    } else {
	$('#btnCollapse').html('-');
	document.getElementById('menuCollapse').style.visibility = 'visible';
    }
}
</script>
</head>
<body>
<div class="container">
<div class="header row">
    <div class="col-sm-6" id="me" style="float:left;text-align: right; margin-top: 30px; color: #171717">
        <h3>Portfolio</h3>
        <strong style="color: #EEEEEE;">Esdras de Morais da Silva</strong>
    </div>
    <div class="visible-xs-block" style="position:fixed;margin:1px;padding:4px;top:0;left:77.7%;width:100px;z-index:1000;">
	<a class="btn btn-primary" id="btnCollapse" data-toggle="collapse" href="#menuCollapse" aria-expanded="false" aria-controls="collapseExample" onclick="changeBtnCollapse($(this).attr('aria-expanded'))">...</a>
    </div>
    <div class="col-sm-6" style="float:right;margin-top:70px;">
        <a href="http://facebook.com/esdrasdemorais" title="Facebook Esdras de Morais" target="_blank"><img src="/images/Facebook.png" width="40" height="40" border="0" /></a>
        <a href="http://twitter.com/esdrasdemorais" title="Twitter Esdras de Morais" target="_blank"><img src="/images/TwitterCircleColor.png" width="40" height="40" /></a>
    </div>
</div>
<div class="row">
  <!--Phone-->
  <div class="col-xs-12 col-sm-12">
    <div id="menu">
    <ul class="hidden-xs">
	    <li><a data-toggle="collapse" data-parent="content" data-target="#home" href="#home">Home</a></li>
	    <li><a href="https://github.com/esdrasdemorais" target="_blank">GitHub</a></li>
	    <li><a href="http://br.linkedin.com/in/esdrasdemorais" target="_blank">LinkedIn</a></li>
	    <li><a data-toggle="collapse" data-parent="content" data-target="#Empresas" href="#Empresas">Empresas</a></li>
	    <li><a data-toggle="collapse" data-parent="content" data-target="#Projetos" href="#Projetos">Projetos</a></li>
	    <li><a data-toggle="collapse" data-parent="content" data-target="#Contato" href="#Contato">Contato</a></li>
	</ul>
	<div class="collapse" id="menuCollapse">
	  <ul>
	    <li class="visible-xs-block"><a class="btn-lg" data-toggle="collapse" data-parent="content" data-target="#home" href="#home">Home</a></li>
	    <li class="visible-xs-block"><a class="btn-lg" href="https://github.com/esdrasdemorais" target="_blank">GitHub</a></li>
	    <li class="visible-xs-block"><a class="btn-lg" href="http://br.linkedin.com/in/esdrasdemorais" target="_blank">LinkedIn</a></li>
	    <li class="visible-xs-block"><a class="btn-lg" data-toggle="collapse" data-parent="content" data-target="#Empresas" href="#Empresas">Empresas</a></li>
	    <li class="visible-xs-block"><a class="btn-lg" data-toggle="collapse" data-parent="content" data-target="#Projetos" href="#Projetos">Projetos</a></li>
	    <li class="visible-xs-block"><a class="btn-lg" data-toggle="collapse" data-parent="content" data-target="#Contato" href="#Contato">Contato</a></li>
	  </ul>
	</div>
	<!--
	<div class="visible-xs-*">
	    <button class="btn btn-primary btn-lg btn-block" type="button" data-toggle="collapse" data-parent="content" data-target="#home">Home</button>
	    <button class="btn btn-primary btn-lg btn-block" type="button" onclick="window.location='https://github.com/esdrasdemorais'" target="_blank">GitHub</button>
	    <button class="btn btn-primary btn-lg btn-block" type="button" onclick="windows.location='http://br.linkedin.com/in/esdrasdemorais'" target="_blank">LinkedIn</button>
	    <button class="btn btn-primary btn-lg btn-block" type="button" data-toggle="collapse" data-parent="content" data-target="#Empresas">Empresas</button>
	    <button class="btn btn-primary btn-lg btn-block" type="button" data-toggle="collapse" data-parent="content" data-target="#Projetos">Projetos</button>
	    <button class="btn btn-primary btn-lg btn-block" type="button" data-toggle="collapse" data-parent="content" data-target="#Contato">Contato</button>
	</div>
	-->
    </div>
    <br />
  </div>
</div>
<div class="row">
    <div class="col-sm-7 col-md-8 panel-group" id="content">
      <div id="home" class="panel-group collapse in">
        <div class="title"><strong>Sobre mim</strong></div>
	    <p style="padding-top: 20px; text-aling:justify">
	    Formado em Sistemas de Informa&ccedil;&atilde;o na Faculdade ENIAC, Guarulhos/SP, possuo Experiência como Analista Desenvolvedor PHP, Visual Basic e C#.<br />Conhecimentos em Zend e Symfony Frameworks, SGBDs: MSSQL Server, MySQL e PostgreSQL; CSS, XHTML, XML, XSL, JSOO, JQuery, AJAX e JSON, Design-Patterns, J2SDK, J2EE, Adobe Flex, Eclipse e Netbeans.
	    <br /><br />
	    Com enorme interesse e sempre em busca de novos desafios, anseio por ingressar em novos projetos, afim de agu&ccedil;ar minhas competências e habilidades de forma qualitativa e quantitativa trazendo benefícios para mim e o cliente. Entre elas posso destacar o empenho e total comprometimento com o projeto.
	    </p>
	    <br />
	    <a href="./curriculo.pdf" target="_blank" class="thumbnail" style="float:left"><img src="/images/CV.png" alt="Curr&iacute;culo" title="Curr&iacute;culo" width="377"></a>
	    <a href="./monografia.pdf" target="_blank" class="thumbnail"><img src="/images/TCC.png" alt="Trabalho de Conclus&atilde;o de Curso" title="Trabalho de Conclus&atilde;o de Curso" style="background-color:#000;" width="300"></a>
      </div>
      <div id="Projetos" class="collapse in">
		<div class="row">
          <div class="col-xs-4 col-sm-6 project">
              <a href="/images/TintasTresIrmaos.png" class="thumbnail">
                 <img src="/images/TintasTresIrmaos.png" alt="Site Tintas Tr&ecirc;s Irm&atilde;os" />
				 <p>Site Tintas Tr&ecirc;s Irm&atilde;os</p>
              </a>
          </div>
		  <div class="col-xs-4 col-sm-6 project">
              <a href="/images/BandaKausachum.png" class="thumbnail">
                 <img src="/images/BandaKausachum.png" alt="Site Tintas Tr&ecirc;s Irm&atilde;os" />
				 <p>Site Banda Kausachum</p>
              </a>
          </div>
		</div>
		<div class="row">
	  	  <div class="col-xs-4 col-sm-6 project">
              <a href="/images/BuffetMel.png" class="thumbnail">
                 <img src="/images/BuffetMel.png" alt="Site BuffetMel" />
				 <p>Site BuffetMel</p>
              </a>
          </div>
		  <div class="col-xs-4 col-sm-6 project">
              <a href="/images/SIGFlex.png" class="thumbnail">
                 <img src="/images/SIGFlex.png" alt="Sistema SIGFlex" />
				 <p>Sistema SIGFlex</p>
              </a>
          </div>
		</div>
		<div class="row">
	  	  <div class="col-xs-4 col-sm-6 project">
              <a href="/images/SiteProguaru.png" class="thumbnail">
                 <img src="/images/SiteProguaru.png" alt="Site Proguaru" />
				 <p>Site Proguaru</p>
              </a>
          </div>
		  <div class="col-xs-4 col-sm-6 project">
              <a href="/images/MicrolinsConcursos.png" class="thumbnail">
                 <img src="/images/MicrolinsConcursos.png" alt="Sistema Ecommerce MicrolinsConcursos" />
				 <p>Sistema Ecommerce Microlins Concursos</p>
              </a>
          </div>
		</div>
		<div class="row">
	  	  <div class="col-xs-4 col-sm-6 project">
              <a href="/images/PortalJovemPanOnline.png" class="thumbnail">
                 <img src="/images/PortalJovemPanOnline.png" alt="Portal JovemPan Online" />
				 <p>Portal JovemPan Online</p>
              </a>
          </div>
		  <div class="col-xs-4 col-sm-6 project">
              <a href="/images/SistemaTramitacaoDocumentos.png" class="thumbnail">
                 <img src="/images/SistemaTramitacaoDocumentos.png" alt="Sistema Tramita&ccedil;&atilde;o Documentos" />
				 <p>Sistema Tramita&ccedil;&atilde;o Documentos</p>
              </a>
          </div>
		</div>
		<div class="row">
	  	  <div class="col-xs-4 col-sm-6 project">
              <a href="/images/SiteRMS.png" class="thumbnail">
                 <img src="/images/SiteRMS.png" alt="Site RMS" />
				 <p>Site RMS</p>
              </a>
          </div>
		</div>
      </div>
      <div id="Contato" class="collapse in">
	<p>Contato pelo telefone <strong>(+55) 11 999567790</strong> ou pelo email <strong>esdrasdemorais@gmail.com</strong></p>
	<br />
	<form id="Contato" action="contact.php">
	  <div class="form-group">
	    <label>Nome</label><input type="text" name="name" class="form-control" />
	  </div>
	  <div class="form-group">
 	    <label>Email</label><input type="text" name="email" class="form-control" />
	  </div>
	  <div class="form-group">
	    <label>Mensagem</label><textarea name="message" class="form-control"></textarea>
	  </div>
	  <button type="submit" formmethod="post">Enviar</button>
	</form>
      </div>
      <div id="Empresas" class="collapse in">
	  <strong>Colegio e Faculdade - Eniac</strong>
	  <p>Empresa que iniciei no mercado em 2004, quando estagiei monitorando e auxiliando as aulas de programa&ccedil;&atilde;o do ensino t&eacute;cnico e faculdade. No ano da faculdade, 2006, lecionava aulas pr&aacute;ticas de Desenvolvimento Web para o curso t&eacute;cnico.</p>
	  <br />
	  <strong>Rhadar Tecnologia de RH</strong>
	  <p>Empresa de Tecnologia voltada para RH, primeiro est&aacute;gio com PHP, SGBD Postgres, Front-End em CSS e Ajax. Mantia e dava Suporte aos clientes, ag&ecirc;ncias de emprego e seus candidatos. Tamb&eacute;m desenvolvi um gerenciador de conte&uacute;do para um cliente, modelado pelo nosso l&iacute;der, Thiago Risso.</p>
	  <br />
	  <strong>Radio Panamericana</strong>
	  <p>Desenvolvimento e Manuten&ccedil;&atilde;o em PHP, JQuery, Classes Utilit&aacute;rias Symfony e CSS, do portal Jovem Pan Online, iniciado pelo Analista Desenvolvedor Renato Aquino, que era analista desenvolvedor da Jovem Pan FM.</p>
	  <br />
	  <strong>Progresso e Desenvolvimento de Guarulhos</strong>
	  <p>Entrei como Desenvolvedor Visual Basic 6, dando manuten&ccedil;&atilde;o a um dos sistemas desktop da empresa. Em seguida, entrei num projeto de um sistema para controle de tr&acirc;mite de documentos p&uacute;blicos, juntamento com o desenvolvedor Lucas Fernando, desenvolvido em Zend Framework PHP, Javascript e CSS.<br />No ano seguinte participei de um projeto de migra&ccedil;&atilde;o do m&oacute;dulo de compras, do SIG da organiza&ccedil;&atilde;o, em Adobe Flex e Zend Framework (AMF - desenvolvimento PHP com RIA) com o desenvolvedor Eduardo Mariano. Participei da reestrutura&ccedil;&atilde;o do gerenciador de conte&uacute;do do site e intranet, com o analista desenvolvedor Igor Barros. Tamb&eacute;m participei da modelagem em Java do Sistema de Controle de Acesso, desenvolvido pelo desenvolvedor Robert Torres.</p>
	 <br />
	 <strong>CRF-SP</strong>
	 <p>Mantia o Gerenciador de Conte&uacute;do da corporativo, em Joomla, e participei da an&aacute;lise e desenvolvimento do Sistema de Assist&ecirc;ncia ao Farmac&ecirc;utico, com o analista desenvolvedor Ricardo Cavalier, com ASP, CSS e Javascript.</p>
	 <br />
	 <strong>Mobly</strong>
	 <p>Primeiro emprego em equipe Scrum, com reposit&oacute;rio de c&oacute;digo privado, BitBucket, e sistema de gerenciamento de vers&atilde;o, GIT em equipe, onde atendia aos tickets de manutenç&otilde;es corretivas e evolutivas, em Zend Framework, ExtJs e CSS no sistema JIRA, sistema perseguidor para planejamento e constru&ccedil;&atilde;o de grandes produtos de software.</p>
	 <br />
	 <strong>OI Wifi</strong>
	 <p>Empresa que mantia evolu&ccedil;&otilde;es e corre&ccedil;&otilde;es do ERP de Hotspots, em Symfony Framework, JQuery, Prototype e CSS, em GIT.</p>
       </div>
    </div>
    <div class="col-sm-2 col-md-3" id="companies" style="margin-left: 15px">
        <div class="title"><strong>Empresas</strong></div>
        <div style="text-align:center">
	    <img src="/images/Eniac.jpg" class="img-thumbnail" width="90" height="90" style="float:left" />
	    <img src="/images/Rhadar.jpg" class="img-thumbnail" width="90" height="90" style="float:left" />
	    <img src="/images/JPOnline.png" class="img-thumbnail" width="90" height="90" style="float:left" />
	    <img src="/images/Proguaru.jpg" class="img-thumbnail" width="90" height="90" style="float:left" />
	    <img src="/images/CRFSP.png" class="img-thumbnail" width="90" height="90" style="float:left" />
	    <img src="/images/Mobly.jpg" class="img-thumbnail" width="90" height="90" style="float:left" />
	    <img src="/images/OIWifi.png" class="img-thumbnail" width="90" height="90" style="float:left;" />
	    <img src="/images/Uello.png" class="img-thumbnail" width="90" height="90" style="float:left;" />
	    <img src="/images/ScanBrazilConsulting.png" class="img-thumbnail" width="90" height="90" style="float:left;" />
	</div>
    </div>
</div>
</body>
<html>
