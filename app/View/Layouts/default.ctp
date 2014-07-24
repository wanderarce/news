<?php
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array('bootstrap.min.css?v=1', 'bootstrap.css?v=1', 'bootstrap.css.map?v=1',
            'bootstrap-theme.css?v=1', 'bootstrap-theme.min.css', 'bootstrap-theme.css.map?v=1')) . PHP_EOL;

        //echo $this->Html->css(array('bootstrap','bootstrap.min','bootstrap-theme','bootstrap-theme.min'));
        ?>
        <?php
        echo $this->Html->script(array('jquery-1.11.1.min.js', 'bootstrap.min', 'bootstrap',
            'ckfinder/ckfinder.js', 'ckeditor/ckeditor.js'));
        ?>
        <script type="text/javascript">
            var ckEditor = CKEDITOR.replace('texto');
        </script>
        <style>
            header{margin: 0px;}
            nav{height: 20px;
                margin-top: -5px !important;
                padding: 0;
            }
            label{float: left !important;
                  width: 15%;
                  margin:3px 2px;
            }
            .form-control{float: left!important;
                          width: 70%!important;
                          margin: 2px;
            }
            input[type="submit"]{border-radius: 5px;
                                 background: transparent;
                                 min-width: 10%;
                                 max-width: 20%;
                                 height: 30px;
                                 font-weight: bold;
                                 margin-top: 5px;
            }

            #conteudo{padding-left: 15px!important;}

            .space{padding: 0;
                   margin-right: 20px !important;
                   padding-top: 20px;
            }
            form>*{margin: 4px 0!important;}
            #news>*{margin: 10px 0 !important;} 
           
         
            .space{padding: 0;
                   border: 1px solid;
                   margin-right: 20px !important;
                   padding-top: 20px;
            }
            input[name="data[News][subtitle]"]{
                height: 50px;
            }
            .ckeditor{
                margin: 12px !important;
                margin: 10px !important;
            }

            .event-list {
                list-style: none;
                font-family: 'Lato', sans-serif;
                margin: 0px;
                padding: 0px;
            }
            .event-list > li {
                background-color: rgb(255, 255, 255);
                box-shadow: 0px 0px 5px rgb(51, 51, 51);
                box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
                padding: 0px;
                margin: 0px 0px 20px;
            }
            .event-list > li > time {
                display: inline-block;
                width: 100%;
                color: rgb(255, 255, 255);
                background-color: rgb(197, 44, 102);
                padding: 5px;
                text-align: center;
                text-transform: uppercase;
            }
            .event-list > li:nth-child(even) > time {
                background-color: rgb(165, 82, 167);
            }
            .event-list > li > time > span {
                display: none;
            }
            .event-list > li > time > .day {
                display: block;
                font-size: 56pt;
                font-weight: 100;
                line-height: 1;
            }
            .event-list > li time > .month {
                display: block;
                font-size: 24pt;
                font-weight: 900;
                line-height: 1;
            }
            .event-list > li > img {
                width: 100%;
            }
            .event-list > li > .info {
                padding-top: 5px;
                text-align: center;
            }
            .event-list > li > .info > .title {
                font-size: 17pt;
                font-weight: 700;
                margin: 0px;
            }
            .event-list > li > .info > .desc {
                font-size: 13pt;
                font-weight: 300;
                margin: 0px;
            }
            .event-list > li > .info > ul,
            .event-list > li > .social > ul {
                display: table;
                list-style: none;
                margin: 10px 0px 0px;
                padding: 0px;
                width: 100%;
                text-align: center;
            }
            .event-list > li > .social > ul {
                margin: 0px;
            }
            .event-list > li > .info > ul > li,
            .event-list > li > .social > ul > li {
                display: table-cell;
                cursor: pointer;
                color: rgb(30, 30, 30);
                font-size: 11pt;
                font-weight: 300;
                padding: 3px 0px;
            }
            .event-list > li > .info > ul > li > a {
                display: block;
                width: 100%;
                color: rgb(30, 30, 30);
                text-decoration: none;
            } 
            .event-list > li > .social > ul > li {    
                padding: 0px;
            }
            .event-list > li > .social > ul > li > a {
                padding: 3px 0px;
            } 
            .event-list > li > .info > ul > li:hover,
            .event-list > li > .social > ul > li:hover {
                color: rgb(30, 30, 30);
                background-color: rgb(200, 200, 200);
            }
            .facebook a,
            .twitter a,
            .google-plus a {
                display: block;
                width: 100%;
                color: rgb(75, 110, 168) !important;
            }
            .twitter a {
                color: rgb(79, 213, 248) !important;
            }
            .google-plus a {
                color: rgb(221, 75, 57) !important;
            }
            .facebook:hover a {
                color: rgb(255, 255, 255) !important;
                background-color: rgb(75, 110, 168) !important;
            }
            .twitter:hover a {
                color: rgb(255, 255, 255) !important;
                background-color: rgb(79, 213, 248) !important;
            }
            .google-plus:hover a {
                color: rgb(255, 255, 255) !important;
                background-color: rgb(221, 75, 57) !important;
            }

            @media (min-width: 768px) {
                .event-list > li {
                    position: relative;
                    display: block;
                    width: 100%;
                    height: 120px;
                    padding: 0px;
                }
                .event-list > li > time,
                .event-list > li > img  {
                    display: inline-block;
                }
                .event-list > li > time,
                .event-list > li > img {
                    width: 120px;
                    float: left;
                }
                .event-list > li > .info {
                    background-color: rgb(245, 245, 245);
                    overflow: hidden;
                }
                .event-list > li > time,
                .event-list > li > img {
                    width: 120px;
                    height: 120px;
                    padding: 0px;
                    margin: 0px;
                }
                .event-list > li > .info {
                    position: relative;
                    height: 120px;
                    text-align: left;
                    padding-right: 40px;
                }	
                .event-list > li > .info > .title, 
                .event-list > li > .info > .desc {
                    padding: 0px 10px;
                }
                .event-list > li > .info > ul {
                    position: absolute;
                    left: 0px;
                    bottom: 0px;
                }
                .event-list > li > .social {
                    position: absolute;
                    top: 0px;
                    right: 0px;
                    display: block;
                    width: 40px;
                }
                .event-list > li > .social > ul {
                    border-left: 1px solid rgb(230, 230, 230);
                }
                .event-list > li > .social > ul > li {			
                    display: block;
                    padding: 0px;
                }
                .event-list > li > .social > ul > li > a {
                    display: block;
                    width: 40px;
                    padding: 10px 0px 9px;
                }
            }

            .nav-mk {
                left:50%;
                margin-left:-150px;
                top:50px;
                position:absolute;
            }
            .nav>li>a:hover, .nav>li>a:focus, .nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
                background:#fff;
            }
            .dropdown {
                background:#fff;
                border:1px solid #ccc;
                border-radius:4px;
                width:300px;    
            }
            .dropdown-menu>li>a {
                color:#428bca;
            }
            .dropdown ul.dropdown-menu {
                border-radius:4px;
                box-shadow:none;
                margin-top:20px;
                width:300px;
            }
            .dropdown ul.dropdown-menu:before {
                content: "";
                border-bottom: 10px solid #fff;
                border-right: 10px solid transparent;
                border-left: 10px solid transparent;
                position: absolute;
                top: -10px;
                right: 16px;
                z-index: 10;
            }
            .dropdown ul.dropdown-menu:after {
                content: "";
                border-bottom: 12px solid #ccc;
                border-right: 12px solid transparent;
                border-left: 12px solid transparent;
                position: absolute;
                top: -12px;
                right: 14px;
                z-index: 9;
            }
            #container{
                //  width: 90%;
              //  width: 90%;
                margin: 0 auto;
            }
            
        </style>

        <script>

        </script>
    </head>
    <body>
        <div id="container">
            <header class="col-md-12  navbar navbar-inverse navbar-static-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">News</a>
                    <div class="navbar-brand navbar-right "> <?php echo $this->Session->read('Auth.User.username') ?></div>
                </div>
            </header>
            <nav>
                <div class="row">
                    <div class="col-md-2">
                        <ul class="nav  nav-stacked">
                            <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
                            <li>
                                <?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index'));
                                ?>
                            </li>

                            <li>
                                <?php echo $this->Html->link('Category', array('controller' => 'categories', 'action' => 'index'));
                                ?>
                            </li>

                            <li>
                                <?php echo $this->Html->link('News', array('controller' => 'news', 'action' => 'index'));
                                ?>
                            </li>

                            <li>
                                <?php echo $this->Html->link('Section', array('controller' => 'sections', 'action' => 'index'));
                                ?>
                            </li>

                        </ul>
                    </div>

                </div>
            </nav>

            <article id="content" class="col-md-10 well">
                <div id="conteudo">
                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>   

                </div>
            </article>



            <footer id="footer">
                <?php
                echo $this->Html->link(
                        $this->Html->image('cake.power.gif', array('alt' => 'Wnder tosco', 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
                );
                ?>
                <p>
                    <?php echo $cakeVersion; ?>
                </p>
            </footer>
        </div>
        <?php echo $this->element('sql_dump'); ?>

    </body>
</html>
