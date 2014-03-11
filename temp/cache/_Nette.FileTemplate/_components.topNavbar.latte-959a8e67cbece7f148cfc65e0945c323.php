<?php //netteCache[01]000383a:2:{s:4:"time";s:21:"0.35298500 1394559231";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:69:"F:\EasyPHP-12.1\www\prace\is\app\templates\components\topNavbar.latte";i:2;i:1394554142;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\EasyPHP-12.1\www\prace\is\app\templates\components\topNavbar.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '8naoci99ut')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>">Informační systém</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li <?php try { $_presenter->link(":Homepage:default"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
 class="active"<?php } ?> ><a href="<?php echo htmlSpecialChars($template->safeurl($_control->link("Homepage:default"))) ?>">Hlavní strana</a></li>
<?php if (!$user->isLoggedIn()) { ?>
            <li <?php try { $_presenter->link(":Sign:login"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
 class="active"<?php } ?>> <a href="<?php echo htmlSpecialChars($template->safeurl($_control->link("Sign:login"))) ?>">Přihlásit se</a> </li>
<?php } if ($user->isLoggedIn()) { ?>
            <li <?php try { $_presenter->link(":Client:clientList"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
 class="active"<?php } ?> ><a href="<?php echo htmlSpecialChars($template->safeurl($_control->link("Client:clientList"))) ?>">Výpis zákazníků</a></li>
            <li <?php try { $_presenter->link(":Web:webList"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
 class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($template->safeurl($_control->link("Web:webList"))) ?>">Výpis webů</a></li>
            <li <?php try { $_presenter->link(":Client:addClient"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
 class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($template->safeurl($_control->link("Client:addClient"))) ?>">Přidat zákazníka</a></li>
            <li <?php try { $_presenter->link(":WebPage:addWeb"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
 class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($template->safeurl($_control->link("Web:addWeb"))) ?>">Přidat web</a></li>
            
<?php } ?>
      </ul>
<?php if ($user->isLoggedIn()) { ?>
        <ul class="nav navbar-nav navbar-right">
            <li> <a>Jste přihlášen jako <?php echo Nette\Templating\Helpers::escapeHtml($user->identity->nick, ENT_NOQUOTES) ?></a></li>
            <li <?php try { $_presenter->link(":Sign:logout"); } catch (Nette\Application\UI\InvalidLinkException $e) {}; if ($_presenter->getLastCreatedRequestFlag("current")) { ?>
 class="active"<?php } ?>><a href="<?php echo htmlSpecialChars($_control->link("sign:out")) ?>
">Odhlásit se</a></li>
        </ul>
<?php } ?>
    </div><!--/.nav-collapse -->
  </div>
</div>
