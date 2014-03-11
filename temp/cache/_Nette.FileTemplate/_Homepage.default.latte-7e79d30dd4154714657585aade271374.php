<?php //netteCache[01]000379a:2:{s:4:"time";s:21:"0.65659700 1394559230";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:65:"F:\EasyPHP-12.1\www\prace\is\app\templates\Homepage\default.latte";i:2;i:1394357714;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\EasyPHP-12.1\www\prace\is\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '62u0xjslya')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5a3d38e4fc_content')) { function _lb5a3d38e4fc_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <section>    
<?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>
    </section>
    <section>
        <span class="text_style0">
            Aktuality:
        </span>
    </section>
<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb1eda497f2c_title')) { function _lb1eda497f2c_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>        <h2> Hlavní strana </h2>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb0985415c4c_head')) { function _lb0985415c4c_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><style>
</style>
<?php
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 