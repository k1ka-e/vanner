<!-- STAT XS TEMPLATE -->
  <body class="nav-md" >
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title" ><i class="fa fa-check-square-o"  style="border:0px;"></i> <span style="font-size:16px;">MILLIY CMS</span></a>
            </div>

            <div class="clearfix"></div>

		
			
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=$path?>/images/<?=view::A_USERS('photo',[])?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Добро пожаловать !</span>
                <h2><?=$_SESSION['user']['surname'].' '.substr($_SESSION['user']['name'],0,1).'.'?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

		
			
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
				
			
				
				
                <ul class="nav side-menu">
				
				<? //echo "<pre>"; print_r(view::A_MENU('all',[])); echo "</pre>";  ?>
				
				<?//$_SESSION['page_st']='main';?>
				<? //echo "<pre>"; print_r($_SESSION['page_cc']); echo "</pre>";  ?>
				
				
				
				
				
				
				<li class="<?=($_SESSION['page_cc']=='main'?'active':'')?>"><a href="?page=main"><i class="fa fa-cogs"></i>Главная</a></li>
				
			
				
				<li class="<?=($_SESSION['page_cc']=='files'?'active':'')?>"><a href="?page=files"><i class="fa fa-files-o"></i>Файлы</a></li>
				
				
				<li class="<?=($_SESSION['page_cc']=='site_zayavki'?'active':'')?>"><a href="?page=site_zayavki"><i class="fa fa-list-ul"></i>Заявки</a></li>
				
				<li class="<?=($_SESSION['page_cc']=='site_projects'?'active':'')?>"><a href="?page=site_projects"><i class="fa fa-newspaper-o"></i>Проекты</a></li>
					
				
				
				<li class="<?=($_SESSION['page_cc']=='site_news'?'active':'')?>"><a href="?page=site_news"><i class="fa-solid fa-blog"></i>Блог</a></li>
				
				
				
				<?// echo "<pre>"; print_r($_SESSION['con_id']); echo "</pre>";  ?>
				<?// echo "<pre>"; print_r($_SESSION['page_cc']); echo "</pre>";  ?>
				<?//echo "<pre>"; print_r(db::arr("SELECT * FROM IBLOCK WHERE MAIN_BLOCK_ID='1'")); echo "</pre>";  ?>
				
				
<?

if ($_SESSION['page_cc']!='main' AND  $_SESSION['page_cc']!='files' AND  $_SESSION['page_cc']!='site_news' AND $_SESSION['page_cc']!='site_zayavki' ){$con_id = $_SESSION['con_id'];$iblock_id = $_SESSION['iblock_id'];}else{$con_id = NULL;	$iblock_id = NULL;}


?>

<?//$con_id=NULL;?>

<?// echo "<pre>"; print_r($_SESSION); echo "</pre>";  ?>
				
<?function cur_page($pagename,$chms){if ($chms!='' AND $pagename==$_SESSION['page_cc']){$rs='current-page';}else{$rs='';}return $rs;}?>
				
				
				
				<?foreach (db::arr("SELECT * FROM mainblock") as $v):?>				
				<?if($con_id==$v['ID']){$chms='display:block;';$li_class='active';}else{$chms='';$li_class='';}?>			
				
				<li class="<?=$li_class;?>"><a><i class="fa fa-edit"></i> <?=$v['NAME']?><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="<?=$chms?>">
                     
					
					 
					 <?/*
					  <li class="<?=cur_page('pg',$chms)?>"><a href="?page">
					  Страници
					  </a></li>
					  */?>
					  
                      <li class="<?=cur_page('menu',$chms)?>"><a href="?page=menu&con_id=<?=$v['ID']?>">
					  Меню
					  </a></li>
					  
                      <li class="<?=cur_page('sections',$chms)?>"><a href="?page=sections&con_id=<?=$v['ID']?>">
					  Разделы
					  </a ></li>                      
					  
					  
					  <li class="<?=cur_page('static_data',$chms)?>"><a href="?page=static_data&con_id=<?=$v['ID']?>">
					  Статические данные
					  </a ></li>
					  
                      <li class="<?=cur_page('create_iblock',$chms)?>"><a href="?page=create_iblock&con_id=<?=$v['ID']?>">
					  Создать Инфоблок
					  </a></li>
                      
					  <?$iblock_data = db::arr("SELECT * FROM iblock WHERE MAIN_BLOCK_ID='$v[ID]' AND TYPE='USER_TABLE'");?>
					  <?if ($iblock_data!='empty'):?>
					  <?foreach  ($iblock_data as $v2):?>
					  <?if ($v2['ID']==$_SESSION['iblock_id']){$cur = cur_page('iblock',$chms);}else{$cur='';}?>
					  <li class="<?=$cur?>"><a href="?page=iblock&con_id=<?=$v['ID']?>&iblock_id=<?=$v2['ID']?>"><?=$v2['NAME']?> ( инфоблок )</a></li>
					  <?endforeach?>
					  <?endif?>
					  <!--
					  <li><a href="pa">Инфоблок 1</a></li>
                      <li><a href="form_upload.html">Инфоблок 2</a></li>
                      <li><a href="form_buttons.html">Инфоблок 3</a></li>
					  -->
					  
					  
					  
                    </ul>
                  </li>
				  
				 <?endforeach?> 
				 
				 
				  
				
				
			

				<?/*
                  <?foreach (view::A_MENU('all',[]) as $v):?>				  
                  <?$cl = view::A_SUBMENU('menu_class',$v['id']);?>					
				  <?if ($v['link']==NULL):?>							  
				  <li class="<?=$cl['li']?>"><a ><i class="<?=$v['icon']?>"></i> <?=$v['name_'.$_SESSION['lang']]?> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="<?=$cl['ul']?>">
					  <?foreach(view::A_SUBMENU('sub',$v['id']) as $v2):?> 
                      <li class="<?=view::A_SUBMENU('cur_page',$v2['id'])?>"><a href="<?=$v2['url']?>" ><?=$v2['name_'.$_SESSION['lang']]?></a></li>
					  <?endforeach?>
                    </ul>
                  </li>				  
				  <?else:?>				 
				  <li class="<?=($_SESSION['page_st']==$v['page_name']?'active':'')?>"><a href="<?=$v['link']?>"><i class="<?=$v['icon']?>"></i><?=$v['name_'.$_SESSION['lang']]?></a></li>
				  <?endif?>
			      <?endforeach?>
				  */?>
				  
			
			
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php?logout=yes">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=$path?>/images/<?=view::A_USERS('photo',[])?>" alt="">
					
					<?=$_SESSION['user']['name'].' '.$_SESSION['user']['surname']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
				  
				   <!--
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
					-->
					
                    <li><a href="index.php?logout=yes"><i class="fa fa-sign-out pull-right"></i>
					Выйти
					</a></li>
                  </ul>
                </li>
                  <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span style="text-transform:uppercase;"><?=$_SESSION['lang']?></span>
                      </a>
                      <ul class="dropdown-menu dropdown-usermenu pull-right">
                          <li><a href="?lang=ru">RU</a></li>
                          <li><a href="?lang=uz">UZ</a></li>
                      </ul>
                  </li>


                <li role="presentation" class="dropdown" id="menu1">
				
                 
                </li>
              </ul>
            </nav>
          </div>
        </div>
		
		
        <!-- /top navigation -->
		        <!-- page content -->
        <div class="right_col" role="main">
		