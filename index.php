<?php
defined('_JEXEC') or die;
$this->setGenerator(null); //отключили мета-тег generator
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]> 
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->
<jdoc:include type="head" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link href="templates/<?php echo $this->template ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />

</head>

<body id="page">
    <header>
        <div class="layout">
            <div id="logo">
                <a href="/"><img src="templates/<?php echo $this->template ?>/images/logo.png" alt="Сервисный центр в Днепре"/></a><br />
                <span>Качественный Сервис в Днепре</span>
            </div>
            <div id="geo">
                <img src="templates/<?php echo $this->template ?>/images/geoicon.png" alt="" />
                <span>г. Днепр<br />
                <br />
                <a href="#ModalOpen">Посмотреть на карте</a></span>
            </div>
            <div id="phone">
                <a class="tel" href="tel:+380">093 111 11 11</a>
                <a class="tel" href="tel:+380">066 111 11 11</a>
                <span class="time"> Пн-Пт c 10 до 20<br /> Сб с 10 до 16</span>
            </div>
        </div>
    </header>
    
    <nav id="menu" class="topmenu" onclick="this.className = (this.className == 'topmenu' ? 'mobilemenu' : 'topmenu')">
        <div class="layout">
            <jdoc:include type="modules" name="menu" style="none" />
        </div>
    </nav>
    
    <div id="content">
        <div class="layout">
            <div id="text">
                <?php if($this->countModules('breadcrumbs')):?>
                <div id="breadcrumbs">
                    <jdoc:include type="modules" name="breadcrumbs" style="none" />
                </div>
                <?php endif; ?>
                
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <?php if($this->countModules('aftertext')):?>
                <jdoc:include type="modules" name="aftertext" style="xhtml" />
                <?php endif; ?>
                
            </div>
            <aside id="sidebar">
                <jdoc:include type="modules" name="sidebar" style="xhtml" />
                <div id="fixed"> <!-- блок #fixed будет плавающим -->
                    <?php if($this->countModules('affix')):?>
                    <jdoc:include type="modules" name="affix" style="xhtml" />
                    <?php endif; ?>
                </div>
                
            </aside>
        </div>
    </div>
    
    <footer>
        <div class="layout">
            <div class="box3">
                <jdoc:include type="modules" name="footer" style="xhtml" />
            </div>
            <div class="box3">
                <p>По вопросам сотрудничества пишите на:<br /><a href="mailto:info@serviceshop.com.ua?subject=Вопрос сотрудничества с сайта">info@serviceshop.com.ua</a></p><br />
                <div id="icon">
                <img src="templates/<?php echo $this->template ?>/images/2.png" alt="Гарантия качества" />
                <img src="templates/<?php echo $this->template ?>/images/3.png" alt="Гарантия результата" />
            </div>
            </div>
            <div class="box3">
                <a href="/"><img src="templates/<?php echo $this->template ?>/images/logo.png" alt="Service & Shop" /></a>
                <span>
                    <a class="tel" href="tel:+380">093 111 11 11</a>
                    <a class="tel" href="tel:+380">066 111 11 11</a>
                </span>
                <div class="socbutt">
                    <a href="https://googleplus.com" title="Наш профиль в googleplus" target="_blank"><img src="templates/<?php echo $this->template ?>/images/Google.png" alt="" /></a>
                    <a href="https://facebook.com" title="Наш профиль в Facebook" target="_blank"><img src="templates/<?php echo $this->template ?>/images/FB.png" alt="" /></a>
                </div>
            </div>
        </div>
    </footer>
    <div class="debug">
        <p><?php echo date("Y") ?> Service & Shop</p>
    </div>
    <!-- Кнопка на верх -->
    <div id="toTop" > ^ Наверх</div>
    
    <!-- Модальное окно -->
    <div id="ModalOpen" class="Window">
        <div>
        <a href="#close" title="Закрыть" class="close">X</a>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1870.793292122526!2d35.05097490931603!3d48.46226144818175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2dc5e34cb33%3A0x9006daebec35abcc!2z0LLRg9C70LjRhtGPINCR0LDRgNC40LrQsNC00L3QsCwgMSwg0JTQvdGW0L_RgNC-zIEsINCU0L3RltC_0YDQvtC_0LXRgtGA0L7QstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCDQo9C60YDQsNC40L3QsCwgNDkwMDA!5e0!3m2!1sru!2s!4v1500407108993" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
<script type="text/javascript">
jQuery(function() {
jQuery(window).scroll(function() {
if(jQuery(this).scrollTop() != 0) {
jQuery('#toTop').fadeIn();
} else {
jQuery('#toTop').fadeOut();
}
});
jQuery('#toTop').click(function() {
jQuery('body,html').animate({scrollTop:0},800);
});
});
</script>

<script type="text/javascript">
jQuery(function() {
var offset = jQuery("#fixed").offset();
var topPadding = 10;
jQuery(window).scroll(function() {
if (jQuery(window).scrollTop() > offset.top) {
jQuery("#fixed").stop().animate({marginTop: jQuery(window).scrollTop() - offset.top + topPadding});
}
else {jQuery("#fixed").stop().animate({marginTop: 0});};});
});
</script>        
</body>
</html>
