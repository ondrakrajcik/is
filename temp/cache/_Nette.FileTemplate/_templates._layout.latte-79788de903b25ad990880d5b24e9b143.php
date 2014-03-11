<?php //netteCache[01]000370a:2:{s:4:"time";s:21:"0.96759500 1394559230";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:56:"F:\EasyPHP-12.1\www\prace\is\app\templates\@layout.latte";i:2;i:1394359152;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\EasyPHP-12.1\www\prace\is\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '8oo9rfftu5')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbb47c536f71_title')) { function _lbb47c536f71_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb227b89a78c_head')) { function _lb227b89a78c_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Ondřej Krajčík">
	<title>IS - <?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->striptags(ob_get_clean())  ?></title>
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/css/bootstrap/bootstrap.min.css"> 
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/css/textStyle.css">

        <?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script href="<?php echo htmlSpecialChars($template->safeurl($basePath)) ?>/js/bootstrap/bootstrap.min.js"></script>        
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
        
</head>
<body>
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("components/topNavbar.latte", $template->getParameters(), $_l->templates['8oo9rfftu5'])->render() ?>
    <div class="container" id="content">
        <div class="jumbotron">
<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>
        </div>
    </div>
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("components/footer.latte", $template->getParameters(), $_l->templates['8oo9rfftu5'])->render() ?>
</body>
</html>
